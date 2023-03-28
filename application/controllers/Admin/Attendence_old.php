<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Attendence extends CI_Controller
{
	
	public function __construct() {
		parent::__construct();
		$this->check_login();
		date_default_timezone_set('Asia/Calcutta'); 
	}

	public function check_login(){
		if(!$this->session->userdata('user_id')){
			redirect();
		}
	}

	public function index(){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$this->load->view('Admin/attendance');
	}
	
	public function manual_attendance(){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$data['emp_attendance'] = $this->common_model->GetAllData('emp_attendance',array(),'attendance_date','desc');
		$data['employee'] = $this->common_model->GetAllData('users',array('status' =>1,'user_type'=>1,'is_deleted'=>0),'user_id','desc');
		$this->load->view('Admin/manual_attendance',$data);
	}
	
	public function add_manual_attendance()
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
			
		$this->form_validation->set_rules('employee','employee','required');
		$this->form_validation->set_rules('attendance_date','attendance_date','required');
		$this->form_validation->set_rules('in_time','in_time','required');
		$this->form_validation->set_rules('out_time','out_time','required');
		
		$users = $this->common_model->GetSingleData('users',array('user_id'=>$this->input->post('employee')));
		
		if($this->form_validation->run()){
			
					
					$insert['user_id'] = $this->input->post('employee');
					$insert['attendance_date'] = date('Y-m-d', strtotime($this->input->post('attendance_date')));
					$insert['empId'] = $users['emp_id'];
					$insert['in_time'] = $this->input->post('in_time');
					$insert['out_time'] = $this->input->post('out_time');
					$insert['created_date'] = date('Y-m-d h:i:s');
					
					$run = $this->common_model->InsertData('emp_attendance',$insert);
			
			if($run)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success">Manual attendance added successfully!</div>');
				redirect('admin/manual_attendance');
			} 
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
				redirect('admin/manual_attendance');
			}
			
			
		 }else{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
				redirect('admin/manual_attendance');
		}
	}
	
    public function monthly_report(){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$this->load->view('Admin/monthly_report');
	}

	public function overtime_request(){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$this->load->view('Admin/overtime_request');
	}

}

?>