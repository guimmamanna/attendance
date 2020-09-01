 <?php
	// require_once 'database.php';
	class  Login_model extends CI_Model
	{


		function validate_manager($username, $password)
		{

			//include("$_SERVER[DOCUMENT_ROOT]/AWS/application/models/connect.php");

			//$query =$this->db->query("SELECT Lecturer_Id,FirstName,LastName, UserName, Password FROM lecturer WHERE UserName ='".$username."' and Password='".md5($password)."'");
			$query = $this->db->query("SELECT manager.Manager_Id,manager.Lecturer_Id,manager.FirstName,manager.LastName,lecturer.UserName,lecturer.Email 
		from lecturer,manager 
		where manager.Lecturer_Id=lecturer.Lecturer_Id 
		and UserName ='" . $username . "' and Password='" . ($password) . "'");

			return $query->row();
		}
	}
