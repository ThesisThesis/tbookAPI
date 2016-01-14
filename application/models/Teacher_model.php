<?php

class Teacher_model extends CI_Model {
	
	
	public function __construct() {

	}


	function loginAcc($username, $password){
		$this->db->select('*');
		$this->db->from('tblteacher');
		$this->db->where('tchrusername', $username);
		$this->db->where('tchrpassword', sha1($password . HASH_KEY));
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->result();	
		// $this->db->where('tchrusername', $username);
		// $this->db->where('tchrpassword', $password);
		// $q = $this->db->get("tblteacher");
		// return $q->num_rows();

	}

	function addUser($user){
		$this->db->insert('tblteacher', $user);
	}
	
	function ClassAdd($class){
		$this->db->insert('tblclassroom', $class);
	}

} 

?>