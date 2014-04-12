<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user/user_model');

	}

		// List all your items
	public function index( $offset = 0 )
	{
		$data['get'] = $this->user_model->get_all();
		$data['judul'] = "Admin Panel";
		$data['content'] = "user/tampil";
		$this->load->view('template/index',$data);
	}


	public function add_view()
	{	
		$cek = (array)$this->user_model->cek_username();
		
		// var_dump();
		$this->form_validation->set_rules('nama', 'Nama', 'required|xss_clean|trim|encode_php_tags|prep_for_form');
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required|trim|encode_php_tags|prep_for_form');
		if($this->input->post('username') != $cek) {
			$is_unique =  '|is_unique[users.username]';
		} else {
			$is_unique =  '';
		}
		$this->form_validation->set_rules('username', 'Username', 'required|encode_php_tags|prep_for_form|trim'.$is_unique);
		$this->form_validation->set_rules('password', 'Password', 'required|trim|encode_php_tags|prep_for_form');
		$this->form_validation->set_rules('akses', 'Akses', 'required|xss_clean|encode_php_tags|prep_for_form');

		if ($this->form_validation->run() == FALSE){
			$this->load->view("user/tambah_admin", array("error" => true, "message" => validation_errors())); // menampilkan error yang dihasilkan
		}else{
			$this->add(); // bila data sudah benar tampilkan sukses
		}
		

	}

	public function tampil_admin()
	{
		$data['get'] = $this->user_model->get_all();
		// var_dump($data['get']->result());
		$this->load->view('user/tampil', $data);
	}
	
		// Add a new item
	public function add()
	{
		$nama = htmlentities($this->input->post('nama'));
		$tanggal_lahir = htmlentities($this->input->post('tanggal_lahir'));
		$data_admin = array(
			'nama'=>$nama,
			'tanggal_lahir'=>$this->input->post('tanggal_lahir'),
			'username'=>$this->input->post('username'),
			'password'=>md5($this->input->post('password')),
			'akses'=>$this->input->post('akses')
			);
		// var_dump($data_admin);
		$this->user_model->tambah_admin($data_admin);
		// var_dump($data_admin);
		redirect('user');
	}

	public function edit_admin($id)
	{
		$data['edit'] = $this->user_model->edit_admin($id);
		// var_dump($data['edit']);
		// $this->load->view('user/edit_user', $data);
	}
	
		//Update one item
	public function update( $id = NULL )
	{

	}
	
		//Delete one item
	public function hapus_admin($id)
	{
		$this->user_model->hapus_admin($id);
		redirect('user');
	}
}

/* End of file user.php */
	/* Location: ./application/controllers/user.php */