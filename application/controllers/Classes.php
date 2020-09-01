<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Classes extends CI_Controller {

	/**
	 * Customers controller to accomodate all functions related to customers
	 * 
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('Class_Model');
		$this->load->library('session'); // create session
        

		if(!isset($this->session->userdata("data")->Lecturer_Id)){
			redirect(base_url()."index.php/authentication");
		}
	}
	
	public function index()
	{
       
	   $result['modules']=$this->Class_Model->get_Modules();
       $result['class']=$this->Class_Model->get_ClassType();
        //$result['class']=array();
       // print_r($result);´exit;
       
		$this->load->view('Lecturer/class_attendances', $result);
 
     
	}

	public function load_data()
	{
    $fdate=$this->input->get('fromdate');
    $tdate=$this->input->get('todate');
       // print_r($_GET); exit;
		$result['modules']=$this->Class_Model->get_Modules();
        //$result['class']=$this->Class_Model->get_ClassType();
        $result['class']=(isset($_GET["classType"]) && $_GET["classType"]<>0)?$this->Class_Model->get_ClassType():null;
       //print_r($_GET); exit;
        $result['attendances'] = $this->Class_Model->get_Attendance_by_Class($_GET["Modules"],$_GET["classType"], $fdate,$tdate);
		/*$result['attendances']= (isset($_GET["Modules"]) && $_GET["Modules"]<>0)?$this->Class_Model-> get_Attendance_by_Class($_GET["Modules"], $fdate,$tdate):(isset($_GET["classType"]) && $_GET["classType"]<>0?$this->Class_Model-> get_Attendance_by_ClassType($_GET["classType"], $fdate,$tdate): null);*/
        //echo $this->db->last_query();
        //exit;

        //print_r($_GET); exit;
       // $result['attendances']=  $this->Class_Model->get_Attendance_by_Date($fdate,$tdate);
		$this->load->view('Lecturer/class_attendances', $result);
        
        
	}
    	public function view_load_data()
        {
            
            $result['view_class']=$this->Class_Model->get_view_data($Class_Id);
            $this->load->view('Lecturer/data_view', $result);
        }
    
  
}
