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
		if(!$this->session->userdata('user_id') ){
			redirect();
		}
		if($this->session->userdata('user_type')!=2){
			redirect('login');
		}
	}

	public function index(){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$data['emp_attendance'] = $this->common_model->GetAllData('attendence',array('comp_id'=>$this->session->userdata('comp_id')),'attendence_date','desc');
		$data['employee'] = $this->common_model->GetAllData('users',array('status' =>1,'user_type'=>1,'comp_id'=>$this->session->userdata('comp_id'),'is_deleted'=>0),'user_id','desc');
		$this->load->view('Admin/attendance',$data);
	}
	
	public function manual_attendance(){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		//$data['emp_attendance'] = $this->common_model->GetAllData('emp_attendance',array(),'attendance_date','desc');
		$data['emp_attendance'] = $this->common_model->GetAllData('attendence',array('created_by'=>$user_id,'comp_id'=>$this->session->userdata('comp_id')),'attendence_date','desc');
		$data['employee'] = $this->common_model->GetAllData('users',array('status' =>1,'user_type'=>1,'is_deleted'=>0,'comp_id'=>$this->session->userdata('comp_id')),'user_id','desc');
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
		$this->form_validation->set_rules('workingFrom','workingFrom','required');
		
		$users = $this->common_model->GetSingleData('users',array('user_id'=>$this->input->post('employee')));
		
		if($this->form_validation->run()){
			
			$dt = $this->input->post('attendance_date');
			$in = str_split($this->input->post('in_time'),5);
			$out = str_split($this->input->post('out_time'),5);
			$t1 =  $dt." ".$in[0].":00";
			$t2 =  $dt." ".$out[0].":00";
			 $to_time = strtotime($t1);
			$from_time = strtotime($t2);
			 $minutes = round(abs($to_time - $from_time) / 60,2). " minute";
			
			 $hours = intdiv($minutes, 60).'hr'. ($minutes % 60).'m';
					
					$insert['user_id'] = $this->input->post('employee');
					$insert['attendence_date'] = date('Y-m-d', strtotime($this->input->post('attendance_date')));
					$insert['empId'] = $users['emp_id'];
					$insert['comp_id'] = $this->session->userdata('comp_id');
					$insert['checkIn'] = $this->input->post('in_time');
					$insert['checkOut'] = $this->input->post('out_time');
					$insert['workingFrom'] = $this->input->post('workingFrom');
					$insert['created_at'] = date('Y-m-d h:i:s');
					$insert['created_by'] = $user_id;
					$insert['total_hour'] = $hours;
					
					$run = $this->common_model->InsertData('attendence',$insert);
			//print_r($insert); die;
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
	
    public function monthly_report_old(){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$this->load->view('Admin/monthly_report');
	}
	
	public function monthly_report(){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		
		$employee=$this->input->post('employee');
		$monthYear=$this->input->post('monthYear');
		if($employee && $monthYear)
		{
			$data['employee_id']=$employee?$employee:"";
			$data['monthYear']=$monthYear?$monthYear:"";
		}
		
		$data['employee'] = $this->common_model->GetAllData('users',array('status' =>1,'user_type'=>1,'is_deleted'=>0,'comp_id'=>$this->session->userdata('comp_id')),'user_id','desc');
		$this->load->view('Admin/monthly_report',$data);
	}
	
	public function getMonthlyReport(){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$employee=$this->input->post('employee');
		$monthYear=$this->input->post('monthYear');
		//echo $first_day = date('Y-m-01');    // first date of the month
		//echo $last_day = date('Y-m-t'); // last date of the month
		
		$first_day = date('Y-m-01');    
		$last_day = date('Y-m-t');
	
		/*if($monthYear){
		$empMonthYear = $employee."/".$monthYear
		redirect('admin/monthlyReport/'.$monthYear);
		}else{
			redirect('admin/monthly_report');
		}*/
		//$data['emp_attendance'] = $this->common_model->GetAllData('attendence',array('created_by'=>$user_id),'attendence_date','desc');
		//$data['employee'] = $this->common_model->GetAllData('users',array('status' =>1,'user_type'=>1,'is_deleted'=>0),'user_id','desc');
		//$this->load->view('Admin/monthly_report',$data);
	}

	public function overtime_request(){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$this->load->view('Admin/overtime_request');
	}

}

?>