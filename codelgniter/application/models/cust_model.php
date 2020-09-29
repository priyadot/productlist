<?php
class Cust_model extends CI_model
{
   public function create_data($formArray)
  {
     $this->db->insert('usersdb',$formArray);
  }

   public function checkUser($username,$password)
  {
      $cred=['username'=>$username,'password'=>$password];
    $this->db->where( $cred);
    return $row= $this->db->get('usersdb')->row_array();
  }

}
?>