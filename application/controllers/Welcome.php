<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('welcome_message');
	}

	function proses_upload(){

        $config['upload_path']   = FCPATH.'/upload-foto/';
        $config['allowed_types'] = 'gif|jpg|png|ico';
        $this->load->library('upload',$config);

        $no = $this->db->query("SELECT idalbum FROM album")->num_rows();
        if($this->upload->do_upload('userfile')){
        	$idalbum= $no++;
        	$gambar=$this->upload->data('file_name');

        	$this->db->insert('gambar',array('idalbum'=>$idalbum,'gambar'=>$gambar));
        	$this->db->insert('album',array('idalbum' =>$idalbum));
        }


	}
}
