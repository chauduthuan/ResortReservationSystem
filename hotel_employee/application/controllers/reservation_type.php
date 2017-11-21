<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reservation_type extends CI_Controller {

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

		if($this->input->post("rType_name"))
		{
      $rType_name = $this->input->post("rType_name");
      $rType_payment_time = $this->input->post("rType_payment_time");
      $refund_if_canceled = $this->input->post("refund_if_canceled");
      $original_base_rate = $this->input->post("original_base_rate");
      $additional_base_rate = $this->input->post("additional_base_rate");
      $min_days_before_reservation = $this->input->post("min_days_before_reservation");
      $notice_of_payment = $this->input->post("notice_of_payment");

      //error checking of duplicate FAILS. function is wrong
			if(count($this->reservation_m->getReservationType($rType_name))==0) {
				$this->reservation_m->addReservationType($rType_name, $rType_payment_time, $refund_if_canceled, $original_base_rate, $additional_base_rate, $min_days_before_reservation, $notice_of_payment);
				redirect("/reservation_type");
			}
			else {
				$viewdata['error'] = "Reservation type already exists";
			}
		}

		$data = array('title' => 'Add Reservation Type - DB Hotel Management System', 'page' => 'reservation_type');
		$this->load->view('header', $data);
		$this->load->view('reservation_type/add', $viewdata);
		$this->load->view('footer');
	}

	function delete($rType_id)
	{
		$this->reservation_m->deleteReservationType($rType_id);
		redirect("/reservation_type");
	}

	public function edit($rType_id)
	{
		if($this->input->post("rType_name"))
		{
        $rType_name = $this->input->post("rType_name");
      	$rType_payment_time = $this->input->post("rType_payment_time");
    		$refund_if_canceled = $this->input->post("refund_if_canceled");
  			$original_base_rate = $this->input->post("original_base_rate");
  			$additional_base_rate = $this->input->post("additional_base_rate");
  			$min_days_before_reservation = $this->input->post("min_days_before_reservation");
  			$notice_of_payment = $this->input->post("notice_of_payment");

			$this->reservation_m->editReservationType($rType_name, $rType_payment_time, $refund_if_canceled, $original_base_rate, $additional_base_rate, $min_days_before_reservation, $notice_of_payment);
			redirect("/reservation_type");
		}

		$data = array('title' => 'Edit Room Type - DB Hotel Management System', 'page' => 'reservation_type');
		$this->load->view('header', $data);
		$reservation_type = $this->reservation_m->getReservationType($rType_id);

		$viewdata = array('reservation_type'  => $reservation_type);
		$this->load->view('reservation_type/edit',$viewdata);

		$this->load->view('footer');
	}

	public function index()
	{
		$reservation_types = $this->reservation_m->get_reservation_types();

		$viewdata = array('reservation_types' => $reservation_types);

		$data = array('title' => 'Reservation Types - DB Hotel Management System', 'page' => 'reservation_type');
		$this->load->view('header', $data);
		$this->load->view('reservation_type/list',$viewdata);
		$this->load->view('footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
