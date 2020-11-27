<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home2 extends CI_Controller {


	// function __construct(){
	// 	parent::__construct();

	// 	if ($this->session->userdata('status') != "login") {
	// 		redirect(base_url("loging"));
	// 	}
	// }

	public function index()
	{
		$this->load->view('template');
	}
}
