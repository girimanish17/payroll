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
                                        <span>Admins</span>
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
                                <h5>Admins List</h5>
                                <div class="card-extra">
                                    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#Add_NewAdmin">+ Add New Admin</button>
                                </div>
                            </div>
							<?php echo $this->session->flashdata('msg');
														   if(isset($_SESSION['msg'])){
															unset($_SESSION['msg']);
															}
														  ?>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered subscription-plans-list" id="tblUser">
                                        <thead>
                                            <tr>
                                                <th scope="col">Sr No.</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Email Id</th>
                                                <th scope="col">Created On</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php if($admin){
												foreach($admin as $key => $value){
													?>
                                            <tr>
                                                <td><?php echo $key+1; ?> </td>
                                                <td><?php echo $value['first_name']." ".$value['last_name'];?> </td>
                                                <td><?php echo $value['email'];?> </td>
                                                <td><?php echo date('d-m-Y',strtotime($value['created_at']));?> </td>
                                                <td>
                                                    <div class="atbd-button-list d-flex flex-wrap">
                                                        <button class="btn btn-icon btn-primary btn-squared" title="Edit" data-toggle="modal" data-target="#SperAdmin-Edit<?php echo $key+1; ?>"><i class="la la-edit mr-0"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
										
                                            
											 <div class="modal-basic modal fade show" id="SperAdmin-Edit<?php echo $key+1; ?>" tabindex="-1" role="dialog" aria-hidden="true">
												<div class="modal-dialog modal-md" role="document">
													<div class="modal-content modal-bg-white ">
														<div class="modal-header">
															<h6 class="modal-title">Edit Admin</h6>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span data-feather="x"></span></button>
														</div>
														<div class="modal-body">
															<div class="horizontal-form">
																<form method="post" action="<?php echo base_url('superadmin/edit_admin_user/'.$value['user_id']);?>" enctype="multipart/form-data">
																	<div class="form-group row">
																		<div class="col-sm-2 d-flex aling-items-center">
																			<label class=" col-form-label align-center">First Name:<span class="text-danger">*</span></label>
																		</div>
																		<div class="col-sm-10">
																			<input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" required placeholder="Enter First Name" name="first_name" value="<?php echo $value['first_name'];?>">
																		</div>
																	</div>
																	<div class="form-group row">
																		<div class="col-sm-2 d-flex aling-items-center">
																			<label class=" col-form-label align-center">Last Name:<span class="text-danger">*</span></label>
																		</div>
																		<div class="col-sm-10">
																			<input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" required placeholder="Enter Last Name" name="last_name" value="<?php echo $value['last_name'];?>">
																		</div>
																	</div>
																	<div class="form-group row">
																		<div class="col-sm-2 d-flex aling-items-center">
																			<label class=" col-form-label align-center">Email Id:<span class="text-danger">*</span></label>
																		</div>
																		<div class="col-sm-10">
																			<input type="email" class="form-control ih-medium ip-light radius-xs b-light px-15" required placeholder="Email id" name="email" value="<?php echo $value['email'];?>">
																		</div>
																	</div>
																	<div class="form-group row">
																		<div class="col-sm-2 d-flex aling-items-center">
																			<label class=" col-form-label align-center">Password:<span class="text-danger">*</span></label>
																		</div>
																		<div class="col-sm-10">
																			<input type="password" class="form-control ih-medium ip-light radius-xs b-light px-15" required placeholder="Password" name="password" >
																		</div>
																	</div>
																	<div class="form-group row">
																		<div class="col-sm-2 d-flex aling-items-center">
																			<label class=" col-form-label align-center">Confirm Password: <span class="text-danger">*</span></label>
																		</div>
																		<div class="col-sm-10">
																			<input type="Password" class="form-control ih-medium ip-light radius-xs b-light px-15" required placeholder="Confirm Password" name="confirm_password">
																		</div>
																	</div>
																	<div class="layout-button mt-25 d-flex justify-content-center">
																	    <input type="submit" class="btn btn-primary btn-sm btn-default btn-squared px-30" value="Update">
																		
																	</div>
																</form>
															</div>
														</div>
													</div>
												</div>
											</div>
											<?php } } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!--<nav class="atbd-page d-flex justify-content-between ">
                                    <div class="paging-option">
                                        <select name="page-number" class="page-selection form-control px-15">
                                            <option value="20">20/page</option>
                                            <option value="40">40/page</option>
                                            <option value="60">60/page</option>
                                        </select>
                                    </div>
                                    <ul class="atbd-pagination d-flex">
                                        <li class="atbd-pagination__item">
                                            <a href="#" class="atbd-pagination__link pagination-control"><span class="la la-angle-left"></span></a>
                                            <a href="#" class="atbd-pagination__link"><span class="page-number">1</span></a>
                                            <a href="#" class="atbd-pagination__link active"><span class="page-number">2</span></a>
                                            <a href="#" class="atbd-pagination__link"><span class="page-number">3</span></a>
                                            <a href="#" class="atbd-pagination__link pagination-control"><span class="page-number">...</span></a>
                                            <a href="#" class="atbd-pagination__link"><span class="page-number">12</span></a>
                                            <a href="#" class="atbd-pagination__link pagination-control"><span class="la la-angle-right"></span></a>
                                            <a href="#" class="atbd-pagination__option">
                                            </a>
                                        </li>
                                    </ul>
                                </nav>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

    <div class="modal-basic modal fade show" id="Add_NewAdmin" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content modal-bg-white ">
                <div class="modal-header">
                    <h6 class="modal-title">Add New Admin</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span data-feather="x"></span></button>
                </div>
				
                <div class="modal-body">
                    <div class="horizontal-form">
                        <form method="post" action="<?php echo base_url('superadmin/add_admin_user');?>" enctype="multipart/form-data">
                            <div class="form-group row">
                                <div class="col-sm-2 d-flex aling-items-center">
                                    <label class=" col-form-label align-center">First Name:<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" placeholder="Enter First Name" name="first_name" value="<?php echo set_value('first_name');?>" required>
                                </div>
                            </div>
							 <div class="form-group row">
                                <div class="col-sm-2 d-flex aling-items-center">
                                    <label class=" col-form-label align-center">Last Name:<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" placeholder="Enter Last Name" name="last_name" value="<?php echo set_value('last_name');?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 d-flex aling-items-center">
                                    <label class=" col-form-label align-center">Email Id:<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control ih-medium ip-light radius-xs b-light px-15" placeholder="Email id" name="email" value="<?php echo set_value('email');?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 d-flex aling-items-center">
                                    <label class=" col-form-label align-center">Password:<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control ih-medium ip-light radius-xs b-light px-15" placeholder="Password" name="password" value="<?php echo set_value('password');?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 d-flex aling-items-center">
                                    <label class=" col-form-label align-center">Confirm Password: <span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control ih-medium ip-light radius-xs b-light px-15" placeholder="Confirm Password" name="confirm_password" value="<?php echo set_value('confirm_password');?>">
                                </div>
                            </div>
                            <div class="layout-button mt-25 d-flex justify-content-center">
								<input type="submit" class="btn btn-primary btn-sm btn-default btn-squared px-30" value="Submit">
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
<?php include('include/footer.php'); ?>       