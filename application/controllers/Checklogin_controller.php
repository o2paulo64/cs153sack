<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Checklogin_controller extends CI_Controller 
{

 public function __construct()
 {
   parent::__construct();
   $this->load->model('login_model','',TRUE);
   $this->load->model('login_validation_model','',TRUE);
 }

 public function index()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');

   $this->form_validation->set_rules('username', 'Username', 'required');
   $this->form_validation->set_rules('password', 'Password', 'required|alpha_numeric|callback_check_database');

   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
     $this->load->view('login');
   }
   else
   {
     //Go to private area
     redirect('/Landing_controller', 'refresh');
   }

 }
 
 function check_database($password)
 {
   //Field validation succeeded.  Validate against database
   $username = $this->input->post('username');
	$password=$this->input->post('password');

   //query the database

   if(!$this->login_validation_model->validate($username,$password)){
      $loggedin=true;
      $result=false;
    }
   else {
     $result = $this->login_model->login($username, $password);
     $loggedin=false;
   }

   if($result && !$loggedin)
   {
     $sess_array = array();
     foreach($result as $row)
     {
		   $sess_array = array(
			 'userID' => $row->userId,
			 'userName' => $row->username,
       'auth' => $row->authority,
       'validation' => 0
		   );
       $this->session->set_userdata('logged_in', $sess_array);
     }
     return TRUE;
   }
   else
   {
     if($loggedin)
      $this->form_validation->set_message('check_database', 'User is already logged in');
     else
      $this->form_validation->set_message('check_database', 'Invalid username or password');
     return FALSE;
   }
 }
}
?>
