

<?php include('include/header.php'); ?>  
<div class="contents demo-card expanded">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-4 mt-10">
            <div class="breadcrumb-main">
               <ul class="atbd-breadcrumb nav">
                  <li class="atbd-breadcrumb__item">
                     <a href="#"> Home </a>
                     <span class="breadcrumb__seperator"> <span class="la la-angle-right"></span> </span>
                  </li>
                  <li class="atbd-breadcrumb__item">
                     <span>Profile</span>
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
         <form method="post" onsubmit="return addProfile()" id="profileForm" enctype="multipart/form-data">
             <?php echo $this->session->flashdata('msg');
               if(isset($_SESSION['msg'])){
    unset($_SESSION['msg']);
}
$company = $this->common_model->GetSingleData('companies',array('admin_id'=>$employees['user_id']));
              ?>
            <div id="eMsg"></div>
            <h3>Profile Detail of Username : <?php echo $employees['username']; ?></h3>
            <div class="form-row mt-4">
				
				<div class="form-group col-sm-4">
                  <div class="with-icon">
                  <label>Company Name:</label>
                     <input type="text" value="<?php echo $company['name']; ?>" name="company_name" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="Company Name">
                  </div>
               </div>
               
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                  <label>First Name:</label>
                     
                     <input type="text" value="<?php echo $employees['first_name']; ?>" name="first_name" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="First Name">
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                  <label>Last Name:</label>
                     
                     <input type="text" value="<?php echo $employees['last_name']; ?>" name="last_name" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="Last Name">
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                  <label>Father's Name:</label>
                     <input type="text" value="<?php echo $employees['father_name']; ?>" name="father_name" class="form-control  ih-medium ip-lightradius-xs b-light" placeholder="Father name">
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                       <label>Date of Birth:</label>
                     <input type="date" value="<?php echo $employees['dob']; ?>" name="dob" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="Date of birth">
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                       <label>Phone Number:</label>
                     <input type="text" value="<?php echo $employees['phone']; ?>" name="phone" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="Phone Number">
                  </div>
               </div>
			   
			   <div class="form-group col-sm-4">
                  <div class="with-icon">
                  <label>Email:</label>
                     <input type="email" readonly  value="<?php echo $employees['email']; ?>" name="email" class="form-control  ih-medium ip-lightradius-xs b-light" placeholder="Email">
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                  <label>Gender:</label>
                     <select name="gender" class="form-control ih-medium ip-lightradius-xs b-light">
                        <option selected="">Select Gender</option>
                        <option <?php if($employees['gender']=='Male'){ echo "selected"; } ?> value="Male">Male</option>
                        <option <?php if($employees['gender']=='Female'){ echo "selected"; } ?> value="Female">Female</option>
                     </select>
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                  <label>Local Address:</label>
                     <input type="text" value="<?php echo $employees['local_address']; ?>" name="local_address" class="form-control  ih-medium ip-lightradius-xs b-light" placeholder="Local Address">
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                  <label>Permanent Address:</label>
                     <input type="text" value="<?php echo $employees['permanent_address']; ?>" name="permanent_address" class="form-control  ih-medium ip-lightradius-xs b-light" id="" placeholder="Permanent address">
                  </div>
               </div>
              
			   
			   
			    <div class="form-group col-sm-4">
                  <div class="with-icon">
                  <label>Profile Image:</label>
                     <input type="file" name="image">
                     <img src="<?php echo base_url(); ?>assets/images/users/<?php echo $employees['profile_img']; ?>" style="height: 100px;width: 100px;">
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

