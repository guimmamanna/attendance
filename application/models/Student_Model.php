 
 <?php

 class  Student_Model extends CI_Model
 {
function get_Student()
     { 

         $query=$this->db->query("select DISTINCT sm.Student_Id, s.FirstName from student_module sm inner join lecturer_module lm on sm.Module_Id=lm.Module_Id inner join student s on s.Student_Id=sm.Student_Id and lm.Lecturer_Id='".$this->session->userdata("data")->Lecturer_Id."'
      order by s.FirstName asc");
        
        
//exit;
	  	return $query->result();
  
     }
     
     	function get_Modules()
	{
		$query=$this->db->query("select m.Module_Id, m.Name 
								 from modules m, lecturer_module lm
                                 where m.Module_Id=lm.Module_Id
                                 and lm.Lecturer_Id='".$this->session->userdata("data")->Lecturer_Id."'
								 order by Name asc");
		
        
		return $query->result();
	}
     
   


     	function get_Attendance_by_Student($Student_Id,$Module_Id, $fdate,$tdate){
	
            
            
            $str = "SELECT a.Class_Id,m.Name,s.Student_Id,s.FirstName,s.LastName, Time_In,Time_Out, Date,ct.ClassSession, Status,
            COUNT(CASE WHEN     a.Status like 'P%' THEN 1
                   WHEN a.Status like 'A%' Then 1
                   else 'Late' end) as numOfAttendance
            FROM class c
            left join attendance a ON c.Class_Id=a.Class_Id
            left join modules m on m.Module_Id=c.Module_Id
            left join student s on s.Student_Id=a.Student_Id 
            left join lecturer_module lm on m.Module_Id=lm.Module_Id
            left join lecturer l on l.Lecturer_Id=lm.Lecturer_Id
            left join room r on r.Room_Id=c.Room_Id 
            left join class_type ct on c.ID=ct.ID
            WHERE  s.Student_Id='".$Student_Id."'
            and l.Lecturer_Id='".$this->session->userdata("data")->Lecturer_Id."'
            ";
       
        $condition = "";
         if (!empty($Student_Id)){
            $str .= ' and s.Student_Id="'.$Student_Id.'"';
        }
        if(!empty($Module_Id)  && !empty($Student_Id)){
            $str .= 'and c.Module_Id="'.$Module_Id.'" ';
        }else if (!empty($Module_Id)){
            $str .= ' and c.Module_Id="'.$Module_Id.'"';
        }

        if($fdate!="")
            $condition = " and Date >='".$fdate."'";
        if($tdate!="")
            $condition .= " and Date <='".$tdate."'";
        $str .= $condition;
        $str .=     "   Group by a.Class_Id,m.Name,s.Student_Id, s.FirstName,s.LastName, Time_In,Time_Out, Date,ct.ClassSession, Status ";
        
       // echo $str;
		$query=$this->db->query($str);
    

		return $query->result();
  
 }
       
      
 }
