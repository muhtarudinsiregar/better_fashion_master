<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

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



}

/* End of file login.php */
/* Location: ./application/controllers/login.php */