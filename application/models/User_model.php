<?php

class User_model extends CI_Model
{
    public function getAllUser()
    {
        return $this->db->get('tb_user')->result_array();
    }

    public function checkUser($user, $pass)
    {
        $data = array(
            'username' => $user,
            'password' => md5($pass)
        );
        return $this->db->get_where('tb_user', $data);
    }
}
