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
    $data['title'] = 'Login Page';
    $this->load->view('templates/auth_header', $data);
    $this->load->view('auth/login');
    $this->load->view('templates/auth_footer');
  }
  
  public function registration()
  {
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


    if($this->form_validation->run() == false ){

      $this->load->view('templates/auth_header');
      $this->load->view('auth/registration');
      $this->load->view('templates/auth_footer');
    } else {
      $data = [
        'nama_lengkap' => htmlspecialchars($this->input->post('namalengkap', true)),
        'username' => htmlspecialchars($this->input->post('username', true)),
        'email' => htmlspecialchars($this->input->post('email', true)),
        'tanggal_lahir' => htmlspecialchars($this->input->post('datebirth', true)),
        'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
        'kontak' => '',
        'foto' => 'default.jpg',
        'role_id' => 2,
        'is_active' => 1
      ];

      $this->db->insert('user', $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
      Selamat! Akun anda bershasil didaftarkan.. Silahkan Login
    </div>');
      redirect('auth');

    }

  }

}