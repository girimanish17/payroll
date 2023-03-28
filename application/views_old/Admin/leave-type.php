<?php include('include/header.php'); ?>   

        <div class="contents demo-card expanded">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-main">
                            <ul class="atbd-breadcrumb nav">
                                <li class="atbd-breadcrumb__item">
                                    <a href="<?php echo base_url();?>"> Home </a>
                                    <span class="breadcrumb__seperator"> <span class="la la-angle-right"></span> </span>
                                </li>
                                <li class="atbd-breadcrumb__item">
                                    <a href="javascript:void(0)"> Leave Request </a>
                                    <span class="breadcrumb__seperator"> <span class="la la-angle-right"></span> </span>
                                </li>
                                <li class="atbd-breadcrumb__item">
                                    <span>Manage Leaves</span>
                                </li>
                            </ul>
                            <!--<div class="row align-items-center profile_complete">
                                <div class="col-auto dropdown dropdown-hover">
                                    <a class="btn-link text-dark fw-600" href="javascript:void(0)">Profile completeness
                                        <span data-feather=chevron-down></span></a>
                                    <div class="dropdown-default">
                                        <a class="dropdown-item" href="department.html"><i data-feather="menu"></i> <span>Department <i data-feather="check-circle" class="text-success"></i></span> </a>
                                        <a class="dropdown-item" href="designation.html"><i data-feather="list"></i> <span>Designation</span> <i data-feather="check-circle" class="text-success"></i></a>
                                        <a class="dropdown-item" href="role_&_Privilages.html"><i data-feather="unlock"></i> <span>Set Roles</span> <i data-feather="check-circle" class="text-success"></i></a>
                                        <a class="dropdown-item" href="shift_&_scheduling.html"><i data-feather="clock"></i> <span>Office Shifts</span> <i data-feather="check-circle" class="text-success"></i></a>
                                        <a class="dropdown-item" href="#"><i data-feather="list"></i> <span>Competencies</span> <i data-feather="check-circle" class="text-success"></i></a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#"><i data-feather="help-circle"></i> <span>Need more help?</span> </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="progress-wrap d-flex align-items-center mb-0" style="width: 120px;">
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span class="progress-percentage fw-600">60%</span>
                                    </div>
                                </div>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">

                <div id="smartwizard" class="sw-main sw-theme-arrows">
                    <ul class="nav nav-tabs step-anchor">
                        <li class="">
                            <a href="<?php echo base_url(); ?>admin/leave_request">
                                <div class="d-flex justify-content-between border-0 radius-xl">
                                    <div class="application-task d-flex align-items-center">
                                        <div class="application-task-icon wh-50 mr-15 bg-primary content-center">
                                            <i class="fas fa-edit text-white font-size-20"></i>
                                        </div>
                                        <div class="application-task-content">
                                            <h5>Manage Leaves</h5>
                                            <span class="text-light fs-13 mt-1 text-capitalize"> Set up Leave</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="active">
                            <a href="<?php echo base_url(); ?>admin/leave-type">
                                <div class="d-flex justify-content-between border-0 radius-xl">
                                    <div class="application-task d-flex align-items-center">
                                        <div class="application-task-icon wh-50 mr-15 bg-secondary content-center">
                                            <i class="fas fa-tasks text-white font-size-20"></i>
                                        </div>
                                        <div class="application-task-content">
                                            <h5>Leave Type</h5>
                                            <span class="text-light fs-13 mt-1 text-capitalize">Add Leave Type</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="">
                            <a href="<?php echo base_url(); ?>admin/leave-calendar">
                                <div class="d-flex justify-content-between border-0 radius-xl">
                                    <div class="application-task d-flex align-items-center">
                                        <div class="application-task-icon wh-50 mr-15 bg-success  content-center">
                                            <i class="fa fa-calendar-alt text-white font-size-20"></i>
                                        </div>
                                        <div class="application-task-content">
                                            <h5>Calendar</h5>
                                            <span class="text-light fs-13 mt-1 text-capitalize">Leave Calendar</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-7">
                        <div class="card">

                            <div class="userDatatable adv-table-table global-shadow border-0 bg-white w-100 adv-table">
                                <div class="table-responsive">
                                    <div class="card-header border-bottom">
                                        <h5 class=" color-dark fw-600">List All Leave Type</h5>
                                    </div>
									<?php echo $this->session->flashdata('msg');
								   if(isset($_SESSION['msg'])){
									unset($_SESSION['msg']);
									}
								  ?>
                                    <div class="card-body">
                                        <div id="filter-form-container"></div>
                                        <table class="table mb-0 table-borderless adv-table" id="tblUser" data-sorting="true" data-filter-container="#filter-form-container" data-paging-current="1" data-paging-position="right" data-paging-size="10">
                                            <thead>
                                                <tr class="userDatatable-header">
                                                    <th> <span class="userDatatable-title">Leave Type</span> </th>
                                                    <th> <span class="userDatatable-title">Days/Year</span> </th>
                                                    <th> <span class="userDatatable-title">Requires Approval</span> </th>
                                                    <th class="text-right"> <span class="userDatatable-title">Action</span> </th>
                                                </tr>
                                            </thead>
                                            <tbody>
											<?php if($leave_type){
												   foreach($leave_type as $key => $value){
											?>
                                                <tr>
                                                    <td>
                                                        <div class="userDatatable-inline-title">
                                                            <h6><?php echo $value['name'];?></h6>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="userDatatable-inline-title">
                                                                <h6><?php echo $value['days_per_year'];?></h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-inline-title">
                                                            <h6><span <?php echo $value['req_approval']=='Yes'? "class='atbd-tag tag-success tag-transparented'":"class='atbd-tag tag-danger tag-transparented'";?>><?php echo $value['req_approval'];?></span></h6>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                                            <li>
                                                                <a href="#" class="edit">
                                                                    <span data-feather="edit" data-toggle="modal" data-target="#add_new<?php echo $key+1; ?>"></span></a>
                                                            </li>
                                                            <li>
                                                                <a onclick="return confirm('Are you sure want to delete this leave type?')" href="<?php echo base_url('Admin/Leave/delete_leave_type/'. $value['id']);?>" class="remove">
                                                                    <span data-feather="trash-2"></span></a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
				<!-- Modal -->
				<div class="modal fade md" id="add_new<?php echo $key+1; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-sm" role="document">
						<div class="modal-content" id="ajax_view_modal">
							<div class="modal-header">
								<h5 class="modal-title">Edit Leave Type Information
									<span class="d-block fs-12 text-muted">We need below required information to update this record.</span></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
							</div>
							<div class="modal-body">
								<form method="post" action="<?php echo base_url('Admin/Leave/edit_leave_type/'. $value['id']);?>" enctype="multipart/form-data">
									<div class="form-group">
										<label for="Goal" class="il-gray fs-14 fw-500 align-center">Leave Type<span class="text-danger">*</span></label>
										<div class="with-icon">
											<span class="la la-user color-light"></span>
											<input type="text" class="form-control  ih-medium ip-lightradius-xs b-light" name="name" id="Goal" placeholder="Annual" value="<?php echo $value['name']; ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="Goal" class="il-gray fs-14 fw-500 align-center">Days per year<span class="text-danger">*</span></label>
										<div class="with-icon">
											<span class="la la-calendar color-light"></span>
											<input type="text" class="form-control  ih-medium ip-lightradius-xs b-light" id="Goal" name="days_per_year" value="<?php echo $value['days_per_year']; ?>" placeholder="10">
										</div>
									</div>
									<div class="form-group">
										<label for="exampleFormControlSelect2" class="il-gray fs-14 fw-500 align-center">Requires Approval<span class="text-danger">*</span></label>
										<select class="form-control px-15" id="countryOption" name="req_approval">
										<option value="Yes" <?php if($value['req_approval']=='Yes'){ echo "selected";}?>>Yes</option>
										<option value="No" <?php if($value['req_approval']=='No'){ echo "selected";}?>>No</option> 
									</select>
									</div> 
									<div class="layout-button mt-25">
										<!--<button type="button" class="btn btn-primary btn-default btn-squared px-30">save</button>-->
										<input type="submit" class="btn btn-primary btn-default btn-squared px-30" value="save">
									</div>

								</form>
							</div>
						</div>
					</div>
				</div>
											<?php } } ?>
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-5 col-lg-4">
                        <div class="card border">
                            <div class="card-header border-bottom">
                                <h5>Add New Leave Type</h5>
                            </div>
							
                            <div class="card-body">
                                <form method="post" action="<?php echo base_url('Admin/Leave/add_leave_type');?>" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="Goal" class="il-gray fs-14 fw-500 align-center">Leave Type<span class="text-danger">*</span></label>
                                        <div class="with-icon">
                                            <span class="la la-user color-light"></span>
                                            <input type="text" class="form-control  ih-medium ip-lightradius-xs b-light" id="Goal" name="name" value="<?php echo set_value('name');?>" placeholder="Leave Type" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Goal" class="il-gray fs-14 fw-500 align-center">Days per year<span class="text-danger">*</span></label>
                                        <div class="with-icon">
                                            <span class="la la-calendar color-light"></span>
                                            <input type="text" class="form-control  ih-medium ip-lightradius-xs b-light" id="Goal" name="days_per_year" value="<?php echo set_value('days_per_year');?>" placeholder="Days per year" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Goal" class="il-gray fs-14 fw-500 align-center">Requires Approval<span class="text-danger">*</span></label>
                                        <select class="form-control px-15" id="exampleFormControlSelect1" name="req_approval" required>
                                            <option ></option>
                                             <option value="Yes" value="<?php if(set_value('req_approval')=='Yes'){ echo "selected";}?>">Yes</option>
                                            <option value="No" value="<?php if(set_value('req_approval')=='No'){ echo "selected";}?>">No</option> 
                                        </select>
                                    </div>
                                    <div class="layout-button mt-25">
                                        <!--<button type="button" class="btn btn-primary btn-default btn-squared px-30">save</button>-->
										<input type="submit" class="btn btn-primary btn-default btn-squared px-30" value="save">
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        
    

    <?php include('include/footer.php'); ?>  
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