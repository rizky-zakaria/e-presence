<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

use Restserver\Libraries\REST_Controller;

// Load the Rest Controller library

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class JadwalController extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('JadwalModel');
    }

    public function index_post()
    {
        $nip = $this->post('nip');
        $data = $this->JadwalModel->getJadwalByNip($nip);
        if ($data != null) {
            $this->response([
                'status' => true,
                'message' => 'Jadwal Anda Adalah',
                'data' => $data,
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Anda tidak memiliki jadwal mengajar'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }
}
