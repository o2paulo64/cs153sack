<?php
Class login_validation_model extends CI_Model
{
 function validate($username,$password)
 {
   $this->load->helper('date');
   $this -> db -> select('*');
   $this -> db -> from('login');
	$this->db->where('username',$username);
		$this->db->where('password', sha1($password));
   $this -> db -> limit(1);

   $query = $this -> db -> get();
   if($query -> num_rows() == 1)
   {
     return false;
   }
   else
   {
     return true;
   }
 }
}
?>
