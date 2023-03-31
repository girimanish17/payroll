<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Common_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->db->query("SET sql_mode = '';");
	} 
	
  public function GetDataByOrderLimit($table,$where,$odf=NULL,$odc=NULL,$limit=NULL,$start=0) {
    if($where) {
      $this->db->where($where);
    }		 

    if($odf && $odc){
      $this->db->order_by($odf,$odc);
    }
       
    if($limit){
      $this->db->limit($limit, $start);
    }

    $sql=$this->db->get($table);
    
    if($sql) {
      return $sql->result_array();
    }else{
      return array();
    }
  }

  public function GetDataById($table,$value) {
    $this->db->where('id', $value);
    $obj=$this->db->get($table);
    if($obj->num_rows() > 0){
      return $obj->row_array();
    } else {
      return false;
    }
  }
  
  public function InsertData($table,$data) {
    $insert = $this->db->insert($table,$data);
     if($insert){
      return $this->db->insert_id();
    }else{
      return false;
    }
  }

  /*---GET MULTIPLE RECORD---*/
	function getAllwhere($table, $where)
	{
		$this->db->select('*');
		$q = $this->db->get_where($table, $where);
		$num_rows = $q->num_rows();
		if ($num_rows > 0) {
			foreach ($q->result() as $rows) {
				$data[] = $rows;
			}
			$q->free_result();
			return $data;
		}
	}

  function getAllrecord($table)
	{
		$this->db->select('*');
		$q = $this->db->get($table);
		$num_rows = $q->num_rows();
		if ($num_rows > 0) {
			foreach ($q->result() as $rows) {
				$data[] = $rows;
			}
			$q->free_result();
			return $data;
		}
	}
  
  function GetAllData($table,$where=null,$ob=null,$obc='',$limit=null,$offset=null,$select=null,$group_by=null){
  if($select) {
		
		$this->db->select($select);

	}else{
		$this->db->select('*');
		$this->db->from($table);
	}
    if($where) {
      $this->db->where($where);
    }
	if($group_by) {
      $this->db->group_by($group_by);
    }
    if($ob) {
      $this->db->order_by($ob,$obc);
    }
    if($limit) {
      $this->db->limit($limit,$offset);
    }
    $query = $this->db->get();
  //echo   $this->db->last_query();die;
    if($query->num_rows()) {	
      return $query->result_array();
    } else {
      return array();
    }
  }
     // print_r($this->db->last_query($query));
	 
	 function all_leaves($where=null)
	{	
		$query =$this->db->query("SELECT * from emp_leaves UNION SELECT * from compoff_emp_leaves  " .$where." order by created_date DESC");
		
		//$query =$this->db->get();
		//echo   $this->db->last_query();
		if($query->num_rows())
		{	
			return $query->result_array();
		} else {
			return array();
		}    
    }
	
	function Get_sum($table,$where=null,$sum=null,$ob=null,$obc='',$limit=null,$offset=null,$select=null){
  if($select) {
		
		$this->db->select($select);

	}else{
		$this->db->select($sum);
		$this->db->from($table);
	}
    if($where) {
      $this->db->where($where);
    }
    if($ob) {
      $this->db->order_by($ob,$obc);
    }
    if($limit) {
      $this->db->limit($limit,$offset);
    }
    $query = $this->db->get();
  //echo   $this->db->last_query();die;
    if($query->num_rows()) {	
      return $query->result_array();
    } else {
      return array();
    }
  }

  function getsingle($table, $wheres)
	{
		$q = $this->db->get_where($table, $wheres);
		return $q->row();
	}
	 
	 function getAllwhere_pagination($table,$limit,$start,$where='',$column='',$type='')
    {
        $this->db->select('*'); 
		$this->db->from($table);
		if($where!=''){
			$this->db->where($where);
		}		
		$this->db->limit($limit, $start);
		if($column!="")
		{
		$this->db->order_by($column,$type);	
		}
		$query = $this->db->get();
		return $query->result_array(); 
    }
 
 public function record_count($table,$where='') 
	{		
		$this->db->from($table);
		if($where!=''){
		$this->db->where($where);
		}
		return $this->db->count_all_results();		
	}
	
  function GetSingleData($table,$where=null,$ob=null,$obc='desc'){
    if($where) {
      $this->db->where($where);
    }
    if($ob) {
      $this->db->order_by($ob,$obc);
    }
    $query = $this->db->get($table);
    if($query->num_rows()) {	
      return $query->row_array();
    } else {
      return false;
    }
  }
  
  public function UpdateData($table, $where, $data) {
    $this->db->where($where);
    $obj=$this->db->update($table,$data);
    return ($this->db->affected_rows() > 0)?true:true;
  }
  
  public function DeleteData($table, $where) {
    $this->db->where($where);
    $obj=$this->db->delete($table);
    
		return ($this->db->affected_rows() > 0)?true:false;		
  }

  public function GetColumnName($table,$where=null,$name=null,$double=null,$order_by=null,$order_col=null,$group_by=null) {
    if($name){
      $this->db->select(implode(',',$name));
    } else {
      $this->db->select('*');
    }
    
    if($where){
      $this->db->where($where);
    }
		
		if($group_by) {
      $this->db->group_by($group_by);
    }
     
    if($order_by && $order_col){
      $this->db->order_by($order_by,$order_col);
    }
    $sql=$this->db->get($table);
    if($double){
      $data = array();
    } else {
      $data = false;
    }
    if($sql->num_rows() > 0){
      if($double){
        $data = $sql->result_array();
      } else {
        $data = $sql->row_array();
      } 
      
    }
    return $data;
  }
  
  public function count_row($table,$where=null)
  {
	$this->db->select('*');
	$this->db->from($table);
    if($where) {
      $this->db->where($where);
    }
    $query = $this->db->get();
	//print_r($this->db->last_query($query));die;
    if($query->num_rows())
	{	
      return $query->num_rows();
    } 
	else 
	{
      return false;
    }			   
   }
   
    function year_count_row($status ='')
	{
		if($status){
			$query = $this->db->query("SELECT * FROM `emp_leaves` WHERE `status` = '".$status."' AND comp_id='".$this->session->userdata('comp_id')."' AND  YEAR(created_date) = YEAR(CURDATE())");
		}else{
			$query = $this->db->query("SELECT * FROM `emp_leaves`  WHERE YEAR(created_date) = YEAR(CURDATE()) AND comp_id='".$this->session->userdata('comp_id')."'");
		}
     $result = $query->num_rows();
     return $result;    
    }
	
	function month_count_row($status ='')
	{
		if($status){
			$query = $this->db->query("SELECT * FROM `emp_leaves` WHERE `status` = '".$status."' AND comp_id='".$this->session->userdata('comp_id')."' AND  month(created_date) = month(CURDATE())");
		}else{
			$query = $this->db->query("SELECT * FROM `emp_leaves` WHERE month(created_date) = month(CURDATE()) AND comp_id='".$this->session->userdata('comp_id')."'");
		}
     $result = $query->num_rows();
     return $result;    
    }
	
	function week_count_row($status ='')
	{
		if($status){
			$query = $this->db->query("SELECT * FROM `emp_leaves` WHERE `status` = '".$status."' AND comp_id='".$this->session->userdata('comp_id')."' AND  week(created_date) = week(now())-1");
		}else{
			$query = $this->db->query("SELECT * FROM `emp_leaves` WHERE week(created_date) = week(now())-1 AND comp_id='".$this->session->userdata('comp_id')."'");
		}
     $result = $query->num_rows();
     return $result;    
    }
	
   //SELECT *,EXTRACT(YEAR FROM created_date) FROM `emp_leaves` WHERE `status` = 'Approved';
   //SELECT * FROM `emp_leaves` WHERE `status` = 'Approved' AND  YEAR(created_date) = YEAR(CURDATE());

   public function SendMail($toz,$sub,$body) {

    //  $to =$toz;  
    //  $from ='';
    // $headers ="From: ".$admin[0]['mail_from_title']." <".$from."> \n";
    // $headers .= "MIME-Version: 1.0\n";
    // $headers .= "Content-type: text/html; charset=iso-8859-1 \n";
    // $subject =$sub;

    $config = array();
    $config['mailtype'] = "html";
    $config['charset'] = "utf-8";
    $config['newline'] = "\r\n";
    $config['wordwrap'] = TRUE;
    $config['validate'] = FALSE;
    
    $this->email->initialize($config);
    
    $this->email->from(Email, Project);
   
    $this->email->to($toz);
    $this->email->set_crlf("\r\n"); 
    //$this->email->set_mailtype("html"); 
    $this->email->subject($sub);
    
    $msg = '<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" name="mjqemailid" content="B0WB7P9VV27ACYA96DTTHDGYXR1I0SUB">
            <tbody>
              <tr>
                <td align="center" valign="top">
                  <table border="0" cellpadding="10" cellspacing="0" width="600" style="border:1px solid #ddd;margin:50px 0px 100px 0px;text-align:center;color:#363636;font-family:\'Montserrat\',Arial,Helvetica,sans-serif;background-color:white">
                    <tbody>
                      <tr>
                        <td align="center" valign="top" style="border-bottom:2px solid #f6f6f6;padding:0px;background:-moz-linear-gradient(top,#fff,#f6f6f6);background:#f1f1f1;">
                          <table border="0" cellpadding="0" cellspacing="10" width="100%">
                            <tbody>
                              <tr>
                                <td align="center" style="text-align: center;" valign="middle"><a style="font-family:\'Ubuntu\',sans-serif;color:#f1f1f1;font-weight:300;display:block;letter-spacing:-1.5px;text-decoration:none;margin-top:2px" href="'.base_url().'"><img src="'.base_url().'assets/images/logo.jpg" style="padding-top:0;display:inline-block;vertical-align:middle;margin-right:0px;height:55px" class="CToWUd"></a></td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                      <tr>
                        <td align="center" valign="top">
                          <table border="0" cellpadding="0" cellspacing="10" width="100%">
                            <tbody>
                              <tr>
                                <td align="left" valign="top" style="color:#444;font-size:14px">
                                  '.$body.'
                                   <p style="margin:0;padding:10px 0px">Thank you,<br>Team payroll</p>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                      <tr>
                        <td align="center" valign="top" style="background-color:#f1f1f1;color:white">
                          <table border="0" cellpadding="0" cellspacing="10" width="100%">
                            <tbody>
                              <tr>
                                <td align="left" valign="top" width="80%">
                                  <div style="margin:0;padding:0;color:#333;font-size:13px"><a href="'.base_url().'" style="color:#333;text-decoration:none">© Copyright '.date('Y').' payroll. All Rights Reserved.</div>
                                </td>
                                
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
            </tbody>
          </table>';
        
    $this->email->message($msg);
    
    $run  = $this->email->send();
    
    if($run) {
      return 1;
    } else {
      return 0;
    }

  }
  
  
	
	function managers_only()
	{
		$this->db->select('designation.designation_name, designation.id as designation_id, users.user_id as manager_id, users.emp_id, users.first_name, users.last_name, users.designation_id'); 
		$this->db->from('designation');
		$this->db->join('users','designation.id=users.designation_id');
		
		$this->db->where("designation.designation_name LIKE '%manager%'");
		
		$query = $this->db->get();
		//echo $this->db->last_query();die;
		if($query->num_rows())
		{	
			return $query->result_array();
		} else {
			return array();
		}    
		  
    }
	
	function managers_onlyss()
	{	
		$this->db->query("SELECT designation.designation_name, designation.id as designation_id, users.user_id, users.emp_id, users.first_name, users.last_name, users.designation_id FROM designation INNER JOIN 
	    users ON users.designation_id=designation.id where designation.designation_name LIKE '%manager%'");
		
		$query =$this->db->get();
		//echo   $this->db->last_query();
		if($query->num_rows())
		{	
			return $query->result_array();
		} else {
			return array();
		}    
    }
	//SELECT designation.designation_name, designation.id, users.user_id, users.emp_id, users.first_name, users.last_name, users.designation_id, users.user_id FROM designation INNER JOIN 
	//users ON users.designation_id=designation.id where designation.designation_name LIKE '%manager%';
	
	function GetDatawithlimit($table,$where=null,$ob=null,$limit=null){
    if($where) {
      $this->db->where($where);
    }
    if($ob) {
      $this->db->order_by($ob,'desc');
    }
	if($limit) {
      $this->db->limit($limit, 0);
    }
	 
    $query = $this->db->get($table);
    if($query->num_rows()) {	
      return $query->row_array();
    } else {
      return false;
    }
  }
  
  public function getSumTotalHours($time) {    //$time is an array
    $sum = strtotime('00:00:00');
		 
		$totaltime = 0;
		 
		foreach( $time as $element ) {
			 
			// Converting the time into seconds
			$timeinsec = strtotime($element) - $sum;
			 
			// Sum the time with previous value
			$totaltime = $totaltime + $timeinsec;
		}
		 
		// Totaltime is the summation of all
		// time in seconds
		 
		// Hours is obtained by dividing
		// totaltime with 3600
		$h = intval($totaltime / 3600);
		 
		$totaltime = $totaltime - ($h * 3600);
		 
		// Minutes is obtained by dividing
		// remaining total time with 60
		$m = intval($totaltime / 60);
		 
		// Remaining value is seconds
		$s = $totaltime - ($m * 60);
		 
		// Printing the result
		return ("$h:$m:$s");
  }
  
  function lastMonthTermination($where=null)
	{	
		$query =$this->db->query("select * from users where user_type=1 and comp_id='".$this->session->userdata('comp_id')."' and terminate=1 and  month(termination_date)=month(now())-1");
		
		//$query =$this->db->get();
		//echo   $this->db->last_query();
		if($query->num_rows())
		{	
			return $query->result_array();
		} else {
			return array();
		}    
    }
	
	function get_compaff()
	{	
		$query =$this->db->query("select * from leave_type where name LIKE '%Compoff%'");
		
		//$query =$this->db->get();
		//echo   $this->db->last_query();
		if($query->num_rows())
		{	
			return $query->result_array();
		} else {
			return array();
		}    
    }
	
	function join_fetchall($select=null,$table1,$table2,$eqauls_cond,$where=null)
	{
		$this->db->select($select); 
		$this->db->from($table1);
		$this->db->join($table2,$eqauls_cond);
		
		$this->db->where($where); //"designation.designation_name LIKE '%manager%'"
		
		$query = $this->db->get();
		//echo $this->db->last_query();die;
		if($query->num_rows())
		{	
			return $query->result_array();
		} else {
			return array();
		}    
		  
    }
	
	
	function designation_wise_staff()
	{
		$comp_id = $this->session->userdata('comp_id');
		$this->db->select('count(users.status) as count_designation,designation.department_id, designation.designation_name, designation.id,users.user_type,users.designation_id,users.status,users.is_deleted,users.user_id'); 
		$this->db->from('designation');
		$this->db->join('users','designation.id=users.designation_id');
		
		$this->db->where("users.user_type=1 and designation.comp_id='".$comp_id."' and users.comp_id='".$this->session->userdata('comp_id')."' and users.is_deleted=0 and users.status=1");
		$this->db->group_by("users.designation_id");
		$query = $this->db->get();
		//echo $this->db->last_query();die;
		if($query->num_rows())
		{	
			return $query->result_array();
		} else {
			return array();
		}    
		  
    }
	
	function totalSum_designation_wise_staff()
	{
		$this->db->select('sum(users.status) as total,designation.department_id, designation.designation_name, designation.id,users.user_type,users.designation_id,users.status,users.is_deleted,users.user_id'); 
		$this->db->from('designation');
		$this->db->join('users','designation.id=users.designation_id');
		
		$this->db->where("users.user_type=1 and designation.comp_id='".$this->session->userdata('comp_id')."' and users.comp_id='".$this->session->userdata('comp_id')."' and users.is_deleted=0 and users.status=1");
		//$this->db->group_by("users.designation_id");
		$query = $this->db->get();
		//echo $this->db->last_query();die;
		if($query->num_rows())
		{	
			return $query->result_array();
		} else {
			return array();
		}    
		  
    }
	
	function department_wise_staff()
	{
		$this->db->select('count(users.status) as count_department,department.id, department.name, users.user_type,users.department_id,users.status,users.is_deleted,users.user_id'); 
		$this->db->from('department');
		$this->db->join('users','department.id=users.department_id');
		
		$this->db->where("users.user_type=1 and department.comp_id='".$this->session->userdata('comp_id')."' and users.comp_id='".$this->session->userdata('comp_id')."' and users.is_deleted=0  and users.status=1");
		$this->db->group_by("users.department_id");
		$query = $this->db->get();
		//echo $this->db->last_query();die;
		if($query->num_rows())
		{	
			return $query->result_array();
		} else {
			return array();
		}    
		  
    }
	
	function totalSum_department_wise_staff()
	{
		$this->db->select('sum(users.status) as total,'); 
		$this->db->from('department');
		$this->db->join('users','department.id=users.department_id');
		
		$this->db->where("users.user_type=1 and department.comp_id='".$this->session->userdata('comp_id')."' and users.comp_id='".$this->session->userdata('comp_id')."' and users.is_deleted=0 and users.status=1");
	
		$query = $this->db->get();
	
		if($query->num_rows())
		{	
			return $query->result_array();
		} else {
			return array();
		}    
		  
    }
	
	function getalloffers($user_id)
	{
		$this->db->select('offer_breakup.*,department.name as department_name,designation.designation_name'); 
		$this->db->from('offer_breakup');
		$this->db->join('department','department.id=offer_breakup.department_id');
		$this->db->join('designation','designation.id=offer_breakup.designation_id');				
		$this->db->where("offer_breakup.user_id=".$user_id);	
		$query = $this->db->get();	
		if($query->num_rows())
		{	
			return $query->result_array();
		} else {
			return array();
		}    
		  
    }
	
}
