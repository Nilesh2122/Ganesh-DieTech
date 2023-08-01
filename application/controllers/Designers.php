<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Designers extends CI_Controller {
	public function __construct() 
	{
		parent::__construct();	  
		$this->load->helper('form');		  
		$this->load->helper('url');
		$this->load->helper('security');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('ModelDesigner');
	}
	function isLoggedIn() 
	{
		if (!$this->session->userdata('user_id')) {
			redirect(base_url(), 'refresh');
		}		
	}
	public function index()
	{
		$this->isLoggedIn();
		$result['designer'] = $this->ModelDesigner->manage_designer();
		$this->load->view('header');
		$this->load->view('manage_designer',$result);
		$this->load->view('footer');
	}
	public function add_designer()
	{
		$this->isLoggedIn();
		$this->load->view('header');
		$this->load->view('add_designer');
		$this->load->view('footer');
	}
	public function add_designer_process()
	{
		$data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'password' => base64_encode($this->input->post('password')),
			'role' => 2,
			'created_at' => date('Y-m-d H:i:s')
		);
		$response_data = $this->ModelDesigner->add_designer_process($data);
		echo json_encode($response_data);
    }
	public function edit_designer()
	{
		$this->isLoggedIn();
		$desinger_id = $this->uri->segment(3);
		$result['designer'] = $this->ModelDesigner->edit_designer($desinger_id);
		$this->load->view('header');
		$this->load->view('edit_designer',$result);
		$this->load->view('footer');
	}
	public function edit_designer_process()
	{
		$data = array(
			'user_id' => $this->input->post('user_id'),
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'password' => base64_encode($this->input->post('password')),
			'role' => 2,
			'created_at' => date('Y-m-d H:i:s')
		);
		$response_data = $this->ModelDesigner->edit_designer_process($data);
		echo json_encode($response_data);
    }
	public function delete_designer()
	{
		$this->isLoggedIn();
		$desinger_id = $this->uri->segment('3');
		$result = $this->ModelDesigner->delete_designer($desinger_id);
		redirect(base_url().'designers', 'refresh');	
	}
	
}
