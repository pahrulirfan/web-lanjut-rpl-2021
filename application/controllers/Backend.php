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
		$data['isi'] = $this->Siswa->semuadata();

		return $this->load->view('admin/v_index', $data);
	}

	public function tambah()
	{
		return $this->load->view('admin/v_tambah');
	}

	public function proses_tambah()
	{

		$data_input = array(
			'nis' => $this->input->post('txtnis'),
			'nama' => $this->input->post('txtnama'),
			'alamat' => $this->input->post('txtalamat'),
		);

		// var_dump($data_input);
		$this->Siswa->simpan_ke_database($data_input);
		redirect(site_url('backend/index'));
	}

	public function hapus($id)
	{
		// arahkan data ke model Siswa dengan nama fungsi hapus_data
		// $id diambil dari url parameter 
		$this->Siswa->hapus_data($id);

		// kembali ke halaman index setelah data dihapus
		redirect(site_url('backend/index'));
	}

	public function edit($id)
	{
		$data['isi'] = $this->Siswa->satu_data($id);
		
		return $this->load->view('admin/v_edit', $data);
	}
}
