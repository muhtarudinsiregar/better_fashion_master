<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Artikel_model extends CI_Model {

	public function tambah_artikel($data_input)
	{
		$this->db->insert('artikel',$data_input);
	}
	
	public function tampil_artikel()
	{
		return $this->db->get('artikel')->result();
	}

	public function edit_artikel($id)
	{
		$query = $this->db->get_where('artikel',array('id'=>$id));
		return $query->row();
	}

	public function update_artikel($data_artikel,$id)
	{
		$query = $this->db->update('artikel',$data_artikel,array('id'=>$id));
	}

	public function hapus_artikel($id)
	{
		$this->db->delete('artikel',array('id'=>$id));
	}


	

}

/* End of file artikel_model.php */
/* Location: ./application/models/artikel_model.php */