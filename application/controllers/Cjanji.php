<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cjanji extends CI_Controller{
  
	function __construct(){
		parent::__construct();		
		$this->load->model('M_pasien');
		$this->load->helper('url');
	}
  	function index()
	  	{
	    $this->load->view('form-janji');
	  	}
	  	
	function tambah_aksi(){
		$nama = $this->input->post('nama');
		$usia = $this->input->post('usia');
		$telf = $this->input->post('telf');
		$keluhan = $this->input->post('keluhan');
		$dokter = $this->input->post('dokter');
		$jadwal = $this->input->post('jadwal');
 
		$data = array(
		'nama'=>$nama,
		'usia'=>$usia,
		'telf'=>$telf,
		'keluhan'=>$keluhan,
		'dokter'=>$dokter,
		'jadwal'=>$jadwal
		);
		$this->M_pasien->input_data($data,'pasien');
		echo "<script>alert('Janji Telah Dibuat');history.go(-1);</script>";	
	}
}	
?>
