<?php

class home_model extends CI_Model{
	public function view_all($limit = 5){
		$this->db->limit($limit);
		$result = $this->db->get('users');
		return $result->result();
	}
}
