<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cbook extends CI_Controller{
  
  
  public function index()
  {
    $this->load->view('book.php');
  }


}
