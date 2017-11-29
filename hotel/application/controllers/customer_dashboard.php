<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class customer_dashboard extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */ 

	public function check_login()
	{
		if(!UID)
			redirect("login");
	}

	public function index()
	{
		// Necessary to load this helper otherwise there will be an undefined call to base_url()
		$this->load->helper('url');

		//$this->check_login();
		if(UID != NULL)
		{
			$customer = $this->customer_m->get_customer_with_email(UID);
			$customer_full_name = $customer[0]->customer_firstname." ".$customer[0]->customer_lastname;
			//echo("<script>console.log('UID: ".json_encode(UID)."');</script>");
			//echo("<script>console.log('Fullname: ".json_encode($customer_full_name)."');</script>");
			$data = array('title' => 'Borrego Springs Resort', 'page' => 'customer_dashboard', 'full_name' => $customer_full_name);

		}
		else
		{
			$data = array('title' => 'Borrego Springs Resort', 'page' => 'customer_dashboard'); 	
		}


		$reservation_order = $this->customer_dashboard_m->get_reservation_order();
		$restaurant_order = $this->customer_dashboard_m->get_restaurant_order();

		$viewdata = array(
			'reservation_order' => $reservation_order,
			'restaurant_order' => $restaurant_order
		);
		
		$this->load->view('header', $data);
		$this->load->view('customer_dashboard/info',$viewdata);
		$this->load->view('footer');
	}
}
