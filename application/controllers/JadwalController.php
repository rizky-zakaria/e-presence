<?php
class JadwalController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('JadwalModel');
        $this->load->model('DosenModel');
        $this->load->model('MatakuliahModel');
        $this->load->model('ClassModel');
    }

    public function index()
    {
        $data['judul'] = "Schedules";
        $data['controller'] = "JadwalController";
        $data['jadwal'] = $this->JadwalModel->getJadwal();
        $this->load->view('templates/header', $data);
        $this->load->view('jadwal/index', $data);
        $this->load->view('templates/footer');
    }

    public function formInsert()
    {
        $data['judul'] = "Schedules";
        $data['controller'] = "JadwalController";
        $data['dosen'] = $this->DosenModel->getAllDosen();
        $data['matakuliah'] = $this->MatakuliahModel->getAllCourses();
        $data['kelas'] = $this->ClassModel->getClass()->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('jadwal/formTambah', $data);
        $this->load->view('templates/footer');
    }

    public function insertData()
    {
        $this->JadwalModel->insertJadwal();
        redirect(base_url("JadwalController"));
    }

    public function hapus($id)
    {
        $this->db->delete('tb_jadwal', array('id' => $id));
        redirect(base_url("JadwalController"));
    }

    public function formEdit($id)
    {
        $data['judul'] = "Schedules";
        $data['controller'] = "JadwalController";
        $data['dosen'] = $this->DosenModel->getAllDosen();
        $data['matakuliah'] = $this->MatakuliahModel->getAllCourses();
        $data['kelas'] = $this->ClassModel->getClass()->result_array();
        $data['jadwal'] = $this->db->get_where('tb_jadwal', array('id' => $id))->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('jadwal/formEdit', $data);
        $this->load->view('templates/footer');
    }

    public function editData()
    {
        $this->JadwalModel->editJadwal();
        redirect(base_url("JadwalController"));
    }
}
