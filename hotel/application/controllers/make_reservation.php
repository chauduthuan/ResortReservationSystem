<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reservation extends CI_Controller {

	public function index()
	{
		// If user is logged in, make reservation
		$post = $this->input->post();

		$customer = $this->customer_m->get_customer($post['customer_TCno']);
		$customer = $customer[0];
		$viewdata = array();
		$data = array();
		$data['customer_id'] = $customer->customer_id;
		$data['room_id'] = $post['room_id'];
		$data['checkin_date'] = $post['checkin_date'];
		$data['checkout_date'] = $post['checkout_date'];
		$data['employee_id'] = UID;

		$date = new DateTime();
		$date_s = $date->format('Y-m-d');
		if($date_s>$data['checkin_date']) {
			$viewdata['error'] = "Checkin can't be before then today";
		} else {
			$this->reservation_m->add_reservation($data);
			$this->room_m->add_room_sale($data, $date_s);
			$viewdata['success'] = 'Reservation successfully made';
		}

		$room_types = $this->room_m->get_room_types();
		$viewdata['room_types'] = $room_types;

		$data = array('title' => 'Reservation - DB Hotel Management System', 'page' => 'reservation');
		$this->load->view('header', $data);
		$this->load->view('reservation/add', $viewdata);
		$this->load->view('footer');
	}
}