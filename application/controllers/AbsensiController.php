<?php
class AbsensiController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['judul'] = 'Presence Page';
        $data['controller'] = 'AbsensiController';
        $data['header'] = 'Presence';
        $data['result'] = $this->db->get('tb_kelas')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('absensi/class', $data);
        $this->load->view('templates/footer');
    }

    public function view($id)
    {
        $data['judul'] = 'Presence Page';
        $data['controller'] = 'AbsensiController';
        $data['header'] = 'Presence';
        $data['result'] = $this->db->query("SELECT * FROM tb_hadir JOIN tb_gambar JOIN tb_jadwal JOIN tb_kelas ON tb_hadir.id_gambar = tb_gambar.id AND tb_gambar.id_jadwal = tb_jadwal.id AND tb_jadwal.id_kelas = tb_kelas.id WHERE tb_kelas.id = $id")->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('absensi/index', $data);
        $this->load->view('templates/footer');
    }
}
