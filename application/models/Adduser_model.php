<?php
class adduser_model extends CI_Model
{
	function __construct() 
	{
		parent::__construct();
	}
	function form_insert($data)
	{
	   $this->load->helper('date');
	   $this -> db -> select('*');
	   $this -> db -> from('users');
	   $this -> db -> where('username', $data['username']);
	   
	   
	   $query = $this -> db -> get();
	   
	   if ($query->num_rows() == 0)
	   {
		// Inserting in Table(students) of Database(college)
		$this->db->insert('users', $data);
		return TRUE;
	   }
	   else
	   {
		// Inserting in Table(students) of Database(college)
		return FALSE;
	   }
	}
	function assign_usercode ()
	{
	   $this -> db -> select_max('userId');
	   $this -> db -> from('users');
	   
	   $query = $this -> db -> get();
	   foreach ($query->result_array() as $row)
		{
			$newcode = $row['userId'] + 1;
		
		return $newcode;
		}
	}
}
?>