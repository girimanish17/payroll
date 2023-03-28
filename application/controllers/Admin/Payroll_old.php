<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Payroll extends CI_Controller
{
	
	public function __construct() {
		parent::__construct();
		$this->check_login();
	}

	public function check_login(){
		if(!$this->session->userdata('user_id')){
			redirect();
		}
	}

	public function index(){
		$user_id = $this->session->userdata('user_id');
		$type = $this->session->userdata('user_type');
		$this->load->view('Admin/payroll');
	}
	
	

}

?>