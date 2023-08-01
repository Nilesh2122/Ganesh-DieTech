<?php
if ( !defined( 'BASEPATH' ) )exit( 'No direct script access allowed' );

Class ModelDesigner extends CI_Model 
{
    public function __construct() 
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
    }
    public function manage_designer()
    {
        $this->db->from( 'user_tbl' );
        $this->db->where( 'role', 2);
        $this->db->where( 'active_state', 1);
        $this->db->order_by( 'user_tbl.user_id', 'desc' );
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
    public function add_designer_process($data)
    {
        $this->db->select( '*' );
        $this->db->from( 'user_tbl' );
        $this->db->where( 'email', $data['email']);
        $this->db->where( 'role', 2);
        $query = $this->db->get();
        if ($query->num_rows() > 0)
        {
            $response_object = array( 'success' => false, 'status_code' => '0', 'message' => 'There is already an account with this email.', 'data' => NULL );
        }
        else
        {
            $this->db->insert( 'user_tbl', $data );            
            if ( $this->db->affected_rows() > 0 ) 
            {
                $response_object = array( 'success' => true, 'status_code' => '1', 'message' => 'Designer added successful.');
            }
            else
            {
                $response_object = array( 'success' => false, 'status_code' => '0', 'message' => 'failed.', 'data' => NULL );
            }
        }
        return $response_object;
    }
    public function edit_designer($desinger_id)
    {
        $this->db->from( 'user_tbl' );
        $this->db->where( 'user_tbl.user_id', $desinger_id);
        $query = $this->db->get();
        $result = $query->row_array();
        return $result;
    }
    public function edit_designer_process($data)
    {
        $this->db->where('user_id', $data['user_id']);
        $this->db->update('user_tbl',$data);
        if ( $this->db->affected_rows() > 0 ) 
        {
            $response_object = array( 'success' => true, 'status_code' => '1', 'message' => 'Designer Edit sucessfully.' );
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