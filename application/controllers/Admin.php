<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{

  public function index() 
  {
    //ambil data user dari db
    $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
    //ini nanti diisi sama tampilan fix homepage, di awah ini cuma ngetes doang
    $this->load->view('admin/index', $data);
  }



  public function profile()
  {
    $this->load->view('admin/profile');
  }

  
}