<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// session_start(); //we need to call PHP's session object to access it through CI
class Logout_controller extends CI_Controller 
{

 function __construct()
 {
   parent::__construct();
   $this->load->model('update_model','',TRUE);
 }

 function index()
 {
   $this->load->helper(array('form'));
   $session_data = $this->session->userdata('logged_in');
	$data['username'] = $session_data['userName'];
	$data['userid'] = $session_data['userID'];
	$this->update_model->deletelogin($data['userid']);
   session_destroy();
	$this->session->unset_userdata('logged_in');
   redirect('Login_controller', 'refresh');
 }
}