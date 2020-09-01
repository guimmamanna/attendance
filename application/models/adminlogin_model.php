<?php
class adminlogin_model extends CI_Model
{
	/**
	 * validate_user() function checks if user exists in the database and returns user details
	 **/
	function validate_user($username, $password)
	{
		$query=$this->db->query("select Admin_id,UserName,FirstName, LastName
								 from administrator
								 where UserName='".$username."' and Password='".md5($password)."'");
		return $query->row();
	}
	
}
