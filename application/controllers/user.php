<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
        $this->load->model('user_model');
		if($this->session->userdata('level') > 0){
			redirect('Auth');
		} 
	}


	public function index()
	{

		$this->load->view('partials/navbar2');
		$this->load->view('partials/header');
		$this->load->view('partials/index');
		$this->load->view('partials/footer');
	}

    public function edit_profile($id_user)
    {
		$this->load->model('user_model');
		$data['admin'] = $this->user_model->getIdUser($id_user);
        $this->load->view('user/edit', $data);
    }

	public function proses_edit()
	{
		$this->user_model->update();
		redirect ('user');	
	}

	public function hapus_user($id_user)
	{
		$this->user_model->hapusUser($id_user);
		redirect ('Auth/logout');
	}


	

	public function berita()
	{

	}

	public function halaman1()
	{
		$this->load->model('user_model');;
		$data['admin'] = $this->user_model->getBerita();
		$this->load->view('partials/navbar2');
		$this->load->view('user/halaman1', $data);
		$this->load->view('partials/footer');
	}

	public function halaman2()
	{
		$this->load->model('user_model');;
		$data['admin'] = $this->user_model->getBerita();
		$this->load->view('partials/navbar2');
		$this->load->view('user/halaman1', $data);
		$this->load->view('partials/footer');
	}
	public function about()
    {
        $this->load->view('user/about_us');
		$this->load->view('partials/footer'); 
    }

	public function contact()
    {
		$this->load->view('partials/navbar2');
        $this->load->view('user/chat_dashboard');
		$this->load->view('partials/footer'); 
    }

	public function tampil_berita()
	{
		$this->load->view('partials/navbar2');
        $this->load->view('user/berita');
		$this->load->view('partials/footer'); 
	}



}	