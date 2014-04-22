<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Barang_model extends CI_Model {

	function tampil_kategori()
	{
		return $this->db->get('kategori');
	}

	function tampil_barang()
	{
		return $this->db->get('barang');
	}
	
	function upload_image($data_image)
	{
		$this->db->insert('barang', $data_image);
	}
	function galeri()
	{
		return $this->db->get('barang',4,1);
	}

	function detail_barang($id)
	{
		$query = $this->db->get_where('barang',array('id'=>$id));
		return $query->row();
	}
	function hapus_barang($id)
	{
		return $this->db->delete('barang',array('id'=>$id));
	}

	function edit_barang($id)
	{
		$query = $this->db->get_where('barang',array('id'=>$id));
		return $query->row();
		// var_dump($query);
	}

	function update_barang($id,$data_update)
	{	
		$query = $this->db->update('barang',$data_update,array('id'=>$id));
		// var_dump($query);
	}
	function hapus_file_gambar($id)
	{
		$this->db->select('foto,foto_asli');

		$query = $this->db->get_where('barang',array('id' =>$id));
		return $query->row();
	}
<<<<<<< HEAD

=======
>>>>>>> 8b5b107712a4d44b224f16215874faa20ddd7c46
}

/* End of file image_model.php */
/* Location: ./application/models/image_model.php */