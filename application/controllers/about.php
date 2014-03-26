<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('about_model');
	}
	public function index()
	{
        $data = array(
            'tampil'=>$this->about_model->tampil_visimisi(),
            'content'=>'home/about',
            'judul'=>'About Us'
            );
        // var_dump($data['tampil']);
        $this->load->view('template/index', $data);
	}
    // ======================dashboard===================
	public function edit($value='')
	{
		  $data = array(
            'tampil'=>$this->about_model->tampil_visimisi(),
            'judul'=>'Tampil Visi dan Misi',
            'content'=>'about/tampil_visimisi'
            );
        // var_dump($data['tampil']);
        $this->load->view('template/admin/index', $data);
	}

	public function edit_visi($id)
    {
        $data = array(
            'judul'=>'Edit Visi',
            'content'=>'visi/edit_visi',
            'data_edit'=>$this->about_model->edit_visi($id)
            );

        $this->load->view('template/admin/index',$data);
    }

    public function update_visi($id)
    {

       $data_update = array(
            'visi'=>$this->input->post('visi')
            );
        $this->about_model->update_visi($id,$data_update);
        redirect('about');
    }


	public function edit_Misi($id)
    {
        $data = array(
            'judul'=>'Edit Visi',
            'content'=>'visi/edit_visi',
            'data_edit'=>$this->about_model->edit_visi($id)
            );

        $this->load->view('template/admin/index',$data);
    }

    public function update_Misi($id)
    {

       $data_update = array(
            'misi'=>$this->input->post('misi')
            );
        $this->about_model->update_misi($id,$data_update);
        redirect('about');
    }


}

/* End of file about.php */
/* Location: ./application/controllers/about.php */