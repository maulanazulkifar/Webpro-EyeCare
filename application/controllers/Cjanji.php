<?php

class Cjanji extends CI_Controller{
  
  	function __construct()
		{
			parent::__construct();
			$this->load->model('Mpasien');
		}

  	function index()
	  	{
	    $this->load->view('form-janji');
	  	}

	public function input(){
		$nama = $this->input->post('nama');
		$usia = $this->input->post('usia');
		$telf = $this->input->post('telf');
		$keluhan = $this->input->post('keluhan');
		$dokter = $this->input->post('dokter');
		$jadwal = $this->input->post('jadwal');
		 
		  //------------------------------------------
		 
		$data_buku = array(
		'nama'=>$nama,
		'usia'=>$usia,
		'telf'=>$telf,
		'keluhan'=>$keluhan,
		'dokter'=>$dokter,
		'jadwal'=>$jadwal
		);
		 
		$this->Mpasien->tambah_data($data_pasien);
		redirect('C_buku/index');
		}
}
?>