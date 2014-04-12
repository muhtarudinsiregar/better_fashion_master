<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('dashboard_model');
        // error_reporting(0);
	}

	function index(){

        $data = [
            'jumlah_post' => $this->dashboard_model->jml_artikel(),
            'artikel_terbaru' => $this->dashboard_model->artikel_terbaru(),
            'content' => "dashboard/index",
            'judul' => "Dashboard"
            ];
		
		$this->load->view('template/admin/index', $data);
		
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
            'email'=>$this->input->post('email'),
            'no_telpon'=>$this->input->post('no_telpon'),
            'informasi'=>$this->input->post('informasi'),
            );
        $data = $this->dashboard_model->update_setting($id,$data_update);
        if (isset($data)) {
             $this->session->set_flashdata('notifikasi', '<div class="alert alert-danger">Gagal Menyimpan Perubahan!!</div>');
            
        }else{
             $this->session->set_flashdata('notifikasi', '<div class="alert alert-success">Berhasil Menyimpan Perubahan <i class="glyphicon glyphicon-thumbs-up"></i></div>');
        }
        redirect('dashboard/setting_blog');
    }

    public function pencarian()
    {   
        $kata_kunci = $this->input->post('search');
        // $kata_kunci2 = $this->input->post('query');
            if ($kata_kunci==null)
            {
                
                $data = [
                    'notifikasi'=>'<div class="alert alert-danger">Masukkan Data Yang Ingin Dicari!</div>',
                    'content'=>'dashboard/pencarian',
                    'judu'=>'Pencarian'
                ];
                
                $data['content'] ='dashboard/pencarian'; 
                $this->load->view('template/admin/index', $data);
                
            }else{
                $data = [
                    'data_pencarian'=>$this->dashboard_model->find($kata_kunci),
                    'judul'=>'Pencarian',
                    'content'=>'dashboard/pencarian'
                ];

                    if (empty($data['data_pencarian'])) 
                    {
                        $data['notifikasi']= '<div class="alert alert-danger">Data Tidak Ditemukan!</div>';
                    }else
                    {
                         $data['notifikasi']= '<div class="alert alert-success">Data Berhasil Ditemukan!</div>';
                    }
                // var_dump($data);

        $this->load->view('template/admin/index', $data);
        }
    }


    function proses_pencarian(){
        $kata_kunci = $this->input->post('search');
        $data = [
            'data_pencarian'=>$this->dashboard_model->find($kata_kunci)
        ];
    }


}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */