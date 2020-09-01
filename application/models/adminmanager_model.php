 <?php

 class  adminmanager_model extends CI_Model
 {
	 
	function attendance()
	{
		$query=$this->db->query("SELECT
  student.Student_Id,
  student.`FirstName`,
  student.`LastName`,
  student.`Mobile_number`,
  student.`Email`,
  COUNT(attendance.Status) AS Total_Attendance
  FROM
  student
  LEFT JOIN attendance ON student.Student_Id = attendance.Student_Id
  GROUP BY student.Student_Id,`student`.`FirstName`,`student`.`LastName`,`student`.`Mobile_number`,`student`.`Email`; ");
		return $query->result();
	}
	
	//two last query to display the tables modules and room join class
	
	function displayClass()
     { 
      
      $this->db->select("Class_Id,Date,Time_In,Time_Out,ClassType,RoomNumber");
	  $this->db->from("room,class");
	  $this->db->where("class.Module_Id=room.Room_Id");
	  $query=$this->db->get();
	  return $query;
     }
	 //display modules
	function Module_db()
     { 
      //$query=$this->db->query("SELECT * FROM modules");
      $this->db->select("*");
	  $this->db->from("modules");
	  $query=$this->db->get();
	  return $query;
     }

	
 }

   