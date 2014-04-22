<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_model extends CI_Model {

	public function all()
	{
		return $this->db->get('contact')->result();
	}

	public function detail_contact($id)
	{
		$query = $this->db->get_where('contact',array('id'=>$id));
		return $query->row();
	}


	function update_status($id,$data_update)
	{
		$query = $this->db->update('contact',$data_update,array('id'=>$id));
	}


}

/* End of file contact_model.php */
/* Location: ./application/models/contact_model.php */