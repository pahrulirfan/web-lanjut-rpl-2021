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
}
