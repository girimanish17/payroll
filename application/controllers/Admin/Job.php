<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Job extends CI_Controller
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
	
	public function add_offer_breakup(){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$data['department'] = $this->common_model->GetAllData('department',array('comp_id'=>$this->session->userdata('comp_id')),'id');
		
		$this->form_validation->set_rules('name','Expense type','required');		
		if($this->form_validation->run())
		{
			$ins_data = array(
				'user_id'		=> $user_id,
				'name'			=> $this->input->post('name'),
				'department_id'	=> $this->input->post('department_id'),
				'designation_id'=> $this->input->post('designation_id'),
				'location'		=> $this->input->post('location'),
				'offer_date'	=> $this->input->post('offer_date'),
				'p_company'		=> $this->input->post('p_company'),
				'g_ctc'			=> $this->input->post('g_ctc'),
				'calculate_p'	=> $this->input->post('calculate_p'),
				'calculate_per'	=> $this->input->post('calculate_per'),
				'veriable_pay'	=> $this->input->post('veriable_pay'),
				'retention_bonus'=> $this->input->post('retention_bonus'),
				'mediclaim_insurance'=> $this->input->post('mediclaim_insurance'),
				'atc_annual'	=> $this->input->post('atc_annual'),
				'atc_monthly'	=> $this->input->post('atc_monthly'),
				'pvb_annual'	=> $this->input->post('pvb_annual'),
				'pvb_monthly'	=> $this->input->post('pvb_monthly'),
				'rba_annual'	=> $this->input->post('rba_annual'),
				'rba_monthly'	=> $this->input->post('rba_monthly'),
				'actpf_annual'	=> $this->input->post('actpf_annual'),
				'actpf_monthly'	=> $this->input->post('actpf_monthly'),
				'mip_annual'	=> $this->input->post('mip_annual'),
				'mip_monthly'	=> $this->input->post('mip_monthly'),
				'netctc'		=> $this->input->post('netctc'),
				'netctc_m'		=> $this->input->post('netctc_m'),
				'basic_annualized'=> $this->input->post('basic_annualized'),
				'basic_per_month'=> $this->input->post('basic_per_month'),
				'hra_annualized'=> $this->input->post('hra_annualized'),
				'hra_per_month'	=> $this->input->post('hra_per_month'),
				'cma_annualized'=> $this->input->post('cma_annualized'),
				'cma_per_month'	=> $this->input->post('cma_per_month'),
				'ja_annualized'	=> $this->input->post('ja_annualized'),
				'ja_per_month'	=> $this->input->post('ja_per_month'),
				'ma_annualized'	=> $this->input->post('ma_annualized'),
				'ma_per_month'	=> $this->input->post('ma_per_month'),
				'cea_annualized'=> $this->input->post('cea_annualized'),
				'cea_per_month'	=> $this->input->post('cea_per_month'),
				'ua_annualized'	=> $this->input->post('ua_annualized'),
				'ua_per_month'	=> $this->input->post('ua_per_month'),
				'sp_annualized'	=> $this->input->post('sp_annualized'),
				'sp_per_month'	=> $this->input->post('sp_per_month'),
				'totalfc'		=> $this->input->post('totalfc'),
				'totalfc_m'		=> $this->input->post('totalfc_m'),
				'pf_annualized'	=> $this->input->post('pf_annualized'),
				'pf_per_month'	=> $this->input->post('pf_per_month'),
				'pt_annualized'	=> $this->input->post('pt_annualized'),
				'pt_per_month'	=> $this->input->post('pt_per_month'),
				'esic_annualized'=> $this->input->post('esic_annualized'),
				'esic_per_month'=> $this->input->post('esic_per_month'),
				'it_annualized'	=> $this->input->post('it_annualized'),
				'it_per_month'	=> $this->input->post('it_per_month'),
				'mlwf_annualized'=> $this->input->post('mlwf_annualized'),
				'mlwf_per_month'=> $this->input->post('mlwf_per_month'),
				'totalded'		=> $this->input->post('totalded'),
				'totalded_m'	=> $this->input->post('totalded_m'),
				'nettake'		=> $this->input->post('nettake'),
				'nettake_m'		=> $this->input->post('nettake_m'),
				'entry_date'	=> date('Y-m-d'),
				'entry_date_time'=> date('Y-m-d H:i:s'),
			);
			$run = $this->common_model->InsertData('offer_breakup',$ins_data);
			//print_r($insert); die;
			if($run)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success">Offer Breakup added successfully!</div>');
				redirect('admin/offer_breakup');
			} 
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrongss</div>');
				redirect('admin/offer_breakup');
			}
			//echo "<pre>"; print_r($this->input->post()); die;
		}
		//echo "<pre>"; print_r($data['department']); die;
		$this->load->view('Admin/add_offer_breakup',$data);
	}
	public function offer_breakup()
	{
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$data['records'] = $this->common_model->getalloffers($user_id);
		//echo "<pre>"; print_r($data['records']); die;
		$this->load->view('Admin/offer_breakup',$data);
	}
	
	public function delete_offer($id)
	{
		$this->common_model->DeleteData('offer_breakup',array('id'=>$id));
		$this->session->set_flashdata('msg','<div class="alert alert-success">Offer Breakup deleted successfully!</div>');
		redirect('admin/offer_breakup');
	}
	
	public function edit_offer($id)
	{
		$data['rec'] = $rec = $this->common_model->GetSingleData('offer_breakup',array('id'=>$id));
		//echo "<pre>"; print_r($rec);die;
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$data['department'] = $this->common_model->GetAllData('department',array('comp_id'=>$this->session->userdata('comp_id')),'id');
		$data['designation'] = $this->common_model->GetAllData('designation',array('department_id'=>$rec['department_id']),'id');
		
		$this->form_validation->set_rules('name','Expense type','required');		
		if($this->form_validation->run())
		{
			$ins_data = array(
				'user_id'		=> $user_id,
				'name'			=> $this->input->post('name'),
				'department_id'	=> $this->input->post('department_id'),
				'designation_id'=> $this->input->post('designation_id'),
				'location'		=> $this->input->post('location'),
				'offer_date'	=> $this->input->post('offer_date'),
				'p_company'		=> $this->input->post('p_company'),
				'g_ctc'			=> $this->input->post('g_ctc'),
				'calculate_p'	=> $this->input->post('calculate_p'),
				'calculate_per'	=> $this->input->post('calculate_per'),
				'veriable_pay'	=> $this->input->post('veriable_pay'),
				'retention_bonus'=> $this->input->post('retention_bonus'),
				'mediclaim_insurance'=> $this->input->post('mediclaim_insurance'),
				'atc_annual'	=> $this->input->post('atc_annual'),
				'atc_monthly'	=> $this->input->post('atc_monthly'),
				'pvb_annual'	=> $this->input->post('pvb_annual'),
				'pvb_monthly'	=> $this->input->post('pvb_monthly'),
				'rba_annual'	=> $this->input->post('rba_annual'),
				'rba_monthly'	=> $this->input->post('rba_monthly'),
				'actpf_annual'	=> $this->input->post('actpf_annual'),
				'actpf_monthly'	=> $this->input->post('actpf_monthly'),
				'mip_annual'	=> $this->input->post('mip_annual'),
				'mip_monthly'	=> $this->input->post('mip_monthly'),
				'netctc'		=> $this->input->post('netctc'),
				'netctc_m'		=> $this->input->post('netctc_m'),
				'basic_annualized'=> $this->input->post('basic_annualized'),
				'basic_per_month'=> $this->input->post('basic_per_month'),
				'hra_annualized'=> $this->input->post('hra_annualized'),
				'hra_per_month'	=> $this->input->post('hra_per_month'),
				'cma_annualized'=> $this->input->post('cma_annualized'),
				'cma_per_month'	=> $this->input->post('cma_per_month'),
				'ja_annualized'	=> $this->input->post('ja_annualized'),
				'ja_per_month'	=> $this->input->post('ja_per_month'),
				'ma_annualized'	=> $this->input->post('ma_annualized'),
				'ma_per_month'	=> $this->input->post('ma_per_month'),
				'cea_annualized'=> $this->input->post('cea_annualized'),
				'cea_per_month'	=> $this->input->post('cea_per_month'),
				'ua_annualized'	=> $this->input->post('ua_annualized'),
				'ua_per_month'	=> $this->input->post('ua_per_month'),
				'sp_annualized'	=> $this->input->post('sp_annualized'),
				'sp_per_month'	=> $this->input->post('sp_per_month'),
				'totalfc'		=> $this->input->post('totalfc'),
				'totalfc_m'		=> $this->input->post('totalfc_m'),
				'pf_annualized'	=> $this->input->post('pf_annualized'),
				'pf_per_month'	=> $this->input->post('pf_per_month'),
				'pt_annualized'	=> $this->input->post('pt_annualized'),
				'pt_per_month'	=> $this->input->post('pt_per_month'),
				'esic_annualized'=> $this->input->post('esic_annualized'),
				'esic_per_month'=> $this->input->post('esic_per_month'),
				'it_annualized'	=> $this->input->post('it_annualized'),
				'it_per_month'	=> $this->input->post('it_per_month'),
				'mlwf_annualized'=> $this->input->post('mlwf_annualized'),
				'mlwf_per_month'=> $this->input->post('mlwf_per_month'),
				'totalded'		=> $this->input->post('totalded'),
				'totalded_m'	=> $this->input->post('totalded_m'),
				'nettake'		=> $this->input->post('nettake'),
				'nettake_m'		=> $this->input->post('nettake_m')
			);
			$run = $this->common_model->UpdateData('offer_breakup',array('id'=>$id),$ins_data);
			//print_r($insert); die;
			if($run)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success">Offer Breakup added successfully!</div>');
				redirect('admin/offer_breakup');
			} 
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Something went wrongss</div>');
				redirect('admin/offer_breakup');
			}
			
		}		
		$this->load->view('Admin/edit_offer',$data);
	}
	
	public function offer_print_view($id)
	{
		$data['rec'] = $rec = $this->common_model->GetSingleData('offer_breakup',array('id'=>$id));
		$this->load->view('Admin/offer_print_view',$data);	
	}
	
}
?>