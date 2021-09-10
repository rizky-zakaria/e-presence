<?php
class AuthController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        if ($this->session->userdata('status') == 'logedIn') {
            redirect(base_url("DashboardController"));
        }
    }

    public function index()
    {
        $this->load->view('auth/index');
    }

    public function cekUser()
    {
        $user = $this->input->post('username');
        $pass = $this->input->post('password');
        $data = $this->User_model->checkUser($user, $pass)->row_array();
        if ($data) {
            $session = array(
                'username' => $data['username'],
                'password' => $data['password'],
                'role' => $data['role'],
                'nip' => $data['nip'],
                'avatar' => $data['avatar'],
                'status' => 'logedIn'
            );
            $this->session->set_userdata($session);
            redirect(base_url("DashboardController"));
        } else {
            redirect(base_url("AuthController"));
        }
    }
}
