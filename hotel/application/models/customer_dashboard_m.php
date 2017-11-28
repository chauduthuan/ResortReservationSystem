<?php

class customer_dashboard_m extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_reservation_order() {
        $query = $this->db->query("SELECT * FROM reservation"); //WHERE someelement = anotherElementOfReference
																//maybe add something to user_l and check_login to get
																//a reference to customer_id
        $data = array();

        foreach(@$query->result() as $row) {
            $data[] = $row;
        }

        if(count($data)) {
            return $data;
        }
        return false;
    }

    function get_restaurant_order() {
        $query = $this->db->from('restaurant_booking')->get();
        $data = array();

        foreach(@$query->result() as $row) {
            $data[] = $row;
        }

        if(count($data)) {
            return $data;
        }
        return false;
    }
    
}
