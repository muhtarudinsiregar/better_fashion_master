<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Artikel extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('artikel_model');
	}
	
		// List all your items
	public function index()
	{
		$data['judul'] = "Halaman Artikel";
		$data['data_artikel'] = $this->artikel_model->tampil_artikel();
<<<<<<< HEAD
=======
		// var_dump($data['data_artikel']);
>>>>>>> 8b5b107712a4d44b224f16215874faa20ddd7c46
		$data['content'] = "artikel/tampil_artikel";
		$this->load->view('template/admin/index',$data);
	}
	
<<<<<<< HEAD
=======
		// Add a new item
>>>>>>> 8b5b107712a4d44b224f16215874faa20ddd7c46
	public function tambah_artikel()
	{

		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');
		$data['content'] = "artikel/tambah_artikel";
		$data['judul'] = "Tambah Artikel";

		
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('isi_artikel', 'Isi Artikel', 'required');
		$this->form_validation->set_rules('tag', 'Tag', 'trim|xss_clean');
		$this->form_validation->set_rules('simpan_sebagai', 'Simpan Sebagai', 'trim|required|xss_clean');
		
		if ($this->form_validation->run() == FALSE){
			$this->load->view('template/admin/index',$data);
			 // echo validation_errors(); 
		}else{
			$this->proses_tambah();
		}

	}

	public function proses_tambah()
	{
		date_default_timezone_set('Asia/Jakarta');
	    // then call the date functions
	    //or
	    $date = date('H:i:s Y-m-d');
		$data_input = array(
			'judul'=>$this->input->post('judul'),
			'tanggal'=>$date,
			'isi'=>$this->input->post('isi_artikel'),
			'status'=>$this->input->post('simpan_sebagai'),
			'tag'=>$this->input->post('tag')
			);
		// var_dump($data_input);
		$notifikasi = $this->artikel_model->tambah_artikel($data_input);
		if (empty($notifikasi)) {
			$this->session->set_flashdata('notifikasi', '<div class="alert alert-success">Post Berhasil Ditambahkan <i class="glyphicon glyphicon-thumbs-up"></i></div>');
			redirect('artikel/tambah_artikel');
		}else{
			$this->session->set_flashdata('notifikasi', '<div class="alert alert-danger">Gagal Menambahkan Post!!</div>');
		}
		
	}

	public function edit_artikel($id)
	{
		$data['edit'] = $this->artikel_model->edit_artikel($id);

		$array_baru = array($data['edit']);
		$data['judul'] = "Edit Artikel";
		$data['content'] = "artikel/edit_artikel";
		$this->load->view('template/admin/index',$data);
	}
	
		//Update one item
	public function update_artikel($id)
	{
		date_default_timezone_set('Asia/Jakarta');
	    // then call the date functions
	    //or
	    $date = date('H:i:s Y-m-d');
		$data_artikel = array(
			'judul'=>$this->input->post('judul'),
			'tanggal'=>$date,
			'isi'=>$this->input->post('isi_artikel')
			);
		
		$this->artikel_model->update_artikel($data_artikel,$id);
		redirect('artikel');
	}
	
		//Delete one item
	public function hapus_artikel($id)
	{
		$this->artikel_model->hapus_artikel($id);
		$this->session->set_flashdata('notifikasi', '<div class="alert alert-success alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Berhasil </strong>Menghapus Artikel
			</div>');
		redirect('artikel');
		
	}
<<<<<<< HEAD
=======

	


	

	public function blog()
	{
		$data['artikel'] = $this->artikel_model->tampil_artikel();
		$data = array(
            'artikel'=>$this->artikel_model->tampil_artikel(),
            'content'=>'artikel/blog',
            'judul'=>'Blog'
            );
		
		$this->load->view('template/index',$data);
	}
>>>>>>> 8b5b107712a4d44b224f16215874faa20ddd7c46
}
/* End of file artikel.php */
/* Location: ./application/controllers/artikel.php */