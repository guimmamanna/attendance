<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_controller extends CI_Controller {

	/**
	 * Customers controller to accommodate all functions related to customers
	 * 
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url'); // used for base_url() function
		$this->load->model('adminlogin_model');
		$this->load->library('session'); // create session
	}
	
	public function index()
	{
		$this->load->view('login_view');
	}
	public function validate()
	{
		//print_r($_POST);
		$result = null;
		if(isset($_POST["username"]) && isset($_POST["password"])){
			$row =$this->adminlogin_model->validate_user($_POST["username"], $_POST["password"]);
			if(!empty($row)) {
				$result["message"] = "";
				$this->session->set_userdata("data", $row);
				//print_r($this->session->userdata("data")->staff_id);
				redirect(base_url()."index.php/administrator_controller"); // redirect to another controller
				//redirect(site_url().'/administrator_controller');
			}
			else {
				$result["message"] = "In-valid username or password";
			}
		}
		
		$this->load->view('login_view', $result);
		
		//Logout function;
	
	
}
	public function logout(){
		unset( $_SESSION['Userid']);
		unset( $_SESSION['username']);
		//redirect (site_url().'/login_controller');
		redirect(base_url()."index.php/login_controller");
		exit();
	}
}