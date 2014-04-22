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
<<<<<<< HEAD
            'judul'=>'My Contact'
            );
        // var_dump($data['tampil']);
        $this->load->view('home/contact', $data);
        $this->session->set_flashdata('message', 'div class="success">Your message has been sent. Thank you!</div>');
=======
            'content'=>'home/about',
            'judul'=>'About Us'
            );
        // var_dump($data['tampil']);
        $this->load->view('template/index', $data);
>>>>>>> 8b5b107712a4d44b224f16215874faa20ddd7c46
	}
    // ======================dashboard===================
	public function edit()
	{
		  $data = array(
            'tampil'=>$this->about_model->tampil_visimisi(),
            'judul'=>'Tampil Visi dan Misi',
            'content'=>'about/tampil_visimisi'
            );
        // var_dump($data['tampil']);
        $this->load->view('template/admin/index', $data);
	}

	

    public function update_visi($id)
    {

       $data_update = array(
            'visi'=>$this->input->post('visi')
            );
        $this->about_model->update_visi($id,$data_update);
        redirect('about');
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