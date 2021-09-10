<?php
class MahasiswaController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MahasiswaModel');
        if ($this->session->userdata('status') != 'logedIn') {
            redirect(base_url("AuthController"));
        }
    }

    public function index()
    {
        $data['judul'] = 'College Student Page';
        $data['controller'] = 'MahasiswaController';
        $data['header'] = 'Mahasiswa';
        $data['mahasiswa'] = $this->MahasiswaModel->getAllMahasiswa();
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer');
    }

    public function formTambah()
    {
        $data['kelas'] = $this->db->get('tb_kelas')->result_array();
        $data['judul'] = 'College Student Page';
        $data['controller'] = 'MahasiswaController';
        $data['header'] = 'Mahasiswa';
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/formTambah', $data);
        $this->load->view('templates/footer');
    }

    public function editData()
    {
        $this->MahasiswaModel->tambah();
        redirect(base_url("MahasiswaController"));
    }

    public function formEdit($nim)
    {
        $data['kelas'] = $this->db->get('tb_kelas')->result_array();
        $data['judul'] = 'College Student Page';
        $data['controller'] = 'MahasiswaController';
        $data['header'] = 'Mahasiswa';
        $data['edit'] = $this->db->get_where('tb_mahasiswa', array('nim' => $nim))->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/formEdit', $data);
        $this->load->view('templates/footer');
    }

    public function insertData()
    {
        $this->MahasiswaModel->tambah();
        redirect(base_url("MahasiswaController"));
    }

    public function hapus($nim)
    {
        $this->db->delete('tb_mahasiswa', array('nim' => $nim));
        redirect(base_url("MahasiswaController"));
    }
}
