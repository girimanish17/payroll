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
		$filterVal = $this->input->post('filterVal');
		$emp_id = $this->session->userdata('emp_id');
		$comp_id = $this->session->userdata('comp_id');
		
		$where = "user_type = 1 and comp_id='".$comp_id."'  ";
		$data['employee'] = $this->common_model->GetAllData('users',$where,'user_id');
		$data['male_emp'] = $this->common_model->GetAllData('users',"gender='Male' and user_type = 1 and comp_id='".$comp_id."'",'user_id');
		$data['female_emp'] = $this->common_model->GetAllData('users',"gender='Female' and user_type = 1 and comp_id='".$comp_id."'",'user_id');
		$data['active_emp'] = $this->common_model->GetAllData('users',"status='1' and user_type = 1 and comp_id='".$comp_id."'",'user_id');
		$data['deactive_emp'] = $this->common_model->GetAllData('users',"status='0' and user_type = 1 and comp_id='".$comp_id."'",'user_id');
		$this->load->view('Admin/employee',$data);
	}
	
	public function sendme(){
		$run = $this->common_model->SendMail('jainaaka@gmail.com','test','test me');
		echo $run;
		die;
		//$this->load->view('Admin/employee',$data);
	}
	
	public function download() 
	{ 
		$this->load->helper('download');
		$fileName = base_url('assets/sample.csv');
	    $pth    =   file_get_contents($fileName);
		$nme    =   "sample.csv";
		force_download($nme, $pth); 
	}
	
