<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
  }

  public function index() 
  {
    //menambahkan rules agar username dan password pada tampilan login harus diisi
    $this->form_validation->set_rules('username', 'Username', 'trim|required', [
      'required' => 'Username harus diisi!'
    ]);
    $this->form_validation->set_rules('password', 'Password', 'trim|required', [
      'required' => 'Password harus diisi!'
    ]);


    //apabila ada kesalahan saat melanggar rules (tidak mengisi username atau password)
    if($this->form_validation->run() == false) 
    {
      $data['title'] = 'Login Page';
      $this->load->view('templates/auth_header', $data);
      $this->load->view('auth/login');
      $this->load->view('templates/auth_footer');

    //apabila rules tidak dilanggar, masuk ke fungsi login
    } else {
      $this->_login();
    }
  }

//fungsi untuk login
  private function _login() {
    //mengambil data username dan password dari inputan
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $user = $this->db->get_where('user', ['username'=> $username])->row_array();

//cek user ada apa enggak
    if($user){

      //cek user udah aktivasi apa belom
      if($user['is_active'] == 1){

        //cek password bener apa enggak
        if(password_verify($password, $user['password']) ) {
          $data = [
            'username' => $user['username'],
            'role_id' => $user['role_id']
          ];
          $this->session->set_userdata($data);
          if($user['role_id'] == 1){
            redirect('Admin');
          } else {
            redirect('User');
          }
        } 

        //kalo password salah
        else {
          $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
          Password salah!
        </div>');
        redirect('auth');
        }

      } 

      //kalo belum aktivasi
      else {
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
        Akun belum diaktivasi!
      </div>');
      redirect('auth');
      }
    } 
    
    //kalo data user gaada di db
    else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
      Username belum terdaftar!
    </div>');
    redirect('auth');
    }
  }
  

  //fungsi untuk registrasi
  public function registration()
  {
    //rules untuk form registrasi (ada data yang harus diisi, email harus valid, password gaboleh kependekan)
    $this->form_validation->set_rules('namalengkap', 'Nama lengkap', 'required|trim', [
      'required' => 'Nama lengkap harus diisi!'
    ]);
    $this->form_validation->set_rules('username', 'Username', 'required|trim', [
      'email' => 'Username harus diisi!'
    ]);
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
      'required' => 'email harus diisi!',
      'valid_email' => 'Gunakan email yang benar!',
      'is_unique' => 'email sudah pernah digunakan!'
    ]);
    $this->form_validation->set_rules('datebirth', 'Tanggal lahir', 'required', [
      'required' => 'Tanggal lahir harus diisi!'
    ]);
    $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[4]|matches[password2]', [
      'required' => 'Password harus diisi',
      'min_length' => 'Password terlalu pendek',
      'matches' => 'Password tidak sesuai'
    ]);
    $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'required|trim|min_length[4]|matches[password]', [
      'required' => 'Ketik ulang password'
    ]);


    //kalo ngelanggar rules
    if($this->form_validation->run() == false ){

      $this->load->view('templates/auth_header');
      $this->load->view('auth/registration');
      $this->load->view('templates/auth_footer');
    } 
    
    //kalo rules ga dilanggar, ambil data inputan dan masukkin ke variabel $data
    else {
      $data = [
        'nama_lengkap' => htmlspecialchars($this->input->post('namalengkap', true)),
        'username' => htmlspecialchars($this->input->post('username', true)),
        'email' => htmlspecialchars($this->input->post('email', true)),
        'tanggal_lahir' => htmlspecialchars($this->input->post('datebirth', true)),
        'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
        'kontak' => '08xxxxxxxxxx',
        'foto' => 'default.jpg',
        'role_id' => 2,
        'is_active' => 1
      ];

      //abis ambil data, masukkin ke db dan arahkan ke laman login serta tampilkan pernyataan "pendaftaran sukses"
      $this->db->insert('user', $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
      Selamat! Akun anda bershasil didaftarkan.. Silahkan Login
    </div>');
      redirect('auth');
      
    }
    
  }
  
  //fungsi untuk logout
  public function logout()
  {
    //hapus data username dan role_id, serta arahkan ke laman login lagi
    $this->session->unset_userdata('username');
    $this->session->unset_userdata('role_id');
  
    $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
    Kamu berhasil logout.
  </div>');
    redirect('auth');
  }


}