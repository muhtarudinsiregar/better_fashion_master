<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Image extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('image_model');
		$this->load->library(array('upload','image_lib'));
		$this->load->helper('html');
	}

	public function index()
	{
		$data = array();
        $data['error'] = '';
        $data['output'] = '';
         
        if(isset($_FILES['userfile']))
        {
            $this->upload->initialize(array(
                'upload_path' => './img/',
                'allowed_types' => 'png|jpg|gif',
                'max_size' => '5000',
                'max_width' => '3000',
                'max_height' => '3000'
            )); 
         
            if($this->upload->do_upload())
            {
                $data_upload = $this->upload->data();
                // $this->image_model->image_upload($data_upload);
                $this->image_lib->initialize(array(
                    'image_library' => 'gd2',
                    'source_image' => './img/'. $data_upload['file_name'],
                    'overwrite'=>true,
                    'maintain_ratio' => false,
                    'create_thumb' => true,
                    'quality' => '100%',
                    'width' => 169,
                    'height' => 220
                ));

                $data_image = array(
                    'foto'=>$data_upload['raw_name'].'_thumb'.$data_upload['file_ext'],
                    'kategori'=>$this->input->post('kategori')
                    );
                // var_dump($data_image);
                $image_data = $this->image_model->upload_image($data_image);
                 
                if($this->image_lib->resize())
                {
                    $output = '<h4>Thumb - hasil Resize</h4>';
                    $output .= img('./img/'.$data_upload['raw_name'].'_thumb'.$data_upload['file_ext']);
                    $output .= '<h4 style="margin-top: 30px">Gambar Original</h4>';
                    $output .= img('./img/'.$data_upload['file_name']);
                     
                    $data['output'] = $output;
                }
                else
                {
                    $data['error'] = $this->image_lib->display_errors();
                }
                 
            }
            else
            {
                $data['error'] = $this->upload->display_errors();
            }
        }
         
        $this->load->view('image/image_upload', $data);
	}

    public function galeri()
    {
        $data['galeri'] = $this->image_model->galeri();
        $this->load->view('image/galeri', $data);
    }

}

/* End of file image.php */
/* Location: ./application/controllers/image.php */