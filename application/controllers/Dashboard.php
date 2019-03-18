<?php

class Dashboard extends CI_Controller{
	function index(){
		$this->load->view('display/header');
		$this->load->view('display/footer');
	}

	function form_entry_book(){
		$this->load->view('display/header');
		$this->load->view('form/form_entry_book');
		$this->load->view('display/footer');
	}

	function form_borrowing_books(){
		$this->load->view('display/header');
		$this->load->view('form/form_borrowing_books');
		$this->load->view('display/footer');
	}
}