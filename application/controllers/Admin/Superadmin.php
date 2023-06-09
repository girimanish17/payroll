<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *  
 */
class Superadmin extends CI_Controller
{
	
	public function __construct() 
	{
		parent::__construct();
		$this->check_login();
		$this->load->model('Common_function');
		$this->load->library('pagination');
	} 

	public function check_login()
	{
		if(!$this->session->userdata('user_id') ){
			redirect();
		}
		if($this->session->userdata('user_type')!=3){
			redirect('login');
		}
	}

	public function index()
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		if($type!=3)
		{
			redirect();
		}
		$data['companies'] = $this->common_model->GetAllData('companies',array('status!='=>2),'id');
		$this->load->view('Admin/s_dashboard',$data);
	}
	
	public function contact_requests()
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		$this->load->view('Admin/s_contact_requests');
	}
	
	public function subscription_plans()
	{
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
	
	public function invoices()
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		$this->load->view('Admin/s_invoices');
	}
	
	public function superadmin_users()
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		$data['admin'] = $this->common_model->GetAllData('users',array('user_type' =>2),'created_at','desc');
		$this->load->view('Admin/s_superadmin_users',$data);
	}
	
	public function add_admin_user()
	{
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
					$insert['pw'] = $this->input->post('password');
					$insert['user_type'] = 2;
					$insert['created_at'] = date('Y-m-d h:i:s');
					//print_r($insert); die;
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
					$insert['pw'] = $this->input->post('password');
					$insert['created_at'] = date('Y-m-d h:i:s');
					
					$run = $this->common_model->UpdateData('users',array('user_id'=>$id),$insert);
					echo "11111";
			}
			else
			{
				echo "1111";
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Email Already existed!</div>');
				redirect('superadmin/superadmin_users');
			}
			
			if($run)
			{
				echo "1";
				$this->session->set_flashdata('msg','<div class="alert alert-success">Admin updated successfully!</div>');
				redirect('superadmin/superadmin_users');
			} 
			else
			{
				echo "11";
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
			}
		} else {
			echo "111";
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
				redirect('superadmin/superadmin_users');
		}
		
	}
	
	public function companies()
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		//$data['admin'] = $this->common_model->GetAllData('users',array('status'=>1,'user_type'=>2,'is_deleted'=>0),'user_id');
		$data['packages'] = $this->common_model->GetAllData('packages',array('status'=>1),'id');
		//$data['companies'] = $this->common_model->GetAllData('companies',array('status!='=>2),'id');
		$data['admin'] = $this->common_model->join_fetchall('*','users','companies','users.user_id = companies.admin_id',array('users.status!='=>2,'users.user_type'=>2,'users.is_deleted'=>0,'users.created_by'=>$user_id));
		//print_r($data['admin']); die;
		
		$this->load->view('Admin/s_companies',$data);
	}
	
	public function addCompanies()
	{
		
	    $user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		$this->form_validation->set_rules('packages','packages','required');
		$this->form_validation->set_rules('name','name','required');
		$this->form_validation->set_rules('premium','premium','required');
		$this->form_validation->set_rules('amount','amount','required');
		$this->form_validation->set_rules('pay_date','pay_date','required');
		
		if($this->form_validation->run()){
			$user = $this->common_model->GetSingleData('users',array('email'=>$this->input->post('email')));
			
			$email = $user['email'];
			
			if($email=='')
			{
				$comp_id = "COM".rand(1000,10000)."".$user_id;
				$insert['user_type'] = 2;
				$insert['emp_id'] = $comp_id;
				$insert['comp_id'] = $comp_id;
				$insert['first_name'] = $this->input->post('first_name');
				$insert['last_name'] = $this->input->post('last_name');
				$insert['email'] = $this->input->post('email');
				$insert['password'] = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
				$insert['pw'] = $this->input->post('password');
				$insert['created_by'] = $user_id;
				if($_FILES['image']['name'])
				{
					$upload = $this->Common_function->upload_image('assets/images/users/','image');
					$insert['profile_img'] = $upload['name'];
				}
				$insertid = $this->common_model->InsertData('users',$insert);
				
				if($insertid)
				{
					$insert1['company_id'] = $comp_id;
					$insert1['admin_id'] = $insertid;
					$insert1['name'] = $this->input->post('name');
					$insert1['package_id'] = $this->input->post('packages');
					$insert1['premium'] = $this->input->post('premium');
					$insert1['amount'] = $this->input->post('amount');
					$insert1['pay_date'] = date('Y-m-d', strtotime($this->input->post('pay_date')));
					$insert1['next_pay_date'] = date('Y-m-d', strtotime($this->input->post('next_pay_date')));
					$insert1['created_date'] = date('Y-m-d h:i:s');
					
					$run = $this->common_model->InsertData('companies',$insert1);
					$this->session->set_flashdata('msg','<div class="alert alert-success">Company added successfully!</div>');
					redirect('superadmin/companies');
				}
			}else{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Email already exist!</div>');
				redirect('superadmin/companies');
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
		$this->form_validation->set_rules('name','name','required');
		$this->form_validation->set_rules('premium','premium','required');
		$this->form_validation->set_rules('amount','amount','required');
		$this->form_validation->set_rules('pay_date','pay_date','required');
		
		$companies = $this->common_model->GetSingleData('companies',array('id'=>$id));
		$admin = $this->common_model->GetSingleData('users',array('user_id'=>$id));
		
		if($this->form_validation->run()){
			$insert1['first_name'] = $this->input->post('first_name');
			$insert1['last_name'] = $this->input->post('last_name');
			$insert1['email'] = $this->input->post('email');
			if($_FILES['image']['name']){
					$upload = $this->Common_function->upload_image('assets/images/users/','image');
					$insert1['profile_img'] = $upload['name'];
					}else{
					$insert1['profile_img'] = $admin['profile_img'];
					}
			$run1 = $this->common_model->UpdateData('users',array('user_id'=>$id),$insert1);
			
			
					$insert['name'] = $this->input->post('name');
					$insert['package_id'] = $this->input->post('packages');
					$insert['premium'] = $this->input->post('premium');
					$insert['amount'] = $this->input->post('amount');
					$insert['pay_date'] = date('Y-m-d', strtotime($this->input->post('pay_date')));
					$insert['next_pay_date'] = date('Y-m-d', strtotime($this->input->post('next_pay_date')));
					
					$run = $this->common_model->UpdateData('companies',array('company_id'=>$admin['emp_id']),$insert);
					
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
	
	public function deleteCompany($id)
	{
			//echo $id;die;
			//$run = $this->common_model->DeleteData('companies',array('id'=>$id));
			$companies = $this->common_model->GetSingleData('companies',array('id'=>$id));
			
			$run = $this->common_model->UpdateData('companies',array('id'=>$id),array('status'=>2));
			
			$run1 = $this->common_model->UpdateData('users',array('user_id'=>$companies['admin_id']),array('is_deleted'=>1,'status'=>2));
			///echo $this->db->last_query();
			//print_r($run1); die;
			
			if($run) {
				
				$this->session->set_flashdata('msg','<div class="alert alert-success">Comapny deleted successfully</div>');
                 redirect('superadmin/companies');
							
			} else {
				$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
                 redirect('superadmin/companies');
			}
		 }
		 
		 public function changeStatusCompany($id,$status){
			
			$companies = $this->common_model->GetSingleData('companies',array('id'=>$id));
			$run = $this->common_model->UpdateData('companies',array('id'=>$id),array('status'=>$status));
			$run1 = $this->common_model->UpdateData('users',array('user_id'=>$companies['admin_id']),array('status'=>$status));
			//echo $this->db->last_query();
			if($run) {
				
				$this->session->set_flashdata('msg','<div class="alert alert-success">Comapny Status Changed successfully</div>');
                 redirect('superadmin/companies');
							
			} else {
				$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
                 redirect('superadmin/companies');
			}
		 }
	
	public function pages()
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		$this->load->view('Admin/s_pages');
	}
	
	public function faq_categories()
	{
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
		
	    $this->load->view('Admin/s_email_templates',$data);
	}
	
	public function addemailtemplate()
	{
	    $user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		if($type!=3){ redirect(); }
		
		$this->form_validation->set_rules('template_name','template name','required');
		$this->form_validation->set_rules('description','description','required');
		$this->form_validation->set_rules('subject','subject','required');
		
		if($this->form_validation->run())
		{
			
			$insert['template_name'] = $this->input->post('template_name');
			
			$insert['subject'] = $this->input->post('subject');
			
			$insert['description'] = $this->input->post('description');
			
			$insert['varialbles'] = $this->input->post('varialbles');
			
			$run = $this->common_model->InsertData('email_templates',$insert);
					
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
	
	public function editemailtemplate($id)
	{
	    $user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		if($type!=3){ redirect(); }
		
		$this->form_validation->set_rules('template_name','template name','required');
		$this->form_validation->set_rules('description','description','required');
		$this->form_validation->set_rules('subject','subject','required');
		
		if($this->form_validation->run())
		{
			
			$insert['template_name'] = $this->input->post('template_name');
			
			$insert['subject'] = $this->input->post('subject');
			
			$insert['description'] = $this->input->post('description');
			
			$insert['varialbles'] = $this->input->post('varialbles');
			
			$insert['created_date'] = date('Y-m-d h:i:s');
			
			$run = $this->common_model->UpdateData('email_templates',array('id'=>$id),$insert);
					
			if($run)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success">Email Template added successfully!</div>');
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
	
	public function delete_email_template($id)
	{
		//echo $id; die;
			$run = $this->common_model->DeleteData('email_templates',array('id'=>$id));
			
			if($run) 
			{
				$this->session->set_flashdata('depmsg','<div class="alert alert-success">Email Template deleted successfully</div>');
			} 
			else
			{
				$this->session->set_flashdata('depmsg','<div class="alert alert-success">Something went wrong</div>');
			}
		  redirect('superadmin/email_templates');
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
			
			$insert['publishable_key'] = $this->input->post('publishable_key');
			$insert['stripe_secret'] = $this->input->post('stripe_secret');
			$insert['stripe_webhook_secret'] = $this->input->post('stripe_webhook_secret');
			$insert['stripe_status'] = $this->input->post('radio_default');
			$insert['paypal_client_id'] = $this->input->post('paypal_client_id');
			$insert['paypal_secret_key'] = $this->input->post('paypal_secret_key');
			$insert['environment'] = $this->input->post('environment');
			$insert['paypal_status'] = $this->input->post('radio_default_p');
			$insert['created_date'] = date('Y-m-d h:i:s');
			
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
	
	public function profile()
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		if($type!=3){ redirect(); }
		$data['superadmin'] = $this->common_model->GetSingleData('users',array('user_id'=>$user_id,'user_type'=>3),'user_id');
		
		$this->load->view('Admin/s_profile',$data);
	}
	
	public function addProfileForm()
	{
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
	
	public function changes_password()
	{
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
			$insert['pw'] = $this->input->post('password');
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

	public function bloodgroup()
	{ 
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		$data['bloodgroup'] = $this->common_model->GetAllData('master_bloodgroup',array('status!='=>2),'id');
		$this->load->view('Admin/s_bloodgroup',$data);
	}
	
	public function addBloodgroup()
	{
		
	    $user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		
		$this->form_validation->set_rules('name','name','required');
		
		if($this->form_validation->run()){
			$chk = $this->common_model->GetSingleData('master_bloodgroup',array('description'=>$this->input->post('name')));
			
			if($chk=='')
			{
				
					
					$insert1['description'] = $this->input->post('name');
					$insert1['created_date'] = date('Y-m-d h:i:s');
					
					$run = $this->common_model->InsertData('master_bloodgroup',$insert1);
					$this->session->set_flashdata('msg','<div class="alert alert-success">Bloodgroup added successfully!</div>');
					redirect('superadmin/bloodgroup');
				
			}else{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Bloodgroup already exist!</div>');
				redirect('superadmin/bloodgroup');
			}
		
			
			
		 } else {
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
				redirect('superadmin/bloodgroup');
		}
	}
	
	public function editBloodgroup($id)
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		
		$this->form_validation->set_rules('name','name','required');
		
		if($this->form_validation->run()){
			
					$insert['description'] = $this->input->post('name');
					$run = $this->common_model->UpdateData('master_bloodgroup',array('id'=>$id),$insert);
					
			if($run)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success">Bloodgroup Updated successfully!</div>');
				redirect('superadmin/bloodgroup');
			} 
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
			}
			
			
		 } else {
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
				redirect('superadmin/bloodgroup');
		}
	}

	public function deleteBloodgroup($id)
	{
			$run = $this->common_model->UpdateData('master_bloodgroup',array('id'=>$id),array('status'=>2));
			//echo $this->db->last_query();
			if($run) {
				
				$this->session->set_flashdata('msg','<div class="alert alert-success">Bloodgroup deleted successfully</div>');
                 redirect('superadmin/bloodgroup');
							
			} else {
				$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
                 redirect('superadmin/bloodgroup');
			}
	}

	public function changeStatusBloodgroup($id,$status)
	{
	
		$companies = $this->common_model->GetSingleData('master_bloodgroup',array('id'=>$id));
		$run = $this->common_model->UpdateData('master_bloodgroup',array('id'=>$id),array('status'=>$status));

		//echo $this->db->last_query();
		if($run) {
			
			$this->session->set_flashdata('msg','<div class="alert alert-success">Bloodgroup Status Changed successfully</div>');
				redirect('superadmin/bloodgroup');
						
		} else {
			$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
				redirect('superadmin/bloodgroup');
		}
	}

	public function qualification_level() 
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		$data['q_level'] = $this->common_model->GetAllData('master_qualification_level',array('status!='=>2),'id');
		// echo "<pre>"; print_r($data['q_level']); die;
		$this->load->view('Admin/s_qualification_level',$data);
	}

	public function addQualificationLevel() 
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		
		$this->form_validation->set_rules('qualification_level','Qualification Level','required');
		
		if($this->form_validation->run()){
			$chk = $this->common_model->GetSingleData('master_qualification_level',array('description'=>$this->input->post('qualification_level')));
			
			if($chk=='')
			{
				
					
					$insert1['description'] = $this->input->post('qualification_level');
					$insert1['created_date'] = date('Y-m-d h:i:s');
					
					$run = $this->common_model->InsertData('master_qualification_level',$insert1);
					$this->session->set_flashdata('msg','<div class="alert alert-success">Qualification Level added successfully!</div>');
					redirect('superadmin/qualification_level');
				
			}else{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Qualification Level already exist!</div>');
				redirect('superadmin/qualification_level');
			}
		
			
			
		 } else {
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
				redirect('superadmin/qualification_level');
		}
	}

	public function editQualificationLevel($id)
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		
		$this->form_validation->set_rules('qualification_level','Qualification Level','required');
		
		if($this->form_validation->run()){
			
					$insert['description'] = $this->input->post('qualification_level');
					$run = $this->common_model->UpdateData('master_qualification_level',array('id'=>$id),$insert);
					
			if($run)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success">Qualification Level Updated successfully!</div>');
				redirect('superadmin/qualification_level');
			} 
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
			}
			
			
		 } else {
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
				redirect('superadmin/qualification_level');
		}
	}
	
	public function deleteQualificationLevel($id)
	{
		$run = $this->common_model->UpdateData('master_qualification_level',array('id'=>$id),array('status'=>2));
			//echo $this->db->last_query();
			if($run) {
				
				$this->session->set_flashdata('msg','<div class="alert alert-success">Qualification Level deleted successfully</div>');
                 redirect('superadmin/qualification_level');
							
			} else {
				$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
                 redirect('superadmin/qualification_level');
			}

		 }
		 
		 public function qualification()
		 { 
			 $user_id = $this->session->userdata('user_id');
			 $type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
			 $data['qualification'] = $this->common_model->GetAllData('master_qualification',array('status!='=>2),'id');
			 $this->load->view('Admin/s_qualification',$data);
		 }
		 public function addqualification()
		 {
			 
			 $user_id = $this->session->userdata('user_id');
			 $type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
			 
			 $this->form_validation->set_rules('name','name','required');
			 
			 if($this->form_validation->run()){
				 $chk = $this->common_model->GetSingleData('master_qualification',array('description'=>$this->input->post('name')));
				 
				 if($chk=='')
				 {
					 
						 
						 $insert1['description'] = $this->input->post('name');
						 $insert1['created_date'] = date('Y-m-d h:i:s');
						 
						 $run = $this->common_model->InsertData('master_qualification',$insert1);
						 $this->session->set_flashdata('msg','<div class="alert alert-success">qualification added successfully!</div>');
						 redirect('superadmin/qualification');
					 
				 }else{
					 $this->session->set_flashdata('msg','<div class="alert alert-danger">qualification already exist!</div>');
					 redirect('superadmin/qualification');
				 }
			 
				 
				 
			  } else {
					 $this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
					 redirect('superadmin/qualification');
			 }
		 }
		 
		 public function editqualification($id)
		 {
			 $user_id = $this->session->userdata('user_id');
			 $type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
			 
			 $this->form_validation->set_rules('name','name','required');
			 
			 if($this->form_validation->run()){
				 
						 $insert['description'] = $this->input->post('name');
						 $run = $this->common_model->UpdateData('master_qualification',array('id'=>$id),$insert);
						 
				 if($run)
				 {
					 $this->session->set_flashdata('msg','<div class="alert alert-success">qualification Updated successfully!</div>');
					 redirect('superadmin/qualification');
				 } 
				 else
				 {
					 $this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
				 }
				 
				 
			  } else {
					 $this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
					 redirect('superadmin/qualification');
			 }
		 }
	 
		 public function deletequalification($id)
		 {
				 $run = $this->common_model->UpdateData('master_qualification',array('id'=>$id),array('status'=>2));
				 //echo $this->db->last_query();
				 if($run) {
					 
					 $this->session->set_flashdata('msg','<div class="alert alert-success">qualification deleted successfully</div>');
					  redirect('superadmin/qualification');
								 
				 } else {
					 $this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
					  redirect('superadmin/qualification');
				 }
			  }
	 
			  public function changeStatusqualification($id,$status){
				 
				 $companies = $this->common_model->GetSingleData('master_qualification',array('id'=>$id));
				 $run = $this->common_model->UpdateData('master_qualification',array('id'=>$id),array('status'=>$status));
			 
				 //echo $this->db->last_query();
				 if($run) {
					 
					 $this->session->set_flashdata('msg','<div class="alert alert-success">qualification Status Changed successfully</div>');
					  redirect('superadmin/qualification');
								 
				 } else {
					 $this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
					  redirect('superadmin/qualification');
				 }
			  }
			  public function confirmation_reason()
			  { 
				  $user_id = $this->session->userdata('user_id');
				  $type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
				  $data['confirmation_reason'] = $this->common_model->GetAllData('master_confirmation_reason',array('status!='=>2),'id');
				  $this->load->view('Admin/s_confirmation_reason',$data);
			  }
			  public function addconfirmation_reason()
			  {
				  
				  $user_id = $this->session->userdata('user_id');
				  $type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
				  
				  $this->form_validation->set_rules('name','name','required');
				  
				  if($this->form_validation->run()){
					  $chk = $this->common_model->GetSingleData('master_confirmation_reason',array('description'=>$this->input->post('name')));
					  
					  if($chk=='')
					  {
						  
							  
							  $insert1['description'] = $this->input->post('name');
							  $insert1['created_date'] = date('Y-m-d h:i:s');
							  
							  $run = $this->common_model->InsertData('master_confirmation_reason',$insert1);
							  $this->session->set_flashdata('msg','<div class="alert alert-success">confirmation reason added successfully!</div>');
							  redirect('superadmin/confirmation_reason');
						  
					  }else{
						  $this->session->set_flashdata('msg','<div class="alert alert-danger">confirmation already exist!</div>');
						  redirect('superadmin/confirmation_reason');
					  }
				  
					  
					  
				   } else {
						  $this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
						  redirect('superadmin/confirmation_reason');
				  }
			  }
			  
			  public function editconfirmation_reason($id)
			  {
				  $user_id = $this->session->userdata('user_id');
				  $type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
				  
				  $this->form_validation->set_rules('name','name','required');
				  
				  if($this->form_validation->run()){
					  
							  $insert['description'] = $this->input->post('name');
							  $run = $this->common_model->UpdateData('master_confirmation_reason',array('id'=>$id),$insert);
							  
					  if($run)
					  {
						  $this->session->set_flashdata('msg','<div class="alert alert-success">confirmation reason Updated successfully!</div>');
						  redirect('superadmin/confirmation_reason');
					  } 
					  else
					  {
						  $this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
					  }
					  
					  
				   } else {
						  $this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
						  redirect('superadmin/confirmation_reason');
				  }
			  }
		  
			  public function deleteconfirmation_reason($id)
			  {
					  $run = $this->common_model->UpdateData('master_confirmation_reason',array('id'=>$id),array('status'=>2));
					  //echo $this->db->last_query();
					  if($run) {
						  
						  $this->session->set_flashdata('msg','<div class="alert alert-success">confirmation reason deleted successfully</div>');
						   redirect('superadmin/confirmation_reason');
									  
					  } else {
						  $this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
						   redirect('superadmin/confirmation_reason');
					  }
				   }
		  
				   public function changeStatusconfirmation_reason($id,$status){
					  
					  $companies = $this->common_model->GetSingleData('master_confirmation_reason',array('id'=>$id));
					  $run = $this->common_model->UpdateData('master_confirmation_reason',array('id'=>$id),array('status'=>$status));
				  
					  //echo $this->db->last_query();
					  if($run) {
						  
						  $this->session->set_flashdata('msg','<div class="alert alert-success">confirmation reason Status Changed successfully</div>');
						   redirect('superadmin/confirmation_reason');
									  
					  } else {
						  $this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
						   redirect('superadmin/confirmation_reason');
					  }
				   }
				   public function currency()
				   { 
					   $user_id = $this->session->userdata('user_id');
					   $type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
					   $data['currency'] = $this->common_model->GetAllData('master_currency',array('status!='=>2),'id');
					   $this->load->view('Admin/s_currency',$data);
				   }
				   public function addcurrency()
				   {
					   
					   $user_id = $this->session->userdata('user_id');
					   $type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
					   
					   $this->form_validation->set_rules('name','name','required');
					   
					   if($this->form_validation->run()){
						   $chk = $this->common_model->GetSingleData('master_currency',array('description'=>$this->input->post('name')));
						   
						   if($chk=='')
						   {
							   
								   
								   $insert1['description'] = $this->input->post('name');
								   $insert1['created_date'] = date('Y-m-d h:i:s');
								   
								   $run = $this->common_model->InsertData('master_currency',$insert1);
								   $this->session->set_flashdata('msg','<div class="alert alert-success">currency reason added successfully!</div>');
								   redirect('superadmin/currency');
							   
						   }else{
							   $this->session->set_flashdata('msg','<div class="alert alert-danger">currency already exist!</div>');
							   redirect('superadmin/currency');
						   }
					   
						   
						   
						} else {
							   $this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
							   redirect('superadmin/currency');
					   }
				   }
				   
				   public function editcurrency($id)
				   {
					   $user_id = $this->session->userdata('user_id');
					   $type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
					   
					   $this->form_validation->set_rules('name','name','required');
					   
					   if($this->form_validation->run()){
						   
								   $insert['description'] = $this->input->post('name');
								   $run = $this->common_model->UpdateData('master_currency',array('id'=>$id),$insert);
								   
						   if($run)
						   {
							   $this->session->set_flashdata('msg','<div class="alert alert-success">currency reason Updated successfully!</div>');
							   redirect('superadmin/currency');
						   } 
						   else
						   {
							   $this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
						   }
						   
						   
						} else {
							   $this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
							   redirect('superadmin/currency');
					   }
				   }
			   
				   public function deletecurrency($id)
				   {
						   $run = $this->common_model->UpdateData('master_currency',array('id'=>$id),array('status'=>2));
						   //echo $this->db->last_query();
						   if($run) {
							   
							   $this->session->set_flashdata('msg','<div class="alert alert-success">currency reason deleted successfully</div>');
								redirect('superadmin/currency');
										   
						   } else {
							   $this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
								redirect('superadmin/currency');
						   }
						}
			   
						public function changeStatuscurrency($id,$status){
						   
						   $companies = $this->common_model->GetSingleData('master_currency',array('id'=>$id));
						   $run = $this->common_model->UpdateData('master_currency',array('id'=>$id),array('status'=>$status));
					   
						   //echo $this->db->last_query();
						   if($run) {
							   
							   $this->session->set_flashdata('msg','<div class="alert alert-success">currency reason Status Changed successfully</div>');
								redirect('superadmin/currency');
										   
						   } else {
							   $this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
								redirect('superadmin/currency');
						   }
						}

	
	
	public function changeStatusQualificationLevel($id,$status)
	{
	
		$companies = $this->common_model->GetSingleData('master_qualification_level',array('id'=>$id));
		$run = $this->common_model->UpdateData('master_qualification_level',array('id'=>$id),array('status'=>$status));

		//echo $this->db->last_query();
		if($run) {
			
			$this->session->set_flashdata('msg','<div class="alert alert-success">Qualification Level Status Changed successfully</div>');
				redirect('superadmin/qualification_level');
						
		} else {
			$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
				redirect('superadmin/qualification_level');
		}
	}

	// bank 
	public function bank() 
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		$data['bank'] = $this->common_model->GetAllData('master_bank',array('status!='=>2),'id');
		// echo "<pre>"; print_r($data['q_level']); die;
		$this->load->view('Admin/s_bank',$data);
	}

	public function addBank() 
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		
		$this->form_validation->set_rules('bank_name','Bank','required');
		
		if($this->form_validation->run()){
			$chk = $this->common_model->GetSingleData('master_bank',array('description'=>$this->input->post('bank_name')));
			
			if($chk=='')
			{
				
					
					$insert1['description'] = $this->input->post('bank_name');
					$insert1['created_date'] = date('Y-m-d h:i:s');
					
					$run = $this->common_model->InsertData('master_bank',$insert1);
					$this->session->set_flashdata('msg','<div class="alert alert-success">Bank added successfully!</div>');
					redirect('superadmin/bank');
				
			}else{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Bank already exist!</div>');
				redirect('superadmin/bank');
			}
		
			
			
		 } else {
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
				redirect('superadmin/qualification_level');
		}
	}

	public function editBank($id)
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		
		$this->form_validation->set_rules('bank_name','Bank','required');
		
		if($this->form_validation->run()){
			
					$insert['description'] = $this->input->post('bank_name');
					$run = $this->common_model->UpdateData('master_bank',array('id'=>$id),$insert);
					
			if($run)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success">Bank Updated successfully!</div>');
				redirect('superadmin/bank');
			} 
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
			}
			
			
		 } else {
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
				redirect('superadmin/bank');
		}
	}
	
	public function deleteBank($id)
	{
		$run = $this->common_model->UpdateData('master_bank',array('id'=>$id),array('status'=>2));
			//echo $this->db->last_query();
			if($run) {
				
				$this->session->set_flashdata('msg','<div class="alert alert-success">Bank deleted successfully</div>');
                 redirect('superadmin/bank');
							
			} else {
				$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
                 redirect('superadmin/bank');
			}
	}
	
	public function changeStatusBank($id,$status)
	{
	
		$companies = $this->common_model->GetSingleData('master_bank',array('id'=>$id));
		$run = $this->common_model->UpdateData('master_bank',array('id'=>$id),array('status'=>$status));

		//echo $this->db->last_query();
		if($run) {
			
			$this->session->set_flashdata('msg','<div class="alert alert-success">Bank Status Changed successfully</div>');
				redirect('superadmin/bank');
						
		} else {
			$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
				redirect('superadmin/bank');
		}
	}

	//bank account type 
	public function bankAccountType() 
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		$data['bankAccountType'] = $this->common_model->GetAllData('master_bankAccount_type',array('status!='=>2),'id');
		// echo "<pre>"; print_r($data['bankAccountType']); die;
		$this->load->view('Admin/s_bankAccountType',$data);
	}

	public function addbankAccountType() 
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		
		$this->form_validation->set_rules('bank_account_type','Bank Account Type','required');
		
		if($this->form_validation->run()){
			$chk = $this->common_model->GetSingleData('master_bankAccount_type',array('description'=>$this->input->post('bank_account_type')));
			
			if($chk=='')
			{
				
					
					$insert1['description'] = $this->input->post('bank_account_type');
					$insert1['created_date'] = date('Y-m-d h:i:s');
					
					$run = $this->common_model->InsertData('master_bankAccount_type',$insert1);
					$this->session->set_flashdata('msg','<div class="alert alert-success">Bank account type added successfully!</div>');
					redirect('superadmin/bankAccountType');
				
			}else{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Bank account type already exist!</div>');
				redirect('superadmin/bankAccountType');
			}
		
			
			
		 } else {
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
				redirect('superadmin/bankAccountType');
		}
	}

	public function editbankAccountType($id)
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		
		$this->form_validation->set_rules('bank_account_type','Bank account type','required');
		
		if($this->form_validation->run()){
			
					$insert['description'] = $this->input->post('bank_account_type');
					$run = $this->common_model->UpdateData('master_bankAccount_type',array('id'=>$id),$insert);
					
			if($run)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success">Bank account type Updated successfully!</div>');
				redirect('superadmin/bankAccountType');
			} 
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
			}
			
			
		 } else {
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
				redirect('superadmin/bankAccountType');
		}
	}
	
	public function deletebankAccountType($id)
	{
		$run = $this->common_model->UpdateData('master_bankAccount_type',array('id'=>$id),array('status'=>2));
			//echo $this->db->last_query();
			if($run) {
				
				$this->session->set_flashdata('msg','<div class="alert alert-success">Bank account type deleted successfully</div>');
                 redirect('superadmin/bankAccountType');
							
			} else {
				$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
                 redirect('superadmin/bankAccountType');
			}
	}
	
	public function changeStatusbankAccountType($id,$status)
	{
	
		$companies = $this->common_model->GetSingleData('master_bankAccount_type',array('id'=>$id));
		$run = $this->common_model->UpdateData('master_bankAccount_type',array('id'=>$id),array('status'=>$status));

		//echo $this->db->last_query();
		if($run) {
			
			$this->session->set_flashdata('msg','<div class="alert alert-success">Bank account type Status Changed successfully</div>');
				redirect('superadmin/bankAccountType');
						
		} else {
			$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
				redirect('superadmin/bankAccountType');
		}
	}

	//bulletin category type 
	public function bulletin_category() 
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		$data['bulletin_category'] = $this->common_model->GetAllData('master_bulletin_category',array('status!='=>2),'id');
		// echo "<pre>"; print_r($data['bankAccountType']); die;
		$this->load->view('Admin/s_bulletin_category',$data);
	}

	public function addbulletin_category() 
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		
		$this->form_validation->set_rules('bulletin_category','Bulletin Category','required');
		
		if($this->form_validation->run()){
			$chk = $this->common_model->GetSingleData('master_bulletin_category',array('description'=>$this->input->post('bulletin_category')));
			
			if($chk=='')
			{
				
					
					$insert1['description'] = $this->input->post('bulletin_category');
					$insert1['created_date'] = date('Y-m-d h:i:s');
					
					$run = $this->common_model->InsertData('master_bulletin_category',$insert1);
					$this->session->set_flashdata('msg','<div class="alert alert-success">Bulletin Category added successfully!</div>');
					redirect('superadmin/bulletin_category');
				
			}else{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Bulletin Category already exist!</div>');
				redirect('superadmin/bulletin_category');
			}
		
			
			
		 } else {
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
				redirect('superadmin/bulletin_category');
		}
	}

	public function editbulletin_category($id)
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		
		$this->form_validation->set_rules('bulletin_category','Bulletin Category','required');
		
		if($this->form_validation->run()){
			
					$insert['description'] = $this->input->post('bulletin_category');
					$run = $this->common_model->UpdateData('master_bulletin_category',array('id'=>$id),$insert);
					
			if($run)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success">Bulletin Category Updated successfully!</div>');
				redirect('superadmin/bulletin_category');
			} 
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
			}
			
			
		 } else {
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
				redirect('superadmin/bulletin_category');
		}
	}

	
	public function deletebulletin_category($id)
	{
		$run = $this->common_model->UpdateData('master_bulletin_category',array('id'=>$id),array('status'=>2));
			//echo $this->db->last_query();
			if($run) {
				
				$this->session->set_flashdata('msg','<div class="alert alert-success">Bulletin Category deleted successfully</div>');
                 redirect('superadmin/bulletin_category');
							
			} else {
				$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
                 redirect('superadmin/bulletin_category');
			}
	}
	
	public function changeStatusbulletin_category($id,$status)
	{
	
		$companies = $this->common_model->GetSingleData('master_bulletin_category',array('id'=>$id));
		$run = $this->common_model->UpdateData('master_bulletin_category',array('id'=>$id),array('status'=>$status));

		//echo $this->db->last_query();
		if($run) {
			
			$this->session->set_flashdata('msg','<div class="alert alert-success">Bulletin Category Status Changed successfully</div>');
				redirect('superadmin/bulletin_category');
						
		} else {
			$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
				redirect('superadmin/bulletin_category');
		}
	}

	//countryy
	public function country() 
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		$data['country'] = $this->common_model->GetAllData('master_super_country',array('status!='=>2),'id');
		// echo "<pre>"; print_r($data['bankAccountType']); die;
		$this->load->view('Admin/s_country',$data);
	}

	public function addcountry() 
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		
		$this->form_validation->set_rules('country','Country','required');
		
		if($this->form_validation->run()){
			$chk = $this->common_model->GetSingleData('master_super_country',array('description'=>$this->input->post('country')));
			
			if($chk=='')
			{
				
					
					$insert1['description'] = $this->input->post('country');
					$insert1['created_date'] = date('Y-m-d h:i:s');
					
					$run = $this->common_model->InsertData('master_super_country',$insert1);
					$this->session->set_flashdata('msg','<div class="alert alert-success">Country added successfully!</div>');
					redirect('superadmin/country');
				
			}else{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Country already exist!</div>');
				redirect('superadmin/country');
			}
		
			
			
		 } else {
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
				redirect('superadmin/country');
		}
	}

	public function editcountry($id)
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		
		$this->form_validation->set_rules('country','Country','required');
		
		if($this->form_validation->run()){
			
					$insert['description'] = $this->input->post('country');
					$run = $this->common_model->UpdateData('master_super_country',array('id'=>$id),$insert);
					
			if($run)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success">Country Updated successfully!</div>');
				redirect('superadmin/country');
			} 
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
			}
			
			
		 } else {
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
				redirect('superadmin/country');
		}
	}
	
	public function deletecountry($id)
	{
		$run = $this->common_model->UpdateData('master_super_country',array('id'=>$id),array('status'=>2));
			//echo $this->db->last_query();
			if($run) {
				
				$this->session->set_flashdata('msg','<div class="alert alert-success">Country deleted successfully</div>');
                 redirect('superadmin/country');
							
			} else {
				$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
                 redirect('superadmin/country');
			}
	}
	
	public function changeStatuscountry($id,$status)
	{
	
		$companies = $this->common_model->GetSingleData('master_super_country',array('id'=>$id));
		$run = $this->common_model->UpdateData('master_super_country',array('id'=>$id),array('status'=>$status));

		//echo $this->db->last_query();
		if($run) {
			
			$this->session->set_flashdata('msg','<div class="alert alert-success">Country Status Changed successfully</div>');
				redirect('superadmin/country');
						
		} else {
			$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
				redirect('superadmin/country');
		}
	}
	//hold salary 
	public function hold_salary() 
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		$data['hold_salary'] = $this->common_model->GetAllData('master_hold_salary',array('status!='=>2),'id');
		// echo "<pre>"; print_r($data['bankAccountType']); die;
		$this->load->view('Admin/s_hold_salary',$data);
	}

	public function addhold_salary() 
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		
		$this->form_validation->set_rules('hold_salary','Hold Salary payout reason','required');
		
		if($this->form_validation->run()){
			$chk = $this->common_model->GetSingleData('master_hold_salary',array('description'=>$this->input->post('hold_salary')));
			
			if($chk=='')
			{
				
					
					$insert1['description'] = $this->input->post('hold_salary');
					$insert1['created_date'] = date('Y-m-d h:i:s');
					
					$run = $this->common_model->InsertData('master_hold_salary',$insert1);
					$this->session->set_flashdata('msg','<div class="alert alert-success">Hold Salary payout reason added successfully!</div>');
					redirect('superadmin/hold_salary');
				
			}else{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Hold Salary payout reason already exist!</div>');
				redirect('superadmin/hold_salary');
			}
		
			
			
		 } else {
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
				redirect('superadmin/hold_salary');
		}
	}

	public function edithold_salary($id)
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		
		$this->form_validation->set_rules('hold_salary','Hold Salary payout reason','required');
		
		if($this->form_validation->run()){
			
					$insert['description'] = $this->input->post('hold_salary');
					$run = $this->common_model->UpdateData('master_hold_salary',array('id'=>$id),$insert);
					
			if($run)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success">Hold Salary payout reason Updated successfully!</div>');
				redirect('superadmin/hold_salary');
			} 
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
			}
			
			
		 } else {
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
				redirect('superadmin/hold_salary');
		}
	}

	
	public function deletehold_salary($id)
	{
		$run = $this->common_model->UpdateData('master_hold_salary',array('id'=>$id),array('status'=>2));
			//echo $this->db->last_query();
			if($run) {
				
				$this->session->set_flashdata('msg','<div class="alert alert-success">Hold Salary payout reason  deleted successfully</div>');
                 redirect('superadmin/hold_salary');
							
			} else {
				$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
                 redirect('superadmin/hold_salary');
			}
	}
	
	public function changeStatushold_salary($id,$status)
	{
	
		$companies = $this->common_model->GetSingleData('master_hold_salary',array('id'=>$id));
		$run = $this->common_model->UpdateData('master_hold_salary',array('id'=>$id),array('status'=>$status));

		//echo $this->db->last_query();
		if($run) {
			
			$this->session->set_flashdata('msg','<div class="alert alert-success">Hold Salary payout reason Status Changed successfully</div>');
				redirect('superadmin/hold_salary');
						
		} else {
			$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
				redirect('superadmin/hold_salary');
		}
	}
	//other incomes
	public function other_incomes() 
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		$data['other_incomes'] = $this->common_model->GetAllData('master_other_incomes',array('status!='=>2),'id');
		// echo "<pre>"; print_r($data['bankAccountType']); die;
		$this->load->view('Admin/s_other_incomes',$data);
	}

	public function addother_incomes() 
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		
		$this->form_validation->set_rules('other_incomes','Other Incomes','required');
		
		if($this->form_validation->run()){
			$chk = $this->common_model->GetSingleData('master_other_incomes',array('other_incomes'=>$this->input->post('other_incomes')));
			
			if($chk=='')
			{
				
					
					$insert1['other_incomes'] = $this->input->post('other_incomes');
					$insert1['created_date'] = date('Y-m-d h:i:s');
					
					$run = $this->common_model->InsertData('master_other_incomes',$insert1);
					$this->session->set_flashdata('msg','<div class="alert alert-success">Other Incomes added successfully!</div>');
					redirect('superadmin/other_incomes');
				
			}else{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Other Incomes already exist!</div>');
				redirect('superadmin/other_incomes');
			}
		
			
			
		 } else {
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
				redirect('superadmin/other_incomes');
		}
	}


		//emp doc category
		public function empDocCategory() 
		{
			$user_id = $this->session->userdata('user_id');
			$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
			$data['empDoc'] = $this->common_model->GetAllData('master_empdoccategory',array('status!='=>2),'id');
			// echo "<pre>"; print_r($data['bankAccountType']); die;
			$this->load->view('Admin/s_empDocCategory',$data);
		}
	
		public function addempDocCategory() 
		{
			$user_id = $this->session->userdata('user_id');
			$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
			
			$this->form_validation->set_rules('empDocCategory','Emp Doc Category','required');
			
			if($this->form_validation->run()){
				$chk = $this->common_model->GetSingleData('master_empdoccategory',array('description'=>$this->input->post('empDocCategory')));
				
				if($chk=='')
				{
					
						
						$insert1['description'] = $this->input->post('empDocCategory');
						$insert1['created_date'] = date('Y-m-d h:i:s');
						
						$run = $this->common_model->InsertData('master_empdoccategory',$insert1);
						$this->session->set_flashdata('msg','<div class="alert alert-success">Emp Doc Category added successfully!</div>');
						redirect('superadmin/empDocCategory');
					
				}else{
					$this->session->set_flashdata('msg','<div class="alert alert-danger">Emp Doc Category already exist!</div>');
					redirect('superadmin/empDocCategory');
				}
			
				
				
			 } else {
					$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
					redirect('superadmin/country');
			}
		}
	
		public function editempDocCategory($id)
		{
			$user_id = $this->session->userdata('user_id');
			$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
			
			$this->form_validation->set_rules('empDocCategory','Emp Doc Category','required');
			
			if($this->form_validation->run()){
				
						$insert['description'] = $this->input->post('empDocCategory');
						$run = $this->common_model->UpdateData('master_empdoccategory',array('id'=>$id),$insert);
						
				if($run)
				{
					$this->session->set_flashdata('msg','<div class="alert alert-success">Emp Doc Category Updated successfully!</div>');
					redirect('superadmin/empDocCategory');
				} 
				else
				{
					$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
				}
				
				
			 } else {
					$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
					redirect('superadmin/empDocCategory');
			}
		}
		
		public function deleteempDocCategory($id)
		{
			$run = $this->common_model->UpdateData('master_empdoccategory',array('id'=>$id),array('status'=>2));
				//echo $this->db->last_query();
				if($run) {
					
					$this->session->set_flashdata('msg','<div class="alert alert-success">Emp Doc Category deleted successfully</div>');
					 redirect('superadmin/empDocCategory');
								
				} else {
					$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
					 redirect('superadmin/empDocCategory');
				}
		}
		
		public function changeStatusempDocCategory($id,$status)
		{
		
			$companies = $this->common_model->GetSingleData('master_empdoccategory',array('id'=>$id));
			$run = $this->common_model->UpdateData('master_empdoccategory',array('id'=>$id),array('status'=>$status));
	
			//echo $this->db->last_query();
			if($run) {
				
				$this->session->set_flashdata('msg','<div class="alert alert-success">Emp Doc Category Status Changed successfully</div>');
					redirect('superadmin/empDocCategory');
							
			} else {
				$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
					redirect('superadmin/empDocCategory');
			}
		}

		//emp status
		public function empStatus() 
		{
			$user_id = $this->session->userdata('user_id');
			$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
			$data['empStatus'] = $this->common_model->GetAllData('master_empstatus',array('status!='=>2),'id');
			// echo "<pre>"; print_r($data['bankAccountType']); die;
			$this->load->view('Admin/s_empStatus',$data);
		}
	
		public function addempStatus() 
		{
			$user_id = $this->session->userdata('user_id');
			$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
			
			$this->form_validation->set_rules('empStatus','Employee Status','required');
			
			if($this->form_validation->run()){
				$chk = $this->common_model->GetSingleData('master_empstatus',array('description'=>$this->input->post('empStatus')));
				
				if($chk=='')
				{
					
						
						$insert1['description'] = $this->input->post('empStatus');
						$insert1['created_date'] = date('Y-m-d h:i:s');
						
						$run = $this->common_model->InsertData('master_empstatus',$insert1);
						$this->session->set_flashdata('msg','<div class="alert alert-success">Employee Status added successfully!</div>');
						redirect('superadmin/empStatus');
					
				}else{
					$this->session->set_flashdata('msg','<div class="alert alert-danger">Employee Status already exist!</div>');
					redirect('superadmin/empStatus');
				}
			
				
				
			 } else {
					$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
					redirect('superadmin/empStatus');
			}
		}
	
		public function editempStatus($id)
		{
			$user_id = $this->session->userdata('user_id');
			$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
			
			$this->form_validation->set_rules('empStatus','Employee Status','required');
			
			if($this->form_validation->run()){
				
						$insert['description'] = $this->input->post('empStatus');
						$run = $this->common_model->UpdateData('master_empstatus',array('id'=>$id),$insert);
						
				if($run)
				{
					$this->session->set_flashdata('msg','<div class="alert alert-success">Employee Status Updated successfully!</div>');
					redirect('superadmin/empStatus');
				} 
				else
				{
					$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
				}
				
				
			 } else {
					$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
					redirect('superadmin/empStatus');
			}
		}
		
		public function deleteempStatus($id)
		{
			$run = $this->common_model->UpdateData('master_empstatus',array('id'=>$id),array('status'=>2));
				//echo $this->db->last_query();
				if($run) {
					
					$this->session->set_flashdata('msg','<div class="alert alert-success">Employee Status deleted successfully</div>');
					 redirect('superadmin/empStatus');
								
				} else {
					$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
					 redirect('superadmin/empStatus');
				}
		}
		
		public function changeStatusempStatus($id,$status)
		{
		
			$companies = $this->common_model->GetSingleData('master_empstatus',array('id'=>$id));
			$run = $this->common_model->UpdateData('master_empstatus',array('id'=>$id),array('status'=>$status));
	
			//echo $this->db->last_query();
			if($run) {
				
				$this->session->set_flashdata('msg','<div class="alert alert-success">Status of Employee Status Changed successfully</div>');
					redirect('superadmin/empStatus');
							
			} else {
				$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
					redirect('superadmin/empStatus');
			}
		}

