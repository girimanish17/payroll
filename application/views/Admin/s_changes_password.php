<?php include('include/header.php'); ?>
        <div class="contents demo-card expanded">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-default card-md my-4">
                            <div class="card-body">
                                <ul class="atbd-breadcrumb nav">
                                    <li class="atbd-breadcrumb__item">
                                        <a href="<?php echo base_url();?>">
                                            <span class="la la-home"></span>
                                        </a>
                                        <span class="breadcrumb__seperator">
                                            <span class="la la-slash"></span>
                                        </span>
                                    </li>
                                    <li class="atbd-breadcrumb__item">
                                        <span>Change Password</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    
                    <div class="col-xxl-9 col-lg-9 col-md-9 col-sm-8 mb-25">
                        <div class="card mb-25">
                            <div class="card-header border-bottom">
                                <h5>Change Password</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12 mb-3">
                                        <div class="Vertical-form">
                                             <form method="post" onsubmit="return changePassword()" id="superadminForm" enctype="multipart/form-data">
											 <div id="eMsg"></div>
											 <?php echo $this->session->flashdata('msg');
											   if(isset($_SESSION['msg'])){
												unset($_SESSION['msg']);
												}
											  ?>
											
                                                <div class="form-group row mb-n25">
                                                    <div class="col-md-6 mb-25">
                                                        <label class=" color-dark fs-14 fw-500 align-center">Password</label>
                                                        <div class="with-icon">
                                                            <span class="las la-lock"></span>
                                                            <input type="password" name="password" value="<?php echo set_value('password') ?>" class="form-control ih-medium ip-gray radius-xs b-light" placeholder="********************">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 mb-25">
                                                        <label class=" color-dark fs-14 fw-500 align-center">Confirm Password</label>
                                                        <div class="with-icon">
                                                            <span class="las la-lock"></span>
                                                            <input type="password" name="confirm_password"  value="<?php echo set_value('confirm_password') ?>" class="form-control ih-medium ip-gray radius-xs b-light" placeholder="********************">
                                                        </div>
                                                    </div>
												 <input type="hidden" name="id" value="<?php echo $superadmin['user_id']; ?>">
                                                </div>
                                                <div class="layout-button mt-25">
												 
                                                    <button type="submit" class="btn btn-primary btn-default btn-squared px-30">Change Password</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
     

	<script type="text/javascript">
   function changePassword(){
	   //console.log('hello'); 

   $.ajax({
            url: "<?php echo base_url(); ?>superadmin/changePasswordForm",
            type: "POST",
            data:new FormData($('#superadminForm')[0]),
            dataType:"JSON",
            async:false,
            cache:false,
            contentType:false,
            processData:false,
            success: function (res) {
            console.log(res);
             if(res.status==1){
				 //$('#eMsg').html(res.msg);
             window.location.reload();
             } else {
              $('#eMsg').html(res.msg);
              return false;
             }
        }
    });
   return false;  
}  

</script>
    <script>
        imgInp.onchange = evt => {
            const [file] = imgInp.files
            if (file) {
                blah.src = URL.createObjectURL(file)
            }
        }
    </script>
 <?php include('include/footer.php'); ?>