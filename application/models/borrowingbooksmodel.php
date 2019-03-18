<?php

class Borrowingbooksmodel extends CI_Model{
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
		$query = $this->db->query('select * from peminjaman_buku');
		return $query->result();
	}
}