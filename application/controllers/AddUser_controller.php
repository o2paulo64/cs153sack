<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AddUser_controller extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('adduser_model','',TRUE);
	}

	public function index()
	{
		//This method will have the credentials validation
		$this->load->library('form_validation');
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['userName'];
		$data['userid'] = $session_data['userID'];
		$data['auth'] = $session_data['auth'];
		$this->form_validation->set_rules('firstname','First Name', 'required|alpha_numeric');
		$this->form_validation->set_rules('lastname','Last Name', 'required|alpha_numeric');
		$this->form_validation->set_rules('birthMonth','Birth Month', 'required|alpha_numeric');
		$this->form_validation->set_rules('birthDay','Birth Day', 'required|alpha_numeric');
		$this->form_validation->set_rules('birthYear','Birth Year', 'required|alpha_numeric');
		$this->form_validation->set_rules('address','Address', 'required');
		$this->form_validation->set_rules('username','User Name', 'required|alpha_numeric');
		$this->form_validation->set_rules('password', 'New Password','required|alpha_numeric|min_length[8]');
		$this->form_validation->set_rules('repassword','Confirm Password', 'required|matches[password]');
		if($this->form_validation->run() == FALSE)
		{
			//Field validation failed.  User redirected to login page
			$this->load->view('create',$data);
		}
		else
		{
				//Go to private area
				$datum = array(
				'firstname' => $this->input->post('firstname'),
				'lastname' => $this->input->post('lastname'),
				'birthMonth' => $this->input->post('birthMonth'),
				'birthDay' => $this->input->post('birthDay'),
				'birthYear' => $this->input->post('birthYear'),
				'username' => $this->input->post('username'),
				'address' => $this->input->post('address'),
				'authority' => 0,
				'password' => sha1($this->input->post('password')),
				'userId' => $this->adduser_model->assign_usercode(),
			);
			$result = $this->adduser_model->form_insert($datum);
			if ($result)
			{
				echo '<script language="javascript">';
				echo 'alert("Success")';
				echo '</script>';
			redirect('/Create_controller', 'refresh');
			}

			else 
			{
				echo '<script language="javascript">';
				echo 'alert("Duplicate Entry")';
				echo '</script>';
				redirect('/Create_controller', 'refresh');
			}
		}

	}

}
?>