<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model{
	
	public function allUser(){
		$query = $this->db->get('user');
		if($query->num_rows() > 0)
			return $query->result();
		else
			false;
	}

}

/* End of file User_model.php */
/* Location: ./application/model/user/User_model.php */
