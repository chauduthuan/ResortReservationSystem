<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

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

	public function add(){
		$data = $this->input->post();
		// $this->customer_m->add_customer($data);
		$this->customer_m->register_customer($data);
		redirect();
	}

	public function index()
	{
        $data = array('title' => 'Register - DB Hotel Management System', 'page' => 'register');
        $this->load->view('header', $data);

		$viewdata = $this->input->post();
		$this->load->view('register',$viewdata);

		// $this->load->view('register');


	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */