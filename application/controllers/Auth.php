<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function index()
	{
		$this->load->view('partials/navbar1');
		$this->load->view('user/login');
	}

		public function proses(){
			$this->load->model('Auth_model');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
	
			$cek = $this->Auth_model->cek($username, $password);
			if($cek->num_rows() == 1)
			{
				foreach($cek->result() as $data){
					foreach($cek->result() as $data){
						$sess_data['id_user'] = $data->id_user;
						$sess_data['username'] = $data->username;
						$sess_data['nama_profile'] = $data->nama_profile;
						$sess_data['level'] = $data->level;
						$this->session->set_userdata($sess_data);
					}
				}
	
				if($this->session->userdata('level') == '0')
				{
					redirect('user');
				}
				elseif($this->session->userdata('level') == '1')
				{
					redirect('Admin');
				}
			}
			else
			{
				$this->session->set_flashdata('pesan', 'Maaf, kombinasi username dengan password salah.');
				redirect('Auth');
			}
		}
	
	public function register()
	{
		$this->load->view('partials/navbar1');
		$this->load->view('user/register');
	}

	
	function logout()
	{
		$this->session->sess_destroy();
		redirect('welcome');
	}
}
