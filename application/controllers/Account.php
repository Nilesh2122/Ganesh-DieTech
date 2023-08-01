<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {
	public function __construct() 
	{
		parent::__construct();	  
		$this->load->helper('form');		  
		$this->load->helper('url');
		$this->load->helper('security');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('ModelAccount');
	}
	function isLoggedIn() 
	{
		if (!$this->session->userdata('user_id')) {
			redirect(base_url(), 'refresh');
		}		
	}
	public function index()
	{
		$this->load->view('login');
	}
	public function login_process()
	{
		$data = array(
			'email' => $this->input->post('email'),
			'password' => base64_encode($this->input->post('password'))
		);
		$response_data =$this->ModelAccount->login_process($data);
		
		if($response_data)
		{
			if($response_data['status_code'] == 1)
			{
				$this->session->set_userdata(array(
					'user_id'  => $response_data['data']['user_id'],
					'name'  => $response_data['data']['name'],
					'email'  => $response_data['data']['email'],
					'role'  => $response_data['data']['role']
				));
			}
		}
		echo json_encode($response_data);	
	}
	public function profile()
	{
		$this->isLoggedIn();
		$user_id = $this->uri->segment(3);
		$result['user'] = $this->ModelAccount->profile($user_id);
		/* echo "<pre>";
		print_r($result);
		echo "</pre>";
		exit(); */
		$this->load->view('header');
		$this->load->view('profile',$result);
		$this->load->view('footer');
	}
	public function edit_profile_process()
	{
		$data = array(
			'user_id' => $this->input->post('user_id'),
			'name' => $this->input->post('name'),
			'password' => base64_encode($this->input->post('password'))
		);
		$response_data = $this->ModelAccount->edit_profile_process($data);
		echo json_encode($response_data);
    }
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url(), 'refresh');
	}
}
