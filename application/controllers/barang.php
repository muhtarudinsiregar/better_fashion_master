<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('barang_model');
		$this->load->library(array('upload','image_lib'));
		$this->load->helper('html','file');
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

     public function detail_barang($id)//$id di dalem fungsi
     {
     	$data = array(
     		'judul'=>"Detail Barang",
     		'content'=>'barang/portofolio_barang',
     		'detail_barang'=>$this->barang_model->detail_barang($id)
     		);
     	$this->load->view('template/admin/index', $data);

     }

     public function hapus_barang($id)
     {
     	$this->load->helper('file');
     	// $path = $_SERVER['DOCUMENT_ROOT'].'/img/';
     	$hapus = $this->barang_model->hapus_file_gambar($id);
     	$hapus = (array) $hapus;
     	// $gambar1 = $hapus['foto'];
     	// $gambar2 = $hapus['foto_asli'];

     	foreach ($hapus as $key => $value) {
     		// var_dump($value);
     		$path_to_file = 'img/'.$value;
	     	if(unlink($path_to_file)) {
	     		$this->session->set_flashdata('notifikasi', '<div class="alert alert-success"><strong>Berhasil </strong>Menghapus Barang </div>');	   
	     	
	     		// redirect('barang');
	     	}
	     	else{
	     		echo 'errors occured';
	     	}
	    }
     	
     	
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

     public function update_barang($id)
     {
          $config = $this->upload->initialize(array(
               'upload_path' => './img/',
               'allowed_types' => 'png|jpg|gif|jpeg',
               'max_size' => '5000',
               'max_width' => '3000',
               'max_height' => '3000'
               )); 
          $this->load->library('upload', $config);

          if($this->upload->do_upload())
          {
               $data_upload = $this->upload->data();
               
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

               $data_update = array(
                    'foto'=>$data_upload['raw_name'].'_thumb'.$data_upload['file_ext'],
                    'foto_asli'=>$data_upload['raw_name'].$data_upload['file_ext'],
                    'nama'=>$this->input->post('nama'),
                    'harga'=>$this->input->post('harga'),
                    'detail_barang'=>$this->input->post('detail_barang'),
                    'kategori'=>$this->input->post('kategori'),
                    'tags'=>$this->input->post('tag')            
                    );
                // var_dump($data_update);
               $this->barang_model->update_barang($id,$data_update);
               $this->session->set_flashdata('notifikasi', '<div class="alert alert-success"><strong>Berhasil</strong> Mengedit Barang  </div>');
               

               if($this->image_lib->resize())
               {
                    $output = '<h4>Thumb - hasil Resize</h4>';
                    $output .= img('./img/'.$data_upload['raw_name'].'_thumb'.$data_upload['file_ext']);
                    $output .= '<h4 style="margin-top: 30px">Gambar Original</h4>';
                    $output .= img('./img/'.$data_upload['file_name']);

                    $data['output'] = $output;
                    redirect('barang');
               }
               else
               {
                    $data['error'] = $this->image_lib->display_errors();
               }


               
                    redirect('barang');
                   // return true;
          }
          else
          {
               $data['error'] = $this->image_lib->display_errors();
               $error = array('error' => $this->upload->display_errors());
                // $this->load->view('barang/error', $data);
          }
     	// $data_update = array(
     	// 	'nama'=>$this->input->post('nama'),
     	// 	'foto'=>$this->input->post('foto'),
     	// 	'harga'=>$this->input->post('harga'),
     	// 	'detail_barang'=>$this->input->post('detail_barang'),
     	// 	'kategori'=>$this->input->post('kategori')
     	// 	);
     	
     	
     }



     public function upload_barang()
     {
     	$config = $this->upload->initialize(array(
     		'upload_path' => './img/',
     		'allowed_types' => 'png|jpg|gif|jpeg',
     		'max_size' => '5000',
     		'max_width' => '3000',
     		'max_height' => '3000'
     		)); 
     	$this->load->library('upload', $config);

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
     			'foto_asli'=>$data_upload['raw_name'].$data_upload['file_ext'],
     			'nama'=>$this->input->post('nama'),
     			'harga'=>$this->input->post('harga'),
     			'detail_barang'=>$this->input->post('detail_barang'),
     			'kategori'=>$this->input->post('kategori'),
     			'tags'=>$this->input->post('tag')            
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


     		$this->session->set_flashdata('notifikasi', '<div class="alert alert-success">Berhasil Menambah Barang </div>');
     		redirect('barang/upload_barang');
                   // return true;
     	}
     	else
     	{
     		$data['error'] = $this->image_lib->display_errors();
     		$error = array('error' => $this->upload->display_errors());
                // $this->load->view('barang/error', $data);
     	}



     	$data = [
     	'content'=>"barang/image_upload",
     	'judul'=>"Tambah Barang"
     	];
     	$this->load->view('template/admin/index', $data);
     }

     public function proses_upload()
     {



     }

    // function galeri()
    // {
    //     $data['galeri'] = $this->barang_model->galeri();
    //     $this->load->view('barang/galeri', $data);
    // }
 }