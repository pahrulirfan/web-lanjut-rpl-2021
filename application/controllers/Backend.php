<?php

class Backend extends CI_Controller
{
	public function index()
	{
		return $this->load->view('admin/v_index');
	}
}
