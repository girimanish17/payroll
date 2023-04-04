

<?php include('include/header.php'); ?>  
<div class="contents demo-card expanded">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-4">
            <div class="breadcrumb-main">
               <!-- <ul class="atbd-breadcrumb nav">
                  <li class="atbd-breadcrumb__item">
                     <a href="#"> Home </a>
                     <span class="breadcrumb__seperator"> <span class="la la-angle-right"></span> </span>
                  </li>
                  <li class="atbd-breadcrumb__item">
                     <span>Profile</span>
                  </li>
               </ul> -->
            </div>
         </div>
      </div>
   </div>
</div>
<!-- general option start -->

<div class="contents demo-card expanded">
   <div class="row">
      <div class="col-sm-12">
          
          <form method="post" action="<?php echo base_url(); ?>admin/list_of_values" id="" enctype="multipart/form-data">
            
          <div id="eMsg"></div>
          <a href="<?php echo base_url(); ?>admin/profile" class="btn btn-info btn-sm" style="float:right">Back</a>
          <h3>Add List of Values</h3>
            <div class="form-row mt-4">
				<div class="form-group col-sm-4">
                  <div class="with-icon">
                     <label>Description:</label>
                     <textarea rows="4" cols="50" name="description" class="form-control  " id="inputsummary" placeholder="Add Description" required><?php if($setting) {echo $setting->company_address;}  ?></textarea>
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                  <label>Code:</label>
                  <input type="text" value="<?php if($general) {echo $general->contact_email;}  ?>" name="code" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="Add Code" required>
                  </div>
               </div>
              
               <!-- <input type="hidden" name="general_option" value="GENERAL_OPTION"> -->

                            

              <div class="form-group col-sm-12">
                  <button type="submit" class="btn btn-primary btn-sm">Submit</button>
               </div>
               
            </div>
         </form>
      </div>
   </div>
</div>
<!-- general option end -->



<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.6.4.slim.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> 
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<?php //include('include/footer.php'); ?> 
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