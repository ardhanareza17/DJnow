<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{

  public function index() 
  {
    $data['title'] = 'Dashboard';
    //ambil data user dari db
    $data['admin'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
    //$data['user'] = $this->db->get_where('user', ['username !=',  $this->session->userdata('username')])->result_array();
    $data['user'] = $this->db->query("SELECT * FROM user")->result_array();
    $data['postingan'] = $this->db->query("SELECT * FROM postingan")->result_array();
    $data['kategori'] = $this->db->query("SELECT * FROM kategori_postingan")->result_array();
    //ini nanti diisi sama tampilan fix homepage, di awah ini cuma ngetes doang
    $this->load->view('admin/index', $data);
    //ini nanti diisi sama tampilan fix homepage, di awah ini cuma ngetes doang
    //print_r($data['user']);
  }



  public function tabel_pengguna()
  {
    $data['title'] = 'Data Pengguna';
    //ambil data user dari db
    $data['admin'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
    //$data['user'] = $this->db->get_where('user', ['username !=',  $this->session->userdata('username')])->result_array();
    $data['user'] = $this->db->query("SELECT * FROM user")->result_array();
    $data['postingan'] = $this->db->query("SELECT * FROM postingan")->result_array();
    $data['kategori'] = $this->db->query("SELECT * FROM kategori_postingan")->result_array();
    $this->load->view('admin/tabel_pengguna', $data);
  }
  

  public function tabel_unggahan()
  {
    $data['title'] = 'Data Unggahan';
    //ambil data user dari db
    $data['admin'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
    //$data['user'] = $this->db->get_where('user', ['username !=',  $this->session->userdata('username')])->result_array();
    $data['user'] = $this->db->query("SELECT * FROM user")->result_array();
    $data['postingan'] = $this->db->query("SELECT * FROM postingan")->result_array();
    $data['kategori'] = $this->db->query("SELECT * FROM kategori_postingan")->result_array();
    $this->load->view('admin/tabel_unggahan', $data);
  }
  


  public function kategori()
  {
    $data['title'] = 'Kategori';
    //ambil data user dari db
    $data['admin'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
    //$data['user'] = $this->db->get_where('user', ['username !=',  $this->session->userdata('username')])->result_array();
    $data['user'] = $this->db->query("SELECT * FROM user")->result_array();
    $data['postingan'] = $this->db->query("SELECT * FROM postingan")->result_array();
    $data['kategori'] = $this->db->query("SELECT * FROM kategori_postingan")->result_array();
    $this->load->view('admin/kategori', $data);
  }


  public function hapus()
  {
    $id_postingan = $this->input->post('id_postingan');
    $this->db->where('id_postingan', $id_postingan);
    $this->db->delete('notifikasi');
    
    $this->db->where('id_postingan', $id_postingan);
    $this->db->delete('suka');
    
    $this->db->where('id_postingan', $id_postingan);
    $this->db->delete('komentar');

    $this->db->where('id', $id_postingan);
    $this->db->delete('postingan');

    redirect("Admin/tabel_unggahan");

  }
  
}