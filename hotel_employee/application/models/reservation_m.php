<?php

class Reservation_m extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function get_available_rooms($room_type, $checkin_date, $checkout_date)
    {
        $query = $this->db->query("CALL get_available_rooms('$room_type','$checkin_date','$checkout_date')");
        $this->db->reconnect();
        $data = array();

        foreach (@$query->result() as $row)
        {
            $data[] = $row;
        }

        if(count($data))
            return $data;
        return false;
    }

    public function add_reservation($data, $date=NULL)
    {
        $data['reservation_date'] = $date;
        $query = $this->db->insert('reservation', $data);
//        return $query->affected_rows();
    }

    function get_reservation_types()
    {
        $query = $this->db->from('reservation_type')->get();
        $data = array();

        foreach (@$query->result() as $row)
        {
            $data[] = $row;
        }
        if(count($data))
            return $data;
        return false;
    }

    function addReservationType($rType_name, $rType_payment_time, $refund_if_canceled, $original_base_rate, $additional_base_rate, $min_days_before_reservation, $notice_of_payment)
    {
        $data = array('rType_name' => $rType_name, 'rType_payment_time' => $rType_payment_time, 'refund_if_canceled' => $refund_if_canceled, 'original_base_rate' => $original_base_rate,
                      'additional_base_rate' => $additional_base_rate, 'min_days_before_reservation' => $min_days_before_reservation, 'notice_of_payment' => $notice_of_payment);
        $this->db->insert('reservation_type', $data);
        return $this->db->affected_rows();
    }

    function deleteReservationType($rType_id)
    {
        $this->db->delete('reservation_type', array('rType_id' => $rType_id));
        return $this->db->affected_rows();
    }

    function editReservationType($rType_name, $rType_payment_time, $refund_if_canceled, $original_base_rate, $additional_base_rate, $min_days_before_reservation, $notice_of_payment)
    {
      $data = array('rType_name' => $rType_name, 'rType_payment_time' => $rType_payment_time, 'refund_if_canceled' => $refund_if_canceled, 'original_base_rate' => $original_base_rate,
                    'additional_base_rate' => $additional_base_rate, 'min_days_before_reservation' => $min_days_before_reservation, 'notice_of_payment' => $notice_of_payment);

        $this->db->where('rType_id', $rType_id);
        $this->db->update('reservation_type', $data);
    }

    function getReservationType($rType_name)
    {
        $query = $this->db->get_where('reservation_type', array('rType_name' => $rType_name));
        return $query->result();
    }
}
