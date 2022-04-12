<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$this->load->view('partials/navbar');
		$this->load->view('user/login');
	}

	public function proses()
	{
		$this->load->model('');
	}
	public function register()
	{
		$this->load->view('partials/navbar');
		$this->load->view('user/register');
	}
}
