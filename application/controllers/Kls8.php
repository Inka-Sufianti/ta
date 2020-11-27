<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kls8 extends CI_Controller {

  public function __construct()
  {

  	parent::__construct();
    $this->load->model('kelas_delapan');
  }

  public function index()
  {
  	$x['data']=$this->kelas_delapan->show_nilai8();

  	$this->load->view('kelasdelapan',$x);
  }
}
