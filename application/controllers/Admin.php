<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('admin_model');
        $this->load->library('upload');
        if($this->session->userdata('level') < 1){
			redirect('Auth');
		} 
    }

    public function index()
    {
        $this->load->view('admin/admin_sidebar');
        $this->load->view('admin/admin_nav');

    }

    public function tambah_berita()
    {
        $data['admin'] = $this->admin_model->getKategori();
        $this->load->view('admin/admin_sidebar');
        $this->load->view('admin/admin_nav');
        $this->load->view('admin/tambah_berita',$data);

    }

    
    // kategori
    public function kategori()
    {
        $data['admin'] = $this->admin_model->getKategori();
        $this->load->view('admin/admin_sidebar');
        $this->load->view('admin/admin_nav');
        $this->load->view('admin/kategori', $data);

    }

    public function tambahKategori(){
        $data = array(
            'nama_kategori'  => $this->input->post('nama_kategori')
        );
        $this->admin_model->tambahKategori($data);
        redirect('admin/kategori');
    }
    public function formKategori()
    {
        $this->load->view('admin/admin_sidebar');
        $this->load->view('admin/admin_nav');
        $this->load->view('admin/addKategori');

    }

    public function editKategori($id_kategori)
    {
        $data['admin'] = $this->admin_model->getIdKategori($id_kategori);
        $this->load->view('admin/admin_sidebar');
        $this->load->view('admin/admin_nav');
        $this->load->view('admin/editKategori', $data);

    }

    public function prosesEditKategori()
    {
		$this->admin_model->updateKategori();
		redirect ('admin/kategori');
		
    }

    public function hapusKategori($id_kategori)
    {
        $this->admin_model->hapusData($id_kategori);
		redirect ('admin/kategori');
    }
    //

    
    public function inbox()
    {
        $this->load->view('admin/admin_sidebar');
        $this->load->view('admin/admin_nav');
        $this->load->view('admin/inbox');
        $this->load->view('admin/admin_footer');
    }

    public function data_user()
    {
        $data['admin'] = $this->admin_model->getAllUser();
        $this->load->view('admin/admin_sidebar');
        $this->load->view('admin/admin_nav');
        $this->load->view('admin/data_user', $data);

    }

    //berita
    public function berita()
    {
        $data['admin'] = $this->admin_model->getBerita();
        $this->load->view('admin/admin_sidebar');
        $this->load->view('admin/admin_nav');
        $this->load->view('admin/list_berita', $data);

    }
    public function simpan_berita()
    {
        $config['upload_path'] = './assets/img/artikel/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png|bmp';
        $config['encryp_name'] = TRUE;

        $this->upload->initialize($config);
        if(!empty($_FILES['filefoto']['name']))
        {
            if ($this->upload->do_upload('filefoto'))
            {
                $gbr = $this->upload->data();
                $config['image_library']='gd2';
                $config['source_image']='./assets/img/artikel/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '60%';
                $config['width']= 840;
                $config['height']= 450;
                $config['new_image']= './assets/img/artikel/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $gambar = $gbr['file_name'];
                $judul = $this->input->post('judul');
                $id_kategori=$this->input->post('kategori');
                $isi=$this->input->post('isi');
                $data=$this->admin_model->get_kategori_byid($id_kategori);
                $q=$data->row_array();
                $kategori_nama=$q['nama_kategori'];
                $this->admin_model->simpan_tulisan($judul,$isi,$id_kategori,$kategori_nama,$gambar);
                redirect('admin/berita');
            } else {
                redirect('admin/berita');
            }
     
        } else {
            redirect('admin/berita');
        }
        }
       
    public function edit_berita($id_berita)
    {
        $data['admin'] = $this->admin_model->idBerita($id_berita);
        $data['admin'] = $this->admin_model->getKategori();
            $this->load->view('admin/admin_sidebar');
            $this->load->view('admin/admin_nav');
            $this->load->view('admin/edit_berita',$data);
    }
    public function proses_edit_berita()
    {
        $config['upload_path'] = './assets/img/artikel/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png|bmp';
        $config['encryp_name'] = TRUE;

        $this->upload->initialize($config);
        if(!empty($_FILES['filefoto']['name']))
        {
        if ($this->upload->do_upload('filefoto'))
        {
            $gbr = $this->upload->data();
            $config['image_library']='gd2';
	        $config['source_image']='./assets/img/artikel/'.$gbr['file_name'];
	        $config['create_thumb']= FALSE;
	        $config['maintain_ratio']= FALSE;
	        $config['quality']= '60%';
	        $config['width']= 840;
	        $config['height']= 450;
	        $config['new_image']= './assets/img/artikel/'.$gbr['file_name'];
	        $this->load->library('image_lib', $config);
	        $this->image_lib->resize();
            $gambar = $gbr['file_name'];
            $judul = $this->input->post('judul');
            $id_kategori=$this->input->post('kategori');
            $isi=$this->input->post('isi');
            $data=$this->admin_model->get_kategori_byid($id_kategori);
            $q=$data->row_array();
            $kategori_nama=$q['nama_kategori'];
			$this->admin_model->update_tulisan($id_berita,$judul,$isi,$id_kategori,$kategori_nama,$gambar);
			redirect('admin/berita');
        } else {
            redirect('admin/berita');
        }
    } else {
        $judul = $this->input->post('judul');
            $id_kategori=$this->input->post('kategori');
            $isi=$this->input->post('isi');
            $data=$this->admin_model->get_kategori_byid($id_kategori);
            $q=$data->row_array();
            $kategori_nama=$q['nama_kategori'];
			$this->admin_model->simpan_tulisan($judul,$isi,$id_kategori,$kategori_nama,$gambar);
			redirect('admin/berita');
    }
 
    }

    public function tampil_admin()
    {
        $data['admin'] = $this->admin_model->getAdmin();
        $this->load->view('admin/admin_sidebar');
        $this->load->view('admin/admin_nav');
        $this->load->view('admin/data_admin', $data);

    }

    public function addAdmin()
    {
        $this->load->view('admin/admin_sidebar');
        $this->load->view('admin/admin_nav');
        $this->load->view('admin/addAdmin');
    }

    public function svAdmin()
		{
			$this->admin_model->addAdmin();
			redirect ('admin/tampil_admin');
		}

    public function editAdmin($id_user)
    {
        $data['admin'] = $this->admin_model->getIdAdmin($id_user);
        $this->load->view('admin/admin_sidebar');
        $this->load->view('admin/admin_nav');
        $this->load->view('admin/editAdmin', $data);

    }

    public function prosesEditAdmin()
    {
		$this->admin_model->updateAdmin();
		redirect ('admin/tampil_admin');
		
    }

    public function hapusAdmin($id_user)
    {
        $this->admin_model->hapusAdmin($id_user);
		redirect ('admin/tampil_admin');
    }

    public function prosesEditUser()
    {
		$this->admin_model->updateAdmin();
		redirect ('admin/data_user');
		
    }

    public function hapusUser($id_user)
    {
        $this->admin_model->hapusAdmin($id_user);
		redirect ('admin/data_user');
    }

}