<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// session_start(); //we need to call PHP's session object to access it through CI
class MyAccount extends CI_Controller 
{

 function __construct()
 {
   parent::__construct();
   $this->load->model('update_model','',TRUE);
 }

 function index()
 {
   $session_data = $this->session->userdata('logged_in');
   $validation=$session_data['validation'];
   if($this->session->userdata('logged_in') && $validation==1)
   {
     $data['username'] = $session_data['userName'];
     $data['userid'] = $session_data['userID'];
     $data['auth'] =$session_data['auth'];
     $data['results'] = $this->update_model->returnedit($data['userid']);
     foreach ($data['results']->result_array() as $row){
        $data['firstname']=$row['firstname'];
        $data['lastname']=$row['lastname'];
        $data['address']=$row['address'];
        $data['birthmonth']=$row['birthMonth'];
        $data['birthyear']=$row['birthYear'];
        $data['birthday']=$row['birthDay'];
        $data['password']=$row['password'];
        $data['authority']=$row['authority'];
        $data['userId']=$row['userId'];
     }
     $this->load->view('myaccount', $data);
   }
   else{
     redirect('Login_controller', 'refresh');
   }
 }

}

?>