<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class prodi extends CI_Controller {
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('prodi/v_prodi');
	}
}