//emp resignation reason

public function empResignationReason() 
{
	$user_id = $this->session->userdata('user_id');
	$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
	$data['empResignationReason'] = $this->common_model->GetAllData('master_empresignationreason',array('status!='=>2),'id');
	// echo "<pre>"; print_r($data['bankAccountType']); die;
	$this->load->view('Admin/s_empResignationReason',$data);
}

public function addempResignationReason() 
{
	$user_id = $this->session->userdata('user_id');
	$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
	
	$this->form_validation->set_rules('empResignationReason','Employee Resignation Reason
','required');
	
	if($this->form_validation->run()){
		$chk = $this->common_model->GetSingleData('master_empresignationreason',array('description'=>$this->input->post('empResignationReason')));
		
		if($chk=='')
		{
			
				
				$insert1['description'] = $this->input->post('empResignationReason');
				$insert1['created_date'] = date('Y-m-d h:i:s');
				
				$run = $this->common_model->InsertData('master_empresignationreason',$insert1);
				$this->session->set_flashdata('msg','<div class="alert alert-success">Employee Resignation Reason added successfully!</div>');
				redirect('superadmin/empResignationReason');
			
		}else{
			$this->session->set_flashdata('msg','<div class="alert alert-danger">Employee Resignation Reason already exist!</div>');
			redirect('superadmin/empResignationReason');
		}
	
		
		
	 } else {
			$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
			redirect('superadmin/empResignationReason');
	}
}

public function editempResignationReason($id)
{
	$user_id = $this->session->userdata('user_id');
	$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
	
	$this->form_validation->set_rules('empResignationReason','Employee Resignation Reason','required');
	
	if($this->form_validation->run()){
		
				$insert['description'] = $this->input->post('empResignationReason');
				$run = $this->common_model->UpdateData('master_empresignationreason',array('id'=>$id),$insert);
				
		if($run)
		{
			$this->session->set_flashdata('msg','<div class="alert alert-success">Employee Resignation Reason Updated successfully!</div>');
			redirect('superadmin/empResignationReason');
		} 
		else
		{
			$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
		}
		
		
	 } else {
			$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
			redirect('superadmin/empResignationReason');
	}
}

public function deleteempResignationReason($id)
{
	$run = $this->common_model->UpdateData('master_empresignationreason',array('id'=>$id),array('status'=>2));
		//echo $this->db->last_query();
		if($run) {
			
			$this->session->set_flashdata('msg','<div class="alert alert-success">Employee Resignation Reason deleted successfully</div>');
			 redirect('superadmin/empResignationReason');
						
		} else {
			$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
			 redirect('superadmin/empResignationReason');
		}
}

public function changeStatusempResignationReason($id,$status)
{

	$companies = $this->common_model->GetSingleData('master_empresignationreason',array('id'=>$id));
	$run = $this->common_model->UpdateData('master_empresignationreason',array('id'=>$id),array('status'=>$status));

	//echo $this->db->last_query();
	if($run) {
		
		$this->session->set_flashdata('msg','<div class="alert alert-success">Employee Resignation Reason Status Changed successfully</div>');
			redirect('superadmin/empResignationReason');
					
	} else {
		$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
			redirect('superadmin/empResignationReason');
	}
}

//forms category
public function formsCategory() 
{
	$user_id = $this->session->userdata('user_id');
	$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
	$data['formsCategory'] = $this->common_model->GetAllData('master_formscategory',array('status!='=>2),'id');
	// echo "<pre>"; print_r($data['bankAccountType']); die;
	$this->load->view('Admin/s_formsCategory',$data);
}

public function addformsCategory() 
{
	$user_id = $this->session->userdata('user_id');
	$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
	
	$this->form_validation->set_rules('formsCategory','Forms Category','required');
	
	if($this->form_validation->run()){
		$chk = $this->common_model->GetSingleData('master_formscategory',array('description'=>$this->input->post('formsCategory')));
		
		if($chk=='')
		{
			
				
				$insert1['description'] = $this->input->post('formsCategory');
				$insert1['created_date'] = date('Y-m-d h:i:s');
				
				$run = $this->common_model->InsertData('master_formscategory',$insert1);
				$this->session->set_flashdata('msg','<div class="alert alert-success">Forms Category added successfully!</div>');
				redirect('superadmin/formsCategory');
			
		}else{
			$this->session->set_flashdata('msg','<div class="alert alert-danger">Forms Category already exist!</div>');
			redirect('superadmin/formsCategory');
		}
	
		
		
	 } else {
			$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
			redirect('superadmin/formsCategory');
	}
}

public function editformsCategory($id)
{
	$user_id = $this->session->userdata('user_id');
	$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
	
	$this->form_validation->set_rules('formsCategory','Forms Category','required');
	
	if($this->form_validation->run()){
		
				$insert['description'] = $this->input->post('formsCategory');
				$run = $this->common_model->UpdateData('master_formscategory',array('id'=>$id),$insert);
				
		if($run)
		{
			$this->session->set_flashdata('msg','<div class="alert alert-success">Forms Category Updated successfully!</div>');
			redirect('superadmin/formsCategory');
		} 
		else
		{
			$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
		}
		
		
	 } else {
			$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
			redirect('superadmin/formsCategory');
	}
}

public function deleteformsCategory($id)
{
	$run = $this->common_model->UpdateData('master_formscategory',array('id'=>$id),array('status'=>2));
		//echo $this->db->last_query();
		if($run) {
			
			$this->session->set_flashdata('msg','<div class="alert alert-success">Forms Category deleted successfully</div>');
			 redirect('superadmin/formsCategory');
						
		} else {
			$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
			 redirect('superadmin/formsCategory');
		}
}

public function changeStatusformsCategory($id,$status)
{

	$companies = $this->common_model->GetSingleData('master_formscategory',array('id'=>$id));
	$run = $this->common_model->UpdateData('master_formscategory',array('id'=>$id),array('status'=>$status));

	//echo $this->db->last_query();
	if($run) {
		
		$this->session->set_flashdata('msg','<div class="alert alert-success">Forms Category Status Changed successfully</div>');
			redirect('superadmin/formsCategory');
					
	} else {
		$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
			redirect('superadmin/formsCategory');
	}
}

//pf schemes
public function pfSchemes() 
{
	$user_id = $this->session->userdata('user_id');
	$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
	$data['pfSchemes'] = $this->common_model->GetAllData('master_pfschemes',array('status!='=>2),'id');
	// echo "<pre>"; print_r($data['bankAccountType']); die;
	$this->load->view('Admin/s_pfSchemes',$data);
}

public function addpfSchemes() 
{
	$user_id = $this->session->userdata('user_id');
	$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
	
	$this->form_validation->set_rules('pfSchemes','PF Scheme','required');
	
	if($this->form_validation->run()){
		$chk = $this->common_model->GetSingleData('master_pfschemes',array('description'=>$this->input->post('pfSchemes')));
		
		if($chk=='')
		{
			
				
				$insert1['description'] = $this->input->post('pfSchemes');
				$insert1['created_date'] = date('Y-m-d h:i:s');
				
				$run = $this->common_model->InsertData('master_pfschemes',$insert1);
				$this->session->set_flashdata('msg','<div class="alert alert-success">PF Scheme added successfully!</div>');
				redirect('superadmin/pfSchemes');
			
		}else{
			$this->session->set_flashdata('msg','<div class="alert alert-danger">PF Scheme already exist!</div>');
			redirect('superadmin/pfSchemes');
		}
	
		
		
	 } else {
			$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
			redirect('superadmin/pfSchemes');
	}
}

public function editpfSchemes($id)
{
	$user_id = $this->session->userdata('user_id');
	$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
	
	$this->form_validation->set_rules('pfSchemes','PF Scheme','required');
	
	if($this->form_validation->run()){
		
				$insert['description'] = $this->input->post('pfSchemes');
				$run = $this->common_model->UpdateData('master_pfschemes',array('id'=>$id),$insert);
				
		if($run)
		{
			$this->session->set_flashdata('msg','<div class="alert alert-success">PF Scheme Updated successfully!</div>');
			redirect('superadmin/pfSchemes');
		} 
		else
		{
			$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
		}
		
		
	 } else {
			$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
			redirect('superadmin/pfSchemes');
	}
}

public function deletepfSchemes($id)
{
	$run = $this->common_model->UpdateData('master_pfschemes',array('id'=>$id),array('status'=>2));
		//echo $this->db->last_query();
		if($run) {
			
			$this->session->set_flashdata('msg','<div class="alert alert-success">PF Scheme deleted successfully</div>');
			 redirect('superadmin/pfSchemes');
						
		} else {
			$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
			 redirect('superadmin/pfSchemes');
		}
}

public function changeStatuspfSchemes($id,$status)
{

	$companies = $this->common_model->GetSingleData('master_pfschemes',array('id'=>$id));
	$run = $this->common_model->UpdateData('master_pfschemes',array('id'=>$id),array('status'=>$status));

	//echo $this->db->last_query();
	if($run) {
		
		$this->session->set_flashdata('msg','<div class="alert alert-success">PF Scheme Status Changed successfully</div>');
			redirect('superadmin/pfSchemes');
					
	} else {
		$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
			redirect('superadmin/pfSchemes');
	}
}
 
// in voluntary reasons
 public function inVoluntaryReasons() 
{
	$user_id = $this->session->userdata('user_id');
	$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
	$data['inVoluntaryReasons'] = $this->common_model->GetAllData('master_involuntaryreasons',array('status!='=>2),'id');
	// echo "<pre>"; print_r($data['bankAccountType']); die;
	$this->load->view('Admin/s_inVoluntaryReasons',$data);
}

public function addinVoluntaryReasons() 
{
	$user_id = $this->session->userdata('user_id');
	$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
	
	$this->form_validation->set_rules('inVoluntaryReasons','In Voluntary Reasons','required');
	
	if($this->form_validation->run()){
		$chk = $this->common_model->GetSingleData('master_involuntaryreasons',array('description'=>$this->input->post('inVoluntaryReasons')));
		
		if($chk=='')
		{
			
				
				$insert1['description'] = $this->input->post('inVoluntaryReasons');
				$insert1['created_date'] = date('Y-m-d h:i:s');
				
				$run = $this->common_model->InsertData('master_involuntaryreasons',$insert1);
				$this->session->set_flashdata('msg','<div class="alert alert-success">In Voluntary Reasons added successfully!</div>');
				redirect('superadmin/inVoluntaryReasons');
			
		}else{
			$this->session->set_flashdata('msg','<div class="alert alert-danger">In Voluntary Reasons already exist!</div>');
			redirect('superadmin/inVoluntaryReasons');
		}
	
		
		
	 } else {
			$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
			redirect('superadmin/inVoluntaryReasons');
	}
}

public function editinVoluntaryReasons($id)
{
	$user_id = $this->session->userdata('user_id');
	$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
	
	$this->form_validation->set_rules('inVoluntaryReasons','In Voluntary Reasons','required');
	
	if($this->form_validation->run()){
		
				$insert['description'] = $this->input->post('inVoluntaryReasons');
				$run = $this->common_model->UpdateData('master_involuntaryreasons',array('id'=>$id),$insert);
				
		if($run)
		{
			$this->session->set_flashdata('msg','<div class="alert alert-success">In Voluntary Reasons Updated successfully!</div>');
			redirect('superadmin/inVoluntaryReasons');
		} 
		else
		{
			$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
		}
		
		
	 } else {
			$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
			redirect('superadmin/inVoluntaryReasons');
	}
}

public function deleteinVoluntaryReasons($id)
{
	$run = $this->common_model->UpdateData('master_involuntaryreasons',array('id'=>$id),array('status'=>2));
		//echo $this->db->last_query();
		if($run) {
			
			$this->session->set_flashdata('msg','<div class="alert alert-success">In Voluntary Reasons deleted successfully</div>');
			 redirect('superadmin/inVoluntaryReasons');
						
		} else {
			$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
			 redirect('superadmin/inVoluntaryReasons');
		}
}

public function changeStatusinVoluntaryReasons($id,$status)
{

	$companies = $this->common_model->GetSingleData('master_involuntaryreasons',array('id'=>$id));
	$run = $this->common_model->UpdateData('master_involuntaryreasons',array('id'=>$id),array('status'=>$status));

	//echo $this->db->last_query();
	if($run) {
		
		$this->session->set_flashdata('msg','<div class="alert alert-success">In Voluntary Reasons Status Changed successfully</div>');
			redirect('superadmin/inVoluntaryReasons');
					
	} else {
		$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
			redirect('superadmin/inVoluntaryReasons');
	}
}

//nationality
public function nationality() 
{
	$user_id = $this->session->userdata('user_id');
	$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
	$data['nationality'] = $this->common_model->GetAllData('master_nationality',array('status!='=>2),'id');
	// echo "<pre>"; print_r($data['bankAccountType']); die;
	$this->load->view('Admin/s_nationality',$data);
}

public function addnationality() 
{
	$user_id = $this->session->userdata('user_id');
	$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
	
	$this->form_validation->set_rules('nationality','Nationality','required');
	
	if($this->form_validation->run()){
		$chk = $this->common_model->GetSingleData('master_nationality',array('description'=>$this->input->post('nationality')));
		
		if($chk=='')
		{
			
				
				$insert1['description'] = $this->input->post('nationality');
				$insert1['created_date'] = date('Y-m-d h:i:s');
				
				$run = $this->common_model->InsertData('master_nationality',$insert1);
				$this->session->set_flashdata('msg','<div class="alert alert-success">Nationality added successfully!</div>');
				redirect('superadmin/nationality');
			
		}else{
			$this->session->set_flashdata('msg','<div class="alert alert-danger">Nationality already exist!</div>');
			redirect('superadmin/nationality');
		}
	
		
		
	 } else {
			$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
			redirect('superadmin/nationality');
	}
}

public function editnationality($id)
{
	$user_id = $this->session->userdata('user_id');
	$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
	
	$this->form_validation->set_rules('nationality','Nationality','required');
	
	if($this->form_validation->run()){
		
				$insert['description'] = $this->input->post('nationality');
				$run = $this->common_model->UpdateData('master_nationality',array('id'=>$id),$insert);
				
		if($run)
		{
			$this->session->set_flashdata('msg','<div class="alert alert-success">Nationality Updated successfully!</div>');
			redirect('superadmin/nationality');
		} 
		else
		{
			$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
		}
		
		
	 } else {
			$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
			redirect('superadmin/nationality');
	}
}

public function deletenationality($id)
{
	$run = $this->common_model->UpdateData('master_nationality',array('id'=>$id),array('status'=>2));
		//echo $this->db->last_query();
		if($run) {
			
			$this->session->set_flashdata('msg','<div class="alert alert-success">Nationality deleted successfully</div>');
			 redirect('superadmin/nationality');
						
		} else {
			$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
			 redirect('superadmin/nationality');
		}
}

public function changeStatusnationality($id,$status)
{

	$companies = $this->common_model->GetSingleData('master_nationality',array('id'=>$id));
	$run = $this->common_model->UpdateData('master_nationality',array('id'=>$id),array('status'=>$status));

	//echo $this->db->last_query();
	if($run) {
		
		$this->session->set_flashdata('msg','<div class="alert alert-success">Nationality Status Changed successfully</div>');
			redirect('superadmin/nationality');
					
	} else {
		$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
			redirect('superadmin/nationality');
	}
}

/// relation
public function relation() 
{
	$user_id = $this->session->userdata('user_id');
	$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
	$data['relation'] = $this->common_model->GetAllData('master_relation',array('status!='=>2),'id');
	// echo "<pre>"; print_r($data['bankAccountType']); die;
	$this->load->view('Admin/s_relation',$data);
}

public function addrelation() 
{
	$user_id = $this->session->userdata('user_id');
	$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
	
	$this->form_validation->set_rules('relation','Relation','required');
	
	if($this->form_validation->run()){
		$chk = $this->common_model->GetSingleData('master_relation',array('description'=>$this->input->post('relation')));
		
		if($chk=='')
		{
			
				
				$insert1['description'] = $this->input->post('relation');
				$insert1['created_date'] = date('Y-m-d h:i:s');
				
				$run = $this->common_model->InsertData('master_relation',$insert1);
				$this->session->set_flashdata('msg','<div class="alert alert-success">Relation added successfully!</div>');
				redirect('superadmin/relation');
			
		}else{
			$this->session->set_flashdata('msg','<div class="alert alert-danger">Relation already exist!</div>');
			redirect('superadmin/relation');
		}
	
		
		
	 } else {
			$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
			redirect('superadmin/relation');
	}
}

public function editrelation($id)
{
	$user_id = $this->session->userdata('user_id');
	$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
	
	$this->form_validation->set_rules('relation','Relation','required');
	
	if($this->form_validation->run()){
		
				$insert['relation'] = $this->input->post('relation');
				$run = $this->common_model->UpdateData('master_relation',array('id'=>$id),$insert);
				
		if($run)
		{
			$this->session->set_flashdata('msg','<div class="alert alert-success">Relation Updated successfully!</div>');
			redirect('superadmin/relation');
		} 
		else
		{
			$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
		}
		
		
	 } else {
			$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
			redirect('superadmin/relation');
	}
}

public function deleterelation($id)
{
	$run = $this->common_model->UpdateData('master_relation',array('id'=>$id),array('status'=>2));
		//echo $this->db->last_query();
		if($run) {
			
			$this->session->set_flashdata('msg','<div class="alert alert-success">Relation deleted successfully</div>');
			 redirect('superadmin/relation');
						
		} else {
			$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
			 redirect('superadmin/relation');
		}
}

public function changeStatusrelation($id,$status)
{

	$companies = $this->common_model->GetSingleData('master_relation',array('id'=>$id));
	$run = $this->common_model->UpdateData('master_relation',array('id'=>$id),array('status'=>$status));

	//echo $this->db->last_query();
	if($run) {
		
		$this->session->set_flashdata('msg','<div class="alert alert-success">Relation Status Changed successfully</div>');
			redirect('superadmin/relation');
					
	} else {
		$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
			redirect('superadmin/relation');
	}
}

//religion
public function religion() 
{
	$user_id = $this->session->userdata('user_id');
	$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
	$data['religion'] = $this->common_model->GetAllData('master_religion',array('status!='=>2),'id');
	// echo "<pre>"; print_r($data['bankAccountType']); die;
	$this->load->view('Admin/s_religion',$data);
}

public function addreligion() 
{
	$user_id = $this->session->userdata('user_id');
	$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
	
	$this->form_validation->set_rules('religion','Religion','required');
	
	if($this->form_validation->run()){
		$chk = $this->common_model->GetSingleData('master_religion',array('description'=>$this->input->post('religion')));
		
		if($chk=='')
		{
			
				
				$insert1['description'] = $this->input->post('religion');
				$insert1['created_date'] = date('Y-m-d h:i:s');
				
				$run = $this->common_model->InsertData('master_religion',$insert1);
				$this->session->set_flashdata('msg','<div class="alert alert-success">Religion added successfully!</div>');
				redirect('superadmin/religion');
			
		}else{
			$this->session->set_flashdata('msg','<div class="alert alert-danger">Religion already exist!</div>');
			redirect('superadmin/religion');
		}
	
		
		
	 } else {
			$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
			redirect('superadmin/religion');
	}
}

public function editreligion($id)
{
	$user_id = $this->session->userdata('user_id');
	$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
	
	$this->form_validation->set_rules('religion','religion','required');
	
	if($this->form_validation->run()){
		
				$insert['description'] = $this->input->post('religion');
				$run = $this->common_model->UpdateData('master_religion',array('id'=>$id),$insert);
				
		if($run)
		{
			$this->session->set_flashdata('msg','<div class="alert alert-success">Religion Updated successfully!</div>');
			redirect('superadmin/religion');
		} 
		else
		{
			$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
		}
		
		
	 } else {
			$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
			redirect('superadmin/religion');
	}
}

public function deletereligion($id)
{
	$run = $this->common_model->UpdateData('master_religion',array('id'=>$id),array('status'=>2));
		//echo $this->db->last_query();
		if($run) {
			
			$this->session->set_flashdata('msg','<div class="alert alert-success">Religion deleted successfully</div>');
			 redirect('superadmin/religion');
						
		} else {
			$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
			 redirect('superadmin/religion');
		}
}

public function changeStatusreligion($id,$status)
{

	$companies = $this->common_model->GetSingleData('master_religion',array('id'=>$id));
	$run = $this->common_model->UpdateData('master_religion',array('id'=>$id),array('status'=>$status));

	//echo $this->db->last_query();
	if($run) {
		
		$this->session->set_flashdata('msg','<div class="alert alert-success">Religion Status Changed successfully</div>');
			redirect('superadmin/religion');
					
	} else {
		$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
			redirect('superadmin/religion');
	}
}



	public function editother_incomes($id)
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		
		$this->form_validation->set_rules('other_incomes','Other Incomes','required');
		
		if($this->form_validation->run()){
			
					$insert['other_incomes'] = $this->input->post('other_incomes');
					$run = $this->common_model->UpdateData('master_other_incomes',array('id'=>$id),$insert);
					
			if($run)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success">Other Incomes Updated successfully!</div>');
				redirect('superadmin/other_incomes');
			} 
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
			}
			
			
		 } else {
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
				redirect('superadmin/other_incomes');
		}
	}

	
	public function deleteother_incomes($id)
	{
		$run = $this->common_model->UpdateData('master_other_incomes',array('id'=>$id),array('status'=>2));
			//echo $this->db->last_query();
			if($run) {
				
				$this->session->set_flashdata('msg','<div class="alert alert-success">Other Incomes  deleted successfully</div>');
                 redirect('superadmin/other_incomes');
							
			} else {
				$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
                 redirect('superadmin/other_incomes');
			}
	}
	
	public function changeStatusother_incomes($id,$status)
	{
	
		$companies = $this->common_model->GetSingleData('master_other_incomes',array('id'=>$id));
		$run = $this->common_model->UpdateData('master_other_incomes',array('id'=>$id),array('status'=>$status));

		//echo $this->db->last_query();
		if($run) {
			
			$this->session->set_flashdata('msg','<div class="alert alert-success">Other Incomes Status Changed successfully</div>');
				redirect('superadmin/other_incomes');
						
		} else {
			$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
				redirect('superadmin/other_incomes');
		}
	}
	//marrital status
	public function marrital_status() 
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		$data['marrital_status'] = $this->common_model->GetAllData('master_marrital_status',array('status!='=>2),'id');
		// echo "<pre>"; print_r($data['bankAccountType']); die;
		$this->load->view('Admin/s_marrital_status',$data);
	}

	public function addmarrital_status() 
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		
		$this->form_validation->set_rules('marrital_status','Marrital Status','required');
		
		if($this->form_validation->run()){
			$chk = $this->common_model->GetSingleData('master_marrital_status',array('description'=>$this->input->post('marrital_status')));
			
			if($chk=='')
			{
				
					
					$insert1['description'] = $this->input->post('marrital_status');
					$insert1['created_date'] = date('Y-m-d h:i:s');
					
					$run = $this->common_model->InsertData('master_marrital_status',$insert1);
					$this->session->set_flashdata('msg','<div class="alert alert-success">Marrital Status added successfully!</div>');
					redirect('superadmin/marrital_status');
				
			}else{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Marrital Status already exist!</div>');
				redirect('superadmin/marrital_status');
			}
		
			
			
		 } else {
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
				redirect('superadmin/marrital_status');
		}
	}

	public function editmarrital_status($id)
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		
		$this->form_validation->set_rules('marrital_status','Marrital Status','required');
		
		if($this->form_validation->run()){
			
					$insert['description'] = $this->input->post('marrital_status');
					$run = $this->common_model->UpdateData('master_marrital_status',array('id'=>$id),$insert);
					
			if($run)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success">Marrital Status Updated successfully!</div>');
				redirect('superadmin/marrital_status');
			} 
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
			}
			
			
		 } else {
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
				redirect('superadmin/marrital_status');
		}
	}

	
	public function deletemarrital_status($id)
	{
		$run = $this->common_model->UpdateData('master_marrital_status',array('id'=>$id),array('status'=>2));
			//echo $this->db->last_query();
			if($run) {
				
				$this->session->set_flashdata('msg','<div class="alert alert-success">Marrital Status  deleted successfully</div>');
                 redirect('superadmin/marrital_status');
							
			} else {
				$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
                 redirect('superadmin/marrital_status');
			}
	}
	
	public function changeStatusmarrital_status($id,$status)
	{
	
		$companies = $this->common_model->GetSingleData('master_marrital_status',array('id'=>$id));
		$run = $this->common_model->UpdateData('master_marrital_status',array('id'=>$id),array('status'=>$status));

		//echo $this->db->last_query();
		if($run) {
			
			$this->session->set_flashdata('msg','<div class="alert alert-success">Marrital Status Status Changed successfully</div>');
				redirect('superadmin/marrital_status');
						
		} else {
			$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
				redirect('superadmin/marrital_status');
		}
	}
	// residential status
	public function residential_status() 
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		$data['residential_status'] = $this->common_model->GetAllData('master_residential_status',array('status!='=>2),'id');
		// echo "<pre>"; print_r($data['bankAccountType']); die;
		$this->load->view('Admin/s_residential_status',$data);
	}

	public function addresidential_status() 
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		
		$this->form_validation->set_rules('residential_status','Residential Status','required');
		
		if($this->form_validation->run()){
			$chk = $this->common_model->GetSingleData('master_residential_status',array('description'=>$this->input->post('residential_status')));
			
			if($chk=='')
			{
				
					
					$insert1['description'] = $this->input->post('residential_status');
					$insert1['created_date'] = date('Y-m-d h:i:s');
					
					$run = $this->common_model->InsertData('master_residential_status',$insert1);
					$this->session->set_flashdata('msg','<div class="alert alert-success">Residential Status added successfully!</div>');
					redirect('superadmin/residential_status');
				
			}else{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Residential Status already exist!</div>');
				redirect('superadmin/residential_status');
			}
		
			
			
		 } else {
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
				redirect('superadmin/residential_status');
		}
	}

	public function editresidential_status($id)
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		
		$this->form_validation->set_rules('residential_status','Residential Status','required');
		
		if($this->form_validation->run()){
			
					$insert['description'] = $this->input->post('residential_status');
					$run = $this->common_model->UpdateData('master_residential_status',array('id'=>$id),$insert);
					
			if($run)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success">Residential Status Updated successfully!</div>');
				redirect('superadmin/residential_status');
			} 
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
			}
			
			
		 } else {
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
				redirect('superadmin/residential_status');
		}
	}

	
	public function deleteresidential_status($id)
	{
		$run = $this->common_model->UpdateData('master_residential_status',array('id'=>$id),array('status'=>2));
			//echo $this->db->last_query();
			if($run) {
				
				$this->session->set_flashdata('msg','<div class="alert alert-success">Residential Status  deleted successfully</div>');
                 redirect('superadmin/residential_status');
							
			} else {
				$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
                 redirect('superadmin/residential_status');
			}
	}
	
	public function changeStatusresidential_status($id,$status)
	{
	
		$companies = $this->common_model->GetSingleData('master_residential_status',array('id'=>$id));
		$run = $this->common_model->UpdateData('master_residential_status',array('id'=>$id),array('status'=>$status));

		//echo $this->db->last_query();
		if($run) {
			
			$this->session->set_flashdata('msg','<div class="alert alert-success">Residential Status Status Changed successfully</div>');
				redirect('superadmin/residential_status');
						
		} else {
			$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
				redirect('superadmin/residential_status');
		}
	}
	//vaccination reason
	public function vaccination_reason() 
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		$data['vaccination_reason'] = $this->common_model->GetAllData('master_vaccination_reason',array('status!='=>2),'id');
		// echo "<pre>"; print_r($data['bankAccountType']); die;
		$this->load->view('Admin/s_vaccination_reason',$data);
	}

	public function addvaccination_reason() 
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		
		$this->form_validation->set_rules('vaccination_reason','Vaccination Reason','required');
		
		if($this->form_validation->run()){
			$chk = $this->common_model->GetSingleData('master_vaccination_reason',array('description'=>$this->input->post('vaccination_reason')));
			
			if($chk=='')
			{
				
					
					$insert1['description'] = $this->input->post('vaccination_reason');
					$insert1['created_date'] = date('Y-m-d h:i:s');
					
					$run = $this->common_model->InsertData('master_vaccination_reason',$insert1);
					$this->session->set_flashdata('msg','<div class="alert alert-success">Vaccination Reason added successfully!</div>');
					redirect('superadmin/vaccination_reason');
				
			}else{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Vaccination Reason already exist!</div>');
				redirect('superadmin/vaccination_reason');
			}
		
			
			
		 } else {
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
				redirect('superadmin/vaccination_reason');
		}
	}

	public function editvaccination_reason($id)
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		
		$this->form_validation->set_rules('vaccination_reason','Vaccination Reason','required');
		
		if($this->form_validation->run()){
			
					$insert['description'] = $this->input->post('vaccination_reason');
					$run = $this->common_model->UpdateData('master_vaccination_reason',array('id'=>$id),$insert);
					
			if($run)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success">Vaccination Reason Updated successfully!</div>');
				redirect('superadmin/vaccination_reason');
			} 
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
			}
			
			
		 } else {
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
				redirect('superadmin/vaccination_reason');
		}
	}

	
	public function deletevaccination_reason($id)
	{
		$run = $this->common_model->UpdateData('master_vaccination_reason',array('id'=>$id),array('status'=>2));
			//echo $this->db->last_query();
			if($run) {
				
				$this->session->set_flashdata('msg','<div class="alert alert-success">Vaccination Reason  deleted successfully</div>');
                 redirect('superadmin/vaccination_reason');
							
			} else {
				$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
                 redirect('superadmin/vaccination_reason');
			}
	}
	
	public function changeStatusvaccination_reason($id,$status)
	{
	
		$companies = $this->common_model->GetSingleData('master_vaccination_reason',array('id'=>$id));
		$run = $this->common_model->UpdateData('master_vaccination_reason',array('id'=>$id),array('status'=>$status));

		//echo $this->db->last_query();
		if($run) {
			
			$this->session->set_flashdata('msg','<div class="alert alert-success">Vaccination Reason Status Changed successfully</div>');
				redirect('superadmin/vaccination_reason');
						
		} else {
			$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
				redirect('superadmin/vaccination_reason');
		}
	}
	//Category Change Reason
	public function category_change_reason() 
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		$data['category_change_reason'] = $this->common_model->GetAllData('master_category_change_reason',array('status!='=>2),'id');
		// echo "<pre>"; print_r($data['bankAccountType']); die;
		$this->load->view('Admin/s_category_change_reason',$data);
	}

	public function addcategory_change_reason() 
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		
		$this->form_validation->set_rules('category_change_reason','Category Change Reason','required');
		
		if($this->form_validation->run()){
			$chk = $this->common_model->GetSingleData('master_category_change_reason',array('description'=>$this->input->post('category_change_reason')));
			
			if($chk=='')
			{
				
					
					$insert1['description'] = $this->input->post('category_change_reason');
					$insert1['created_date'] = date('Y-m-d h:i:s');
					
					$run = $this->common_model->InsertData('master_category_change_reason',$insert1);
					$this->session->set_flashdata('msg','<div class="alert alert-success">Category Change Reason added successfully!</div>');
					redirect('superadmin/category_change_reason');
				
			}else{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Category Change Reason already exist!</div>');
				redirect('superadmin/category_change_reason');
			}
		
			
			
		 } else {
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
				redirect('superadmin/category_change_reason');
		}
	}

	public function editcategory_change_reason($id)
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		
		$this->form_validation->set_rules('category_change_reason','Category Change Reason','required');
		
		if($this->form_validation->run()){
			
					$insert['description'] = $this->input->post('category_change_reason');
					$run = $this->common_model->UpdateData('master_category_change_reason',array('id'=>$id),$insert);
					
			if($run)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success">Category Change Reason Updated successfully!</div>');
				redirect('superadmin/category_change_reason');
			} 
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
			}
			
			
		 } else {
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
				redirect('superadmin/category_change_reason');
		}
	}

	
	public function deletecategory_change_reason($id)
	{
		$run = $this->common_model->UpdateData('master_category_change_reason',array('id'=>$id),array('status'=>2));
			//echo $this->db->last_query();
			if($run) {
				
				$this->session->set_flashdata('msg','<div class="alert alert-success">Category Change Reason  deleted successfully</div>');
                 redirect('superadmin/category_change_reason');
							
			} else {
				$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
                 redirect('superadmin/category_change_reason');
			}
	}
	
	public function changeStatuscategory_change_reason($id,$status)
	{
	
		$companies = $this->common_model->GetSingleData('master_category_change_reason',array('id'=>$id));
		$run = $this->common_model->UpdateData('master_category_change_reason',array('id'=>$id),array('status'=>$status));

		//echo $this->db->last_query();
		if($run) {
			
			$this->session->set_flashdata('msg','<div class="alert alert-success">Category Change Reason Status Changed successfully</div>');
				redirect('superadmin/category_change_reason');
						
		} else {
			$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
				redirect('superadmin/category_change_reason');
		}
	}
	//Leaving Feedback
	public function leaving_feedback() 
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		$data['leaving_feedback'] = $this->common_model->GetAllData('master_leaving_feedback',array('status!='=>2),'id');
		// echo "<pre>"; print_r($data['bankAccountType']); die;
		$this->load->view('Admin/s_leaving_feedback',$data);
	}

	public function addleaving_feedback() 
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		
		$this->form_validation->set_rules('leaving_feedback','Leaving Feedback','required');
		
		if($this->form_validation->run()){
			$chk = $this->common_model->GetSingleData('master_leaving_feedback',array('description'=>$this->input->post('leaving_feedback')));
			
			if($chk=='')
			{
				
					
					$insert1['description'] = $this->input->post('leaving_feedback');
					$insert1['created_date'] = date('Y-m-d h:i:s');
					
					$run = $this->common_model->InsertData('master_leaving_feedback',$insert1);
					$this->session->set_flashdata('msg','<div class="alert alert-success">Leaving Feedback added successfully!</div>');
					redirect('superadmin/leaving_feedback');
				
			}else{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Leaving Feedback already exist!</div>');
				redirect('superadmin/leaving_feedback');
			}
		
			
			
		 } else {
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
				redirect('superadmin/leaving_feedback');
		}
	}

	public function editleaving_feedback($id)
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		
		$this->form_validation->set_rules('leaving_feedback','Leaving Feedback','required');
		
		if($this->form_validation->run()){
			
					$insert['description'] = $this->input->post('leaving_feedback');
					$run = $this->common_model->UpdateData('master_leaving_feedback',array('id'=>$id),$insert);
					
			if($run)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success">Leaving Feedback Updated successfully!</div>');
				redirect('superadmin/leaving_feedback');
			} 
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
			}
			
			
		 } else {
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
				redirect('superadmin/leaving_feedback');
		}
	}

	
	public function deleteleaving_feedback($id)
	{
		$run = $this->common_model->UpdateData('master_leaving_feedback',array('id'=>$id),array('status'=>2));
			//echo $this->db->last_query();
			if($run) {
				
				$this->session->set_flashdata('msg','<div class="alert alert-success">Leaving Feedback  deleted successfully</div>');
                 redirect('superadmin/leaving_feedback');
							
			} else {
				$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
                 redirect('superadmin/leaving_feedback');
			}
	}
	
	public function changeStatusleaving_feedback($id,$status)
	{
	
		$companies = $this->common_model->GetSingleData('master_leaving_feedback',array('id'=>$id));
		$run = $this->common_model->UpdateData('master_leaving_feedback',array('id'=>$id),array('status'=>$status));

		//echo $this->db->last_query();
		if($run) {
			
			$this->session->set_flashdata('msg','<div class="alert alert-success">Leaving Feedback Status Changed successfully</div>');
				redirect('superadmin/leaving_feedback');
						
		} else {
			$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
				redirect('superadmin/leaving_feedback');
		}
	}
	//PF Leaving Reason
	public function pf_leaving_reason() 
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		$data['pf_leaving_reason'] = $this->common_model->GetAllData('master_pf_leaving_reason',array('status!='=>2),'id');
		// echo "<pre>"; print_r($data['bankAccountType']); die;
		$this->load->view('Admin/s_pf_leaving_reason',$data);
	}

	public function addpf_leaving_reason() 
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		
		$this->form_validation->set_rules('pf_leaving_reason','PF Leaving Reason','required');
		
		if($this->form_validation->run()){
			$chk = $this->common_model->GetSingleData('master_pf_leaving_reason',array('description'=>$this->input->post('pf_leaving_reason')));
			
			if($chk=='')
			{
				
					
					$insert1['description'] = $this->input->post('pf_leaving_reason');
					$insert1['created_date'] = date('Y-m-d h:i:s');
					
					$run = $this->common_model->InsertData('master_pf_leaving_reason',$insert1);
					$this->session->set_flashdata('msg','<div class="alert alert-success">PF Leaving Reason added successfully!</div>');
					redirect('superadmin/pf_leaving_reason');
				
			}else{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">PF Leaving Reason already exist!</div>');
				redirect('superadmin/pf_leaving_reason');
			}
		
			
			
		 } else {
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
				redirect('superadmin/pf_leaving_reason');
		}
	}

	public function editpf_leaving_reason($id)
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		
		$this->form_validation->set_rules('pf_leaving_reason','PF Leaving Reason','required');
		
		if($this->form_validation->run()){
			
					$insert['description'] = $this->input->post('pf_leaving_reason');
					$run = $this->common_model->UpdateData('master_pf_leaving_reason',array('id'=>$id),$insert);
					
			if($run)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success">PF Leaving Reason Updated successfully!</div>');
				redirect('superadmin/pf_leaving_reason');
			} 
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
			}
			
			
		 } else {
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
				redirect('superadmin/pf_leaving_reason');
		}
	}

	
	public function deletepf_leaving_reason($id)
	{
		$run = $this->common_model->UpdateData('master_pf_leaving_reason',array('id'=>$id),array('status'=>2));
			//echo $this->db->last_query();
			if($run) {
				
				$this->session->set_flashdata('msg','<div class="alert alert-success">PF Leaving Reason  deleted successfully</div>');
                 redirect('superadmin/pf_leaving_reason');
							
			} else {
				$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
                 redirect('superadmin/pf_leaving_reason');
			}
	}
	
	public function changeStatuspf_leaving_reason($id,$status)
	{
	
		$companies = $this->common_model->GetSingleData('master_pf_leaving_reason',array('id'=>$id));
		$run = $this->common_model->UpdateData('master_pf_leaving_reason',array('id'=>$id),array('status'=>$status));

		//echo $this->db->last_query();
		if($run) {
			
			$this->session->set_flashdata('msg','<div class="alert alert-success">PF Leaving Reason Status Changed successfully</div>');
				redirect('superadmin/pf_leaving_reason');
						
		} else {
			$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
				redirect('superadmin/pf_leaving_reason');
		}
	}
	//qualification area
	public function qualification_area() 
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		$data['qualification_area'] = $this->common_model->GetAllData('master_qualification_area',array('status!='=>2),'id');
		// echo "<pre>"; print_r($data['bankAccountType']); die;
		$this->load->view('Admin/s_qualification_area',$data);
	}

	public function addqualification_area() 
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		
		$this->form_validation->set_rules('qualification_area','Qualification Area','required');
		
		if($this->form_validation->run()){
			$chk = $this->common_model->GetSingleData('master_qualification_area',array('description'=>$this->input->post('qualification_area')));
			
			if($chk=='')
			{
				
					
					$insert1['description'] = $this->input->post('qualification_area');
					$insert1['created_date'] = date('Y-m-d h:i:s');
					
					$run = $this->common_model->InsertData('master_qualification_area',$insert1);
					$this->session->set_flashdata('msg','<div class="alert alert-success">Qualification Area added successfully!</div>');
					redirect('superadmin/qualification_area');
				
			}else{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Qualification Area already exist!</div>');
				redirect('superadmin/qualification_area');
			}
		
			
			
		 } else {
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
				redirect('superadmin/qualification_area');
		}
	}

	public function editqualification_area($id)
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		
		$this->form_validation->set_rules('qualification_area','Qualification Area','required');
		
		if($this->form_validation->run()){
			
					$insert['description'] = $this->input->post('qualification_area');
					$run = $this->common_model->UpdateData('master_qualification_area',array('id'=>$id),$insert);
					
			if($run)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success">Qualification Area Updated successfully!</div>');
				redirect('superadmin/qualification_area');
			} 
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
			}
			
			
		 } else {
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
				redirect('superadmin/qualification_area');
		}
	}

	
	public function deletequalification_area($id)
	{
		$run = $this->common_model->UpdateData('master_qualification_area',array('id'=>$id),array('status'=>2));
			//echo $this->db->last_query();
			if($run) {
				
				$this->session->set_flashdata('msg','<div class="alert alert-success">Qualification Area  deleted successfully</div>');
                 redirect('superadmin/qualification_area');
							
			} else {
				$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
                 redirect('superadmin/qualification_area');
			}
	}
	
	public function changeStatusqualification_area($id,$status)
	{
	
		$companies = $this->common_model->GetSingleData('master_qualification_area',array('id'=>$id));
		$run = $this->common_model->UpdateData('master_qualification_area',array('id'=>$id),array('status'=>$status));

		//echo $this->db->last_query();
		if($run) {
			
			$this->session->set_flashdata('msg','<div class="alert alert-success">Qualification Area Status Changed successfully</div>');
				redirect('superadmin/qualification_area');
						
		} else {
			$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
				redirect('superadmin/qualification_area');
		}
	}
