<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

	public function jml_artikel()
	{
		$query = $this->db->count_all('artikel');
		return $query;
	}

	function setting_blog()
	{
		$query = $this->db->get('setting');
		return $query->row();
	}


	function update_setting($id,$data_update)
	{
		$query = $this->db->update('setting',$data_update,array('id_setting'=>$id));
	}

	public function artikel_terbaru()
	{
		
		$this->db->limit(3);
		$this->db->order_by('id desc');
		$query = $this->db->get('artikel');
		return $query->result();
	}

	function find($kata_kunci)
	{	
		$this->db->like('nama', $kata_kunci); 
		$query = $this->db->get('kategori');
	
		// $query = $this->db->get('artikel');

		if (is_null($query)) {
			echo "Pencarian Tidak Ditemukan";
		}
		return $query->result();
	}

	function pesan()
	{
		$this->db->select('status');
		$this->db->from('contact');
		$this->db->where('status', '0');
		$query = $this->db->count_all_results();
		return $query;
	}

	function pesan_terbaru()
	{
		$this->db->limit(3);
		$this->db->order_by('id desc');
		$query = $this->db->get('contact');
		return $query->result();
	}

	

}

/* End of file dashboard_model.php */
/* Location: ./application/models/dashboard_model.php */