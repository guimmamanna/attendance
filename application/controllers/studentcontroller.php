<?php  
class studentcontroller extends CI_Controller 
{
	public function __construct()
	{
	/*call CodeIgniter's default Constructor*/
	parent::__construct();

	/*load database libray manually*/
	$this->load->database();
	 // used for base_url() function
	$this->load->helper('url');
		// create session
	$this->load->library('session'); 
 
	/*load Model*/
	$this->load->model('studentmodel');

	if(!isset($this->session->userdata("printName")->Student_Id)){
			redirect(base_url()."index.php/Student/authentication");
		}
	}
   /*Display*/

	
	
	public function index()
	{
	//$result['data']=$this->studentmodel->display_records();
	$this->load->view('Student/student');
	}
/*public function displaydata()
	{
	$result['data']=$this->studentmodel->display_records();
	$this->load->view('student',$result);
	}*/
	
}
?>