//project
public function project() 
{
	$user_id = $this->session->userdata('user_id');
	$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
	$data['project'] = $this->common_model->GetAllData('master_project',array('status!='=>2),'id');
	// echo "<pre>"; print_r($data['bankAccountType']); die;
	$this->load->view('Admin/s_project',$data);
}

public function addproject() 
{
	$user_id = $this->session->userdata('user_id');
	$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
	
	$this->form_validation->set_rules('project','Project','required');
	
	if($this->form_validation->run()){
		$chk = $this->common_model->GetSingleData('master_project',array('description'=>$this->input->post('project')));
		
		if($chk=='')
		{
			
				
				$insert1['description'] = $this->input->post('project');
				$insert1['created_date'] = date('Y-m-d h:i:s');
				
				$run = $this->common_model->InsertData('master_project',$insert1);
				$this->session->set_flashdata('msg','<div class="alert alert-success">Project added successfully!</div>');
				redirect('superadmin/project');
			
		}else{
			$this->session->set_flashdata('msg','<div class="alert alert-danger">Project already exist!</div>');
			redirect('superadmin/project');
		}
	
		
		
	 } else {
			$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
			redirect('superadmin/project');
	}
}

public function editproject($id)
{
	$user_id = $this->session->userdata('user_id');
	$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
	
	$this->form_validation->set_rules('project','Project','required');
	
	if($this->form_validation->run()){
		
				$insert['description'] = $this->input->post('project');
				$run = $this->common_model->UpdateData('master_project',array('id'=>$id),$insert);
				
		if($run)
		{
			$this->session->set_flashdata('msg','<div class="alert alert-success">Project Updated successfully!</div>');
			redirect('superadmin/project');
		} 
		else
		{
			$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
		}
		
		
	 } else {
			$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
			redirect('superadmin/project');
	}
}


