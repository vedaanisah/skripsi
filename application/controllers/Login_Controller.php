<?php

class Login_Controller extends CI_Controller{
	public function __construct(){
        parent::__construct();
		$this->load->model(['M_admin','M_login']);
    }

	function index(){
		if(!empty($this->session->userdata('userdata')) || $this->session->has_userdata('userdata')){
			redirect('administrator-page');
		}
		$this->load->view('user/user-login-form');
	}

	function login(){
		$user_data['logged_in'] = false;
		$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);
		$hasil = $this->M_login->loginAdmin($data);
		
		if($hasil->num_rows() > 0){
			$user_data['logged_in'] = true;
			foreach ($hasil->result_array() as $key => $value) {
				$user_data['user_data'][$key] = $value;
			}
			$this->session->set_userdata('userdata', $user_data);
			redirect('administrator-page');
		}
		$this->load->view('user/user-login-form');
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('login-page');
	}
}