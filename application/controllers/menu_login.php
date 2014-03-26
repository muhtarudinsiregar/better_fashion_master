<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu_login extends CI_Controller {

	public function index()
	{
		$data['content'] = 'login_menu/login_menu';
		$this->load->view('template/index', $data);
	}

}

/* End of file menu_login.php */
/* Location: ./application/controllers/menu_login.php */