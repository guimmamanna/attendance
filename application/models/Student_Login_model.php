 <?php
	// require_once 'database.php';
 class  Student_Login_model extends CI_Model
 {
    

	 function validate_student($username, $password){
         
          //include("$_SERVER[DOCUMENT_ROOT]/AWS/application/models/connect.php");
		
		$query =$this->db->query("SELECT Student_Id,FirstName,LastName, UserName, Password FROM student WHERE UserName ='".$username."' and Password='".md5($password)."'");
        
         return $query->row();

          
 }
 }