<!-- company -->
<div class="contents demo-card expanded">
   <div class="row">
      <div class="col-sm-12">
         <form method="post" action="<?php echo base_url(); ?>admin/profile" id="" enctype="multipart/form-data">
             
            <div id="eMsg"></div>
            <h3>Company Settings</h3>
            <div class="form-row mt-4">
				
				<div class="form-group col-sm-4">
                  <div class="with-icon">
                  <label>Company Name:</label>
                     <input type="text" value="<?php if($setting) {echo $setting->company_name;}  ?>" name="company_name" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="Company Name">
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                  <label>Company Address:</label>
                     <textarea rows="4" cols="50" name="company_address" class="form-control  " id="inputsummary" placeholder="Company Address"><?php if($setting) {echo $setting->company_address;}  ?></textarea>
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="">

                  <label>Select State:</label>
                     <select name="states" id="statesSelect"  class="form-control  ih-medium ip-lightradius-xs b-light " multiple="multiple">
                     <?php if($states) { foreach($states as $state) {
                         ?>   
                     <option value="<?php echo $state['state_id']; ?>" <?php  if($setting->states == $state['state_id']) { echo 'selected'; }  ?>><?php echo $state['state_name']; ?></option>

                       <?php } }  ?>
                     </select>
                  </div>
               </div>
               <input type="hidden" name="company_setting" value="COMPUTER_SETTING">
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                  <label>Time Zone:</label>
                     <select name="" id="time_zone"  class="form-control  ih-medium ip-lightradius-xs b-light" >
                        <option value="">Choose a Time Zone</option>
                     </select>
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                  <label>PF Number:</label>
                     <input type="text" value="<?php if($setting) {echo $setting->pf_no;}  ?>" name="pf_no" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="PF Number">
                  </div>
               </div>

               <div class="form-group col-sm-4">
                  <div class="with-icon">
                  <label>TAN Number:</label>
                     <input type="text" value="<?php if($setting) {echo $setting->tan_no;}  ?>" name="tan_no" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="TAN Number">
                  </div>
               </div>

               <div class="form-group col-sm-4">
                  <div class="with-icon">
                  <label>PAN Number:</label>
                     <input type="text" value="<?php if($setting) {echo $setting->pan_no;}  ?>" name="pan_no" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="PAN Number">
                  </div>
               </div>

               <div class="form-group col-sm-4">
                  <div class="with-icon">
                  <label>ESI Number:</label>
                     <input type="text" value="<?php if($setting) {echo $setting->esi_no;}  ?>" name="esi_no" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="ESI Number">
                  </div>
               </div>

               <div class="form-group col-sm-4">
                  <div class="with-icon">
                  <label>LIN Number:</label>
                     <input type="text" value="<?php if($setting) {echo $setting->lin_no;}  ?>" name="lin_no" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="LIN Number">
                  </div>
               </div>

               <div class="form-group col-sm-4">
                  <div class="with-icon">
                  <label>GST Number:</label>
                     <input type="text" value="<?php if($setting) {echo $setting->gst_no;}  ?>" name="gst_no" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="GST Number">
                  </div>
               </div>

               <div class="form-group col-sm-4">
                  <div class="with-icon">
                  <label>Registration Certificate Number:</label>
                     <input type="text" value="<?php if($setting) {echo $setting->registration_certificate_no;}  ?>" name="registration_certificate_no" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="Registration Certificate Number">
                  </div>
               </div>

               <div class="form-group col-sm-4">
                  <div class="with-icon">
                  <label>Twitter Handle:</label>
                     <input type="text" value="<?php if($setting) {echo $setting->twitter_handle;}  ?>" name="twitter_handle" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="Twitter Handle">
                  </div>
               </div>
               
             
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <!--<span class="la-user lar color-light"></span>-->
                     <label>Company Logo:</label>
                     <input type="file" name="company_logo">
                     <img src="<?php echo base_url(); ?>assets/images/company_settings/<?php if($setting) {echo $setting->company_logo;}  ?>" style="height: 100px;width: 100px;">
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
<!-- company end -->
<!-- general option start -->

<div class="contents demo-card expanded">
   <div class="row">
      <div class="col-sm-12">
         <form method="post" action="<?php echo base_url(); ?>admin/profile" id="companySettingForm" enctype="multipart/form-data">
             
            <div id="eMsg"></div>
            <h3>General Option</h3>
            <div class="form-row mt-4">
				
				<div class="form-group col-sm-4">
                  <div class="with-icon">
                     <label>System Email Address:</label>
                     <input type="email" value="<?php if($general) {echo $general->system_email;}  ?>" name="system_email" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="System Email Address">
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                  <label>Contact Email Address:</label>
                  <input type="email" value="<?php if($general) {echo $general->contact_email;}  ?>" name="contact_email" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="Contact Email Address">
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="">
                  <label>Logo Position in reports:</label>
                     <select name="logo_position" id="statesSelectss"  class="form-control  ih-medium ip-lightradius-xs b-light ">
                  
                     <option value="left" <?php  if($general->logo_position == 'left') { echo 'selected'; }  ?>>Left</option>
                     <option value="right"  <?php  if($general->logo_position == 'right') { echo 'selected'; }  ?>>Right</option>
                     <option value="center"  <?php  if($general->logo_position == 'center') { echo 'selected'; }  ?>>Center</option>
                      
                     </select>
                  </div>
               </div>

               <div class="form-group col-sm-4">
                  <div class="">
                  <label>Country:</label>
                     <select name="country" id=""  class="form-control  ih-medium ip-lightradius-xs b-light " >
                        <option value="">Select Country</option>
                      <?php foreach ($countries as $country) {?>
                     <option value="<?php echo $country->country_id;?>" <?php  if($general->country == $country->country_id) { echo 'selected'; }  ?>><?php echo $country->country_name;?></option>
                    <?php } ?>
                     </select>
                  </div>
               </div>

               <input type="hidden" name="general_option" value="GENERAL_OPTION">
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                  <label>Time Zone:</label>
                     <select name="" id="time_zone"  class="form-control  ih-medium ip-lightradius-xs b-light" >
                        <option value="">Choose a Time Zone</option>
                     </select>
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="">
                  <label>Currency:</label>
                     <select name="currency" id=""  class="form-control  ih-medium ip-lightradius-xs b-light ">
                  
                     <option value="rupees" <?php  if($general->currency == 'rupees') { echo 'selected'; }  ?>>Indian Rupees [INR]</option>
                     <option value="dollar" <?php  if($general->currency == 'dollar') { echo 'selected'; }  ?>>US Dollar [USD]</option>
                      
                     </select>
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
<!-- general option end -->

