<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Caraousel extends CI_Controller {
    public function __construct(){
        parent:: __construct();
		if($this->session->userdata('level')==NULL){
			redirect('auth');
		}
	}
	public function index(){
		$this->db->from('caraousel');
		$caraousel = $this->db->get()->result_array();
		$data = array(
			'judul_halaman'	=>	'Halaman caraousel',
			'caraousel'		=>	 $caraousel,
		);
		$this->template->load('template_admin','admin/caraousel_index',$data);
	}
	public function simpan(){
        $namafoto = date('YmdHis').'.jpg';
        $config['upload_path']          = 'assets/upload/caraousel/';
        $config['max_size'] = 500 * 1024; //3 * 1024 * 1024; //3Mb; 0=unlimited
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
            redirect('admin/caraousel');  
        }  elseif( $this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
        }else{
            $data = array('upload_data' => $this->upload->data());
        }   
        $data = array(
            'judul'   		=>   $this->input->post('judul'),
            'foto'   		=>   $namafoto,
        );
		$this->db->insert('caraousel',$data);
		$this->session->set_flashdata('alert','
		<div class="alert alert-warning alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <strong>suksess menambah Caraousel....</strong>
        </div>
		');
		redirect('admin/caraousel');
	}

	public function update(){
        $namafoto = $this->input->post('nama_foto');
        $config['upload_path']          = 'assets/upload/konten/';
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
            redirect('admin/konten');  
        }  elseif( $this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
        }else{
            $data = array('upload_data' => $this->upload->data());
        }   
        $data = array(
            'judul'   		=>   $this->input->post('judul'),
            'id_kategori'   =>   $this->input->post('id_kategori'),
            'keterangan'   	=>   $this->input->post('keterangan'),
            'slug'   		=>   str_replace(' ','-',$this->input->post('judul'))
        );
        $where = array(
            'foto'      =>   $this->input->post('nama_foto')
        );
		$this->db->update('konten',$data,$where);
		$this->session->set_flashdata('alert','
		<div class="alert alert-warning alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <strong>suksess memperbarui konten!.</strong>
        </div>
		');
		redirect('admin/konten');
	}

	public function delete_data($id){
		$filename=FCPATH.'/assets/upload/caraousel/'.$id;
			if(file_exists($filename)){
				unlink("./assets/upload/caraousel/".$id);
			}
		$where = array(
			'foto'	=> $id
		);
		$this->db->delete('caraousel',$where);
		$this->session->set_flashdata('alert','
		<div class="alert alert-warning alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <strong>Berhasil menghapus caraousel</strong>
        </div>
		');
		redirect('admin/caraousel');
	}
}
