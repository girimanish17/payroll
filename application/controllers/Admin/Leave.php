<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Leave extends CI_Controller
{
	
	public function __construct() {
		parent::__construct();
		$this->check_login();
		$this->load->model('Common_function');
		$this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
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
		$comp_id = $this->session->userdata('comp_id');
		$type = $this->session->userdata('user_type');  //'comp_id'=>$this->session->userdata('comp_id');
		$data['emp_leaves'] =$emp_leaves= $this->common_model->GetAllData('emp_leaves',array('comp_id'=>$comp_id),'created_date','desc');
		//echo $this->db->last_query(); die;
		//$data['emp_leaves'] = $this->common_model->all_leaves($where);
		$data['approved_leaves'] =  $this->common_model->count_row('emp_leaves',array('status'=>'Approved','comp_id'=>$comp_id));
		$data['rejected_leaves'] =  $this->common_model->count_row('emp_leaves',array('status'=>'Rejected','comp_id'=>$comp_id));
		$data['pending_leaves']  =  $this->common_model->count_row('emp_leaves',array('status'=>'Pending','comp_id'=>$comp_id));
	     //Year wise
		$data['approved_leaves_year'] = $approved_leaves =  $this->common_model->year_count_row('Approved');
		$data['rejected_leaves_year'] = $rejected_leaves = $this->common_model->year_count_row('Rejected');
		$data['pending_leaves_year']  = $pending_leaves = $this->common_model->year_count_row('Pending');
		$data['total_emp_leaves_year'] =$total_emp_leaves =   $this->common_model->year_count_row();
		$data['approved_percent_year'] = $this->Common_function->cal_percentage($approved_leaves,$total_emp_leaves);
		$data['rejected_percent_year'] = $this->Common_function->cal_percentage($rejected_leaves,$total_emp_leaves);
		$data['pending_percent_year'] = $this->Common_function->cal_percentage($pending_leaves,$total_emp_leaves);
		
		 //Month wise
		$data['approved_leaves_month'] = $approved_leaves_month =  $this->common_model->month_count_row('Approved');
		$data['rejected_leaves_month'] = $rejected_leaves_month = $this->common_model->month_count_row('Rejected');
		$data['pending_leaves_month']  = $pending_leaves_month = $this->common_model->month_count_row('Pending');
		$data['total_emp_leaves_month'] =$total_emp_leaves_month =   $this->common_model->month_count_row();
		$data['approved_percent_month'] = $this->Common_function->cal_percentage($approved_leaves_month,$total_emp_leaves_month);
		$data['rejected_percent_month'] = $this->Common_function->cal_percentage($rejected_leaves_month,$total_emp_leaves_month);
		$data['pending_percent_month'] = $this->Common_function->cal_percentage($pending_leaves_month,$total_emp_leaves_month);

		 //Week wise
		$data['approved_leaves_week'] = $approved_leaves_week =  $this->common_model->week_count_row('Approved');
		$data['rejected_leaves_week'] = $rejected_leaves_week = $this->common_model->week_count_row('Rejected');
		$data['pending_leaves_week']  = $pending_leaves_week = $this->common_model->week_count_row('Pending');
		$data['total_emp_leaves_week'] =$total_emp_leaves_week =   $this->common_model->week_count_row();
		$data['approved_percent_week'] = $this->Common_function->cal_percentage($approved_leaves_week,$total_emp_leaves_week);
		$data['rejected_percent_week'] = $this->Common_function->cal_percentage($rejected_leaves_week,$total_emp_leaves_week);
		$data['pending_percent_week'] = $this->Common_function->cal_percentage($pending_leaves_week,$total_emp_leaves_week);
		//echo $this->db->last_query();  die;
		
		$this->load->view('Admin/leave_request',$data);
	}
	
	public function compoff_leave_request(){
		$user_id = $this->session->userdata('user_id');
		$comp_id = $this->session->userdata('comp_id');
		$type = $this->session->userdata('user_type'); //
		$data['emp_leaves'] =$emp_leaves= $this->common_model->GetAllData('compoff_emp_leaves',array('comp_id'=>$comp_id),'created_date','desc');
		//echo count($emp_leaves);
		//echo $this->db->last_query(); die;
		//$data['emp_leaves_count'] =$emp_leaves= $this->common_model->GetAllData('emp_leaves',array('comp_id'=>$comp_id),'created_date','desc');
		$data['approved_leaves'] =  $this->common_model->count_row('compoff_emp_leaves',array('status'=>'Approved','comp_id'=>$comp_id));
		$data['rejected_leaves'] =  $this->common_model->count_row('compoff_emp_leaves',array('status'=>'Rejected','comp_id'=>$comp_id));
		$data['pending_leaves']  =  $this->common_model->count_row('compoff_emp_leaves',array('status'=>'Pending','comp_id'=>$comp_id));
		
		
		$this->load->view('Admin/compoff_leave_request',$data);
	}

	public function leave_request(){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$this->load->view('Admin/leave_request');
	}

	public function leave_type(){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$comp_id = $this->session->userdata('comp_id');
		$where = "status=1 and (comp_id='".$comp_id."' or comp_id='')";
		$data['leave_type'] = $this->common_model->GetAllData('leave_type',$where,'created_date','desc');
		//echo $this->db->last_query(); die;
		$this->load->view('Admin/leave-type',$data);
	}
	
	public function add_leave_type(){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
			
		$this->form_validation->set_rules('name','Leave type','required');
		$this->form_validation->set_rules('days_per_year','Purchase From','required');
		$this->form_validation->set_rules('req_approval','Require approval','required');
		
		$leave_type = $this->common_model->GetSingleData('leave_type',array('name'=>$this->input->post('name'),'comp_id'=>$this->session->userdata('comp_id'),'days_per_year'=>$this->input->post('days_per_year')));
		
		if($this->form_validation->run()){
			if($leave_type==''){
					
					$insert['name'] = $this->input->post('name');
					$insert['days_per_year'] = $this->input->post('days_per_year');
					$insert['req_approval'] = $this->input->post('req_approval');
					$insert['comp_id'] = $this->session->userdata('comp_id');
					$insert['created_date'] = date('Y-m-d h:i:s');
					
					$run = $this->common_model->InsertData('leave_type',$insert);
			}else{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Already existed!</div>');
				redirect('admin/leave-type');
			}
			
			if($run)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success">Leave type added successfully!</div>');
				redirect('admin/leave-type');
			} 
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
			}
			
			
		 } else {
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
		}
	}
	
	public function edit_leave_type($id){
		//echo 'hi'; print_r($this->input->post());die;
		$this->form_validation->set_rules('name','Leave type','required');
		$this->form_validation->set_rules('days_per_year','Purchase From','required');
		$this->form_validation->set_rules('req_approval','Require approval','required');
		
		//$leave_type = $this->common_model->GetSingleData('leave_type',array('name'=>$this->input->post('name'),'days_per_year'=>$this->input->post('days_per_year')));
		
			if($this->form_validation->run()){
				$insert['name'] = $this->input->post('name');
				$insert['days_per_year'] = $this->input->post('days_per_year');
				$insert['req_approval'] = $this->input->post('req_approval');
				
				//$run = $this->common_model->InsertData('leave_type',$insert);
				$run = $this->common_model->UpdateData('leave_type',array('id'=>$id),$insert);
			
			if($run)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success">Leave type updated successfully!</div>');
				redirect('admin/leave-type');
			} 
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
			}
			
			
		 } else {
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
		}
	}
	
	public function delete_leave_type($id){
		
		$run = $this->common_model->DeleteData('leave_type',array('id'=>$id));
		if($run)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success">Leave type deleted successfully!</div>');
				
			} 
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
			}
		redirect('admin/leave-type');
	}
	
	public function leave_approval_status($id,$status)
	{
		$emp_leaves = $this->common_model->GetSingleData('emp_leaves',array('id'=>$id));
		
		$insert['status'] = $status==1?"Approved":"Rejected";
		
		$run = $this->common_model->UpdateData('emp_leaves',array('id'=>$id),$insert);
		
		if($run)
			{
				if($status==1){
					$this->session->set_flashdata('msg','<div class="alert alert-success">Employee Leave approved successfully!</div>');
				}else{
					$this->session->set_flashdata('msg','<div class="alert alert-success">Employee Leave rejected successfully!</div>');
				}
				
			} 
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
			}
		redirect('admin/leave_request');
	}
	
	public function compoff_leave_approval_status($id,$status)
	{
		$emp_leaves = $this->common_model->GetSingleData('compoff_emp_leaves',array('id'=>$id));
		
		$insert['status'] = $status==1?"Approved":"Rejected";
		
		$run = $this->common_model->UpdateData('compoff_emp_leaves',array('id'=>$id),$insert);
		
		if($run)
			{
				if($status==1){
					$this->session->set_flashdata('msg','<div class="alert alert-success">Employee CompOff Leave approved successfully!</div>');
				}else{
					$this->session->set_flashdata('msg','<div class="alert alert-success">Employee CompOff Leave rejected successfully!</div>');
				}
				
			} 
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
			}
		redirect('admin/compoff_leave_request');
	}

	public function leave_calendars(){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$this->load->view('Admin/leave-calendar');
	}
}

?>