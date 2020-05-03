<?php
class C_admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('email')=="") {
			redirect('auth');
		}
		$this->load->helper('text');
	}
	public function index() {
		$data['email'] = $this->session->userdata('email');
		$this->load->view('landing-page-admin', $data);
	}

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('auth');
	}
}
?>