<?php

class customer_dashboard_m extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_reservation_order() {
    	$query = $this->db->query("SELECT * FROM reservation WHERE customer_id IN (SELECT customer_id FROM customer WHERE customer_email = '".  UID  ."')");
        // .. (SELECT customer_id FROM customer WHERE customer_id = 1)") is an example that works, trying to grab customer_email
        //$query = $this->db->from('reservation')->get();
        $data = array();
        
        if($query->num_rows() > 0){
            foreach(@$query->result() as $row) {
                $data[] = $row;
            }
        }
        if(count($data)) {
            return $data;
        }
        return false;
    }

    function get_restaurant_order() {
        $query = $this->db->from('restaurant_booking')->get();
        $data = array();

        if($query->num_rows() > 0){
            foreach(@$query->result() as $row) {
                $data[] = $row;
            }
        }

        if(count($data)) {
            return $data;
        }
        return false;
    }
    
}
