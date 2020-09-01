<?php defined('BASEPATH') or exit('No direct script access allowed');


class Lectures extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('Lecture_model');
		$this->load->library('session');
	}
	public function index()
	{
		if (isset($this->session->userdata("data")->Manager_Id)) {

			$result['modules'] = $this->Lecture_model->fetch_lectures();
			$this->load->view('Manager/lecture_view', $result);
		} else {
			redirect(base_url() . "index.php/authentication");
		}
	}
	public function load_data()
	{
		if (isset($_GET["modules"])) {
			$Module_Id = $_GET["modules"];
		} else {
			$Module_Id = 0;
		}
		$result["module"] = $this->Lecture_model->get_lectures($Module_Id);
		$result['modules'] = $this->Lecture_model->fetch_lectures();
		$this->load->view('Manager/lecture_view', $result);
	}
}
