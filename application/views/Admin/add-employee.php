<?php include('include/header.php'); ?>  
<div id="scrolltophere"></div>
<div class="contents demo-card expanded">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-4">
            <div class="breadcrumb-main" style="margin-top: 34px;">
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

<input type="hidden" id="uni_empid" value="<?php echo $emp_random_number; ?>" class="form-control  ih-medium ip-lightradius-xs b-light"  >  
  
<div class="contents demo-card expanded">
   <div class="row">
      <div class="col-sm-12">
         <form method="post" action="<?php echo base_url();?>admin/addEmployee"  id="employeeForm1" enctype="multipart/form-data">
		 
             <?php echo $this->session->flashdata('msg');
               if(isset($_SESSION['msg'])){
    unset($_SESSION['msg']);
}
              ?>
            <div id="eMsg"></div>
			
            <div class="form-row" style="margin-top: -142px;margin-left: 8px;">

            <div class="form-group col-sm-12">
               <h3>Personal Detail</h3>
			</div>

         <div class="form-group col-sm-4">
					<label>Employee ID Type</label>
                  <div class="with-icon">
                     <span class="la la-restroom color-light"></span>
                     <select name="emp_id" class="form-control ih-medium ip-lightradius-xs b-light" id="empID"  onchange="return employeeIdCheck()">
                     <option  value="">Select Employee ID</option>   
                     <option <?php if(set_value('emp_id') == 'auto_generate') { echo 'selected'; } ?> value="auto_generate">Auto Generate</option>
                        <option <?php if(set_value('emp_id') == 'manual_id') { echo 'selected'; } ?>  value="manual_id">Manual</option>
                     </select>
                     
                  </div>
               </div>

               <div class="form-group col-sm-4" id="uniqID2">
					<label>Employee ID</label>*
                  <div class="with-icon">
                     <span class="la-user lar color-light"></span>
                     <input type="text" name="employee_id" value="<?php echo set_value('employee_id'); ?>" class="form-control  ih-medium ip-lightradius-xs b-light" id="id_uniq" placeholder="Employee ID" required>
                     <p style="color:red;"><?php echo form_error('employee_id'); ?></p>
                  </div>
               </div>

               <div class="form-group col-sm-4">
					<label>Firstname</label>*
                  <div class="with-icon">
                     <span class="la-user lar color-light"></span>
                     <input type="text" name="first_name" value="<?php echo set_value('first_name'); ?>" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="First Name" required>
                  </div>
               </div>
               <div class="form-group col-sm-4">
					<label>Lastname</label>*
                  <div class="with-icon">
                     <span class="la-user lar color-light"></span>
                     <input type="text" name="last_name" value="<?php echo set_value('last_name'); ?>" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="Last Name" required>
                  </div>
               </div>
               <div class="form-group col-sm-4">
					<label>Father Name</label>
                  <div class="with-icon">
                     <span class="la-user lar color-light"></span>
                     <input type="text" name="father_name" value="<?php echo set_value('father_name'); ?>" class="form-control  ih-medium ip-lightradius-xs b-light" placeholder="Father name" >
                  </div>
               </div>
					<div class="form-group col-sm-4">
					<label>Phone Number</label>*
                  <div class="with-icon">
                     <span class="la la-phone color-light"></span>
                     <input type="text" name="phone" value="<?php echo set_value('phone'); ?>" class="form-control  ih-medium ip-lightradius-xs b-light" minlength="1" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');"  placeholder="Phone Number" required>
                  </div>
               </div>
               <div class="form-group col-sm-4">
					<label>Date of birth</label>*
                  <div class="with-icon">
                     <span class="la la-phone color-light"></span>
                     <input type="date" name="dob" value="<?php echo set_value('dob'); ?>" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="Date of birth" required>
                  </div>
               </div>
					<div class="form-group col-sm-4">
					<label>Blood Group</label>
                  <div class="with-icon">
                     <span class="la-user lar color-light"></span>
                     <input type="text" name="blood_group" value="<?php echo set_value('blood_group'); ?>" class="form-control  ih-medium ip-lightradius-xs b-light" placeholder="Blood Group" >
                  </div>
               </div>
              
               <div class="form-group col-sm-4">
					<label>Gender</label>*
                  <div class="with-icon">
                     <span class="la la-restroom color-light"></span>
                     <select name="gender"  class="form-control ih-medium ip-lightradius-xs b-light" required>
                        <option selected="">Select Gender</option>
                        <option  <?php if(set_value('gender') == 'Male') { echo 'selected'; } ?> >Male</option>
                        <option  <?php if(set_value('gender') == 'Female') { echo 'selected'; } ?>  >Female</option>
                     </select>
                  </div>
               </div>
					<div class="form-group col-sm-4">
					<label>Marital Status</label>
                  <div class="with-icon">
                     <span class="la la-restroom color-light"></span>
                     <select name="marital_status"    class="form-control ih-medium ip-lightradius-xs b-light">
                        <option selected="">Select Marital Status</option>
                        <option  <?php if(set_value('marital_status') == 'Married') { echo 'selected'; } ?>  >Married</option>
                        <option  <?php if(set_value('marital_status') == 'Unmarried') { echo 'selected'; } ?>  >Unmarried</option>
                     </select>
                  </div>
               </div>
					<div class="form-group col-sm-4">
					<label>Marriage Date</label>
                  <div class="with-icon">
                     <span class="la la-phone color-light"></span>
                     <input type="date" name="marrige_date"  value="<?php echo set_value('marrige_date'); ?>" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="Marriage Date">
                  </div>
               </div>
					<div class="form-group col-sm-4">
					<label>Spouse Name</label>
                  <div class="with-icon">
                     <span class="la-user lar color-light"></span>
                     <input type="text" name="spouse_name"  value="<?php echo set_value('spouse_name'); ?>"  class="form-control ih-medium ip-lightradius-xs b-light" placeholder="Spouse name" >
                  </div>
               </div>
					<div class="form-group col-sm-4">
					<label>Nationality</label>
                  <div class="with-icon">
                     <span class="la-user lar color-light"></span>
                     <input type="text" name="nationality"  value="<?php echo set_value('nationality'); ?>"  class="form-control  ih-medium ip-lightradius-xs b-light" placeholder="Nationality" >
                  </div>
               </div>
					<div class="form-group col-sm-4">
					<label>Religion</label>
                  <div class="with-icon">
                     <span class="la-user lar color-light"></span>
                     <input type="text" name="religion"  value="<?php echo set_value('religion'); ?>"  class="form-control  ih-medium ip-lightradius-xs b-light" placeholder="Religion" >
                  </div>
               </div>
					<div class="form-group col-sm-4">
					<label>Place Of Birth</label>
                  <div class="with-icon">
                     <span class="la-user lar color-light"></span>
                     <input type="text" name="place_of_birth"  value="<?php echo set_value('place_of_birth'); ?>"  class="form-control  ih-medium ip-lightradius-xs b-light" placeholder="Place Of Birth" >
                  </div>
               </div>
					<div class="form-group col-sm-4">
					<label>Country of Origin</label>
                  <div class="with-icon">
                     <span class="la-user lar color-light"></span>
                     <input type="text" name="country_of_origin"  value="<?php echo set_value('country_of_origin'); ?>"  class="form-control  ih-medium ip-lightradius-xs b-light" placeholder="Country of Origin" >
                  </div>
               </div>
					<div class="form-group col-sm-4">
					<label>International Employee</label>
                  <div class="with-icon">
                     <span class="la la-restroom color-light"></span>
                     <select name="international_employee"  class="form-control ih-medium ip-lightradius-xs b-light">
                        <option selected="">Select International Employee</option>
                        <option <?php if(set_value('international_employee') == 'Yes') { echo 'selected'; } ?> >Yes</option>
                        <option <?php if(set_value('international_employee') == 'No') { echo 'selected'; } ?> >No</option>
                     </select>
                  </div>
               </div>
					<div class="form-group col-sm-4">
					<label>Physically challenged</label>
                  <div class="with-icon">
                     <span class="la la-restroom color-light"></span>
                     <select name="physically_challenged"   class="form-control ih-medium ip-lightradius-xs b-light">
                        <option selected="">Select Physically challenged</option>
                        <option <?php if(set_value('physically_challenged') == 'Yes') { echo 'selected'; } ?> >Yes</option>
                        <option <?php if(set_value('physically_challenged') == 'No') { echo 'selected'; } ?> >No</option>
                     </select>
                  </div>
               </div>
					<div class="form-group col-sm-4">
					<label>Is Director</label>
                  <div class="with-icon">
                     <span class="la la-restroom color-light"></span>
                     <select name="is_director"  value="<?php echo set_value('is_director'); ?>" class="form-control ih-medium ip-lightradius-xs b-light">
                        <option selected="">Select Is Director</option>
                        <option <?php if(set_value('is_director') == 'Yes') { echo 'selected'; } ?> >Yes</option>
                        <option <?php if(set_value('is_director') == 'No') { echo 'selected'; } ?> >No</option>
                     </select>
                  </div>
               </div>
               <div class="form-group col-sm-4">
					<label>Local Address</label>*
                  <div class="with-icon">
                     <span class="la la-envelope color-light"></span>
                     <input type="text" name="local_address" value="<?php echo set_value('local_address'); ?>"  class="form-control  ih-medium ip-lightradius-xs b-light" placeholder="Local Address" required>
                  </div>
               </div>
               <div class="form-group col-sm-4">
					<label>Permanent Address</label>*
                  <div class="with-icon">
                     <span class="la la-user-circle color-light"></span>
                     <input type="text" name="permanent_address"  value="<?php echo set_value('permanent_address'); ?>"  class="form-control  ih-medium ip-lightradius-xs b-light" id="" placeholder="Permanent address" required>
                  </div>
               </div>
				
               <div class="form-group col-sm-4">
					<label>Profile Image</label>
                  <div class="with-icon">
                     <!--<span class="la-user lar color-light"></span>-->
                     <input type="file" name="image" value="<?php echo set_value('image'); ?>"  class="form-control  ih-medium ip-lightradius-xs b-light">
                  </div>
               </div>

			<div class="form-group col-sm-12">
               <h3>Employee Details</h3>
			   </div>

			    <div class="form-group col-sm-4">
				 <label>Department</label>*
                  <div class="with-icon">
                     <span class="la la-user-graduate color-light"></span>
                     <select name="department_id"  id="department_id" class="form-control ih-medium ip-lightradius-xs b-light" required onchange="getdesignation();">
                        <option selected="">Select Department</option>
						<?php if($department){?>
						<?php foreach($department as $val){?>
                        <option  <?php if(set_value('department_id') == $val['id'] ) { echo 'selected'; } ?>  value="<?php echo $val['id'];?>"><?php echo $val['name'];?></option>
                        <?php } } ?>
                     </select>
                  </div>
               </div>
               <div class="form-group col-sm-4">
					<label>Designation</label>*
                  <div class="with-icon">
                     <span class="la la-user-shield color-light"></span>
                     <select name="designation_id"    id="designation_id" class="form-control ih-medium ip-lightradius-xs b-light" required>
                        <option selected="">Select Designation</option>
                        <?php if($designation){?>
						<?php foreach($designation as $val){?>
                        <option  <?php if(set_value('designation_id') == $val['id'] ) { echo 'selected'; } ?>  value="<?php echo $val['id'];?>"><?php echo $val['designation_name'];?></option>
                        <?php } } ?>
                     </select>
                  </div>
               </div>

					<div class="form-group col-sm-4">
					<label>Date of joining</label>*
                  <div class="with-icon">
                     <span class="la la-money-bill-wave color-light"></span>
                     <input type="date" name="date_of_joining"  value="<?php echo set_value('date_of_joining'); ?>"  class="form-control  ih-medium ip-lightradius-xs b-light" id="" placeholder="Date of joining" required>
                  </div>
               </div>

					<div class="form-group col-sm-4">
					<label>Confirmation Date</label>
                  <div class="with-icon">
                     <span class="la la-money-bill-wave color-light"></span>
                     <input type="date" name="confirmation_date"  value="<?php echo set_value('confirmation_date'); ?>"  class="form-control  ih-medium ip-lightradius-xs b-light" id="" placeholder="Confirmation Date">
                  </div>
               </div>

					<div class="form-group col-sm-4">
					<label>Joining Status</label>
                  <div class="with-icon">
                     <span class="la-user lar color-light"></span>
                     <input type="text" name="joining_status"  value="<?php echo set_value('joining_status'); ?>" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="Joining Status">
                  </div>
               </div>
					<div class="form-group col-sm-4">
					<label>Probation Period</label>
                  <div class="with-icon">
                     <span class="la-user lar color-light"></span>
                     <input type="text" name="probation_period"  value="<?php echo set_value('probation_period'); ?>"  class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="Probation Period">
                  </div>
               </div>
					<div class="form-group col-sm-4">
					<label>Notice Period</label>
                  <div class="with-icon">
                     <span class="la-user lar color-light"></span>
                     <input type="text" name="notice_period"  value="<?php echo set_value('notice_period'); ?>"  class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="Notice Period">
                  </div>
               </div>
					<div class="form-group col-sm-4">
					<label>Current Company Experience</label>
                  <div class="with-icon">
                     <span class="la-user lar color-light"></span>
                     <input type="text" name="current_comp_exp"  value="<?php echo set_value('current_comp_exp'); ?>"  class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="Current Company Experience">
                  </div>
               </div>
					<div class="form-group col-sm-4">
					<label>Previous Experience</label>
                  <div class="with-icon">
                     <span class="la-user lar color-light"></span>
                     <input type="text" name="previous_exp"  value="<?php echo set_value('previous_exp'); ?>"  class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="Previous Experience">
                  </div>
               </div>
					<div class="form-group col-sm-4">
					<label>Total Experience</label>
                  <div class="with-icon">
                     <span class="la-user lar color-light"></span>
                     <input type="text" name="total_exp"  value="<?php echo set_value('total_exp'); ?>"   class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="Total Experience">
                  </div>
               </div>
               <div class="form-group col-sm-4">
					<label>Credit leaves</label>
                  <div class="with-icon">
                     <span class="la la-money-bill-wave color-light"></span>
                     <input type="number" name="credit_leaves"   value="<?php echo set_value('credit_leaves'); ?>"  class="form-control  ih-medium ip-lightradius-xs b-light" id=""  placeholder="Credit leaves">
                  </div>
               </div>
              
		   
		   <div class="form-group col-sm-12">
			  <h3>Account Login</h3>
		   </div>
               <div class="form-group col-sm-4">
					<label>Email</label>*
                  <div class="with-icon">
                     <span class="la la-lock color-light"></span>
                     <input type="email" name="email"  value="<?php echo set_value('email'); ?>"  class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="Email" required>
                  </div>
               </div>
               <div class="form-group col-sm-4">
					<label>Password</label>
                  <div class="with-icon">
                     <span class="la la-lock color-light"></span>
                     <input type="text" name="password"  value="<?php echo set_value('password'); ?>"  class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" value="123456"  placeholder="Password">
                  </div>
               </div>
			   
		   <div class="form-group col-sm-12">
			  <h3>Leave Detail</h3>
		   </div>
				<div class="form-group col-sm-4">
				<label>Reporting Email</label>
                  <div class="with-icon">
                     <span class="la la-user-graduate color-light"></span>
                     <textarea placeholder="Reporting Email ::=> abc@abc.com , xyz@xyz.com , ..." name="reporting"  value="<?php echo set_value('reporting'); ?>"  id="reporting" class="form-control ih-medium ip-lightradius-xs b-light" ></textarea>
                  </div>
               </div>
			 
               <div class="form-group col-sm-4">
					<label>Opening EL</label>*
                  <div class="with-icon">
                     <span class="la la-money-bill-wave color-light"></span>
                     <input type="text" name="opening_el"  value="<?php echo set_value('opening_el'); ?>"  class="form-control  ih-medium ip-lightradius-xs b-light" id="" placeholder="Opening EL" required>
                  </div>
               </div>
			   
			    <div class="form-group col-sm-4">
				 <label>EL</label>*
                  <div class="with-icon">
                     <span class="la la-money-bill-wave color-light"></span>
                     <input type="text" name="el"  value="<?php echo set_value('el'); ?>"  class="form-control  ih-medium ip-lightradius-xs b-light" id="" placeholder="EL" required>
                  </div>
               </div>
			   
			   <div class="form-group col-sm-4">
				<label>CL</label>*
                  <div class="with-icon">
                     <span class="la la-money-bill-wave color-light"></span>
                     <input type="text" name="cl"  value="<?php echo set_value('cl'); ?>"  class="form-control  ih-medium ip-lightradius-xs b-light" id="" placeholder="CL" required>
                  </div>
               </div>
			   
			   <div class="form-group col-sm-4">
				<label>Optional</label>*
                  <div class="with-icon">
                     <span class="la la-money-bill-wave color-light"></span>
                     <input type="text" name="optional"  value="<?php echo set_value('optional'); ?>"  class="form-control  ih-medium ip-lightradius-xs b-light" id="" placeholder="Optional" required>
                  </div>
               </div>
			   
			   <div class="form-group col-sm-4">
				<label>CompOff</label>*
                  <div class="with-icon">
                     <span class="la la-money-bill-wave color-light"></span>
                     <input type="text" name="compOff"  value="<?php echo set_value('compOff'); ?>"  class="form-control  ih-medium ip-lightradius-xs b-light" id="" placeholder="CompOff" required>
                  </div>
               </div>
               
		   <div class="form-group col-sm-12">
			  <h3>Bank Detail</h3>
		   </div>
               <div class="form-group col-sm-4">
					<label>Account Holder Name</label>*
                  <div class="with-icon">
                     <span class="la la-money-bill-wave color-light"></span>
                     <input type="text" name="account_holder_name"  value="<?php echo set_value('account_holder_name'); ?>"  class="form-control  ih-medium ip-lightradius-xs b-light" id="" placeholder="Account holder name" required>
                  </div>
               </div>
               <div class="form-group col-sm-4">
					<label>Account Number</label>*
                  <div class="with-icon">
                     <span class="la la-money-check-alt color-light"></span>
                     <input type="test" name="account_number"  value="<?php echo set_value('account_number'); ?>"  class="form-control  ih-medium ip-lightradius-xs b-light" id="=" placeholder="Account number" required>
                  </div>
               </div>
               
			  <div class="form-group col-sm-4">
			  <label>Bank Name</label>*
                  <div class="with-icon">
                     <span class="la la-user-shield color-light"></span>
                     <select name="bank_name"  id="bank_name"  value="<?php echo set_value('bank_name'); ?>"  class="form-control ih-medium ip-lightradius-xs b-light" required>
                        <option selected="">Select Bank</option>
                        <?php if($banks){?>
						<?php foreach($banks as $bval){?>
                        <option  <?php if(set_value('bank_name') == $bval['bank_name'] ) { echo 'selected'; } ?>  value="<?php echo $bval['bank_name'];?>"><?php echo $bval['bank_name'];?></option>
                        <?php } } ?>
                     </select>
                  </div>
               </div>
               <div class="form-group col-sm-4">
					<label>IFSC</label>*
                  <div class="with-icon">
                     <span class="la la-money-check-alt color-light"></span>
                     <input type="text" name="bin"  value="<?php echo set_value('bin'); ?>"  class="form-control  ih-medium ip-lightradius-xs b-light" id="=" placeholder="IFSC" required>
                  </div>
               </div>
					<div class="form-group col-sm-4">
					<label>MICR</label>
                  <div class="with-icon">
                     <span class="la la-money-check-alt color-light"></span>
                     <input type="text" name="micr" value="<?php echo set_value('micr'); ?>"  class="form-control  ih-medium ip-lightradius-xs b-light" id="=" placeholder="MICR">
                  </div>
               </div>
               <div class="form-group col-sm-4">
					<label>Branch Location</label>*
                  <div class="with-icon">
                     <span class="la la-money-check-alt color-light"></span>
                     <input type="text" name="branch_location" value="<?php echo set_value('branch_location'); ?>"  class="form-control  ih-medium ip-lightradius-xs b-light" id="=" placeholder="Branch Location" required>
                  </div>
               </div>
               <div class="form-group col-sm-4">
					<label>Tax Payer Id</label>
                  <div class="with-icon">
                     <span class="la la-money-check-alt color-light"></span>
                     <input type="text" name="tax_payer_id" value="<?php echo set_value('tax_payer_id'); ?>"  class="form-control  ih-medium ip-lightradius-xs b-light" id="=" placeholder="Tax Payer Id" >
                  </div>
               </div>
			   
			      <div class="form-group col-sm-12">
			  <h3>Salary Details</h3>
		   </div>
               <div class="col-sm-4 form-group">
					<label>Gross</label>
                  <span class="color-light"></span>
                  <input type="text" name="gross" value="<?php echo set_value('gross'); ?>"  placeholder="Gross" class="form-control ih-medium ip-lightradius-xs b-light" >
               </div>
			   <div class="col-sm-4 form-group">
				<label>Variable Pay</label>
                  <span class="color-light"></span>
                  <input type="text" name="variable_pay" value="<?php echo set_value('variable_pay'); ?>"  placeholder="Variable Pay" class="form-control ih-medium ip-lightradius-xs b-light" >
               </div>
			   <div class="col-sm-4 form-group">
				<label>Retention Bonus</label>
                  <span class="color-light"></span>
                  <input type="text" name="retention_bonus" value="<?php echo set_value('retention_bonus'); ?>"  placeholder="Retention Bonus" class="form-control ih-medium ip-lightradius-xs b-light" >
               </div>
			   <div class="col-sm-4 form-group">
				<label>Incentive</label>
                  <span class="color-light"></span>
                  <input type="text" name="incentive" value="<?php echo set_value('incentive'); ?>"  placeholder="Incentive" class="form-control ih-medium ip-lightradius-xs b-light" >
               </div>
			   <div class="col-sm-4 form-group">
				<label>Net CTC</label>
                  <span class="color-light"></span>
                  <input type="text" name="net_ctc" value="<?php echo set_value('net_ctc'); ?>"  placeholder="Net CTC" class="form-control ih-medium ip-lightradius-xs b-light" >
               </div>
			   
		   <div class="form-group col-sm-12">
			  <h3>Document</h3>
		   </div>
			    <div class="form-group col-sm-4">
                     <label>PAN NO.</label>
							<div class="with-icon">
                     <input type="text" name="PAN_no"  value="<?php echo set_value('PAN_no'); ?>" class="form-control  ih-medium ip-lightradius-xs b-light" id="=" placeholder="PAN No">
                  </div>
               </div>
			   <div class="form-group col-sm-4">
				<label>AADHAR NO.</label>
                  <div class="with-icon">
                     <input type="text" name="AADHAR_no"  value="<?php echo set_value('AADHAR_no'); ?>" class="form-control  ih-medium ip-lightradius-xs b-light" id="=" placeholder="AADHAR No">
                  </div>
               </div>
			   <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <label>ESIC No.</label>
                     <input type="text" name="ESIC"  value="<?php echo set_value('ESIC'); ?>" class="form-control  ih-medium ip-lightradius-xs b-light" id="=" placeholder="ESIC">
                  </div>
               </div>
			   
					<div class="form-group col-sm-4">
					<label>ESI Join Date</label>
                  <div class="with-icon">
                     <span class="la la-phone color-light"></span>
                     <input type="date" name="esi_joindate"  value="<?php echo set_value('esi_joindate'); ?>" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="ESI Join Date">
                  </div>
               </div>

					<div class="form-group col-sm-4">
				<label>Covered Members</label>
                  <div class="with-icon">
                     <span class="la la-user-graduate color-light"></span>
							<input type="number" min="0" name="covered_members"  value="<?php echo set_value('covered_members'); ?>" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="Covered Members">
                     </div>
               </div>

					<div class="form-group col-sm-4">
                  <div class="with-icon">
                     <label>PF No.</label>
                     <input type="text" name="PF"  value="<?php echo set_value('PF'); ?>" class="form-control  ih-medium ip-lightradius-xs b-light" id="=" placeholder="PF">
                  </div>
               </div>

					
					<div class="form-group col-sm-4">
					<label>PF Join Date</label>
                  <div class="with-icon">
                     <span class="la la-phone color-light"></span>
                     <input type="date" name="pf_joindate"  value="<?php echo set_value('pf_joindate'); ?>" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="PF Join Date">
                  </div>
               </div>

			   <div class="form-group col-sm-4">
                     <label>UAN No.</label>
							<div class="with-icon">
                     <input type="text" name="UAN_no"  value="<?php echo set_value('UAN_no'); ?>" class="form-control  ih-medium ip-lightradius-xs b-light" id="=" placeholder="UAN No">
                  </div>
               </div>
			   
               <div class="form-group col-sm-4">
                     <label>Resume</label>
							<div class="with-icon">
                     <input type="file" name="resume"  value="<?php echo set_value('resume'); ?>" class="form-control  ih-medium ip-lightradius-xs b-light" id="" >
                  </div>
               </div>
               <div class="form-group col-sm-4">
                     <label>Id Proof</label>
							<div class="with-icon">
                     <input type="file" name="id_proof"  value="<?php echo set_value('id_proof'); ?>" class="form-control  ih-medium ip-lightradius-xs b-light" id="" >
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

