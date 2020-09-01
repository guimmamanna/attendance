 <?php
	// require_once 'database.php';
 class  Login_model extends CI_Model
 {
    

	 function validate_lecturer($username, $password){
         
          //include("$_SERVER[DOCUMENT_ROOT]/AWS/application/models/connect.php");
		
		$query =$this->db->query("SELECT Lecturer_Id,FirstName,LastName,UserName, Password FROM lecturer WHERE UserName ='".$username."' and Password='".md5($password)."'");
        
         return $query->row();

          
 }
 }