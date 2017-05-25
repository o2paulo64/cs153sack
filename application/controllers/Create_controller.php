<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// session_start(); //we need to call PHP's session object to access it through CI
class Create_controller extends CI_Controller 
{

 function __construct()
 {
   parent::__construct();
 }

 function index()
 {
   $session_data = $this->session->userdata('logged_in');
   $auth=$session_data['auth'];
   
   if($this->session->userdata('logged_in') && $auth==1)
   {
     $data['username'] = $session_data['userName'];
     $data['userid'] = $session_data['userID'];
	   $data['auth'] = $session_data['auth'];
     $this->load->view('create', $data);
	 
   }
   else
   {
     //If no session, redirect to login page
     redirect('Login_controller', 'refresh');
   }
 }

}

?>