public function deleteproject($id)
{
	$run = $this->common_model->UpdateData('master_project',array('id'=>$id),array('status'=>2));
		//echo $this->db->last_query();
		if($run) {
			
			$this->session->set_flashdata('msg','<div class="alert alert-success">Project  deleted successfully</div>');
			 redirect('superadmin/project');
						
		} else {
			$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
			 redirect('superadmin/project');
		}
}

public function changeStatusproject($id,$status)
{

	$companies = $this->common_model->GetSingleData('master_project',array('id'=>$id));
	$run = $this->common_model->UpdateData('master_project',array('id'=>$id),array('status'=>$status));

	//echo $this->db->last_query();
	if($run) {
		
		$this->session->set_flashdata('msg','<div class="alert alert-success">Project Status Changed successfully</div>');
			redirect('superadmin/project');
					
	} else {
		$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
			redirect('superadmin/project');
	}
}
//release salary reason
public function release_salary_reason() 
{
	$user_id = $this->session->userdata('user_id');
	$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
	$data['release_salary_reason'] = $this->common_model->GetAllData('master_release_salary_reason',array('status!='=>2),'id');
	// echo "<pre>"; print_r($data['bankAccountType']); die;
	$this->load->view('Admin/s_release_salary_reason',$data);
}

public function addrelease_salary_reason() 
{
	$user_id = $this->session->userdata('user_id');
	$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
	
	$this->form_validation->set_rules('release_salary_reason','Release Salary Reason','required');
	
	if($this->form_validation->run()){
		$chk = $this->common_model->GetSingleData('master_release_salary_reason',array('description'=>$this->input->post('release_salary_reason')));
		
		if($chk=='')
		{
			
				
				$insert1['description'] = $this->input->post('release_salary_reason');
				$insert1['created_date'] = date('Y-m-d h:i:s');
				
				$run = $this->common_model->InsertData('master_release_salary_reason',$insert1);
				$this->session->set_flashdata('msg','<div class="alert alert-success">Release Salary Reason added successfully!</div>');
				redirect('superadmin/release_salary_reason');
			
		}else{
			$this->session->set_flashdata('msg','<div class="alert alert-danger">Release Salary Reason already exist!</div>');
			redirect('superadmin/release_salary_reason');
		}
	
		
		
	 } else {
			$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
			redirect('superadmin/release_salary_reason');
	}
}

