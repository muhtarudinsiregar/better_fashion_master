<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('dashboard_model');
	}

	function index(){
		$data['jumlah_post'] = $this->dashboard_model->jml_artikel();
		$data['content'] = "dashboard/index";
		$data['judul'] = "Dashboard";
		$this->load->view('template/admin/index', $data);
		// var_dump($data['jumlah_post']);
		
	}

	public function setting_blog()
	{
        $data = array(
            'tampil'=>$this->dashboard_model->setting_blog(),
            'content'=>'dashboard/setting',
            'judul'=>'Setting Blog'
            );
        // var_dump($data['tampil']);
        $this->load->view('template/admin/index', $data);
	
	}

    public function update_setting($id)
    {

       $data_update = array(
            'facebook'=>$this->input->post('facebook'),
            'twitter'=>$this->input->post('twitter'),
            'g_plus'=>$this->input->post('google_plus'),
            'email'=>$this->input->post('email')
            );
        $this->dashboard_model->update_setting($id,$data_update);
        redirect('dashboard');
    }


}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */