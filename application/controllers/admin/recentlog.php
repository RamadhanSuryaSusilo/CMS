<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Recentlog extends CI_Controller {
    public function __construct(){
        parent:: __construct();
		$this->load->model('User_model');
		if($this->session->userdata('level')<>'Admin'){
			redirect('auth');
		}
	}
	public function index(){
		$data['title'] = 'Riwayat Login';
		$data['recent'] = $this->db->from('last_log')->order_by('id_login', 'DESC')->get()->result_array();
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$this->template->load('template_admin','admin/recentlog_index',$data);
	}
	public function delete($id){
		$where = array(
			'id_login'	=> $id
		);
		$this->db->delete('last_log',$where);
		$this->session->set_flashdata('alert','
		<div class="alert alert-warning alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <strong>Berhasil menghapus riwayat</strong>
        </div>
		');
		redirect('admin/recentlog');
	}
	public function delete_all(){
		$this->db->truncate('last_log');
		$this->session->set_flashdata('alert','
		<div class="alert alert-warning alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <strong>berhasil menghapus semua riwayat login !.</strong>
        </div>
		');
		redirect('admin/recentlog');
	}
}