public function editrelease_salary_reason($id)
{
	$user_id = $this->session->userdata('user_id');
	$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
	
	$this->form_validation->set_rules('release_salary_reason','Release Salary Reason','required');
	
	if($this->form_validation->run()){
		
				$insert['description'] = $this->input->post('release_salary_reason');
				$run = $this->common_model->UpdateData('master_release_salary_reason',array('id'=>$id),$insert);
				
		if($run)
		{
			$this->session->set_flashdata('msg','<div class="alert alert-success">Release Salary Reason Updated successfully!</div>');
			redirect('superadmin/release_salary_reason');
		} 
		else
		{
			$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
		}
		
		
	 } else {
			$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
			redirect('superadmin/release_salary_reason');
	}
}


public function deleterelease_salary_reason($id)
{
	$run = $this->common_model->UpdateData('master_release_salary_reason',array('id'=>$id),array('status'=>2));
		//echo $this->db->last_query();
		if($run) {
			
			$this->session->set_flashdata('msg','<div class="alert alert-success">Release Salary Reason  deleted successfully</div>');
			 redirect('superadmin/release_salary_reason');
						
		} else {
			$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
			 redirect('superadmin/release_salary_reason');
		}
}

public function changeStatusrelease_salary_reason($id,$status)
{

	$companies = $this->common_model->GetSingleData('master_release_salary_reason',array('id'=>$id));
	$run = $this->common_model->UpdateData('master_release_salary_reason',array('id'=>$id),array('status'=>$status));

	//echo $this->db->last_query();
	if($run) {
		
		$this->session->set_flashdata('msg','<div class="alert alert-success">Release Salary Reason Status Changed successfully</div>');
			redirect('superadmin/release_salary_reason');
					
	} else {
		$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
			redirect('superadmin/release_salary_reason');
	}
}

