<?php

class Clogin extends CI_Controller{
  
  function __construct(){
	parent::__construct();		
	$this->load->model('m_login');
 
	}

  public function index()
  {
    $this->load->view('login.php');
  }

	function aksi_login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$where = array(
			'email' => $email,
			'password' => ($password)
			);
		$cek = $this->m_login->cek_login("users",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'email' => $email,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("Admin.php"));
 
		}else{
			echo "Username dan password salah !";
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}


}