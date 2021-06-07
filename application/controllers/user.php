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
  
  
  public function akun_orang()
  {
    $data['title'] = 'Profile';
    $data['aku'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
    //ambil data user dari db
    $data['user'] = $this->db->get_where('user', ['username' => $username])->row_array();
    
    $data['postingan'] = $this->db->get_where('postingan', ['username' =>  $username])->result_array();
  
    $username = $_GET['username'];
    if($username == $this->session->userdata('username') ){
      redirect('User/profile');
    } else {
    //ini nanti diisi sama tampilan fix homepage, di awah ini cuma ngetes doang
    $this->load->view('user/akun_orang', $data);
    //print_r($data);
    }
  }
  
  
  public function edit()
  {
    $data['title'] = 'Edit Profile';
  //ambil data user dari db
    $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
  
    $this->form_validation->set_rules('editpassword', 'Password', 'required|trim', [
      'required' => 'Password harus diisi!'
    ]);
    $this->form_validation->set_rules('editusername', 'Username', 'required|trim', [
      'required' => 'Username tidak boleh kosong!',
    ]);
    $this->form_validation->set_rules('editnama', 'Nama', 'required|trim', [
      'required' => 'Nama tidak boleh kosong!'
    ]);
      
    if($this->form_validation->run() == false){
    //ini nanti diisi sama tampilan fix homepage, di awah ini cuma ngetes doang
      $this->load->view('user/edit', $data);
    } else {

      //cek jika ada gambar yang diupload
      $upload_foto = $_FILES['editfoto']['name'];

      if($upload_foto) {
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']     = '2048';
        $config['upload_path'] = './res/profile/';

        $this->load->library('upload', $config);

        if($this->upload->do_upload('editfoto')){
          $foto_baru = $this->upload->data('file_name');
          $this->db->set('foto', $foto_baru);
          //$this->db->where('username', $username);
          //$this->db->update('user');
        } 
         
      }   


      $nama = $this->input->post('editnama');
      $username = $this->input->post('editusername');

      $this->db->set('nama_lengkap', $nama);
      $this->db->where('username', $username);
      $this->db->update('user');
      
      
      $kontak = $this->input->post('phone');

      $this->db->set('kontak', $kontak);
      $this->db->where('username', $username);
      $this->db->update('user');
      
      
      $bio = $this->input->post('bio');

      $this->db->set('user_bio', $bio);
      $this->db->where('username', $username);
      $this->db->update('user');


      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
      Selamat! Akun anda bershasil diperbarui ^^
    </div>');
      redirect('User/profile');
      
    }
  }



  public function upload()
  {

    $this->form_validation->set_rules('upload_img', 'Pilih Gambar', 'required');

    if($this->form_validation->run() == false){
     redirect('User');
    }
  }
  


}