public function it_declaration()
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		$data['category'] = $this->common_model->GetAllData('it_declaration_categories',array('status'=>1),'id');
		$data['category1'] = $this->common_model->GetAllData('it_declaration_categories',array('status'=>1),'id');
		$data['it_declarations'] = $this->common_model->GetAllData('master_it_declarations',array('status!='=>2),'id');
		$data['section1'] = $this->common_model->GetAllData('it_declaration_sections',array('status'=>1),'id');
		$data['categorys'] = $this->common_model->GetAllData('it_declaration_categories',array('status'=>1),'id');
		$data['sections'] = $this->common_model->GetAllData('it_declaration_sections',array('status'=>1),'id');
		$this->load->view('Admin/s_it_declaration',$data);
	}

	public function addITDeclaration()
	{
		
	   $user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
		
		$this->form_validation->set_rules('financial_year','financial year','required');
		
		if($this->form_validation->run()){
			//$chk = $this->common_model->GetSingleData('master_it_declarations',array('financial_year'=>$this->input->post('financial_year')));
			
			//if($chk==''){
					
					$insert1['financial_year'] = $this->input->post('financial_year');
					$insert1['category_id'] = $this->input->post('category');
					$insert1['description'] = $this->input->post('description');
					$insert1['section_id'] = $this->input->post('section');
					$insert1['max_limit'] = $this->input->post('max_limit');
					$insert1['deduct'] = $this->input->post('deduct');
					$insert1['sort_order'] = $this->input->post('sort_order');
					$insert1['visible'] = $this->input->post('visible');
					$insert1['is_infra'] = $this->input->post('is_infra');
					$insert1['consider_as'] = $this->input->post('consider_as');
					$insert1['code'] = $this->input->post('code');
					$insert1['created_date'] = date('Y-m-d h:i:s');
					
					$run = $this->common_model->InsertData('master_it_declarations',$insert1);
					$this->session->set_flashdata('msg','<div class="alert alert-success">IT Declaration added successfully!</div>');
					redirect('superadmin/it_declaration');
				
			/*}else{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">IT Declaration already exist!</div>');
				redirect('superadmin/it_declaration');
			}*/
					
		 } else {
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
				redirect('superadmin/it_declaration');
		}
	}

	public function edit_ITDeclaration($id)
{
	$user_id = $this->session->userdata('user_id');
	$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
	
	$this->form_validation->set_rules('financial_year','financial year','required');
	
	if($this->form_validation->run()){
		
				$insert1['financial_year'] = $this->input->post('financial_year');
				$insert1['category_id'] = $this->input->post('category');
				$insert1['description'] = $this->input->post('description');
				$insert1['section_id'] = $this->input->post('section');
				$insert1['max_limit'] = $this->input->post('max_limit');
				$insert1['deduct'] = $this->input->post('deduct');
				$insert1['sort_order'] = $this->input->post('sort_order');
				$insert1['visible'] = $this->input->post('visible');
				$insert1['is_infra'] = $this->input->post('is_infra');
				$insert1['consider_as'] = $this->input->post('consider_as');
				$insert1['code'] = $this->input->post('code');
				$run = $this->common_model->UpdateData('master_it_declarations',array('id'=>$id),$insert1);
				
		if($run)
		{
			$this->session->set_flashdata('msg','<div class="alert alert-success">IT Declaration Updated successfully!</div>');
			redirect('superadmin/it_declaration');
		} 
		else
		{
			$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
		}
		
		
	 } else {
			$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
			redirect('superadmin/it_declaration');
	}
}

public function deleteITDeclaration($id)
{
	$run = $this->common_model->UpdateData('master_it_declarations',array('id'=>$id),array('status'=>2));
		//echo $this->db->last_query();
		if($run) {
			
			$this->session->set_flashdata('msg','<div class="alert alert-success">IT Declaration deleted successfully</div>');
			 redirect('superadmin/it_declaration');
						
		} else {
			$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
			 redirect('superadmin/it_declaration');
		}
}

public function changeStatusITDeclaration($id,$status)
{
	$run = $this->common_model->UpdateData('master_it_declarations',array('id'=>$id),array('status'=>$status));

	//echo $this->db->last_query();
	if($run) {
		
		$this->session->set_flashdata('msg','<div class="alert alert-success">IT Declaration Status Changed successfully</div>');
			redirect('superadmin/it_declaration');
					
	} else {
		$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
			redirect('superadmin/it_declaration');
	}
}


//it section max limit
public function it_section_maxLimit() 
{
	$user_id = $this->session->userdata('user_id');
	$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
	$data['itSec'] = $this->common_model->getAllwhere('it_declaration_sections',array('status!='=>2),'id');
	$data['sectionsData'] = $this->common_model->getallwhere_itsectionlimit(array('master_it_section_maxlimit.status!=' => 2));
	// echo "<pre>"; print_r($data['sectionsData']); die;
	$this->load->view('Admin/s_it_section_maxLimit',$data);
}

