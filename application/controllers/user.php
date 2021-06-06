<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
  }

  
  public function index() 
  {
    $data['title'] = 'Home';
    //ambil data user dari db
    $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
    
    $data['postingan'] = $this->db->query("SELECT * FROM postingan")->result_array();
    //ini nanti diisi sama tampilan fix homepage, di awah ini cuma ngetes doang
    $this->load->view('user/index', $data);
    //print_r($data);
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



  public function upload()
  {

    $this->form_validation->set_rules('upload_img', 'Pilih Gambar', 'required');

    if($this->form_validation->run() == false){
     redirect('User');
    }
  }
  


}