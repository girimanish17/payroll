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
		if(!$this->session->userdata('user_id') ){
			redirect();
		}
		 if($this->session->userdata('user_type')==1){
			redirect('login');
		} 
	}

	public function index(){
		$user_id = $this->session->userdata('user_id');
		$comp_id = $this->session->userdata('comp_id');
		$type = $this->session->userdata('user_type');
		$data['totoal_staff'] = $this->common_model->GetAllData('users',array('user_type'=>1,'status'=>1,'comp_id'=>$comp_id));	
		//echo "<pre>";print_r($data['totoal_staff']);
		//$newJoineeDate = '2022-06-01';
		$newJoineeDate = date( 'Y' ) . '-06-01';
		
		$data['new_employee'] = $this->common_model->GetAllData('users',array('user_type'=>1,'status'=>1,'comp_id'=>$comp_id,'date_of_joining <='=>$newJoineeDate));
		$data['designationwisestaff'] = $this->common_model->designation_wise_staff();
		$data['totalSum_designation_wise_staff'] = $this->common_model->totalSum_designation_wise_staff();
		$data['department_wise_staff'] = $this->common_model->department_wise_staff();
		$data['totalSum_department_wise_staff'] = $this->common_model->totalSum_department_wise_staff();
		$data['termination'] = $this->common_model->GetAllData('users',array('user_type'=>1,'terminate'=>1,'comp_id'=>$comp_id));
		$data['last_month_termination'] = $this->common_model->lastMonthTermination();	
		$data['total_department'] = $this->common_model->GetAllData('department',array('comp_id'=>$comp_id));		
		$this->load->view('Admin/dashboard',$data);
	}
	
	public function logout(){
		session_destroy();
		redirect();
	}
	
	public function general_option()
	{
		$user_id = $this->session->userdata('user_id');
		
		$type = $this->session->userdata('user_type');
		
		$data['countries'] = $this->common_model->GetAllData('country',array(),'id');	
		
		//$data['currency'] = $this->common_model->GetAllData('currency',array(),'id');	
		
		$data['comp_general_options'] = $this->common_model->GetSingleData('comp_general_options',array('user_id'=>$user_id));
		
		$this->load->view('Admin/general_option',$data);
	}
	
	public function addGeneralOptions()
	{
		$user_id = $this->session->userdata('user_id');
		
		$type = $this->session->userdata('user_type');
		
		$this->form_validation->set_rules('system_email','system email','required');
		
		//print_r($this->input->post()); die;
		
		if($this->form_validation->run()){
			
			$comp_general_options = $this->common_model->GetSingleData('comp_general_options',array('user_id'=>$user_id));
			
			if($comp_general_options=='')
			{
		//Add
					$insert['user_id'] = $user_id;
					$insert['system_email'] = $this->input->post('system_email');
					$insert['contact_email'] = $this->input->post('contact_email');
					$insert['logo_position'] = $this->input->post('logo_position');
					$insert['country_id'] = $this->input->post('country');
					$insert['timezone'] = $this->input->post('timezone');
					$insert['currency_id'] = $this->input->post('currency');
					$insert['openIdAuth'] = $this->input->post('openIdAuth');
					$insert['mobileAccessEmp'] = $this->input->post('mobileAccessEmp');
					$insert['created_date'] = date('Y-m-d h:i:s');
					
					$run = $this->common_model->InsertData('comp_general_options',$insert);
					
					if($run)
					{
						$this->session->set_flashdata('msg','<div class="alert alert-success">General Option added successfully!</div>');
					} 
					else
					{
						$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrongss</div>');
					}
			}else{
		//Update		
					$insert['system_email'] = $this->input->post('system_email');
					$insert['contact_email'] = $this->input->post('contact_email');
					$insert['logo_position'] = $this->input->post('logo_position');
					$insert['country_id'] = $this->input->post('country');
					$insert['timezone'] = $this->input->post('timezone');
					$insert['currency_id'] = $this->input->post('currency');
					$insert['openIdAuth'] = $this->input->post('openIdAuth');
					$insert['mobileAccessEmp'] = $this->input->post('mobileAccessEmp');
					$insert['updated_date'] = date('Y-m-d h:i:s');
					
					$this->common_model->UpdateData('comp_general_options',array('user_id'=>$user_id),$insert);
					$this->session->set_flashdata('msg','<div class="alert alert-success">General Option updated successfully!</div>');
			}
			
			redirect('admin/general_option');
			
		 }
		 else
		 {
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
				redirect('admin/general_option');
		}
	}
	
	public function sequence_number()
	{
		$user_id = $this->session->userdata('user_id');
		
		$data['comp_sequence_numbers'] = $this->common_model->GetAllData('comp_sequence_numbers',array('status'=>1),'id');	
		
		$type = $this->session->userdata('user_type');//comp_sequence_numbers
		
		$this->load->view('Admin/sequence_number',$data);
	}
	
	public function add_sequence_number()
	{
		$user_id = $this->session->userdata('user_id');
		
		$type = $this->session->userdata('user_type');
		
		$this->form_validation->set_rules('name','name','required');
		
		//print_r($this->input->post()); die;
		
		if($this->form_validation->run()){
			
			//$comp_sequence_numbers = $this->common_model->GetSingleData('comp_sequence_numbers',array('id'=>$id));
			
					$insert['user_id'] = $user_id;
					$insert['name'] = $this->input->post('name');
					$insert['type'] = $this->input->post('type');
					$insert['key'] = $this->input->post('key');
					$insert['format'] = $this->input->post('format');
					$insert['index'] = $this->input->post('index');
					$insert['created_date'] = date('Y-m-d');
					
					$run = $this->common_model->InsertData('comp_sequence_numbers',$insert);
					
					if($run)
					{
						$this->session->set_flashdata('msg','<div class="alert alert-success">Sequence number added successfully!</div>');
					} 
					else
					{
						$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrongss</div>');
					}
			
			redirect('admin/sequence_number');
			
		 }
		 else
		 {
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
				redirect('admin/sequence_number');
		}
	}
	
	public function edit_sequence_number($id)
	{
		$user_id = $this->session->userdata('user_id');
		
		$type = $this->session->userdata('user_type');
		
		$this->form_validation->set_rules('name','name','required');
		
		//print_r($this->input->post()); die;
		
		if($this->form_validation->run()){
			
			$comp_sequence_numbers = $this->common_model->GetSingleData('comp_sequence_numbers',array('id'=>$id));
			 
			if($comp_sequence_numbers)
			{
					
					$insert['name'] = $this->input->post('name');
					$insert['type'] = $this->input->post('type');
					$insert['key'] = $this->input->post('key');
					$insert['format'] = $this->input->post('format');
					$insert['index'] = $this->input->post('index');
					
					//$run = $this->common_model->InsertData('comp_sequence_numbers',$insert);
					$this->common_model->UpdateData('comp_sequence_numbers',array('id'=>$id),$insert);
					
					$this->session->set_flashdata('msg','<div class="alert alert-success">Sequence number updated successfully!</div>');
			}
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Record not found</div>');
			}
	
			redirect('admin/sequence_number');
			
		 }
		 else
		 {
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
				redirect('admin/sequence_number');
		}
	}
	
	public function delete_sequence_number($id){
			
			//echo $id; die;
			$run = $this->common_model->DeleteData('comp_sequence_numbers',array('id'=>$id));
			//echo $this->db->last_query();
			if($run) {
				
				$this->session->set_flashdata('depmsg','<div class="alert alert-success">Sequence number deleted successfully</div>');
                 redirect('admin/sequence_number');
							
			} else {
				$this->session->set_flashdata('depmsg','<div class="alert alert-success">Something went wrong</div>');
                 redirect('admin/sequence_number');
			}
		 
	}
	
	public function list_of_value()
	{
		$user_id = $this->session->userdata('user_id');
		
		$type = $this->session->userdata('user_type');
		
		$this->load->view('Admin/list_of_value',$data);
	}
	
	public function password_option()
	{
		$user_id = $this->session->userdata('user_id');
		
		$type = $this->session->userdata('user_type');
		
		$data['comp_password_option'] = $this->common_model->GetSingleData('comp_password_option',array('user_id'=>$user_id));
		
		$this->load->view('Admin/password_option',$data);
	}
	
	public function add_password_option()
	{
		$user_id = $this->session->userdata('user_id');
		
		$type = $this->session->userdata('user_type');
		
		$this->form_validation->set_rules('pass_min_length','pass min length','required');
		
		//print_r($this->input->post()); die;
		
		if($this->form_validation->run()){
			
			$comp_password_option = $this->common_model->GetSingleData('comp_password_option',array('user_id'=>$user_id));
			
			if($comp_password_option=='')
			{
		//Add
					$insert['user_id'] = $user_id;
					$insert['pass_min_length'] = $this->input->post('pass_min_length');
					$insert['pass_expiry_limit'] = $this->input->post('pass_expiry_limit');
					$insert['pass_expiry_reminder_days'] = $this->input->post('pass_expiry_reminder_days');
					$insert['memory_list_size'] = $this->input->post('memory_list_size');
					$insert['allowed_invalid_login_attempts'] = $this->input->post('allowed_invalid_login_attempts');
					$insert['welcome_mail_pass_expiry_days'] = $this->input->post('welcome_mail_pass_expiry_days');
					$insert['created_date'] = date('Y-m-d h:i:s');
					
					$run = $this->common_model->InsertData('comp_password_option',$insert);
					
					if($run)
					{
						$this->session->set_flashdata('msg','<div class="alert alert-success">Password Option added successfully!</div>');
					} 
					else
					{
						$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrongss</div>');
					}
			}else{
		//Update		
					$insert['pass_min_length'] = $this->input->post('pass_min_length');
					$insert['pass_expiry_limit'] = $this->input->post('pass_expiry_limit');
					$insert['pass_expiry_reminder_days'] = $this->input->post('pass_expiry_reminder_days');
					$insert['memory_list_size'] = $this->input->post('memory_list_size');
					$insert['allowed_invalid_login_attempts'] = $this->input->post('allowed_invalid_login_attempts');
					$insert['welcome_mail_pass_expiry_days'] = $this->input->post('welcome_mail_pass_expiry_days');
					$insert['updated_date'] = date('Y-m-d h:i:s');
					
					$this->common_model->UpdateData('comp_password_option',array('user_id'=>$user_id),$insert);
					$this->session->set_flashdata('msg','<div class="alert alert-success">Password Option updated successfully!</div>');
			}
			
			redirect('admin/password_option');
			
		 }
		 else
		 {
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
				redirect('admin/password_option');
		}
	}
	
	public function professional_tax_slab()
	{
		$user_id = $this->session->userdata('user_id');
		
		$type = $this->session->userdata('user_type');
		
		$this->load->view('Admin/professional_tax_slab',$data);
	}
	
	public function tax_slab()
	{
		$user_id = $this->session->userdata('user_id');
		
		$type = $this->session->userdata('user_type');
		
		$this->load->view('Admin/tax_slab',$data);
	}
	//$route['admin/general_option'] = 'Admin/Home/general_option';
	

	

}

?>