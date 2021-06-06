<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{

  
  public function index() 
  {
    $data['title'] = 'Home';
    //ambil data user dari db
    $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
    //ini nanti diisi sama tampilan fix homepage, di awah ini cuma ngetes doang
    $this->load->view('user/index', $data);
  }
  
  
  
  public function profile()
  {
    $data['title'] = 'Profile';
    //ambil data user dari db
    $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
    
    $data['postingan'] = $this->db->get_where('postingan', ['username' => $this->session->userdata('username')])->result_array();
    //ini nanti diisi sama tampilan fix homepage, di awah ini cuma ngetes doang
    $this->load->view('user/profile', $data);
    //print_r($data);
  }

  
  public function edit()
  {
    $data['title'] = 'Edit Profile';
    //ambil data user dari db
    $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
    //ini nanti diisi sama tampilan fix homepage, di awah ini cuma ngetes doang
    $this->load->view('user/edit', $data);
  }
  


}