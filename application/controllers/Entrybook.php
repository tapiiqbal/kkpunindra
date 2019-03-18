<?php

class Entrybook extends CI_Controller{
	function __construct(){
		parent::__construct();

		$this->load->model('entrybookmodel');
	}

	function index(){
		$this->load->view('display/header');
		$data['entry_buku'] = $this->entrybookmodel->getAll();
		$this->load->view('table/table_entry_book',$data);
		$this->load->view('display/footer');
	}

	function form(){
		$this->load->view('display/header');
		$this->load->view('form/form_entry_book');
		$this->load->view('display/footer');
	}

	function input(){
		$id = $this->entrybookmodel->max_id()+1;
		$kode_buku = $_POST['kode_buku'];
		$judul_buku = $_POST['judul_buku'];
		$tahun_buku = $_POST['tahun_buku'];
		$jumlah_buku = $_POST['jumlah_buku'];
		$tgl_masuk = $_POST['tgl_masuk'];

		$data = array (
			'id' => $id,
			'kode_buku' => $kode_buku,
			'judul_buku' => $judul_buku,
			'tahun_buku' => $tahun_buku,
			'jumlah_buku' => $jumlah_buku,
			'tgl_masuk' => $tgl_masuk);
		//print_r($data);
		$this->entrybookmodel->input('data_buku',$data);
		redirect('Entrybook');
	}

	function edit(){
		$this->load->view('display/header');
		$this->load->view('form/form_edit_borrowing_books');
		$this->load->view('display/footer');
	}

	function update(){

	}

	function delete(){

	}
}