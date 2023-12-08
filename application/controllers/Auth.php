<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller {
    public function __construct(){
        parent:: __construct();
	}
	public function index(){
		$this->load->view('login');
	}
	public function login(){
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$this->db->from('user');
		$this->db->where('username', $username);
		$cek = $this->db->get()->row();
		if($cek==NULL){
		$this->session->set_flashdata('alert','
		<div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <strong>Username tidak ada !</strong>
        </div>
		');
		redirect('auth');
		} else if($password==$cek->password) {
			$data = array(
				'id_user'	=>	$cek->id_user,
				'nama'		=>	$cek->nama,
				'username'	=>	$cek->username,
				'level'		=>	$cek->level,
			);
			$this->session->set_userdata($data);
			$recent = [
				'username'	=>	$data['username'],
				'waktu'		=>	date('H:i:s'),
				'tanggal'	=>	date('Y-m-d'),
				'status'	=>	'LOGIN'
			];
			$this->db->insert('last_log', $recent);
			redirect('admin/home');
		} else{
			$this->session->set_flashdata('alert','
		<div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <strong>Password tidak tepat.</strong>
        </div>
		');
		redirect('auth');
		}
	}
	public function logout(){
		$recent = [
			'username'	=>	('username'),
			'waktu'		=>	date('H:i:s'),
			'tanggal'	=>	date('Y-m-d'),
			'status'	=>	'LOG OUT'
		];
		$this->db->insert('last_log', $recent);
		$this->session->sess_destroy();
		redirect('home');
	}
}
