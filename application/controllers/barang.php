<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('barang_model');
		$this->load->library(array('upload','image_lib'));
		$this->load->helper('html');
	}

    public function index()
    {
        $data = array(
            'tampil'=>$this->barang_model->tampil_barang(),
            'judul'=>'Tampil Barang',
            'content'=>'barang/tampil_barang'
            );
        $this->load->view('template/admin/index', $data);
    }

     public function detail_barang($id)
    {
        $data = array(
            'judul'=>"Detail Barang",
            'content'=>'barang/detail_barang',
            'detail_barang'=>$this->barang_model->detail_barang($id)
            );
        $this->load->view('template/index', $data);

    }

    public function hapus_barang($id)
    {
        $this->barang_model->hapus_barang($id);
        redirect('barang');
    }

    public function edit_barang($id)
    {
        $data = array(
            'judul'=>'Edit Barang',
            'content'=>'barang/edit_barang',
            'data_edit'=>$this->barang_model->edit_barang($id)
            );

        $this->load->view('template/admin/index',$data);
    }

    public function update_barang()
    {
       $data_update = array(
            'nama'=>$this->input->post('nama'),
            'foto'=>$this->input->post('foto'),
            'harga'=>$this->input->post('harga'),
            'detail_barang'=>$this->input->post('detail_barang'),
            'kategori'=>$this->input->post('kategori')
            );
        $this->barang_model->edit_barang($id,$data_update);
        redirect('barang');
    }



	public function upload_barang()
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
                    'nama'=>$this->input->post('nama'),
                    'harga'=>$this->input->post('harga'),
                    'detail_barang'=>$this->input->post('detail_barang'),
                    'kategori'=>$this->input->post('kategori')            
                    );
                // var_dump($data_image);
                $image_data = $this->barang_model->upload_image($data_image);
                 
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
         
        $this->load->view('barang/image_upload', $data);
	}

    public function galeri()
    {
        $data['galeri'] = $this->barang_model->galeri();
        $this->load->view('barang/galeri', $data);
    }

   


}

/* End of file barang.php */
/* Location: ./application/controllers/barang.php */