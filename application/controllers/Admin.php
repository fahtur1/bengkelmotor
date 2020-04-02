<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index()
    {
        $data = [
            'users' => $this->User_model->getAllUser()
        ];

        $this->load->view('templates/admin_header');
        $this->load->view('templates/admin_sidebar');
        $this->load->view('admin/list_user', $data);
        $this->load->view('templates/admin_footer');
    }

    public function edit($id = null)
    {
        if ($this->input->post()) {
            $data = [
                'id' => $this->input->post('id'),
                'nama' => $this->input->post('name'),
            ];
            if ($this->User_model->editUser($data) > 0) {
                redirect('/admin');
            } else {
                echo 'gagal';
            }
        } else {
            $data = [
                'user' => null
            ];

            if ($id != null) {
                $data = [
                    'user' => $this->User_model->getUserById($id)
                ];
            }
            $this->load->view('templates/admin_header');
            $this->load->view('templates/admin_sidebar');
            $this->load->view('admin/edit_user', $data);
            $this->load->view('templates/admin_footer');
        }
    }

    public function delete($id = null)
    {
        if ($id == null) {
            redirect('/admin');
        } else {
            $this->User_model->deleteUser($id);
            redirect('/admin');
        }
    }
}
