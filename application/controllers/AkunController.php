<?php
class AkunController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('DosenModel');
        if ($this->session->userdata('status') != 'logedIn') {
            redirect(base_url("AuthController"));
        }
    }

    public function index()
    {
        $data['judul'] = 'Account Page';
        $data['controller'] = 'AkunController';
        $data['header'] = 'Akun';
        $data['result'] = $this->User_model->getAllUser();
        $this->load->view('templates/header', $data);
        $this->load->view('akun/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function formData()
    {
        $data['judul'] = 'Add Account';
        $data['controller'] = 'AkunController';
        $data['header'] = 'Akun';
        $data['result'] = $this->DosenModel->getAllDosen();
        $this->load->view('templates/header', $data);
        $this->load->view('akun/formTambah', $data);
        $this->load->view('templates/footer');
    }

    public function insertData()
    {
        $post = $this->input->post();
        $this->nip = $post['nip'];
        $this->username = $post['username'];
        $this->password = md5($post['password']);
        $this->role = $post['level'];
        $this->db->insert('tb_user', $this);
        redirect(base_url("AkunController"));
    }

    public function hapus($id)
    {
        $this->db->delete('tb_user', array('id' => $id));
        redirect(base_url("AkunController"));
    }

    public function formEdit($id)
    {
        $data['judul'] = 'Add Account';
        $data['controller'] = 'AkunController';
        $data['header'] = 'Akun';
        $data['result'] = $this->DosenModel->getAllDosen();
        $data['edit'] = $this->db->get_where('tb_user', array('id' => $id))->row_array();
        // var_dump($data['edit']);
        // die;
        $this->load->view('templates/header', $data);
        $this->load->view('akun/formEdit', $data);
        $this->load->view('templates/footer');
    }

    public function editData()
    {
        $post = $this->input->post();
        $this->nip = $post['nip'];
        $this->username = $post['username'];
        $id = $post['id'];
        $this->password = md5($post['password']);
        $this->role = $post['level'];
        $this->db->where('id', $id);
        $this->db->update('tb_user', $this);
        redirect(base_url("AkunController"));
    }
}
