<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model {
    public function getIdUser($id_user)
    {
        return $this->db->get_where('user', ['id_user' => $id_user])->row_array(); 
    }
    public function update()
    {
        $data = [
            "first_name" => $this->input->post('username', true),
            "last_name" => $this->input->post('email', true),
            "username" => $this->input->post('username', true),
            "email" => $this->input->post('email', true),
            "password" => $this->input->post('password', true),
        ];
        $this->db->where('id_user', $this->input->post('id_user'));
        $this->db->update('user', $data);
    }
    public function hapusUser($id_user)
    {
        $this->db->delete('user', ['id_user' => $id_user]);
    }
    public function getBerita()
    {
    return $this->db->get('berita')->result_array();
    }
    public function getCount()
    {
        $query = $this->$db->query("SELECT * FROM wisata");
        $total = $query->num_rows();
        return $total;
    }

}
