<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class forgot_controller extends CI_Controller {
public function email_exists(){
    $email = $this->input->post('email');
    $query = $this->db->query("SELECT email, password FROM administrator WHERE email='$email'");    
    if($row = $query->row()){
        return TRUE;
    }else{
        return FALSE;
    }
 }
public function temp_reset_password($temp_pass){
    $data =array(
                'email' =>$this->input->post('email'),
                'reset_pass'=>$temp_pass);
                $email = $data['email'];

    if($data){
        $this->db->where('email', $email);
        $this->db->update('administrator', $data);  
        return TRUE;
    }else{
        return FALSE;
    }

}
public function is_temp_pass_valid($temp_pass){
    $this->db->where('reset_pass', $temp_pass);
    $query = $this->db->get('administrator');
    if($query->num_rows() == 1){
        return TRUE;
    }
    else return FALSE;
}
}