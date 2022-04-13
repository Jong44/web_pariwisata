<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

    public function __contruct()
	{
		parent::__contruct();
		if($this->session->userdata('id_user') == null){
			redirect('Welcome');
		} 
	}


	public function index()
	{
		$this->load->view('partials/navbar2');
		$this->load->view('partials/header');
		$this->load->view('partials/index');
		$this->load->view('partials/footer');
	}

    public function edit_profile()
    {
        $this->load->view('user/user');
    }
}