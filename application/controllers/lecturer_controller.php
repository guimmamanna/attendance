<?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class lecturer_controller extends CI_Controller {  
      //functions  
      public function index(){  
           $this->load->model("lecturer_model");  
           $data["fetch_data"] = $this->lecturer_model->fetch_data();  
           //$this->load->view("lecturer_view");  
           $this->load->view("lecturer_view", $data);  
      }  
	 
      public function form_validation()  
      {  
           //echo 'OK';  
           $this->load->library('form_validation'); 
           $this->form_validation->set_rules("Lecturer_Id", "First Name", 'required|alpha_numeric');  
           $this->form_validation->set_rules("FirstName", "First Name", 'required|alpha');  
           $this->form_validation->set_rules("LastName", "Last Name", 'required|alpha');  
		  $this->form_validation->set_rules("UserName", "User Name", 'required|alpha_numeric'); 
		  $this->form_validation->set_rules("Department", "Department", 'required|alpha'); 
		  $this->form_validation->set_rules("Password", "Password", 'required|max_length[15]|min_length[6]|alpha_numeric'); 
		  $this->form_validation->set_rules("Email", "Email", 'required|valid_email'); 
		    $this->form_validation->set_rules("Mobile_number", "Mobile No"); 
		  $this->form_validation->set_rules("Address", "Address", 'required|alpha_numeric');
		  
           if($this->form_validation->run())  
           {  
                //true  
                $this->load->model("lecturer_model");  
                $data = array(  
                  "Lecturer_Id"     =>$this->input->post("Lecturer_Id"), 
                     "FirstName"     =>$this->input->post("FirstName"),  
                     "LastName"      =>$this->input->post("LastName"),
					 "UserName"      =>$this->input->post("UserName"), 
					"Department"      =>$this->input->post("Department"),
                     "Password"       =>$this->input->post("Password"), 
					 "Email"          =>$this->input->post("Email"), 
                     "Mobile_number"  =>$this->input->post("Mobile_number"), 
					 "Address"        =>$this->input->post("Address")

					
					
                );  
                if($this->input->post("update"))  
                {  
                     $this->lecturer_model->update_data($data, $this->input->post("hidden_id"));  
                     redirect(base_url() . "index.php/lecturer_controller/updated");  
                }  
                if($this->input->post("insert"))  
                {  
                     $this->lecturer_model->insert_data($data);  
                     redirect(base_url() . "index.php/lecturer_controller/inserted");  
                }  
           }  
           else  
           {  
                //false  
                $this->index();  
           }  
      }  
      public function inserted()  
      {  
           $this->index();  
      }  
      public function delete_data(){  
           $id = $this->uri->segment(3);  
           $this->load->model("lecturer_model");  
           $this->lecturer_model->delete_data($id);  
           redirect(base_url() . "index.php/lecturer_controller/deleted");  
      }  
      public function deleted()  
      {  
           $this->index();  
      }  
      public function update_data(){  
           $user_id = $this->uri->segment(3);  
           $this->load->model("lecturer_model");  
           $data["user_data"] = $this->lecturer_model->fetch_single_data($user_id);  
           $data["fetch_data"] = $this->lecturer_model->fetch_data();  
           $this->load->view("lecturer_view", $data);  
      }  
      public function updated()  
      {  
           $this->index();  
      }  
 }  