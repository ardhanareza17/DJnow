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
    $data['kategori'] = $this->db->query("SELECT * FROM kategori_postingan")->result_array();
    $data['postingan'] = $this->db->query("SELECT * FROM postingan")->result_array();
    $data['suka'] = $this->db->get_where('suka', ['username' => $this->session->userdata('username')])->result_array();
    //ini nanti diisi sama tampilan fix homepage, di awah ini cuma ngetes doang
    $this->load->view('user/index', $data);
    //print_r($data);
  }
  
  
  
  public function profile()
  {
    $data['title'] = 'Profile';
    //ambil data user dari db
    $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
    $data['kategori'] = $this->db->query("SELECT * FROM kategori_postingan")->result_array();
    $data['postingan'] = $this->db->get_where('postingan', ['username' => $this->session->userdata('username')])->result_array();
    //ini nanti diisi sama tampilan fix homepage, di awah ini cuma ngetes doang
    $this->load->view('user/profile', $data);
    //print_r($data);
  }
  
  
  public function akun_orang()
  {
    $username = $_GET['username'];
    $data['title'] = 'Profile';
    $data['aku'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
    //ambil data user dari db
    $data['user'] = $this->db->get_where('user', ['username' => $username])->row_array();
    $data['kategori'] = $this->db->query("SELECT * FROM kategori_postingan")->result_array();
    
    $data['postingan'] = $this->db->get_where('postingan', ['username' =>  $username])->result_array();
  
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
  
    //$this->form_validation->set_rules('editpassword', 'Password', 'required|trim', [
    //  'required' => 'Password harus diisi!'
    //]);
   
    
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
    //ambil data user dari db
    $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

    //$this->form_validation->set_rules('upload_img', 'Pilih Gambar', 'required',  [
      //'required' => 'foto tidak boleh kosong!'
    //]);

    //if($this->form_validation->run() == false) {
      //$this->load->view('User/profile', $data);
      //} else {

              //cek jika ada gambar yang diupload
             $upload_img = $_FILES['upload_img']['name'];

            if($upload_img) {
              $config['allowed_types'] = 'gif|jpg|png';
              $config['max_size']     = '2048';
              $config['upload_path'] = './res/postingan/';

              $this->load->library('upload', $config);
        
        
                if($this->upload->do_upload('upload_img')){
                  $foto = $this->upload->data('file_name');
                  $posting = array(
                  'username' => $data['user']['username'],
                  'foto' => $foto,
                  'kategori' => '1');
                  $this->db->insert('postingan', $posting);
                 } else {echo "ga keupload";}
              } else {echo "ga keambil datanya" ;}
      
       //    }
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
      Selamat! Anda berhasil memposting desain anda!!
      </div>');
      redirect('User');
       
    }
  

  public function postingan()
  {
    $data['username'] = $_GET['username'];
    $data['halaman'] = $_GET['page'];
    $postingan_id = $_GET['postingan'];
    $data['title'] = 'Profile';
    //ambil data user dari db
    $data['postingan'] = $this->db->get_where('postingan', ['id' =>  $postingan_id])->row_array();
    $data['user'] = $this->db->get_where('user', ['username' => $data['postingan']['username']])->row_array();
    $data['kategori'] = $this->db->query("SELECT * FROM kategori_postingan")->result_array();
    $data['komentar'] = $this->db->get_where('komentar', ['id_postingan' =>  $postingan_id])->result_array();
    $data['suka'] = $this->db->get_where('suka', ['id_postingan' => $postingan_id])->result_array();
    $this->load->view('user/postingan', $data);
  }


  public function komentar()
  {
    $isi = $this->input->post('komentar');
    $username = $this->session->userdata('username');
    $id_postingan = $_GET['id'];
    $data['halaman'] = $_GET['page'];
    $komen = array(
      'Id_postingan' => $id_postingan,
      'username' => $username,
      'isi' => $isi);
      $this->db->insert('komentar', $komen);
    $data['title'] = 'Profile';
    $data['username'] = $_GET['username'];
    //ambil data user dari db
    $data['postingan'] = $this->db->get_where('postingan', ['id' =>  $id_postingan])->row_array();
    $data['user'] = $this->db->get_where('user', ['username' => $data['postingan']['username']])->row_array();
    $data['kategori'] = $this->db->query("SELECT * FROM kategori_postingan")->result_array();
    $data['komentar'] = $this->db->get_where('komentar', ['id_postingan' =>  $id_postingan])->result_array();
    $data['suka'] = $this->db->get_where('suka', ['id_postingan' => $id_postingan])->result_array();
    $this->load->view('user/postingan', $data);

  }

  public function notifikasi()
  {
    $data['title'] = 'Notifikasi';
    //ambil data user dari db
    $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
    //$data['kategori'] = $this->db->query("SELECT * FROM kategori_postingan")->result_array();
    $data['suka'] = $this->db->query("SELECT * FROM suka")->result_array();
    $data['notifikasi'] = $this->db->query("SELECT * FROM user")->result_array();
    
    //ini nanti diisi sama tampilan fix homepage, di awah ini cuma ngetes doang
    $this->load->view('User/notifikasi', $data);
  }

}