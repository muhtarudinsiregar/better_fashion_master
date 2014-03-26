<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kategori extends CI_Controller {

		public function __construct()
	{
		parent::__construct();
		$this->load->model('kategori_model');
		$this->load->helper('html');
	}

    public function index()
    {
        $data = array(
            'tampil'=>$this->kategori_model->tampil_kategori(),
            'judul'=>'Tampil kategori',
            'content'=>'kategori/tampil_kategori'
            );
        $this->load->view('template/admin/index', $data);
    }

   public function tambah_kategori()
   {
   		$data = array(
   			'judul'=>'Tambah Kategori',
   			'content' =>'kategori/tambah_kategori'
   			);
   		$this->load->view('template/admin/index',$data);
   }

    public function proses_kategori()
	{
		$data_kategori = array(
			'nama'=>$this->input->post('kategori')
			);
         // var_dump($data);
       $this->kategori_model->tambah_kategori($data_kategori);
       redirect('kategori');
	}


    public function hapus_kategori($id)
    {
        $this->kategori_model->hapus_kategori($id);
        redirect('kategori');
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