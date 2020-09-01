<?php defined('BASEPATH') or exit('No direct script access allowed');


class authentication extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
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
    if (isset($_POST["username"]) && isset($_POST["password"])) {

      $sql = $this->Login_model->validate_manager($_POST["username"], $_POST["password"]);


      if (!empty($sql)) {
        $this->session->set_userdata("data", $sql);
        redirect(site_url() . '/manager');
      } else {
        $error["message"] = "Invalid username or password";
        $this->load->view('Login/signin_view', $error);
      }
    }
  }
  function logout()
  {
    //unset($_SESSION['userid']);
    //unset($_SESSION['username']);
    $this->session->unset_userdata("data");
    redirect(site_url() . '/authentication');
    exit();
  }
}
