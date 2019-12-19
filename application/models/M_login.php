<?php

class M_login extends CI_Model{	
	public function prosesslogin($username,$password){
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		return $this->db->get('admin')->row();
	
	}
	function loginAdmin($data){
		return $this->db->get_where('admin',$data);
	}
}