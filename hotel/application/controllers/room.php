<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Room extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function check_login()
	{
		if(!UID)
			redirect("login");
	} 

	public function add()
	{
		$viewdata = array();
		if($this->input->post("room_type") && $this->input->post("min_id") && $this->input->post("max_id"))
		{
			$new_room_type = $this->input->post("room_type");
			$new_min_id = intval($this->input->post("min_id"));
			$new_max_id = intval($this->input->post("max_id"));

			$rooms_avail = count($this->room_m->getRoomRange($new_room_type, $new_min_id, $new_max_id));

			if($new_min_id>$new_max_id) {
				$viewdata['error'] = "Range is not valid [$new_min_id, $new_max_id]";
			} else if($rooms_avail!==0) {
				$viewdata['error'] = "Range is not available [$new_min_id, $new_max_id]";
			} else {
				$this->room_m->addRoomRange($new_room_type, $new_min_id, $new_max_id);
				redirect("/room");
			}
		}

		if(UID != NULL)
		{
			$customer = $this->customer_m->get_customer_with_email(UID);
			$customer_full_name = $customer[0]->customer_firstname." ".$customer[0]->customer_lastname;
			//echo("<script>console.log('UID: ".json_encode(UID)."');</script>");
			//echo("<script>console.log('Fullname: ".json_encode($customer_full_name)."');</script>");
			$data = array('title' => 'Add Rooms - DB Hotel Management System', 'page' => 'room', 'full_name' => $customer_full_name);

		}
		else
		{
			$data = array('title' => 'Add Rooms - DB Hotel Management System', 'page' => 'room'); 	
		}
		$this->load->view('header', $data);

		$room_types = $this->room_m->get_room_types();
		$viewdata['room_types'] = $room_types;
		$this->load->view('room/add',$viewdata);

		$this->load->view('footer');
	}

	function delete($min_id, $max_id)
	{
		$this->room_m->deleteRoomRange($min_id, $max_id);
		redirect("/room");
	}

	public function edit($room_type, $min_id, $max_id)
	{
		$viewdata = array();
		if($this->input->post("room_type") && $this->input->post("min_id") && $this->input->post("max_id"))
		{
			$new_room_type = $this->input->post("room_type");
			$new_min_id = intval($this->input->post("min_id"));
			$new_max_id = intval($this->input->post("max_id"));

			$rooms_avail = count($this->room_m->isAvailRange($room_type, $new_min_id, $new_max_id));

			if($new_min_id>$new_max_id) {
				$viewdata['error'] = "Range is not valid [$new_min_id, $new_max_id]";
			} else if($rooms_avail!==0) {
				$viewdata['error'] = "Range is not available [$new_min_id, $new_max_id]";
			} else {
				$this->room_m->deleteRoomRange($min_id, $max_id);
				$this->room_m->addRoomRange($new_room_type, $new_min_id, $new_max_id);
				redirect("/room");
			}
		}

		if(UID != NULL)
		{
			$customer = $this->customer_m->get_customer_with_email(UID);
			$customer_full_name = $customer[0]->customer_firstname." ".$customer[0]->customer_lastname;
			//echo("<script>console.log('UID: ".json_encode(UID)."');</script>");
			//echo("<script>console.log('Fullname: ".json_encode($customer_full_name)."');</script>");
			$data = array('title' => 'Edit Rooms - DB Hotel Management System', 'page' => 'room', 'full_name' => $customer_full_name);

		}
		else
		{
			$data = array('title' => 'Edit Rooms - DB Hotel Management System', 'page' => 'room'); 	
		}
		$this->load->view('header', $data);

		$room_types = $this->room_m->get_room_types();

		$room_range = new stdClass();
		$room_range->room_type = $room_type;
		$room_range->min_id = $min_id;
		$room_range->max_id = $max_id;
		$viewdata['room_range'] = $room_range;
		$viewdata['room_types'] = $room_types;
		$this->load->view('room/edit',$viewdata);

		$this->load->view('footer');
	}

	public function index()
	{
		$this->load->helper('url');
		//$rooms = $this->room_m->get_rooms();

		//$viewdata = array('rooms' => $rooms);

		if(UID != NULL)
		{
			$customer = $this->customer_m->get_customer_with_email(UID);
			$customer_full_name = $customer[0]->customer_firstname." ".$customer[0]->customer_lastname;
			//echo("<script>console.log('UID: ".json_encode(UID)."');</script>");
			//echo("<script>console.log('Fullname: ".json_encode($customer_full_name)."');</script>");
			$data = array('title' => 'Rooms - DB Hotel Management System', 'page' => 'room', 'full_name' => $customer_full_name);

		}
		else
		{
			$data = array('title' => 'Rooms - DB Hotel Management System', 'page' => 'room'); 	
		}
		$this->load->view('header', $data);
		//$this->load->view('room/info',$viewdata);
		$this->load->view('room/info');
		$this->load->view('footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */