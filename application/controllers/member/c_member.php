<?php
session_start();
class C_member extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('auth');
		}
		$this->load->helper('text');
	}
	
	public function index() {
		$data['list'] = $this->mod_blog->get_all();
		$data['username'] = $this->session->userdata('username');
		$this->load->view('member/index', $data);
		

	}

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('auth');
	}

	public function baca($id) { 

        	$data['username'] = $this->session->userdata('username');   
            $data['list'] = $this->mod_blog->get_edit($id); 
            $this->load->view('member/edit',$data); 

        } 


        public function download(){
        
        $this->load->helper('download'); //jika sudah diaktifkan di autoload, maka tidak perlu di tulis kembali
        $name = $this->uri->segment(3);
		$name = 'buku.pdf';

		$data = file_get_contents("uploads/file_buku.pdf"); // letak file pada aplikasi kita

		force_download($name,$data);
        }
}
?>