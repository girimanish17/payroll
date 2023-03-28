<?php include('include/header.php'); ?>  
<div class="contents demo-card expanded">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-4">
            <div class="breadcrumb-main">
               <ul class="atbd-breadcrumb nav">
                  <li class="atbd-breadcrumb__item">
                     <a href="<?php echo base_url();?>"> Home </a>
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
				$company = $this->common_model->GetSingleData('companies',array('company_id'=>$this->session->userdata('comp_id')));
				
              ?>
            <div id="eMsg"></div>
            <h3>Profile Detail of Username : <?php echo $employees['username']; ?></h3>
            <div class="form-row">
				<div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la-user lar color-light"></span>
                     <input type="text" disabled value="<?php echo $employees['comp_id']." [".$company['name']."]"; ?>" name="comp_id" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" >
                  </div>
               </div>
			   <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la-user lar color-light"></span>
                     <input type="text" disabled value="<?php echo $employees['emp_id']; ?>" name="emp_id" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary">
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
                     <span class="la la-calendar-o"></span>
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
<?php include('include/footer.php'); ?> 
<script type="text/javascript">
   function addProfile(){
  // alert('hi');
   $.ajax({
            url: "<?php echo base_url(); ?>employee/addProfileForm",
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
			   
             window.location.reload();
			//$('#eMsg').html(res.msg);
             } else {
              $('#eMsg').html(res.msg);
              return false;
             }
        }
    });
   return false;  
}  

</script>