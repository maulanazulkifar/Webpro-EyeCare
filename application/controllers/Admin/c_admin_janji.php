<?php
class c_admin_janji extends CI_Controller {
  
	public function index() {
		$data['email'] = $this->session->userdata('email');
		$this->load->view('data_janji_admin', $data);
	}
}
?>