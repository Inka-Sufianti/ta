<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kls9 extends CI_Controller {


	public function __construct()
	{

		parent::__construct();
		$this->load->model('kelas_sembilan');
	}

	public function index()
	{
		$x['data']=$this->kelas_sembilan->show_nilai9();

		$this->load->view('kelassembilan',$x);
	}
}
