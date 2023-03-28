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
		if(!$this->session->userdata('user_id')){
			redirect();
		}
	}

	public function index(){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$data['department'] = $this->common_model->GetAllData('department','','id');
		$this->load->view('Admin/department',$data);
	}

	public function designation(){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$data['designation'] = $this->common_model->GetAllData('designation','','id');
		$data['department'] = $this->common_model->GetAllData('department','','id');
		$this->load->view('Admin/designation',$data);
	}

	public function announcements(){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$data['searchKey'] = $searchKey = $this->input->post('searchKey');
		if($searchKey && $searchKey!='all'){ 
			$where="title LIKE '%$searchKey%'";
		}elseif($searchKey=='all'){
			$where="";
		}else{
			$where="";
		}
		$data['annoucment'] = $this->common_model->GetAllData('announcements',$where,'id');
		$data['department'] = $this->common_model->GetAllData('department','','id');
		$this->load->view('Admin/announcements',$data);
	}

	public function policies(){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$data['policies'] = $this->common_model->GetAllData('policies','','id');
		$this->load->view('Admin/policies',$data);
	}
	
	public function addDepartment(){

		$this->form_validation->set_rules('name','Name','required');
		
		if($this->form_validation->run()){
			$insert['name'] = $this->input->post('name');
			
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
			$insert['description'] = $this->input->post('description');
			$upload = $this->Common_function->upload_image('assets/images/policies/','image');
			$insert['image'] = $upload['name'];
			$run = $this->common_model->InsertData('policies',$insert);
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
				
				$this->session->set_flashdata('msg','<div class="alert alert-success">Department deleted successfully</div>');
                 redirect('admin/policies');
							
			} else {
				$this->session->set_flashdata('msg','<div class="alert alert-success">Something went wrong</div>');
                 redirect('admin/policies');
			}
		 
	}
}

?>