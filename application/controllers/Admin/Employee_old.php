<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Employee extends CI_Controller
{
	
	public function __construct() {
		parent::__construct();
		$this->check_login();
		$this->load->model('Common_function');
	}

	public function check_login(){
		if(!$this->session->userdata('user_id')){
			redirect();
		}
	}

	public function index(){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$filterVal = $this->input->post('filterVal');
		
		$where = "user_type = 1";
		$data['employee'] = $this->common_model->GetAllData('users',$where,'user_id');
		$data['male_emp'] = $this->common_model->GetAllData('users',"gender='Male' and user_type = 1",'user_id');
		$data['female_emp'] = $this->common_model->GetAllData('users',"gender='Female' and user_type = 1",'user_id');
		$data['active_emp'] = $this->common_model->GetAllData('users',"status='1' and user_type = 1",'user_id');
		$data['deactive_emp'] = $this->common_model->GetAllData('users',"status='0' and user_type = 1",'user_id');
		$this->load->view('Admin/employee',$data);
	}
	
	public function sendme(){
		$run = $this->common_model->SendMail('jainaaka@gmail.com','test','test me');
		echo $run;
		die;
		//$this->load->view('Admin/employee',$data);
	}
	
	public function expense_type(){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$data['expense_type'] = $this->common_model->GetAllData('expense_types',array('status!='=>2),'id');
		
		$this->load->view('Admin/expense_type',$data);
	}
	
	public function add_expense_type()
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
			
		$this->form_validation->set_rules('name','Expense type','required');
		
		if($this->form_validation->run()){
			
					
					$insert['name'] = $this->input->post('name');
					$insert['created_date'] = date('Y-m-d h:i:s');
					
					$run = $this->common_model->InsertData('expense_types',$insert);
			//print_r($insert); die;
			if($run)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success">Expense type added successfully!</div>');
				redirect('admin/expense_type');
			} 
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrongss</div>');
				redirect('admin/expense_type');
			}
			
			
		 }else{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
				redirect('admin/expense_type');
		}
	}
	
	public function deleteexpense_type($id)
	{
		$run = $this->common_model->UpdateData('expense_types',array('id'=>$id),array('status'=>2));
		//echo $this->db->last_query();
		if($run) {
			
			$this->session->set_flashdata('msg','<div class="alert alert-success">Expense type deleted successfully</div>');
			 redirect('admin/expense_type');
						
		} else {
			$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
			 redirect('admin/expense_type');
		}
	}
		 
	public function expense_type_status($id,$status)
	{
		
		$run = $this->common_model->UpdateData('expense_types',array('id'=>$id),array('status'=>$status));
		//echo $this->db->last_query();
		if($run) {
			
			$this->session->set_flashdata('msg','<div class="alert alert-success">Expense type status updates successfully</div>');
			 redirect('admin/expense_type');
						
		} else {
			$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
			 redirect('admin/expense_type');
		}
	}
		 
	public function account_type(){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$data['account_type'] = $this->common_model->GetAllData('account_type',array('status!='=>2),'id');
		
		$this->load->view('Admin/account_type',$data);
	}
	
	public function add_account_type()
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
			
		$this->form_validation->set_rules('account_type','account type','required');
		//print_r($this->input->post()); die;
		if($this->form_validation->run()){
			
					//echo $this->input->post('account_type'); die;
					$insert['account_type'] = $this->input->post('account_type');
					$insert['created_date'] = date('Y-m-d h:i:s');
					
					$run = $this->common_model->InsertData('account_type',$insert);
			//print_r($insert); die;
			if($run)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success">Account type added successfully!</div>');
				redirect('admin/account_type');
			} 
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrongss</div>');
				redirect('admin/account_type');
			}
			
			
		 }else{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
				redirect('admin/account_type');
		}
	}
	
	public function deleteAccountType($id)
	{
			//$run = $this->common_model->DeleteData('account_type',array('id'=>$id));
			$run = $this->common_model->UpdateData('account_type',array('id'=>$id),array('status'=>2));
			//echo $this->db->last_query();
			if($run) {
				
				$this->session->set_flashdata('msg','<div class="alert alert-success">Account type deleted successfully</div>');
                 redirect('admin/account_type');
							
			} else {
				$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
                 redirect('admin/account_type');
			}
		 }
		 
	public function account_type_status($id,$status)
	{
			
			$run = $this->common_model->UpdateData('account_type',array('id'=>$id),array('status'=>$status));
			//echo $this->db->last_query();
			if($run) {
				
				$this->session->set_flashdata('msg','<div class="alert alert-success">Account type status updates successfully</div>');
                 redirect('admin/account_type');
							
			} else {
				$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
                 redirect('admin/account_type');
			}
		 }
	
	public function emp_expense_claim(){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$data['emp_expense_claims'] = $this->common_model->GetAllData('emp_expense_claims',array('manager'=>$user_id),'id');
		
		$this->load->view('Admin/emp_expense_claim',$data);
	}

	public function addEmployee(){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$data['department'] = $this->common_model->GetAllData('department','','id');
		$data['designation'] = $this->common_model->GetAllData('designation','','id');
		$data['banks'] = $this->common_model->GetAllData('bank_details','','bank_id');
		$this->load->view('Admin/add-employee',$data);
	}

	public function editEmployee($id){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$data['department'] = $this->common_model->GetAllData('department','','id');
		$data['designation'] = $this->common_model->GetAllData('designation','','id');
		$data['banks'] = $this->common_model->GetAllData('bank_details','','bank_id');
		$data['employees'] = $this->common_model->GetSingleData('users',array('user_id'=>$id));
		$data['bankDetail'] = $this->common_model->GetSingleData('user_bank_detail',array('user_id'=>$id));
		$data['document'] = $this->common_model->GetSingleData('user_document',array('user_id'=>$id));
		$this->load->view('Admin/edit-employee',$data);
	}
	
	public function roles(){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$this->load->view('Admin/role_&_Privilages');
	}
	
	public function addEmployeeForm(){

		$this->form_validation->set_rules('first_name','First Name','required');
		$this->form_validation->set_rules('last_name','Last name','required');
		$this->form_validation->set_rules('father_name','Father name','required');
		//$this->form_validation->set_rules('email','email','required|is_unique[users.email]');
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('emp_id','Employee Id','required');
		
		if($this->form_validation->run()){
			$insert['first_name'] = $this->input->post('first_name');
			$insert['last_name'] = $this->input->post('last_name');
			$insert['father_name'] = $this->input->post('father_name');
			$insert['email'] = $this->input->post('email');
			$insert['phone'] = $this->input->post('phone');
			$insert['password'] = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
			$insert['emp_id'] = $this->input->post('emp_id');
			$insert['dob'] = $this->input->post('dob');
			$insert['gender'] = $this->input->post('gender');
			$insert['local_address'] = $this->input->post('local_address');
			$insert['permanent_address'] = $this->input->post('permanent_address');
			$insert['credit_leaves'] = $this->input->post('credit_leaves');
			$insert['date_of_joining'] = $this->input->post('date_of_joining');
			$insert['department_id'] = $this->input->post('department_id');
			$insert['designation_id'] = $this->input->post('designation_id');
			$insert['basic_salary'] = $this->input->post('basic_salary');
			$insert['hourly_rate'] = $this->input->post('hourly_rate');
			$insert['user_type'] = 1;
			$insert['created_at'] = date('Y-m-d h:i:s');
            $insert['updated_at'] = date('Y-m-d h:i:s');

			$upload = $this->Common_function->upload_image('assets/images/users/','image');
			$insert['profile_img'] = $upload['name'];
			//echo "<pre>"; print_r($insert); die;
			$run = $this->common_model->InsertData('users',$insert);
	
			//echo $this->db->last_query();
			if($run) {
			$insert1['account_holder_name'] = $this->input->post('account_holder_name');
			$insert1['account_number'] = $this->input->post('account_number');
			$insert1['bank_name'] = $this->input->post('bank_name');
			$insert1['bank_ifsc_code'] = $this->input->post('bin');
			$insert1['branch_location'] = $this->input->post('branch_location');
			$insert1['tax_payer_id'] = $this->input->post('tax_payer_id');
			$insert1['user_id'] = $run;
            $insert1['created_at'] = date('Y-m-d h:i:s');
            $insert1['updated_at'] = date('Y-m-d h:i:s');
			$run1 = $this->common_model->InsertData('user_bank_detail',$insert1);

            $upload1 = $this->Common_function->upload_image('assets/images/userDocument/','offer_letter');
			$insert2['offer_letter'] = $upload1['name'];
			$upload2 = $this->Common_function->upload_image('assets/images/userDocument/','joining_letter');
			$insert2['joining_letter'] = $upload2['name'];
			$upload3 = $this->Common_function->upload_image('assets/images/userDocument/','contract_letter');
			$insert2['contract_letter'] = $upload3['name'];
			$upload4 = $this->Common_function->upload_image('assets/images/userDocument/','resume');
			$insert2['resume'] = $upload4['name'];
			$upload5 = $this->Common_function->upload_image('assets/images/userDocument/','id_proof');
			$insert2['id_proof'] = $upload5['name'];
			$insert2['user_id'] = $run;
				
			$run2 = $this->common_model->InsertData('user_document',$insert2);
				$this->session->set_flashdata('msg','<div class="alert alert-success">Employee added successfully</div>');
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
	
	public function getdesignation()
	{
		$department_id = $_POST["department_id"];
		$designation = $this->common_model->GetAllData('designation',array('department_id'=>$department_id),'id');
		
		$desi = '<option value="" >Select Designation </option>';
		if(count($designation)>0)
		{
			foreach($designation as $c)
			{
				$desi .= '<option value="'.$c['id'].'">'.$c['designation_name'].'</option>';
			} 
		}
		echo $desi;			
	}
	
   public function editEmployeeForm(){

		$this->form_validation->set_rules('first_name','First Name','required');
		$this->form_validation->set_rules('last_name','Last name','required');
		$this->form_validation->set_rules('father_name','Father name','required');
		$this->form_validation->set_rules('emp_id','Employee Id','required');
		
		if($this->form_validation->run()){
			$insert['first_name'] = $this->input->post('first_name');
			$insert['last_name'] = $this->input->post('last_name');
			$insert['father_name'] = $this->input->post('father_name');
			$insert['email'] = $this->input->post('email');
			$insert['phone'] = $this->input->post('phone');
			$insert['password'] = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
			$insert['emp_id'] = $this->input->post('emp_id');
			$insert['dob'] = $this->input->post('dob');
			$insert['gender'] = $this->input->post('gender');
			$insert['local_address'] = $this->input->post('local_address');
			$insert['permanent_address'] = $this->input->post('permanent_address');
			$insert['credit_leaves'] = $this->input->post('credit_leaves');
			$insert['date_of_joining'] = $this->input->post('date_of_joining');
			$insert['department_id'] = $this->input->post('department_id');
			$insert['designation_id'] = $this->input->post('designation_id');
			$insert['basic_salary'] = $this->input->post('basic_salary');
			$insert['hourly_rate'] = $this->input->post('hourly_rate');
			$user_id = $this->input->post('id');
            $insert['updated_at'] = date('Y-m-d h:i:s');

            if($_FILES['image']['name']){
			$upload = $this->Common_function->upload_image('assets/images/users/','image');
			$insert['profile_img'] = $upload['name'];
		    }
			$run = $this->common_model->UpdateData('users',array('user_id'=>$user_id),$insert);
			//echo $this->db->last_query();
			if($run) {
			$insert1['account_holder_name'] = $this->input->post('account_holder_name');
			$insert1['account_number'] = $this->input->post('account_number');
			$insert1['bank_name'] = $this->input->post('bank_name');
			$insert1['bank_ifsc_code'] = $this->input->post('bin');
			$insert1['branch_location'] = $this->input->post('branch_location');
			$insert1['tax_payer_id'] = $this->input->post('tax_payer_id');
            $insert1['created_at'] = date('Y-m-d h:i:s');
            $insert1['updated_at'] = date('Y-m-d h:i:s');
			$run1 = $this->common_model->UpdateData('user_bank_detail',array('user_id'=>$user_id),$insert1);
            
            $upload1 = $this->Common_function->upload_image('assets/images/userDocument/','offer_letter');
			$insert2['offer_letter'] = $upload1['name'];
			$upload2 = $this->Common_function->upload_image('assets/images/userDocument/','joining_letter');
			$insert2['joining_letter'] = $upload1['name'];
			$upload3 = $this->Common_function->upload_image('assets/images/userDocument/','contract_letter');
			$insert2['contract_letter'] = $upload1['name'];
			$upload4 = $this->Common_function->upload_image('assets/images/userDocument/','resume');
			$insert2['resume'] = $upload1['name'];
			$upload5 = $this->Common_function->upload_image('assets/images/userDocument/','id_proof');
			$insert2['id_proof'] = $upload1['name'];
			$insert2['user_id'] = $run;

			$run2 = $this->common_model->UpdateData('user_document',array('user_id'=>$user_id),$insert2);
				$this->session->set_flashdata('msg','<div class="alert alert-success">Employee updated successfully</div>');
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

	public function changeStatusEmployee($id,$status){
			
			$run = $this->common_model->UpdateData('users',array('user_id'=>$id),array('status'=>$status));
			//echo $this->db->last_query();
			if($run) {
				
				$this->session->set_flashdata('msg','<div class="alert alert-success">Employee Status Changed successfully</div>');
                 redirect('admin/employee');
							
			} else {
				$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
                 redirect('admin/employee');
			}
		 }
		 
		 public function deleteEmployee($id){
			
			$run = $this->common_model->DeleteData('users',array('user_id'=>$id));
			//echo $this->db->last_query();
			if($run) {
				
				$this->session->set_flashdata('msg','<div class="alert alert-success">Employee deleted successfully</div>');
                 redirect('admin/employee');
							
			} else {
				$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
                 redirect('admin/employee');
			}
		 }
	
	public function profile(){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$data['employees'] = $this->common_model->GetSingleData('users',array('user_id'=>$user_id,'user_type'=>2),'user_id');
		//echo ""; print_r($data['employees']); die;
		$this->load->view('Admin/profile',$data);
	}
	
	public function addProfileForm(){
		$user_id = $this->session->userdata('user_id');
		
		$this->form_validation->set_rules('first_name','First Name','required');
		$this->form_validation->set_rules('last_name','Last name','required');
		$this->form_validation->set_rules('email','email','required');
		
		if($this->form_validation->run()){
			
			$company_name = $this->input->post('company_name');
			$insert['first_name'] = $this->input->post('first_name');
			$insert['last_name'] = $this->input->post('last_name');
			
			$insert['email'] = $this->input->post('email');
			$insert['phone'] = $this->input->post('phone');
			$insert['dob'] = $this->input->post('dob');
			$insert['gender'] = $this->input->post('gender');
			$insert['local_address'] = $this->input->post('local_address');
			$insert['permanent_address'] = $this->input->post('permanent_address');
            $insert['updated_at'] = date('Y-m-d h:i:s');
			if($_FILES['image']['name']){
			$upload = $this->Common_function->upload_image('assets/images/users/','image');
			$insert['profile_img'] = $upload['name'];
		    }
			
			$run = $this->common_model->UpdateData('users',array('user_id'=>$user_id),$insert);
			if($company_name){
				$run = $this->common_model->UpdateData('companies',array('admin_id'=>$user_id),array('name'=>$company_name));
			}	
			//echo $this->db->last_query();
			if($run) {
			
				$this->session->set_flashdata('depmsg','<div class="alert alert-success">Profile added successfully</div>');
                    $json['status']='1';
					$json['msg'] = '<div class="alert alert-success">Profile added successfully</div>';
							
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
	
	public function expense_claim_status($id,$status){
			
		$run = $this->common_model->UpdateData('emp_expense_claims',array('id'=>$id),array('status'=>$status));
		//echo $this->db->last_query();
		if($run) {
			if($status==1){
			$this->session->set_flashdata('msg','<div class="alert alert-success">Approved successfully</div>');
			}else{
				$this->session->set_flashdata('msg','<div class="alert alert-success">Rejected successfully</div>');
			}
			 redirect('admin/emp_expense_claim');
						
		} else {
			$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
			 redirect('admin/emp_expense_claim');
		}
	}
	
	public function addRemark(){

		$this->form_validation->set_rules('remark','Remark','required');
		//echo "<pre>"; print_r($this->input->post()); die;
		if($this->form_validation->run()){
			$insert['manager_remarks'] = $this->input->post('remark');
			$exp_id = $this->input->post('exp_id');
			$id = $this->input->post('id');
			$run = $this->common_model->UpdateData('emp_expense_claims',array('id'=>$id),$insert);
			
			//echo $this->db->last_query();die;
			if($run) {
				
				$this->session->set_flashdata('depmsg','<div class="alert alert-success">Remark added successfully</div>');
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
	
	public function filterEmployee()
	{
		$filterVal = $this->input->post('filterVal');
		 if($filterVal=='male'){
			$where = "gender='Male' and user_type = 1";
		 }elseif($filterVal=='female'){
			 $where = "gender='Female' and user_type = 1";
		 }elseif($filterVal=='active'){
			 $where = "status='1' and user_type = 1";
		 }
		 elseif($filterVal=='deactive'){
			 $where = "status='0' and user_type = 1";
		 }else{
			 $where = "user_type = 1";
		 }
		 $data['employee'] = $this->common_model->GetAllData('users',$where,'user_id');
		 return $this->load->view('Admin/filtered_employee',$data);
		
	}
	
	
}

?>