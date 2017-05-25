<?php
Class Landing_model extends CI_Model
{
 function getInfo($userid)
 {
   $this->load->helper('date');
   $this -> db -> select('*');
   $this -> db -> from('users');
   $this -> db -> where('userId', $userid);

   $query = $this -> db -> get();
   
	return $query;
 }
}
?>