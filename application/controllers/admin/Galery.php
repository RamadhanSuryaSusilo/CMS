<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Galery extends CI_Controller {
    public function __construct(){
        parent:: __construct();
		if($this->session->userdata('level')==NULL){
			redirect('auth');
		}
	}
	public function index(){
        $this->db->from('galery');
        $this->db->order_by('tanggal','DESC');
		$galery = $this->db->get()->result_array();
		$data = array(
			'judul_halaman'	=>	'Halaman Galery',
            'galery'        =>   $galery
		);
		$this->template->load('template_admin','admin/galery_index',$data);
	}
	public function simpan(){
        $namafoto = date('YmdHis').'.jpg';
        $config['upload_path']          = 'assets/upload/galery/';
        $config['max_size'] = 500 * 1024; //6 * 1024 * 1024; //3Mb; 0=unlimited
        $config['file_name']            = $namafoto;
		$config['allowed_types']		='*';
        $this->load->library('upload', $config);
        if($_FILES['foto']['size'] >= 500 * 1024){
            $this->session->set_flashdata('alert', '
                <div class="alert alert-danger alert-dismissible" role="alert">
                Ukuran foto terlalu besar, upload ulang foto dengan ukuran yang kurang dari 500 KB.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
				');
            redirect('admin/Galery');  
        }  else if( $this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
        }else{
            $data = array('upload_data' => $this->upload->data());
        }   
		$this->db->from('Galery');
		$this->db->where('judul', $this->input->post('judul'));
		$cek = $this->db->get()->result_array();
		if($cek<>NULL){
		$this->session->set_flashdata('alert','
		<div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <strong>judul Galery sudah ada.</strong>
        </div>
		');
		redirect('admin/Galery');
		}
        $data = array(
            'judul'   		=>   $this->input->post('judul'),
            'tanggal'   	=>   date('Y-m-d'),
            'foto'   		=>   $namafoto,
        );
		$this->db->insert('Galery',$data);
		$this->session->set_flashdata('alert','
		<div class="alert alert-warning alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <strong>suksess menambah Galery!.</strong>
        </div>
		');
		redirect('admin/Galery');
	}

	public function update(){
        $namafoto = $this->input->post('nama_foto');
        $config['upload_path']          = 'assets/upload/galery/';
        $config['max_size'] = 500 * 1024; //3 * 1024 * 1024; //3Mb; 0=unlimited
        $config['file_name']            = $namafoto;
        $config['overwrite']            = true;
		$config['allowed_types']		='*';
        $this->load->library('upload', $config);
        if($_FILES['foto']['size'] >= 500 * 1024){
            $this->session->set_flashdata('alert', '
                <div class="alert alert-danger alert-dismissible" role="alert">
                Ukuran foto terlalu besar, upload ulang foto dengan ukuran yang kurang dari 500 KB.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                    ');
            redirect('admin/galery');  
        }  elseif( $this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
        }else{
            $data = array('upload_data' => $this->upload->data());
        }   
        $data = array(
            'judul'   		=>   $this->input->post('judul'),
        );
        $where = array(
            'foto'      =>   $this->input->post('nama_foto')
        );
		$this->db->update('galery',$data,$where);
		$this->session->set_flashdata('alert','
		<div class="alert alert-warning alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <strong>suksess memperbarui galery!.</strong>
        </div>
		');
		redirect('admin/galery');
	}
	
	public function delete_data($id){
		$filename=FCPATH.'/assets/upload/Galery/'.$id;
			if(file_exists($filename)){
				unlink("./assets/upload/Galery/".$id);
			}
		$where = array(
			'foto'	=> $id
		);
		$this->db->delete('Galery',$where);
		$this->session->set_flashdata('alert','
		<div class="alert alert-warning alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <strong>Berhasil menghapus Galery</strong>
        </div>
		');
		redirect('admin/Galery');
	}
}
