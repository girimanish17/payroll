<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Superadmin extends CI_Controller
{
	
	public function __construct() {
		parent::__construct();
		$this->check_login();
		$this->load->model('Common_function');
		$this->load->library('pagination');
	} 

	public function check_login(){
		if(!$this->session->userdata('user_id')){
			redirect();
		}
	}

	public function index(){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		if($type!=3)
		{
			redirect();
		}
		$data['companies'] = $this->common_model->GetAllData('companies',array('status!='=>2),'id');
		$this->load->view('Admin/s_dashboard',$data);
	}
	
	public function companies(){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		$data['admin'] = $this->common_model->GetAllData('users',array('status'=>1,'user_type'=>2,'is_deleted'=>0),'user_id');
		$data['packages'] = $this->common_model->GetAllData('packages',array('status'=>1),'id');
		$data['companies'] = $this->common_model->GetAllData('companies',array('status!='=>2),'id');
		$this->load->view('Admin/s_companies',$data);
	}
	public function contact_requests(){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		$this->load->view('Admin/s_contact_requests');
	}
	public function subscription_plans(){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		
		$config = array();
		$config["base_url"] = base_url() ."/superadmin/subscription_plans";		
		$total_row = $this->common_model->record_count('subscription_plans',array('status!='=>2));
		$config["total_rows"] = $total_row;
		$config["per_page"] = 25;		
		$config['num_links'] = 3;
		$config['use_page_numbers'] = false;
		$config['reuse_query_string'] = false;		 
		$config['full_tag_open'] = '<ul class="atbd-pagination d-flex">';
		$config['full_tag_close'] = '</ul>';		 
		$config['first_link'] = '<<';
		$config['first_tag_open'] = '<span class="atbd-pagination__link pagination-control"><span class="la la-angle-left"></span>';
		$config['first_tag_close'] = '</span>';		 
		$config['last_link'] = '>>';
		$config['last_tag_open'] = '<span class="atbd-pagination__link pagination-control"><span class="la la-angle-right"></span>';
		$config['last_tag_close'] = '</span>';		 
		$config['next_link'] = '<span class="atbd-pagination__link pagination-control"><span class="la la-angle-right"></span></span>';
		$config['next_tag_open'] = '<span class="nextlink">';
		$config['next_tag_close'] = '</span>';
		$config['prev_link'] = '<span class="atbd-pagination__link pagination-control"><span class="la la-angle-left"></span></span>';
		$config['prev_tag_open'] = '<span class="prevlink">';
		$config['prev_tag_close'] = '</span>';
		$config['cur_tag_open'] = '<span class="atbd-pagination__link">';
		$config['cur_tag_close'] = '</span>';
		$config['num_tag_open'] = '<span class="atbd-pagination__link"> ';
		$config['num_tag_close'] = '</span>';
		$this->pagination->initialize($config);
		if($this->uri->segment(3))
		{
			$page = ($this->uri->segment(3)) ;
			$data['sno'] = $this->uri->segment(3)+1;
		}
		else
		{
			$page = 0;
			$data['sno'] = 1;
		}
		$data["links"] = $this->pagination->create_links();
		$data['subscription_plans'] = $this->common_model->getAllwhere_pagination('subscription_plans',$config["per_page"],$page,array('status!='=>2),'id','asc');
		$this->load->view('Admin/s_subscription_plans',$data);
	}
	
	public function addNewPlans()
	{
	    $user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		if($type!=3)
		{
			redirect();
		}
		$this->form_validation->set_rules('name','name','required');
		$this->form_validation->set_rules('s_monthly_id','s_monthly_id','required');
		$this->form_validation->set_rules('s_annual_id','s_annual_id','required');
		$this->form_validation->set_rules('monthly_price','monthly_price','required');
		$this->form_validation->set_rules('annual_price','annual_price','required');
		$this->form_validation->set_rules('start_user','start_user','required');
		$this->form_validation->set_rules('end_user','end_user','required');
		
		if($this->form_validation->run()){
			
					$insert['name'] = $this->input->post('name');
					$insert['s_monthly_id'] = $this->input->post('s_monthly_id');
					$insert['s_annual_id'] = $this->input->post('s_annual_id');
					$insert['monthly_price'] = $this->input->post('monthly_price');
					$insert['annual_price'] = $this->input->post('annual_price');
					$insert['start_user'] = $this->input->post('start_user');
					$insert['end_user'] = $this->input->post('end_user');
					$insert['comment'] = $this->input->post('comment');
					$insert['status'] = $this->input->post('radio_default');
					$insert['created_date'] = date('Y-m-d h:i:s');
					
					$run = $this->common_model->InsertData('subscription_plans',$insert);
					//echo $this->db->last_query(); die;
			
			
			if($run)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success">Subscription Plans added successfully!</div>');
				redirect('superadmin/subscription_plans');
			} 
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
			}
			
			
		 } else {
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
				redirect('superadmin/subscription_plans');
		}
	}
	
	public function editNewPlans($id)
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		if($type!=3){ redirect(); }
		
		$this->form_validation->set_rules('name','name','required');
		$this->form_validation->set_rules('s_monthly_id','s_monthly_id','required');
		$this->form_validation->set_rules('s_annual_id','s_annual_id','required');
		$this->form_validation->set_rules('monthly_price','monthly_price','required');
		$this->form_validation->set_rules('annual_price','annual_price','required');
		$this->form_validation->set_rules('start_user','start_user','required');
		$this->form_validation->set_rules('end_user','end_user','required');
		
		if($this->form_validation->run())
		{
			
			$insert['name'] = $this->input->post('name');
					$insert['s_monthly_id'] = $this->input->post('s_monthly_id');
					$insert['s_annual_id'] = $this->input->post('s_annual_id');
					$insert['monthly_price'] = $this->input->post('monthly_price');
					$insert['annual_price'] = $this->input->post('annual_price');
					$insert['start_user'] = $this->input->post('start_user');
					$insert['end_user'] = $this->input->post('end_user');
					$insert['comment'] = $this->input->post('comment');
					$insert['status'] = $this->input->post('radio_default');
			//echo "hi";print_r($insert); die;
			$run = $this->common_model->UpdateData('subscription_plans',array('id'=>$id),$insert);
					
			if($run)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success">Subscription Plans Updated successfully!</div>');
				redirect('superadmin/subscription_plans');
			} 
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
			}
		 } 
		 else 
		 {
			$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
			redirect('superadmin/subscription_plans');
		}
		
	}
	
	public function language()
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		$config = array();
		$config["base_url"] = base_url() ."/superadmin/language";		
		$total_row = $this->common_model->record_count('language',array('status!='=>2));
		$config["total_rows"] = $total_row;
		$config["per_page"] = 20;		
		$config['num_links'] = 3;
		$config['use_page_numbers'] = false;
		$config['reuse_query_string'] = false;		 
		$config['full_tag_open'] = '<ul class="atbd-pagination d-flex">';
		$config['full_tag_close'] = '</ul>';		 
		$config['first_link'] = '<<';
		$config['first_tag_open'] = '<span class="atbd-pagination__link pagination-control"><span class="la la-angle-left"></span>';
		$config['first_tag_close'] = '</span>';		 
		$config['last_link'] = '>>';
		$config['last_tag_open'] = '<span class="atbd-pagination__link pagination-control"><span class="la la-angle-right"></span>';
		$config['last_tag_close'] = '</span>';		 
		$config['next_link'] = '<span class="atbd-pagination__link pagination-control"><span class="la la-angle-right"></span></span>';
		$config['next_tag_open'] = '<span class="nextlink">';
		$config['next_tag_close'] = '</span>';
		$config['prev_link'] = '<span class="atbd-pagination__link pagination-control"><span class="la la-angle-left"></span></span>';
		$config['prev_tag_open'] = '<span class="prevlink">';
		$config['prev_tag_close'] = '</span>';
		$config['cur_tag_open'] = '<span class="atbd-pagination__link">';
		$config['cur_tag_close'] = '</span>';
		$config['num_tag_open'] = '<span class="atbd-pagination__link"> ';
		$config['num_tag_close'] = '</span>';
		$this->pagination->initialize($config);
		if($this->uri->segment(3))
		{
			$page = ($this->uri->segment(3)) ;
			$data['sno'] = $this->uri->segment(3)+1;
		}
		else
		{
			$page = 0;
			$data['sno'] = 1;
		}
		$data["links"] = $this->pagination->create_links();
		$data['language'] = $this->common_model->getAllwhere_pagination('language',$config["per_page"],$page,array('status!='=>2),'id','asc');
		$this->load->view('Admin/s_language',$data);
	}
	
	public function addLanguage()
	{
	    $user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		if($type!=3)
		{
			redirect();
		}
		$this->form_validation->set_rules('locale','locale','required');
		$this->form_validation->set_rules('language','language','required');
		
		if($this->form_validation->run()){
			
					$insert['locale'] = $this->input->post('locale');
					$insert['language'] = $this->input->post('language');
					$insert['status'] = $this->input->post('radio_default');
					$insert['created_date'] = date('Y-m-d h:i:s');
					
					$run = $this->common_model->InsertData('language',$insert);
					//echo $this->db->last_query(); die;
			
			
			if($run)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success">Language added successfully!</div>');
				redirect('superadmin/language');
			} 
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
			}
			
			
		 } else {
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
				redirect('superadmin/language');
		}
	}
	
	public function editLanguages($id)
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		if($type!=3){ redirect(); }
		
		$this->form_validation->set_rules('locale','locale','required');
		$this->form_validation->set_rules('language','language','required');
		
		if($this->form_validation->run())
		{
		
					$insert['locale'] = $this->input->post('locale');
					$insert['language'] = $this->input->post('language');
					$insert['status'] = $this->input->post('radio_default');
			//echo "hi";print_r($insert); die;
			$run = $this->common_model->UpdateData('language',array('id'=>$id),$insert);
					
			if($run)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success">Language Updated successfully!</div>');
				redirect('superadmin/language');
			} 
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
			}
		 } 
		 else 
		 {
			$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
			redirect('superadmin/language');
		}
		
	}
	
	public function deleteLanguage($id)
	{
			$run = $this->common_model->UpdateData('language',array('id'=>$id),array('status'=>2));
			//echo $this->db->last_query();
			if($run) {
				
				$this->session->set_flashdata('msg','<div class="alert alert-success">Language deleted successfully</div>');
                 redirect('superadmin/language');
							
			} else {
				$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
                 redirect('superadmin/language');
			}
		 }
	
	public function invoices(){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		$this->load->view('Admin/s_invoices');
	}
	public function superadmin_users(){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		$data['admin'] = $this->common_model->GetAllData('users',array('user_type' =>2),'created_at','desc');
		$this->load->view('Admin/s_superadmin_users',$data);
	}
	
	public function add_admin_user(){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		
		$this->form_validation->set_rules('first_name','Firstname','required');
		$this->form_validation->set_rules('last_name','Lastname','required');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('password','Password','required|min_length[6]');
		$this->form_validation->set_rules('confirm_password','Confirm password','required|matches[password]');
		//$data['msg'] = $this->session->flashdata('msg');	
		$users = $this->common_model->GetSingleData('users',array('email'=>$this->input->post('email')));
		
		if($this->form_validation->run()){
			if($users==''){
					
					$insert['first_name'] = $this->input->post('first_name');
					$insert['last_name'] = $this->input->post('last_name');
					$insert['email'] = $this->input->post('email');
					$insert['password'] = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
					$insert['user_type'] = 2;
					$insert['created_at'] = date('Y-m-d h:i:s');
					
					$run = $this->common_model->InsertData('users',$insert);
			}else{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Email Already existed!</div>');
				redirect('superadmin/superadmin_users');
			}
			
			if($run)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success">Admin added successfully!</div>');
				redirect('superadmin/superadmin_users');
			} 
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
			}
			
			
		 } else {
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
				redirect('superadmin/superadmin_users');
		}
		
	}
	
	public function edit_admin_user($id)
	{
		$this->form_validation->set_rules('first_name','Firstname','required');
		$this->form_validation->set_rules('last_name','Lastname','required');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('password','Password','required|min_length[6]');
		$this->form_validation->set_rules('confirm_password','Confirm password','required|matches[password]');	
		$users = $this->common_model->GetSingleData('users',array('user_id!='=>$id,'email'=>$this->input->post('email')));
		
		if($this->form_validation->run())
		{
			if($users==''){
					
					$insert['first_name'] = $this->input->post('first_name');
					$insert['last_name'] = $this->input->post('last_name');
					$insert['email'] = $this->input->post('email');
					$insert['password'] = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
					$insert['created_at'] = date('Y-m-d h:i:s');
					
					$run = $this->common_model->UpdateData('users',array('user_id'=>$id),$insert);
			}
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Email Already existed!</div>');
				redirect('superadmin/superadmin_users');
			}
			
			if($run)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success">Admin updated successfully!</div>');
				redirect('superadmin/superadmin_users');
			} 
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
			}
		} else {
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
				redirect('superadmin/superadmin_users');
		}
		
	}
	
	public function addCompanies()
	{
	   $user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		$this->form_validation->set_rules('admin_id','admin','required');
		$this->form_validation->set_rules('packages','packages','required');
		$this->form_validation->set_rules('name','name','required');
		$this->form_validation->set_rules('premium','premium','required');
		$this->form_validation->set_rules('amount','amount','required');
		$this->form_validation->set_rules('pay_date','pay_date','required');
		
		//$data['msg'] = $this->session->flashdata('msg');	
		//$users = $this->common_model->GetSingleData('users',array('email'=>$this->input->post('email')));
		
		if($this->form_validation->run()){
			
					$insert['company_id'] = "COM".rand(1000,10000)."".$user_id;
					$insert['admin_id'] = $this->input->post('admin_id');
					$insert['name'] = $this->input->post('name');
					$insert['package_id'] = $this->input->post('packages');
					$insert['premium'] = $this->input->post('premium');
					$insert['amount'] = $this->input->post('amount');
					$insert['pay_date'] = date('Y-m-d', strtotime($this->input->post('pay_date')));
					$insert['next_pay_date'] = date('Y-m-d', strtotime($this->input->post('next_pay_date')));
					$insert['created_date'] = date('Y-m-d h:i:s');
					if($_FILES['image']['name']){
					$upload = $this->Common_function->upload_image('assets/images/company/','image');
					$insert['logo'] = $upload['name'];
					}
					$run = $this->common_model->InsertData('companies',$insert);
					//echo $this->db->last_query(); die;
			
			
			if($run)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success">Company added successfully!</div>');
				redirect('superadmin/companies');
			} 
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
			}
			
			
		 } else {
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
				redirect('superadmin/companies');
		}
	}
	
	public function editCompanies($id)
	{
	   $user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		
		$this->form_validation->set_rules('packages','packages','required');
		$this->form_validation->set_rules('admin_id','admin','required');
		$this->form_validation->set_rules('name','name','required');
		$this->form_validation->set_rules('premium','premium','required');
		$this->form_validation->set_rules('amount','amount','required');
		$this->form_validation->set_rules('pay_date','pay_date','required');
		
		$companies = $this->common_model->GetSingleData('companies',array('id'=>$id));
		
		if($this->form_validation->run()){
			
					$insert['name'] = $this->input->post('name');
					$insert['package_id'] = $this->input->post('packages');
					$insert['admin_id'] = $this->input->post('admin_id');
					$insert['premium'] = $this->input->post('premium');
					$insert['amount'] = $this->input->post('amount');
					$insert['pay_date'] = date('Y-m-d', strtotime($this->input->post('pay_date')));
					$insert['next_pay_date'] = date('Y-m-d', strtotime($this->input->post('next_pay_date')));
					
					if($_FILES['image']['name']){
					$upload = $this->Common_function->upload_image('assets/images/company/','image');
					$insert['logo'] = $upload['name'];
					}else{
					$insert['logo'] = $companies['logo'];
					}
					$run = $this->common_model->UpdateData('companies',array('id'=>$id),$insert);
					//echo $this->db->last_query(); die;
			
			
			if($run)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success">Company Updated successfully!</div>');
				redirect('superadmin/companies');
			} 
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
			}
			
			
		 } else {
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
				redirect('superadmin/companies');
		}
		 
		
	}
	
	public function changePackage()
	{
	   $user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		
		$this->form_validation->set_rules('packages','packages','required');
		$this->form_validation->set_rules('premium','premium','required');
		$this->form_validation->set_rules('amount','amount','required');
		$this->form_validation->set_rules('pay_date','pay_date','required');
		
		if($this->form_validation->run()){
					$id = $this->input->post('id');
					$insert['package_id'] = $this->input->post('packages');
					$insert['premium'] = $this->input->post('premium');
					$insert['amount'] = $this->input->post('amount');
					$insert['pay_date'] = date('Y-m-d', strtotime($this->input->post('pay_date')));
					$insert['next_pay_date'] = date('Y-m-d', strtotime($this->input->post('next_pay_date')));
					
					$run = $this->common_model->UpdateData('companies',array('id'=>$id),$insert);
			//echo $this->db->last_query(); die;
			
			if($run)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success">Changed package successfully!</div>');
				redirect('superadmin/companies');
			} 
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
			}
			
			
		 } else {
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
				redirect('superadmin/companies');
		}
		 
		
	}
	
	public function deleteCompany($id){
			
			//$run = $this->common_model->DeleteData('companies',array('id'=>$id));
			$run = $this->common_model->UpdateData('companies',array('id'=>$id),array('status'=>2));
			//echo $this->db->last_query();
			if($run) {
				
				$this->session->set_flashdata('msg','<div class="alert alert-success">Comapny deleted successfully</div>');
                 redirect('superadmin/companies');
							
			} else {
				$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
                 redirect('superadmin/companies');
			}
		 }
		 
		 public function changeStatusCompany($id,$status){
			
			//$run = $this->common_model->DeleteData('companies',array('id'=>$id));
			$run = $this->common_model->UpdateData('companies',array('id'=>$id),array('status'=>$status));
			//echo $this->db->last_query();
			if($run) {
				
				$this->session->set_flashdata('msg','<div class="alert alert-success">Comapny Status Changed successfully</div>');
                 redirect('superadmin/companies');
							
			} else {
				$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
                 redirect('superadmin/companies');
			}
		 }
	
	
	public function pages(){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		$this->load->view('Admin/s_pages');
	}
	public function faq_categories(){
		$user_id = $this->session->userdata('user_id'); 
		$type = $this->session->userdata('user_type');
		if($type!=3){ redirect(); }
		$data['faq_category'] = $this->common_model->GetAllData('faq_category',array('status!='=>2),'id','desc');
		$this->load->view('Admin/s_faq_categories',$data);
	}
	
	public function addfaqCategories()
	{
	    $user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		//echo $this->input->post('radio_default');die;
		
		$this->form_validation->set_rules('name','name','required');
		$this->form_validation->set_rules('radio_default','status','required');
		
		if($this->form_validation->run()){
			
					$insert['name'] = $this->input->post('name');
					$insert['status'] = $this->input->post('radio_default');
					$insert['created_date'] = date('Y-m-d h:i:s');
					
					$run = $this->common_model->InsertData('faq_category',$insert);
					//echo $this->db->last_query(); die;
			
			
			if($run)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success">FAQ Category added successfully!</div>');
				redirect('superadmin/faq_categories');
			} 
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
			}
			
			
		 } else {
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
				redirect('superadmin/faq_categories');
		}
	}
	
	public function editfaqCategories($id)
	{
		
	    $user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		if($type!=3){ redirect(); }
		
		$this->form_validation->set_rules('name','name','required');
		$this->form_validation->set_rules('radio_default','status','required');
		
		if($this->form_validation->run())
		{
			
			$insert['name'] = $this->input->post('name');
			$insert['status'] = $this->input->post('radio_default');
			$run = $this->common_model->UpdateData('faq_category',array('id'=>$id),$insert);
					
			if($run)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success">FAQ Category Updated successfully!</div>');
				redirect('superadmin/faq_categories');
			} 
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
			}
		} 
		else 
		{
			$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
			redirect('superadmin/faq_categories');
		}
	}
	
	public function deletefaq_category($id)
	{
		$run = $this->common_model->UpdateData('faq_category',array('id'=>$id),array('status'=>2));
		if($run) 
		{
			
			$this->session->set_flashdata('msg','<div class="alert alert-success">FAQ Category deleted successfully</div>');
			redirect('superadmin/faq_categories');
						
		} 
		else 
		{
			$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
			redirect('superadmin/faq_categories');
		}
	}
	
	public function faq()
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		if($type!=3)
		{
			redirect();
		}
		$data['faq'] = $this->common_model->GetAllData('faq',array('status!='=>2),'id','desc');
		$data['faq_category'] = $this->common_model->GetAllData('faq_category',array('status'=>1),'id','asc');
		$this->load->view('Admin/s_faq',$data);
	}
	
	public function addfaq()
	{
	    $user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		if($type!=3)
		{
			redirect();
		}
		$this->form_validation->set_rules('title','title','required');
		$this->form_validation->set_rules('content','content','required');
		$this->form_validation->set_rules('category_id','category id','required');
		
		if($this->form_validation->run()){
			
					$insert['title'] = $this->input->post('title');
					$insert['content'] = $this->input->post('content');
					$insert['category_id'] = $this->input->post('category_id');
					$insert['created_date'] = date('Y-m-d h:i:s');
					
					$run = $this->common_model->InsertData('faq',$insert);
					//echo $this->db->last_query(); die;
			
			
			if($run)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success">FAQ added successfully!</div>');
				redirect('superadmin/faq');
			} 
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
			}
			
			
		 } else {
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
				redirect('superadmin/faq');
		}
	}
	
	public function editfaq($id)
	{
	    $user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		if($type!=3){ redirect(); }
		
		$this->form_validation->set_rules('title','title','required');
		$this->form_validation->set_rules('content','content','required');
		$this->form_validation->set_rules('category_id','category id','required');
		
		if($this->form_validation->run())
		{
			
			$insert['title'] = $this->input->post('title');
			$insert['content'] = $this->input->post('content');
			$insert['category_id'] = $this->input->post('category_id');
			//echo "hi";print_r($insert); die;
			$run = $this->common_model->UpdateData('faq',array('id'=>$id),$insert);
					
			if($run)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success">FAQ Updated successfully!</div>');
				redirect('superadmin/faq');
			} 
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
			}
		 } 
		 else 
		 {
			$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
			redirect('superadmin/faq');
		}
	}
	
	public function deletefaq($id)
	{
		$run = $this->common_model->UpdateData('faq',array('id'=>$id),array('status'=>2));
		
		if($run) 
		{
			$this->session->set_flashdata('msg','<div class="alert alert-success">FAQ deleted successfully</div>');
			redirect('superadmin/faq');
						
		} 
		else 
		{
			$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
			redirect('superadmin/faq');
		}
	}
		 
	
	public function features()
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		$this->load->view('Admin/s_features');
	}
	
	public function edit()
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		$data['general_settings'] = $this->common_model->GetSingleData('general_settings',array('id'=>1));
		$data['languages'] = $this->common_model->GetAllData('languages',array(),'id');
		$data['currency'] = $this->common_model->GetAllData('currency',array(),'id');
		$this->load->view('Admin/s_edit',$data);
	}
	
	public function editGeneralSettings()
	{
	    $user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		if($type!=3){ redirect(); }
		$general_settings = $this->common_model->GetSingleData('general_settings',array('id'=>1));
		
		$this->form_validation->set_rules('app_name','application name','required');
		$this->form_validation->set_rules('comp_address','company address','required');
		$this->form_validation->set_rules('phone','phone','required');
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('name','name','required');
		$this->form_validation->set_rules('currency_id','currency','required');
		$this->form_validation->set_rules('lang_id','language','required');
		
		if($this->form_validation->run())
		{
			
			$insert['app_name'] = $this->input->post('app_name');
			$insert['comp_address'] = $this->input->post('comp_address');
			$insert['phone'] = $this->input->post('phone');
			$insert['email'] = $this->input->post('email');
			$insert['name'] = $this->input->post('name');
			$insert['currency_id'] = $this->input->post('currency_id');
			$insert['lang_id'] = $this->input->post('lang_id');
			$insert['app_update'] = $this->input->post('radio_default');
			$insert['created_date'] = date('Y-m-d h:i:s');
			
			if($_FILES['image']['name']){
				$upload = $this->Common_function->upload_image('assets/images/company/','image');
				$insert['logo'] = $upload['name'];
			}else{
				$insert['logo'] = $general_settings['logo'];
			}
			//echo "hi";print_r($insert); die;
			$run = $this->common_model->UpdateData('general_settings',array('id'=>1),$insert);
					
			if($run)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success">General settings Updated successfully!</div>');
				redirect('superadmin/edit');
			} 
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
			}
		 } 
		 else 
		 {
			$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
			redirect('superadmin/edit');
		}
	}
	
	public function email_templates($page='')
	{
		
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		$this->load->library('pagination');
		$config = array();
		$config["base_url"] = base_url() ."/superadmin/email_templates";		
		$total_row = $this->common_model->record_count('email_templates',array());
		
		$config["total_rows"] = $total_row;
		$config["per_page"] = $page?$page:20;		
		$config['num_links'] = 3;
		$config['use_page_numbers'] = false;
		$config['reuse_query_string'] = false;		 
		$config['full_tag_open'] = '<ul class="atbd-pagination d-flex">';
		$config['full_tag_close'] = '</ul>';		 
		$config['first_link'] = '<<';
		$config['first_tag_open'] = '<span class="atbd-pagination__link pagination-control"><span class="la la-angle-left"></span>';
		$config['first_tag_close'] = '</span>';		 
		$config['last_link'] = '>>';
		$config['last_tag_open'] = '<span class="atbd-pagination__link pagination-control"><span class="la la-angle-right"></span>';
		$config['last_tag_close'] = '</span>';		 
		$config['next_link'] = '<span class="atbd-pagination__link pagination-control"><span class="la la-angle-right"></span></span>';
		$config['next_tag_open'] = '<span class="nextlink">';
		$config['next_tag_close'] = '</span>';
		$config['prev_link'] = '<span class="atbd-pagination__link pagination-control"><span class="la la-angle-left"></span></span>';
		$config['prev_tag_open'] = '<span class="prevlink">';
		$config['prev_tag_close'] = '</span>';
		$config['cur_tag_open'] = '<span class="atbd-pagination__link">';
		$config['cur_tag_close'] = '</span>';
		$config['num_tag_open'] = '<span class="atbd-pagination__link"> ';
		$config['num_tag_close'] = '</span>';
		
		$this->pagination->initialize($config);
		if($this->uri->segment(3))
		{
			$page = ($this->uri->segment(3)) ;
			$data['sno'] = $this->uri->segment(3)+1;
		}
		else
		{
			$page = 0;
			$data['sno'] = 1;
		}
		$data["links"] = $this->pagination->create_links(); 		
		$data['email_templates'] = $this->common_model->getAllwhere_pagination('email_templates',$config["per_page"],$page,array(),'id','asc');
		//$data['email_templates'] = $this->common_model->GetAllData('email_templates',array(),'id');
	    $this->load->view('Admin/s_email_templates',$data);
	}
	
	public function editemailtemplate($id)
	{
	    $user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		if($type!=3){ redirect(); }
		
		$this->form_validation->set_rules('template_name','template name','required');
		$this->form_validation->set_rules('description','description','required');
		$this->form_validation->set_rules('subject','subject','required');
		$this->form_validation->set_rules('varialbles','varialbles','required');
		
		if($this->form_validation->run())
		{
			
			$insert['template_name'] = $this->input->post('template_name');
			$insert['subject'] = $this->input->post('subject');
			$insert['description'] = $this->input->post('description');
			$insert['varialbles'] = $this->input->post('varialbles');
			//echo "hi";print_r($insert); die;
			$run = $this->common_model->UpdateData('email_templates',array('id'=>$id),$insert);
					
			if($run)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success">Email Template Updated successfully!</div>');
				redirect('superadmin/email_templates');
			} 
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
			}
		 } 
		 else 
		 {
			$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
			redirect('superadmin/email_templates');
		}
	}
	
	public function stripe_settings()
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		$data['payment_settings'] = $this->common_model->GetSingleData('payment_settings',array('id'=>1));
		$this->load->view('Admin/s_stripe_settings',$data);
	}
	
	public function edit_payment_settings()
	{
	    $user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		if($type!=3){ redirect(); }
		$payment_settings = $this->common_model->GetSingleData('payment_settings',array('id'=>1));
		
		$this->form_validation->set_rules('publishable_key','publishable_key','required');
		$this->form_validation->set_rules('stripe_secret','stripe_secret','required');
		$this->form_validation->set_rules('stripe_webhook_secret','stripe_webhook_secret','required');
		$this->form_validation->set_rules('paypal_client_id','paypal_client_id','required');
		$this->form_validation->set_rules('paypal_secret_key','paypal_secret_key','required');
		
		if($this->form_validation->run())
		{
			//print_r($this->input->post('environment')); die;
			$insert['publishable_key'] = $this->input->post('publishable_key');
			$insert['stripe_secret'] = $this->input->post('stripe_secret');
			$insert['stripe_webhook_secret'] = $this->input->post('stripe_webhook_secret');
			$insert['stripe_status'] = $this->input->post('radio_default');
			$insert['paypal_client_id'] = $this->input->post('paypal_client_id');
			$insert['paypal_secret_key'] = $this->input->post('paypal_secret_key');
			$insert['environment'] = $this->input->post('environment');
			$insert['paypal_status'] = $this->input->post('radio_default_p');
			$insert['created_date'] = date('Y-m-d h:i:s');
			
			
			//echo "hi";print_r($insert); die;
			$run = $this->common_model->UpdateData('payment_settings',array('id'=>1),$insert);
					
			if($run)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success">Payment settings Updated successfully!</div>');
				redirect('superadmin/stripe_settings');
			} 
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
			}
		 } 
		 else 
		 {
			$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
			redirect('superadmin/stripe_settings');
		}
	}
	
	public function update_new_version()
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		$this->load->view('Admin/s_update_new_version');
	}
	
	public function smtp_settings()
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		$this->load->view('Admin/s_smtp_settings');
	}
	
	public function custom_modules()
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		$this->load->view('Admin/s_custom_modules');
	}
	
	public function google_captcha()
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		$this->load->view('Admin/s_google_captcha');
	}
	
	public function profile(){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		if($type!=3){ redirect(); }
		$data['superadmin'] = $this->common_model->GetSingleData('users',array('user_id'=>$user_id,'user_type'=>3),'user_id');
		//echo ""; print_r($data['employees']); die;
		$this->load->view('Admin/s_profile',$data);
	}
	
	public function addProfileForm(){
		$user_id = $this->session->userdata('user_id');
		
		$this->form_validation->set_rules('first_name','First Name','required');
		$this->form_validation->set_rules('last_name','Last name','required');
		
		$this->form_validation->set_rules('email','email','required');
		
		if($this->form_validation->run()){
			$insert['first_name'] = $this->input->post('first_name');
			$insert['last_name'] = $this->input->post('last_name');
			$insert['father_name'] = $this->input->post('father_name');
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
	
	public function changes_password(){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		if($type!=3){ redirect(); }
		$data['superadmin'] = $this->common_model->GetSingleData('users',array('user_type'=>3,'user_id'=>$user_id));
		$this->load->view('Admin/s_changes_password',$data);
	}
	
	public function changePasswordForm()
	{
	    $this->form_validation->set_rules('password','Password','required|min_length[6]');
		$this->form_validation->set_rules('confirm_password','Confirm Password','required|matches[password]');
		
		if($this->form_validation->run()){
			
			$insert['password'] = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
			$user_id = $this->input->post('id');
            
			$insert['updated_at'] = date('Y-m-d h:i:s');

            
			$run = $this->common_model->UpdateData('users',array('user_id'=>$user_id),$insert);
			//echo $this->db->last_query();
			if($run) {
			
				$this->session->set_flashdata('msg','<div class="alert alert-success">Password Changed successfully</div>');
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
		
	
	
	public function logout()
	{
		session_destroy();
		redirect();
	}

	

}

?>