<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

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
					echo "Halo $user[nama]";
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
}
