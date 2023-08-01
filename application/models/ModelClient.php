<?php
if ( !defined( 'BASEPATH' ) )exit( 'No direct script access allowed' );

Class ModelClient extends CI_Model 
{
    public function __construct() 
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
    }
    public function manage_client()
    {
        $this->db->from( 'client_tbl' );
        $this->db->order_by( 'client_tbl.client_id', 'desc' );
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
    public function add_client_process($data)
    {
        $this->db->insert( 'client_tbl', $data );            
        if ( $this->db->affected_rows() > 0 ) 
        {
            $response_object = array( 'success' => true, 'status_code' => '1', 'message' => 'Client added successful.');
        }
        else
        {
            $response_object = array( 'success' => false, 'status_code' => '0', 'message' => 'failed.', 'data' => NULL );
        }
        return $response_object;
    }
    public function edit_client($client_id)
    {
        $this->db->from( 'client_tbl' );
        $this->db->where( 'client_tbl.client_id', $client_id);
        $query = $this->db->get();
        $result = $query->row_array();
        $result['die_type'] = explode(',',$result['die_type']);
        $result['drum_size'] = explode(',',$result['drum_size']);
        return $result;
    }
    public function edit_client_process($data)
    {
        $this->db->where('client_id', $data['client_id']);
        $this->db->update('client_tbl',$data);
        if ( $this->db->affected_rows() > 0 ) 
        {
            $response_object = array( 'success' => true, 'status_code' => '1', 'message' => 'Client Edit sucessfully.' );
        } 
        else 
        {
            $response_object = array( 'success' => false, 'status_code' => '0', 'message' => 'failed.');
        }
        return $response_object;
    }
    public function delete_designer($desinger_id)
    {
        $data['active_state'] = '0';
        $this->db->where('user_id', $desinger_id);
        $this->db->update('user_tbl',$data);
    }
}

?>