public function addit_section_maxLimit() 
{
	$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
	
	$this->form_validation->set_rules('year', 'Year', 'required');
	$this->form_validation->set_rules('name','Name','required');
	$this->form_validation->set_rules('max_limit','Max Limit','required');
	
	if($this->form_validation->run()){
		$chk = $this->common_model->GetSingleData('master_it_section_maxlimit',array('section'=>$this->input->post('name')));
		
		if($chk=='')
		{	
				
				$insert1['financial_year'] = $this->input->post('year');
				$insert1['section'] = $this->input->post('name');
				$insert1['max_limit'] = $this->input->post('max_limit');
				$insert1['created_date'] = date('Y-m-d h:i:s');
				
				$run = $this->common_model->InsertData('master_it_section_maxlimit',$insert1);
				$this->session->set_flashdata('msg','<div class="alert alert-success">IT Section Max Limit added successfully!</div>');
				redirect('superadmin/it_section_maxLimit');
			
		}else{
			$this->session->set_flashdata('msg','<div class="alert alert-danger">IT Section Max Limit already exist!</div>');
			redirect('superadmin/it_section_maxLimit');
		}
		
	 } else {
			$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
			redirect('superadmin/it_section_maxLimit');
	}
}

public function editit_section_maxLimit($id)
{
	$user_id = $this->session->userdata('user_id');
	$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
	
	$this->form_validation->set_rules('year', 'Year', 'required');
	$this->form_validation->set_rules('name','Name','required');
	$this->form_validation->set_rules('max_limit','Max Limit','required');
	
	if($this->form_validation->run()){
		
				$insert['financial_year'] = $this->input->post('year');
				$insert['section'] = $this->input->post('name');
				$insert['max_limit'] = $this->input->post('max_limit');
				$run = $this->common_model->UpdateData('master_it_section_maxlimit',array('id'=>$id),$insert);
				
		if($run)
		{
			$this->session->set_flashdata('msg','<div class="alert alert-success">IT Section Max Limit Updated successfully!</div>');
			redirect('superadmin/it_section_maxLimit');
		} 
		else
		{
			$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
		}
		
		
	 } else {
			$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
			redirect('superadmin/it_section_maxLimit');
	}
}

public function deleteit_section_maxLimit($id)
{
	$run = $this->common_model->UpdateData('master_it_section_maxlimit',array('id'=>$id),array('status'=>2));
		//echo $this->db->last_query();
		if($run) {
			
			$this->session->set_flashdata('msg','<div class="alert alert-success">IT Section Max Limit deleted successfully</div>');
			 redirect('superadmin/it_section_maxLimit');
						
		} else {
			$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
			 redirect('superadmin/it_section_maxLimit');
		}
}

public function changeStatusit_section_maxLimit($id,$status)
{

	$companies = $this->common_model->GetSingleData('master_it_section_maxlimit',array('id'=>$id));
	$run = $this->common_model->UpdateData('master_it_section_maxlimit',array('id'=>$id),array('status'=>$status));

	//echo $this->db->last_query();
	if($run) {
		
		$this->session->set_flashdata('msg','<div class="alert alert-success">IT Section Max Limit Status Changed successfully</div>');
			redirect('superadmin/it_section_maxLimit');
					
	} else {
		$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
			redirect('superadmin/it_section_maxLimit');
	}
}

//iexemption group map
public function exemptionGroupMap() 
{
	$user_id = $this->session->userdata('user_id');
	$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
	// $data[''] = $this->common_model->getAllwhere('it_declaration_sections',array('status!='=>2),'id');
	$data['groupMap'] = $this->common_model->GetAllData('master_exemption_groupmap', array('status!=' => 2));
	// echo "<pre>"; print_r($data['groupMap']); die;
	$this->load->view('Admin/s_exemptionGroupMap',$data);
}

public function addexemptionGroupMap() 
{
	$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
	
	$this->form_validation->set_rules('desc', 'Description', 'required');
	$this->form_validation->set_rules('tax_regime','Tax Regime','required');
	
	if($this->form_validation->run())
	{
		$chk = $this->common_model->GetSingleData('master_exemption_groupmap',array('description'=>$this->input->post('desc'), 'tax_regime' => $this->input->post('tax_regime')));
		
		if($chk=='')
		{	
				
				$insert1['description'] = $this->input->post('desc');
				$insert1['tax_regime'] = $this->input->post('tax_regime');
				$insert1['created_date'] = date('Y-m-d h:i:s');
				
				$run = $this->common_model->InsertData('master_exemption_groupmap',$insert1);
				$this->session->set_flashdata('msg','<div class="alert alert-success">Exemption Group Map added successfully!</div>');
				redirect('superadmin/exemptionGroupMap');
			
		}
		else
		{
			$this->session->set_flashdata('msg','<div class="alert alert-danger">Exemption Group Map already exist!</div>');
			redirect('superadmin/exemptionGroupMap');
		}
		
	 } 
	 else {
			$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
			redirect('superadmin/exemptionGroupMap');
	}
}

public function editexemptionGroupMap($id)
{
	$user_id = $this->session->userdata('user_id');
	$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
	
	$this->form_validation->set_rules('desc', 'Description', 'required');
	$this->form_validation->set_rules('tax_regime','Tax Regime','required');
	
	if($this->form_validation->run()){
		
				$insert['description'] = $this->input->post('desc');
				$insert['tax_regime'] = $this->input->post('tax_regime');
				$run = $this->common_model->UpdateData('master_exemption_groupmap',array('id'=>$id),$insert);
				
		if($run)
		{
			$this->session->set_flashdata('msg','<div class="alert alert-success">Exemption Group Map Updated successfully!</div>');
			redirect('superadmin/exemptionGroupMap');
		} 
		else
		{
			$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
		}
		
		
	 } else {
			$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
			redirect('superadmin/exemptionGroupMap');
	}
}

public function deleteexemptionGroupMap($id)
{
	$run = $this->common_model->UpdateData('master_exemption_groupmap',array('id'=>$id),array('status'=>2));
		//echo $this->db->last_query();
		if($run) {
			
			$this->session->set_flashdata('msg','<div class="alert alert-success">Exemption Group Map deleted successfully</div>');
			 redirect('superadmin/exemptionGroupMap');
						
		} else {
			$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
			 redirect('superadmin/exemptionGroupMap');
		}
}

public function changeStatusexemptionGroupMap($id,$status)
{

	$companies = $this->common_model->GetSingleData('master_exemption_groupmap',array('id'=>$id));
	$run = $this->common_model->UpdateData('master_exemption_groupmap',array('id'=>$id),array('status'=>$status));

	//echo $this->db->last_query();
	if($run) {
		
		$this->session->set_flashdata('msg','<div class="alert alert-success">Exemption Group Map Status Changed successfully</div>');
			redirect('superadmin/exemptionGroupMap');
					
	} else {
		$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
			redirect('superadmin/exemptionGroupMap');
	}
}

//Tax Slabs
public function tax_slabs() 
{
	$user_id = $this->session->userdata('user_id');
	$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
	// $data[''] = $this->common_model->getAllwhere('it_declaration_sections',array('status!='=>2),'id');
	$data['taxs'] = $this->common_model->GetAllData('master_tax_slabs', array('status!=' => 2));
	// echo "<pre>"; print_r($data['taxs']); die;
	$this->load->view('Admin/s_tax_slabs',$data);
}

public function addtax_slabs() 
{
	$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
	
	$this->form_validation->set_rules('year', 'Financial Year', 'required');
	$this->form_validation->set_rules('regime', 'Regime', 'required');
	$this->form_validation->set_rules('min_limit', 'Min Limit', 'required');
	$this->form_validation->set_rules('max_limit', 'Max Limit', 'required');
	$this->form_validation->set_rules('tax_rate','Tax Rate','required');
	$this->form_validation->set_rules('surcharge_rate','Surcharge Rate','required');
	
	if($this->form_validation->run())
	{
		// $chk = $this->common_model->GetSingleData('master_exemption_groupmap',array('description'=>$this->input->post('desc'), 'tax_regime' => $this->input->post('tax_regime')));
		
		// if($chk=='')
		// {	
				
				$insert1['financial_year'] = $this->input->post('year');
				$insert1['regime'] = $this->input->post('regime');
				$insert1['min_limit'] = $this->input->post('min_limit');
				$insert1['max_limit'] = $this->input->post('max_limit');
				$insert1['tax_rate'] = $this->input->post('tax_rate');
				$insert1['surcharge_rate'] = $this->input->post('surcharge_rate');
				$insert1['created_date'] = date('Y-m-d h:i:s');
				
				$run = $this->common_model->InsertData('master_tax_slabs',$insert1);
				$this->session->set_flashdata('msg','<div class="alert alert-success">Tax Slabs added successfully!</div>');
				redirect('superadmin/tax_slabs');
			
		}
	// 	else
	// 	{
	// 		$this->session->set_flashdata('msg','<div class="alert alert-danger">Tax Slabs already exist!</div>');
	// 		redirect('superadmin/tax_slabs');
	// 	}
		
	//  } 
	 else {
			$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
			redirect('superadmin/tax_slabs');
	}
}

public function edittax_slabs($id)
{
	$user_id = $this->session->userdata('user_id');
	$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
	
	$this->form_validation->set_rules('year', 'Financial Year', 'required');
	$this->form_validation->set_rules('regime', 'Regime', 'required');
	$this->form_validation->set_rules('min_limit', 'Min Limit', 'required');
	$this->form_validation->set_rules('max_limit', 'Max Limit', 'required');
	$this->form_validation->set_rules('tax_rate','Tax Rate','required');
	$this->form_validation->set_rules('surcharge_rate','Surcharge Rate','required');
	
	if($this->form_validation->run()){
		
		$insert1['financial_year'] = $this->input->post('year');
		$insert1['regime'] = $this->input->post('regime');
		$insert1['min_limit'] = $this->input->post('min_limit');
		$insert1['max_limit'] = $this->input->post('max_limit');
		$insert1['tax_rate'] = $this->input->post('tax_rate');
		$insert1['surcharge_rate'] = $this->input->post('surcharge_rate');
				$run = $this->common_model->UpdateData('master_tax_slabs',array('id'=>$id),$insert1);
				
		if($run)
		{
			$this->session->set_flashdata('msg','<div class="alert alert-success">Tax Slabs Updated successfully!</div>');
			redirect('superadmin/tax_slabs');
		} 
		else
		{
			$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
		}
		
		
	 } else {
			$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
			redirect('superadmin/tax_slabs');
	}
}

public function deletetax_slabs($id)
{
	$run = $this->common_model->UpdateData('master_tax_slabs',array('id'=>$id),array('status'=>2));
		//echo $this->db->last_query();
		if($run) {
			
			$this->session->set_flashdata('msg','<div class="alert alert-success">Tax Slabs deleted successfully</div>');
			 redirect('superadmin/tax_slabs');
						
		} else {
			$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
			 redirect('superadmin/tax_slabs');
		}
}

public function changeStatustax_slabs($id,$status)
{

	$companies = $this->common_model->GetSingleData('master_tax_slabs',array('id'=>$id));
	$run = $this->common_model->UpdateData('master_tax_slabs',array('id'=>$id),array('status'=>$status));

	//echo $this->db->last_query();
	if($run) {
		
		$this->session->set_flashdata('msg','<div class="alert alert-success">Tax Slabs Status Changed successfully</div>');
			redirect('superadmin/tax_slabs');
					
	} else {
		$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
			redirect('superadmin/tax_slabs');
	}
}


//professio Tax Slabs
public function profession_tax_slabs() 
{
	$user_id = $this->session->userdata('user_id');
	$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
	// $data[''] = $this->common_model->getAllwhere('it_declaration_sections',array('status!='=>2),'id');
	$data['listData'] = $this->common_model->getallwhere_profession_taxSlab(array('master_profession_taxslabs.status!=' => 2));
	$data['states'] = $this->common_model->getAllwhere('master_state',array('state_country_id'=>'101'));

	$this->load->view('Admin/s_profession_tax_slabs',$data);
}

public function addprofession_tax_slabs() 
{
	$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
	
	$this->form_validation->set_rules('state', 'State', 'required');
	$this->form_validation->set_rules('location', 'Location', 'required');
	$this->form_validation->set_rules('date', 'Date', 'required');
	$this->form_validation->set_rules('salary_from', 'Salary From', 'required');
	$this->form_validation->set_rules('salary_till', 'Salary Till', 'required');
	$this->form_validation->set_rules('tax_amount','Tax Amount','required');
	$this->form_validation->set_rules('deduction_month','Deduction Month','required');
	
	if($this->form_validation->run())
	{
		// $chk = $this->common_model->GetSingleData('master_exemption_groupmap',array('description'=>$this->input->post('desc'), 'tax_regime' => $this->input->post('tax_regime')));
		
		// if($chk=='')
		// {	
				
				$insert1['state'] = $this->input->post('state');
				$insert1['location'] = $this->input->post('location');
				$insert1['date'] = $this->input->post('date');
				$insert1['salary_from'] = $this->input->post('salary_from');
				$insert1['salary_till'] = $this->input->post('salary_till');
				$insert1['tax_amount'] = $this->input->post('tax_amount');
				$insert1['deduction_month'] = $this->input->post('deduction_month');
				$insert1['entry_date'] = date('Y-m-d h:i:s');
				
				$run = $this->common_model->InsertData('master_profession_taxslabs',$insert1);
				$this->session->set_flashdata('msg','<div class="alert alert-success">Profession Profession Tax Slabs added successfully!</div>');
				redirect('superadmin/profession_tax_slabs');
			
		}
	// 	else
	// 	{
	// 		$this->session->set_flashdata('msg','<div class="alert alert-danger">Profession Tax Slabs already exist!</div>');
	// 		redirect('superadmin/profession_tax_slabs');
	// 	}
		
	//  } 
	 else {
			$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
			redirect('superadmin/profession_tax_slabs');
	}
}

public function editprofession_tax_slabs($id)
{
	$user_id = $this->session->userdata('user_id');
	$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
	
	$this->form_validation->set_rules('state', 'State', 'required');
	$this->form_validation->set_rules('location', 'Location', 'required');
	$this->form_validation->set_rules('date', 'Date', 'required');
	$this->form_validation->set_rules('salary_from', 'Salary From', 'required');
	$this->form_validation->set_rules('salary_till', 'Salary Till', 'required');
	$this->form_validation->set_rules('tax_amount','Tax Amount','required');
	$this->form_validation->set_rules('deduction_month','Deduction Month','required');
	
	if($this->form_validation->run()){
		
		$insert1['state'] = $this->input->post('state');
				$insert1['location'] = $this->input->post('location');
				$insert1['date'] = $this->input->post('date');
				$insert1['salary_from'] = $this->input->post('salary_from');
				$insert1['salary_till'] = $this->input->post('salary_till');
				$insert1['tax_amount'] = $this->input->post('tax_amount');
				$insert1['deduction_month'] = $this->input->post('deduction_month');

				$run = $this->common_model->UpdateData('master_profession_taxslabs',array('id'=>$id),$insert1);
				
		if($run)
		{
			$this->session->set_flashdata('msg','<div class="alert alert-success">Profession Tax Slabs Updated successfully!</div>');
			redirect('superadmin/profession_tax_slabs');
		} 
		else
		{
			$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
		}
		
		
	 } else {
			$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
			redirect('superadmin/profession_tax_slabs');
	}
}

public function deleteprofession_tax_slabs($id)
{
	$run = $this->common_model->UpdateData('master_profession_taxslabs',array('id'=>$id),array('status'=>2));
		//echo $this->db->last_query();
		if($run) {
			
			$this->session->set_flashdata('msg','<div class="alert alert-success">Profession Tax Slabs deleted successfully</div>');
			 redirect('superadmin/profession_tax_slabs');
						
		} else {
			$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
			 redirect('superadmin/profession_tax_slabs');
		}
}

public function changeStatusprofession_tax_slabs($id,$status)
{

	$companies = $this->common_model->GetSingleData('master_profession_taxslabs',array('id'=>$id));
	$run = $this->common_model->UpdateData('master_profession_taxslabs',array('id'=>$id),array('status'=>$status));

	//echo $this->db->last_query();
	if($run) {
		
		$this->session->set_flashdata('msg','<div class="alert alert-success">Profession Tax Slabs Status Changed successfully</div>');
			redirect('superadmin/profession_tax_slabs');
					
	} else {
		$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
			redirect('superadmin/profession_tax_slabs');
	}
}

