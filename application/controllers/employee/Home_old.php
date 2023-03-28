<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');
require FCPATH.'vendor/autoload.php';
/**
 * 
 */
class Home extends CI_Controller
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
	
	function print()
    {
        $html = $this->load->view('employee/receipt_pdf','',true);
        $mpdf = new \Mpdf\Mpdf([
            'format'=>'A4',
            'margin_top'=>0,
            'margin_right'=>0,
            'margin_left'=>0,
            'margin_bottom'=>0,
        ]);
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }

	public function index(){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$date = date('Y-m-d');
		$data['user'] = $this->common_model->GetSingleData('users',array('user_id' =>$this->session->userdata('user_id'),'user_type'=>$type));
		$data['user_bank_detail'] = $this->common_model->GetSingleData('user_bank_detail',array('user_id' =>$this->session->userdata('user_id')));
		$data['announcements'] = $this->common_model->GetAllData('announcements',array('start_date<=' =>$date,'end_date>='=>$date));
		//echo $this->db->last_query(); die;
		$this->load->view('employee/index',$data);
	} 
	
	public function apply_leave(){
		
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		
		$data['leave_type'] = $this->common_model->GetAllData('leave_type',array('status' =>1,'req_approval'=>'Yes','name!='=>'Compoff'),'id','asc');
		$this->load->view('employee/apply-leave',$data);
	}
	
	public function apply_emp_leaves(){
		$user_id = $this->session->userdata('user_id');
		
		if($this->input->post('type') == "single")
		{
			$this->form_validation->set_rules('ldate[]','Date','required');
			$this->form_validation->set_rules('leave_type[]','Leave Type','required');
			$this->form_validation->set_rules('reason[]','Reason','required');
		}elseif($this->input->post('type') == "compoff"){
			$this->form_validation->set_rules('cdate','Date','required');
			$this->form_validation->set_rules('leave_type','Leave Type','required');
			$this->form_validation->set_rules('reason','Reason','required');
		}
		else
		{
			$this->form_validation->set_rules('txtDateRange','Date range','required');
			$this->form_validation->set_rules('m_selected_days','Days','required');
			$this->form_validation->set_rules('leave_type','Leave Type','required');
			$this->form_validation->set_rules('reason','Reason','required');
		}
		
		$user = $this->common_model->GetSingleData('users',array('user_id' =>$this->session->userdata('user_id')));
		
		
		if($this->form_validation->run()){
			if($this->input->post('type') == "single")
			{
				
				$ldate = $this->input->post('ldate');
				$leave_type = $this->input->post('leave_type');
				$reason = $this->input->post('reason');
				
				for($i=0; $i < count($ldate); $i++){
					
					$emp_leave = $this->common_model->GetSingleData('emp_leaves',array('user_id' =>$user_id,'from_date'=>date('Y-m-d',strtotime($ldate[$i]))));
					
					if($emp_leave=='')
					{
						$insert1 = $this->input->post('selected_days'.$i);
						$insert['user_id'] = $user_id;
						$insert['from_date'] = date('Y-m-d',strtotime($ldate[$i]));
						$insert['half_days'] = $insert1 =='on'?"1":"0";
						$insert['selected_days'] = 	$insert1!='on'?"1":"0";			
						$insert['leave_type'] = $leave_type[$i];
						$insert['reason'] = $reason[$i];
						$insert['emp_id'] = $user['emp_id'];
						$insert['type'] = $this->input->post('type');
						$insert['status'] = "Pending";
						$insert['created_date'] = date('Y-m-d h:i:s');
						$run = $this->common_model->InsertData('emp_leaves',$insert);
						if($leave_type[$i] == 'compoff' ){
							$run1 = $this->common_model->UpdateData('compoff_emp_leaves',array('user_id'=>$user_id),array('leave_status'=>1));
						}
					}
					else
					{
						$emp_leave['status']=='Pending'?$msgs="Your leaves is pending for ".$emp_leave['leave_type']." leave type.":$msgs="Your leaves is approved for ".$emp_leave['leave_type']." leave type.";
						$this->session->set_flashdata('msg','<div class="alert alert-danger">Already exist! '.$msgs.'</div>');
						redirect('employee/apply_leave');
					}
				}
			}elseif($this->input->post('type') == "compoff")
			{
				$ldate = $this->input->post('cdate');
				$leave_type = $this->input->post('leave_type');
				$reason = $this->input->post('reason');
				
				//for($i=0; $i < count($ldate); $i++){
					
					$emp_leave = $this->common_model->GetSingleData('compoff_emp_leaves',array('user_id' =>$user_id,'from_date'=>date('Y-m-d',strtotime($ldate))));
					
					if($emp_leave=='')
					{
						
						$insert['user_id'] = $user_id;
						$insert['from_date'] = date('Y-m-d',strtotime($ldate));
						$insert['leave_type'] = $leave_type;
						$insert['reason'] = $reason;
						$insert['selected_days'] = 	'1';	
						$insert['emp_id'] = $user['emp_id'];
						$insert['type'] = $this->input->post('type');
						$insert['status'] = "Pending";
						$insert['created_date'] = date('Y-m-d h:i:s');
						//print_r($insert);die;
						$run = $this->common_model->InsertData('compoff_emp_leaves',$insert);
					}
					else
					{
						$emp_leave['status']=='Pending'?$msgs="Your leaves is pending for ".$emp_leave['leave_type']." leave type.":$msgs="Your leaves is approved for ".$emp_leave['leave_type']." leave type.";
						$this->session->set_flashdata('msg','<div class="alert alert-danger">Already exist! '.$msgs.'</div>');
						redirect('employee/apply_leave');
					}
				//}
			}
			else
			{
				$dates=explode(' - ',$this->input->post('txtDateRange'));
				$date1 = strtr($dates[0], '/', '-');
				$date2 = strtr($dates[1], '/', '-');
				$emp_leaves = $this->common_model->GetSingleData('emp_leaves',array('user_id' =>$user_id,'from_date'=>date('Y-m-d', strtotime($date1)),'to_date'=>date('Y-m-d', strtotime($date2))));
				
				if($emp_leaves=='')
				{
					$insert['user_id'] = $user_id;
					$insert['from_date'] = date('Y-m-d', strtotime($date1));
					$insert['to_date'] = date('Y-m-d', strtotime($date2));
					$insert['leave_type'] = $this->input->post('leave_type');
					$insert['selected_days'] = $this->input->post('m_selected_days');
					$insert['reason'] = $this->input->post('reason');
					$insert['emp_id'] = $user['emp_id'];
					$insert['type'] = $this->input->post('type');
					$insert['status'] = "Pending";
					$insert['created_date'] = date('Y-m-d h:i:s');
					$run = $this->common_model->InsertData('emp_leaves',$insert);
				}
				else
				{
					$emp_leaves['status']=='Pending'?$msgs="Your leaves is pending.":$msgs="Your leaves is approved.";
					$this->session->set_flashdata('msg','<div class="alert alert-danger">Already exist! '.$msgs.'</div>');
					redirect('employee/apply_leave');
				}
			}
			if($run)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success">Leaves added successfully!</div>');
				redirect('employee/my_leaves');
			} 
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
				redirect('employee/my_leaves');
			}
			
			
		 } else {
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
				redirect('employee/my_leaves');
		}
	}
	
	public function my_leaves(){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$data['employee'] = $this->common_model->GetSingleData('users',array('user_type'=>1,'user_id'=>$user_id));
		$data['myleaves'] = $this->common_model->GetAllData('emp_leaves',array('user_id' =>$user_id),'created_date','desc');
		//$where = "where user_id=".$user_id;
		//$data['myleaves'] = $this->common_model->all_leaves($where);
		//SELECT * from emp_leaves UNION SELECT * from compoff_emp_leaves where user_id=8;
		//compoff_emp_leaves
		//echo "<pre>";print_r($data['myleaves']);die;
		$this->load->view('employee/my-leaves',$data);
	}
	
	public function compoff_leaves(){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$data['employee'] = $this->common_model->GetSingleData('users',array('user_type'=>1,'user_id'=>$user_id));
		$data['myleaves'] = $this->common_model->GetAllData('compoff_emp_leaves',array('user_id' =>$user_id),'created_date','desc');
		//echo "<pre>";print_r($data['myleaves']);die;
		$this->load->view('employee/compoff_leaves',$data);
	}
	
	public function delete_emp_leaves($id){
		
		$run = $this->common_model->DeleteData('emp_leaves',array('id' =>$id));
		if($run)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success">Leave deleted successfully!</div>');
				
			} 
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
			}
		redirect('employee/my_leaves');
	}
	
	public function delete_emp_compoff_leaves($id){
		
		$run = $this->common_model->DeleteData('compoff_emp_leaves',array('id' =>$id));
		if($run)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success">Comp off Leave deleted successfully!</div>');
				
			} 
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
			}
		redirect('employee/my_leaves');
	}
	
	public function expense_claims(){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$data['employee'] = $this->common_model->GetSingleData('users',array('user_type'=>1,'user_id'=>$user_id));
		//$data['manager_add'] = $this->common_model->managers_only();
		//$data['managers'] = $this->common_model->managers_only();
		$data['manager_add'] = $this->common_model->GetAllData('users',array('user_type'=>2));
	
		$data['managers'] = $this->common_model->GetAllData('users',array('user_type'=>2));
		$data['expense_type'] = $this->common_model->GetAllData('expense_types',array('status'=>1),'id','asc');
		$data['account_type'] = $this->common_model->GetAllData('account_type',array('status'=>1),'id','asc');
		//echo   $this->db->last_query();die;
		//echo   "<pre>"; print_r($data['manager']);die;
		$data['myexpense'] = $this->common_model->GetAllData('emp_expense_claims',array('user_id' =>$user_id),'created_date','desc');
		$this->load->view('employee/expense-claims',$data);
	}
	
	public function add_expense_claims(){
		$user_id = $this->session->userdata('user_id');
		
		//echo "hi"; print_r($this->input->post()); die;
		
			/*$this->form_validation->set_rules('item_name','Name','required');
			$this->form_validation->set_rules('purchase_from','Purchase From','required');
			$this->form_validation->set_rules('price','Price','required');*/
			$this->form_validation->set_rules('purpose','Purpose','required');
			$this->form_validation->set_rules('manager','manager','required');
			$this->form_validation->set_rules('account_type','Account Type','required');
			$this->form_validation->set_rules('expense_type','Expense Type','required');
			$this->form_validation->set_rules('amount','Amount','required|numeric');
			$this->form_validation->set_rules('purchase_date','Purchase date','required');
			$this->form_validation->set_rules('payDateRange','Pay DateRange','required');
		
		$user = $this->common_model->GetSingleData('users',array('user_id' =>$this->session->userdata('user_id')));
		
		if($this->form_validation->run()){
			$paydate = explode(' - ',$this->input->post('payDateRange'));
			$pay_fromdate = strtr($paydate[0], '/', '-');
			$pay_todate = strtr($paydate[1], '/', '-');
			
					$insert['user_id'] = $user_id;
					$insert['emp_id'] = $user['emp_id'];
					$insert['request_no'] = "EXP".rand(1000,10000)."".$user_id;
					$insert['purpose'] = $this->input->post('purpose');
					$insert['manager'] = $this->input->post('manager');
					$insert['account_type'] = $this->input->post('account_type');
					$insert['expense_type'] = $this->input->post('expense_type');
					$insert['pay_fromdate'] = date('Y-m-d', strtotime($pay_fromdate));
					$insert['pay_todate'] = date('Y-m-d',strtotime($pay_todate));
					$insert['SSN'] = $this->input->post('SSN');
					$insert['amount'] = $this->input->post('amount');
					//$insert['price'] =  number_format((float)$this->input->post('price'), 2, '.', '');
					$insert['purchase_date'] = date('Y-m-d',strtotime($this->input->post('purchase_date')));
					$insert['description'] = $this->input->post('description');
					$insert['status'] = "0";
					$insert['created_date'] = date('Y-m-d h:i:s');
					if($_FILES['image']['name']){
					$upload = $this->Common_function->upload_image('assets/images/expense_bill/','image');
					$insert['bill'] = $upload['name'];
					}
					//echo "hi"; print_r($insert); die;
					$run = $this->common_model->InsertData('emp_expense_claims',$insert);
				
			
			if($run)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success">Expense claim added successfully!</div>');
				redirect('employee/expense_claims');
			} 
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
				redirect('employee/expense_claims');
			}
			
			
		 } else {
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
				redirect('employee/expense_claims');
		}
	}
	
	public function edit_expense_claims($id){
		$user_id = $this->session->userdata('user_id');
		
		//echo "hi"; print_r($this->input->post('payDateRange')); die;
		
			/*$this->form_validation->set_rules('item_name','Name','required');
			$this->form_validation->set_rules('purchase_from','Purchase From','required');
			$this->form_validation->set_rules('price','Price','required');*/
			$this->form_validation->set_rules('purpose','Purpose','required');
			$this->form_validation->set_rules('manager','manager','required');
			$this->form_validation->set_rules('account_type','Account Type','required');
			$this->form_validation->set_rules('expense_type','Expense Type','required');
			$this->form_validation->set_rules('purchase_date','Purchase date','required');
			//$this->form_validation->set_rules('payDateRange','Pay DateRange','required');
		
		$user = $this->common_model->GetSingleData('users',array('user_id' =>$this->session->userdata('user_id')));
		$emp_expense_claims = $this->common_model->GetSingleData('emp_expense_claims',array('id' =>$id));
		
		if($this->form_validation->run()){
			
					$insert['user_id'] = $user_id;
					$insert['emp_id'] = $user['emp_id'];
					$insert['purpose'] = $this->input->post('purpose');
					$insert['manager'] = $this->input->post('manager');
					$insert['account_type'] = $this->input->post('account_type');
					$insert['expense_type'] = $this->input->post('expense_type');
					$insert['pay_fromdate'] = date('Y-m-d', strtotime($this->input->post('pay_fromdate')));
					$insert['pay_todate'] = date('Y-m-d',strtotime($this->input->post('pay_todate')));
					$insert['SSN'] = $this->input->post('SSN');
					$insert['amount'] = $this->input->post('amount');
					$insert['purchase_date'] = date('Y-m-d',strtotime($this->input->post('purchase_date')));
					$insert['description'] = $this->input->post('description');
					//$insert['status'] = "0";
					$insert['updated_date'] = date('Y-m-d h:i:s');
					
					if($_FILES['image']['name']){
					$upload = $this->Common_function->upload_image('assets/images/expense_bill/','image');
					$insert['bill'] = $upload['name'];
					}else{
					$insert['bill'] = $emp_expense_claims['bill'];
					}
					//echo "hi"; print_r($insert); die;
					$run = $this->common_model->UpdateData('emp_expense_claims',array('id'=>$id),$insert);
				
			
			if($run)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success">Expense claim updated successfully!</div>');
				redirect('employee/expense_claims');
			} 
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
			}
			
			
		 } else {
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
		}
	}
	
	public function pdf_expense_claims($id){
		$user_id = $this->session->userdata('user_id');
		
		
		$user = $this->common_model->GetSingleData('users',array('user_id' =>$this->session->userdata('user_id')));
		$data['employee'] = $this->common_model->GetSingleData('users',array('user_type'=>1,'user_id'=>$user_id));
		
		$data['myexpense'] = $this->common_model->GetSingleData('emp_expense_claims',array('id' =>$id));
		$html = $this->load->view('employee/expense_pdf',$data,true);
        $mpdf = new \Mpdf\Mpdf([
            'format'=>'A4',
            'margin_top'=>0,
            'margin_right'=>0,
            'margin_left'=>0,
            'margin_bottom'=>0,
        ]);
        $mpdf->WriteHTML($html);
        $mpdf->Output();
					
		//echo "hi"; print_r($insert); die;
		//$run = $this->common_model->UpdateData('emp_expense_claims',array('id'=>$id),$insert);

		
		
	}
	
	public function delete_expense_claims($id)
	{
		//$run = $this->common_model->DeleteData('emp_expense_claims',array('id' =>$id));
		if($run)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success">Expense claim deleted successfully!</div>');
				
			} 
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
			}
		redirect('employee/expense_claims');
	}
	 
	public function salary_slips(){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$data['employee'] = $this->common_model->GetSingleData('users',array('user_type'=>1,'user_id'=>$user_id));
		$this->load->view('employee/salary-slips',$data);
	}
	 
	
		
	public function attendance(){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$data['employee'] = $this->common_model->GetSingleData('users',array('user_type'=>1,'user_id'=>$user_id));
		$this->load->view('employee/attendance',$data);
	}
		
	public function changes_password(){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$data['employee'] = $this->common_model->GetSingleData('users',array('user_type'=>1,'user_id'=>$user_id));
		$this->load->view('employee/changes-password',$data);
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
		
	public function fresher_developer(){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$this->load->view('employee/fresher-developer');
	}
		
	public function job_vacancies(){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$data['employee'] = $this->common_model->GetSingleData('users',array('user_type'=>1,'user_id'=>$user_id));
		$this->load->view('employee/job-vacancies',$data);
	}
	
	public function profile(){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$data['employees'] = $this->common_model->GetSingleData('users',array('user_id'=>$user_id,'user_type'=>1),'user_id');
		//echo ""; print_r($data['employees']); die;
		$this->load->view('employee/profile',$data);
	}
	
	public function addProfileForm()
	{
		$user_id = $this->session->userdata('user_id');
		$this->form_validation->set_rules('first_name','First Name','required');
		$this->form_validation->set_rules('last_name','Last name','required');
		$this->form_validation->set_rules('father_name','Father name','required');
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
			if($run){
			$this->session->set_flashdata('msg','<div class="alert alert-success">Profile updated successfully</div>');
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
	
	
	public function logout(){
		session_destroy();
		redirect();
	}

	

}

?>