<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
 class lecturer_model extends CI_Model  
 {  
      function test_main()  
      {  
           echo "This is model function";  
      }  
      function insert_data($data)  
      {  
           $this->db->insert("lecturer", $data);  
      }  
      function fetch_data()  
      {  
            
           $query = $this->db->query("SELECT Lecturer_Id, FirstName,LastName,Department,Email,Mobile_number,Address FROM `lecturer` WHERE 1 ");  
           $this->db->from("lecturer");  
           $query = $this->db->get();  
           return $query;  
      }  
      function delete_data($id){  
           $this->db->where("Lecturer_Id", $id);  
           $this->db->delete("lecturer");  
           //DELETE FROM tbl_user WHERE id = $id  
      }  
      function fetch_single_data($id)  
      {  
           $this->db->where("Lecturer_Id", $id);  
           $query = $this->db->get("lecturer");  
           return $query;  
           //Select * FROM tbl_user where id = '$id'  
      }  
      function update_data($data, $id)  
      {  
           $this->db->where("Lecturer_Id", $id);  
           $this->db->update("lecturer", $data);  
           
      }  
 }  
