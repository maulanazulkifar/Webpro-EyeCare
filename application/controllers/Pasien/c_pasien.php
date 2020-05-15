<?php
class C_pasien extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('email')=="") {
			redirect('auth');
		}
		$this->load->helper('text');
		$this->load->model('dokter_model');
	}
	public function index() {
		$data['email'] = $this->session->userdata('email');
		$this->load->view('pasien/landing-page-user', $data);
	}

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('auth');
	}


	public function book()
  	{
   		$this->load->view('pasien/book');
  	}

  	public function janji()
  	{
  		$data['dokter'] = $this->dokter_model->tampil_data()->result();
   		$this->load->view('pasien/form-janji',$data);
  	}

  	public function tentang()
  	{
   		$this->load->view('pasien/tentang');
  	}

  	public function layanan()
  	{
   		$this->load->view('pasien/layanan');
  	}

  	public function faq()
  	{
   		$this->load->view('pasien/faq');
  	}


}
?>