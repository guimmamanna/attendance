<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Student_authentication extends CI_Controller {
    
    public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url'); // used for base_url() function
		$this->load->model('Student_Login_model');
		$this->load->library('session'); // create session
	}
    
    public function index()
	{
		 $this->load->view("Login/Student_signin_view");
    }
    
    function validate()
    {

          
    if(isset($_POST["username"]) && isset($_POST["password"])){
         
			$sql =$this->Student_Login_model->validate_student($_POST["username"], $_POST["password"]);
      
 // if($query->rowCount() > 0)
   if(!empty($sql))
  {
   //$error=["message"] = "";
      //$this->session->set_userdata("data", $resuts);
   // $_SESSION['userid']=$_POST['Lecturer_Id'];
      //$_SESSION['username']=$_POST['UserName'];
      
  $this->session->set_userdata("printName", $sql );
  
    // echo 'You are ', $username; 
                 // header("Location:readFromDB_PDO");
     redirect(site_url() . '/studentcontroller'); 
      
  } else{
   // echo "Invalid Details";
      $error["message"] = "Invalid username or password";
       $this->load->view('Login/Student_signin_view', $error);
  }

    
       
    /*    else {
      redirect(site_url() . '/lecturer');
    }*/
    }
    }

    function logout()
    {
         unset($_SESSION['userid']);
         unset($_SESSION['username']);
    
          redirect(site_url() . '/Student_authentication');
          exit();
    }

    }