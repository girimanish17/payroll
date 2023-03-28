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
         <form method="post" onsubmit="return addEmployee()" id="employeeForm" enctype="multipart/form-data">
             <?php echo $this->session->flashdata('msg');
               if(isset($_SESSION['msg'])){
    unset($_SESSION['msg']);
}
              ?>
            <div id="eMsg"></div>
            <h3>Persanal Detail</h3>
            <div class="form-row">
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la-user lar color-light"></span>
                     <input type="text" name="first_name" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="First Name">
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la-user lar color-light"></span>
                     <input type="text" name="last_name" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="Last Name">
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la-user lar color-light"></span>
                     <input type="text" name="father_name" class="form-control  ih-medium ip-lightradius-xs b-light" placeholder="Father name">
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-phone color-light"></span>
                     <input type="date" name="dob" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="Date of birth">
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-phone color-light"></span>
                     <input type="text" name="phone" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="Phone Number">
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-restroom color-light"></span>
                     <select name="gender" class="form-control ih-medium ip-lightradius-xs b-light">
                        <option selected="">Select Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                     </select>
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-envelope color-light"></span>
                     <input type="text" name="local_address" class="form-control  ih-medium ip-lightradius-xs b-light" placeholder="Local Address">
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-user-circle color-light"></span>
                     <input type="text" name="permanent_address" class="form-control  ih-medium ip-lightradius-xs b-light" id="" placeholder="Permanent address">
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <!--<span class="la-user lar color-light"></span>-->
                     <input type="file" name="image">
                  </div>
               </div>
               <div class="form-group col-sm-12">
                  <h3>Account Login</h3>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-lock color-light"></span>
                     <input type="email" name="email" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="Email">
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-lock color-light"></span>
                     <input type="password" name="password" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" value="123456" placeholder="Password">
                  </div>
               </div>
               <div class="form-group col-sm-12">
                  <h3>Company Details</h3>
               </div>
               <div class="col-sm-4 form-group">
                  <span class="color-light"></span>
                  <input type="text" name="emp_id" placeholder="Employee Id" class="form-control" required>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-user-graduate color-light"></span>
                     <select name="department_id" id="department_id" class="form-control ih-medium ip-lightradius-xs b-light" onchange="getdesignation();">
                        <option selected="">Select Department</option>
						<?php if($department){?>
						<?php foreach($department as $val){?>
                        <option value="<?php echo $val['id'];?>"><?php echo $val['name'];?></option>
                        <?php } } ?>
                     </select>
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-user-shield color-light"></span>
                     <select name="designation_id"  id="designation_id" class="form-control ih-medium ip-lightradius-xs b-light">
                        <option selected="">Select Designation</option>
                        <?php if($designation){?>
						<?php foreach($designation as $val){?>
                        <option value="<?php echo $val['id'];?>"><?php echo $val['designation_name'];?></option>
                        <?php } } ?>
                     </select>
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-money-bill-wave color-light"></span>
                     <input type="number" name="credit_leaves" class="form-control  ih-medium ip-lightradius-xs b-light" id="" placeholder="Credit leaves">
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-money-check-alt color-light"></span>
                     <input type="date" name="date_of_joining" class="form-control  ih-medium ip-lightradius-xs b-light" id="=" placeholder="Date of joining">
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-money-check-alt color-light"></span>
                     <input type="text" name="basic_salary" class="form-control  ih-medium ip-lightradius-xs b-light" id="=" placeholder="Basic Salary">
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-money-check-alt color-light"></span>
                     <input type="text" name="hourly_rate" class="form-control  ih-medium ip-lightradius-xs b-light" id="=" placeholder="Hourly Rate Salary">
                  </div>
               </div>
               <div class="form-group col-sm-12">
                  <h3>Bank Detail</h3>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-money-bill-wave color-light"></span>
                     <input type="text" name="account_holder_name" class="form-control  ih-medium ip-lightradius-xs b-light" id="" placeholder="Account holder name">
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-money-check-alt color-light"></span>
                     <input type="test" name="account_number" class="form-control  ih-medium ip-lightradius-xs b-light" id="=" placeholder="Account number">
                  </div>
               </div>
                <!--<div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-money-check-alt color-light"></span>
                     <input type="text" name="bank_name" class="form-control  ih-medium ip-lightradius-xs b-light" id="=" placeholder="Bank name">
                  </div>
               </div>-->
			  <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-user-shield color-light"></span>
                     <select name="bank_name"  id="bank_name" class="form-control ih-medium ip-lightradius-xs b-light">
                        <option selected="">Select Bank</option>
                        <?php if($banks){?>
						<?php foreach($banks as $bval){?>
                        <option value="<?php echo $bval['bank_name'];?>"><?php echo $bval['bank_name'];?></option>
                        <?php } } ?>
                     </select>
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-money-check-alt color-light"></span>
                     <input type="text" name="bin" class="form-control  ih-medium ip-lightradius-xs b-light" id="=" placeholder="Bank Identifier code">
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-money-check-alt color-light"></span>
                     <input type="text" name="branch_location" class="form-control  ih-medium ip-lightradius-xs b-light" id="=" placeholder="Branch Location">
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-money-check-alt color-light"></span>
                     <input type="text" name="tax_payer_id" class="form-control  ih-medium ip-lightradius-xs b-light" id="=" placeholder="Tax Payer Id">
                  </div>
               </div>
               <div class="form-group col-sm-12">
                  <h3>Document</h3>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <label>Offer Letter</label>
                     <input type="file" name="offer_letter" class="form-control  ih-medium ip-lightradius-xs b-light" id="" >
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <label>Joining Letter</label>
                     <input type="file" name="joining_letter" class="form-control  ih-medium ip-lightradius-xs b-light" id="" >
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <label>Contract/Aggrement</label>
                     <input type="file" name="contract_letter" class="form-control  ih-medium ip-lightradius-xs b-light" id="" >
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <label>Resume</label>
                     <input type="file" name="resume" class="form-control  ih-medium ip-lightradius-xs b-light" id="" >
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <label>Id Proof</label>
                     <input type="file" name="id_proof" class="form-control  ih-medium ip-lightradius-xs b-light" id="" >
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
   function addEmployee(){
   
   $.ajax({
            url: "<?php echo base_url(); ?>admin/addEmployeeForm",
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
               //swal('Employee added successfully')
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