<?php

class Customer_m extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_customer($TCno)
    {
        $query = $this->db->get_where('customer', array('customer_TCno' => $TCno));
        if($query) {
            return $query->result();
        } else {
            return $query;
        }
    } 

    function get_customer_with_email($customer_email)
    {
        $query = $this->db->get_where('customer', array('customer_email' => $customer_email));
        if($query) {
            return $query->result();
        } else {
            return $query;
        }
    } 


    function add_customer($data)
    {
        $customer['customer_firstname'] = $data['customer_firstname'];
        $customer['customer_lastname'] = $data['customer_lastname'];
        if (array_key_exists('customer_TCno', $customer)){
            $customer['customer_TCno'] = $data['customer_TCno'];
        }
        $customer['customer_city'] = $data['customer_city'];
        $customer['customer_country'] = $data['customer_country'];
        $customer['customer_telephone'] = $data['customer_telephone'];
        $customer['customer_email'] = $data['customer_email'];

        $this->db->insert('customer', $customer);
        // $this->db->insert('customer', $data);
//        return $this->db->affected_rows();
    }

    function add_customer_authentication($data){
        $auth['customer_email'] = $data['customer_email'];
        $auth['customer_password'] = $data['customer_password'];
        $this->db->insert('customer_authentication', $auth);
    }

    function register_customer($data){
        $this->add_customer_authentication($data);
        $this->add_customer($data);
    }


    function get_active_customers()
    {
        $date = date('Y-m-d');
//        $q = $this->db->query("CALL get_customers('$date')");
//        $data = array();
//        foreach (@$q->result() as $customer) {
//            $data[] = $customer;
//        }
//        return $data;
        $data = array();
        $this->db->select('*');
        $this->db->from('room_sales');
        $this->db->join('customer', 'room_sales.customer_id = customer.customer_id');
        $this->db->where('checkout_date >=',"$date");
        $this->db->where('checkin_date <=',"$date");
        $q = $this->db->get();
        if ($q->num_rows() > 0){
            foreach ($q->result() as $customer) {
                $data[] = $customer;
            }
        }
        return $data;
    }

}
