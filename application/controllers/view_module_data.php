<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class view_module_data extends CI_Controller {

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
       $result['view_module']=$this->Modules_Model->get_view_module();
      
       $this->load->view('Lecturer/module_data_view', $result);
     
	}

  
}
