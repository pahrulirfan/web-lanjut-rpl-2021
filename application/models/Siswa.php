<?php

class Siswa extends CI_Model
{
	public function semua()
	{
		return $this->db->get('siswa')->result();
	}
}
