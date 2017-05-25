<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// session_start(); //we need to call PHP's session object to access it through CI
class Landing_controller extends CI_Controller 
{

 function __construct()
 {
   parent::__construct();
   $this->load->model('Landing_model','',TRUE);
 }

 function index()
 {
   if($this->session->userdata('logged_in'))
   {
    $session_data = $this->session->userdata('logged_in');
    $data['username'] = $session_data['userName'];
    $data['userid'] = $session_data['userID'];
    $data['auth'] = $session_data['auth'];
    $validation = $session_data['validation'];
    $data['info'] = $this->Landing_model->getInfo($data['userid']);
      $this->load->view('landing',$data);
    
   }
   else
   {
     //If no session, redirect to login page
     redirect('Login_controller', 'refresh');
   }
 }

}

?>