<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hikes extends CI_Controller {

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

	public function index()
	{
		$this->load->helper('url');

		//$viewdata = array('hikes' => $hikes);

		if(UID != NULL)
		{
			$customer = $this->customer_m->get_customer_with_email(UID);
			$customer_full_name = $customer[0]->customer_firstname." ".$customer[0]->customer_lastname;
			//echo("<script>console.log('UID: ".json_encode(UID)."');</script>");
			//echo("<script>console.log('Fullname: ".json_encode($customer_full_name)."');</script>");
			$data = array('title' => 'Hikes and Rentals - DB Hotel Management System', 'page' => 'hikes', 'full_name' => $customer_full_name);

		}
		else
		{
			$data = array('title' => 'Hikes and Rentals - DB Hotel Management System', 'page' => 'hikes'); 	
		}

		$this->load->view('header', $data);
		//$this->load->view('hikes/info',$viewdata);
		$this->load->view('hikes/info');
		$this->load->view('footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
