<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login()
	{
		check_already_login();
		$this->load->view('login');
	}
	
	public function process_login()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($post['login'])){
			$this->load->model('user_model');
			$query = $this->user_model->login($post);
			if($query->num_rows() > 0){
				$row = $query->row();
				$params = array(
					'id'=>$row->id,
					'level'=>$row->level,
					'semester'=>$row->semester
				);
				$this->session->set_userdata($params);
				redirect('crud');
			}else{
				$data['error'] = 'Username atau password salah';
				$this->load->view('login', $data);
			}
			
		}
	}
	
	public function logout()
	{
		$params = array('id', 'level');
		$this->session->unset_userdata($params);
		redirect('login');
	}

}
