<?php
class MataKuliahController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MatakuliahModel');
        if ($this->session->userdata('status') != 'logedIn') {
            redirect(base_url("AuthController"));
        }
    }

    public function index()
    {
        $data['judul'] = 'Courses Page';
        $data['controller'] = 'MataKuliahController';
        $data['header'] = 'Mata Kuliah';
        $data['matkul'] = $this->MatakuliahModel->getAllCourses();
        $this->load->view('templates/header', $data);
        $this->load->view('mata_kuliah/index', $data);
        $this->load->view('templates/footer');
    }

    public function formTambah()
    {
        $data['judul'] = 'Courses Page';
        $data['controller'] = 'MataKuliahController';
        $data['header'] = 'Mata Kuliah';
        $this->load->view('templates/header', $data);
        $this->load->view('mata_kuliah/formTambah', $data);
        $this->load->view('templates/footer');
    }

    public function insertData()
    {
        $this->MatakuliahModel->insertData();
        redirect(base_url("MatakuliahController"));
    }

    public function formEdit($id)
    {
        $data['judul'] = 'Courses Page';
        $data['controller'] = 'MataKuliahController';
        $data['header'] = 'Mata Kuliah';
        $data['mk'] = $this->db->get_where('tb_matakuliah', array('id' => $id))->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('mata_kuliah/formEdit', $data);
        $this->load->view('templates/footer');
    }

    public function editData()
    {
        $this->MatakuliahModel->editData();
        redirect(base_url("MataKuliahController"));
    }

    public function hapus($id)
    {
        $this->db->delete('tb_matakuliah', array('id' => $id));
        redirect(base_url("MataKuliahController"));
    }
}
