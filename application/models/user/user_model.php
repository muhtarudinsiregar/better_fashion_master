<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

	function tambah_admin($data_admin)
	{
		return $this->db->insert('users',$data_admin);
	}

	function cek_username()
	{
		$this->db->select('username');
		$query = $this->db->get('users');
		return $query->result();
	}

	function get_all()
	{
		return $this->db->get('users');
	}

	function hapus_admin($id)
	{
		$this->db->delete('users',array('id'=>$id));
	}

	function edit_admin($id)
	{
		$query = $this->db->get_where('users',array('id'=>$id));
		return $query->row();
		// var_dump($query);
	}

	function update_admin()
	{
		# code...
	}
	

}

/* End of file user_model.php */
/* Location: ./application/models/user/user_model.php */