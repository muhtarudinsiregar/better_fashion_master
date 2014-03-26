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

	

}

/* End of file dashboard_model.php */
/* Location: ./application/models/dashboard_model.php */