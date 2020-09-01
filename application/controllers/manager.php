<?php defined('BASEPATH') OR exit('No direct script access allowed');


class manager extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url'); // used for base_url() function
		$this->load->library('session'); // create session
        $this->load->model("Manager_Model");
	}
	public function index()
	{
        if(isset($this->session->userdata("data")->Manager_Id))
        {
		    $data["list1"]=$this->Manager_Model->CountRoom();
			$data["list2"]=$this->Manager_Model->CountLectures();
			$this->load->view("Manager/manager_view",$data);
	    }
	    else{ 
			redirect(base_url()."index.php/manager_authentication");
	    }  
	}   
}

