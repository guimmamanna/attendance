 <?php

 class  Administrator_model extends CI_Model
 {
	 
	function administrator()
	{
		$query=$this->db->query("SELECT * FROM `administrator` ");
		return $query->result();
	}



 }
