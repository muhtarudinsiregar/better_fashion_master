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
		// var_dump($data['data_artikel']);
		$data['content'] = "artikel/tampil_artikel";
		$this->load->view('template/admin/index',$data);
	}
	
		// Add a new item
	public function tambah_artikel()
	{
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('isi_artikel', 'Isi Artikel', 'required');
		
		$data['content'] = "artikel/tambah_artikel";
		$data['judul'] = "Tambah Artikel";


		if ($this->form_validation->run() == FALSE){
			$this->load->view('template/admin/index',$data);
			// $this->form_validation->set_message('required', 'Tidak Boleh Kosong');
		}else{
			$this->proses_tambah();
		}

	}

	public function proses_tambah($value='')
	{
		date_default_timezone_set('Asia/Jakarta');
	    // then call the date functions
	    //or
	    $date = date('H:i:s Y-m-d');
		$data_input = array(
			'judul'=>$this->input->post('judul'),
			'tanggal'=>$date,
			'isi'=>$this->input->post('isi_artikel'),
			'tag'=>$this->input->post('tag')
			);
		// var_dump($data_input);
		$this->artikel_model->tambah_artikel($data_input);
		redirect('artikel');
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
		redirect('artikel');
	}

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
}
/* End of file artikel.php */
/* Location: ./application/controllers/artikel.php */