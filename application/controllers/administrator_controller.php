<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Administrator_controller extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->model("administrator_model");
		
        $data["list_Class"]=$this->administrator_model->administrator();
        $this->load->view("administrator_view",$data);
		
		    
	}
	
	
	
		}
	
	
      

    

	 



	
	
