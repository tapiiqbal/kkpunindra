<?php

class Borrowingbooks extends CI_Controller{
	function __construct(){
		parent::__construct();

		$this->load->model('borrowingbooksmodel');
	}

	function index(){
		$this->load->view('display/header');
		$data ['borrowing_buku'] = $this->borrowingbooksmodel->getAll();
		$this->load->view('table/table_borrowing_books',$data);
		$this->load->view('display/footer');
	}

	function form(){
		$this->load->view('display/header');
		$this->load->view('form/form_borrowing_books');
		$this->load->view('display/footer');
	}

	function input(){
		$id = $this->borrowingbooksmodel->max_id()+1;
		$kode_transaksi = $_POST['kode_transaksi'];
		$id_anggota = $_POST['id_anggota'];
		$nama_lengkap = $_POST['nama_lengkap'];
		$tgl_pinjam = $_POST['tgl_pinjam'];
		$tgl_kembali = $_POST['tgl_kembali'];

		$data = array(
			'id' => $id,
			'kode_transaksi' => $kode_transaksi,
			'id_anggota' => $id_anggota,
			'nama_lengkap' => $nama_lengkap,
			'tgl_pinjam' => $tgl_pinjam,
			'tgl_kembali' => $tgl_kembali);
		$this->borrowingbooksmodel->input('peminjaman_buku',$data);
		redirect('borrowingbooks');

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