// leave type master
public function leave_type()
{
	$user_id = $this->session->userdata('user_id');
	$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
	$data['data'] = $this->common_model->getAllwhere('leave_type', array('status !=' => 2));
	$this->load->view('Admin/s_leave_type',$data);
}

public function addleave_type()
{
	$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }

	$this->form_validation->set_rules('name', 'Name', 'required');
	$this->form_validation->set_rules('days_per_year', 'Days Per Year', 'required');
	$this->form_validation->set_rules('req_approval', 'Req Approval', 'required');

	if($this->form_validation->run())
	{
		$chk = $this->common_model->getsingle('leave_type', array('name' => $this->input->post('name')));
		if($chk == '')
		{
			$insert['name'] = $this->input->post('name');
			$insert['days_per_year'] = $this->input->post('days_per_year');
			$insert['req_approval'] = $this->input->post('req_approval');
			$insert['created_date'] = date('Y-m-d h:i:s');

			$this->common_model->InsertData('leave_type', $insert);
			$this->session->set_flashdata('msg','<div class="alert alert-success">Leave Type added successfully!</div>');
			redirect('superadmin/leave_type');
		}
		else 
		{
			$this->session->set_flashdata('msg', '<div class="alert alert-danger">Leave Type already exists!</div>');
			redirect('superadmin/leave_type');
		}
		
	}
	else 
	{
		$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
		redirect('superadmin/leave_type');
	}
}

public function editleave_type($id)
{
	$user_id = $this->session->userdata('user_id');
	$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }

	$this->form_validation->set_rules('name', 'Name', 'required');
	$this->form_validation->set_rules('days_per_year', 'Days Per Year', 'required');
	$this->form_validation->set_rules('req_approval', 'Req Approval', 'required');

	if($this->form_validation->run())
	{
		$insertUpd['name'] = $this->input->post('name');
		$insertUpd['days_per_year'] = $this->input->post('days_per_year');
		$insertUpd['req_approval'] = $this->input->post('req_approval');

		$run = $this->common_model->UpdateData('leave_type', array('id' => $id), $insertUpd);
		
		if($run)
		{
			$this->session->set_flashdata('msg','<div class="alert alert-success">Leave Type Updated successfully!</div>');
			redirect('superadmin/leave_type');
		} 
		else
		{
			$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
		}

	} 
	else 
	{
		$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
		redirect('superadmin/leave_type');
}
}

public function deleteleave_type($id) 
{
	$run = $this->common_model->UpdateData('leave_type',array('id'=>$id),array('status'=>2));
		//echo $this->db->last_query();
		if($run) {
			
			$this->session->set_flashdata('msg','<div class="alert alert-success">Leave Type deleted successfully</div>');
			 redirect('superadmin/leave_type');
						
		} else {
			$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
			 redirect('superadmin/leave_type');
		}
}

public function changeStatusleave_type($id, $status)
{
	
	$companies = $this->common_model->GetSingleData('leave_type',array('id'=>$id));
	$run = $this->common_model->UpdateData('leave_type',array('id'=>$id),array('status'=>$status));

	//echo $this->db->last_query();
	if($run) {
		
		$this->session->set_flashdata('msg','<div class="alert alert-success">Leave Type Status Changed successfully</div>');
			redirect('superadmin/leave_type');
					
	} else {
		$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
			redirect('superadmin/leave_type');
	}
}


// leave rules master
public function leave_rules()
{
	$user_id = $this->session->userdata('user_id');
	$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
	$data['data'] = $this->common_model->getallwhere_leaveRules(array('master_leave_rules.status !=' => 2));
	// echo "<pre>"; print_r($data); die;
	$data['leave_type'] = $this->common_model->getAllwhere('leave_type', array('status' => 1));
	$this->load->view('Admin/s_leave_rules',$data);
}

public function addleave_rules()
{
	$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }

	$this->form_validation->set_rules('name', 'Name', 'required');
	$this->form_validation->set_rules('description', 'Description', 'required');

	if($this->form_validation->run())
	{
		$chk = $this->common_model->getsingle('master_leave_rules', array('leave_type' => $this->input->post('name')));
		if($chk == '')
		{
			$insert['leave_type'] = $this->input->post('name');
			$insert['description'] = $this->input->post('description');
			$insert['created_date'] = date('Y-m-d h:i:s');

			$this->common_model->InsertData('master_leave_rules', $insert);
			$this->session->set_flashdata('msg','<div class="alert alert-success">Leave Rules added successfully!</div>');
			redirect('superadmin/leave_rules');
		}
		else 
		{
			$this->session->set_flashdata('msg', '<div class="alert alert-danger">Leave Rules already exists!</div>');
			redirect('superadmin/leave_rules');
		}
		
	}
	else 
	{
		$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
		redirect('superadmin/leave_rules');
	}
}

public function editleave_rules($id)
{
	$user_id = $this->session->userdata('user_id');
	$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }

	$this->form_validation->set_rules('name', 'Leave Type', 'required');
	$this->form_validation->set_rules('description', 'Description', 'required');

	if($this->form_validation->run())
	{
		$insertUpd['leave_type'] = $this->input->post('name');
		$insertUpd['description'] = $this->input->post('description');

		$run = $this->common_model->UpdateData('master_leave_rules', array('id' => $id), $insertUpd);
		
		if($run)
		{
			$this->session->set_flashdata('msg','<div class="alert alert-success">Leave Rules Updated successfully!</div>');
			redirect('superadmin/leave_rules');
		} 
		else
		{
			$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
		}

	} 
	else 
	{
		$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
		redirect('superadmin/leave_rules');
}
}

public function deleteleave_rules($id) 
{
	$run = $this->common_model->UpdateData('master_leave_rules',array('id'=>$id),array('status'=>2));
		//echo $this->db->last_query();
		if($run) {
			
			$this->session->set_flashdata('msg','<div class="alert alert-success">Leave Rules deleted successfully</div>');
			 redirect('superadmin/leave_rules');
						
		} else {
			$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
			 redirect('superadmin/leave_rules');
		}
}

public function changeStatusleave_rules($id, $status)
{
	
	$companies = $this->common_model->GetSingleData('master_leave_rules',array('id'=>$id));
	$run = $this->common_model->UpdateData('master_leave_rules',array('id'=>$id),array('status'=>$status));

	//echo $this->db->last_query();
	if($run) {
		
		$this->session->set_flashdata('msg','<div class="alert alert-success">Leave Rules Status Changed successfully</div>');
			redirect('superadmin/leave_rules');
					
	} else {
		$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
			redirect('superadmin/leave_rules');
	}
}


// weekend policy master
public function weekend_policy()
{
	$user_id = $this->session->userdata('user_id');
	$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
	$data['data'] = $this->common_model->getallwhere('master_weekend_policy', array('status !=' => 2));
	// echo "<pre>"; print_r($data); die;
	$this->load->view('Admin/s_weekend_policy',$data);
}

public function addweekend_policy()
{
	$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }

	$this->form_validation->set_rules('weekend_policy', 'Weekend Policy', 'trim|required');

	if($this->form_validation->run())
	{
		$chk = $this->common_model->getsingle('master_weekend_policy', array('weekend_policy' => $this->input->post('weekend_policy')));
		if($chk == '')
		{
			$insert['weekend_policy'] = $this->input->post('weekend_policy');
			$insert['created_date'] = date('Y-m-d h:i:s');

			$this->common_model->InsertData('master_weekend_policy', $insert);
			$this->session->set_flashdata('msg','<div class="alert alert-success">Weekend Policy added successfully!</div>');
			redirect('superadmin/weekend_policy');
		}
		else 
		{
			$this->session->set_flashdata('msg', '<div class="alert alert-danger">Weekend Policy already exists!</div>');
			redirect('superadmin/weekend_policy');
		}
		
	}
	else 
	{
		$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
		redirect('superadmin/weekend_policy');
	}
}

public function editweekend_policy($id)
{
	$user_id = $this->session->userdata('user_id');
	$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }

	$this->form_validation->set_rules('weekend_policy', 'Weekend Policy', 'trim|required');

	if($this->form_validation->run())
	{
		$insert['weekend_policy'] = $this->input->post('weekend_policy');

		$run = $this->common_model->UpdateData('master_weekend_policy', array('id' => $id), $insert);
		
		if($run)
		{
			$this->session->set_flashdata('msg','<div class="alert alert-success">Weekend Policy Updated successfully!</div>');
			redirect('superadmin/weekend_policy');
		} 
		else
		{
			$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
		}

	} 
	else 
	{
		$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
		redirect('superadmin/weekend_policy');
}
}

public function deleteweekend_policy($id) 
{
	$run = $this->common_model->UpdateData('master_weekend_policy',array('id'=>$id),array('status'=>2));
		//echo $this->db->last_query();
		if($run) {
			
			$this->session->set_flashdata('msg','<div class="alert alert-success">Weekend Policy deleted successfully</div>');
			 redirect('superadmin/weekend_policy');
						
		} else {
			$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
			 redirect('superadmin/weekend_policy');
		}
}

public function changeStatusweekend_policy($id, $status)
{
	
	$companies = $this->common_model->GetSingleData('master_weekend_policy',array('id'=>$id));
	$run = $this->common_model->UpdateData('master_weekend_policy',array('id'=>$id),array('status'=>$status));

	//echo $this->db->last_query();
	if($run) {
		
		$this->session->set_flashdata('msg','<div class="alert alert-success">Weekend Policy Status Changed successfully</div>');
			redirect('superadmin/weekend_policy');
					
	} else {
		$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
			redirect('superadmin/weekend_policy');
	}
}

// leave scheme master
public function leave_scheme()
{
	$user_id = $this->session->userdata('user_id');
	$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
	$data['data'] = $this->common_model->getallwhere('master_leave_scheme', array('status !=' => 2));
	// echo "<pre>"; print_r($data); die;
	$this->load->view('Admin/s_leave_scheme',$data);
}

public function addleave_scheme()
{
	$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }

	$this->form_validation->set_rules('leave_scheme', 'Leave Scheme', 'trim|required');

	if($this->form_validation->run())
	{
		$chk = $this->common_model->getsingle('master_leave_scheme', array('leave_scheme' => $this->input->post('leave_scheme')));
		if($chk == '')
		{
			$insert['leave_scheme'] = $this->input->post('leave_scheme');
			$insert['created_date'] = date('Y-m-d h:i:s');

			$this->common_model->InsertData('master_leave_scheme', $insert);
			$this->session->set_flashdata('msg','<div class="alert alert-success">Leave Scheme added successfully!</div>');
			redirect('superadmin/leave_scheme');
		}
		else 
		{
			$this->session->set_flashdata('msg', '<div class="alert alert-danger">Leave Scheme already exists!</div>');
			redirect('superadmin/leave_scheme');
		}
		
	}
	else 
	{
		$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
		redirect('superadmin/leave_scheme');
	}
}

public function editleave_scheme($id)
{
	$user_id = $this->session->userdata('user_id');
	$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }

	$this->form_validation->set_rules('leave_scheme', 'Leave Scheme', 'trim|required');

	if($this->form_validation->run())
	{
		$insert['leave_scheme'] = $this->input->post('leave_scheme');

		$run = $this->common_model->UpdateData('master_leave_scheme', array('id' => $id), $insert);
		
		if($run)
		{
			$this->session->set_flashdata('msg','<div class="alert alert-success">Leave Scheme Updated successfully!</div>');
			redirect('superadmin/leave_scheme');
		} 
		else
		{
			$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
		}

	} 
	else 
	{
		$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
		redirect('superadmin/leave_scheme');
	}
}

public function deleteleave_scheme($id) 
{
	$run = $this->common_model->UpdateData('master_leave_scheme',array('id'=>$id),array('status'=>2));
		//echo $this->db->last_query();
		if($run) {
			
			$this->session->set_flashdata('msg','<div class="alert alert-success">Leave Scheme deleted successfully</div>');
			 redirect('superadmin/leave_scheme');
						
		} else {
			$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
			 redirect('superadmin/leave_scheme');
		}
}

public function changeStatusleave_scheme($id, $status)
{
	
	$companies = $this->common_model->GetSingleData('master_leave_scheme',array('id'=>$id));
	$run = $this->common_model->UpdateData('master_leave_scheme',array('id'=>$id),array('status'=>$status));

	//echo $this->db->last_query();
	if($run) {
		
		$this->session->set_flashdata('msg','<div class="alert alert-success">Leave Scheme Status Changed successfully</div>');
			redirect('superadmin/leave_scheme');
					
	} else {
		$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
			redirect('superadmin/leave_scheme');
	}
}

// leave reasons master
public function leave_reason()
{
	$user_id = $this->session->userdata('user_id');
	$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }
	$data['data'] = $this->common_model->getallwhere_leaveReason(array('master_leave_reason.status !=' => 2));
	// echo "<pre>"; print_r($data); die;
	$data['leave_type'] = $this->common_model->getAllwhere('leave_type', array('status' => 1));
	$data['leave_scheme'] = $this->common_model->getAllwhere('master_leave_scheme', array('status' => 1));
	$this->load->view('Admin/s_leave_reason',$data);
}

public function addleave_reason()
{
	$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }

	$this->form_validation->set_rules('leave_type', 'Leave Type', 'trim|required');
	$this->form_validation->set_rules('leave_scheme', 'Leave Scheme', 'trim|required');
	$this->form_validation->set_rules('reason', 'Reason', 'trim|required');

	if($this->form_validation->run())
	{
		// $chk = $this->common_model->getsingle('master_leave_reason', array('leave_scheme' => $this->input->post('leave_scheme')));
		// if($chk == '')
		// {
			$insert['leave_type'] = $this->input->post('leave_type');
			$insert['leave_scheme'] = $this->input->post('leave_scheme');
			$insert['reason'] = $this->input->post('reason');
			$insert['created_date'] = date('Y-m-d h:i:s');

			$this->common_model->InsertData('master_leave_reason', $insert);
			$this->session->set_flashdata('msg','<div class="alert alert-success">Leave Reason added successfully!</div>');
			redirect('superadmin/leave_reason');
		// }
		// else 
		// {
		// 	$this->session->set_flashdata('msg', '<div class="alert alert-danger">Leave Scheme already exists!</div>');
		// 	redirect('superadmin/leave_scheme');
		// }
		
	}
	else 
	{
		$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
		redirect('superadmin/leave_reason');
	}
}

public function editleave_reason($id)
{
	$user_id = $this->session->userdata('user_id');
	$type = $this->session->userdata('user_type');if($type!=3){ redirect(); }

	$this->form_validation->set_rules('leave_type', 'Leave Type', 'trim|required');
	$this->form_validation->set_rules('leave_scheme', 'Leave Scheme', 'trim|required');
	$this->form_validation->set_rules('reason', 'Reason', 'trim|required');

	if($this->form_validation->run())
	{
		$insert['leave_type'] = $this->input->post('leave_type');
		$insert['leave_scheme'] = $this->input->post('leave_scheme');
		$insert['reason'] = $this->input->post('reason');

		$run = $this->common_model->UpdateData('master_leave_reason', array('id' => $id), $insert);
		
		if($run)
		{
			$this->session->set_flashdata('msg','<div class="alert alert-success">Leave Reason Updated successfully!</div>');
			redirect('superadmin/leave_reason');
		} 
		else
		{
			$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
		}

	} 
	else 
	{
		$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
		redirect('superadmin/leave_reason');
	}
}

public function deleteleave_reason($id) 
{
	$run = $this->common_model->UpdateData('master_leave_reason',array('id'=>$id),array('status'=>2));
		//echo $this->db->last_query();
		if($run) {
			
			$this->session->set_flashdata('msg','<div class="alert alert-success">Leave Reason deleted successfully</div>');
			 redirect('superadmin/leave_reason');
						
		} else {
			$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
			 redirect('superadmin/leave_reason');
		}
}

public function changeStatusleave_reason($id, $status)
{
	
	$companies = $this->common_model->GetSingleData('master_leave_reason',array('id'=>$id));
	$run = $this->common_model->UpdateData('master_leave_reason',array('id'=>$id),array('status'=>$status));

	//echo $this->db->last_query();
	if($run) {
		
		$this->session->set_flashdata('msg','<div class="alert alert-success">Leave Reason Status Changed successfully</div>');
			redirect('superadmin/leave_reason');
					
	} else {
		$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
			redirect('superadmin/leave_reason');
	}
}

}

?>
