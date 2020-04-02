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
        return $this->db->insert('user', $data);
    }

    public function getAllUser()
    {
        return $this->db->get('user')->result_array();
    }

    public function editUser($data)
    {
        $this->db->where('id', $data['id']);
        return $this->db->update('user', $data);
    }

    public function getUserById($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }

    public function deleteUser($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('user');
    }
}
