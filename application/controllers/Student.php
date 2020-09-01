<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

 public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('Student_Model');
		$this->load->library('session'); // create session

      if(!isset($this->session->userdata("data")->Lecturer_Id)){
			redirect(base_url()."index.php/authentication");
		}
	}
	public function index()
	{
		$result["studentData"] = $this->Student_Model->get_Student();
        $result["modules"] = $this->Student_Model->get_Modules();
        
		$this->load->view('Lecturer/student_data_view', $result);
	}
    	public function load_data()
	{
    $fdate=$this->input->get('fromdate');
    $tdate=$this->input->get('todate');
       // print_r($_GET); exit;
        $result["studentData"] = $this->Student_Model->get_Student();   
        $result['modules']=(isset($_GET["Modules"]) && $_GET["Modules"]<>0)?$this->Student_Model->get_Modules():null;
       //print_r($_GET); exit;
        $result['attendances'] = $this->Student_Model->get_Attendance_by_Student($_GET["Student"],$_GET["Modules"], $fdate,$tdate);
             // print_r($_GET); exit;
		$this->load->view('Lecturer/student_data_view', $result);
        
        
	}
    
    	
}