<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function login($email)
    {
        return $this->db->get_where('user', ['email' => $email])->row_array();
    }

    public function insert($data)
    {
        $this->db->insert('user', $data);
    }
}
