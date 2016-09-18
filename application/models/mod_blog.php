<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Mod_blog extends CI_Model {

		public function get_all(){
		$data =  $this->db->query(' select * from buku');
		 return $data->result_array();

		}

		  public function get_edit($id) { 
                $this->db->where('number',$id); 
                $query = $this->db->get('buku'); 
                if($query ->num_rows > 0) 
            return $query; 
            else 
            return null; 
        }

        function edit() { 
            $id = $this->input->post('id'); 
            $data = array ( 
            'nama_buku' => $this->input->post('namabuku'), 
            'isi_buku' => $this->input->post('detailbuku') 
            
            ); 
            $this->db->where('number',$id); 
            $this->db->update('buku',$data); 
        }

       public function hapus_d($id){ 
            $this->db->where('number',$id); 
            $this->db->delete('buku'); 
        } 

        public function get_download(){
            $this->db->where('number',$id);  //query sql
            $query = $this->db->get('buku');  // get sql

        }
		
        
	}

?>  
