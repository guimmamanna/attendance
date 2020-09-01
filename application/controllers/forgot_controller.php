<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class forgot_controller extends CI_Controller
{
	
public function recover(){
    //Loads the view for the recover password process.
    $this->load->view('forgot_view');
}
public function recover_password(){
    $this->load->library('form_validation');
    $this->form_validation->set_rules('email', 'Email', 'required|trim|xss_clean|callback_validate_credentials');

            //check if email is in the database
        $this->load->model('forgot_model');
        if($this->model_users->email_exists()){
            //$them_pass is the varible to be sent to the user's email 
            $temp_pass = md5(uniqid());
            //send email with #temp_pass as a link
            $this->load->library('email', array('mailtype'=>'html'));
            $this->email->from('admin@gmail.com', "Site");
            $this->email->to($this->input->post('email'));
            $this->email->subject("Reset your Password");

            $message = "<p>This email has been sent as a request to reset our password</p>";
            $message .= "<p><a href=index.php/".base_url()."index.php//reset_controller/$temp_pass'>Click here </a>if you want to reset your password,
                        if not, then ignore</p>";
            $this->email->message($message);

            if($this->email->send()){
                $this->load->model('forgot_model');
                if($this->forgot_model->temp_reset_password($temp_pass)){
                    echo "check your email for instructions, thank you";
                }
            }
            else{
                echo "email was not sent, please contact your administrator";
            }

        }else{
            echo "your email is not in our database";
        }
}
public function reset_password($temp_pass){
    $this->load->model('forgot_model');
    if($this->forgot_model->is_temp_pass_valid($temp_pass)){

        $this->load->view('forgot_view');

    }else{
        echo "the key is not valid";    
    }

}
public function update_password(){
    $this->load->library('form_validation');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|trim|matches[password]');
            if($this->form_validation->run()){
            echo "passwords match"; 
            }else{
            echo "passwords do not match";  
            }
}
}