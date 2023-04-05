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
                     <select name="emp_id" class="form-control ih-medium ip-lightradius-xs b-light" id="empID" onchange="return employeeIdCheck()">
                     <option value="">Select Employee ID</option>   
                     <option value="auto_generate">Auto Generate</option>
                        <option value="manual_id">Manual</option>
                     </select>
                  </div>
               </div>

            

               <div class="form-group col-sm-4 d-none" id="uniqID2">
					<label>Employee ID</label>*
                  <div class="with-icon">
                     <span class="la-user lar color-light"></span>
                     <input type="text" name="employee_id" value="" class="form-control  ih-medium ip-lightradius-xs b-light" id="id_uniq" placeholder="Employee ID" required>
                  </div>
               </div>

               <div class="form-group col-sm-4">
					<label>Firstname</label>*
                  <div class="with-icon">
                     <span class="la-user lar color-light"></span>
                     <input type="text" name="first_name" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="First Name" required>
                  </div>
               </div>
               <div class="form-group col-sm-4">
					<label>Lastname</label>*
                  <div class="with-icon">
                     <span class="la-user lar color-light"></span>
                     <input type="text" name="last_name" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="Last Name" required>
                  </div>
               </div>
               <div class="form-group col-sm-4">
					<label>Father Name</label>
                  <div class="with-icon">
                     <span class="la-user lar color-light"></span>
                     <input type="text" name="father_name" class="form-control  ih-medium ip-lightradius-xs b-light" placeholder="Father name" >
                  </div>
               </div>
					<div class="form-group col-sm-4">
					<label>Phone Number</label>*
                  <div class="with-icon">
                     <span class="la la-phone color-light"></span>
                     <input type="text" name="phone" class="form-control  ih-medium ip-lightradius-xs b-light" minlength="1" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');"  placeholder="Phone Number" required>
                  </div>
               </div>
               <div class="form-group col-sm-4">
					<label>Date of birth</label>*
                  <div class="with-icon">
                     <span class="la la-phone color-light"></span>
                     <input type="date" name="dob" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="Date of birth" required>
                  </div>
               </div>
					<div class="form-group col-sm-4">
					<label>Blood Group</label>
                  <div class="with-icon">
                     <span class="la-user lar color-light"></span>
                     <input type="text" name="blood_group" class="form-control  ih-medium ip-lightradius-xs b-light" placeholder="Blood Group" >
                  </div>
               </div>
              
               <div class="form-group col-sm-4">
					<label>Gender</label>*
                  <div class="with-icon">
                     <span class="la la-restroom color-light"></span>
                     <select name="gender" class="form-control ih-medium ip-lightradius-xs b-light" required>
                        <option selected="">Select Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                     </select>
                  </div>
               </div>
					<div class="form-group col-sm-4">
					<label>Marital Status</label>
                  <div class="with-icon">
                     <span class="la la-restroom color-light"></span>
                     <select name="marital_status" class="form-control ih-medium ip-lightradius-xs b-light">
                        <option selected="">Select Marital Status</option>
                        <option>Married</option>
                        <option>Unmarried</option>
                     </select>
                  </div>
               </div>
					<div class="form-group col-sm-4">
					<label>Marriage Date</label>
                  <div class="with-icon">
                     <span class="la la-phone color-light"></span>
                     <input type="date" name="marrige_date" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="Marriage Date">
                  </div>
               </div>
					<div class="form-group col-sm-4">
					<label>Spouse Name</label>
                  <div class="with-icon">
                     <span class="la-user lar color-light"></span>
                     <input type="text" name="spouse_name" class="form-control  ih-medium ip-lightradius-xs b-light" placeholder="Spouse name" >
                  </div>
               </div>
					<div class="form-group col-sm-4">
					<label>Nationality</label>
                  <div class="with-icon">
                     <span class="la-user lar color-light"></span>
                     <input type="text" name="nationality" class="form-control  ih-medium ip-lightradius-xs b-light" placeholder="Nationality" >
                  </div>
               </div>
					<div class="form-group col-sm-4">
					<label>Religion</label>
                  <div class="with-icon">
                     <span class="la-user lar color-light"></span>
                     <input type="text" name="religion" class="form-control  ih-medium ip-lightradius-xs b-light" placeholder="Religion" >
                  </div>
               </div>
					<div class="form-group col-sm-4">
					<label>Place Of Birth</label>
                  <div class="with-icon">
                     <span class="la-user lar color-light"></span>
                     <input type="text" name="place_of_birth" class="form-control  ih-medium ip-lightradius-xs b-light" placeholder="Place Of Birth" >
                  </div>
               </div>
					<div class="form-group col-sm-4">
					<label>Country of Origin</label>
                  <div class="with-icon">
                     <span class="la-user lar color-light"></span>
                     <input type="text" name="country_of_origin" class="form-control  ih-medium ip-lightradius-xs b-light" placeholder="Country of Origin" >
                  </div>
               </div>
					<div class="form-group col-sm-4">
					<label>International Employee</label>
                  <div class="with-icon">
                     <span class="la la-restroom color-light"></span>
                     <select name="international_employee" class="form-control ih-medium ip-lightradius-xs b-light">
                        <option selected="">Select International Employee</option>
                        <option>Yes</option>
                        <option>No</option>
                     </select>
                  </div>
               </div>
					<div class="form-group col-sm-4">
					<label>Physically challenged</label>
                  <div class="with-icon">
                     <span class="la la-restroom color-light"></span>
                     <select name="physically_challenged" class="form-control ih-medium ip-lightradius-xs b-light">
                        <option selected="">Select Physically challenged</option>
                        <option>Yes</option>
                        <option>No</option>
                     </select>
                  </div>
               </div>
					<div class="form-group col-sm-4">
					<label>Is Director</label>
                  <div class="with-icon">
                     <span class="la la-restroom color-light"></span>
                     <select name="is_director" class="form-control ih-medium ip-lightradius-xs b-light">
                        <option selected="">Select Is Director</option>
                        <option>Yes</option>
                        <option>No</option>
                     </select>
                  </div>
               </div>
               <div class="form-group col-sm-4">
					<label>Local Address</label>*
                  <div class="with-icon">
                     <span class="la la-envelope color-light"></span>
                     <input type="text" name="local_address" class="form-control  ih-medium ip-lightradius-xs b-light" placeholder="Local Address" required>
                  </div>
               </div>
               <div class="form-group col-sm-4">
					<label>Permanent Address</label>*
                  <div class="with-icon">
                     <span class="la la-user-circle color-light"></span>
                     <input type="text" name="permanent_address" class="form-control  ih-medium ip-lightradius-xs b-light" id="" placeholder="Permanent address" required>
                  </div>
               </div>
				
               <div class="form-group col-sm-4">
					<label>Profile Image</label>
                  <div class="with-icon">
                     <!--<span class="la-user lar color-light"></span>-->
                     <input type="file" name="image" class="form-control  ih-medium ip-lightradius-xs b-light">
                  </div>
               </div>

			<div class="form-group col-sm-12">
               <h3>Employee Details</h3>
			   </div>

			    <div class="form-group col-sm-4">
				 <label>Department</label>*
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
					<label>Designation</label>*
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
					<label>Date of joining</label>*
                  <div class="with-icon">
                     <span class="la la-money-bill-wave color-light"></span>
                     <input type="date" name="date_of_joining" class="form-control  ih-medium ip-lightradius-xs b-light" id="" placeholder="Date of joining" required>
                  </div>
               </div>

					<div class="form-group col-sm-4">
					<label>Confirmation Date</label>
                  <div class="with-icon">
                     <span class="la la-money-bill-wave color-light"></span>
                     <input type="date" name="confirmation_date" class="form-control  ih-medium ip-lightradius-xs b-light" id="" placeholder="Confirmation Date">
                  </div>
               </div>

					<div class="form-group col-sm-4">
					<label>Joining Status</label>
                  <div class="with-icon">
                     <span class="la-user lar color-light"></span>
                     <input type="text" name="joining_status" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="Joining Status">
                  </div>
               </div>
					<div class="form-group col-sm-4">
					<label>Probation Period</label>
                  <div class="with-icon">
                     <span class="la-user lar color-light"></span>
                     <input type="text" name="probation_period" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="Probation Period">
                  </div>
               </div>
					<div class="form-group col-sm-4">
					<label>Notice Period</label>
                  <div class="with-icon">
                     <span class="la-user lar color-light"></span>
                     <input type="text" name="notice_period" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="Notice Period">
                  </div>
               </div>
					<div class="form-group col-sm-4">
					<label>Current Company Experience</label>
                  <div class="with-icon">
                     <span class="la-user lar color-light"></span>
                     <input type="text" name="current_comp_exp" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="Current Company Experience">
                  </div>
               </div>
					<div class="form-group col-sm-4">
					<label>Previous Experience</label>
                  <div class="with-icon">
                     <span class="la-user lar color-light"></span>
                     <input type="text" name="previous_exp" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="Previous Experience">
                  </div>
               </div>
					<div class="form-group col-sm-4">
					<label>Total Experience</label>
                  <div class="with-icon">
                     <span class="la-user lar color-light"></span>
                     <input type="text" name="total_exp" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="Total Experience">
                  </div>
               </div>
               <div class="form-group col-sm-4">
					<label>Credit leaves</label>
                  <div class="with-icon">
                     <span class="la la-money-bill-wave color-light"></span>
                     <input type="number" name="credit_leaves" class="form-control  ih-medium ip-lightradius-xs b-light" id=""  placeholder="Credit leaves">
                  </div>
               </div>
              
		   
		   <div class="form-group col-sm-12">
			  <h3>Account Login</h3>
		   </div>
               <div class="form-group col-sm-4">
					<label>Email</label>*
                  <div class="with-icon">
                     <span class="la la-lock color-light"></span>
                     <input type="email" name="email" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="Email" required>
                  </div>
               </div>
               <div class="form-group col-sm-4">
					<label>Password</label>
                  <div class="with-icon">
                     <span class="la la-lock color-light"></span>
                     <input type="text" name="password" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" value="123456"  placeholder="Password">
                  </div>
               </div>
			   
		   <div class="form-group col-sm-12">
			  <h3>Leave Detail</h3>
		   </div>
				<div class="form-group col-sm-4">
				<label>Reporting Email</label>
                  <div class="with-icon">
                     <span class="la la-user-graduate color-light"></span>
                     <textarea placeholder="Reporting Email ::=> abc@abc.com , xyz@xyz.com , ..." name="reporting" id="reporting" class="form-control ih-medium ip-lightradius-xs b-light" ></textarea>
                  </div>
               </div>
			 
               <div class="form-group col-sm-4">
					<label>Opening EL</label>*
                  <div class="with-icon">
                     <span class="la la-money-bill-wave color-light"></span>
                     <input type="text" name="opening_el" class="form-control  ih-medium ip-lightradius-xs b-light" id="" placeholder="Opening EL" required>
                  </div>
               </div>
			   
			    <div class="form-group col-sm-4">
				 <label>EL</label>*
                  <div class="with-icon">
                     <span class="la la-money-bill-wave color-light"></span>
                     <input type="text" name="el" class="form-control  ih-medium ip-lightradius-xs b-light" id="" placeholder="EL" required>
                  </div>
               </div>
			   
			   <div class="form-group col-sm-4">
				<label>CL</label>*
                  <div class="with-icon">
                     <span class="la la-money-bill-wave color-light"></span>
                     <input type="text" name="cl" class="form-control  ih-medium ip-lightradius-xs b-light" id="" placeholder="CL" required>
                  </div>
               </div>
			   
			   <div class="form-group col-sm-4">
				<label>Optional</label>*
                  <div class="with-icon">
                     <span class="la la-money-bill-wave color-light"></span>
                     <input type="text" name="optional" class="form-control  ih-medium ip-lightradius-xs b-light" id="" placeholder="Optional" required>
                  </div>
               </div>
			   
			   <div class="form-group col-sm-4">
				<label>CompOff</label>*
                  <div class="with-icon">
                     <span class="la la-money-bill-wave color-light"></span>
                     <input type="text" name="compOff" class="form-control  ih-medium ip-lightradius-xs b-light" id="" placeholder="CompOff" required>
                  </div>
               </div>
               
		   <div class="form-group col-sm-12">
			  <h3>Bank Detail</h3>
		   </div>
               <div class="form-group col-sm-4">
					<label>Account Holder Name</label>*
                  <div class="with-icon">
                     <span class="la la-money-bill-wave color-light"></span>
                     <input type="text" name="account_holder_name" class="form-control  ih-medium ip-lightradius-xs b-light" id="" placeholder="Account holder name" required>
                  </div>
               </div>
               <div class="form-group col-sm-4">
					<label>Account Number</label>*
                  <div class="with-icon">
                     <span class="la la-money-check-alt color-light"></span>
                     <input type="test" name="account_number" class="form-control  ih-medium ip-lightradius-xs b-light" id="=" placeholder="Account number" required>
                  </div>
               </div>
               
			  <div class="form-group col-sm-4">
			  <label>Bank Name</label>*
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
					<label>IFSC</label>*
                  <div class="with-icon">
                     <span class="la la-money-check-alt color-light"></span>
                     <input type="text" name="bin" class="form-control  ih-medium ip-lightradius-xs b-light" id="=" placeholder="IFSC" required>
                  </div>
               </div>
					<div class="form-group col-sm-4">
					<label>MICR</label>
                  <div class="with-icon">
                     <span class="la la-money-check-alt color-light"></span>
                     <input type="text" name="micr" class="form-control  ih-medium ip-lightradius-xs b-light" id="=" placeholder="MICR">
                  </div>
               </div>
               <div class="form-group col-sm-4">
					<label>Branch Location</label>*
                  <div class="with-icon">
                     <span class="la la-money-check-alt color-light"></span>
                     <input type="text" name="branch_location" class="form-control  ih-medium ip-lightradius-xs b-light" id="=" placeholder="Branch Location" required>
                  </div>
               </div>
               <div class="form-group col-sm-4">
					<label>Tax Payer Id</label>
                  <div class="with-icon">
                     <span class="la la-money-check-alt color-light"></span>
                     <input type="text" name="tax_payer_id" class="form-control  ih-medium ip-lightradius-xs b-light" id="=" placeholder="Tax Payer Id" >
                  </div>
               </div>
			   
			      <div class="form-group col-sm-12">
			  <h3>Salary Details</h3>
		   </div>
               <div class="col-sm-4 form-group">
					<label>Gross</label>
                  <span class="color-light"></span>
                  <input type="text" name="gross" placeholder="Gross" class="form-control ih-medium ip-lightradius-xs b-light" >
               </div>
			   <div class="col-sm-4 form-group">
				<label>Variable Pay</label>
                  <span class="color-light"></span>
                  <input type="text" name="variable_pay" placeholder="Variable Pay" class="form-control ih-medium ip-lightradius-xs b-light" >
               </div>
			   <div class="col-sm-4 form-group">
				<label>Retention Bonus</label>
                  <span class="color-light"></span>
                  <input type="text" name="retention_bonus" placeholder="Retention Bonus" class="form-control ih-medium ip-lightradius-xs b-light" >
               </div>
			   <div class="col-sm-4 form-group">
				<label>Incentive</label>
                  <span class="color-light"></span>
                  <input type="text" name="incentive" placeholder="Incentive" class="form-control ih-medium ip-lightradius-xs b-light" >
               </div>
			   <div class="col-sm-4 form-group">
				<label>Net CTC</label>
                  <span class="color-light"></span>
                  <input type="text" name="net_ctc" placeholder="Net CTC" class="form-control ih-medium ip-lightradius-xs b-light" >
               </div>
			   
		   <div class="form-group col-sm-12">
			  <h3>Document</h3>
		   </div>
			    <div class="form-group col-sm-4">
                     <label>PAN NO.</label>
							<div class="with-icon">
                     <input type="text" name="PAN_no" class="form-control  ih-medium ip-lightradius-xs b-light" id="=" placeholder="PAN No">
                  </div>
               </div>
			   <div class="form-group col-sm-4">
				<label>AADHAR NO.</label>
                  <div class="with-icon">
                     <input type="text" name="AADHAR_no" class="form-control  ih-medium ip-lightradius-xs b-light" id="=" placeholder="AADHAR No">
                  </div>
               </div>
			   <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <label>ESIC No.</label>
                     <input type="text" name="ESIC" class="form-control  ih-medium ip-lightradius-xs b-light" id="=" placeholder="ESIC">
                  </div>
               </div>
			   
					<div class="form-group col-sm-4">
					<label>ESI Join Date</label>
                  <div class="with-icon">
                     <span class="la la-phone color-light"></span>
                     <input type="date" name="esi_joindate" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="ESI Join Date">
                  </div>
               </div>

					<div class="form-group col-sm-4">
				<label>Covered Members</label>
                  <div class="with-icon">
                     <span class="la la-user-graduate color-light"></span>
							<input type="number" min="0" name="covered_members" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="Covered Members">
                     </div>
               </div>

					<div class="form-group col-sm-4">
                  <div class="with-icon">
                     <label>PF No.</label>
                     <input type="text" name="PF" class="form-control  ih-medium ip-lightradius-xs b-light" id="=" placeholder="PF">
                  </div>
               </div>

					
					<div class="form-group col-sm-4">
					<label>PF Join Date</label>
                  <div class="with-icon">
                     <span class="la la-phone color-light"></span>
                     <input type="date" name="pf_joindate" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="PF Join Date">
                  </div>
               </div>

			   <div class="form-group col-sm-4">
                     <label>UAN No.</label>
							<div class="with-icon">
                     <input type="text" name="UAN_no" class="form-control  ih-medium ip-lightradius-xs b-light" id="=" placeholder="UAN No">
                  </div>
               </div>
			   
               <div class="form-group col-sm-4">
                     <label>Resume</label>
							<div class="with-icon">
                     <input type="file" name="resume" class="form-control  ih-medium ip-lightradius-xs b-light" id="" >
                  </div>
               </div>
               <div class="form-group col-sm-4">
                     <label>Id Proof</label>
							<div class="with-icon">
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

function employeeIdCheck() {
   let empid = $('#empID').val();
   let id_emp = $('#uni_empid').val();

   if(empid == 'auto_generate') {
     
      $('#uniqID2').removeClass('d-none');
      $('#id_uniq').val(id_emp);
      $('#id_uniq').prop('readonly', true);
   } else  {
      // $('#uniqID2').addClass('d-none');
      $('#id_uniq').val('');
   }
   
   if(empid == 'manual_id'){
      $('#uniqID2').removeClass('d-none');
      $('#id_uniq').prop('readonly', false);
   } 

   if(empid == '') {
      $('#uniqID2').addClass('d-none');
   }


}
  

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