<!-- table start -->
<div class="contents demo-card expanded">
   <div class="row">
      <div class="col-sm-12">
         
             
            <div id="eMsg"></div>
            <h3>Profession Tax Slabs</h3>
            <div class="form-row mt-0">
				

                            <div class="card-body">
                               <a href="<?php echo base_url();?>admin/add_profession_tax" class="btn btn-primary btn-sm mb-2" style="float:right">Add New</a>
                                <div class="table-responsives">
                              
                                    <table class="table  mb-0 table-basic mt-2 text-center">
                                        <thead>
                                            <tr  class="userDatatable-header">
                                            <th>Salary From</th>
                                            <th>Salary Till</th>
                                            <th>Tax Amount</th>
                                            <th>Deduction Month</th>
                                            <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php if($tax) { 
                                             foreach($tax as $row) {   
                                          ?>
                                          <tr>
                                             <td><?php echo $row->salary_from; ?></td>
                                             <td><?php echo $row->salary_till; ?></td>
                                             <td><?php echo $row->tax_amount; ?></td>
                                             <td><?php echo $row->deduction_month; ?></td>
                                             <td class="d-flex justify-content-sm-center action_btn" style="text-align:center;">
                                                <a href="<?php echo base_url()?>admin/edit_profession_tax/<?php echo $row->id; ?>" class="btn btn-sm" title="Edit"><span class="la la-edit"></span></a>
                                          
                                             <a href="<?php echo base_url()?>admin/delete_profession_tax/<?php echo $row->id; ?>" class="btn btn-sm" title="Delete"><span class="la la-trash"></span></a>
                                          
                                          </td>
                                          </tr>
                                          <?php } } ?>
                                      </tbody>
                                    </table>
                                </div>
                            </div>   
            </div>
      </div>
   </div>
</div>
<!-- table end -->

<!-- table start -->
<div class="contents demo-card expanded">
   <div class="row">
      <div class="col-sm-12">
         
             <form action="<?php echo base_url();?>admin/checked_list_of_values" method="post">
               
            
            <div id="eMsg"></div>
            <h3>List of Values</h3>
      
               <select name="list_search" class="form-control mt-2" style="width:20%;" onchange="listSearch()" id="list_name">
                  <option value="">Select List of Values</option>
                  <option value="master_super_country">Country</option>
                  <option value="master_bulletin_category">Bulletin Category</option>
                  <option value="master_empdoccategory">Emp Doc Category</option>
                  <option value="master_empstatus">Employee Status</option>
                  <option value="master_empresignationreason">Employee Registration Reason</option>
                  <option value="master_formscategory">Forms Category</option>
                  <option value="master_pfschemes">PF Scheme</option>
                  <option value="master_involuntaryreasons">In Voluntary Reasons</option>
                  <option value="master_nationality">Nationality</option>
                  <option value="master_relation">Relation</option>
                  <option value="master_religion">Religion</option>
                  <option value="master_qualification_level">Qualification Level</option>
                  <option value="master_qualification_area">Qualification Area</option>
                  <option value="master_bank">Bank</option>
                  <option value="master_bankaccount_type">Bank Account Type</option>
                  <option value="master_bloodgroup">Blood Group</option>
                  <option value="master_confirmation_reason">Confirmation Reason</option>
                  <option value="master_qualification">Qualification</option>
                  <option value="master_currency">Currency</option>
                  <option value="master_hold_salary">Hold Salary Payout Reason</option>
                  <option value="master_other_incomes">Other Incomes</option>
                  <option value="master_marrital_status">Marrital Status</option>
                  <option value="master_residential_status">Residential Status</option>
                  <option value="master_vaccination_reason">Vaccination Reason</option>
                  <option value="master_category_change_reason">Category Change Reason</option>
                  <option value="master_pf_leaving_reason">PF Leaving Reason</option>
                  <option value="master_leaving_feedback">Leaving Feedback</option>
               </select>
           
            <div class="form-row mt-0">

                            <div class="card-body">
                              
                                <div class="table-responsives">
                              
                                    <table class="table  mb-0 table-basic mt-2 text-">
                                        <thead>
                                            <tr  class="userDatatable-header">
                                            <th>Description</th>
                                            <th>Action</th>
                                            </tr>
                                        </thead>
                                        
                                          <tbody id="tableDataId" class="">
                                         
                                          </tbody>
                                       </table>
                                       <button type="submit" class="btn btn-primary">Save</button>
                                   </form>
                                </div>
                            </div>   
            </div>
      </div>
      
   </div>
