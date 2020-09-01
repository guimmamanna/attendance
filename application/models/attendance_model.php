<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
 class Attendance_model extends CI_Model  
 {  
      function test_main()  
      {  
           echo "This is model function";  
      }  
      function insert_data($data)  
      {  
           $this->db->insert("attendance", $data);  
      }  
      function fetch_data()  
      {  
           
           $query = $this->db->query("SELECT student.FirstName,student.Student_Id,modules.Name,class.Week,class.Date,class.Time_In,class.Time_Out,attendance.Status,attendance.Attendance_Id, count(DISTINCT(attendance.Status='P')) / count(attendance.Status) * 100 as percent
from student,attendance,modules,class 
WHERE attendance.Class_Id=class.Class_Id 
AND class.Module_Id=modules.Module_Id 
AND student.Student_Id=attendance.Student_Id
group by student.FirstName,student.Student_Id,class.Week");  
           $this->db->from("attendance");    
           return $query;  
      }  
      function delete_data($id){  
           $this->db->where("Attendance_Id", $id);  
           $this->db->delete("attendance");  
           //DELETE FROM attendancw WHERE id = $id  
      }  
      function fetch_single_data($id)  
      {  
           $this->db->where("Attendance_Id", $id);  
           $query = $this->db->get("attendance");  
           return $query;  
           //Select * FROM attendance where id = '$id'  
      }  
      function update_data($data, $id)  
      {  
           $this->db->where("Attendance_Id", $id);  
           $this->db->update("attendance", $data);  
           //UPDATE attendance  
      }  
	 
 }  
