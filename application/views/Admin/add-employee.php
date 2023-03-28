<?php include('include/header.php'); ?>  
<div id="scrolltophere"></div>
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
		 <!--<form method="post" action="<?php echo base_url(); ?>admin/addEmployeeForm" id="employeeForm" enctype="multipart/form-data">-->
         
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
			    <!--<div class="col-sm-4 form-group">
                  <span class="color-light"></span>
                  <input type="text" name="emp_id" placeholder="Employee Id" class="form-control ih-medium ip-lightradius-xs b-light" required>
               </div>-->
			    <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-user-graduate color-light"></span>
                     <select name="department_id" id="department_id" class="form-control ih-medium ip-lightradius-xs b-light" required onchange="getdesignation();">
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
                     <select name="designation_id"  id="designation_id" class="form-control ih-medium ip-lightradius-xs b-light" required>
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
                     <input type="number" name="credit_leaves" class="form-control  ih-medium ip-lightradius-xs b-light" id=""  placeholder="Credit leaves">
                  </div>
               </div>
               <!--<div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-money-check-alt color-light"></span>
                     <input type="date" name="date_of_joining" class="form-control  ih-medium ip-lightradius-xs b-light" id="=" required placeholder="Date of joining">
                  </div>
               </div>-->
			   
			  
			   
			<div class="form-group col-sm-12">
               <h3>Personal Detail</h3>
			</div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la-user lar color-light"></span>
                     <input type="text" name="first_name" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="First Name" required>
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la-user lar color-light"></span>
                     <input type="text" name="last_name" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="Last Name" required>
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la-user lar color-light"></span>
                     <input type="text" name="father_name" class="form-control  ih-medium ip-lightradius-xs b-light" placeholder="Father name" >
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-phone color-light"></span>
                     <input type="date" name="dob" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="Date of birth" required>
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-phone color-light"></span>
                     <input type="text" name="phone" class="form-control  ih-medium ip-lightradius-xs b-light" minlength="1" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');"  placeholder="Phone Number" required>
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
                     <input type="text" name="local_address" class="form-control  ih-medium ip-lightradius-xs b-light" placeholder="Local Address" required>
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-user-circle color-light"></span>
                     <input type="text" name="permanent_address" class="form-control  ih-medium ip-lightradius-xs b-light" id="" placeholder="Permanent address" required>
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
                     <input type="email" name="email" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="Email" required>
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-lock color-light"></span>
                     <input type="text" name="password" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" value="123456"  placeholder="Password">
                  </div>
               </div>
			   
			   <!--<div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-user-shield color-light"></span>
                     <select name="admin_id"  id="admin_id" class="form-control ih-medium ip-lightradius-xs b-light">
                        <option selected="">Select Manager</option>
                        <?php if($admin){?>
						<?php foreach($admin as $aval){?>
                        <option value="<?php echo $aval['user_id'];?>"><?php echo $aval['first_name']." ".$aval['last_name'];?></option>
                        <?php } } ?>
                     </select>
                  </div>
               </div>-->
			   
		   
		   <div class="form-group col-sm-12">
			  <h3>Leave Detail</h3>
		   </div>
				<div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-user-graduate color-light"></span>
                     <textarea placeholder="Reporting Email ::=> abc@abc.com , xyz@xyz.com , ..." name="reporting" id="reporting" class="form-control ih-medium ip-lightradius-xs b-light" ></textarea>
                  </div>
               </div>
			   <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-money-bill-wave color-light"></span>
                     <input type="date" name="date_of_joining" class="form-control  ih-medium ip-lightradius-xs b-light" id="" placeholder="Date of joining" required>
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-money-bill-wave color-light"></span>
                     <input type="text" name="opening_el" class="form-control  ih-medium ip-lightradius-xs b-light" id="" placeholder="Opening EL" required>
                  </div>
               </div>
			   
			    <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-money-bill-wave color-light"></span>
                     <input type="text" name="el" class="form-control  ih-medium ip-lightradius-xs b-light" id="" placeholder="EL" required>
                  </div>
               </div>
			   
			   <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-money-bill-wave color-light"></span>
                     <input type="text" name="cl" class="form-control  ih-medium ip-lightradius-xs b-light" id="" placeholder="CL" required>
                  </div>
               </div>
			   
			   <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-money-bill-wave color-light"></span>
                     <input type="text" name="optional" class="form-control  ih-medium ip-lightradius-xs b-light" id="" placeholder="Optional" required>
                  </div>
               </div>
			   
			   <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-money-bill-wave color-light"></span>
                     <input type="text" name="compOff" class="form-control  ih-medium ip-lightradius-xs b-light" id="" placeholder="CompOff" required>
                  </div>
               </div>
               
		   <div class="form-group col-sm-12">
			  <h3>Bank Detail</h3>
		   </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-money-bill-wave color-light"></span>
                     <input type="text" name="account_holder_name" class="form-control  ih-medium ip-lightradius-xs b-light" id="" placeholder="Account holder name" required>
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-money-check-alt color-light"></span>
                     <input type="test" name="account_number" class="form-control  ih-medium ip-lightradius-xs b-light" id="=" placeholder="Account number" required>
                  </div>
               </div>
               
			  <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-user-shield color-light"></span>
                     <select name="bank_name"  id="bank_name" class="form-control ih-medium ip-lightradius-xs b-light" required>
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
                     <input type="text" name="bin" class="form-control  ih-medium ip-lightradius-xs b-light" id="=" placeholder="Bank Identifier code" required>
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-money-check-alt color-light"></span>
                     <input type="text" name="branch_location" class="form-control  ih-medium ip-lightradius-xs b-light" id="=" placeholder="Branch Location" required>
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-money-check-alt color-light"></span>
                     <input type="text" name="tax_payer_id" class="form-control  ih-medium ip-lightradius-xs b-light" id="=" placeholder="Tax Payer Id" >
                  </div>
               </div>
			   
			      <div class="form-group col-sm-12">
			  <h3>Salary Details</h3>
		   </div>
               <div class="col-sm-4 form-group">
                  <span class="color-light"></span>
                  <input type="text" name="gross" placeholder="Gross" class="form-control ih-medium ip-lightradius-xs b-light" required>
               </div>
			   <div class="col-sm-4 form-group">
                  <span class="color-light"></span>
                  <input type="text" name="variable_pay" placeholder="Variable Pay" class="form-control ih-medium ip-lightradius-xs b-light" required>
               </div>
			   <div class="col-sm-4 form-group">
                  <span class="color-light"></span>
                  <input type="text" name="retention_bonus" placeholder="Retention Bonus" class="form-control ih-medium ip-lightradius-xs b-light" required>
               </div>
			   <div class="col-sm-4 form-group">
                  <span class="color-light"></span>
                  <input type="text" name="incentive" placeholder="Incentive" class="form-control ih-medium ip-lightradius-xs b-light" required>
               </div>
			   <div class="col-sm-4 form-group">
                  <span class="color-light"></span>
                  <input type="text" name="net_ctc" placeholder="Net CTC" class="form-control ih-medium ip-lightradius-xs b-light" required>
               </div>
			   
		   <div class="form-group col-sm-12">
			  <h3>Document</h3>
		   </div>
			    <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <label>PAN NO.</label>
                     <input type="text" name="PAN_no" class="form-control  ih-medium ip-lightradius-xs b-light" id="=" placeholder="PAN No">
                  </div>
               </div>
			   <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <label>AADHAR NO.</label>
                     <input type="text" name="AADHAR_no" class="form-control  ih-medium ip-lightradius-xs b-light" id="=" placeholder="AADHAR No">
                  </div>
               </div>
			   <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <label>ESIC</label>
                     <input type="text" name="ESIC" class="form-control  ih-medium ip-lightradius-xs b-light" id="=" placeholder="ESIC">
                  </div>
               </div>
			   
			   <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <label>UAN No.</label>
                     <input type="text" name="UAN_no" class="form-control  ih-medium ip-lightradius-xs b-light" id="=" placeholder="UAN No">
                  </div>
               </div>
			   
               <!--<div class="form-group col-sm-4">
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
               </div>-->
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
   //alert("hi");
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
             
			   $('html,body').animate({
        scrollTop: $("#scrolltophere").offset().top},
        'slow');
		 $('#eMsg').html(res.msg);
              return false;
             }
        }
    });
   return false;  
}  

function getdesignation()
  {
	  //alert("hi");
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