</div>
<!-- table end -->

<!-- table start -->
<div class="contents demo-card expanded">
   <div class="row">
      <div class="col-sm-12">
         
             
            <div id="eMsg"></div>
            <h3>Tax Slabs</h3>
            <div class="form-row mt-0">
				

                            <div class="card-body">
                               <a href="<?php echo base_url();?>admin/list_of_values" class="btn btn-primary btn-sm mb-2" style="float:right">Add New</a>
                                <div class="table-responsives">
                              
                                    <table class="table  mb-0 table-basic mt-2 text-center">
                                        <thead>
                                            <tr  class="userDatatable-header">
                                            <th>Description</th>
                                            <th>Code</th>
                                            <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php if($listValues) { 
                                             foreach($listValues as $row) {   
                                          ?>
                                          <tr>
                                             <td><?php echo $row->description; ?></td>
                                             <td class="d-flex justify-content-sm-center action_btn" style="text-align:center;">
                                          
                                             <a href="<?php echo base_url()?>admin/delete_list_of_values/<?php echo $row->id; ?>" class="btn btn-sm" title="Delete"><span class="la la-trash"></span></a>
                                          
                                          </td>
                                          </tr>
                                          <?php } } ?>
                                      </tbody>
                                    </table>
                                </div>
                            </div>   
            </div>
      </div>
   </div>
</div>
<!-- table end -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script> -->
<!-- <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js"></script> -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> 
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<?php //include('include/footer.php'); ?> 
<script>

var selectedOptions = $('input[type="checkbox"]:checked').map(function() {
    return $(this).val();
   // alert('hiii');
}).get();

console.log(selectedOptions); // Output: ["1", "3"]

// function validateFun(id){
   
//    let ss = $('.checkId').val();
//    // var inputName = $('input[name="check_record[]"]').attr('name');
//    // var inputName = $(".checkId").attr("name");
// console.log(inputName); 
//    // alert(ss);
  
//    // console.log(ss);
// }

function listSearch() 
{
   let valueId = $('#list_name').val();
   // console.log(valueId);
   
   $.ajax({
            url : "<?php echo base_url()?>admin/list_of_values",
            method : 'POST',
            dataType : 'json',
            data : {valueId : valueId},
            success : function(response)
            {
              console.log(response);
              $('#tableDataId').html(response);
            },
        });
}
</script>
<script type="text/javascript">

$(document).ready(function() {
    $('#statesSelect').select2({
    placeholder: "Select a State"
});
});

$(document).ready(function() {
    $('.country_s').select2({
    placeholder: "Select a County"
});
});

   function addProfile(){
  // alert('hi');
   $.ajax({
            url: "<?php echo base_url(); ?>admin/addProfileForm",
            type: "POST",
            data:new FormData($('#profileForm')[0]),
            dataType:"JSON",
            async:false,
            cache:false,
            contentType:false,
            processData:false,
            success: function (res) {
				console.log(res);
             if(res.status==1){
               //swal('Profile added successfully')
			   
            // window.location.reload();
			$('#eMsg').html(res.msg);
             } else {
              $('#eMsg').html(res.msg);
              return false;
             }
        }
    });
   return false;  
}  




</script>
<style>

.contents {
    padding: 68px 15px 2px 295px;
   
}</style>