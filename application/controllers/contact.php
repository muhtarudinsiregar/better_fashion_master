<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('contact_model');
	}

	public function index()
	{
		$data = [
			'judul'=>'Contact',
			'content'=>'contact/index'
		];
		$this->load->view('template/admin/index', $data, FALSE);
	}

	public function detail($id)
	{
		$data = [
			'jawab'=>$this->contact_model->detail_contact($id),
			'judul'=>"Contact",
			'content'=>"contact/detail"
		];

		$array_baru = array($data['jawab']);
		$status = '1';
		$update_status = array(
			'status'=>$status
		);

		$this->contact_model->update_status($id,$update_status);
		$this->load->view('template/admin/index', $data);
	}


}

/* End of file contact.php */
/* Location: ./application/controllers/contact.php */