<?php
#
#	This server side app is made by Axel Ray P. Cordova & Jebb Matthew P. Luza.
#	
#
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';

class ProfilerApi extends REST_Controller {



	public function __construct( ) {
		// cors accept all incoming data from any api request
		header('Access-Control-Allow-Origin: *');
    	header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
    	header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    	$method = $_SERVER['REQUEST_METHOD'];
    	if($method === "OPTIONS") {
        	die();
    	}
		
		parent::__construct();
	}


	public function allres_get() {

		$data = $this->Profiler_model->get_res();
		$this->response($data);
	}


	public function testCon_get() {
		$data = array("Response" => "SERVER TEST SUCCESS!");
		$this->response($data);
	}

	
	public function newHouse_post()
	{
		$apiData = array();
		if($this->post( "a1_entrypass" ) == true) $apiData["a1_entrypass"] =  $this->post( "a1_entrypass" );
		if($this->post( "a1_certificate" ) == true) $apiData["a1_certificate"] =  $this->post( "a1_certificate" );
		if($this->post( "blocknum" ) == true) $apiData["blocknum"] =  $this->post( "blocknum" );
		if($this->post( "lotnum" ) == true) $apiData["lotnum"] =  $this->post( "lotnum" );
		if($this->post( "housenum" ) == true) $apiData["housenum"] =  $this->post( "housenum" );
		if($this->post( "buildingnum" ) == true) $apiData["buildingnum"] =  $this->post( "buildingnum" );
		if($this->post( "placeoforigin" ) == true) $apiData["placeoforigin"] =  $this->post( "placeoforigin" );
		if($this->post( "reason" ) == true) $apiData["reason"] =  $this->post( "reason" );
		if($this->post( "house_alteration" ) == true) $apiData["house_alteration"] =  $this->post( "house_alteration" );
		if($this->post( "type_of_alterations" ) == true) $apiData["type_of_alterations"] =  $this->post( "type_of_alterations" );
		if($this->post( "water_source" ) == true) $apiData["water_source"] =  $this->post( "water_source" );
		if($this->post( "electricity" ) == true) $apiData["electricity"] =  $this->post( "electricity" );
		if($this->post( "amenities" ) == true) $apiData["amenities"] =  $this->post( "amenities" );
		if($this->post( "vehicles" ) == true) $apiData["vehicles"] =  $this->post( "vehicles" );
		if($this->post( "f1" ) == true) $apiData["f1"] =  $this->post( "f1" );
		if($this->post( "details" ) == true) $apiData["details"] =  $this->post( "details" );
		if($this->post( "i1date" ) == true) $apiData["i1date"] =  $this->post( "i1date" );
		if($this->post( "remarks" ) == true) $apiData["remarks"] =  $this->post( "remarks" );
		if($this->post( "status" ) == true) $apiData["status"] =  $this->post( "status" );
		if($this->post( "addres" ) == true) $apiData["addres"] =  $this->post( "addres" );
		if($this->post( "date_of_interview" ) == true) $apiData["date_of_interview"] =  $this->post( "date_of_interview" );
		if($this->post( "remarks2" ) == true) $apiData["remarks2"] =  $this->post( "remarks2" );
		if($this->post( "otherhouse" ) == true) $apiData["otherhouse"] =  $this->post( "otherhouse" );
		if($this->post( "otherhouseplace" ) == true) $apiData["otherhouseplace"] =  $this->post( "otherhouseplace" );
		if($this->post( "familycount" ) == true) $apiData["familycount"] =  $this->post( "familycount" );
		
		$data = $this->Profiler_model->add_house( $apiData );
		$this->response($data, 200);
	}



