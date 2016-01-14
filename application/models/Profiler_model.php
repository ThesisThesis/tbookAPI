<?php

class Profiler_model extends CI_Model {
	
	
	public function __construct() {
		$this->tableName  = 'table_household';
		$this->tableName2 = 'table_head';
		$this->tableName3 = 'table_service';
		$this->tableName4 = 'iga';
		$this->tableName5 = 'migration_pattern';
		$this->tableName6 = 'resettlement_area';

	}


	function get_res(){
		
		$q = $this->db->get($this->tableName6);
		return $q->result();
	}
 

	function add_house( $apiData ){

		$q = $this->db->insert($this->tableName, $apiData);
		$insert_id = $this->db->insert_id();
   		return  $insert_id;
	}

	function add_member( $apiData, $rawCode ){

		$q = $this->db->insert($this->tableName2, $apiData);
		$insert_id = $this->db->insert_id();
		// update to insert code
		$rawCode = $rawCode . "" . $insert_id;
		$code = array('code' => $rawCode );
		$this->db->where('headid', $insert_id);
		$this->db->update($this->tableName2, $code);
   		return  $insert_id;
	}

	function add_service( $apiData ){

		$q = $this->db->insert($this->tableName3, $apiData);
		$insert_id = $this->db->insert_id();
   		return  $insert_id;
	}

	function add_iga( $apiData ){

		$q = $this->db->insert($this->tableName4, $apiData);
		$insert_id = $this->db->insert_id();
   		return  $insert_id;
	}

	function add_migration( $apiData ){

		$q = $this->db->insert($this->tableName5, $apiData);
		$insert_id = $this->db->insert_id();
   		return  $insert_id;
	}

	function add_resettlement( $apiData ){

		$q = $this->db->insert($this->tableName6, $apiData);
		$insert_id = $this->db->insert_id();
   		return  $insert_id;
	}

} 

?>