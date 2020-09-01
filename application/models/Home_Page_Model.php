 <?php

 class  Home_Page_Model extends CI_Model
 {
     
     
      public $NClass= "";
	 public $NModule= "";
	 public $NStudent= "";
	 public $T_Attendance= "";
     public $module_id="";
     public $user;
      private $name,$number;
     private $ModuleName;
     
     
     
     public function __construct()
	{
		parent::__construct();
		$this->load->helper('url'); 
		$this->load->library('session'); 
      // $this->session->userdata("data")->Lecturer_Id;
        
	}
	 


     function CountCLass()
	{ 
          $query = $this->db->query("SELECT count(Class_Id) as NumbClass FROM class c left join `lecturer_module` lm ON c.Module_Id= lm.`Module_Id` WHERE lm.`Lecturer_Id`= '".$this->session->userdata("data")->Lecturer_Id."'");
         
         return $query;

         
	}
	function CountModule()
	{ 
       
	    $query = $this->db->query("select count(m.Module_Id) as NumbModule from ((lecturer_module lem inner join modules m on m.Module_Id=lem.Module_Id ) inner join lecturer l on lem.Lecturer_Id=l.Lecturer_Id and l.lecturer_Id='".$this->session->userdata("data")->Lecturer_Id."')");
		return $query;
        
 
	}
	 
	function CountStudent()
	{ 
	   
        $query = $this->db->query("SELECT COUNT(s.Student_Id) as NumbStudent FROM student s left join student_module sm ON s.Student_Id=sm.Student_Id left join modules m on m.Module_Id=sm.Module_Id LEFT join lecturer_module lm on lm.Module_Id=m.Module_Id left join lecturer l on l.Lecturer_Id=lm.Lecturer_Id where l.Lecturer_Id='".$this->session->userdata("data")->Lecturer_Id."'");
        return $query;
        
	
	}

	 //display modules
	function Module_db()
     { 

        $query=$this->db->query("select m.Name, l.FirstName,l.LastName, l.Email, l.Department  from lecturer_module lem inner join modules m on m.Module_Id=lem.Module_Id inner join lecturer l on lem.Lecturer_Id=l.Lecturer_Id and l.lecturer_Id= '".$this->session->userdata("data")->Lecturer_Id."'");
     //   echo("SELECT distinct class.Module_Id, modules.Name,attendance.Status FROM ((modules inner join class on modules.Module_Id=class.Module_Id) inner join attendance on attendance.Class_Id=class.Class_Id and attendance.Status='P')");
        
//exit;
	  return $query;
     }
 
     function display_userDetail(){
         
          $query=$this->db->query("select FirstName, LastName, Email, Name from lecturer l, lecturer_module lm, modules m

            where l.Lecturer_Id=lm.Lecturer_Id
            and m.Module_Id=lm.Module_Id  ");
     }
        
}
    
	
 

   
