<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';

class MyApi extends REST_Controller {

// len change sa data dadto sa application/config/database.php kai ang among database ang gigamit ana 

	public function __construct() {
		// need jud nia promise copy paste lang ang whole __construct()!!
		// cors accept all incoming data from any api request
		header('Access-Control-Allow-Origin: *');
    	header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
    	header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    	$method = $_SERVER['REQUEST_METHOD'];
    	if($method === "OPTIONS") {
        	die();
    	}
		
		parent::__construct();
		$this->load->library('hasher');
	}

	


	// public function testPost_post() {
			
	// 	$myData = $this->post( "testData" ); // kong unsa ang key( or name sa object) nga gi gamit. testData ang gamiton 
	// 	// again mag insert sa database before $this->response(); check ang ugan nga controller kai working na naa
	// 	$reply = "Server Received: " . $myData;
	// 	$this->response($reply, 200); // e return nato ang na receive nga data
	// }

	public function login_post() 
	{	
		$username = $this->post( "username" );
		$password = $this->post("password");
		//$reply = "Username: " . $username . "\n". "Password: " . $password;
		$reply = $this->Teacher_model->loginAcc($username, $password);
		if($reply)
			{
				$this->session->set_userdata( array(
					                    'id' => $query[0]->tchrID,
					                    'username' => $query[0]->tchrusername,
					                    'firstname' => $query[0]->tchrFName,
					                    'middlename' => $query[0]->tchrMName,
										'lastname' => $query[0]->tchrLName,
					                    'is_logged_in' => true,
                						));
				$this->response($reply, 200);
			}	
	}	


	public function register_post()
	{
		//$reply ="yeah bayby";
		$this->load->helper('security');		
		$username = $this->post('username');
		$password = $this->post('password');
		$fname = $this->post('firstname');
		$mname = $this->post('middlename');
		$lname = $this->post('lastname');
		$email = $this->post('email');
		$user = array (
						'tchrusername' => $username,
						'tchrpassword' => sha1($password . HASH_KEY),
						'tchrFName' => $fname,
						'tchrMName' => $mname,
						'tchrLName' => $lname,
						'tchremail' => $email
						);

		$reply = $this->Teacher_model->addUser($user);
		//$reply = "Username: " . $username . "\n". "Password: " . $password . "Name: " . $fname;
		$this->response($reply, 200);
	}

	public function addClass_post()
	{
		//$reply = "hello";
		$section = $this->post('section');
		$subject = $this->post('subject');
		$schedule = $this->post('schedule');
		$sy = $this->post('sy');
		//$reply = "section: " . $section . "\n". "subject: " . $subject . "schedule " . $schedule. $sy;
		
		$class= array (
						'classSection' => $section,
						'classSchedule'=> $schedule,
						'classSubject' => $subject,
						'classSY'	   => $sy
						
					);
		$reply= $this->Teacher_model->ClassAdd($class);
		$this->response($reply, 200);

	}

}
