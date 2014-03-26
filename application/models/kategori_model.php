<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kategori_model extends CI_Controller {

	function tampil_kategori()
	{
		return $this->db->get('kategori');
	}
	
	function tambah_kategori($data_kategori)
	{
		$this->db->insert('kategori', $data_kategori);
	}

	function hapus_kategori($id)
	{
		return $this->db->delete('kategori',array('id'=>$id));
	}

	function edit_kategori($id)
	{
		$query = $this->db->get_where('kategori',array('id'=>$id));
		return $query->row();
		// var_dump($query);
	}

	function update_kategori($id,$data_update)
	{
		$query = $this->db->update('kategori',$data_update,array('id'=>$id));
	}

}

/* End of file kategori_model.php */
/* Location: ./application/models/kategori_model.php */