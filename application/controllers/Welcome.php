<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('partials/navbar');
		$this->load->view('partials/header');
		$this->load->view('partials/index');
		$this->load->view('partials/footer');
	}
}
