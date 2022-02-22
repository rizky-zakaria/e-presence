<?php
class ProfileController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ProfileModel');
        $this->load->model('MatakuliahModel');
        $this->load->model('ClassModel');
        if ($this->session->userdata('status') != 'logedIn') {
            redirect(base_url("AuthController"));
        }
    }

    public function index()
    {
        $data['judul'] = 'Account Page';
        $data['controller'] = 'ProfileController';
        $data['header'] = 'Akun';
        $session = $this->session->userdata('nip');
        $data['profile'] = $this->ProfileModel->getDataProfile($session);
        $data['matakuliah'] = $this->MatakuliahModel->getProfileMatakuliah($session);
        $data['count_mk'] = $this->MatakuliahModel->getCount($session);
        $data['count_kelas'] = $this->ClassModel->getCount($session);
        $this->load->view('templates/header', $data);
        $this->load->view('profile/index', $data);
        $this->load->view('templates/footer');
    }

    public function changePassword()
    {
        $data['judul'] = 'Change Profile';
        $data['controller'] = 'ProfileController';
        $data['header'] = 'Akun';
        $session = $this->session->userdata('nip');
        $data['change'] = $this->db->get_where('tb_user', array('nip' => $session))->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('profile/change', $data);
        $this->load->view('templates/footer');
    }

    public function changesnow()
    {
        $post = $this->input->post();
        $old_pass = $post['old_pass'];
        $new_pass = $post['new_pass'];
        $old = $this->db->get_where('tb_user', array('password' => md5($old_pass)))->row_array();
        if ($old) {
            $this->db->where('nip', $this->session->userdata('nip'));
            $this->db->update('tb_user', array('password' => md5($new_pass)));
            redirect(base_url("ProfileController"));
        } else {
            redirect(base_url("ProfileController"));
        }
    }
}
