<?php
class C_admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('email')=="") {
			redirect('auth');
		}
		$this->load->model('dokter_model');
		$this->load->model('model_user');
		$this->load->model('M_pasien');
		$this->load->helper('text');
	}
	public function index() {
		$data['dokter'] = $this->dokter_model->tampil_data()->result();
		$this->load->view('admin/landing-page-admin',$data);
	}

	function tambah_dokter(){
		$nama = $this->input->post('nama');
		$jadwal1 = $this->input->post('jadwal1');
		$jadwal2 = $this->input->post('jadwal2');
		$jadwal3 = $this->input->post('jadwal3');
 
		$data = array(
			'nama' => $nama,
			'jadwal1' => $jadwal1,
			'jadwal2' => $jadwal2,
			'jadwal3' => $jadwal3
			);
			$this->dokter_model->input_data($data,'dokter');
			echo "<script>alert('Dokter Berhasil ditambahkan');history.go(-1);</script>";
	}

		function hapus($id_dokter){
			$where = array('id_dokter' => $id_dokter);
			$this->dokter_model->hapus_data($where,'dokter');
			echo "<script>alert('Dokter Berhasil dihapus');history.go(-1);</script>";
	}

		function update($id_dokter){
			$nama = $this->input->post('nama');
			$jadwal1 = $this->input->post('jadwal1');
			$jadwal2 = $this->input->post('jadwal2');
			$jadwal3 = $this->input->post('jadwal3');
 
			$data = array(
				'nama' => $nama,
				'jadwal1' => $jadwal1,
				'jadwal2' => $jadwal2,
				'jadwal3' => $jadwal3
			);
 
			$where = array(
				'id_dokter' => $id_dokter
			);
 
			$this->dokter_model->update_data($where,$data,'dokter');
			echo "<script>alert('Dokter Berhasil di edit');history.go(-1);</script>";
	}

	public function janji()
  	{
  		$data['pasien'] = $this->M_pasien->tampil_data()->result();
   		$this->load->view('Admin/data-janji',$data);
  	}

  	public function data_user()
  	{
  		$data['users'] = $this->model_user->tampil_data()->result();
   		$this->load->view('Admin/data-user',$data);
  	}

  	function tambah_janji(){
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

		function hapus_janji($id_pasien){
			$where = array('id_pasien' => $id_pasien);
			$this->M_pasien->hapus_data($where,'pasien');
			echo "<script>alert('Janji Berhasil dihapus');history.go(-1);</script>";
	}

		function update_janji($id_pasien){
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
 
			$where = array(
				'id_pasien' => $id_pasien
			);
 
			$this->M_pasien->update_data($where,$data,'pasien');
			echo "<script>alert('Janji Berhasil di edit');history.go(-1);</script>";
	}

	function tambah_user(){
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
		echo "<script>alert('User berhasil ditambahkan');history.go(-1);</script>";
	}


		function update_user($user_id){
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$role = 'pasien';
	 
			$data = array(
			'nama'=>$nama,
			'email'=>$email,
			'password'=>$password,
			'role'=>$role

			);
			$where = array(
				'user_id' => $user_id
			);
 
			$this->model_user->update_data($where,$data,'users');
			echo "<script>alert('User Berhasil di edit');history.go(-1);</script>";
	}

	function hapus_user($user_id){
			$where = array('user_id' => $user_id);
			$this->model_user->hapus_data($where,'users');
			echo "<script>alert('User Berhasil dihapus');history.go(-1);</script>";
	}


	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('auth');
	}
}
?>