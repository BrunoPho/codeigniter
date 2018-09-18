<?php
  
  defined('BASEPATH') OR exit ('no direct script access allowed');
  class Helloworld_model extends CI_Model{

	public function __construct(){

		$this->load->database();
	}

	public function getData(){
		
		//Query 
		$query = $this->db->get('data');
		if($query->num_rows() > 0){

			$result = $query->result_array();
			
			return $result;
		
		}else{

			return false;
		}
	}
}