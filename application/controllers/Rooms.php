<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rooms extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('Room_Model');
		$this->load->library('session');
	}
	
	public function index()
	{
		if(isset($this->session->userdata("data")->Manager_Id))
        {
			if(isset($_GET["room"])){
				$room_id = $_GET["room"];
			}
			else{
				$room_id = 0;
			}
				$result["rooms"] =$this->Room_Model->roomcapacity($room_id);
				$result['room'] = $this->Room_Model->get_rooms();
				$this->load->view('Manager/room_capacity',$result);
	    }
	    else{ 
			redirect(base_url()."index.php/authentication");
	    }  
     
	}
}
