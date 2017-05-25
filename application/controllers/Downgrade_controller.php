<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// session_start(); //we need to call PHP's session object to access it through CI
class Downgrade_controller extends CI_Controller 
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
	 $datum = array(
			'userId' => $this->input->post('userId'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'authority' => 0,
			'firstname' => $this->input->post('firstname'),
			'lastname' => $this->input->post('lastname'),
			'birthMonth' => $this->input->post('birthMonth'),
			'birthDay' => $this->input->post('birthDay'),
			'birthYear' => $this->input->post('birthYear'),
			'address' => $this->input->post('address')
	);
	 $this->update_model->upgradeentry($datum);
	 $sess_array = array();
	 $result=$this->update_model->returnedit($data['userid']);
     foreach($result->result_array() as $row)
     {
		   $sess_array = array(
			 'userID' =>$row['userId'],
			 'userName' => $row['username'],
		       'auth' => $row['authority'],
		       'validation' => 0
		   );
       $this->session->set_userdata('logged_in', $sess_array);
     }
     redirect('/ViewDowngrade', 'refresh');
	 
   }
   else
   {
     //If no session, redirect to login page
     redirect('Login_controller', 'refresh');
   }
 }

}

?>