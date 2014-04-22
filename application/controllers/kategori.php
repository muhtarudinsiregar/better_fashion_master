<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('kategori_model');
      // $this->load->helper('html');
      // $this->load->library('form_validation');
	}

	public function index()
	{
		$data['content'] = 'kategori/tampil_kategori';
    	$data['tampil'] = $this->kategori_model->tampil_kategori();
		$data['judul'] = 'Tampil Kategori';

		$this->load->view('template/admin/index', $data);

	}


	public function proses_kategori()
	{

		$data_kategori = array(
			'nama'=>$this->input->post('kategori')
			);

		$b= $this->kategori_model->tambah_kategori($data_kategori);
		if (isset($b)) {
			 $this->session->set_flashdata('hasil', '<div class="alert alert-danger">Gagal Menambahkan Kategori!!</div>');
			 redirect('kategori');
			 return true;
		}else{
			 $this->session->set_flashdata('hasil', '<div class="alert alert-success">Kategori Berhasil Ditambahkan <i class="glyphicon glyphicon-thumbs-up"></i></div>');
		}
  		redirect('kategori',$data);
	}


	public function hapus_kategori($id)
	{
		$a = $this->kategori_model->hapus_kategori($id);
		if (isset($a)) {
			 $this->session->set_flashdata('result', '<div class="alert alert-success">Kategori Berhasil Dihapus</div>');
			 redirect('kategori');
			 return true;
		}else{
			 $this->session->set_flashdata('result', '<div class="alert alert-danger">Gagal Menghapus Kategori!!</div>');
		}
		
	}

	public function edit_kategori($id)
	{
		$data = array(
			'judul'=>'Edit Kategori',
			'content'=>'kategori/edit_kategori',
			'data_edit'=>$this->kategori_model->edit_kategori($id)
			);

		$this->load->view('template/admin/index',$data);
	}

	public function update_kategori($id)
	{

		$data_update = array(
			'nama'=>$this->input->post('kategori')
			);
		$this->kategori_model->update_kategori($id,$data_update);
		redirect('kategori');
	}


}

/* End of file kategori.php */
/* Location: ./application/controllers/kategori.php */