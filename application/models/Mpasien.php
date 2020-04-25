<?php
class Mpasien extends CI_Model
{
 function tambah_data($data_pasien){
  $this->db->insert('tb_pasien',$data_pasien);
 }
}?>