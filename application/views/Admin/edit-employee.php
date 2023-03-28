<?php include('include/header.php'); ?>  
<div class="contents demo-card expanded">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-4">
            <div class="breadcrumb-main">
               <ul class="atbd-breadcrumb nav">
                  <li class="atbd-breadcrumb__item">
                     <a href="#"> Home </a>
                     <span class="breadcrumb__seperator"> <span class="la la-angle-right"></span> </span>
                  </li>
                  <li class="atbd-breadcrumb__item">
                     <span>Add New Employee</span>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="contents demo-card expanded">
   <div class="row">
      <div class="col-sm-12">
         <form method="post" onsubmit="return editEmployee()" id="employeeForm" enctype="multipart/form-data">
		  <?php echo $this->session->flashdata('msg');
               if(isset($_SESSION['msg'])){
				unset($_SESSION['msg']);
				}
              ?>
            <div id="eMsg"></div>
           
            <div class="form-row">
			
			<div class="form-group col-sm-12">
                  <h3>Employee Details</h3>
               </div>
               <div class="col-sm-4 form-group">
                  <span class="color-light"></span>
                  <input type="text" disabled value="<?php echo $employees['emp_id'] ?>" name="emp_id" placeholder="Employee Id" class="form-control ih-medium ip-lightradius-xs b-light">
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-user-graduate color-light"></span>
                     <select name="department_id" id="department_id" class="form-control ih-medium ip-lightradius-xs b-light" onchange="getdesignation();">
                        <option selected="">Select Department</option>
                        <?php foreach ($department as $key => $depart) { ?>
                         
                        <option <?php if($employees['department_id']==$depart['id']) { echo "selected"; } ?> value="<?php echo $depart['id']; ?>" ><?php echo $depart['name']; ?></option>
                          <?php } ?>
                        
                     </select>
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-user-shield color-light"></span>
                     <select name="designation_id" id="designation_id" class="form-control ih-medium ip-lightradius-xs b-light">
                        <option selected="">Select Designation</option>
                      <?php foreach ($designation as $key => $value) { ?>
                         
                        <option <?php if($employees['designation_id']==$value['id']) { echo "selected"; } ?> value="<?php echo $value['id']; ?>" ><?php echo $value['designation_name']; ?></option>
                          <?php } ?>
                     </select>
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-money-bill-wave color-light"></span>
                     <input type="number" value="<?php echo $employees['credit_leaves']; ?>" name="credit_leaves" class="form-control  ih-medium ip-lightradius-xs b-light" id="" placeholder="Credit leaves">
                  </div>
               </div>
              
			   
			    
			   
               <!--<div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-money-check-alt color-light"></span>
                     <input type="text" value="<?php echo $employees['basic_salary']; ?>" name="basic_salary" class="form-control  ih-medium ip-lightradius-xs b-light" id="=" placeholder="Basic Salary">
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-money-check-alt color-light"></span>
                     <input type="text" value="<?php echo $employees['hourly_rate']; ?>" name="hourly_rate" class="form-control  ih-medium ip-lightradius-xs b-light" id="=" placeholder="Hourly Rate Salary">
                  </div>
               </div>-->
			   
			   
			   <div class="form-group col-sm-12">
                  <h3>Personal Detail</h3>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la-user lar color-light"></span>
                     <input type="text" value="<?php echo $employees['first_name']; ?>" name="first_name" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="First Name">
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la-user lar color-light"></span>
                     <input type="text" value="<?php echo $employees['last_name']; ?>" name="last_name" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="Last Name">
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la-user lar color-light"></span>
                     <input type="text" value="<?php echo $employees['father_name']; ?>" name="father_name" class="form-control  ih-medium ip-lightradius-xs b-light" placeholder="Father name">
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-phone color-light"></span>
                     <input type="date" value="<?php echo $employees['dob']; ?>" name="dob" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="Date of birth">
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-phone color-light"></span>
                     <input type="text" value="<?php echo $employees['phone']; ?>" minlength="1" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" name="phone" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="Phone Number">
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-restroom color-light"></span>
                     <select name="gender" class="form-control ih-medium ip-lightradius-xs b-light">
                        <option selected="">Select Gender</option>
                        <option <?php if($employees['gender']=='Male'){ echo "selected"; } ?> value="Male">Male</option>
                        <option <?php if($employees['gender']=='Female'){ echo "selected"; } ?> value="Female">Female</option>
                     </select>
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-envelope color-light"></span>
                     <input type="text" value="<?php echo $employees['local_address']; ?>" name="local_address" class="form-control  ih-medium ip-lightradius-xs b-light" placeholder="Local Address">
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-user-circle color-light"></span>
                     <input type="text" value="<?php echo $employees['permanent_address']; ?>" name="permanent_address" class="form-control  ih-medium ip-lightradius-xs b-light" id="" placeholder="Permanent address">
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                    <!--<span class="la-user lar color-light"></span>-->
                     <input type="file" name="image">
                     <img src="<?php echo base_url(); ?>assets/images/users/<?php echo $employees['profile_img']; ?>" style="height: 100px;width: 100px;">
                  </div>
               </div>
			   
			    <div class="form-group col-sm-12">
			  <h3>Account Login</h3>
		   </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-lock color-light"></span>
                     <input type="email" value="<?php echo $employees['email']; ?>" readonly name="email" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="Email">
                  </div>
               </div>
			   
			   <!--<div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-user-shield color-light"></span>
                     <select name="designation_id" id="designation_id" class="form-control ih-medium ip-lightradius-xs b-light">
                        <option selected="">Select Designation</option>
                      <?php foreach ($admin as $key => $avalue) { ?>
                         
                        <option <?php if($employees['admin_id']==$avalue['user_id']) { echo "selected"; } ?> value="<?php echo $avalue['user_id']; ?>" ><?php echo $avalue['first_name']." ".$avalue['last_name']; ?></option>
                          <?php } ?>
                     </select>
                  </div>
               </div>-->
              
               
			   <div class="form-group col-sm-12">
                  <h3>Leave Detail</h3>
               </div>
			   <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-user-graduate color-light"></span>
                     <textarea placeholder="Reporting Email ::=> abc@abc.com , xyz@xyz.com , ..." name="reporting" id="reporting" class="form-control ih-medium ip-lightradius-xs b-light" ><?php echo $employees['reporting']; ?></textarea>
                  </div>
               </div>
			    <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-money-check-alt color-light"></span>
                     <input type="date" value="<?php echo $employees['date_of_joining']; ?>" name="date_of_joining" class="form-control  ih-medium ip-lightradius-xs b-light" id="=" placeholder="Date of joining">
                  </div>
               </div>
			   <!--<div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-money-bill-wave color-light"></span>
                     <input type="date" name="leave_date" value="<?php echo $employees['leave_date']; ?>" class="form-control  ih-medium ip-lightradius-xs b-light" id="" placeholder="Date">
                  </div>
               </div>-->
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-money-bill-wave color-light"></span>
                     <input type="text" name="opening_el" value="<?php echo $employees['leave_opening_el']; ?>" class="form-control  ih-medium ip-lightradius-xs b-light" id="" placeholder="Opening EL">
                  </div>
               </div>
			   
			    <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-money-bill-wave color-light"></span>
                     <input type="text" name="el" value="<?php echo $employees['leave_el']; ?>" class="form-control  ih-medium ip-lightradius-xs b-light" id="" placeholder="EL">
                  </div>
               </div>
			   
			   <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-money-bill-wave color-light"></span>
                     <input type="text" name="cl" value="<?php echo $employees['leave_cl']; ?>" class="form-control  ih-medium ip-lightradius-xs b-light" id="" placeholder="CL">
                  </div>
               </div>
			   
			   <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-money-bill-wave color-light"></span>
                     <input type="text" name="optional" value="<?php echo $employees['leave_optional']; ?>" class="form-control  ih-medium ip-lightradius-xs b-light" id="" placeholder="Optional">
                  </div>
               </div>
			   
			   <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-money-bill-wave color-light"></span>
                     <input type="text" name="compOff" value="<?php echo $employees['leave_compOff']; ?>" class="form-control  ih-medium ip-lightradius-xs b-light" id="" placeholder="CompOff">
                  </div>
               </div>
               <input type="hidden" name="id" value="<?php echo $employees['user_id']; ?>">
               <div class="form-group col-sm-12">
                  <h3>Bank Detail</h3>
               </div>

               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-money-bill-wave color-light"></span>
                     <input type="text" value="<?php echo $bankDetail['account_holder_name']; ?>" name="account_holder_name" class="form-control  ih-medium ip-lightradius-xs b-light" id="" placeholder="Account holder name">
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-money-check-alt color-light"></span>
                     <input type="test" value="<?php echo $bankDetail['account_number']; ?>" name="account_number" class="form-control  ih-medium ip-lightradius-xs b-light" id="=" placeholder="Account number">
                  </div>
               </div>
               <!--<div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-money-check-alt color-light"></span>
                     <input type="text" value="<?php echo $bankDetail['bank_name']; ?>" name="bank_name" class="form-control  ih-medium ip-lightradius-xs b-light" id="=" placeholder="Bank name">
                  </div>
               </div>-->
			   <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-user-shield color-light"></span>
                     <select name="bank_name" id="bank_name" class="form-control ih-medium ip-lightradius-xs b-light">
                        <option selected="">Select bank</option>
                      <?php foreach ($banks as $key => $values) { ?>
                         
                        <option <?php if($bankDetail['bank_name']==$values['bank_name']) { echo "selected"; } ?> value="<?php echo $values['bank_name']; ?>" ><?php echo $values['bank_name']; ?></option>
                          <?php } ?>
                     </select>
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-money-check-alt color-light"></span>
                     <input type="text" value="<?php echo $bankDetail['bank_ifsc_code']; ?>" name="bin" class="form-control  ih-medium ip-lightradius-xs b-light" id="=" placeholder="Bank Identifier code">
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-money-check-alt color-light"></span>
                     <input type="text" value="<?php echo $bankDetail['branch_location']; ?>" name="branch_location" class="form-control  ih-medium ip-lightradius-xs b-light" id="=" placeholder="Branch Location">
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-money-check-alt color-light"></span>
                     <input type="text" value="<?php echo $bankDetail['tax_payer_id']; ?>" name="tax_payer_id" class="form-control  ih-medium ip-lightradius-xs b-light" id="=" placeholder="Tax Payer Id">
                  </div>
               </div>
			   
			    <div class="form-group col-sm-12">
				  <h3>Salary Details</h3>
			   </div>
			   <div class="col-sm-4 form-group">
                  <span class="color-light"></span>
                  <input type="text" name="gross" placeholder="Gross" value="<?php echo $employees['gross']; ?>" class="form-control ih-medium ip-lightradius-xs b-light" required>
               </div>
			   <div class="col-sm-4 form-group">
                  <span class="color-light"></span>
                  <input type="text" name="variable_pay" placeholder="Variable Pay" value="<?php echo $employees['variable_pay']; ?>" class="form-control ih-medium ip-lightradius-xs b-light" required>
               </div>
			   <div class="col-sm-4 form-group">
                  <span class="color-light"></span>
                  <input type="text" name="retention_bonus" placeholder="Retention Bonus" value="<?php echo $employees['retention_bonus']; ?>" class="form-control ih-medium ip-lightradius-xs b-light" required>
               </div>
			   <div class="col-sm-4 form-group">
                  <span class="color-light"></span>
                  <input type="text" name="incentive" placeholder="Incentive" value="<?php echo $employees['incentive']; ?>" class="form-control ih-medium ip-lightradius-xs b-light" required>
               </div>
			   <div class="col-sm-4 form-group">
                  <span class="color-light"></span>
                  <input type="text" name="net_ctc" placeholder="Net CTC" value="<?php echo $employees['net_ctc']; ?>" class="form-control ih-medium ip-lightradius-xs b-light" required>
               </div>
               <div class="form-group col-sm-12">
                  <h3>Document</h3>
               </div>
			    <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <label>PAN NO.</label>
                     <input type="text" name="PAN_no" value="<?php echo $employees['PAN_no']; ?>" class="form-control  ih-medium ip-lightradius-xs b-light" id="=" placeholder="PAN No">
                  </div>
               </div>
			   <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <label>AADHAR NO.</label>
                     <input type="text" name="AADHAR_no" value="<?php echo $employees['AADHAR_no']; ?>" class="form-control  ih-medium ip-lightradius-xs b-light" id="=" placeholder="AADHAR No">
                  </div>
               </div>
			   <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <label>ESIC</label>
                     <input type="text" name="ESIC" value="<?php echo $employees['ESIC']; ?>" class="form-control  ih-medium ip-lightradius-xs b-light" id="=" placeholder="ESIC">
                  </div>
               </div>
			   
			   <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <label>UAN No.</label>
                     <input type="text" name="UAN_no" value="<?php echo $employees['UAN_no']; ?>" class="form-control  ih-medium ip-lightradius-xs b-light" id="=" placeholder="UAN No">
                  </div>
               </div>
              <!-- <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <label>Offer Letter</label>
                     <input type="file" name="offer_letter" class="form-control  ih-medium ip-lightradius-xs b-light" id="" >
					 <a href="<?php echo base_url(); ?>assets/images/userDocument/<?php echo $document['offer_letter']; ?>" target="_blank">Click here to view Offer Letter</a>
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <label>Joining Letter</label>
                     <input type="file" name="joining_letter" class="form-control  ih-medium ip-lightradius-xs b-light" id="" >
					 <a href="<?php echo base_url(); ?>assets/images/userDocument/<?php echo $document['joining_letter']; ?>" target="_blank">Click here to view Joining Letter</a>
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <label>Contract/Aggrement</label>
                     <input type="file" name="contract_letter" class="form-control  ih-medium ip-lightradius-xs b-light" id="" >
					 <a href="<?php echo base_url(); ?>assets/images/userDocument/<?php echo $document['contract_letter']; ?>" target="_blank">Click here to view Contract Letter</a>
                  </div>
               </div>-->
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <label>Resume</label>
                     <input type="file" name="resume" class="form-control  ih-medium ip-lightradius-xs b-light" id="" >
					 <a href="<?php echo base_url(); ?>assets/images/userDocument/<?php echo $document['resume']; ?>" target="_blank">Click here to view Resume</a>
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <label>Id Proof</label>
                     <input type="file" name="id_proof" class="form-control  ih-medium ip-lightradius-xs b-light" id="" >
					 <a href="<?php echo base_url(); ?>assets/images/userDocument/<?php echo $document['id_proof']; ?>" target="_blank">Click here to view Id Proof</a>
                  </div>
               </div>
               <div class="form-group col-sm-12">
                  <button type="submit" class="btn btn-primary btn-sm">Submit</button>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>
<?php include('include/footer.php'); ?> 
<script type="text/javascript">
   function editEmployee(){
   
   $.ajax({
            url: "<?php echo base_url(); ?>admin/editEmployeeForm",
            type: "POST",
            data:new FormData($('#employeeForm')[0]),
            dataType:"JSON",
            async:false,
            cache:false,
            contentType:false,
            processData:false,
            success: function (res) {
            console.log(res);
             if(res.status==1){
             window.location.href="<?php echo base_url(); ?>admin/employee";
             } else {
              $('#eMsg').html(res.msg);
              return false;
             }
        }
    });
   return false;  
}  

function getdesignation()
  {
	  var department_id = $('#department_id').val();	 
	  var params = {department_id: department_id};
		$.ajax({
			url: '<?php echo base_url();?>admin/getdesignation',
			type: 'post',
			data: params,
			success: function (r)
			 {
				 $("#designation_id").html(r);
			 }
		});
  }

</script>