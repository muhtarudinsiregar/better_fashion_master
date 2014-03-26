<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('barang_model');
	}
	public function index()
	{
		$data['data_gambar'] = $this->barang_model->galeri();
		$data['data_kategori'] = $this->barang_model->tampil_kategori();

		$this->load->view('home/home',$data);		
	}

	public function kategori()
	{
	
	}


}

/* End of file home.php */
/* Location: ./application/controllers/home.php */