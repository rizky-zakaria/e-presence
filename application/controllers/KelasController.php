<?php
class KelasController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ClassModel');
        if ($this->session->userdata('status') != 'logedIn') {
            redirect(base_url("AuthController"));
        }
    }

    public function index()
    {
        $data['judul'] = 'Class Page';
        $data['controller'] = 'KelasController';
        $data['header'] = 'Kelas';
        $data['kelas'] = $this->ClassModel->getClass()->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('kelas/index', $data);
        $this->load->view('templates/footer');
    }

    public function formTambah()
    {
        $data['judul'] = 'Class Page';
        $data['controller'] = 'KelasController';
        $data['header'] = 'Kelas';
        $this->load->view("templates/header", $data);
        $this->load->view("kelas/formTambah");
        $this->load->view("templates/footer");
    }

    public function insertData()
    {
        $this->ClassModel->insertData();
        redirect(base_url("KelasController"));
    }

    public function hapus($id)
    {
        $this->db->delete('tb_kelas', array('id' => $id));
        redirect(base_url("KelasController"));
    }

    public function formEdit($id)
    {
        $data['judul'] = 'Class Page';
        $data['controller'] = 'KelasController';
        $data['header'] = 'Kelas';
        $data['edit'] = $this->db->get_where('tb_kelas', array('id' => $id))->row_array();
        $this->load->view("templates/header", $data);
        $this->load->view("kelas/formEdit", $data);
        $this->load->view("templates/footer");
    }


    public function editData()
    {
        $this->ClassModel->editData();
        redirect(base_url("KelasController"));
    }
}
