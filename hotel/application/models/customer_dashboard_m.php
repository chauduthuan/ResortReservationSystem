<?php

class customer_dashboard_m extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_reservation_order() {
<<<<<<< HEAD
    	$query = $this->db->query("SELECT * FROM reservation WHERE customer_id IN (SELECT customer_id FROM customer WHERE customer_email = '".  UID  ."')");
        // .. (SELECT customer_id FROM customer WHERE customer_id = 1)") is an example that works, trying to grab customer_email
        //$query = $this->db->from('reservation')->get();
=======
        $query = $this->db->query("SELECT * FROM reservation"); //WHERE someelement = anotherElementOfReference
																//maybe add something to user_l and check_login to get
																//a reference to customer_id
>>>>>>> f1e71e3e9fdaff91b49153284f867d5655f241f8
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
