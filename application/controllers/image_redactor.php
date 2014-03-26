<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Image_redactor extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
	}

	public function index()
	{
		$this->load->view('image/image_redactor');
	}

	public function upload()
	{
		if(!empty($_FILES['file']['name']))
		{
			$config['upload_path'] = './img';
			$config['allowed_types'] = 'gif|jpg|png';
			$this->load->library('upload', $config);
			if($this->upload->do_upload('file'))
			{
				$image_data = $this->upload->data(); 

            // database
				$this->db->insert('image',array(
					'foto'=>$image_data['file_name']
					)); 

				$json = array(
					'filelink' => base_url("img/{$image_data['file_name']}")
					);
				echo stripslashes(json_encode($json));
			}
		}
	}

	public function galeri()
	{
		$return=array();
		$all_data = $this->db->get('image');
		foreach($all_data->result_array() as $row)
		{
			$return[]=array(
				'thumb'=>base_url('img/'.$row['foto']),
				'image'=>base_url('img/'.$row['foto']),
				'title'=>$row['foto'],
				);
		}
		echo json_encode($return);
	}

}

/* End of file image_redactor.php */
/* Location: ./application/controllers/image_redactor.php */