<?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class attendance_controller extends CI_Controller {  
      //functions  
      public function index(){  
           $this->load->model("attendance_model");  
           $data["fetch_data"] = $this->attendance_model->fetch_data();  
           //$this->load->view("attendance_view");  
           $this->load->view("attendance_view", $data);  
      }  
      public function form_validation()  
      {  
           //echo 'OK'
           $this->load->library('form_validation');  
          
		  $this->form_validation->set_rules("Status", "Status"); 
		   
           if($this->form_validation->run())  
           {  
                //true  
                $this->load->model("attendance_model");  
                $data = array(  
                    
					 "Status"          =>$this->input->post("Status"), 
                    

					
					
                );  
                if($this->input->post("update"))  
                {  
                     $this->attendance_model->update_data($data, $this->input->post("hidden_id"));  
                     redirect(base_url() . "index.php/attendance_controller/updated");  
                }  
                if($this->input->post("insert"))  
                {  
                     $this->attendance_model->insert_data($data);  
                     redirect(base_url() . "index.php/attendance_controller/inserted");  
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
           $this->load->model("attendance_model");  
           $this->attendance_model->delete_data($id);  
           redirect(base_url() . "index.php/attendance_controller/deleted");  
      }  
      public function deleted()  
      {  
           $this->index();  
      }  
      public function update_data(){  
           $user_id = $this->uri->segment(3);  
           $this->load->model("attendance_model");  
           $data["user_data"] = $this->attendance_model->fetch_single_data($user_id);  
           $data["fetch_data"] = $this->attendance_model->fetch_data();  
           $this->load->view("attendance_view", $data);  
      }  
      public function updated()  
      {  
           $this->index();  
      }  
 }  