<?php
class studentmodel extends CI_Model 
{
   /*View*/

     public function __construct()
	{
		parent::__construct();
		$this->load->helper('url'); // used for base_url() function
		$this->load->library('session'); // create session
      // $this->session->userdata("data")->Lecturer_Id;
        
	}
	function display_student($attendance_date = '',$attendance_status = '')
	{
	 
		$sql_raw = "select distinct modules.Module_Id,  modules.Name,student.FirstName,student.LastName,attendance.Student_Id,attendance.Status,class.Date as attendance_date
		,class.Time_In, class.Time_Out, room.BuildingName, room.RoomNumber
		from modules inner join class on modules.Module_Id=class.Module_Id 
		inner JOIN attendance on attendance.Class_Id=class.Class_Id 
		inner join student on student.Student_Id=attendance.Student_Id 
		inner JOIN room on room.Room_Id=class.Class_Id 
		and attendance.Student_Id= '".$this->session->userdata("printName")->Student_Id."'";

		//If the attendance date is present in the form submission -  concatenate this to the query string
		if(!empty($attendance_date)){
			$sql_raw.= " and class.Date = '".$attendance_date."'";
		}
		//If the attendance status is present in the form submission -  concatenate this to the query string

		if(!empty($attendance_status)){
			$sql_raw.= " and attendance.status = '".$attendance_status."'";
		}

		$query=$this->db->query($sql_raw);

	 
		return $query->result();

	}
	

	 
} 