<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_model extends CI_Model {
    public function getAllUser()
    {
        return $this->db->get_where('user', ['level' => '0'])->result_array(); 
    }

    public function getBerita()
    {
    return $this->db->get('berita')->result_array();
    }

    function get_kategori_byid($id_kategori){
      $hsl=$this->db->query("select * from kategori where id_kategori='id_kategori'");
      return $hsl;
    }
    
    public function getKategori()
    {
    return $this->db->get('kategori')->result_array();
    }

    public function getIdKategori($id_kategori)
    {
        return $this->db->get_where('kategori', ['id_kategori' => $id_kategori])->row_array(); 
    }

    function tambahKategori($data){
      $this->db->insert('kategori', $data);
      return TRUE;
    }
    public function hapusData($id_kategori)
    {
        $this->db->delete('kategori', ['id_kategori' => $id_kategori]);
    }
    public function updateKategori()
        {
            $data = [
                "nama_kategori" => $this->input->post('nama_kategori', true),
            ];
            $this->db->where('id_kategori', $this->input->post('id_kategori'));
            $this->db->update('kategori', $data);
        }
        public function idBerita($id_berita)
        {
            return $this->db->get_where('berita', ['id_berita' => $id_berita])->row_array(); 
        }
    function simpan_tulisan($judul,$isi,$id_kategori,$kategori_nama,$gambar){
		$hsl=$this->db->query("insert into berita(judul,isi,id_kategori,kategori,gambar) values ('$judul','$isi','$id_kategori','$kategori_nama','$gambar')");
		return $hsl;
	}

    function update_berita($id_berita,$judul,$isi,$id_kategori,$kategori_nama,$gambar){
		$hsl=$this->db->query("update berita set judul='$judul',isi='$isi',id_kategori='$id_kategori',kategori='$kategori_nama',gambar='$gambar' where id_berita=$id_berita");
		return $hsl;
	}

    function update_beritas($judul,$isi,$id_kategori,$kategori_nama,$gambar){
		$hsl=$this->db->query("insert into berita(judul,isi,id_kategori,kategori,gambar) values ('$judul','$isi','$id_kategori','$kategori_nama','$gambar')");
		return $hsl;
	}

    public function getAdmin()
    {
        return $this->db->get_where('user', ['level' => '1'])->result_array(); 
    }
    public function getIdAdmin($id_user)
    {
        return $this->db->get_where('user', ['id_user' => $id_user])->row_array(); 
    }

    public function addAdmin()
    {
        $data = [
            "username" => $this->input->post('username', true),
			"email" => $this->input->post('email', true),
            "first_name" => $this->input->post('first_name', true),
            "last_name" => $this->input->post('last_name', true),
            "password" => $this->input->post('password', true),
			"level" => '1'
        ];
        $this->db->insert('user', $data);
    }
    public function updateAdmin()
    {
        $data = [
            "username" => $this->input->post('username', true),
			"email" => $this->input->post('email', true),
            "first_name" => $this->input->post('first_name', true),
            "last_name" => $this->input->post('last_name', true),
            "password" => $this->input->post('password', true),
        ];
        $this->db->where('id_user', $this->input->post('id_user'));
        $this->db->update('user', $data);
    }

    public function hapusAdmin($id_user)
    {
        $this->db->delete('user', ['id_user' => $id_user]);
    }
    
}
