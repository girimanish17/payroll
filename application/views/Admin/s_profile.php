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
              ?>
            <div id="eMsg"></div>
            <h3>Profile Detail of Superadmin : <?php echo $superadmin['username']; ?></h3>
            <div class="form-row">
			
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la-user lar color-light"></span>
                     <input type="text" value="<?php echo $superadmin['first_name']; ?>" name="first_name" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="First Name">
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la-user lar color-light"></span>
                     <input type="text" value="<?php echo $superadmin['last_name']; ?>" name="last_name" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="Last Name">
                  </div>
               </div>
             
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-phone color-light"></span>
                     <input type="text" value="<?php echo $superadmin['phone']; ?>" name="phone" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="Phone Number">
                  </div>
               </div>
			   
			   <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-envelope color-light"></span>
                     <input type="email" readonly  value="<?php echo $superadmin['email']; ?>" name="email" class="form-control  ih-medium ip-lightradius-xs b-light" placeholder="Email">
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-restroom color-light"></span>
                     <select name="gender" class="form-control ih-medium ip-lightradius-xs b-light">
                        <option selected="">Select Gender</option>
                        <option <?php if($superadmin['gender']=='Male'){ echo "selected"; } ?> value="Male">Male</option>
                        <option <?php if($superadmin['gender']=='Female'){ echo "selected"; } ?> value="Female">Female</option>
                     </select>
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-envelope color-light"></span>
                     <input type="text" value="<?php echo $superadmin['local_address']; ?>" name="local_address" class="form-control  ih-medium ip-lightradius-xs b-light" placeholder="Local Address">
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <span class="la la-user-circle color-light"></span>
                     <input type="text" value="<?php echo $superadmin['permanent_address']; ?>" name="permanent_address" class="form-control  ih-medium ip-lightradius-xs b-light" id="" placeholder="Permanent address">
                  </div>
               </div>
              
			   
			   
			    <div class="form-group col-sm-4">
                  <div class="with-icon">
                     <!--<span class="la-user lar color-light"></span>-->
                     <input type="file" name="image">
                     <img src="<?php echo base_url(); ?>assets/images/users/<?php echo $superadmin['profile_img']; ?>" style="height: 100px;width: 100px;">
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
            url: "<?php echo base_url(); ?>superadmin/addProfileForm",
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