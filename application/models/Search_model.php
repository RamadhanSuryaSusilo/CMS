<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Search_model extends CI_Model{
    public function getKonten($keyword = null)
    {
        if ($keyword) {
            $this->db->like('judul', $keyword);
            $this->db->or_like('keterangan', $keyword);
        }
        $this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        $this->db->join('user c','a.username=c.username','left');
		$this->db->order_by('tanggal','DESC');
		return $this->db->get()->result_array();
    }

}