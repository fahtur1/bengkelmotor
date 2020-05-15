<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}

	public function index()
	{
		if ($this->input->post()) {
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$user = $this->User_model->login($email);

			if ($user) {
				if (password_verify($password, $user['password'])) {
					$session['id'] = $user['id'];
					$this->session->set_userdata($session);
					redirect('admin');
				} else {
					echo "Password Salah";
				}
			} else {
				echo "User tidak ada";
			}
		} else {
			$this->load->view('login');
		}
	}

	public function register()
	{
		if ($this->input->post()) {
			$data = [
				"nama" => $this->input->post("name"),
				"email" => $this->input->post("email"),
				"password" => password_hash($this->input->post("password"), PASSWORD_DEFAULT)
			];
			$this->User_model->insert($data);
			redirect('/');
		} else {
			$this->load->view('register');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('id');
		redirect('/');
	}
}
