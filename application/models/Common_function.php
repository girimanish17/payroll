<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Common_function extends CI_Model {

	public function __construct() {
		parent::__construct();

	} 

  //Check all required parameter
    function get_json_parameter($not_required_value=false)
    {

        $json = file_get_contents('php://input');
        $json_array = json_decode($json);
       // $this->SG_mail('yatindra.mohite@ebabu.co','error log',$json);

        if(!empty($not_required_value))
        {
            $required_value = array_diff_assoc((array)$json_array,$not_required_value); //remove unrequired field
        }else
        {
            $required_value = $json_array;
        }
       
        if(count(array_filter((array)$required_value)) == count((array)$required_value)) //check required field not empty
        {
           return $json_array;
        }else
        {   //return 'params_error';
              
            $json_array = (object)array();
                  
                errorResponse(required_data,400);
           
        }
    }
	
	function cal_percentage($num_amount, $num_total) 
	{
	  $count1 = $num_amount / $num_total;
	  $count2 = $count1 * 100;
	  $count = number_format($count2, 0);
	  return $count;
	}

    function get_user_image($image)
    {
        if(filter_var($image, FILTER_VALIDATE_URL))
        {
        }else
        {
            if(!empty($image))
            {
                $image = base_url().GET_USER_IMAGE_PATH.$image;
            }
        }
        return $image;
    }
    //get single image
    function get_images($image,$path)
    {
        $imageurl = '';
        if(!empty($image))
        {
            $imageurl = base_url().$path.$image;
        }
        return $imageurl;
    }

    function get_multiple_images($table,$field,$where,$path)
    {
        $imageurl = array();
        $getImagesGallary = $this->db->select($field)->get_where($table,$where)->result();
        if(!empty($getImagesGallary))
        {
            foreach ($getImagesGallary as $key) {
               $imageurl[] = array(
                                    'id'=>$key->id,
                                    'images'=>base_url().$path.$key->image
                                    );
            }
        }
        return $imageurl;
    }


 function upload_images($path,$keyname='')
    {
        $image_url = $image_name = array();
        $file_count=count($_FILES[$keyname]['name']);
        $this->load->library('upload');
        for ($i=0; $i < $file_count; $i++)
        {  
            $_FILES['file_url']['name']= $_FILES[$keyname]['name'][$i];
            $_FILES['file_url']['type']= $_FILES[$keyname]['type'][$i];
            $_FILES['file_url']['tmp_name']= $_FILES[$keyname]['tmp_name'][$i];
            $_FILES['file_url']['error']= $_FILES[$keyname]['error'][$i];
            $_FILES['file_url']['size']= $_FILES[$keyname]['size'][$i];

            $config = array();
            $config['upload_path']   = $path;
            $config['allowed_types'] = 'jpg|jpeg|png';

            //$subFileName = explode('.',$_FILES['file_url']['name']);
            //$ExtFileName = end($subFileName);
       $images = md5(time().$_FILES['file_url']['name']).'.jpeg';
            $config['file_name'] = $images;
$image_name[] = $images;
       $image_url[] = base_url().$path.$images;
       move_uploaded_file($_FILES["file_url"]["tmp_name"],$path.$images);
            // $this->upload->initialize($config);
            // if (!$this->upload->do_upload('file_url')) {
            //     $errors = $this->upload->display_errors();
               
            //     //return $this->common_function->echoresponse('error','IMAGE_UPLOAD_ERROR',(object)array(),'errors');
            // }else
            // {
         
            // }
        }
 
        if(!empty($image_url))
        {
            return array('url'=>$image_url,'name'=>$image_name);
        }
    }

    function upload_image($path,$keyname='',$type='') //upload images
    {
        $image_url = $image_name = array();
        $config = array();
        $config['upload_path']   = $path;
        $config['allowed_types'] = 'jpg|jpeg|png|';
        //$subFileName = explode('.',$_FILES[$keyname]['name']);
        //$ExtFileName = end($subFileName);
        if($type!=''){
            $images = md5(time()).str_replace(' ', '', $_FILES[$keyname]['name']); //admin
        }else{
            $images = md5(time()).$_FILES[$keyname]['name'].'.'.'jpg';
        }
        move_uploaded_file($_FILES[$keyname]["tmp_name"],$path.$images);
        $image_name = $images;
        $image_url = base_url().$path.$images;
        return array('url'=>$image_url,'name'=>$image_name);
   }
	
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
                                <td align="center" style="text-align: center;" valign="middle"><a style="font-family:\'Ubuntu\',sans-serif;color:#f1f1f1;font-weight:300;display:block;letter-spacing:-1.5px;text-decoration:none;margin-top:2px" href="'.base_url().'"><img src="'.base_url().'assets/images/logo.png" style="padding-top:0;display:inline-block;vertical-align:middle;margin-right:0px;height:55px" class="CToWUd"></a></td>
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

   public function Fcmpushnotification($message,$user_id,$fcm_token){
        
            $body = $message;
            $user = $fcm_token;
       
    $url = 'https://fcm.googleapis.com/fcm/send';
    $msg = array
        (
        'message'   => $body,
        'title' => "User notification",
        // 'isBackground'  => '',
         'sound' => 'default',
        'user_id'=>$user_id,
        );
       
    $fields = array(
                  "to" =>$user,
                  "data" => $msg,
                  "notification" => $msg,
                  "content_available"=>true,
                  //"time_to_live"=>30,
                  "priority"=>"high",
                  "timestamp"=>'',
                  "imageUrl"=>""
                  ); 
                  
                  

      $fields = json_encode ( $fields );  
     

    $headers = array (
    'Authorization: key=' . FCM_KEY,
    'Content-Type: application/json'
    );

    $ch = curl_init ();
    curl_setopt ( $ch, CURLOPT_URL, $url );
    curl_setopt ( $ch, CURLOPT_POST, true );
    curl_setopt ( $ch, CURLOPT_HTTPHEADER, $headers );
    curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
    curl_setopt ( $ch, CURLOPT_POSTFIELDS, $fields );

     $result = curl_exec ( $ch );
    echo $result;   exit;
    curl_close ( $ch );
  }

  // msg91 function

   public function msg91($message,$mobile_number){
        
         

          //Multiple mobiles numbers separated by comma
          $mobileNumber = $mobile_number;

          //Sender ID,While using route4 sender id should be 6 characters long.
          $senderId = "102234";

          //Your message to send, Add URL encoding here.
          $message = urlencode($message);

          //Define route 
          $route = "default";
          //Prepare you post parameters
          $postData = array(
              'authkey' => AUTHKEY,
              'mobiles' => $mobileNumber,
              'message' => $message,
              'sender' => $senderId,
              'route' => $route
          );

          //API URL
          $url="http://api.msg91.com/api/sendhttp.php";

          // init the resource
          $ch = curl_init();
          curl_setopt_array($ch, array(
              CURLOPT_URL => $url,
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_POST => true,
              CURLOPT_POSTFIELDS => $postData
              //,CURLOPT_FOLLOWLOCATION => true
          ));


          //Ignore SSL certificate verification
          curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


          //get response
          $output = curl_exec($ch);

          //Print error if any
          if(curl_errno($ch))
          {
              echo 'error:' . curl_error($ch);
          }

          curl_close($ch);

          return $output;
  }
	
  /**
 * Simple PHP age Calculator
 * 
 * Calculate and returns age based on the date provided by the user.
 * @param   date of birth('Format:yyyy-mm-dd').
 * @return  age based on date of birth
 */
function ageCalculator($dob){
    if(!empty($dob)){
        $birthdate = new DateTime($dob);
        $today   = new DateTime('today');
        $age = $birthdate->diff($today)->y;
        return $age;
    }else{
        return 0;
    }
}

	
			
	function attendenceInMonth() 
	{
	  $where = "MONTH(attendence_date)=MONTH(now()) and YEAR(attendence_date)=YEAR(now()) and status='1' and user_id=".$this->session->userdata('user_id');
	 $attendenceInMonth =  $this->common_model->GetAllData('attendence',$where,'','','','','','attendence_date');
	 return count($attendenceInMonth);
	}
	
	function total_hours_inMonth() 
	{
		$user_id = $this->session->userdata('user_id');
	 $where = "MONTH(attendence_date)=MONTH(now()) and YEAR(attendence_date)=YEAR(now()) and status='1' and user_id=".$user_id;
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
		return $total_hours_inMonth = $this->common_model->getSumTotalHours($time);
	}
	
	function totalMonthdays() 
	{
		function countDays($y, $m, $ignore = false) 
		{
			$result = 0;
			$loop = strtotime("$y-$m-01");
			do if(!$ignore or !in_array(strftime("%u",$loop),$ignore))
				$result++;
			while(strftime("%m",$loop = strtotime("+1 day",$loop))==$m);
			return $result;
		}
	    $totalMonthdays = countDays(date("Y"),date('m'),array(7));
		return  $totalMonthdays;
	}
	
	function leavesInMonth() 
	{
		$user_id = $this->session->userdata('user_id');
	    $where = "MONTH(from_date)=MONTH(now()) and YEAR(from_date)=YEAR(now()) and status='Approved' and user_id=".$user_id;
		return $leavesInMonth = $this->common_model->GetAllData('emp_leaves',$where);
	}
	
	function leavesInYear() 
	{
		$user_id = $this->session->userdata('user_id');
	  $where1 = "YEAR(from_date)=YEAR(now()) and status='Approved' and user_id=".$user_id;
		return $leavesInYear = $this->common_model->GetAllData('emp_leaves',$where1);
	}
	
	function leavesSumInYear() 
	{
		$user_id = $this->session->userdata('user_id');
		$where1 = "YEAR(from_date)=YEAR(now()) and status='Approved' and user_id=".$user_id;
	    $leavesSumInYear = $this->common_model->Get_sum('emp_leaves',$where1,'sum(selected_days) as sumLeave');
	  return $leavesSumInYear[0]['sumLeave'];
	}
	
	function halfleavesSumInYear() 
	{
		$user_id = $this->session->userdata('user_id');
		$where1 = "YEAR(from_date)=YEAR(now()) and status='Approved' and user_id=".$user_id;
	    $halfleavesSumInYear = $this->common_model->Get_sum('emp_leaves',$where1,'sum(half_days) as sumhalfLeave');
	  return $halfleavesSumInYear[0]['sumhalfLeave'];
	}
	
	function user_credit_leaves() 
	{
		$user_id = $this->session->userdata('user_id');
		$credit_leaves = $this->common_model->GetSingleData('users',array('user_id' =>$this->session->userdata('user_id'),'user_type'=>$this->session->userdata('user_type')));
		return $credit_leaves['credit_leaves'];
	}
	
}
