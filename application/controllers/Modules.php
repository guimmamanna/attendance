<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modules extends CI_Controller {

	/**
	 * Customers controller to accomodate all functions related to customers
	 * 
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('Modules_Model');
		$this->load->library('session'); // create session

		if(!isset($this->session->userdata("data")->Lecturer_Id)){
			redirect(base_url()."index.php/authentication");
		}
	}
	
	public function index()
	{
        
		$result['modules']=$this->Modules_Model->get_Module();
         $result['class']=$this->Modules_Model->get_ClassType();
       // print_r($result);´exit;
		$this->load->view('Lecturer/module_attendances', $result);
         
        
	}

	public function load_data()
	{
		$result['modules']=$this->Modules_Model->get_Module();

        $result['class']=(isset($_GET["classType"]) && $_GET["classType"]<>0)?$this->Modules_Model->get_ClassType():null;
       //print_r($_GET); exit;
        $result['attendances'] = $this->Modules_Model->get_Attendance_by_Module($_GET["Modules"],$_GET["classType"]);
        //print_r($_GET); exit;
		$this->load->view('Lecturer/module_attendances', $result);
       
        
	}
  
    }
  
