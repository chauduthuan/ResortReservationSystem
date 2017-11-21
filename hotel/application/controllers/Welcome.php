<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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

		//$this->check_login();
		echo("<script>console.log('UID: ".json_encode(UID)."');</script>");

		$data = array('title' => 'Borrego Springs Resort', 'page' => 'dashboard');

		$this->load->view('header', $data);
		$this->load->view('welcome_message');
		$this->load->view('footer');
	}
}
