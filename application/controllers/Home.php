<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		$this->check_login();
	}
	public function check_login(){
		if($this->session->userdata('user_id')){
			redirect('admin/dashboard');
		}
	}
	public function index(){
		// echo "hiii"; die;
		$this->load->view('login');
	}

	public function doLogin(){
		// echo "hello"; die;
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');

		if($this->form_validation->run()){
			$email = $this->input->post('email');
			$password = $this->input->post('password');
            $type = $this->input->post('type');
            
            if($type=='1')
			{
				$run = $this->common_model->GetSingleData('users',array('email' =>$email,'user_type'=>$type));
		    } else {
				$run = $this->common_model->GetSingleData('users',array('email' =>$email,'user_type!='=>1));	
		    }
			//echo $this->db->last_query();
			if($run) {
				if (password_verify($password,$run['password'])) {
				    $this->session->set_userdata('user_id',$run['user_id']);
				    $this->session->set_userdata('user_type',$run['user_type']);
					$this->session->set_userdata('comp_id',$run['comp_id']);
					$this->session->set_userdata('emp_id',$run['emp_id']);
				    
					$this->session->set_flashdata('msg','<div class="alert alert-success">Welcome '.$run['username'].'</div>');
					$json['status']='1';
					if($run['user_type'] == 3){
						$json['user_type']='3';
					}else{
						$json['user_type']='2';
					}
                    
				} else {
				    $this->session->set_flashdata('msg','<div class="alert alert-danger">Password incorrect.</div>');
				   
				    $json['status']='0';
				    $json['msg'] = '<div class="alert alert-danger">Password incorrect.</div>';
				}
							
			} else {
				
				$this->session->set_flashdata('msg','<div class="alert alert-danger">username or password incorrect.</div>');
				
				$json['status']='0';
				$json['msg'] = '<div class="alert alert-danger">Email or password incorrect.</div>';
			}
		 } else {
			$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');

			$json['status']='0';
			$json['msg'] = '<div class="alert alert-danger">'.validation_errors().'</div>';
		}

		echo json_encode($json);
	}
    
    public function forgot_password(){
		$this->load->view('forgot-password');
	}
	
	public function forgotPassword(){
		$user = $this->common_model->GetSingleData('users',array('email'=>$this->input->post('email')));
		$password = $user['pw'];
		$body = "<p>Hello ".$user['first_name'].",<br> Your Password is : ".$password."</p>";
		$run = $this->common_model->SendMail($this->input->post('email'),'Forgot Password Recovery',$body);
		$json['status']='0';
		$json['msg'] = '<div class="alert alert-success">Mail Sent! Please check your email..</div>';
		echo json_encode($json);
	}


}
?>