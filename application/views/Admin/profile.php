
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
            <div class="form-row">
				
				<div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la-user lar color-light"></span>
                     <input type="text" value="<?php echo $company['name']; ?>" name="company_name" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="Company Name">
                  </div>
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
                     <input type="text" value="<?php echo $employees['phone']; ?>" name="phone" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="Phone Number">
                  </div>
               </div>
			   
			   <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-envelope color-light"></span>
                     <input type="email" readonly  value="<?php echo $employees['email']; ?>" name="email" class="form-control  ih-medium ip-lightradius-xs b-light" placeholder="Email">
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
         <form method="post" action="<?php echo base_url(); ?>admin/profile" id="companySettingForm" enctype="multipart/form-data">
             
            <div id="eMsg"></div>
            <h3>Company Settings</h3>
            <div class="form-row">
				
				<div class="form-group col-sm-4">
                  <div class="with-icon">
                     <input type="text" value="" name="company_name" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="Company Name">
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <textarea rows="4" cols="50" name="company_address" class="form-control  " id="inputsummary" placeholder="Company Address"></textarea>
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="">
                     <select name="state_ids[]" id="statesSelect"  class="form-control  ih-medium ip-lightradius-xs b-light " multiple >
                     <?php foreach($states as $state) {
                         ?>   
                     <option value="<?php echo $state['state_id']; ?>"><?php echo $state['state_name']; ?></option>
                       <?php }  ?>
                     </select>
                  </div>
               </div>
               <input type="hidden" name="company_setting" value="COMPUTER_SETTING">
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <select name="" id="time_zone"  class="form-control  ih-medium ip-lightradius-xs b-light" >
                        <option value="">Choose a Time Zone</option>
                     </select>
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <input type="text" value="" name="pf_no" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="PF Number">
                  </div>
               </div>

               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <input type="text" value="" name="tan_no" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="TAN Number">
                  </div>
               </div>

               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <input type="text" value="" name="pan_no" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="PAN Number">
                  </div>
               </div>

               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <input type="text" value="" name="esi_no" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="ESI Number">
                  </div>
               </div>

               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <input type="text" value="" name="lin_no" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="LIN Number">
                  </div>
               </div>

               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <input type="text" value="" name="gst_no" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="GST Number">
                  </div>
               </div>

               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <input type="text" value="" name="registration_certificate_no" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="Registration Certificate Number">
                  </div>
               </div>

               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <input type="text" value="" name="twitter_handle" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="Twitter Handle">
                  </div>
               </div>
               
             
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <!--<span class="la-user lar color-light"></span>-->
                     <input type="file" name="company_logo">
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.slim.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<?php //include('include/footer.php'); ?> 
<script type="text/javascript">

$(document).ready(function() {
    $('#statesSelect').select2();
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