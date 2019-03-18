<?php

class Officer extends CI_Controller{
	function index(){
		$this->load->view('display/header');
		$this->load->view('table/table_officer');
		$this->load->view('display/footer');
	}
}