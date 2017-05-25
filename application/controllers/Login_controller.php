<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {
	function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		if($this->session->userdata('logged_in'))
			redirect('/Landing_controller', 'refresh');
		else{
			$this->load->helper(array('form'));
			$this->load->view('login');
		}
	}
}
?>