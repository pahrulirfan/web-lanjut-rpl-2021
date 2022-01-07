<?php

class Siswa extends CI_Model
{
	public function semuadata()
	{
		return $this->db->get('siswa')->result();
	}

	public function simpan_ke_database($data_input)
	{
		$this->db->insert('siswa', $data_input);
	}

	public function hapus_data($id)
	{
		$this->db->delete('siswa', ['id' => $id]);
	}

	public function satu_data($id)
	{
		return $this->db->where(['id' => $id])->get('siswa')->row_object();
	}
}
