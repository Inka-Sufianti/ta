<?php 
 
 
class Kls7 extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');
 
	}
 
	function index(){
		$data['kelas7'] = $this->m_data->tampil_data()->result();
		$this->load->view('kelastujuh',$data);
	}
 
	function tambah(){
		$this->load->view('input7');
	}

	function tambah_aksi(){
		$nis = $this->input->post('nis');
		$nama = $this->input->post('nama');
		$mapel = $this->input->post('mapel');
		$tugas = $this->input->post('tugas');
		$uts = $this->input->post('uts');
		$uas = $this->input->post('uas');
		$akhir = $this->input->post('akhir');

		$data = array(
			'nis' => $nis,
			'nama' => $nama,
			'mapel' => $mapel,
			'tugas' => $tugas,
			'uts' => $uts,
			'uas' => $uas,
			'akhir' => $akhir

		);
		$this->m_data->input_data($data,'kelas7');
		redirect('kls7/index');

	}
 
}