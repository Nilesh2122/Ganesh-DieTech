<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Createquotations extends CI_Controller {
	public function __construct() 
	{
		parent::__construct();	  
		$this->load->helper('form');		  
		$this->load->helper('url');
		$this->load->helper('security');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('ModelCreatequotations');
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
		$result['data'] = $this->ModelCreatequotations->all_custom_values();
		/* echo "<pre>";
		print_r($result['data'] );
		echo "</pre>";
		exit(); */
		$this->load->view('header');
		$this->load->view('create_quotations',$result);
		$this->load->view('footer');
	}
	public function add_quotations_process()
	{
		/* echo "<pre>";
		print_r($_POST);
		echo "</pre>";
		exit(); */
		$data = array(
			'client_id' => $this->input->post('duplicate_select_client'),
			'die_type' => $this->input->post('die_type'),
			'wood_diameter' => $this->input->post('wood-diameter'),
			'cutting' => $this->input->post('cutting'),
			'creasing' => $this->input->post('creasing'),
			'length' => $this->input->post('length'),
			'width' => $this->input->post('width'),
			'stripping' => $this->input->post('stripping_input'),
			'totalcutting' => $this->input->post('totalCutting_input'),
			'totalcreasing' => $this->input->post('totalCreasing_input'),
			'alluminiumslug' => $this->input->post('alluminiumSlug_input'),
			'rubber' => $this->input->post('rubber_input'),
			'welding' => $this->input->post('welding_input'),
			'fitting' => $this->input->post('fitting_input'),
			'lasercutting' => $this->input->post('lasercutting_input'),
			'total_amount' => $this->input->post('totalamount_input'),
			'discount' => $this->input->post('discount'),
			'wooddie_value' => $this->input->post('wooddie'),
			'woodworkhalfperi_value' => $this->input->post('woodworkhalfperi'),
			'woodworksemiperi_value' => $this->input->post('woodworksemiperi'),
			'customvalue' => $this->input->post('customvalue'),
			'created_at' => date('Y-m-d H:i:s')
		);
		$response_data = $this->ModelCreatequotations->add_quotations_process($data);
		echo json_encode($response_data);
    }
	public function get_client_discount()
	{
		$client_id = $this->input->post('client_id');
        $response_data = $this->ModelCreatequotations->get_client_discount($client_id);
		/* echo "<pre>";
		print_r($response_data);
		echo "</pre>";
		exit();  */
        echo json_encode($response_data);
    }
	
}
