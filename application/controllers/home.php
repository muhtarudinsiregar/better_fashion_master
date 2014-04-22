<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
<<<<<<< HEAD
		$this->load->model('home_model');
		$this->load->helper('text');
	}
	public function index()
	{
		$data = [
               'judul' => 'Home',
			'artikel'=>$this->home_model->tampil_artikel(),
			'data_kategori'=>$this->home_model->tampil_kategori(),
			'data_gambar'=>$this->home_model->galeri()
		];
		// var_dump($data['data_kategori']);

		$this->load->view('home/home',$data);		
		
	}

	public function foto()
	{
		$data['tampil_barang']=$this->home_model->portofolio();
		$data['tampil_kategori']=$this->home_model->tampil_kategori();
		$this->load->view('home/portofolio',$data);
	}

     public function detail_barang($id)//$id di dalem fungsi
     {
     	$data = array(
     		'judul'=>"Detail Barang",
     		'detail_barang'=>$this->home_model->detail_barang($id)
     		);
     	$this->load->view('home/detaile', $data);

     }

     public function blog()
     {
          $data['artikel']=$this->home_model->blog();
          $data['tampil_kategori']=$this->home_model->tampil_kategori();
          $this->load->view('home/blog',$data);
     }

     public function detail_artikel($id)
     {
     	$data = array(
     		'judul'=>"My Artikel",
               'tampil_kategori'=>$this->home_model->tampil_kategori(),               
     		'detail_artikel'=>$this->home_model->detail_artikel($id),
     		'artikel'=>$this->home_model->tampil_artikel()
     		);
     	$this->load->view('home/artikel', $data);
     }

     public function kategori($id)
     {
          $data = [
               'tampil_barang'=>$this->home_model->portofolio(),
               'tampil_kategori'=>$this->home_model->tampil_kategori(),
               'kategori'=>$this->home_model->kategori_detail($id)
          ];
          $this->load->view('home/kategori', $data);
          
     }

     public function contact()
     {
     	$data_contact = [
     		'nama'=>$this->input->post('name'),
     		'email'=>$this->input->post('email'),
     		'message'=>$this->input->post('message'),
     		'status'=>'read'
     	];
     	$this->home_model->insert_contact($data_contact);
     	
    }

=======
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

>>>>>>> 8b5b107712a4d44b224f16215874faa20ddd7c46

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */