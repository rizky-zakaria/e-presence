<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

use Restserver\Libraries\REST_Controller;

// Load the Rest Controller library

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class AuthController extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index_post()
    {
        $username = $this->post('username');
        $password = md5($this->post('password'));
        $data = $this->db->query("SELECT * FROM tb_user WHERE username = '$username' AND password = '$password'")->row_array();
        if ($data != null) {
            $this->response([
                'status' => true,
                'message' => 'Berhasil melakukan login',
                'data' => $data,
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Username atau Password Salah'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }
}
