<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class manager_controller extends CI_Controller {

	public function index()
	{
		$this->load->model("adminmanager_model");
		
        $data["list_Class"]=$this->adminmanager_model->attendance();
        $this->load->view("manager_view",$data);
		
		
	}
	
	


	 }