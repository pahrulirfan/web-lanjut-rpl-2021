<?php

class Backend extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Siswa');
	}

	public function index()
	{
		$data['isi'] = $this->Siswa->semua();

		return $this->load->view('admin/v_index', $data);
	}
}
