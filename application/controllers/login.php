<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

<<<<<<< HEAD
	public function __construct()
	{
		parent::__construct();
		$this->load->library('ion_auth');
	}

	public function index()
	{

		if ($this->ion_auth->logged_in()) {
			redirect('dashboard');

		}else{

			$data = [
			'judul'=>'Login'
			];
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if ($this->form_validation->run() == FALSE){
				$this->load->view('login/login',$data);
			 // echo validation_errors(); 
			}else{
				$this->login();
			}
		}

		
		// $this->load->view('login/login', $data);	
	}

	public function login()
	{	
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run()==true){

			$remember = (bool) $this->input->post('remember');
			if ($this->ion_auth->login($this->input->post('username'), $this->input->post('password'), $remember)) {
				$this->session->set_flashdata('message','<div class="alert alert-success alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				Selamat Datang di Halaman Admin 
			</div>';
				redirect('dashboard', 'refresh');
			}else{
				$this->session->set_flashdata('message', $this->ion_auth->errors());
				redirect('login', 'refresh');
			}

		}else{
			redirect('login');
		}
	}

	public function logout()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('login');
		}else{
			$logout = $this->ion_auth->logout();
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			redirect('login', 'refresh');
		}


	}
=======
	public function index()
	{
		$data = [
			'judul'=>'Login'
		];
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE){
			$this->load->view('login/login',$data);
			 // echo validation_errors(); 
		}else{
			$this->proses_tambah();
		}
		// $this->load->view('login/login', $data);	
	}

	// public function ()
	// {
	// 	# code...
	// }
>>>>>>> 8b5b107712a4d44b224f16215874faa20ddd7c46



}

/* End of file login.php */
/* Location: ./application/controllers/login.php */