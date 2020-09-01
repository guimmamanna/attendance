<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class filter_controller extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('filter_model');
		$this->load->library('session'); 

		
	}
	
	 public function index()
	{
		
        
			if(isset($_GET["room"])){
				$room_id = $_GET["room"];
			}
			else{
				$room_id = 0;
			}
				$result["rooms"] =$this->filter_model->roomcapacity($room_id);
				$result['room'] = $this->filter_model->get_rooms();
				$this->load->view('filter_view',$result);
	    }
	    
	   
     
	
  
}
