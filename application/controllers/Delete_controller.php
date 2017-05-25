<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// session_start(); //we need to call PHP's session object to access it through CI
class Delete_controller extends CI_Controller 
{

 function __construct()
 {
   parent::__construct();
   $this->load->model('update_model','',TRUE);
 }

 function index()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['userName'];
   $data['userid'] = $session_data['userID'];
	 $data['auth'] = $session_data['auth'];
	 $datum = array(
			'userId' => $this->input->post('userId'),
	);

    	   $this->update_model->deleteentry($datum);
         redirect('/ViewDelete_controller', 'refresh');

	 
   }
   else
   {
     //If no session, redirect to login page
     redirect('Login_controller', 'refresh');
   }
 }

}

?>