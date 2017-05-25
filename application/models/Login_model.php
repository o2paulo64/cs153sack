<?php
Class login_model extends CI_Model
{
 function login($username, $password)
 {
   $this->load->helper('date');
   $this -> db -> select('*');
   $this -> db -> from('users');
   $this -> db -> where('username', $username);
   $this -> db -> where('password', sha1($password));
   $this -> db -> limit(1);

   $query = $this -> db -> get();
   
   
   if($query -> num_rows() == 1)
   {
      foreach ($query->result_array() as $row)
    {
        $data = array(
      'userId' => $row['userId'],
      'username' => $row['username'],
      'firstname' => $row['firstname'],
      'lastname' => $row['lastname'],
      'password' => $row['password'],
      );
    }
    $this -> db ->insert('login',$data);
    return $query->result();
   }
   else
   {
     return false;
   }
 }
}
?>