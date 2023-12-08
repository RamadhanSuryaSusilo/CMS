<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
    public function __construct(){
        parent::__construct();
		$this->load->model('Search_model');
	}
	public function index(){
		$this->db->from('konfigurasi');
		$konfig	= $this->db->get()->row();
		$this->db->from('caraousel');
		$caraousel	=	$this->db->get()->result_array();
		$this->db->from('kategori');
		$kategori	=	$this->db->get()->result_array();
		$this->db->from('konten');
		$this->db->join('kategori','id_kategori','left');
		$this->db->order_by('tanggal', 'DESC');
		$this->db->limit(5);
		$recentPost = $this->db->get()->result_array();
		$this->db->from('fitbek');
		$fitbek	= $this->db->get()->row();
		$data	= array(
			'judul'	=>	"Beranda | Surya",
			'konfig'	=>	$konfig,
			'caraousel'	=>	$caraousel,
			'kategori'	=>	$kategori,
			//'konten'	=>	$konten,
			'recentPost'	=>	$recentPost
		);
		if ($this->input->post('submit')) {
			$data['keyword'] = $this->input->post('keyword');
			$this->session->set_userdata('keyword', $data['keyword']);
		} else {
			$data['keyword'] = $this->session->userdata('keyword');
		}
		// $this->load->library('pagination');
		// 'konten'	=> $this->Search_model->getKonten($config['per_page'], $data['start'], 
		// $data['keyword']),

		$this->db->like('judul', $data['keyword']);
		$this->db->or_like('keterangan', $data['keyword']);
		$this->db->from('konten');
		$config['total_rows'] = $this->db->count_all_results();
		$data['total_rows'] = $config['total_rows'];
		$data['konten'] =  $this->Search_model->getKonten($data['keyword']);
		$this->load->view('berandalan',$data);
	}
	public function laporan(){
		$tanggal1 = $this->input->get('tanggal1');
		$tanggal2 = $this->input->get('tanggal2');
		$this->db->from('transaksi');
        $this->db->where("tanggal >=",$tanggal1);
        $this->db->where("tanggal <=",$tanggal2);
        $this->db->order_by("tanggal",'ASC');
		$laporan = $this->db->get()->result_array();
		$data = array(
			'tanggal1' => $tanggal1,
			'tanggal2' => $tanggal2,
			'laporan'  => $laporan,
		);
		$this->load->view('laporan',$data);
	}
	public function kategori($id){
		$this->db->from('konfigurasi');
		$konfig	= $this->db->get()->row();
		$this->db->from('caraousel');
		$caraousel	=	$this->db->get()->result_array();
		$this->db->from('kategori');
		$kategori	=	$this->db->get()->result_array();
		$this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        $this->db->join('user c','a.username=c.username','left');
		$this->db->where('a.id_kategori',$id);
		$konten = $this->db->get()->result_array();
		$this->db->from('kategori');
		$this->db->where('id_kategori',$id);
		$nama_kategori	=	$this->db->get()->row()->nama_kategori;
		$data	= array(
			'judul'	=>	$nama_kategori. " | Surya",
			'nama_kategori'	=>	$nama_kategori,
			'konfig'	=>	$konfig,
			'kategori'	=>	$kategori,
			'konten'	=>	$konten,
		);
		$this->load->view('kategori', $data);
	}
	public function artikel($id){
		$this->db->from('konfigurasi');
		$konfig	= $this->db->get()->row();
		$this->db->from('kategori');
		$kategori	=	$this->db->get()->result_array();
		$this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        $this->db->join('user c','a.username=c.username','left');
        $this->db->where('slug', $id);
		$konten = $this->db->get()->row();
		$data	= array(
			'judul'	=>	$konten->judul." | Ganteng",
			'konfig'	=>	$konfig,
			'kategori'	=>	$kategori,
			'konten'	=>	$konten,
		);
		$this->load->view('detail',$data);
	}
	public function galery(){
		$this->db->from('galery');
		$galery = $this->db->get()->result_array();
		$this->db->from('konfigurasi');
		$konfig	= $this->db->get()->row();
		$this->db->from('kategori');
		$kategori	=	$this->db->get()->result_array();
		$this->db->from('konten a');
		$konten = $this->db->get()->row();
		$data	= array(
			'judul'	=>	$konten->judul." | Ganteng",
			'konfig'	=>	$konfig,
			'kategori'	=>	$kategori,
			'konten'	=>	$konten,
			'galery'	=>	$galery,
		);
		$this->load->view('galery',$data);
	}
	
	public function fitbek(){
		$this->db->from('galery');
		$galery = $this->db->get()->result_array();
		$this->db->from('konfigurasi');
		$konfig	= $this->db->get()->row();
		$this->db->from('kategori');
		$kategori	=	$this->db->get()->result_array();
		$this->db->from('konten');
		$konten = $this->db->get()->row();
		$data	= array(
			'judul'	=>	$konten->judul." | Ganteng",
			'konfig'	=>	$konfig,
			'kategori'	=>	$kategori,
			'konten'	=>	$konten,
			'galery'	=>	$galery,
		);
		$this->load->view('fitbek',$data);
	}
	public function Simpan(){
		$tanggal = date('Y-m-d');
		$this->db->from('fitbek');
		$data = array(
			'isi_saran' =>	$this->input->post ('isi_saran'),
			'nama' =>	$this->input->post ('nama'),
			'email' =>	$this->input->post ('email'),
			'tanggal' => $tanggal,
		);
		$this->db->insert('fitbek',$data);
		$this->session->set_flashdata('alert', '
		<div class="alert alert-dark" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
 			 <strong>Berhasil mengirim saran !</strong>
			</div>');
		// $this->session->set_flashdata('alert','
		// <div class="alert alert-primary alert-dismissible fade in" role="alert">
        //             <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        //             <strong>suksess mengirimkan saran </strong>
        // </div>
		// ');
		redirect('home/fitbek');
	}
}
