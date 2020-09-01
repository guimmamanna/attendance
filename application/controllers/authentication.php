<?php defined('BASEPATH') OR exit('No direct script access allowed');


class authentication extends CI_Controller {
    
    public function __construct()
	{
		parent::__construct();
        // session_start();
		$this->load->database();
		$this->load->helper('url'); // used for base_url() function
		$this->load->model('Login_model');
		$this->load->library('session'); // create session
	}
    
    public function index()
	{
		 $this->load->view("Login/signin_view");
    }
    
    function validate()
    {

        
    if(isset($_POST["username"]) && isset($_POST["password"])){
         
     $sql =$this->Login_model->validate_lecturer($_POST["username"], $_POST["password"]);
      
 
   if(!empty($sql))
  {
  
     
       
  $this->session->set_userdata("data", $sql);

     redirect(site_url() . '/lecturer'); 
      
  } else{
   // echo "Invalid Details";
      $error["message"] = "Invalid username or password";
       $this->load->view('Login/signin_view', $error);
  }

    
       
    /*    else {
      redirect(site_url() . '/lecturer');
    }*/
    }
    }

    function logout()
    {
    $this->session->unset_userdata("data");
    $this->session->sess_destroy();
          redirect(site_url() . '/authentication');
          exit();
    }

    }