	public function newHouseMember_post()
	{
		
		$apiData = array();
		if($this->post( "house_id" ) == true) $apiData["house_id"] =  $this->post( "house_id" );
		if($this->post( "fname" ) == true) $apiData["fname"] =  $this->post( "fname" );
		if($this->post( "mname" ) == true) $apiData["mname"] =  $this->post( "mname" );
		if($this->post( "lname" ) == true) $apiData["lname"] =  $this->post( "lname" );
		if($this->post( "bdate" ) == true) $apiData["bdate"] =  $this->post( "bdate" );
		if($this->post( "education" ) == true) $apiData["education"] =  $this->post( "education" );
		if($this->post( "income" ) == true) $apiData["income"] =  $this->post( "income" );
		if($this->post( "gender" ) == true) $apiData["gender"] =  $this->post( "gender" );
		if($this->post( "bplace" ) == true) $apiData["bplace"] =  $this->post( "bplace" );
		if($this->post( "maritalstatus" ) == true) $apiData["maritalstatus"] =  $this->post( "maritalstatus" );
		if($this->post( "placeofwork" ) == true) $apiData["placeofwork"] =  $this->post( "placeofwork" );
		if($this->post( "relation" ) == true) $apiData["relation"] =  $this->post( "relation" );
		if($this->post( "disabled" ) == true) $apiData["disabled"] =  $this->post( "disabled" );
		if($this->post( "pregnant" ) == true) $apiData["pregnant"] =  $this->post( "pregnant" );
		if($this->post( "lactating" ) == true) $apiData["lactating"] =  $this->post( "lactating" );
		if($this->post( "seniorcitizen" ) == true) $apiData["seniorcitizen"] =  $this->post( "seniorcitizen" );
		if($this->post( "other_healthstatus" ) == true) $apiData["other_healthstatus"] =  $this->post( "other_healthstatus" );
		if($this->post( "occupation" ) == true) $apiData["occupation"] =  $this->post( "occupation" );
		if($this->post( "status_occupation" ) == true) $apiData["status_occupation"] =  $this->post( "status_occupation" );
		if($this->post( "inactive" ) == true) $apiData["inactive"] =  $this->post( "inactive" );
		if($this->post( "membership" ) == true) $apiData["membership"] =  $this->post( "membership" );
		if($this->post( "skills" ) == true) $apiData["skills"] =  $this->post( "skills" );
		if($this->post( "beneficiary" ) == true) $apiData["beneficiary"] =  $this->post( "beneficiary" );
		
		$rawCode = $this->post("memCode");
		$data = $this->Profiler_model->add_member($apiData, $rawCode);
		$this->response($data, 200);
	}



	public function newService_post()
	{
		// this data will never be null
		$apiData = array(
			"house_id" => $this->post("househ_id"),
			"water" => $this->post("water"),
			"electricity" => $this->post("electricity"),
			"healthcenter" => $this->post("healthcenter"),
			"privateclinic" => $this->post("privateclinic"),
			"healers" => $this->post("healers"),
			"daycare" => $this->post("daycare"),
			"elemschool" => $this->post("elemschool"),
			"highschool" => $this->post("highschool"),
			"market" => $this->post("market"),
			"barangayhall" => $this->post("barangayhall"),
			"policeoutpost" => $this->post("policeoutpost"),
			"garbagecollection" => $this->post("garbagecollection"),
			"facilities" => $this->post("facilities"),
			"transport" => $this->post("transport"),
			"remarks" => $this->post("remarks"),
			"toilet" => $this->post("toilet"),
			);
		
		$data = $this->Profiler_model->add_service($apiData);
		$this->response($data, 200);
	}



	public function newIga_post()
	{

		$apiData = array();
		if($this->post( "house_id" ) == true) $apiData["house_id"] =  $this->post( "house_id" );
		if($this->post( "c1" ) == true) $apiData["c1"] =  $this->post( "c1" );
		if($this->post( "c2" ) == true) $apiData["c2"] =  $this->post( "c2" );
		if($this->post( "c3" ) == true) $apiData["c3"] =  $this->post( "c3" );
		if($this->post( "c4" ) == true) $apiData["c4"] =  $this->post( "c4" );
		if($this->post( "remarks" ) == true) $apiData["remarks"] =  $this->post( "remarks" );
		
		$data = $this->Profiler_model->add_iga($apiData);
		$this->response($data, 200);
	}



	public function newMigration_post()
	{

		$apiData = array();
		if($this->post( "house_id" ) == true) $apiData["house_id"] =  $this->post( "house_id" );
		if($this->post( "hhpattern" ) == true) $apiData["hhpattern"] =  $this->post( "hhpattern" );
		if($this->post( "sppattern" ) == true) $apiData["sppattern"] =  $this->post( "sppattern" );

		$data = $this->Profiler_model->add_migration($apiData);
		$this->response($data, 200);
	}



	public function index_options(){
		die();
	}

}
