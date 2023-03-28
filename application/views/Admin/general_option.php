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
                                    <span>General Option </span>
                                </li>
                            </ul>
                           
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 mb-30">
                        <div class="card mt-30">
                        <div class="card-header border-bottom">
                                        <h5 class=" color-dark fw-600">General Options</h5>
                                        <div class="card-extra">
                                        </div>
                        </div>
						<?php echo $this->session->flashdata('msg');
														   if(isset($_SESSION['msg'])){
															unset($_SESSION['msg']);
															}
														  ?>
                        <form action="<?php echo base_url(); ?>admin/addGeneralOptions" method="post" id="companyForm" enctype="multipart/form-data" class="companygeneral">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                            <label for="inputEmail4">System Email Address</label>
                                            <input type="email" class="form-control" name="system_email" placeholder="xyz@gmail.com" id="inputEmail4" value="<?php echo $comp_general_options['system_email'];?>">
                                            </div>
                                            <div class="form-group col-md-6">
                                            <label for="inputEmail4">Contact Email Address</label>
                                            <input type="email" class="form-control" name="contact_email" placeholder="abc@gmail.com" id="inputEmail44" value="<?php echo $comp_general_options['contact_email'];?>">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputAddress">Logo Position in Report</label>
                                            <select id="inputState" class="form-control" name="logo_position">
                                                <option value="Left" <?php if($comp_general_options['logo_position']=='Left'){ echo "selected";}?>>Left</option>
                                                <option value="Right" <?php if($comp_general_options['logo_position']=='Right'){ echo "selected";}?>>Right</option>
                                                <option value="Center" <?php if($comp_general_options['logo_position']=='Center'){ echo "selected";}?>>Center</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputAddress2">Country</label>
                                            <select id="inputState" class="form-control" name="country">
											<option>Select Country</option>
											<?php if($countries){ foreach($countries as $value){?>
                                                <option value="<?php echo $value['id'];?>" <?php if($comp_general_options['country_id']==$value['id']){ echo "selected";}?>><?php echo $value['country'];?></option>
											<?php }} ?>
                                            </select>                              
                                        </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                            <label for="inputCity">Time Zone</label>
                                            <select id="inputState" class="form-control" name="timezone">
                                                <option value="(UTC+5.30) Asia/Kolkata" <?php if($comp_general_options['timezone']=="(UTC+5.30) Asia/Kolkata"){ echo "selected";}?>>(UTC+5.30) Asia/Kolkata</option>
                                                <option value="(UTC+6.30) UK" <?php if($comp_general_options['timezone']=="(UTC+6.30) UK"){ echo "selected";}?>>(UTC+6.30) UK</option>
                                                <option value="(UTC+6.30) Australia" <?php if($comp_general_options['timezone']=="(UTC+6.30) Australia"){ echo "selected";}?>>(UTC+6.30) Australia</option>
                                            </select>  
                                        </div>
                                            <div class="form-group col-md-6">
                                            <label for="inputState">Currency</label>
                                            <select id="inputState" class="form-control" name="currency">
											<option>Select Currency</option>
											<?php if($countries){ foreach($countries as $value1){?>
                                                <option value="<?php echo $value1['id'];?>" <?php if($comp_general_options['currency_id']==$value1['id']){ echo "selected";}?>><?php echo $value1['country']." ".$value1['currency_name']." [".$value1['currency_code']."]";?></option>
                                               
											<?php }} ?>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="form-group pt-3">
                                            <div class="form-check pb-2">
                                            <input class="form-check-input" type="checkbox" value="1" id="gridCheck" name="openIdAuth" <?php if($comp_general_options['openIdAuth']==1){ echo "checked";}?>>
                                            <label class="form-check-label" for="gridCheck">
                                                Disable Open ID Authentication
                                            </label>
                                            </div>
                                            <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="1" id="gridCheck" name="mobileAccessEmp" <?php if($comp_general_options['mobileAccessEmp']==1){ echo "checked";}?>>
                                            <label class="form-check-label" for="gridCheck">
                                                Disable Mobile Access For Employees
                                            </label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary m-auto">Save</button>
                                    </form>
                        </div>
                    </div>
                </div>
            </div>
       
   <?php include('include/footer.php'); ?>

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
