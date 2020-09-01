<?php
class Lecture_Model extends CI_Model
{
	function get_lectures($Module_Id)
	{
		$query=$this->db->query("select modules.Module_Id,modules.Name,modules.Total_hours,class.Date,class.Time_In,class.Time_Out, COUNT(attendance.attendance_Id) AS NumOSt,(count(DISTINCT(attendance.Status='P')) / count(attendance.Attendance_Id)) * 100 as PercentageP 
		from modules,class,student,attendance
		where modules.Module_Id=class.Module_Id 
		and modules.Module_Id='".$Module_Id."'
		and attendance.Class_Id=class.Class_Id 
		and attendance.Student_Id=student.Student_Id 
		group by modules.Module_Id,modules.Name,modules.Total_hours,class.Date,class.Time_In,class.Time_Out");
		return $query->result();
	}
	function fetch_lectures()
	{
		$query = $this->db->get("modules");
		return $query->result();
	}
}
