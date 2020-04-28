<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Clogin extends CI_Controller{
  
	function __construct(){
		parent::__construct();		
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function login(){
    if(isset($_POST['submit'])){
      //proses Login
      $email = $this->input->post('email');
      $password = $this->input->post('password');
      $hasilvalidasi = $this->User->login($email,$password);

      //login berhasil
      if($hasilvalidasi == 1){
        $this->session->set_userdata(array('status_login'=>'oke'));
        $user = $this->User->getUser($email);
        //login ke page berdasarkan role
        if($user->role == 'admin'){
          redirect('Admin/index');
        }else if($user->role == 'pasien'){
          redirect('Tampil/index');
        }
      //login gagal
      }else{
        $this->load->view('login/LoginError');
      }
    }
  }

  public function logout(){
    $this->session->sess_destroy();
    redirect('Clogin/index');
  }

}