public function expense_type(){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$data['expense_type'] = $this->common_model->GetAllData('expense_types',array('status!='=>2,'comp_id' => $this->session->userdata('emp_id')),'id');
		
		$this->load->view('Admin/expense_type',$data);
	}
	
	public function add_expense_type()
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$this->form_validation->set_rules('name','Expense type','required');
		
		if($this->form_validation->run()){
			
					
					$insert['name'] = $this->input->post('name');
					$insert['comp_id'] = $this->session->userdata('comp_id');
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
		$data['account_type'] = $this->common_model->GetAllData('account_type',array('status!='=>2,'comp_id' => $this->session->userdata('emp_id')),'id');
		
		$this->load->view('Admin/account_type',$data);
	}
	
	public function add_account_type()
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$comp_id = $this->session->userdata('comp_id');
			
		$this->form_validation->set_rules('account_type','account type','required');
		//print_r($this->input->post()); die;
		if($this->form_validation->run()){
			
					//echo $this->input->post('account_type'); die;
					$insert['account_type'] = $this->input->post('account_type');
					$insert['comp_id'] = $comp_id;
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
		$comp_id = $this->session->userdata('comp_id');
		$data['emp_expense_claims'] = $this->common_model->GetAllData('emp_expense_claims',array('manager'=>$user_id,'comp_id'=>$comp_id),'id');
		
		$this->load->view('Admin/emp_expense_claim',$data);
	}

	public function addEmployee()
	{
		// echo "hellods welcome"; die;
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');

		for ($i=0;$i<100;$i++)
		{
			$emp_random_number = "EMP".rand(1,10000);
			$check = $this->common_model->getSingle('users', array('emp_id' => $emp_random_number));

			if(!$check) 
			{
				$i=200;
			}
		}

		$data['emp_random_number'] = $emp_random_number;
		// form submission 
		
		$this->form_validation->set_rules('first_name','First Name','required');
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('password','Password','required');
		
		
		if($this->form_validation->run())
		{ 
			
			$user = $this->common_model->GetSingleData('users',array('email'=>$this->input->post('email')));
			
			$email = $user['email'];
			
			if($email=='')
			{
			
				$insert['emp_id'] = $this->input->post('employee_id');;
				$insert['first_name'] = $this->input->post('first_name');
				$insert['last_name'] = $this->input->post('last_name');
				$insert['father_name'] = $this->input->post('father_name');
				$insert['email'] = $this->input->post('email');
				$insert['phone'] = $this->input->post('phone');
				$insert['password'] = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
				$insert['pw'] = $this->input->post('password');
				$insert['comp_id'] = $this->session->userdata('comp_id');
				$insert['dob'] = $this->input->post('dob');
				$insert['gender'] = $this->input->post('gender');
				$insert['local_address'] = $this->input->post('local_address');
				$insert['permanent_address'] = $this->input->post('permanent_address');
				$insert['credit_leaves'] = $this->input->post('credit_leaves');
				$insert['date_of_joining'] = $this->input->post('date_of_joining');
				$insert['reporting'] = $this->input->post('reporting');
				$insert['department_id'] = $this->input->post('department_id');
				$insert['designation_id'] = $this->input->post('designation_id');
				$insert['PAN_no'] = $this->input->post('PAN_no');
				$insert['AADHAR_no'] = $this->input->post('AADHAR_no');
				$insert['ESIC'] = $this->input->post('ESIC');
				$insert['UAN_no'] = $this->input->post('UAN_no');
				$insert['leave_opening_el'] = $this->input->post('opening_el');
				$insert['leave_el'] = $this->input->post('el');
				$insert['leave_cl'] = $this->input->post('cl');
				$insert['leave_optional'] = $this->input->post('optional');
				$insert['leave_compOff'] = $this->input->post('compOff');
				
				$insert['gross'] = $this->input->post('gross');
				$insert['variable_pay'] = $this->input->post('variable_pay');
				$insert['retention_bonus'] = $this->input->post('retention_bonus');
				$insert['incentive'] = $this->input->post('incentive');
				$insert['net_ctc'] = $this->input->post('net_ctc');
				
				$insert['blood_group'] = $this->input->post('blood_group');
				$insert['marital_status'] = $this->input->post('marital_status');
				$insert['marrige_date'] = $this->input->post('marrige_date');
				$insert['spouse_name'] = $this->input->post('spouse_name');
				$insert['nationality'] = $this->input->post('nationality');
				$insert['religion'] = $this->input->post('religion');
				$insert['place_of_birth'] = $this->input->post('place_of_birth');
				$insert['country_of_origin'] = $this->input->post('country_of_origin');
				$insert['international_employee'] = $this->input->post('international_employee');
				$insert['physically_challenged'] = $this->input->post('physically_challenged');
				$insert['is_director'] = $this->input->post('is_director');
				$insert['esi_joindate'] = $this->input->post('esi_joindate');
				$insert['covered_members'] = $this->input->post('covered_members');
				$insert['PF'] = $this->input->post('PF');
				$insert['pf_joindate'] = $this->input->post('pf_joindate');
				$insert['joining_status'] = $this->input->post('joining_status');
				$insert['probation_period'] = $this->input->post('probation_period');
				$insert['notice_period'] = $this->input->post('notice_period');
				$insert['current_comp_exp'] = $this->input->post('current_comp_exp');
				$insert['previous_exp'] = $this->input->post('previous_exp');
				$insert['total_exp'] = $this->input->post('total_exp');
				$insert['confirmation_date'] = $this->input->post('confirmation_date');

				$insert['user_type'] = 1;
				$insert['created_at'] = date('Y-m-d h:i:s');
				$insert['updated_at'] = date('Y-m-d h:i:s');

				$upload = $this->Common_function->upload_image('assets/images/users/','image');
				$insert['profile_img'] = $upload['name'];
				// echo "<pre>"; print_r($insert); die;
				$run = $this->common_model->InsertData('users',$insert);
		
				//echo $this->db->last_query();
				if($run) {
				$insert1['account_holder_name'] = $this->input->post('account_holder_name');
				$insert1['account_number'] = $this->input->post('account_number');
				$insert1['bank_name'] = $this->input->post('bank_name');
				$insert1['bank_ifsc_code'] = $this->input->post('bin');
				$insert1['branch_location'] = $this->input->post('branch_location');
				$insert1['tax_payer_id'] = $this->input->post('tax_payer_id');
				$insert1['micr'] = $this->input->post('micr');
				$insert1['user_id'] = $run;
				$insert1['created_at'] = date('Y-m-d h:i:s');
				$insert1['updated_at'] = date('Y-m-d h:i:s');
				$run1 = $this->common_model->InsertData('user_bank_detail',$insert1);

				//$upload1 = $this->Common_function->upload_image('assets/images/userDocument/','offer_letter');
				//$insert2['offer_letter'] = $upload1['name'];
				//$upload2 = $this->Common_function->upload_image('assets/images/userDocument/','joining_letter');
				//$insert2['joining_letter'] = $upload2['name'];
				//$upload3 = $this->Common_function->upload_image('assets/images/userDocument/','contract_letter');
				//$insert2['contract_letter'] = $upload3['name'];
				$upload4 = $this->Common_function->upload_image('assets/images/userDocument/','resume');
				$insert2['resume'] = $upload4['name'];
				$upload5 = $this->Common_function->upload_image('assets/images/userDocument/','id_proof');
				$insert2['id_proof'] = $upload5['name'];
				$insert2['user_id'] = $run;
					
				$run2 = $this->common_model->InsertData('user_document',$insert2);
					$this->session->set_flashdata('msg','<div class="alert alert-success">Employee added successfully</div>');
					 //redirect('admin/employee');
						$json['status']='1';
				
								
				} else {
					$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
					// $json['status']='0';
					// $json['msg'] = '<div class="alert alert-danger">Something went wrong</div>';
					//redirect('admin/employee');
				}
			}else {
				$this->session->set_flashdata('msg','<div class="alert alert-success">Email already exist!</div>');
			// $json['status']='0';
			// $json['msg'] = '<div class="alert alert-danger">Email already exist!</div>';
			
			}
		 } else {

			// $json['status']='0';
			// $json['msg'] = '<div class="alert alert-danger">'.validation_errors().'</div>';
			$this->session->set_flashdata('msg','<div class="alert alert-success">'.validation_errors().'!</div>');
			//$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
			//redirect('admin/employee');
		}
		
		// form submission 
		$data['users'] = $this->common_model->GetAllData('users',array('comp_id'=>$this->session->userdata('comp_id'),'user_type'=>'2'));
		
		$data['department'] = $this->common_model->GetAllData('department',array('comp_id'=>$this->session->userdata('comp_id')),'id');
		//$data['designation'] = $this->common_model->GetAllData('designation',array('comp_id'=>$this->session->userdata('comp_id')),'id');
		$data['admin'] = $this->common_model->GetAllData('users',array('user_type'=>2,'user_id!='=>$user_id,'comp_id'=>$this->session->userdata('comp_id')),'user_id');
		//echo "<pre>";print_r($data['users']); die;
		$data['banks'] = $this->common_model->GetAllData('bank_details','','bank_id');
		$this->load->view('Admin/add-employee',$data);
	}

	public function editEmployee($id){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$data['employees'] =$employees =  $this->common_model->GetSingleData('users',array('user_id'=>$id));
		$data['department'] = $this->common_model->GetAllData('department',array('comp_id'=>$this->session->userdata('comp_id')),'id');
		$data['designation'] = $this->common_model->GetAllData('designation',array('department_id'=>$employees['department_id']),'id');
		$data['banks'] = $this->common_model->GetAllData('bank_details','','bank_id');
		
		$data['bankDetail'] = $this->common_model->GetSingleData('user_bank_detail',array('user_id'=>$id));
		$data['document'] = $this->common_model->GetSingleData('user_document',array('user_id'=>$id));
		$data['admin'] = $this->common_model->GetAllData('users',array('user_type'=>2,'user_id!='=>$user_id),'user_id');
		$this->load->view('Admin/edit-employee',$data);
	}
	
	public function leaveMangEmployee($id){
		
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$filterVal = $this->input->post('filterVal');
		
		$where = "user_type = 1";
		$data['user_leaves'] =$this->common_model->GetSingleData('users',array('user_id '=>$id));
		
		$this->load->view('Admin/leaveMangEmployee',$data);
		/*$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$data['department'] = $this->common_model->GetAllData('department','','id');
		$data['designation'] = $this->common_model->GetAllData('designation','','id');
		$data['banks'] = $this->common_model->GetAllData('bank_details','','bank_id');
		$data['employees'] = $this->common_model->GetSingleData('users',array('user_id'=>$id));
		$data['bankDetail'] = $this->common_model->GetSingleData('user_bank_detail',array('user_id'=>$id));
		$data['document'] = $this->common_model->GetSingleData('user_document',array('user_id'=>$id));
		$this->load->view('Admin/edit-employee',$data);*/
	}
	
	public function roles(){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$this->load->view('Admin/role_&_Privilages');
	}

	// public function addEmployeeForm(){
	// 	echo "hellosfdf"; die;
	// 	$user_id = $this->session->userdata('user_id');
		
	// 	$this->form_validation->set_rules('first_name','First Name','required');
	// 	$this->form_validation->set_rules('email','email','required');
	// 	$this->form_validation->set_rules('password','Password','required');
		
		
	// 	if($this->form_validation->run())
	// 	{ 
			
	// 		$user = $this->common_model->GetSingleData('users',array('email'=>$this->input->post('email')));
			
	// 		$email = $user['email'];
			
	// 		if($email=='')
	// 		{
			
	// 			$insert['emp_id'] = $this->input->post('employee_id');;
	// 			$insert['first_name'] = $this->input->post('first_name');
	// 			$insert['last_name'] = $this->input->post('last_name');
	// 			$insert['father_name'] = $this->input->post('father_name');
	// 			$insert['email'] = $this->input->post('email');
	// 			$insert['phone'] = $this->input->post('phone');
	// 			$insert['password'] = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
	// 			$insert['pw'] = $this->input->post('password');
	// 			$insert['comp_id'] = $this->session->userdata('comp_id');
	// 			$insert['dob'] = $this->input->post('dob');
	// 			$insert['gender'] = $this->input->post('gender');
	// 			$insert['local_address'] = $this->input->post('local_address');
	// 			$insert['permanent_address'] = $this->input->post('permanent_address');
	// 			$insert['credit_leaves'] = $this->input->post('credit_leaves');
	// 			$insert['date_of_joining'] = $this->input->post('date_of_joining');
	// 			$insert['reporting'] = $this->input->post('reporting');
	// 			$insert['department_id'] = $this->input->post('department_id');
	// 			$insert['designation_id'] = $this->input->post('designation_id');
	// 			$insert['PAN_no'] = $this->input->post('PAN_no');
	// 			$insert['AADHAR_no'] = $this->input->post('AADHAR_no');
	// 			$insert['ESIC'] = $this->input->post('ESIC');
	// 			$insert['UAN_no'] = $this->input->post('UAN_no');
	// 			$insert['leave_opening_el'] = $this->input->post('opening_el');
	// 			$insert['leave_el'] = $this->input->post('el');
	// 			$insert['leave_cl'] = $this->input->post('cl');
	// 			$insert['leave_optional'] = $this->input->post('optional');
	// 			$insert['leave_compOff'] = $this->input->post('compOff');
				
	// 			$insert['gross'] = $this->input->post('gross');
	// 			$insert['variable_pay'] = $this->input->post('variable_pay');
	// 			$insert['retention_bonus'] = $this->input->post('retention_bonus');
	// 			$insert['incentive'] = $this->input->post('incentive');
	// 			$insert['net_ctc'] = $this->input->post('net_ctc');
				
	// 			$insert['blood_group'] = $this->input->post('blood_group');
	// 			$insert['marital_status'] = $this->input->post('marital_status');
	// 			$insert['marrige_date'] = $this->input->post('marrige_date');
	// 			$insert['spouse_name'] = $this->input->post('spouse_name');
	// 			$insert['nationality'] = $this->input->post('nationality');
	// 			$insert['religion'] = $this->input->post('religion');
	// 			$insert['place_of_birth'] = $this->input->post('place_of_birth');
	// 			$insert['country_of_origin'] = $this->input->post('country_of_origin');
	// 			$insert['international_employee'] = $this->input->post('international_employee');
	// 			$insert['physically_challenged'] = $this->input->post('physically_challenged');
	// 			$insert['is_director'] = $this->input->post('is_director');
	// 			$insert['esi_joindate'] = $this->input->post('esi_joindate');
	// 			$insert['covered_members'] = $this->input->post('covered_members');
	// 			$insert['PF'] = $this->input->post('PF');
	// 			$insert['pf_joindate'] = $this->input->post('pf_joindate');
	// 			$insert['joining_status'] = $this->input->post('joining_status');
	// 			$insert['probation_period'] = $this->input->post('probation_period');
	// 			$insert['notice_period'] = $this->input->post('notice_period');
	// 			$insert['current_comp_exp'] = $this->input->post('current_comp_exp');
	// 			$insert['previous_exp'] = $this->input->post('previous_exp');
	// 			$insert['total_exp'] = $this->input->post('total_exp');
	// 			$insert['confirmation_date'] = $this->input->post('confirmation_date');

	// 			$insert['user_type'] = 1;
	// 			$insert['created_at'] = date('Y-m-d h:i:s');
	// 			$insert['updated_at'] = date('Y-m-d h:i:s');

	// 			$upload = $this->Common_function->upload_image('assets/images/users/','image');
	// 			$insert['profile_img'] = $upload['name'];
	// 			echo "<pre>"; print_r($insert); die;
	// 			$run = $this->common_model->InsertData('users',$insert);
		
	// 			//echo $this->db->last_query();
	// 			if($run) {
	// 			$insert1['account_holder_name'] = $this->input->post('account_holder_name');
	// 			$insert1['account_number'] = $this->input->post('account_number');
	// 			$insert1['bank_name'] = $this->input->post('bank_name');
	// 			$insert1['bank_ifsc_code'] = $this->input->post('bin');
	// 			$insert1['branch_location'] = $this->input->post('branch_location');
	// 			$insert1['tax_payer_id'] = $this->input->post('tax_payer_id');
	// 			$insert1['micr'] = $this->input->post('micr');
	// 			$insert1['user_id'] = $run;
	// 			$insert1['created_at'] = date('Y-m-d h:i:s');
	// 			$insert1['updated_at'] = date('Y-m-d h:i:s');
	// 			$run1 = $this->common_model->InsertData('user_bank_detail',$insert1);

	// 			//$upload1 = $this->Common_function->upload_image('assets/images/userDocument/','offer_letter');
	// 			//$insert2['offer_letter'] = $upload1['name'];
	// 			//$upload2 = $this->Common_function->upload_image('assets/images/userDocument/','joining_letter');
	// 			//$insert2['joining_letter'] = $upload2['name'];
	// 			//$upload3 = $this->Common_function->upload_image('assets/images/userDocument/','contract_letter');
	// 			//$insert2['contract_letter'] = $upload3['name'];
	// 			$upload4 = $this->Common_function->upload_image('assets/images/userDocument/','resume');
	// 			$insert2['resume'] = $upload4['name'];
	// 			$upload5 = $this->Common_function->upload_image('assets/images/userDocument/','id_proof');
	// 			$insert2['id_proof'] = $upload5['name'];
	// 			$insert2['user_id'] = $run;
					
	// 			$run2 = $this->common_model->InsertData('user_document',$insert2);
	// 				$this->session->set_flashdata('msg','<div class="alert alert-success">Employee added successfully</div>');
	// 				 //redirect('admin/employee');
	// 					$json['status']='1';
				
								
	// 			} else {
					
	// 				$json['status']='0';
	// 				$json['msg'] = '<div class="alert alert-danger">Something went wrong</div>';
	// 				//redirect('admin/employee');
	// 			}
	// 		}else {

	// 		$json['status']='0';
	// 		$json['msg'] = '<div class="alert alert-danger">Email already exist!</div>';
			
	// 		}
	// 	 } else {

	// 		$json['status']='0';
	// 		$json['msg'] = '<div class="alert alert-danger">'.validation_errors().'</div>';
	// 		//$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
	// 		//redirect('admin/employee');
	// 	}

	// 	echo json_encode($json);
	// }
	
	public function getdesignation()
	{
		$department_id = $_POST["department_id"];
		$designation = $this->common_model->GetAllData('designation',array('department_id'=>$department_id,'comp_id'=>$this->session->userdata('comp_id')),'id');
		
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
		//$this->form_validation->set_rules('emp_id','Employee Id','required');
		
		if($this->form_validation->run()){
			$insert['first_name'] = $this->input->post('first_name');
			$insert['last_name'] = $this->input->post('last_name');
			$insert['father_name'] = $this->input->post('father_name');
			$insert['email'] = $this->input->post('email');
			$insert['phone'] = $this->input->post('phone');
			$insert['password'] = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
			$insert['pw'] = $this->input->post('password');
			//$insert['emp_id'] = $this->input->post('emp_id');
			//$insert['admin_id'] = $this->input->post('admin_id');
			$insert['dob'] = $this->input->post('dob');
			$insert['gender'] = $this->input->post('gender');
			$insert['local_address'] = $this->input->post('local_address');
			$insert['permanent_address'] = $this->input->post('permanent_address');
			$insert['credit_leaves'] = $this->input->post('credit_leaves');
			$insert['date_of_joining'] = $this->input->post('date_of_joining');
			$insert['reporting'] = $this->input->post('reporting');
			$insert['department_id'] = $this->input->post('department_id');
			$insert['designation_id'] = $this->input->post('designation_id');

			$insert['leave_opening_el'] = $this->input->post('opening_el');
			$insert['leave_el'] = $this->input->post('el');
			$insert['leave_cl'] = $this->input->post('cl');
			$insert['leave_optional'] = $this->input->post('optional');
			$insert['leave_compOff'] = $this->input->post('compOff');
			
			$insert['gross'] = $this->input->post('gross');
			$insert['variable_pay'] = $this->input->post('variable_pay');
			$insert['retention_bonus'] = $this->input->post('retention_bonus');
			$insert['incentive'] = $this->input->post('incentive');
			$insert['net_ctc'] = $this->input->post('net_ctc');
			
			$insert['blood_group'] = $this->input->post('blood_group');
			$insert['marital_status'] = $this->input->post('marital_status');
			$insert['marrige_date'] = $this->input->post('marrige_date');
			$insert['spouse_name'] = $this->input->post('spouse_name');
			$insert['nationality'] = $this->input->post('nationality');
			$insert['religion'] = $this->input->post('religion');
			$insert['place_of_birth'] = $this->input->post('place_of_birth');
			$insert['country_of_origin'] = $this->input->post('country_of_origin');
			$insert['international_employee'] = $this->input->post('international_employee');
			$insert['physically_challenged'] = $this->input->post('physically_challenged');
			$insert['is_director'] = $this->input->post('is_director');
			$insert['esi_joindate'] = $this->input->post('esi_joindate');
			$insert['covered_members'] = $this->input->post('covered_members');
			$insert['PF'] = $this->input->post('PF');
			$insert['pf_joindate'] = $this->input->post('pf_joindate');
			$insert['joining_status'] = $this->input->post('joining_status');
			$insert['probation_period'] = $this->input->post('probation_period');
			$insert['notice_period'] = $this->input->post('notice_period');
			$insert['current_comp_exp'] = $this->input->post('current_comp_exp');
			$insert['previous_exp'] = $this->input->post('previous_exp');
			$insert['total_exp'] = $this->input->post('total_exp');
			$insert['confirmation_date'] = $this->input->post('confirmation_date');

			$insert['PAN_no'] = $this->input->post('PAN_no');
			$insert['AADHAR_no'] = $this->input->post('AADHAR_no');
			$insert['ESIC'] = $this->input->post('ESIC');
			$insert['UAN_no'] = $this->input->post('UAN_no');
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
			$insert1['micr'] = $this->input->post('micr');
			$insert1['tax_payer_id'] = $this->input->post('tax_payer_id');
            $insert1['created_at'] = date('Y-m-d h:i:s');
            $insert1['updated_at'] = date('Y-m-d h:i:s');
			$run1 = $this->common_model->UpdateData('user_bank_detail',array('user_id'=>$user_id),$insert1);
            
            /*$upload1 = $this->Common_function->upload_image('assets/images/userDocument/','offer_letter');
			$insert2['offer_letter'] = $upload1['name'];
			$upload2 = $this->Common_function->upload_image('assets/images/userDocument/','joining_letter');
			$insert2['joining_letter'] = $upload1['name'];
			$upload3 = $this->Common_function->upload_image('assets/images/userDocument/','contract_letter');
			$insert2['contract_letter'] = $upload1['name'];*/
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
	
	public function profile()
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');

		$data['tax'] = $this->common_model->getAllwhere('profession_tax_slabs', array('admin_id' => $user_id));
			
		$data['employees'] = $this->common_model->GetSingleData('users',array('user_id'=>$user_id,'user_type'=>2),'user_id');

		$data['setting'] = $result = $this->common_model->getSingle('company_settings', array('admin_id' => $user_id));

		$data['states'] = $this->common_model->GetAllData('master_state',array('state_country_id'=>'101'));
		// echo "<pre>"; print_r($data['states']); die;
		if($_POST['company_setting'] == 'COMPUTER_SETTING') 
		{
			$file_path =  'assets/images/company_settings/';
			$config['upload_path']          =$file_path;
			   $config['allowed_types']        = 'gif|jpg|png|jpeg';
			   $this->load->library('upload', $config);
			
			$this->form_validation->set_rules('company_name', 'Company Name', 'trim');
			$this->form_validation->set_rules('company_address', 'Company Address', 'trim');
			$this->form_validation->set_rules('states', 'States', 'trim');
			$this->form_validation->set_rules('pf_no', 'PF No.', 'trim');
			$this->form_validation->set_rules('tan_no', 'TAN No.', 'trim');
			$this->form_validation->set_rules('pan_no', 'PAN No.', 'trim');
			$this->form_validation->set_rules('esi_no', 'ESI No.', 'trim');
			$this->form_validation->set_rules('lin_no', 'LIN No.', 'trim');
			$this->form_validation->set_rules('gst_no', 'GST No.', 'trim');
			$this->form_validation->set_rules('registration_certificate_no', 'Registration Certificate No.', 'trim');
			$this->form_validation->set_rules('twitter_handle', 'Twitter Handle', 'trim');
	
			if($this->form_validation->run())
			{
				$company_upd['company_logo'] = $company_logo_old = $result->company_logo;
	
				if($this->upload->do_upload('company_logo'))
				{
					$company_upd['company_logo'] = $this->upload->data('file_name');
					// unlink('assets/images/company_settings/'.$company_logo_old);
				}
				
				// print_r($_POST); die;
				
				$company_upd['company_name'] = $this->input->post('company_name');
				$company_upd['admin_id'] = $user_id;
				$company_upd['company_address'] = $this->input->post('company_address');
				$company_upd['states'] = $this->input->post('states');
				$company_upd['pf_no'] = $this->input->post('pf_no');
				$company_upd['tan_no'] = $this->input->post('tan_no');
				$company_upd['pan_no'] = $this->input->post('pan_no');
				$company_upd['esi_no'] = $this->input->post('esi_no');
				$company_upd['lin_no'] = $this->input->post('lin_no');
				$company_upd['gst_no'] = $this->input->post('gst_no');
				$company_upd['registration_certificate_no'] = $this->input->post('registration_certificate_no');
				$company_upd['twitter_handle'] = $this->input->post('twitter_handle');
				// echo "<pre>"; print_r($company_upd); die;
	
				if($result)
				{
					$this->common_model->UpdateData('company_settings', array('admin_id' => $user_id), $company_upd);
				} else {
					$this->common_model->InsertData('company_settings', $company_upd);
				}
				redirect('admin/profile');
			}
		}

		$data['countries'] = $this->common_model->getAllrecord('master_country');
		$data['general'] = $result_gen = $this->common_model->getSingle('general_options', array('admin_id' => $user_id));
		
		if($_POST['general_option'] == 'GENERAL_OPTION')
		{
			$this->form_validation->set_rules('system_email', 'System Email Address', 'trim');
			$this->form_validation->set_rules('contact_email', 'Contact Email Address', 'trim');
			$this->form_validation->set_rules('logo_position', 'Logo Position', 'trim');
			$this->form_validation->set_rules('country', 'Country', 'trim');
			$this->form_validation->set_rules('currency', 'Currency', 'trim');

			if($this->form_validation->run())
			{
				$general['admin_id'] = $user_id;
				$general['system_email'] = $this->input->post('system_email');
				$general['contact_email'] = $this->input->post('contact_email');
				$general['logo_position'] = $this->input->post('logo_position');
				$general['country'] = $this->input->post('country');
				$general['currency'] = $this->input->post('currency');

				if($result_gen)
				{
					$this->common_model->UpdateData('general_options', array('admin_id' => $user_id), $general);
				} else {
					$this->common_model->InsertData('general_options', $general);
				}
				redirect('admin/profile');
			}
		}
	
		// echo ""; print_r($data['countries']); die;
		$this->load->view('Admin/profile',$data);
	}

	public function add_profession_tax() 
	{
		$admin_id = $this->session->userdata('user_id');

		$this->form_validation->set_rules('salary_from', 'Salary Form', 'trim');
		$this->form_validation->set_rules('salary_till', 'Salary Till', 'trim');
		$this->form_validation->set_rules('tax_amount', 'Tax Amount', 'trim');
		$this->form_validation->set_rules('deduction_month', 'Deduction Month', 'trim');

		if($this->form_validation->run())
		{
			$tax_data['admin_id'] = $admin_id;
			$tax_data['salary_from'] = $this->input->post('salary_from');
			$tax_data['salary_till'] = $this->input->post('salary_till');
			$tax_data['tax_amount'] = $this->input->post('tax_amount');
			$tax_data['deduction_month'] = $this->input->post('deduction_month');
			$tax_data['date'] = date('Y-m-d');

			$this->common_model->InsertData('profession_tax_slabs', $tax_data);
			redirect('admin/profile');
		}

		$this->load->view('Admin/add_profession_tax',$data);
	}

	public function edit_profession_tax($id)
	{
		$data['editdata'] = $this->common_model->getSingle('profession_tax_slabs', array('id' => $id));

		$this->form_validation->set_rules('salary_from', 'Salary Form', 'trim');
		$this->form_validation->set_rules('salary_till', 'Salary Till', 'trim');
		$this->form_validation->set_rules('tax_amount', 'Tax Amount', 'trim');
		$this->form_validation->set_rules('deduction_month', 'Deduction Month', 'trim');

		if($this->form_validation->run())
		{
			$tax_dataUpd['salary_from'] = $this->input->post('salary_from');
			$tax_dataUpd['salary_till'] = $this->input->post('salary_till');
			$tax_dataUpd['tax_amount'] = $this->input->post('tax_amount');
			$tax_dataUpd['deduction_month'] = $this->input->post('deduction_month');

			$this->common_model->UpdateData('profession_tax_slabs', array('id' => $id), $tax_dataUpd);
			redirect('admin/profile');
		}

		$this->load->view('Admin/edit_profession_tax',$data);
	}

	public function delete_profession_tax($id)
	{
		$this->common_model->DeleteData('profession_tax_slabs', array('id' => $id));
		redirect('admin/profile');
	}
	
	public function list_of_values() 
	{
		$admin_id = $this->session->userdata('user_id');

		$table_name = $this->input->post('valueId');
		$data = $this->common_model->getallwhere($table_name, array('status' => 1));
		if($data) {
			foreach($data as $row) {
				$checked="";
				$dataR = $this->common_model->getSingle('list_of_values_checked', array('table_name' => $table_name, 'admin_id' => $admin_id));
				$values = $dataR->checked_value;
				$exarrr = explode(" ",$values);
				if($dataR)
				{
					if(in_array($row->id,$exarrr))
					{
						$checked="checked";
					}					
				}

				$html .= '<tr>';
				$html .= '<td>'.$row->description.' </td>';
				$html .= '<td><input type="checkbox" name="check_record[]" class="checkId" value="'.$row->id.'"  '.$checked.' >
				</td>';
				$html .= '</tr>';
			}
		}
		echo json_encode($html);
	}
	
	public function checked_list_of_values() 
	{
		$admin_id = $this->session->userdata('user_id');

		$table_name = $this->input->post('list_search');
		$checkValue = $this->input->post('check_record');
		$empValue =  implode(" ",$checkValue);
		
		$insert['admin_id'] = $admin_id; 
		$insert['table_name'] = $table_name; 
		$insert['checked_value'] = $empValue; 

		$check = $this->common_model->getSingle('list_of_values_checked', array('table_name' => $table_name, 'admin_id' => $admin_id));
		
		if($check) {
			$this->common_model->DeleteData('list_of_values_checked', array('table_name' => $table_name, 'admin_id' => $admin_id));
		} 
		
		$this->common_model->InsertData('list_of_values_checked', $insert);
		redirect('admin/profile');
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

	// public function add_company_setting()
	// {
	// 	$admin_id = $this->session->userdata('user_id');

	// 	$data['setting'] = $result = $this->common_model->getSingle('company_settings', array('admin_id' => $admin_id));
	// 	$data['states'] = $this->common_model->getAllrecord('master_state');
	// 	// print_r($data['states']); die;

	// 	$file_path =  'assets/images/company_settings/';
	// 	$config['upload_path']          =$file_path;
   	// 	$config['allowed_types']        = 'gif|jpg|png|jpeg';
   	// 	$this->load->library('upload', $config);
		
	// 	$this->form_validation->set_rules('company_name', 'Company Name', 'trim');
	// 	$this->form_validation->set_rules('company_address', 'Company Address', 'trim');
	// 	$this->form_validation->set_rules('states', 'States', 'trim');
	// 	$this->form_validation->set_rules('pf_no', 'PF No.', 'trim');
	// 	$this->form_validation->set_rules('tan_no', 'TAN No.', 'trim');
	// 	$this->form_validation->set_rules('pan_no', 'PAN No.', 'trim');
	// 	$this->form_validation->set_rules('esi_no', 'ESI No.', 'trim');
	// 	$this->form_validation->set_rules('lin_no', 'LIN No.', 'trim');
	// 	$this->form_validation->set_rules('gst_no', 'GST No.', 'trim');
	// 	$this->form_validation->set_rules('registration_certificate_no', 'Registration Certificate No.', 'trim');
	// 	$this->form_validation->set_rules('twitter_handle', 'Twitter Handle', 'trim');

	// 	if($this->form_validation->run())
	// 	{
	// 		$company_upd['company_logo'] = $company_logo_old = $result->company_logo;

	// 		if($this->upload->do_upload('company_logo'))
	// 		{
	// 			$company_upd['company_logo'] = $this->upload->data('file_name');
	// 			// unlink('assets/images/company_settings/'.$company_logo_old);
	// 		}

	// 		$company_upd['company_name'] = $this->input->post('company_name');
	// 		$company_upd['company_address'] = $this->input->post('company_address');
	// 		$company_upd['states'] = $this->input->post('states');
	// 		$company_upd['pf_no'] = $this->input->post('pf_no');
	// 		$company_upd['tan_no'] = $this->input->post('tan_no');
	// 		$company_upd['pan_no'] = $this->input->post('pan_no');
	// 		$company_upd['esi_no'] = $this->input->post('esi_no');
	// 		$company_upd['lin_no'] = $this->input->post('lin_no');
	// 		$company_upd['gst_no'] = $this->input->post('gst_no');
	// 		$company_upd['registration_certificate_no'] = $this->input->post('registration_certificate_no');
	// 		$company_upd['twitter_handle'] = $this->input->post('twitter_handle');

	// 		if($result != '')
	// 		{
	// 			$this->common_model->UpdateData('company_settings', array('admin_id' => $admin_id), $company_upd);
	// 		} else {
	// 			$this->common_model->InsertData('company_settings', $company_upd);
	// 		}
	// 	}
		
		
	// }
	
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
		$comp_id = $this->session->userdata('comp_id');
		$filterVal = $this->input->post('filterVal');
		 if($filterVal=='male'){
			$where = "gender='Male' and user_type = 1 and comp_id='".$comp_id."'";
		 }elseif($filterVal=='female'){
			 $where = "gender='Female' and user_type = 1 and comp_id='".$comp_id."'";
		 }elseif($filterVal=='active'){
			 $where = "status='1' and user_type = 1 and comp_id='".$comp_id."'";
		 }
		 elseif($filterVal=='deactive'){
			 $where = "status='0' and user_type = 1 and comp_id='".$comp_id."'";
		 }else{
			 $where = "user_type = 1 and comp_id='".$comp_id."'";
		 }
		 $data['employee'] = $this->common_model->GetAllData('users',$where,'user_id');
		 return $this->load->view('Admin/filtered_employee',$data);
		
	}
	
	public function importEmp()
	{
    $csvFile = fopen($_FILES['csv_file']['tmp_name'], 'r');
    // Skip the first line
    fgetcsv($csvFile);
    // Parse data from CSV file line by line
    while(($row = fgetcsv($csvFile)) !== FALSE){
		$chk_emp  = $this->common_model->GetSingleData('users',array('email'=>$row[2]));
		
		if(!$chk_emp){
			
			if($row[2]!="" )
			{
				$insert['emp_id'] 			= 'EMP'.rand('1111','9999');
				$insert['comp_id'] 			= $this->session->userdata('comp_id');
				$insert['first_name'] 		= $row[0];
				$insert['last_name'] 		= $row[1];
				$insert['email'] 			= $row[2];
				$insert['phone'] 			= $row[3];
				$insert['password'] 		= password_hash($row[4], PASSWORD_DEFAULT);
				$insert['pw'] 				= $row[4];
				$insert['gender'] 			= $row[5];
				$insert['father_name'] 		= $row[6];
				$insert['dob'] 				= date('Y-m-d',strtotime($row[7]));
				$insert['local_address']	= $row[8];
				$insert['permanent_address']= $row[9];
				$insert['credit_leaves'] 	= $row[10];
				$insert['date_of_joining'] 	= date('Y-m-d',strtotime($row[11]));
				$insert['department_id'] 	= $row[12];
				$insert['designation_id'] 	= $row[13];
				$insert['PAN_no'] 			= $row[14];
				$insert['AADHAR_no'] 		= $row[15];
				$insert['ESIC'] 			= $row[16];
				$insert['UAN_no'] 			= $row[17];
				$insert['leave_opening_el'] = $row[18];
				$insert['leave_el'] 		= $row[19];
				$insert['leave_cl'] 		= $row[20];
				$insert['leave_optional'] 	= $row[21];
				$insert['leave_compOff'] 	= $row[22];
				$insert['gross'] 			= $row[23];
				$insert['variable_pay'] 	= $row[24];
				$insert['retention_bonus'] 	= $row[25];
				$insert['incentive'] 		= $row[26];
				$insert['net_ctc'] 			= $row[27];
				$insert['user_type'] 		= 1;
				$insert['created_at'] 		= date('Y-m-d h:i:s');
			
			//print_r($insert); die;
			
			$run = $this->common_model->InsertData('users',$insert);
					
			/* $description        = $row[7];
			 
			 $gst        		= $row[16];
			 $hsn_code        	= $row[17];
			 $weight        	= $row[18];
			 $inventory         = $row[19];
			 $lenght         	= $row[20];
			 $width         	= $row[21];
			 $height         	= $row[22];
			 $featured_status   = $row[23];
			 if($featured_status=="")
			 {
				$featured_status ='0'; 
			 }
			 $status   = $row[24];
			 if($status=="")
			 {
				$status ='1'; 
			 }
			 $tags         	= $row[25];
			 
			 $product_main_image = '';
			 // product main image
			 if($row[8] != ''){
					$product_main_image = 'UPI1'.time().rand('111111','999999').'.png';
					$uploads_dir1  = './upload/product_image/'.$product_main_image;
							$file   = file($row[8]);
							file_put_contents($uploads_dir1, $file);
					  }else{
						$product_main_image = '';	
					  }
					 //product gallery 2
			 $product_gallery_2 = '';
			 if($row[9] != ''){
					$product_gallery_2 = 'UPI2'.time().rand('111111','999999').'.png';
					$uploads_dir2  = './upload/product_image/'.$product_gallery_2;
							$file2   = file($row[9]);
							file_put_contents($uploads_dir2, $file2);
					  }else{
						$product_gallery_2 = '';	
					  }
					 //product gallery 3
			 $product_gallery_3 = '';	
			 if($row[10] != ''){
					$product_gallery_3 = 'UPI3'.time().rand('111111','999999').'.png';
					$uploads_dir3  = './upload/product_image/'.$product_gallery_3;
							$file3   = file($row[10]);
							file_put_contents($uploads_dir3, $file3);
					  }else{
						$product_gallery_3 = '';	
					  }
					 //product gallery 4
			$product_gallery_4 = '';
			 if($row[11] != ''){
					$product_gallery_4 = 'UPI4'.time().rand('111111','999999').'.png';
					$uploads_dir4  = './upload/product_image/'.$product_gallery_4;
						  $file4   = file($row[11]);
							file_put_contents($uploads_dir4, $file4);
					  }else{
						$product_gallery_4 = '';	
					  }  
			  if($row[12] != '' OR $row[13] != '' OR $row[14] != '' OR $row[15] != '')
			  {
				$attributes_status='1';  
			  }else{			  
				$attributes_status='0';
			  }
			 
			  $product_gallery = json_encode(array('product_gallery_1'=>$product_gallery_2,'product_gallery_2'=>$product_gallery_3,'product_gallery_3'=>$product_gallery_4));	
			  $data =  array('product_for' =>$product_for,'product_name' =>$product_name,'regular_price'=>$regular_price,'sale_price'=>$sale_price,'product_sku'=>$product_sku,'stock_status'=>'In stock','attributes_status'=>$attributes_status,'categories_id'=>$categories_id,'sub_categories_id'=>$sub_categories_id,'product_main_image'=>$product_main_image,'product_gallery'=>$product_gallery,'short_description'=>$short_description,'description'=>$description,'addtional_infomation_status'=>'No','add_by_user_id'=>$user_id,'tags'=>$tags,'height'=>$height,'width'=>$width,'lenght'=>$lenght,'inventory'=>$inventory,'weight'=>$weight,'hsn_code'=>$hsn_code,'gst'=>$gst,'featured_status'=>$featured_status,'status'=>$status);
			  $id = $this->Common_model->save('bpk_products', $data);
			echo $this->db->last_query();
				if($row[12] != '')
				{
					$attrs = explode(',',$row[12]);
					foreach($attrs as $attr)
					{
						$attributes_id = 2;
						$chek = $this->Common_model->getsingle('bpk_attributes_item',array('attributes_id'=>$attributes_id,'attributes_item_title'=>$attr));
						if($chek)
						{
							$attributes_item_id = $chek->attributes_item_id;
							$price = '0.00';
							$data2 = array('product_id'=>$id,'attributes_id'=>$attributes_id,'attributes_item_id'=>$attributes_item_id,'item_price'=>$price);
							$item_price_id = $this->Common_model->save('bpk_products_attributes_item_price', $data2);				
						}
					}				
				}
				
				if($row[13] != '')
				{
					$attrs = explode(',',$row[13]);
					foreach($attrs as $attr)
					{
						$attributes_id = 1;
						$chek = $this->Common_model->getsingle('bpk_attributes_item',array('attributes_id'=>$attributes_id,'attributes_item_title'=>$attr));
						if($chek)
						{
							$attributes_item_id = $chek->attributes_item_id;
							$price = '0.00';
							$data2 = array('product_id'=>$id,'attributes_id'=>$attributes_id,'attributes_item_id'=>$attributes_item_id,'item_price'=>$price);
							$item_price_id = $this->Common_model->save('bpk_products_attributes_item_price', $data2);				
						}
					}				
				}
				
				if($row[14] != '')
				{
					$attrs = explode(',',$row[14]);
					foreach($attrs as $attr)
					{
						$attributes_id = 3;
						$chek = $this->Common_model->getsingle('bpk_attributes_item',array('attributes_id'=>$attributes_id,'attributes_item_title'=>$attr));
						if($chek)
						{
							$attributes_item_id = $chek->attributes_item_id;
							$price = '0.00';
							$data2 = array('product_id'=>$id,'attributes_id'=>$attributes_id,'attributes_item_id'=>$attributes_item_id,'item_price'=>$price);
							$item_price_id = $this->Common_model->save('bpk_products_attributes_item_price', $data2);				
						}
					}				
				}
				
				if($row[15] != '')
				{
					$attrs = explode(',',$row[15]);
					foreach($attrs as $attr)
					{
						$attributes_id = 4;
						$chek = $this->Common_model->getsingle('bpk_attributes_item',array('attributes_id'=>$attributes_id,'attributes_item_title'=>$attr));
						if($chek)
						{
							$attributes_item_id = $chek->attributes_item_id;
							$price = '0.00';
							$data2 = array('product_id'=>$id,'attributes_id'=>$attributes_id,'attributes_item_id'=>$attributes_item_id,'item_price'=>$price);
							$item_price_id = $this->Common_model->save('bpk_products_attributes_item_price', $data2);				
						}
					}				
				}*/
			}
		}
	}
    // Close opened CSV file
    fclose($csvFile);
    
	$this->session->set_flashdata('msg','<div class="alert alert-success">Employees has been successfully upload By CSV</div>');	
	  redirect(base_url('admin/employee'));
	}
	
	
	
	
}

?>
