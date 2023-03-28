<?php include('include/header.php'); ?>  
<style>
    .companygeneral{
        padding:40px;
    }
</style>
<div class="contents demo-card expanded">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-main">
                            <ul class="atbd-breadcrumb nav">
                                <li class="atbd-breadcrumb__item">
                                    <a href="<?php echo base_url(); ?>"> Home </a>
                                    <span class="breadcrumb__seperator"> <span class="la la-angle-right"></span> </span>
                                </li>
                                <li class="atbd-breadcrumb__item">
                                    <span>Password Options</span>
                                </li>
                            </ul>
                           
                        </div>
                    </div>
                </div>
            </div>
           
           <!-- password options -->
<div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 mb-30">
                        <div class="card mt-30">
                        <div class="card-header border-bottom">
                                        <h5 class=" color-dark fw-600">Password Options</h5>
                                        <div class="card-extra">
                                        </div>
                        </div>
						<?php echo $this->session->flashdata('msg');
										if(isset($_SESSION['msg'])){
										unset($_SESSION['msg']);
										}
									?>
                        <form class="companygeneral" method="post" action="<?php echo base_url('admin/add_password_option');?>">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                            <label for="inputEmail4">Minimum Password length</label>
                                            <input type="text" name="pass_min_length" class="form-control" placeholder="10" id="" value="<?php echo $comp_password_option['pass_min_length'];?>">
                                            </div>
                                            <div class="form-group col-md-6">
                                            <label for="inputEmail4">Password Expiry Limit</label>
                                            <input type="text" name="pass_expiry_limit" class="form-control" placeholder="0" id=""value="<?php echo $comp_password_option['pass_expiry_limit'];?>">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputAddress">Expiry Reminder Days</label>
                                            <input type="text" name="pass_expiry_reminder_days" class="form-control" placeholder="7" id="" value="<?php echo $comp_password_option['pass_expiry_reminder_days'];?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputAddress2">Memory List Size</label>
                                            <input type="text" name="memory_list_size" class="form-control" placeholder="10" id="" value="<?php echo $comp_password_option['memory_list_size'];?>">
                                        </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                            <label for="inputCity">Allowed Invalid Login Attempts</label>
                                            <input type="text" name="allowed_invalid_login_attempts" class="form-control" placeholder="0" id="" value="<?php echo $comp_password_option['allowed_invalid_login_attempts'];?>">
                                        </div>
                                            <div class="form-group col-md-6">
                                            <label for="inputState">Welcome Mail Password Expiry Days</label>
                                            <input type="text" name="welcome_mail_pass_expiry_days" class="form-control" placeholder="4" id="" value="<?php echo $comp_password_option['welcome_mail_pass_expiry_days'];?>">
                                            </div>
                                        </div>
                                        <!--<div class="form-group pt-3">
                                            <div class="form-check pb-2">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                               Focus user to change password on password expiry
                                            </label>
                                            </div>
                                        </div>-->
                                        <button type="submit" class="btn btn-primary m-auto">Save</button>
                                    </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- pasword option ends -->
       
   <?php include('include/footer.php'); ?>
   <!--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>
 <script src="<?php echo base_url();?>assets/theme_assets/js/bootstrap-material-datetimepicker.js"></script>-->
 <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
 <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
<script>
jQuery(document).ready(function($) {
    $('#tblUser').DataTable({
    "bPaginate": true,
    "bLengthChange": false,
    "bFilter": true,
    "bInfo": false,
    "bAutoWidth": false,
	 dom: 'Bfrtip',
 buttons: [
 'copyHtml5',
 'excelHtml5',
 'csvHtml5',
 'pdfHtml5'
 ]
	});
} );
   
        imgInp.onchange = evt => {
            const [file] = imgInp.files
            if (file) {
                blah.src = URL.createObjectURL(file)
            }
        }
    </script>
