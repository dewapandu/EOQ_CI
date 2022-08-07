<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('id')) {
			redirect('login');
		}
	}
	public function index()
	{
		$this->load->view('dashboard');
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}
