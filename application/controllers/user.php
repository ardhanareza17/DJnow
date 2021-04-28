<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller 
{

  public function index() 
  {
    //ambil data user dari db
    $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
    //ini nanti diisi sama tampilan fix homepage, di awah ini cuma ngetes doang
    echo "Selamat Datang ".$data['user']['nama_lengkap'];
  }




  
}