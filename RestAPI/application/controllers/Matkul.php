<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matkul extends CI_Controller {
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('matkul/index');
	}

	public function tambah()
	{
		$this->load->helper('url');
		$this->load->view('user/tambah');
	}

	public function ubah()
	{
		$this->load->helper('url');
		$this->load->view('user/ubah');
	}
}

