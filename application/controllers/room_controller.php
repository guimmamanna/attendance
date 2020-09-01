<?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class room_controller extends CI_Controller {  
      //functions  
      public function index(){  
           $this->load->model("adminroom_model");  
           $data["fetch_data"] = $this->adminroom_model->fetch_data();  
           //$this->load->view("room_view");  
           $this->load->view("room_view", $data);  
      }  
      public function form_validation()  
      {  
           //echo 'OK';  
           $this->load->library('form_validation');  
       $this->form_validation->set_rules("Room_Id", "Room ID", 'required|alpha_numeric'); 
           $this->form_validation->set_rules("Room_Capacity", "Room Capacity", 'required|alpha_numeric');  
		  $this->form_validation->set_rules("BuildingName", "Building Name", 'required|alpha'); 
		  $this->form_validation->set_rules("RoomNumber", "Room Number", 'required|alpha_numeric'); 
		  $this->form_validation->set_rules("RoomDescription", "Room Description", 'required|alpha_numeric'); 
		   
		  
           if($this->form_validation->run())  
           {  
                //true  
                $this->load->model("adminroom_model");  
                $data = array(  
                  "Room_Id"     =>$this->input->post("Room_Id"), 
                     "Room_Capacity"     =>$this->input->post("Room_Capacity"),  
                     "BuildingName"      =>$this->input->post("BuildingName"),
					 "RoomNumber"      =>$this->input->post("RoomNumber"), 
                     "RoomDescription"       =>$this->input->post("RoomDescription"), 
					

					
					
                );  
                if($this->input->post("update"))  
                {  
                     $this->adminroom_model->update_data($data, $this->input->post("hidden_id"));  
                     redirect(base_url() . "index.php/room_controller/updated");  
                }  
                if($this->input->post("insert"))  
                {  
                     $this->adminroom_model->insert_data($data);  
                     redirect(base_url() . "index.php/room_controller/inserted");  
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
           $this->load->model("adminroom_model");  
           $this->room_model->delete_data($id);  
           redirect(base_url() . "index.php/room_controller/deleted");  
      }  
      public function deleted()  
      {  
           $this->index();  
      }  
      public function update_data(){  
           $user_Id = $this->uri->segment(3);  
           $this->load->model("adminroom_model");  
           $data["user_data"] = $this->adminroom_model->fetch_single_data($user_Id);  
           $data["fetch_data"] = $this->adminroom_model->fetch_data();  
           $this->load->view("room_view", $data);  
      }  
      public function updated()  
      {  
           $this->index();  
      }  
 }  