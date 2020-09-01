<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
 class adminstudent_model extends CI_Model  
 {  
      function test_main()  
      {  
           echo "This is model function";  
      }  
      function insert_data($data)  
      {  
           $this->db->insert("student", $data);  
      }  
      function fetch_data()  
      {  
            
           $query = $this->db->query("SELECT Student_Id,FirstName,LastName,UserName,Email,Mobile_number,Address FROM `student` WHERE 1");  
           $this->db->from("student");   
           return $query;  
      }  
      function delete_data($id){  
           $this->db->where("Student_Id", $id);  
           $this->db->delete("student");  
           //DELETE FROM tbl_user WHERE id = $id  
      }  
      function fetch_single_data($id)  
      {  
           $this->db->where("Student_Id", $id);  
           $query = $this->db->get("student");  
           return $query;  
           //Select * FROM tbl_user where id = '$id'  
      }  
      function update_data($data, $id)  
      {  
           $this->db->where("Student_Id", $id);  
           $this->db->update("student", $data);  
           //UPDATE tbl_user SET first_name = '$first_name', last_name = '$last_name' WHERE id = '$id'  
      }  
 }  