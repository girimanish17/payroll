<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class CoreHr extends CI_Controller
{
	  
	public function __construct() {
		parent::__construct();
		$this->check_login();
		$this->load->model('Common_function');
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
		$data['department'] = $this->common_model->GetAllData('department',array('comp_id'=>$this->session->userdata('comp_id')),'id');
		$this->load->view('Admin/department',$data);
	}

	public function designation(){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$data['designation'] = $this->common_model->GetAllData('designation',array('comp_id'=>$this->session->userdata('comp_id')),'id');
		$data['department'] = $this->common_model->GetAllData('department',array('comp_id'=>$this->session->userdata('comp_id')),'id');
		$this->load->view('Admin/designation',$data);
	}

	public function announcements()
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$data['searchKey'] = $searchKey = $this->input->post('searchKey');
		if($searchKey && $searchKey!='all'){ 
			$where="comp_id='".$this->session->userdata('comp_id')."' and title LIKE '%$searchKey%'";
		}elseif($searchKey=='all'){
			$where="comp_id='".$this->session->userdata('comp_id')."'";
		}else{
			$where="comp_id='".$this->session->userdata('comp_id')."'";
		}
		$data['annoucment'] = $this->common_model->GetAllData('announcements',$where,'id');
		$data['department'] = $this->common_model->GetAllData('department',array('comp_id'=>$this->session->userdata('comp_id')),'id');
		$this->load->view('Admin/announcements',$data);
	}

	public function policies()
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$data['policies'] = $this->common_model->GetAllData('policies',array('comp_id'=>$this->session->userdata('comp_id')),'id');
		$this->load->view('Admin/policies',$data);
	}
	
	public function addDepartment(){

		$this->form_validation->set_rules('name','Name','required');
		
		if($this->form_validation->run()){
			$insert['name'] = $this->input->post('name');
			$insert['comp_id'] = $this->session->userdata('comp_id');
			
			$run = $this->common_model->InsertData('department',$insert);
			//echo $this->db->last_query();
			if($run) {
				
				$this->session->set_flashdata('depmsg','<div class="alert alert-success">Department added successfully</div>');
                    $json['status']='1';
							
			} else {
				
				$json['status']='0';
				$json['msg'] = '<div class="alert alert-danger">Something went wrong</div>';
			}
		 } else {

			$json['status']='0';
			$json['msg'] = '<div class="alert alert-danger">'.validation_errors().'</div>';
		}

		echo json_encode($json);
	}
	
    public function editDepartment(){

		$this->form_validation->set_rules('name','Name','required');
		
		if($this->form_validation->run()){
			$insert['name'] = $this->input->post('name');
			$id = $this->input->post('id');
			$run = $this->common_model->UpdateData('department',array('id'=>$id),$insert);
			//echo $this->db->last_query();
			if($run) {
				
				$this->session->set_flashdata('depmsg','<div class="alert alert-success">Department updated successfully</div>');
                    $json['status']='1';
							
			} else {
				
				$json['status']='0';
				$json['msg'] = '<div class="alert alert-danger">Something went wrong</div>';
			}
		 } else {

			$json['status']='0';
			$json['msg'] = '<div class="alert alert-danger">'.validation_errors().'</div>';
		}

		echo json_encode($json);
	}

	public function deleteDepartment($id){
			
			$run = $this->common_model->DeleteData('department',array('id'=>$id));
			//echo $this->db->last_query();
			if($run) {
				
				$this->session->set_flashdata('depmsg','<div class="alert alert-success">Department deleted successfully</div>');
                 redirect('admin/department');
							
			} else {
				$this->session->set_flashdata('depmsg','<div class="alert alert-success">Something went wrong</div>');
                 redirect('admin/department');
			}
		 
	}

	public function addDesignation(){

		$this->form_validation->set_rules('department_id','Department Name','required');
		$this->form_validation->set_rules('designation_name','Designation Name','required');
		$this->form_validation->set_rules('description','Description','required');

		
		if($this->form_validation->run()){
			$insert['department_id'] = $this->input->post('department_id');
			$insert['designation_name'] = $this->input->post('designation_name');
			$insert['description'] = $this->input->post('description');
			$insert['comp_id'] = $this->session->userdata('comp_id');

			
			$run = $this->common_model->InsertData('designation',$insert);
			//echo $this->db->last_query();
			if($run) {
				
				$this->session->set_flashdata('dmsg','<div class="alert alert-success">Designation added successfully</div>');
                    $json['status']='1';
							
			} else {
				
				$json['status']='0';
				$json['msg'] = '<div class="alert alert-danger">Something went wrong</div>';
			}
		 } else {

			$json['status']='0';
			$json['msg'] = '<div class="alert alert-danger">'.validation_errors().'</div>';
		}

		echo json_encode($json);
	}

	public function editDesignation(){

		$this->form_validation->set_rules('department_id','Department Name','required');
		$this->form_validation->set_rules('designation_name','Designation Name','required');
		$this->form_validation->set_rules('description','Description','required');

		
		if($this->form_validation->run()){
			$insert['department_id'] = $this->input->post('department_id');
			$insert['designation_name'] = $this->input->post('designation_name');
			$insert['description'] = $this->input->post('description');
            $id =  $this->input->post('id');
			
			$run = $this->common_model->UpdateData('designation',array("id"=>$id),$insert);
			//echo $this->db->last_query();
			if($run) {
				
				$this->session->set_flashdata('dmsg','<div class="alert alert-success">Designation updated successfully</div>');
                    $json['status']='1';
							
			} else {
				
				$json['status']='0';
				$json['msg'] = '<div class="alert alert-danger">Something went wrong</div>';
			}
		 } else {

			$json['status']='0';
			$json['msg'] = '<div class="alert alert-danger">'.validation_errors().'</div>';
		}

		echo json_encode($json);
	}

	public function deleteDesignation($id){
			
			$run = $this->common_model->DeleteData('designation',array('id'=>$id));
			//echo $this->db->last_query();
			if($run) {
				
				$this->session->set_flashdata('dmsg','<div class="alert alert-success">Designation deleted successfully</div>');
                 redirect('admin/designation');
							
			} else {
				$this->session->set_flashdata('dmsg','<div class="alert alert-success">Something went wrong</div>');
                 redirect('admin/designation');
			}
		 
	}

	public function addAnnouncement(){

		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('summary','summary','required');
		$this->form_validation->set_rules('start_date','start date','required');
		$this->form_validation->set_rules('end_date','end date','required');
		$this->form_validation->set_rules('message','Message','required');
		
		if($this->form_validation->run()){
			$insert['title'] = $this->input->post('title');
			$insert['department_id'] = $this->input->post('department_id');
			$insert['comp_id'] = $this->session->userdata('comp_id');
			$insert['summary'] = $this->input->post('summary');
			$insert['message'] = $this->input->post('message');
			$insert['start_date'] = $this->input->post('start_date');
			$insert['end_date'] = $this->input->post('end_date');
			$upload = $this->Common_function->upload_image('assets/images/announcment/','image');
			$insert['image'] = $upload['name'];
			$run = $this->common_model->InsertData('announcements',$insert);
			//echo $this->db->last_query();
			if($run) {
				
				$this->session->set_flashdata('depmsg','<div class="alert alert-success">Department added successfully</div>');
                    $json['status']='1';
							
			} else {
				
				$json['status']='0';
				$json['msg'] = '<div class="alert alert-danger">Something went wrong</div>';
			}
		 } else {

			$json['status']='0';
			$json['msg'] = '<div class="alert alert-danger">'.validation_errors().'</div>';
		}

		echo json_encode($json);
	}
	
    public function editAnnouncement(){

		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('summary','summary','required');
		$this->form_validation->set_rules('start_date','start date','required');
		$this->form_validation->set_rules('end_date','end date','required');
		$this->form_validation->set_rules('message','Message','required');
		
		if($this->form_validation->run()){
			$insert['title'] = $this->input->post('title');
			$insert['department_id'] = $this->input->post('department_id');
			$insert['summary'] = $this->input->post('summary');
			$insert['message'] = $this->input->post('message');
			$insert['start_date'] = $this->input->post('start_date');
			$insert['end_date'] = $this->input->post('end_date');
			
			if($_FILES['image']['name']){
				
			$upload = $this->Common_function->upload_image('assets/images/announcment/','image');
			$insert['image'] = $upload['name'];
		    }
			$id = $this->input->post('id');
			$run = $this->common_model->UpdateData('announcements',array('id'=>$id),$insert);
			//echo $this->db->last_query();
			if($run) {
				
				$this->session->set_flashdata('depmsg','<div class="alert alert-success">announcements updated successfully</div>');
                    $json['status']='1';
							
			} else {
				
				$json['status']='0';
				$json['msg'] = '<div class="alert alert-danger">Something went wrong</div>';
			}
		 } else {

			$json['status']='0';
			$json['msg'] = '<div class="alert alert-danger">'.validation_errors().'</div>';
		}

		echo json_encode($json);
	}

	public function deleteAnnoucment($id){
			
			$run = $this->common_model->DeleteData('announcements',array('id'=>$id));
			//echo $this->db->last_query();
			if($run) {
				
				$this->session->set_flashdata('msg','<div class="alert alert-success">Department deleted successfully</div>');
                 redirect('admin/announcements');
							
			} else {
				$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
                 redirect('admin/announcements');
			}
		 
	}

	public function addPolicies(){

		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('description','Description','required');
		
		if($this->form_validation->run()){
			$insert['title'] = $this->input->post('title');
			$insert['comp_id'] = $this->session->userdata('comp_id');
			$insert['description'] = $this->input->post('description');
			$upload = $this->Common_function->upload_image('assets/images/policies/','image');
			$insert['image'] = $upload['name'];
			$run = $this->common_model->InsertData('policies',$insert);
			//echo $this->db->last_query();
			if($run) {
				
				$this->session->set_flashdata('depmsg','<div class="alert alert-success">Policy added successfully</div>');
                    $json['status']='1';
							
			} else {
				
				$json['status']='0';
				$json['msg'] = '<div class="alert alert-danger">Something went wrong</div>';
			}
		 } else {

			$json['status']='0';
			$json['msg'] = '<div class="alert alert-danger">'.validation_errors().'</div>';
		}

		echo json_encode($json);
	}
	
    public function editPolicies(){

		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('description','Description','required');
		
		if($this->form_validation->run()){
			$insert['title'] = $this->input->post('title');
			$insert['description'] = $this->input->post('description');
			

			if($_FILES['image']['name']){
			
			$upload = $this->Common_function->upload_image('assets/images/policies/','image');
			$insert['image'] = $upload['name'];
		    }
			$id = $this->input->post('id');
			$run = $this->common_model->UpdateData('policies',array('id'=>$id),$insert);
			//echo $this->db->last_query();
			if($run) {
				
				$this->session->set_flashdata('depmsg','<div class="alert alert-success">Policy updated successfully</div>');
                    $json['status']='1';
							
			} else {
				
				$json['status']='0';
				$json['msg'] = '<div class="alert alert-danger">Something went wrong</div>';
			}
		 } else {

			$json['status']='0';
			$json['msg'] = '<div class="alert alert-danger">'.validation_errors().'</div>';
		}

		echo json_encode($json);
	}

	public function deletePolicies($id){
			
			$run = $this->common_model->DeleteData('policies',array('id'=>$id));
			//echo $this->db->last_query();
			if($run) {
				
				$this->session->set_flashdata('msg','<div class="alert alert-success">Policy deleted successfully</div>');
                 redirect('admin/policies');
							
			} else {
				$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
                 redirect('admin/policies');
			}
		 
	}
	
	public function job_vacancies(){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$data['job_vacancies'] = $this->common_model->GetAllData('job_vacancies',array('comp_id'=>$this->session->userdata('comp_id')),'id');
		$this->load->view('Admin/job_vacancies',$data);
	}
	
	public function addjob_vacancies()
	{
			//print_r($this->input->post());die;
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		
		$position = $this->input->post('position');
		$description = $this->input->post('description');
		$postedDate = $this->input->post('postedDate');
		$lastDateToapply = $this->input->post('lastDateToapply');
		$closeDate = $this->input->post('closeDate');
		
		$this->form_validation->set_rules('position','position','required');
		$this->form_validation->set_rules('description','description','required');
		$this->form_validation->set_rules('postedDate','postedDate','required');
		$this->form_validation->set_rules('lastDateToapply','lastDateToapply','required');
		$this->form_validation->set_rules('closeDate','closeDate','required');
		
		if($this->form_validation->run()){
			
					
					$insert['position'] = $position;
					$insert['description'] = $description;
					$insert['postedDate'] = $postedDate;
					$insert['lastDateToapply'] = $lastDateToapply;
					$insert['closeDate'] = $closeDate;
					$insert['comp_id'] = $this->session->userdata('comp_id');
					$insert['created_by'] = $user_id;
					$insert['created_date'] = date('Y-m-d h:i:s');
					
					$run = $this->common_model->InsertData('job_vacancies',$insert);
			//print_r($insert); die;
			if($run)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success">Job openings added successfully!</div>');
				redirect('admin/job_vacancies');
			} 
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrongss</div>');
				redirect('admin/job_vacancies');
			}
			
			
		 }else{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
				redirect('admin/job_vacancies');
		}
	}
	
	public function editjob_vacancies($id)
	{
			//print_r($this->input->post());die;
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		
		$position = $this->input->post('position');
		$description = $this->input->post('description');
		$postedDate = $this->input->post('postedDate');
		$lastDateToapply = $this->input->post('lastDateToapply');
		$closeDate = $this->input->post('closeDate');
		$status = $this->input->post('status');
		
		$this->form_validation->set_rules('position','position','required');
		$this->form_validation->set_rules('description','description','required');
		$this->form_validation->set_rules('postedDate','postedDate','required');
		$this->form_validation->set_rules('lastDateToapply','lastDateToapply','required');
		$this->form_validation->set_rules('closeDate','closeDate','required');
		
		if($this->form_validation->run()){
			
					
					$insert['position'] = $position;
					$insert['description'] = $description;
					$insert['postedDate'] = $postedDate;
					$insert['lastDateToapply'] = $lastDateToapply;
					$insert['closeDate'] = $closeDate;
					$insert['created_by'] = $user_id;
					$insert['status'] = $status;
					$insert['created_date'] = date('Y-m-d h:i:s');
					
					//$run = $this->common_model->InsertData('job_vacancies',$insert);
					$run = $this->common_model->UpdateData('job_vacancies',array('id'=>$id),$insert);
			//print_r($insert); die;
			if($run)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success">Job openings updated successfully!</div>');
				redirect('admin/job_vacancies');
			} 
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrongss</div>');
				redirect('admin/job_vacancies');
			}
			
			
		 }else{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
				redirect('admin/job_vacancies');
		}
	}
	
	public function deleteJobVacancy($id){
			
			$run = $this->common_model->DeleteData('job_vacancies',array('id'=>$id));
			//echo $this->db->last_query();
			if($run) {
				
				$this->session->set_flashdata('depmsg','<div class="alert alert-success">Job Opening deleted successfully</div>');
                 redirect('admin/job_vacancies');
							
			} else {
				$this->session->set_flashdata('depmsg','<div class="alert alert-success">Something went wrong</div>');
                 redirect('admin/job_vacancies');
			}
		 
	}
	
	public function emp_job_applications(){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$data['job_applications'] = $this->common_model->GetAllData('job_applications',array('comp_id'=>$this->session->userdata('comp_id')),'id');
		
		$this->load->view('Admin/job_applications',$data);
	}
	
	public function jobApplications_approval_status($id,$status)
	{
		$job_applications = $this->common_model->GetSingleData('job_applications',array('id'=>$id));
		
		$insert['status'] = $status;
		
		$run = $this->common_model->UpdateData('job_applications',array('id'=>$id),$insert);
		
		if($run)
			{
				if($status==1){
					$this->session->set_flashdata('msg','<div class="alert alert-success">Employee Job Application approved successfully!</div>');
				}else{
					$this->session->set_flashdata('msg','<div class="alert alert-success">Employee Job Application rejected!</div>');
				}
				
			} 
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
			}
		redirect('admin/job_applications');
	}
	
	public function holidays_list(){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$data['upcoming_holidays'] = $this->common_model->GetAllData('upcoming_holidays',array('comp_id'=>$this->session->userdata('comp_id')),'id');
		$this->load->view('Admin/holidays_list',$data);
	}
	
	public function add_upcoming_holiday()
	{
			//print_r($this->input->post());die;
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		
		$name = $this->input->post('name');
		$description = $this->input->post('description');
		$holiday_date = $this->input->post('holiday_date');
		
		$this->form_validation->set_rules('name','name','required');
		$this->form_validation->set_rules('holiday_date','holiday date','required');
		
		$chk_upcoming_holidays = $this->common_model->GetSingleData('upcoming_holidays',array('holiday_date'=>$holiday_date));
		
		if(!$chk_upcoming_holidays)
		{
			if($this->form_validation->run())
			{
				
						
						$insert['name'] = $name;
						$insert['description'] = $description;
						$insert['holiday_date'] = $holiday_date;
						$insert['comp_id'] = $this->session->userdata('comp_id');
						$insert['created_by'] = $user_id;
						$insert['created_date'] = date('Y-m-d h:i:s');
						
						$run = $this->common_model->InsertData('upcoming_holidays',$insert);
				//print_r($insert); die;
				if($run)
				{
					$this->session->set_flashdata('msg','<div class="alert alert-success">Upcoming holiday added successfully!</div>');
				} 
				else
				{
					$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrongs!</div>');
				}
				redirect('admin/holidays_list');
				
			}else{
					$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
					redirect('admin/holidays_list');
			}
		}
		else
		{
			$this->session->set_flashdata('msg','<div class="alert alert-danger">This upcoming holiday date already exist..</div>');
					redirect('admin/holidays_list');
		}
	}
	
	public function edit_upcoming_holiday($id)
	{
			//print_r($this->input->post());die;
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		
		$name = $this->input->post('name');
		$description = $this->input->post('description');
		$holiday_date = $this->input->post('holiday_date');
		$status = $this->input->post('status');
		
		$this->form_validation->set_rules('name','name','required');
		$this->form_validation->set_rules('holiday_date','holiday_date','required');
		
		$chk_upcoming_holidays = $this->common_model->GetSingleData('upcoming_holidays',array('holiday_date'=>$holiday_date, 'id!='=>$id,'comp_id'=>$this->session->userdata('comp_id')));
		
		//print_r($chk_upcoming_holidays); die;
		if(!$chk_upcoming_holidays)
		{
			if($this->form_validation->run()){
				
						
						$insert['name'] = $name;
						$insert['description'] = $description;
						$insert['holiday_date'] = $holiday_date;
						$insert['created_by'] = $user_id;
						$insert['status'] = $status;
						$insert['updated_date'] = date('Y-m-d h:i:s');
						
						$run = $this->common_model->UpdateData('upcoming_holidays',array('id'=>$id),$insert);
				//print_r($insert); die;
				if($run)
				{
					$this->session->set_flashdata('msg','<div class="alert alert-success">Upcoming holiday updated successfully!</div>');
				} 
				else
				{
					$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrongss</div>');
				}
				redirect('admin/holidays_list');
				
			}else{
					$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
					redirect('admin/holidays_list');
			}
		}else{
			$this->session->set_flashdata('msg','<div class="alert alert-danger">Upcoming holiday with this date is already exist.</div>');
					redirect('admin/holidays_list');
		}
	}
	
	public function delete_upcoming_holiday($id){
			
			$run = $this->common_model->DeleteData('upcoming_holidays',array('id'=>$id));
			
			if($run) {
				$this->session->set_flashdata('depmsg','<div class="alert alert-success">Upcoming holiday deleted successfully</div>');
			} else {
				$this->session->set_flashdata('depmsg','<div class="alert alert-success">Something went wrong</div>');
			}
		  redirect('admin/holidays_list');
	}
	
	public function awards(){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$data['awards'] = $this->common_model->GetAllData('awards',array('status'=>1,'comp_id'=>$this->session->userdata('comp_id')),'month_year','asc');
		$data['employee'] = $this->common_model->GetAllData('users',array('user_type'=>1,'comp_id'=>$this->session->userdata('comp_id'),'status'=>1));
		$this->load->view('Admin/awards',$data);
	}
	
	public function add_awards()
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		
		$award_name = $this->input->post('award_name');
		$gift = $this->input->post('gift');
		$cash_prize = $this->input->post('cash_prize');
		$emp_user_id = $this->input->post('emp_user_id');
		$month_year = $this->input->post('month_year');
		
		$this->form_validation->set_rules('award_name','award_name','required');
		$this->form_validation->set_rules('gift','gift','required');
		
		$chk_awards = $this->common_model->GetSingleData('awards',array('month_year'=>$month_year,'emp_user_id'=>$emp_user_id,'comp_id'=>$this->session->userdata('comp_id')));
		
		if(!$chk_awards)
		{
			if($this->form_validation->run())
			{
				
						$insert['comp_id'] = $this->session->userdata('comp_id');
						$insert['award_name'] = $award_name;
						$insert['gift'] = $gift;
						$insert['cash_prize'] = $cash_prize;
						$insert['emp_user_id'] = $emp_user_id;
						$insert['month_year'] = $month_year;
						$insert['created_by'] = $user_id;
						$insert['created_date'] = date('Y-m-d h:i:s');
						
						$run = $this->common_model->InsertData('awards',$insert);
				//print_r($insert); die;
				if($run)
				{
					$this->session->set_flashdata('msg','<div class="alert alert-success">Awards added successfully!</div>');
				} 
				else
				{
					$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrongs!</div>');
				}
				redirect('admin/awards');
				
			}else{
					$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
					redirect('admin/awards');
			}
		}
		else
		{
			$this->session->set_flashdata('msg','<div class="alert alert-danger">This upcoming holiday date already exist..</div>');
					redirect('admin/awards');
		}
	}
	
	public function edit_award($id)
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		
		$award_name = $this->input->post('award_name');
		$gift = $this->input->post('gift');
		$cash_prize = $this->input->post('cash_prize');
		$emp_user_id = $this->input->post('emp_user_id');
		$month_year = $this->input->post('month_year');
		
		$this->form_validation->set_rules('award_name','award_name','required');
		$this->form_validation->set_rules('gift','gift','required');
		
			if($this->form_validation->run())
			{
				
				$insert['award_name'] = $award_name;
				$insert['gift'] = $gift;
				$insert['cash_prize'] = $cash_prize;
				$insert['emp_user_id'] = $emp_user_id;
				$insert['month_year'] = $month_year;
				$insert['created_by'] = $user_id;
				$insert['updated_date'] = date('Y-m-d h:i:s');
				
				$run = $this->common_model->UpdateData('awards',array('id'=>$id),$insert);
				//print_r($insert); die;
				
				if($run)
				{
					$this->session->set_flashdata('msg','<div class="alert alert-success">Award updated successfully!</div>');
				} 
				else
				{
					$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrongss</div>');
				}
				redirect('admin/awards');
				
			}else{
					$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
					redirect('admin/awards');
			}
		
	}
	
	public function delete_award($id){
			
			$run = $this->common_model->DeleteData('awards',array('id'=>$id));
			
			if($run) {
				$this->session->set_flashdata('depmsg','<div class="alert alert-success">Awards deleted successfully</div>');
			} else {
				$this->session->set_flashdata('depmsg','<div class="alert alert-success">Something went wrong</div>');
			}
		  redirect('admin/awards');
	}
	
	public function importDepartment()
	{
    $csvFile = fopen($_FILES['csv_file']['tmp_name'], 'r');
    // Skip the first line
    fgetcsv($csvFile);
    // Parse data from CSV file line by line
    while(($row = fgetcsv($csvFile)) !== FALSE){
		$chk_emp  = $this->common_model->GetSingleData('department',array('name'=>$row[0],'comp_id'=>$this->session->userdata('comp_id')));
		
		if(!$chk_emp){
			
			if($row[0]!="" )
			{
				
				$insert['comp_id'] 		= $this->session->userdata('comp_id');
				$insert['name'] 		= $row[0];
			
			$run = $this->common_model->InsertData('department',$insert);
				//print_r($run); die;
				
			}
		}	
			$chk_dep  = $this->common_model->GetSingleData('department',array('name'=>$row[0],'comp_id'=>$this->session->userdata('comp_id')));
		
			$chk_desi  = $this->common_model->GetSingleData('designation',array('designation_name'=>$row[1],'comp_id'=>$this->session->userdata('comp_id'),'department_id'=>$chk_dep['id']));
			if(!$chk_desi){
				$insert1['comp_id'] 			= $this->session->userdata('comp_id');
				$insert1['designation_name'] 	= $row[1];
				$insert1['description'] 		= $row[2];
				$insert1['department_id'] 		= $chk_dep['id'];
			
			$run1 = $this->common_model->InsertData('designation',$insert1);
				}
		
	}
    // Close opened CSV file
    fclose($csvFile);
    
	$this->session->set_flashdata('depmsg','<div class="alert alert-success">Department and designation has been successfully upload By CSV</div>');	
	  redirect(base_url('admin/department'));
	}
	
	public function dep_download() 
	{ 
		$this->load->helper('download');
		$fileName = base_url('assets/dep_sample.csv');
	    $pth    =   file_get_contents($fileName);
		$nme    =   "department_sample.csv";
		force_download($nme, $pth); 
	}
}

?>