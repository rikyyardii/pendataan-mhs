<?php
class Login extends CI_Controller{

  function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
  }
  
  function index()
  {
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');
  
    if ($this->form_validation->run() == false) {
      $data['title'] = 'login Page';
      $this->load->view('templates/login_header', $data);
      $this->load->view('login_view');
      $this->load->view('templates/login_footer');
    } else {
      $this->_login();
    }
  }

  private function _login()
  {
    $email = $this->input->post('email');
    $password = $this->input->post('password');

    $user = $this->db->get_where('user', ['email' => $email])->row_array();
    
    if($user){
      if($user['is_active'] == 1) {
        if(password_verify($password, $user['password'])) {
            $data = [
              'email' => $user['email'],
              'role_id' => $user['role_id']
            ];
            $this->session->set_userdata($data);
            redirect('Dashboard');
        } else {
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
          redirect('login');
        }

      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email ini belum diaktivasi</div>');
        redirect('login');
      }
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email tidak ditemukan</div>');
      redirect('login');
    }
  }
  
  function registration(){
    $this->form_validation->set_rules('name', 'Name', 'required|trim');
    $this->form_validation->set_rules('email', 'email', 'required|trim|valid_email|is_unique[user.email]', 
    [
      'is_unique' => 'This Email has Already Used!'
    ]);
    $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', 
    [
      'matches' => 'Password not match!',
      'min_length' => 'Password too short!'
    ]);
    $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');


    if ($this->form_validation->run() == false) {
      $this->load->view('templates/login_header');
      $this->load->view('registration_view');
      $this->load->view('templates/login_footer');
    } else {
      $data = [
        'name' => htmlspecialchars($this->input->post('name', true)),
        'email' => htmlspecialchars($this->input->post('email', true)),
        'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
        'role_id' => 2,
        'is_active' => 1,
        'date_created' => time()
      ];

      $this->db->insert('user', $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun Berhasil Dibuat. SIlahkan Login</div>');
      redirect('login');

    }
  }

  function logout() 
  {
    $this->session->unset_userdata('email');
    $this->session->unset_userdata('role_id');

    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Logout</div>');
    redirect('login');
  }

}