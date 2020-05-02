<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class FAQ extends CI_Controller{
  
  
  public function index()
  {
    $this->load->view('faq.php');
  }


}