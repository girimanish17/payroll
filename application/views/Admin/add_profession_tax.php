

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
          
          <form method="post" action="<?php echo base_url(); ?>admin/add_profession_tax" id="" enctype="multipart/form-data">
            
          <div id="eMsg"></div>
          <a href="<?php echo base_url(); ?>admin/profile" class="btn btn-info btn-sm" style="float:right">Back</a>
          <h3>Add Profession Tax</h3>
            <div class="form-row mt-4">
				<div class="form-group col-sm-4">
                  <div class="with-icon">
                     <label>Salary From:</label>
                     <input type="text" value="<?php if($general) {echo $general->system_email;}  ?>" name="salary_from" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="Salary From" required>
                  </div>
               </div>
               <div class="form-group col-sm-4">
                  <div class="with-icon">
                  <label>Salary Till:</label>
                  <input type="text" value="<?php if($general) {echo $general->contact_email;}  ?>" name="salary_till" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="Salary Till" required>
                  </div>
               </div>
              
               <input type="hidden" name="general_option" value="GENERAL_OPTION">

               <div class="form-group col-sm-4">
                  <div class="with-icon">
                  <label>Tax Amount:</label>
                  <input type="text" value="<?php if($general) {echo $general->contact_email;}  ?>" name="tax_amount" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="Tax Amount" required>
                  </div>
               </div>

               <div class="form-group col-sm-4">
                  <div class="">
                  <label>Deduction Month:</label>
                     <select name="deduction_month" id=""  class="form-control  ih-medium ip-lightradius-xs b-light" required>
                    <option value="">Select Month</option>
                     <option value="January" <?php  if($general->currency == 'January') { echo 'selected'; }  ?>>January</option>
                     <option value="February" <?php  if($general->currency == 'February') { echo 'selected'; }  ?>>February</option>
                     <option value="March" <?php  if($general->currency == 'March') { echo 'selected'; }  ?>>March</option>
                     <option value="April" <?php  if($general->currency == 'April') { echo 'selected'; }  ?>>April</option>
                     <option value="May" <?php  if($general->currency == 'May') { echo 'selected'; }  ?>>May</option>
                     <option value="June" <?php  if($general->currency == 'June') { echo 'selected'; }  ?>>June</option>
                     <option value="July" <?php  if($general->currency == 'July') { echo 'selected'; }  ?>>July</option>
                     <option value="August" <?php  if($general->currency == 'August') { echo 'selected'; }  ?>>August</option>
                     <option value="September" <?php  if($general->currency == 'September') { echo 'selected'; }  ?>>September</option>
                     <option value="October" <?php  if($general->currency == 'October') { echo 'selected'; }  ?>>October</option>
                     <option value="November" <?php  if($general->currency == 'November') { echo 'selected'; }  ?>>November</option>
                     <option value="December" <?php  if($general->currency == 'December') { echo 'selected'; }  ?>>December</option>
                      
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