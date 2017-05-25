<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// session_start(); //we need to call PHP's session object to access it through CI
class ViewDelete_controller extends CI_Controller 
{

 function __construct()
 {
   parent::__construct();
   $this->load->model('update_model','',TRUE);
 }

 function index()
 {
   $session_data = $this->session->userdata('logged_in');
   $auth=$session_data['auth'];
   
   if($this->session->userdata('logged_in') && $auth==1)
   {
     $data['username'] = $session_data['userName'];
  	 $data['userid'] = $session_data['userID'];
  	 $data['results'] = $this->update_model->returnall($data['userid']);
  	 $this->load->view('delete', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('Login_controller', 'refresh');
   }
 }

}

?>