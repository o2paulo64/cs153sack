<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Myaccount_validation extends CI_Controller 
{

 public function __construct()
 {
   parent::__construct();
   $this->load->model('update_model','',TRUE);
 }

 public function index()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');

   $this->form_validation->set_rules('password', 'Password', 'required|alpha_numeric|callback_check_database');

   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
     redirect('/Landing_controller', 'refresh');
   }
   else
   {

     //Go to private area
     redirect('/MyAccount', 'refresh');
   }

 }
 
 function check_database($password)
 {
   $session_data = $this->session->userdata('logged_in');
   //Field validation succeeded.  Validate against database
   $username = $session_data['userName'];
   //query the database
   $result = $this->update_model->checkpassword($username, $password);

   
     if ($result ==1)
      {
        echo '<script language="javascript">';
        echo 'alert("Authenticated")';
        echo '</script>';
        return TRUE;
      }

    
   else
   {

        echo '<script language="javascript">';
        echo 'alert("Wrong Password")';
        echo '</script>';    
     $this->form_validation->set_message('check_database', 'Invalid username or password');
     return FALSE;
   }
 }
}
?>