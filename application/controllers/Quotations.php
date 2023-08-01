<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quotations extends CI_Controller {
	public function __construct() 
	{
		parent::__construct();	  
		$this->load->helper('form');		  
		$this->load->helper('url');
		$this->load->helper('security');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('ModelQuotations');
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
		$result['quotations'] = $this->ModelQuotations->manage_quotations();
		/* echo "<pre>";
		print_r($result);
		echo "</pre>";
		exit();  */
		$this->load->view('header');
		$this->load->view('manage_quotations',$result);
		$this->load->view('footer');
	}
	public function delete_quotations()
	{
		$this->isLoggedIn();
		$quotation_id = $this->uri->segment('3');
		$result = $this->ModelQuotations->delete_quotations($quotation_id);
		redirect(base_url().'quotations', 'refresh');	
	}
}
