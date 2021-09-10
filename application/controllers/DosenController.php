<?php
class DosenController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('DosenModel');
        if ($this->session->userdata('status') != 'logedIn') {
            redirect(base_url("AuthController"));
        }
    }

    public function index()
    {
        $data['judul'] = 'Lecturer Page';
        $data['controller'] = 'DosenController';
        $data['header'] = 'Dosen';
        $data['dosen'] = $this->DosenModel->getAllDosen();
        $this->load->view('templates/header', $data);
        $this->load->view('dosen/index', $data);
        $this->load->view('templates/footer');
    }

    public function formInsert()
    {
        $data['judul'] = 'Lecturer Page';
        $data['controller'] = 'DosenController';
        $data['header'] = 'Dosen';
        $this->load->view('templates/header', $data);
        $this->load->view('dosen/formTambah');
        $this->load->view('templates/footer');
    }

    public function insertData()
    {
        $this->DosenModel->insertData();
        redirect(base_url("DosenController"));
    }

    public function formEdit($nip)
    {
        $data['judul'] = 'Lecturer Page';
        $data['controller'] = 'DosenController';
        $data['header'] = 'Dosen';
        $data['edit'] = $this->db->get_where('tb_dosen', array('nip' => $nip))->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('dosen/formEdit');
        $this->load->view('templates/footer');
    }

    public function editData()
    {
        $this->DosenModel->editData();
        redirect(base_url("DosenController"));
    }

    public function hapus($nip)
    {
        $cekJadwal = $this->db->get_where('tb_jadwal', array('nip' => $nip))->result_array();
        if ($cekJadwal) {
            redirect(base_url("DosenController"));
        } else {
            $cekPengampuh = $this->db->get_where('tb_pengampuh', array('nip' => $nip))->result_array();
            if ($cekPengampuh) {
                redirect(base_url("DosenController"));
            } else {
                $this->db->delete('tb_dosen', array('nip' => $nip));
                redirect(base_url("DosenController"));
            }
        }
    }
}
