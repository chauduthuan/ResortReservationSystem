<?php

class customer_dashboard_m extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_reservation_order() {

    	$query = $this->db->query("SELECT * FROM reservation WHERE customer_id IN (SELECT customer_id FROM customer WHERE customer_email = '".  UID  ."' AND checkout_date > (SELECT CURDATE())) ORDER BY checkin_date asc, room_id asc");

        $data = array();
        
        if($query->num_rows() > 0){
            foreach(@$query->result() as $row) {
                $data[] = $row;
            }
        }
 
        return $data;
    }

    function get_restaurant_order() {
    	$query = $this->db->query("SELECT * FROM restaurant_booking WHERE customer_id IN (SELECT customer_id FROM customer WHERE customer_email = '".  UID  ."')");

        $data = array();
        
        if($query->num_rows() > 0){
            foreach(@$query->result() as $row) {
                $data[] = $row;
            }
        }

        return $data;
    }
    
}
