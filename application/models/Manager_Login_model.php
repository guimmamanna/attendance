 <?php
	class  Manager_Login_model extends CI_Model
	{
		function validate_manager($username, $password)
		{
			$query = $this->db->query("SELECT manager.Manager_Id,manager.Lecturer_Id,manager.FirstName,manager.LastName,lecturer.UserName,lecturer.Email 
			from lecturer,manager
			where manager.Lecturer_Id=lecturer.Lecturer_Id 
			and UserName ='" . $username . "' and Password='" . md5($password) . "'");
			return $query->row();
		}
	}
