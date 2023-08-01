<?php
if ( !defined( 'BASEPATH' ) )exit( 'No direct script access allowed' );

Class ModelCreatequotations extends CI_Model 
{
    public function __construct() 
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
    }
    public function add_quotations_process($data)
    {
        $this->db->insert( 'quotations_tbl', $data );            
        if ( $this->db->affected_rows() > 0 ) 
        {
            $response_object = array( 'success' => true, 'status_code' => '1', 'message' => 'Quotations added successful.');
        }
        else
        {
            $response_object = array( 'success' => false, 'status_code' => '0', 'message' => 'failed.', 'data' => NULL );
        }
        return $response_object;
    }
    public function all_custom_values()
    {
        $this->db->select( '*' );
        $this->db->from( 'customevalue_tbl' );
        $query = $this->db->get();
        if ($query->num_rows() > 0)
        {
            $result['customvalue'] = $query->row_array();
            $result['customvalue'] = json_encode($result['customvalue']);
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
        $query = $this->db->get();
        if ($query->num_rows() > 0)
        {
            $result['wood_price'] = $query->result_array();
           /*  for($i=0;$i<count($result['wood_price']);$i++)
            {
                $obj = json_decode($result['wood_price'][$i]['wood_value']);
                $result['wood_price'][$i]['wood_value'] = (array)$obj;
            } */
            /* $obj = json_decode($result['wood_price']['wood_value']);
            $result['wood_price']['wood_value'] = (array)$obj; */

        }else{
            $result['wood_price'] = '';
        }
       
        return $result;
    }
    public function get_client_discount($client_id)
    {
        $this->db->select( '*' );
        $this->db->from( 'client_tbl' );
        $this->db->where( 'client_id', $client_id);
        $query = $this->db->get();
        if ($query->num_rows() > 0)
        {
            $result = $query->row_array();

        }else{
            $result = '';
        }
       
        return $result;
    }
}

?>