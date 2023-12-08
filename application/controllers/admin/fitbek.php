<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Fitbek extends CI_Controller {
    public function __construct(){
        parent:: __construct();
		if($this->session->userdata('level')==NULL){
			redirect('auth');
		}
	}
	public function index(){
        $this->db->from('fitbek');
        $this->db->order_by('tanggal','DESC');
		$saran = $this->db->get()->result_array();
		$data = array(
			'judul_halaman'	=>	'Halaman Saran',
            'saran'        	=>   $saran
		);
		$this->template->load('template_admin','admin/fitbek_index',$data);
	}

	public function delete($id){
        $where = array(
            'id_saran' => $id
        );
		$this->db->delete('fitbek', $where);
		$this->session->set_flashdata('alert','
		<div class="alert alert-warning alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <strong>suksess menghapus saran!.</strong>
        </div>
		');
		redirect('admin/fitbek');
	}

	public function delete_all(){
		$this->db->truncate('fitbek');
		$this->session->set_flashdata('alert','
		<div class="alert alert-warning alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <strong>berhasil menghapus semua Saran !.</strong>
        </div>
		');
		redirect('admin/fitbek');
	}
}
