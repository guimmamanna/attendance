<?php
class Modules_Model extends CI_Model 
{
	
	function get_Module()
	{
		$query=$this->db->query("select m.Module_Id, m.Name 
								 from modules m, lecturer_module lm
                                 where m.Module_Id=lm.Module_Id
                                 and lm.Lecturer_Id='".$this->session->userdata("data")->Lecturer_Id."'
								 order by Name asc");
        
		return $query->result();
	}
   
        function get_ClassType($ID="")
	{

       if($ID=="")
       {
		$query=$this->db->query("SELECT DISTINCT ct.ID,ClassSession  FROM class_type ct,class c
where ct.ID=c.ID 
 order by ClassSession asc
");
       }
        else
        {
            $query=$this->db->query("SELECT DISTINCT ct.ID,ClassSession  FROM class_type ct,class c
where ct.ID=c.ID and ct.ID='".$ID."'
 order by ClassSession asc
");
        }
        
        return $query->result();
	}
   

	function get_Attendance_by_Module($Module_Id,$ID)
	{
         $str = " SELECT c.Module_Id,c.Class_Id,m.Name,m.Trimester,ct.ClassSession,Enrolled_Number, m.Start_Date,m.End_Date,Date,
        concat(round((SUM(IF(Status = 'Present','1',0)) / COUNT(*)) * 100),'%') AS percentage 
        FROM modules m
        inner join class c on m.Module_Id=c.Module_Id 
        inner join attendance a on a.Class_Id=c.Class_Id
        inner join lecturer_module lm on m.Module_Id=lm.Module_Id
        inner join lecturer l on l.Lecturer_Id=lm.Lecturer_Id
        inner join class_type ct on c.ID=ct.ID
         where lm.Lecturer_Id='".$this->session->userdata("data")->Lecturer_Id."'
       
        ";
        
        $condition = "";

        if (!empty($Module_Id)){
            $str .= ' and c.Module_Id="'.$Module_Id.'"';
        }
        if(!empty($ID)  && !empty($Module_Id)){
            $str .= 'and ct.ID="'.$ID.'" ';
        }else if (!empty($ID)){
            $str .= ' and ct.ID="'.$ID.'"';
        }
        
        $str .= $condition;
        
        $str .=     "GROUP by c.Module_Id, m.Name, m.Start_Date,m.End_Date,Date";
        
        $query=$this->db->query($str);
        
        return $query->result();
    
	}
    function get_view_module($Class_Id="")
	{
		 $Class_Id=$_GET['moduleview'];
        
		$query=$this->db->query("SELECT Attendance_Id,c.Module_Id,m.Name,m.Trimester,ct.ClassSession,a.Student_Id,s.FirstName,Date,a.Status,
        concat(round((SUM(IF(Status = 'Present','1',0)) / COUNT(*)) * 100),'%') AS percentage ,
        COUNT(CASE WHEN a.Status like 'P%' THEN 1
                   WHEN a.Status like 'A%' Then 1
                   else 'Later' end) as numOfAttendance 
        FROM modules m
        inner join class c on m.Module_Id=c.Module_Id 
        inner join attendance a on a.Class_Id=c.Class_Id
        inner join class_type ct on c.ID=ct.ID
        inner join student s on s.Student_Id=a.Student_Id
       
        and c.Class_Id='".$Class_Id."'
        
         GROUP by  Attendance_Id,c.Module_Id,a.Student_Id,m.Name,m.Trimester,ct.ClassSession,Date,Status");
    

		return $query->result();
	}
   
	
}
