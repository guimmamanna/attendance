<?php  
class studentreport extends CI_Controller 
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
			redirect(base_url()."index.php/Student_authentication");
		}
	}
   /*Display*/

	
	
	public function index()
	{

		
		$result['Student_Id'] =   $this->session->userdata('printName')->Student_Id;
		$result['fullname'] =   $this->session->userdata('printName')->LastName." ".$this->session->userdata('printName')->FirstName;
		if($this->input->post('attendance_date')|| $this->input->post("attendance_status")){
			$attendance_date =  $this->input->post('attendance_date');
			$attendance_status = $this->input->post("attendance_status");

			$result["data"]=$this->studentmodel->display_student($attendance_date,$attendance_status);
			$result['attendance_date'] = $attendance_date;
			$result['attendance_status'] = $attendance_status;
			$this->load->view('report_view', $result);
		}else{
			$result["data"]=$this->studentmodel->display_student();
			$result['attendance_date'] = '';
			$result['attendance_status'] = '';
			$this->load->view('Student/report_view', $result);
		}
		
	}

}
?>