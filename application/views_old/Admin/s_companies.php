 <?php include('include/header.php'); ?>  


        <div class="contents demo-card expanded">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card my-4">
                            <div class="card-body">
                                <ul class="atbd-breadcrumb nav">
                                    <li class="atbd-breadcrumb__item">
                                        <a href="<?php echo base_url();?>"> Home </a>
                                        <span class="breadcrumb__seperator">
                                            <span class="la la-slash"></span>
                                        </span>
                                    </li>
                                    <li class="atbd-breadcrumb__item">
                                        <span>Companies</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-30">
                            <div class="card-header">
                                <h5>Companies List</h5>
                                <div class="card-extra">
                                    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#Add_NewCompany">+ Add New Company</button>
                                </div>
                            </div>
							<?php echo $this->session->flashdata('msg');
														   if(isset($_SESSION['msg'])){
															unset($_SESSION['msg']);
															}
														  ?>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-social" id="tblUser">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
												 <th scope="col">Admin</th>
                                                <th scope="col">Logo</th>
                                                <th scope="col">Company</th>
                                                <!--<th scope="col">#Login</th>-->
                                                <th scope="col">Package</th>
                                                <th scope="col">Created On</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php $i = 1;if($companies){ foreach($companies as $key => $value){
											$package = $this->common_model->GetSingleData('packages',array('id'=>$value['package_id']));
											$admins = $this->common_model->GetSingleData('users',array('user_id'=>$value['admin_id']));
											?>
                                            <tr>
                                                <td><?php echo $value['company_id'];?></td>
												<td><?php echo $admins['first_name']." ".$admins['last_name'];?></td>
                                                <td><img src="<?php echo base_url('assets/images/company/'.$value['logo']);?>" width="60"></td>
                                                <td><?php echo $value['name'];?></td>
                                                <!--<td>#0</td>-->
                                                <td><?php echo $package['name'];?> (<?php echo $value['premium'];?>) <br><a href="#" class="btn btn-primary d-inline-block text-white btn-xs" data-toggle="modal" data-target="#Change_Package<?php echo $key+1; ?>"><i class="la la-edit mr-0"></i>Change</a></td>
                                                <td><?php echo date('d M Y',strtotime($value['created_date']));?></td>
                                                <td><?php echo $value['status']=='1'?"<span class='badge badge-success rounded-pill'>Active":"<span class='badge badge-danger rounded-pill'>Inactive";?></span></td>
                                                <td>
                                                    <div class="atbd-button-list d-flex flex-wrap">
                                                        <!--<button class="btn btn-icon btn-success btn-squared" onclick="window.open('edit.html')" title="Edit"><i class="la la-edit mr-0"></i></button>-->
														<button class="btn btn-icon btn-success btn-squared" title="Edit" data-toggle="modal" data-target="#Edit_NewCompany<?php echo $i; ?>"><i class="la la-edit mr-0"></i></button>
                                                        <!--<button class="btn btn-icon btn-danger btn-squared" title="Delete" data-toggle="modal" data-target="#modal-delete"><i class="la la-trash mr-0"></i></button>-->
														 <a onclick="return confirm('Are you sure want to delete this company?');" href="<?php echo base_url(); ?>superadmin/deleteCompany/<?php echo $value['id']; ?>"><button class="btn btn-icon btn-danger btn-squared" title="Delete" data-toggle="modal" data-target="#modal-delete"><i class="la la-trash mr-0"></i></button></a>
                                            
                                                        <!--<button class="btn btn-icon btn-dark btn-squared" title="Disable" data-toggle="modal" data-target="#modal-disable<?php echo $key+1; ?>"><i class="la la-ban mr-0"></i></button>-->
														<?php if($value['status']=='0'){?>
														<a onclick="return confirm('Are you sure want to change status of this company?');" href="<?php echo base_url(); ?>superadmin/changeStatusCompany/<?php echo $value['id'];?>/1"><button class="btn btn-icon btn-danger btn-squared" title="Enable" ><i class="la la-ban mr-0"></i></button></a>
														<?php }else{?>
														<a onclick="return confirm('Are you sure want to change status of this company?');" href="<?php echo base_url(); ?>superadmin/changeStatusCompany/<?php echo $value['id'];?>/0"><button class="btn btn-icon btn-danger btn-squared" title="Disable" ><i class="la la-ban mr-0"></i></button></a>
														<?php }?>
                                                        <!--<button class="btn btn-icon btn-primary btn-squared" onclick="window.open('browse_history.html')" title="#History"><i class="la la-globe mr-0"></i></button>-->
                                                    </div>
                                                </td>
                                            </tr>
											<div class="modal-basic modal fade show" id="Change_Package<?php echo $key+1; ?>" tabindex="-1" role="dialog" aria-hidden="true">
												<div class="modal-dialog modal-md" role="document">
													<div class="modal-content modal-bg-white ">
														<div class="modal-header">
															<h6 class="modal-title">Change Package</h6>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span data-feather="x"></span></button>
														</div>
														<div class="modal-body">
															<div class="Vertical-form">
																<form action="<?php echo base_url(); ?>superadmin/changePackage" method="post" enctype="multipart/form-data">
																	<div class="form-row">
																	
																		<div class="form-group col-md-12">
																			<label>Package</label>
																			<select class="form-control px-15" name="packages" id="exampleFormControlSelect1">
																			 <option>Select Package</option>
																			  <?php foreach ($packages as $key => $val) {?>
																			<option value="<?php echo $val['id'];?>" <?php if($val['id'] == $value['package_id']){ echo "selected"; }?>><?php echo $val['name']; ?></option>
																			  <?php } ?>
																		</select>
																		</div>
																		<div class="form-group col-sm-6">
																			<label>Premium</label>
																			<select class="form-control px-15" id="countryOption" name="premium">
																			 <option>Select Premium</option>
																			<option <?php if($value['premium']=='Monthly'){ echo "selected"; } ?> value="Monthly">Monthly</option>
																			<option <?php if($value['premium']=='Annual'){ echo "selected"; } ?> value="Annual">Annual</option>     
																		</select>
																		</div>
																		<div class="form-group mb-25 col-sm-6">
																			<label>Amount</label>
																			<input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="amount" value="<?php echo $value['amount'];?>" placeholder="Enter Amount">
																		</div>
																		<div class="form-group col-sm-6 form-group-calender">
																			<label>Pay Date</label>
																			<div class="position-relative">
																				<input type="text" name="pay_date" value="<?php echo $value['pay_date'];?>"  class="form-control  ih-medium ip-light radius-xs b-light px-15" id="datepicker8" placeholder="01/10/2021">
																				<a href="#"><span data-feather="calendar"></span></a>
																			</div>
																		</div>
																		<div class="form-group col-sm-6 form-group-calender">
																			<label>Next Pay Date</label>
																			<div class="position-relative">
																				<input type="text" name="next_pay_date" value="<?php echo $value['next_pay_date'];?>" class="form-control  ih-medium ip-light radius-xs b-light px-15" id="datepicker9" placeholder="01/10/2021">
																				<a href="#"><span data-feather="calendar"></span></a>
																			</div>
																		</div>
																		<input type="hidden" name="id" value="<?php echo $value['id']?>">
																		<div class="layout-button mt-25">
																		
																			<button type="submit" class="btn btn-primary btn-sm btn-default btn-squared px-30"><i class="la la-check"></i>Update</button>
																			<button type="button" class="btn btn-secondary btn-sm btn-sm" data-dismiss="modal">Back</button>
																		</div>
																	</div>
																</form>
															</div>
														</div>
													</div>
												</div>


											</div>
											
											<div class="modal-basic modal fade show" id="Edit_NewCompany<?php echo $i; ?>" tabindex="-1" role="dialog" aria-hidden="true">
											<div class="modal-dialog modal-md" role="document">
												<div class="modal-content modal-bg-white ">
													<div class="modal-header">
														<h6 class="modal-title">Edit New Company</h6>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span data-feather="x"></span></button>
													</div>
													<div class="modal-body">
														<div class="Vertical-form">
															<form action="<?php echo base_url(); ?>superadmin/editCompanies/<?php echo $value['id']; ?>" method="post" id="companyForm2" enctype="multipart/form-data">
																<div class="form-row">
																	<div class="account-profile border-bottom form-group col-md-12 text-center pb-4">

																		<div class="ap-img mb-20 pro_img_wrapper ml-auto mr-auto d-flex align-items-center border">
																			<input id="imgInp" type="file" accept="image/*" name="image" class="d-none">
																			<label for="imgInp" class="mb-0">
																				<!-- Profile picture image-->
																				<figure class="mb-0">
																					<img class="ap-img__main" style="height:118px;width:118px;" id="blah" src="<?php echo base_url('assets/images/company/'.$value['logo']);?>" alt="profile">
																					<span class="cross" id="remove_pro_pic">
																						<span data-feather="camera"></span>
																					</span>
																				</figure>
																			   
																			</label>
																		</div>

																		<h5>
																			Company Logo. Click above to edit your upload.
																		</h5>
																		<p>
																			<small>Upload files only: gif,png,jpg,jpeg</small>
																		</p>
																	</div>
																	<div class="form-group col-md-12">
																		<label>Admin</label>
																		<select class="form-control px-15" id="countryOption" name="admin_id">
																		<option>Select Admin</option>
																		<?php if($admin){ foreach ($admin as $advalues) {	?>
																		<option value="<?php echo $advalues['user_id'];?>" <?php if($advalues['user_id']== $value['admin_id'] ){ echo 'selected';}?>><?php echo $advalues['first_name']." ".$advalues['last_name']; ?></option>
																		
																		<?php }} ?>
																	</select>
																	</div>
																	<div class="form-group col-sm-12">
																		<label> Company ID</label>
																		<input type="text" readonly value="<?php echo $value['company_id'];?>" class="form-control ih-medium ip-gray radius-xs b-light px-15">
																	</div>
																	<div class="form-group col-sm-12">
																		<label> Company Name</label>
																		<input type="text" name="name" value="<?php echo $value['name'];?>" class="form-control ih-medium ip-gray radius-xs b-light px-15"  placeholder="Enter Name">
																	</div>
																	<div class="form-group col-md-12">
																		<label>Package</label>
																		<select class="form-control px-15" id="exampleFormControlSelect1" name="packages">
																		<option>Select Package</option>
																		<?php if($packages){ foreach ($packages as $key => $value1) {	?>
																		<option value="<?php echo $value1['id'];?>" <?php if($value['package_id']== $value1['id'] ){ echo 'selected';}?>><?php echo $value1['name']; ?></option>
																		
																		<?php }} ?>
																	</select>
																	</div>
																	<div class="form-group col-sm-6">
																		<label>Premium</label>
																		<select class="form-control px-15" id="countryOption" name="premium">
																		<option>Select Premium</option>
																		<option value="Monthly" <?php if($value['premium']== 'Monthly' ){ echo 'selected';}?>>Monthly</option>
																		<option  value="Annual" <?php if($value['premium']== 'Annual' ){ echo 'selected';}?>>Annual</option>     
																	</select>
																	</div>
																	<div class="form-group mb-25 col-sm-6">
																		<label>Amount</label>
																		<input type="text" name="amount" class="form-control ih-medium ip-gray radius-xs b-light px-15" value="<?php echo $value['amount'];?>" placeholder="Enter Amount">
																	</div>
																	<div class="form-group col-sm-6 form-group-calender">
																		<label>Pay Date</label>
																		<div class="position-relative">
																		   <input type="date" name="pay_date" value="<?php echo $value['pay_date'];?>" class="form-control  ih-medium ip-light radius-xs b-light px-15" id="datepicker444" placeholder="01/10/2021">
																			
																		</div>
																	</div>
																	<div class="form-group col-sm-6 form-group-calender">
																		<label>Next Pay Date</label>
																		<div class="position-relative">
																			<input type="date" name="next_pay_date" value="<?php echo $value['next_pay_date'];?>" class="form-control  ih-medium ip-light radius-xs b-light px-15" id="datepicker999" placeholder="01/10/2021">
																			
																		</div>
																	</div>
																	<div class="layout-button mt-25">
																		<button type="submit" class="btn btn-primary btn-sm btn-default btn-squared px-30"><i class="la la-check"></i>Update</button>
																		<button type="button" class="btn btn-secondary btn-sm btn-sm" data-dismiss="modal">Back</button>
																	</div>
																</div>
															</form>
														</div>
													</div>
												</div>
											</div>


										</div>
											
										<?php $i++; } } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      
    
    

    <div class="modal-basic modal fade show" id="Add_NewCompany" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content modal-bg-white ">
                <div class="modal-header">
                    <h6 class="modal-title">Add New Company</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span data-feather="x"></span></button>
                </div>
                <div class="modal-body">
                    <div class="Vertical-form">
                        <form action="<?php echo base_url(); ?>superadmin/addCompanies" method="post" id="companyForm" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="account-profile border-bottom form-group col-md-12 text-center pb-4">

                                    <div class="ap-img mb-20 pro_img_wrapper ml-auto mr-auto d-flex align-items-center border">
                                        <input id="imgInp" type="file" accept="image/*" name="image" class="d-none">
                                        <label for="imgInp" class="mb-0">
                                            <!-- Profile picture image-->
                                            <figure class="mb-0">
                                                <img class="ap-img__main" style="height:118px;width:118px;" id="blah" src="<?php echo base_url(); ?>assets/images/demologo.png" alt="profile">
                                                <span class="cross" id="remove_pro_pic">
                                                    <span data-feather="camera"></span>
                                                </span>
                                            </figure>
                                           
                                        </label>
                                    </div>

                                    <h5>
										Company Logo. Click above to upload.
                                    </h5>
                                    <p>
                                        <small>Upload files only: gif,png,jpg,jpeg</small>
                                    </p>
                                </div>
								
								<div class="form-group col-md-12">
                                    <label>Admin</label>
                                    <select class="form-control px-15" id="countryOption" name="admin_id">
									<option>Select Admin</option>
                                    <?php if($admin){ foreach ($admin as $advalue) {	?>
                                    <option value="<?php echo $advalue['user_id'];?>"><?php echo $advalue['first_name']." ".$advalue['last_name']; ?></option>
                                    
									<?php }} ?>
                                </select>
                                </div>
								<div class="form-group col-sm-12">
                                    <label> Company Name</label>
                                    <input type="text" name="name" class="form-control ih-medium ip-gray radius-xs b-light px-15"  placeholder="Enter Name">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Package</label>
                                    <select class="form-control px-15" id="exampleFormControlSelect1" name="packages">
									<option>Select Package</option>
                                    <?php if($packages){ foreach ($packages as $key => $value) {	?>
                                    <option value="<?php echo $value['id'];?>"><?php echo $value['name']; ?></option>
                                    
									<?php }} ?>
                                </select>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Premium</label>
                                    <select class="form-control px-15" id="countryOption" name="premium">
									<option>Select Premium</option>
                                    <option value="Monthly">Monthly</option>
                                    <option  value="Annual">Annual</option>     
                                </select>
                                </div>
                                <div class="form-group mb-25 col-sm-6">
                                    <label>Amount</label>
                                    <input type="text" name="amount" class="form-control ih-medium ip-gray radius-xs b-light px-15"  placeholder="Enter Amount">
                                </div>
                                <div class="form-group col-sm-6 form-group-calender">
                                    <label>Pay Date</label>
                                    <div class="position-relative">
                                       <input type="date" name="pay_date" class="form-control  ih-medium ip-light radius-xs b-light px-15" id="datepicker44" placeholder="01/10/2021">
                                        
                                    </div>
                                </div>
                                <div class="form-group col-sm-6 form-group-calender">
                                    <label>Next Pay Date</label>
                                    <div class="position-relative">
                                        <input type="date" name="next_pay_date" class="form-control  ih-medium ip-light radius-xs b-light px-15" id="datepicker99" placeholder="01/10/2021">
                                        
                                    </div>
                                </div>
                                <div class="layout-button mt-25">
                                    <button type="submit" class="btn btn-primary btn-sm btn-default btn-squared px-30"><i class="la la-check"></i>Update</button>
                                    <button type="button" class="btn btn-secondary btn-sm btn-sm" data-dismiss="modal">Back</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>    
<script>
jQuery(document).ready(function($) {
    $('#tblUser').DataTable({
    "bPaginate": true,
    "bLengthChange": false,
    "bFilter": true,
    "bInfo": false,
    "bAutoWidth": false });
} );   
</script>  

    <script>
        imgInp.onchange = evt => {
            const [file] = imgInp.files
            if (file) {
                blah.src = URL.createObjectURL(file)
            }
        }
    </script>
<style>
/*.table-social tbody tr td:not(:first-child) {
    text-align: center;
}*/
</style>

 <?php include('include/footer.php'); ?>       