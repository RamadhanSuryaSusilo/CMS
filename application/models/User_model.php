<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model {
	public function simpan(){
		date_default_timezone_set('Asia/Jakarta');
        $data = array(
			'nama'		=>	$this->input->post('nama'),
			'username'	=>	$this->input->post('username'),
			'password'	=>	md5($this->input->post('password')),
			'level'		=>	$this->input->post('level'),
			'waktu' 	=> date('Y-m-d H:i:s'),
			
		);
		$this->db->insert('user',$data);
    }
	public function update(){
		$where = array('id_user'		=>	$this->input->post('id_user'));
		$data	=	array('nama'		=>	$this->input->post('nama'));
		$this->db->update('user',$data,$where);
	}
}
