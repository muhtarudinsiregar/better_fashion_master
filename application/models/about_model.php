<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About_model extends CI_Model {

	function tampil_visimisi()
	{
		$query = $this->db->get('about');
		return $query->row();
	}

	function edit_visi($id)
	{
		$query = $this->db->get_where('about',array('id'=>$id));
		return $query->row();
		// var_dump($query);
	}

	function update_visi($id,$data_update)
	{
		$query = $this->db->update('about',$data_update,array('id'=>$id));
	}

	function edit_misi($id)
	{
		$query = $this->db->get_where('about',array('id'=>$id));
		return $query->row();
		// var_dump($query);
	}

	function update_misi($id,$data_update)
	{
		$query = $this->db->update('about',$data_update,array('id'=>$id));
	}

}

/* End of file about_model.php */
/* Location: ./application/models/about_model.php */