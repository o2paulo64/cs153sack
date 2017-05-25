<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_validation extends CI_Controller {
	function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
   			
    	 	$data['userid'] =$session_data['userID'];
    	 	$data['username'] =$session_data['userName'];
    	 	$data['auth'] =$session_data['auth'];

			$this->load->helper(array('form'));
			$this->load->view('validation',$data);

		}
		else{
			redirect('/Login_controller', 'refresh');
		}
	}
}
?>