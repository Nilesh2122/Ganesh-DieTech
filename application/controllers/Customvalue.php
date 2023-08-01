<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customvalue extends CI_Controller {
	public function __construct() 
	{
		parent::__construct();	  
		$this->load->helper('form');		  
		$this->load->helper('url');
		$this->load->helper('security');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('ModelCustomvalue');
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
		$result['data'] = $this->ModelCustomvalue->all_customvalue();
		/* echo "<pre>";
		print_r($result);
		echo "</pre>";
		exit();  */
		$this->load->view('header');
		$this->load->view('customvalue',$result);
		$this->load->view('footer');
	}
	public function add_customvalue_process()
	{
		/* echo "<pre>";
		print_r($_POST);
		echo "</pre>";
		exit();  */
		$this->isLoggedIn();
		$data = array(
			'value_id' => $this->input->post('value_id'),
			'stripping_per' => $this->input->post('str_per'),
			'cutting_price' => $this->input->post('cut_price'),
			'creasing_price' => $this->input->post('creas_price'),
			'slug_price' => $this->input->post('slug_price'),
			'rubber_price' => $this->input->post('rubber_price'),
			'welding_price' => $this->input->post('welding_price'),
			'fitting_price' => $this->input->post('fitting_price'),
			'laser_price' => $this->input->post('laser_price'),
			'created_at' => date('Y-m-d H:i:s')
		);
		$response_data = $this->ModelCustomvalue->add_customvalue_process($data);
		echo json_encode($response_data);
    }
	public function add_woodprice_process()
	{
		/* echo "<pre>";
		print_r($_POST);
		echo "</pre>";
		exit();  */
		$wood_price = $this->input->post('wood-price');
		unset($_POST['wood-price']);
		$wood_value = $_POST;
		$data = array(
			'wood_price' => $wood_price,
			'wood_value' => json_encode($wood_value),
			'created_at' => date('Y-m-d H:i:s')
		);
		$response_data = $this->ModelCustomvalue->add_woodprice_process($data);
		echo json_encode($response_data);
    }
	public function get_wood_price()
	{
		$woodprice = $this->input->post('woodprice');
        $response_data = $this->ModelCustomvalue->get_wood_price($woodprice);
		/* echo "<pre>";
		print_r($response_data);
		echo "</pre>";
		exit();  */
        echo json_encode($response_data);
    }

}
