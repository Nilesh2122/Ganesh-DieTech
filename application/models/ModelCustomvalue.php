<?php
if ( !defined( 'BASEPATH' ) )exit( 'No direct script access allowed' );

Class ModelCustomvalue extends CI_Model 
{
    public function __construct() 
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
    }
    public function all_customvalue()
    {
        $this->db->select( '*' );
        $this->db->from( 'customevalue_tbl' );
        $query = $this->db->get();
        if ($query->num_rows() > 0)
        {
            $result['customvalue'] = $query->row_array();
        }else{
            $result['customvalue']['value_id'] = '';
            $result['customvalue']['stripping_per'] = '';
            $result['customvalue']['cutting_price'] = '';
            $result['customvalue']['creasing_price'] = '';
            $result['customvalue']['slug_price'] = '';
            $result['customvalue']['rubber_price'] = '';
            $result['customvalue']['welding_price'] = '';
            $result['customvalue']['laser_price'] = '';
            $result['customvalue']['fitting_price'] = '';
        }

        $this->db->select( '*' );
        $this->db->from( 'woodprice_new_tbl' );
        $this->db->where( 'wood_price', 'wooddie');
        $query = $this->db->get();
        if ($query->num_rows() > 0)
        {
            $result['wood_price'] = $query->row_array();
            $obj = json_decode($result['wood_price']['wood_value']);
            $result['wood_price']['wood_value'] = (array)$obj;

        }else{
            $result['wood_price'] = '';
        }
       
        return $result;
    }
    public function get_wood_price($woodprice)
    {
        $this->db->select( '*' );
        $this->db->from( 'woodprice_new_tbl' );
        $this->db->where( 'wood_price', $woodprice);
        $query = $this->db->get();
        if ($query->num_rows() > 0)
        {
            $result['wood_price'] = $query->row_array();
            $obj = json_decode($result['wood_price']['wood_value']);
            $result['wood_price']['wood_value'] = (array)$obj;

        }else{
            $result['wood_price'] = '';
        }
       
        return $result;
    }
    public function add_customvalue_process($data)
    {
        if($data['value_id'] == '')
        {
            $this->db->insert( 'customevalue_tbl', $data );            
            if ( $this->db->affected_rows() > 0 ) 
            {
                $response_object = array( 'success' => true, 'status_code' => '1', 'message' => 'Custome value added successful.');
            }
            else
            {
                $response_object = array( 'success' => false, 'status_code' => '0', 'message' => 'failed.', 'data' => NULL );
            }
        }else{
            $value_id = $data['value_id'];
            $this->db->where('value_id', $value_id);
            $this->db->update('customevalue_tbl',$data);
            if ( $this->db->affected_rows() > 0 ) 
            {
                $response_object = array( 'success' => true, 'status_code' => '1', 'message' => 'Custome value updated successful.');
            } 
            else 
            {
                $response_object = array( 'success' => false, 'status_code' => '0', 'message' => 'failed.');
            }
        }
        
        return $response_object;
    }
    public function add_woodprice_process($data)
    {
        $this->db->select( '*' );
        $this->db->from( 'woodprice_new_tbl' );
        $this->db->where( 'wood_price', $data['wood_price']);
        $query = $this->db->get();
        if ($query->num_rows() > 0)
        {
            $result = $query->row_array();
            $wood_id = $result['wood_id'];
            $this->db->where('wood_id', $wood_id);
            $this->db->update('woodprice_new_tbl',$data);
            if ( $this->db->affected_rows() > 0 ) 
            {
                $response_object = array( 'success' => true, 'status_code' => '1', 'message' => 'Wood price Updated successful.');
            } 
            else 
            {
                $response_object = array( 'success' => false, 'status_code' => '0', 'message' => 'failed.');
            }
        }
        else
        {
            $this->db->insert( 'woodprice_new_tbl', $data );            
            if ( $this->db->affected_rows() > 0 ) 
            {
                $response_object = array( 'success' => true, 'status_code' => '1', 'message' => 'Wood price added successful.');
            }
            else
            {
                $response_object = array( 'success' => false, 'status_code' => '0', 'message' => 'failed.', 'data' => NULL );
            }
        }
        return $response_object;
    }
}

?>