<?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class module_controller extends CI_Controller {  
      //functions  
      public function index(){  
           $this->load->model("module_model");  
           $data["fetch_data"] = $this->module_model->fetch_data();  
           //$this->load->view("module_view");  
           $this->load->view("module_view", $data);  
      }  
      public function form_validation()  
      {  
           //echo 'OK';  
           $this->load->library('form_validation');  
           $this->form_validation->set_rules("Name", "Module Name", 'required|alpha');  
           $this->form_validation->set_rules("Total_hours", "Hours");  
		 
		  
           if($this->form_validation->run())  
           {  
                //true  
                $this->load->model("module_model");  
                $data = array(  
                     "Name"     =>$this->input->post("Name"),  
                     "Total_hours"      =>$this->input->post("Total_hours"),
					
                );  
                if($this->input->post("update"))  
                {  
                     $this->module_model->update_data($data, $this->input->post("hidden_id"));  
                     redirect(base_url() . "index.php/module_controller/updated");  
                }  
                if($this->input->post("insert"))  
                {  
                     $this->module_model->insert_data($data);  
                     redirect(base_url() . "index.php/module_controller/inserted");  
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
           $this->load->model("module_model");  
           $this->module_model->delete_data($id);  
           redirect(base_url() . "index.php/module_controller/deleted");  
      }  
      public function deleted()  
      {  
           $this->index();  
      }  
      public function update_data(){  
           $user_id = $this->uri->segment(3);  
           $this->load->model("module_model");  
           $data["user_data"] = $this->module_model->fetch_single_data($user_id);  
           $data["fetch_data"] = $this->module_model->fetch_data();  
           $this->load->view("module_view", $data);  
      }  
      public function updated()  
      {  
           $this->index();  
      }  
 }  