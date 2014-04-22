<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model {

	function galeri()
	{
		$this->db->order_by('id', 'desc');
	 	$query = $this->db->get('barang',4,0)->result();
	 	return $query;
	}

	function portofolio()
	{
		$this->db->order_by('id', 'desc');
	 	$query = $this->db->get('barang')->result();
	 	return $query;
	}

	function detail_barang($id)
	{
		$query = $this->db->get_where('barang',array('id'=>$id));
		return $query->row();
	}
	
	function blog()
	{
		$this->db->order_by('id', 'desc');
	 	$query = $this->db->get('artikel')->result();
	 	return $query;
	}

	function detail_artikel($id)
	{
		$query = $this->db->get_where('artikel',array('id'=>$id));
		return $query->row();
	}

	function tampil_artikel()
	{	
		$this->db->order_by('id', 'desc');
		$query = $this->db->get('artikel',4,0)->result();
		return $query;
	}

	function tampil_kategori()
	{
		return $this->db->get('kategori')->result();
	}

	function insert_contact($data_contact)
	{
		$this->db->insert('contact', $data_contact);
	}
	public function kategori_detail($id)
	{
		$this->db->select('*');
		$this->db->from('kategori');
		$this->db->join('barang', 'barang.kategori = kategori.id');
		$this->db->where('kategori.id', $id);
		return $query = $this->db->get()->result();

	}

	
}

/* End of file image_model.php */
/* Location: ./application/models/image_model.php */