function employeeIdCheck() {
   let empid = $('#empID').val();
   let id_emp = $('#uni_empid').val();

   if(empid == 'auto_generate') {
     
      // $('#uniqID2').removeClass('d-none');
      $('#id_uniq').val(id_emp);
      $('#id_uniq').prop('readonly', true);
   } else  {
      // $('#uniqID2').addClass('d-none');
      $('#id_uniq').val('');
   }
   
   if(empid == 'manual_id'){
      // $('#uniqID2').removeClass('d-none');
      $('#id_uniq').prop('readonly', false);
   } 

   

}

// function validateEmpID(empid)
// {
//    $.ajax({
//             url: "<?php// echo base_url(); ?>admin/validate_empid",
//             type: "POST",
//             data:{empid:empid},
//             dataType:"JSON",
//             success: function (response) {
//                if(response.status == '0') {
//                   $('#errorMsg').html(response.message);
//                   // $('#id_uniq').val('');
//                   setTimeout(function(){
//                   window.location.reload();
//                }, 2000);
//                } 
//                // if(response.status == 0){
//                   //   
            
//         }
//     });
// }
  

   // function addEmployee(){
//       // console.log('hello');
//    // alert("hi");
//    $.ajax({
//             url: "<?php // echo base_url(); ?>admin/addEmployeeForm",
//             type: "POST",
//             data:new FormData($('#employeeForm')[0]),
//             dataType:"JSON",
//             async:false,
//             cache:false,
//             contentType:false,
//             processData:false,
//             success: function (res) {
// 				console.log(res); 
//              if(res.status==1){
//                //swal('Employee added successfully')
//               window.location.href="<?php //echo base_url(); ?>admin/employee";
//              } else {
             
// 			   $('html,body').animate({
//         scrollTop: $("#scrolltophere").offset().top},
//         'slow');
// 		 $('#eMsg').html(res.msg);
//               return false;
//              }
//         }
//     });
//    return false;  
// }  

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
