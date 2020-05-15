<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index() {
		$this->load->view('login');
	}

	public function cek_login() {
		$data = array('email' => $this->input->post('email', TRUE),
						'password' => $this->input->post('password', TRUE)
			);
		$this->load->model('model_user'); // load model_user
		$hasil = $this->model_user->cek_user($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['logged_in'] = 'Sudah Loggin';
				$sess_data['email'] = $sess->email;
				$sess_data['role'] = $sess->role;
				$this->session->set_userdata($sess_data);
			}
			if ($this->session->userdata('role')=='admin') {
				redirect('Admin/c_admin');
			}
			elseif ($this->session->userdata('role')=='pasien') {
				redirect('Pasien/c_pasien');
			}		
		}
		else {
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		}
	}

}

?>