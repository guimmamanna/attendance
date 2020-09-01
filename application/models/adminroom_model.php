<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
 class adminroom_model extends CI_Model  
 {  
      function test_main()  
      {  
           echo "This is model function";  
      }  
      function insert_data($data)  
      {  
           $this->db->insert("room", $data);  
      }  
      function fetch_data()  
      {  
            
           $query = $this->db->query("SELECT * FROM `room` WHERE 1");  
           $this->db->from("room");  
           $query = $this->db->get();  
           return $query;  
      }  
      function delete_data($id){  
           $this->db->where("Room_Id", $id);  
           $this->db->delete("room");  
           //DELETE FROM tbl room WHERE id = $id  
      }  
      function fetch_single_data($id)  
      {  
           $this->db->where("Room_Id", $id);  
           $query = $this->db->get("room");  
           return $query;  
           //Select * FROM tbl_user where id = '$id'  
      }  
      function update_data($data, $id)  
      {  
           $this->db->where("Room_Id", $id);  
           $this->db->update("room", $data);  
           //UPDATE tbl_room SET first_name = 
      }  
 }  