<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cregist extends CI_Controller{
  
  function __construct(){
		parent::__construct();		
		$this->load->model('model_user');
		$this->load->helper('url');
	}

  
  public function index()
  {
    $this->load->view('regist.php');
  }

   function regist_aksi(){
  		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$role = 'pasien';
 
		$data = array(
		'nama'=>$nama,
		'email'=>$email,
		'password'=>$password,
		'role'=>$role,

		);
		$this->model_user->input_data($data,'users');
		echo "<script>alert('Akun berhasil dibuat , Silahkan Login');history.go(-2);</script>";
	}

}
