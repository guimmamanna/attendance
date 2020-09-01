<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class view_class_data extends CI_Controller {

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
       $result['view_class']=$this->Class_Model->get_view_data();
      
       $this->load->view('Lecturer/class_data_view', $result);
     
	}

  
}
