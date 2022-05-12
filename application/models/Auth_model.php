<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {
    public function cek($username, $password){
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get('user');
	}

	public function register()
    {
        $data = [
            "username" => $this->input->post('username', true),
			"email" => $this->input->post('email', true),
            "first_name" => $this->input->post('first_name', true),
            "last_name" => $this->input->post('last_name', true),
            "password" => $this->input->post('password', true),
			"level" => '0'
        ];
        $this->db->insert('user', $data);
    }
    
}