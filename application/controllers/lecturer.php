<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class lecturer extends CI_Controller {
    
    public function __construct()
	{
		parent::__construct();
		$this->load->helper('url'); // used for base_url() function
		$this->load->library('session'); // create session
        $this->load->model("Home_Page_Model");
        
        
	}

	public function index()
	{
		
		//$this->load->helper('url');
		//$this->load->session('');
		//$this->load->database('');
        
       if(isset($this->session->userdata("data")->Lecturer_Id))
       {
    
        $data["list1"]=$this->Home_Page_Model->CountClass();
		$data["list2"]=$this->Home_Page_Model->CountModule();
		$data["list3"]=$this->Home_Page_Model->CountStudent();
        $data["list_Module"]=$this->Home_Page_Model->Module_db();
     
        $this->load->view("Lecturer/lecturer_view",$data);

        }
            else
		 {
			redirect(base_url()."index.php/authentication");
		}

}

    
}

