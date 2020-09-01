<?php
class Class_Model extends CI_Model
{
	

    
	
    
    	function get_Modules()
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
    
   /* function get_Class($fdate,$tdate)
	{
		$query=$this->db->query("SELECT a.Class_Id,m.Name, s.FirstName,s.LastName,s.Student_Id, Time_In,Time_Out, Date, Status FROM class c left join attendance a ON c.Class_Id=a.Class_Id left join modules m on m.Module_Id=c.Module_Id left join student s on s.Student_Id=a.Student_Id left join lecturer_module lm on m.Module_Id=lm.Module_Id left join lecturer l on l.Lecturer_Id=lm.Lecturer_Id  where Date between '$fdate' and '$tdate'");
		return $query->result();
	}*/
  
   

	function get_Attendance_by_Class($Module_Id,$ID, $fdate,$tdate)
	{
        $str = "SELECT a.Attendance_Id,a.Class_Id,m.Name, Time_In,Time_Out, Date,ct.ClassSession, concat(round((SUM(IF(Status = 'Present','1',0)) / COUNT(*)) * 100),'%') AS percentage, COUNT(CASE
        	                                                                   WHEN a.Status like 'P%' Then 1
                                                                               WHEN a.Status like 'A%' Then 1
                                                                    else ''  end) as numOfAttendance 
              FROM class c
            left join attendance a ON c.Class_Id=a.Class_Id
            left join modules m on m.Module_Id=c.Module_Id
            left join student s on s.Student_Id=a.Student_Id 
            left join lecturer_module lm on m.Module_Id=lm.Module_Id
            left join lecturer l on l.Lecturer_Id=lm.Lecturer_Id
            left join room r on r.Room_Id=c.Room_Id 
            left join class_type ct on c.ID=ct.ID
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
        if($fdate!="")
            $condition = " and Date >='".$fdate."'";
        if($tdate!="")
            $condition .=" and Date <='".$tdate."'";
        $str .= $condition;
        
        $str .=     "Group by a.Class_Id,m.Name,ct.ClassSession";
        
       // echo $str;
		$query=$this->db->query($str);
    

		return $query->result();
	}
    
  
    	
    	function get_view_data($Class_Id="")
	{
        $Class_Id=$_GET['classview'];
		$query=$this->db->query("SELECT a.Attendance_Id,a.Student_Id,s.FirstName, s.LastName,a.Description,c.Date,c.BuildingName,ct.ClassSession, Status,COUNT(*) as Attendance
        FROM attendance a 
        inner join student s on a.Student_Id=s.Student_Id 
        inner join class c on c.Class_Id=a.Class_Id
        inner join class_type ct on c.ID=ct.ID
        WHERE a.Class_Id='".$Class_Id."'
        Group by a.Class_Id,a.Student_Id,ct.ClassSession, Status");
    

		return $query->result();
	}

}

