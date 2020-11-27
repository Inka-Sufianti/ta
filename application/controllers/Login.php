<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('auth');
	}

	public function index()
	{
		$this->load->view('v_login');
	}

	public function proses()
	{
		$nip = $this->input->post('nip');
		$password = $this->input->post('password');
		if ($this->auth->login_user($nip,$password)) {
			redirect('home2');
		}
	}
}
