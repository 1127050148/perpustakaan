<?php
session_start();
class C_admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('auth');
		}
		$this->load->helper('text');
		$this->load->helper(array('form', 'url'));
	}
	public function index() {

		$data['daftar'] = $this->mod_blog->get_all();  
		$data['username'] = $this->session->userdata('username');
		
		
		$this->load->view('admin/index', $data,array('data' =>$data));
	

	}

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('auth');
	}

	 
           function do_buku()
		{
		
			$namabuku = $_POST['namabuku'];
			$detailbuku = $_POST['detailbuku'];
			$data = array(

			'nama_buku' => $namabuku,
			'isi_buku' => $detailbuku
			
			);
			$res = $this->db->insert('buku',$data);
			 $this->session->set_flashdata('berhasil','
			 	<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <strong>Data Berhasil Di Tambahkan
				</div>

			 	');
			redirect('admin/c_admin');
			
		}

	
 		public function edit($id) { 
            $data['judul'] = 'Data siswa [Edit]'; 
            $data['daftar'] = $this->mod_blog->get_edit($id); 
            	$data['username'] = $this->session->userdata('username');
            $this->load->view('admin/edit',$data); 

        } 

        public function proses_edit() { 
            $this->load->model('mod_blog','',TRUE); 
            $this->mod_blog->edit(); 
             $this->session->set_flashdata('update','
			 	<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <strong>Data Berhasil Di Update
				</div>

			 	');
            redirect('admin/c_admin'); 
        }

       public function hapus($id) { 
            $this->load->model('mod_blog','',TRUE); 
            $res = $this->mod_blog->hapus_d($id); 
            
            if ($res <= 1) {
            	 $this->session->set_flashdata('pesan','
				<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <strong>Data Berhasil Di Hapus
				</div>

            	 	');
            	 redirect('admin/c_admin');
            }
        }


         
}
