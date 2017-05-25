<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// session_start(); //we need to call PHP's session object to access it through CI
class Edit_myaccount extends CI_Controller 
{

 function __construct()
 {
   parent::__construct();
   $this->load->model('update_model','',TRUE);
 }

 function index()
 {
	$session_data = $this->session->userdata('logged_in');
	$data['username'] = $session_data['userName'];
	$data['userid'] = $session_data['userID'];
	$data['auth'] = $session_data['auth'];

   	if($this->session->userdata('logged_in')){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('firstname','First Name', 'required|alpha_numeric');
		$this->form_validation->set_rules('lastname','Last Name', 'required|alpha_numeric');
		$this->form_validation->set_rules('birthMonth','Birth Month', 'required|alpha_numeric');
		$this->form_validation->set_rules('birthDay','Birth Day', 'required|alpha_numeric');
		$this->form_validation->set_rules('birthYear','Birth Year', 'required|alpha_numeric');
		$this->form_validation->set_rules('address','Address', 'required');
		$this->form_validation->set_rules('password', 'New Password','required|alpha_numeric|min_length[8]');
		$this->form_validation->set_rules('repassword','Confirm Password', 'required|matches[password]');
		if($this->form_validation->run() == FALSE)
			{
				//Field validation failed.  User redirected to login page
				redirect('MyAccount', 'refresh');
			}
		else{
	 
		 $datum = array(
				'userId' => $this->input->post('userId'),
				'username' => $this->input->post('username'),
				'password' => sha1($this->input->post('password')),
				'authority' => $this->input->post('authority'),
				'firstname' => $this->input->post('firstname'),
				'lastname' => $this->input->post('lastname'),
				'birthMonth' => $this->input->post('birthMonth'),
				'birthDay' => $this->input->post('birthDay'),
				'birthYear' => $this->input->post('birthYear'),
				'address' => $this->input->post('address')
		);
		 $this->update_model->upgradeentry($datum);
	     redirect('/Landing_controller', 'refresh');
		 }
	}else{
		redirect('/Login_controller', 'refresh');
	}
 }
}

?>