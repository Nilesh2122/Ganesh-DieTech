<?php
if ( !defined( 'BASEPATH' ) )exit( 'No direct script access allowed' );

Class ModelQuotations extends CI_Model 
{
    public function __construct() 
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
    }
    public function manage_quotations()
    {
        $this->db->select( 'quotations_tbl.*,client_tbl.name' );
        $this->db->join( 'client_tbl','client_tbl.client_id = quotations_tbl.client_id' );
        $this->db->from( 'quotations_tbl' );
        $this->db->where( 'quotations_tbl.active_state', 1);
        $this->db->order_by( 'quotations_tbl.quotation_id', 'desc' );
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
    public function delete_quotations($quotation_id)
    {
        $data['active_state'] = '0';
        $this->db->where('quotation_id', $quotation_id);
        $this->db->update('quotations_tbl',$data);
    }
}

?>