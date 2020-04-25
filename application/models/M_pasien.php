<?php 
 
class M_pasien extends CI_Model{
	function tampil_data(){
		return $this->db->get('pasien');
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}