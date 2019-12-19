<?php

class Login_Controller extends CI_Controller{

	function logout(){
		$this->session->sess_destroy();
		redirect('home');
	}

	public function login(){
		$this->load->model('M_login');
		$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);
		$hasil = $this->M_login->loginAdmin($data);

		if($hasil-> num_rows() > 0){
			foreach ($hasil->result_array() as $sess) {
				$sess_data['logged_in'] = 'sudah login';
				$sess_data['username'] = $sess['username'];
				$this->session->set_userdata($sess_data);
			}
			redirect(base_url('Main_Controller/admin'));
		}else{
			redirect(base_url('Main_Controller/index'));
		}
	}
}