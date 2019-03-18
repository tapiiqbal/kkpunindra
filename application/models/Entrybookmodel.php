<?php

class Entrybookmodel extends CI_MOdel{
	function max_id(){
		$query = $this->db->query("SELECT MAX(ID) as id FROM DATA_BUKU")->result();

		foreach ($query as $row){
       		$id= $row->id;      	 
		}
		return $id;
	}

	function input($table,$data){
		$this->db->insert($table,$data);
	}

	function getAll(){
		$query = $this->db->query('Select * from data_buku');
		return $query->result();
	}
}