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
		 date_default_timezone_set('Asia/Kolkata');
		 $user_id = $this->session->userdata('user_id');
		 
	}

	public function check_login(){
		if(!$this->session->userdata('user_id') ){
			redirect('login');
		}
		 if($this->session->userdata('user_type')!=1){
			redirect(base_url());
		} 
		
	}
	
	
	
	

	public function index()
	{ 
		// echo "hi"; die;
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$comp_id = $this->session->userdata('comp_id');
		$date = date('Y-m-d');
		$data['user'] = $this->common_model->GetSingleData('users',array('user_id' =>$this->session->userdata('user_id'),'user_type'=>$type));
		$data['user_bank_detail'] = $this->common_model->GetSingleData('user_bank_detail',array('user_id' =>$this->session->userdata('user_id')));
		$data['announcements'] = $this->common_model->GetAllData('announcements',array('start_date<=' =>$date,'end_date>='=>$date,'comp_id'=>$this->session->userdata('comp_id')));
		$data['upcoming_holidays'] = $this->common_model->GetAllData('upcoming_holidays',array('holiday_date>=' =>$date,'status'=>1,'comp_id'=>$comp_id),'holiday_date');
		$data['awards'] = $this->common_model->GetAllData('awards',array('status'=>1),'month_year','asc');
		$data['company'] = $this->common_model->GetSingleData('companies',array('company_id'=>$this->session->userdata('comp_id')));
		//$data['emp_leaves_cl'] = $this->common_model->GetAllData('emp_leaves',array('user_id'=>$user_id,'leave_type'=>2,'selected_days!='=>0,'status'=>'Approved'),'id');
		
		//Casual Leaves
		$cl_whr = "YEAR(NOW()) = YEAR(emp_leaves.from_date) and emp_leaves.user_id=".$user_id." and emp_leaves.comp_id='".$comp_id."' and emp_leaves.status='Approved' and leave_type.name LIKE '%casual%' and leave_type.status=1";
		$data['emp_leaves_cl'] = $emp_leaves_cl =  $this->common_model->join_fetchall('SUM(emp_leaves.selected_days) AS Totalcl,SUM(emp_leaves.half_days) AS TotalHalfCL','emp_leaves','leave_type','emp_leaves.leave_type=leave_type.id',$cl_whr);
		
		//Optional Leaves
		$ol_whr = "YEAR(NOW()) = YEAR(emp_leaves.from_date) and emp_leaves.user_id=".$user_id." and emp_leaves.comp_id='".$comp_id."' and emp_leaves.status='Approved' and leave_type.name LIKE '%Optional%' and leave_type.status=1";
		$data['emp_leaves_ol'] = $emp_leaves_ol =  $this->common_model->join_fetchall('SUM(emp_leaves.selected_days) AS Totalcl,SUM(emp_leaves.half_days) AS TotalHalfCL','emp_leaves','leave_type','emp_leaves.leave_type=leave_type.id',$ol_whr);
		
		//Earned Leaves
		$el_whr = "YEAR(NOW()) = YEAR(emp_leaves.from_date) and emp_leaves.user_id=".$user_id." and emp_leaves.comp_id='".$comp_id."' and emp_leaves.status='Approved' and leave_type.name LIKE '%earned%' and leave_type.status=1";
		$data['emp_leaves_el'] = $emp_leaves_el =  $this->common_model->join_fetchall('SUM(emp_leaves.selected_days) AS Totalcl,SUM(emp_leaves.half_days) AS TotalHalfCL','emp_leaves','leave_type','emp_leaves.leave_type=leave_type.id',$el_whr);
		
		//Compoff Leaves
		$Compoff_whr = "YEAR(NOW()) = YEAR(emp_leaves.from_date) and emp_leaves.user_id=".$user_id." and emp_leaves.comp_id='".$comp_id."' and emp_leaves.status='Approved' and leave_type.name LIKE '%compoff%' and leave_type.status=1";
		$data['emp_leaves_Compoff'] = $emp_leaves_Compoff =  $this->common_model->join_fetchall('SUM(emp_leaves.selected_days) AS Totalcl,SUM(emp_leaves.half_days) AS TotalHalfCL','emp_leaves','leave_type','emp_leaves.leave_type=leave_type.id',$Compoff_whr);
		
		//Compoff Leaves MONTHwise
		$Compoffm_whr = "YEAR(NOW()) = YEAR(emp_leaves.from_date) and MONTH(NOW()) = MONTH(emp_leaves.from_date) and emp_leaves.user_id=".$user_id." and emp_leaves.comp_id='".$comp_id."' and emp_leaves.status='Approved' and leave_type.name LIKE '%compoff%' and leave_type.status=1";
		$data['emp_leaves_Compoff_month'] = $emp_leaves_Compoffm =  $this->common_model->join_fetchall('SUM(emp_leaves.selected_days) AS Totalcl,SUM(emp_leaves.half_days) AS TotalHalfCL','emp_leaves','leave_type','emp_leaves.leave_type=leave_type.id',$Compoffm_whr);
		
		//print_r($emp_leaves_cl[0][Totalcl]); die;
		//echo $this->db->last_query(); die;
		
		function countDays($y, $m, $ignore = false) 
			{
				$result = 0;
				$loop = strtotime("$y-$m-01");
				do if(!$ignore or !in_array(strftime("%u",$loop),$ignore))
					$result++;
				while(strftime("%m",$loop = strtotime("+1 day",$loop))==$m);
				return $result;
			}
			
		$where = "MONTH(attendence_date)=MONTH(now()) and YEAR(attendence_date)=YEAR(now()) and status='1' and comp_id='".$comp_id."' and user_id=".$user_id;
		$data['attendenceInMonth'] =$attendenceInMonth =  $this->common_model->GetAllData('attendence',$where,'','','','','','attendence_date');
		$hourss='';
		$time=array();
		foreach($attendenceInMonth as $val){
			$dt = $val['attendence_date'];
			$in = str_split($val['checkIn'],5);
			$out = str_split($val['checkOut'],5);
			$t1 =  $dt." ".$in[0].":00";
			$t2 =  $dt." ".$out[0].":00";
			$to_time = strtotime($t1);
			$from_time = strtotime($t2);
			$minutes = round(abs($to_time - $from_time) / 60,2). " minute";
			$hourss = intdiv($minutes, 60).':'. ($minutes % 60).':00';
			$time[]=$hourss;
		}
		$total_hours_inMonth = $this->common_model->getSumTotalHours($time);
		
		//echo $total_hours_inMonth; die;
		
		//$data['totalMonthdays'] = countDays(date("Y"),date('m'),array(7));
		$data['totalMonthdays'] = cal_days_in_month(CAL_GREGORIAN, date('m'), date('Y'));
		
		$where = "MONTH(from_date)=MONTH(now()) and YEAR(from_date)=YEAR(now()) and status='Approved' and user_id=".$user_id." and comp_id='".$this->session->userdata('comp_id')."' " ;
		$data['leavesInMonth'] = $this->common_model->GetAllData('emp_leaves',$where);
		
		$where1 = "YEAR(from_date)=YEAR(now()) and status='Approved' and user_id=".$user_id." and comp_id='".$this->session->userdata('comp_id')."' ";
		$data['leavesInYear'] = $this->common_model->GetAllData('emp_leaves',$where1);
		
		$data['leavesSumInYear'] = $this->common_model->Get_sum('emp_leaves',$where1,'sum(selected_days) as sumLeave');
		
		$data['halfleavesSumInYear'] = $this->common_model->Get_sum('emp_leaves',$where1,'sum(half_days) as sumhalfLeave');
		
		//echo $this->db->last_query(); die;
		$this->load->view('employee/index',$data);
	}

	public function employeeprofiledataForSidesection()
	{
		$user_id = $this->session->userdata('user_id');
		
		$date = date('Y-m-d');
		
		function countDays($y, $m, $ignore = false) 
		{
			$result = 0;
			$loop = strtotime("$y-$m-01");
			do if(!$ignore or !in_array(strftime("%u",$loop),$ignore))
				$result++;
			while(strftime("%m",$loop = strtotime("+1 day",$loop))==$m);
			return $result;
		}
			
		$where = "MONTH(attendence_date)=MONTH(now()) and YEAR(attendence_date)=YEAR(now()) and status='1' and user_id=".$user_id;
		$data['attendenceInMonth'] =$attendenceInMonth =  $this->common_model->GetAllData('attendence',$where,'','','','','','attendence_date');
		$hourss='';
		$time=array();
		foreach($attendenceInMonth as $val)
		{
			$dt = $val['attendence_date'];
			$in = str_split($val['checkIn'],5);
			$out = str_split($val['checkOut'],5);
			$t1 =  $dt." ".$in[0].":00";
			$t2 =  $dt." ".$out[0].":00";
			$to_time = strtotime($t1);
			$from_time = strtotime($t2);
			$minutes = round(abs($to_time - $from_time) / 60,2). " minute";
			$hourss = intdiv($minutes, 60).':'. ($minutes % 60).':00';
			$time[]=$hourss;
		}
		$total_hours_inMonth = $this->common_model->getSumTotalHours($time);
		
		//echo $total_hours_inMonth; die;
		
		//$data['totalMonthdays'] = countDays(date("Y"),date('m'),array(7));
		$data['totalMonthdays'] = cal_days_in_month(CAL_GREGORIAN, date('m'), date('Y'));
		
		$where = "MONTH(from_date)=MONTH(now()) and YEAR(from_date)=YEAR(now()) and status='Approved' and user_id=".$user_id;
		$data['leavesInMonth'] = $this->common_model->GetAllData('emp_leaves',$where);
		
		$where1 = "YEAR(from_date)=YEAR(now()) and status='Approved' and user_id=".$user_id;
		$data['leavesInYear'] = $this->common_model->GetAllData('emp_leaves',$where1);
		
		$data['leavesSumInYear'] = $this->common_model->Get_sum('emp_leaves',$where1,'sum(selected_days) as sumLeave');
		
		$data['halfleavesSumInYear'] = $this->common_model->Get_sum('emp_leaves',$where1,'sum(half_days) as sumhalfLeave');
		
	} 
	
	public function apply_leave()
	{
		
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$data['compoffleave'] = $compoffleave = $this->common_model->get_compaff();
		//$data['leave_type'] = $this->common_model->GetAllData('leave_type',array('status' =>1,'req_approval'=>'Yes','name!='=>'Compoff'),'id','asc');
		$where = "status =1 and (comp_id='' or comp_id='".$this->session->userdata('comp_id')."') and id!=".$compoffleave[0][id];
		$data['leave_type'] = $this->common_model->GetAllData('leave_type',$where,'id','asc');
		
		//print_r($compoffleave);die;
		$this->load->view('employee/apply-leave',$data);
	}
	
	public function apply_emp_leaves()
	{
		$user_id = $this->session->userdata('user_id');
		$comp_id = $this->session->userdata('comp_id');
		
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
						
						$insert['user_id'] 		= $user_id;
						$insert['from_date'] 	= date('Y-m-d',strtotime($ldate[$i]));
						$insert['half_days'] 	= $insert1 =='on'?"1":"0";
						$insert['selected_days']= 	$insert1!='on'?"1":"0";			
						$insert['leave_type'] 	= $leave_type[$i];
						$insert['reason'] 		= $reason[$i];
						$insert['emp_id'] 		= $user['emp_id'];
						$insert['comp_id'] 		= $comp_id;
						$insert['type'] 		= $this->input->post('type');
						$insert['status'] 		= "Pending";
						$insert['created_date'] = date('Y-m-d h:i:s');
						
						$run = $this->common_model->InsertData('emp_leaves',$insert);
						
						$data['compoffleave'] = $compoffleave = $this->common_model->get_compaff();
						//if($leave_type[$i] == 'compoff' ){
						if($leave_type[$i] == $compoffleave[0][id] ){
							$where = "user_id='".$user_id."' and status='Approved' ORDER BY id DESC LIMIT 1";
							$run1 = $this->common_model->UpdateData('compoff_emp_leaves',$where,array('leave_status'=>1));
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
						$insert['comp_id'] = $comp_id;
						$insert['type'] = $this->input->post('type');
						$insert['status'] = "Pending";
						$insert['created_date'] = date('Y-m-d h:i:s');
						//print_r($insert);die;
						$run = $this->common_model->InsertData('compoff_emp_leaves',$insert);
						$this->session->set_flashdata('msg','<div class="alert alert-success">Your leaves is pending! '.$msgs.'</div>');
						redirect('employee/compoff_leaves');
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
					$insert['comp_id'] = $comp_id;
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
	
	public function my_leaves()
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$comp_id = $this->session->userdata('comp_id');
		$data['employee'] = $this->common_model->GetSingleData('users',array('user_type'=>1,'user_id'=>$user_id));
		$data['myleaves'] = $this->common_model->GetAllData('emp_leaves',array('user_id' =>$user_id,'comp_id'=>$comp_id),'created_date','desc');
		$this->load->view('employee/my-leaves',$data);
	}
	
	public function compoff_leaves()
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$data['employee'] = $this->common_model->GetSingleData('users',array('user_type'=>1,'user_id'=>$user_id));
		$data['myleaves'] = $this->common_model->GetAllData('compoff_emp_leaves',array('user_id' =>$user_id,'comp_id'=>$this->session->userdata('comp_id')),'created_date','desc');
		$this->load->view('employee/compoff_leaves',$data);
	}
	
	public function delete_emp_leaves($id)
	{
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
	
	public function delete_emp_compoff_leaves($id)
	{
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
	
	public function expense_claims()
	{
		$user_id = $this->session->userdata('user_id'); 
		$type = $this->session->userdata('user_type');
		$data['employee'] =$users =  $this->common_model->GetSingleData('users',array('user_type'=>1,'user_id'=>$user_id));
		
		$data['manager_add'] = $this->common_model->GetAllData('users',array('user_type'=>2,'comp_id'=>$this->session->userdata('comp_id')));
	
		$data['managers'] = $this->common_model->GetAllData('users',array('user_type'=>2));
		$data['expense_type'] = $this->common_model->GetAllData('expense_types',array('status'=>1,'comp_id'=>$this->session->userdata('comp_id')),'id','asc');
		$data['account_type'] = $this->common_model->GetAllData('account_type',array('status'=>1,'comp_id'=>$this->session->userdata('comp_id')),'id','asc');
		
		$data['myexpense'] = $this->common_model->GetAllData('emp_expense_claims',array('user_id' =>$user_id),'created_date','desc');
		$this->load->view('employee/expense-claims',$data);
	}
	
	public function add_expense_claims()
	{
		$user_id = $this->session->userdata('user_id');
		
		$this->form_validation->set_rules('purpose','Purpose','required');
		$this->form_validation->set_rules('manager','manager','required');
		$this->form_validation->set_rules('account_type','Account Type','required');
		$this->form_validation->set_rules('expense_type','Expense Type','required');
		$this->form_validation->set_rules('amount','Amount','required|numeric');
		$this->form_validation->set_rules('purchase_date','Purchase date','required');
		$this->form_validation->set_rules('payDateRange','Pay DateRange','required');
		
		$user = $this->common_model->GetSingleData('users',array('user_id' =>$this->session->userdata('user_id')));
		
		if($this->form_validation->run())
		{
			$paydate = explode(' - ',$this->input->post('payDateRange'));
			$pay_fromdate = strtr($paydate[0], '/', '-');
			$pay_todate = strtr($paydate[1], '/', '-');
			
					$insert['user_id'] = $user_id;
					$insert['emp_id'] = $user['emp_id'];
					$insert['comp_id'] = $user['comp_id'];
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
	
	public function edit_expense_claims($id)
	{
		$user_id = $this->session->userdata('user_id');
		
			$this->form_validation->set_rules('purpose','Purpose','required');
			$this->form_validation->set_rules('manager','manager','required');
			$this->form_validation->set_rules('account_type','Account Type','required');
			$this->form_validation->set_rules('expense_type','Expense Type','required');
			$this->form_validation->set_rules('purchase_date','Purchase date','required');
			
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
					$insert['updated_date'] = date('Y-m-d h:i:s');
					
					if($_FILES['image']['name']){
					$upload = $this->Common_function->upload_image('assets/images/expense_bill/','image');
					$insert['bill'] = $upload['name'];
					}else{
					$insert['bill'] = $emp_expense_claims['bill'];
					}
					
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
	
	public function pdf_expense_claims($id)
	{
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
					
	}
	
	public function delete_expense_claims($id)
	{
		$run = $this->common_model->DeleteData('emp_expense_claims',array('id' =>$id));
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
	 
	public function salary_slips()
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$data['employee'] = $this->common_model->GetSingleData('users',array('user_type'=>1,'user_id'=>$user_id));
		$this->load->view('employee/salary-slips',$data);
	}
	 
	public function attendance()
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$comp_id = $this->session->userdata('comp_id');
		$data['employee'] = $this->common_model->GetSingleData('users',array('user_type'=>1,'user_id'=>$user_id,'comp_id'=>$comp_id));
		$data['attendence'] = $this->common_model->GetDatawithlimit('attendence',array('user_id'=>$user_id,'comp_id'=>$comp_id,'attendence_date'=>date('Y-m-d')),'id',1);
		$data['full_attendence'] = $this->common_model->GetAllData('attendence',array('user_id'=>$user_id,'comp_id'=>$comp_id),'attendence_date','desc');
		$this->load->view('employee/attendance',$data);
	}
		
	public function changes_password()
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$data['employee'] = $this->common_model->GetSingleData('users',array('user_type'=>1,'user_id'=>$user_id));
		$this->load->view('employee/changes-password',$data);
	}
	
	public function changePasswordForm()
	{
	    $this->form_validation->set_rules('password','Password','required|min_length[6]');
		$this->form_validation->set_rules('confirm_password','Confirm Password','required|matches[password]');
		
		if($this->form_validation->run())
		{	
			$insert['password'] = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
			$insert['pw'] = $this->input->post('password');
			$user_id = $this->input->post('id');
            
			$insert['updated_at'] = date('Y-m-d h:i:s');

			$run = $this->common_model->UpdateData('users',array('user_id'=>$user_id),$insert);
			
			if($run){
			
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
		
	public function job_position($id)
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$tdate=date('Y-m-d');
		$data['employee'] = $this->common_model->GetSingleData('users',array('user_type'=>1,'user_id'=>$user_id));
		$data['job_vacancies'] = $this->common_model->GetAllData('job_vacancies',array('status'=>1,'comp_id'=>$this->session->userdata('comp_id'),'lastDateToapply>='=>$tdate,'closeDate >='=>$tdate,'postedDate<='=>$tdate));
		$data['job_position'] = $this->common_model->GetSingleData('job_vacancies',array('status'=>1,'comp_id'=>$this->session->userdata('comp_id'),'id'=>$id));
		$this->load->view('employee/job_position',$data);
	}
		
	public function job_vacancies()
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$tdate=date('Y-m-d');
		$data['employee'] = $this->common_model->GetSingleData('users',array('user_type'=>1,'user_id'=>$user_id));
		$data['job_vacancies'] = $this->common_model->GetAllData('job_vacancies',array('status'=>1,'comp_id'=>$this->session->userdata('comp_id'),'lastDateToapply>='=>$tdate,'closeDate >='=>$tdate,'postedDate<='=>$tdate));
		$data['job_application'] = $this->common_model->GetAllData('job_applications',array('user_id'=>$user_id,'comp_id'=>$this->session->userdata('comp_id')));
		$this->load->view('employee/job-vacancies',$data);
	}
	
	public function profile()
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$data['employees'] = $this->common_model->GetSingleData('users',array('user_id'=>$user_id,'user_type'=>1,'comp_id'=>$this->session->userdata('comp_id')),'user_id');
		$this->load->view('employee/profile',$data);
	}
	
	public function addProfileForm()
	{
		$user_id = $this->session->userdata('user_id');
		$this->form_validation->set_rules('first_name','First Name','required');
		$this->form_validation->set_rules('last_name','Last name','required');
		$this->form_validation->set_rules('father_name','Father name','required');
		$this->form_validation->set_rules('email','email','required');
		
		if($this->form_validation->run())
		{
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
			
			if($run)
			{
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
	
	public function addattendance()
	{
		$user_id = $this->session->userdata('user_id');
		$myIP = $_POST["myIP"];
		$workingFrom = $_POST["workingFrom"];
		$note = $_POST["note"];
		$clockIn = $_POST["clockIn"];
		$todayDate = $_POST["todayDate"];
		
			$insert['myIP'] = $myIP;
			$insert['workingFrom'] = $workingFrom;
			$insert['user_id'] = $user_id;
			$insert['empId'] = $this->session->userdata('emp_id');
			$insert['comp_id'] = $this->session->userdata('comp_id');
			$insert['note'] = $note;
			$insert['checkIn'] = date('H:i A',strtotime($clockIn));
			$insert['attendence_date'] = $todayDate;
			$insert['created_at'] = date('Y-m-d h:i:s');
			
		$run = $this->common_model->InsertData('attendence',$insert);
			
			if($run)
			{
				echo $msg = '<div class="alert alert-success">Clock In successfully</div>';
			}
			else
			{
				echo $msg ='<div class="alert alert-danger">Something went wrong</div>';
			}			
	
	}
	
	public function editAttendance()
	{
		$user_id = $this->session->userdata('user_id');
		$clockOut = $_POST["clockOut"];
		$todayDate = $_POST["todayDate"];
		$tblid = $_POST["tblid"];
		
		$emp_att = $this->common_model->GetSingleData('attendence',array('user_id'=>$user_id,'attendence_date'=>$todayDate,'id'=>$tblid));
		
			$dt = $emp_att['attendence_date'];
			$in = str_split($emp_att['checkIn'],5);
			$out = str_split(date('H:i A',strtotime($clockOut)),5);
			$t1 =  $dt." ".$in[0].":00";
			$t2 =  $dt." ".$out[0].":00";
			$to_time = strtotime($t1);
			$from_time = strtotime($t2);
			$minutes = round(abs($to_time - $from_time) / 60,2). " minute";
			$hours = intdiv($minutes, 60).'hr'. ($minutes % 60).'m';
			
			$insert['checkOut'] = date('H:i A',strtotime($clockOut));
			$insert['total_hour'] = $hours;
			$insert['updated_at'] = date('Y-m-d h:i:s');
			
		$run = $this->common_model->UpdateData('attendence',array('user_id'=>$user_id,'attendence_date'=>$todayDate,'id'=>$tblid),$insert);
			
			echo $msg = '<div class="alert alert-success">Clock Out successfully</div>';
	}
	
	public function save_attendance()
	{
		$user_id = $this->session->userdata('user_id');
		
			$this->form_validation->set_rules('myIP','myIP','required');
			$this->form_validation->set_rules('workingFrom','workingFrom','required');
			$this->form_validation->set_rules('clockIn','clock In','required');
			$this->form_validation->set_rules('clockOut','clock Out','required');
			
		$user = $this->common_model->GetSingleData('users',array('user_id' =>$this->session->userdata('user_id')));
		
		if($this->form_validation->run())
		{
			$insert['user_id'] = $user_id;
			$insert['attendence_date'] = $this->input->post('todayDate');
			$insert['myIP'] = $this->input->post('myIP');
			$insert['workingFrom'] = $this->input->post('workingFrom');
			$insert['comp_id'] = $this->session->userdata('comp_id');
			$insert['clockIn'] = $this->input->post('clockOut');
			$insert['clockOut'] = $this->input->post('clockOut');
			$insert['note'] = $this->input->post('note');
			$insert['created_at'] = date('Y-m-d h:i:s');
			
			$run = $this->common_model->InsertData('attendence',$insert);
				
			if($run)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success">Attendance added successfully!</div>');
				redirect('employee/attendance');
			} 
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
				redirect('employee/attendance');
			}
			
		} else {
				$this->session->set_flashdata('msg','<div class="alert alert-danger">'.validation_errors().'</div>');
				redirect('employee/attendance');
		}
	}
	
	
	public function job_application($id)
	{
		$user_id = $this->session->userdata('user_id');
		$name = $_POST["name"];
		$email = $_POST["email"];
		$phone = $_POST["phone"];
		$cover = $_POST["cover"];
		if($_FILES['file']['name'])
		{
			$upload = $this->Common_function->upload_image('assets/images/resume/','file','pdf');
			$insert['resume'] = $upload['name'];
		}
		
			$insert['user_id'] = $user_id;
			$insert['position_id'] = $id;
			$insert['name'] = $name;
			$insert['email'] = $email;
			$insert['phone'] = $phone;
			$insert['cover'] = $cover;
			$insert['comp_id'] = $this->session->userdata('comp_id');
			$insert['application_date'] = date('Y-m-d');
			$insert['created_date'] = date('Y-m-d h:i:s');
			
		$run = $this->common_model->InsertData('job_applications',$insert);
			
			if($run)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success">Applied successfully!</div>');
			
				redirect('employee/job_vacancies');
			} else {
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
				redirect('employee/job_vacancies');
			}			
	}
	 
	public function delete_job_application($id)
	{
		$run = $this->common_model->DeleteData('job_applications',array('id' =>$id));
		if($run)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success">Job apllication deleted successfully!</div>');
				
			} 
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrong</div>');
			}
		redirect('employee/job_vacancies');
	}
	
	public function logout()
	{
		session_destroy();
		redirect();
	}

	public function test()
	{
		
		
	}
	

}

?>