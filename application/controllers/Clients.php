<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clients extends CI_Controller {
	public function __construct() 
	{
		parent::__construct();	  
		$this->load->helper('form');		  
		$this->load->helper('url');
		$this->load->helper('security');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('ModelClient');
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
		$result['client'] = $this->ModelClient->manage_client();
		$this->load->view('header');
		$this->load->view('manage_client',$result);
		$this->load->view('footer');
	}
	public function add_client()
	{
		$this->isLoggedIn();
		$this->load->view('header');
		$this->load->view('add_client');
		$this->load->view('footer');
	}
	public function add_client_process()
	{
		$die_type = implode(",",$this->input->post('die_type'));
        $drum_size = implode(",",$this->input->post('drumsize'));

		$data = array(
			'name' => $this->input->post('name'),
			'city' => $this->input->post('city'),
			'die_type' => $die_type,
			'drum_size' => $drum_size,
			'discount' => $this->input->post('discount'),
			'user_id' => $this->session->userdata('user_id'),
			'created_at' => date('Y-m-d H:i:s')
		);
		$response_data = $this->ModelClient->add_client_process($data);
		echo json_encode($response_data);
    }
	public function edit_client()
	{
		$this->isLoggedIn();
		//$this->isLoggedIn();
		$client_id = $this->uri->segment(3);
		$result['client'] = $this->ModelClient->edit_client($client_id);
		/* echo "<pre>";
		print_r($result);
		echo "</pre>";
		exit(); */
		$this->load->view('header');
		$this->load->view('edit_client',$result);
		$this->load->view('footer');
	}
	public function edit_client_process()
	{
		$die_type = implode(",",$this->input->post('die_type'));
        $drum_size = implode(",",$this->input->post('drumsize'));

		$data = array(
			'client_id' => $this->input->post('client_id'),
			'name' => $this->input->post('name'),
			'city' => $this->input->post('city'),
			'die_type' => $die_type,
			'drum_size' => $drum_size,
			'discount' => $this->input->post('discount'),
			'user_id' => 1,
			'created_at' => date('Y-m-d H:i:s')
		);
		$response_data = $this->ModelClient->edit_client_process($data);
		echo json_encode($response_data);
    }
	public function delete_designer()
	{
		$this->isLoggedIn();
		//$this->isLoggedIn();
		$desinger_id = $this->uri->segment('3');
		$result = $this->ModelDesigner->delete_designer($desinger_id);
		redirect(base_url().'designers', 'refresh');	
	}
}
