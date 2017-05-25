<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// session_start(); //we need to call PHP's session object to access it through CI
class Edit_controller extends CI_Controller 
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
     
     $data['userid'] = $session_data['userID'];
     $data['auth'] =$session_data['auth'];
     $user_id=$this->input->post('userId');
     $data['results'] = $this->update_model->returnedit($user_id);
     foreach ($data['results']->result_array() as $row){
        $data['firstname']=$row['firstname'];
        $data['lastname']=$row['lastname'];
        $data['address']=$row['address'];
        $data['username']=$row['username'];
        $data['birthmonth']=$row['birthMonth'];
        $data['birthyear']=$row['birthYear'];
        $data['birthday']=$row['birthDay'];
        $data['password']=$row['password'];
        $data['authority']=$row['authority'];
        $data['userId']=$row['userId'];
     }
     $this->load->view('edit', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('Login_controller', 'refresh');
   }
 }

}

?>