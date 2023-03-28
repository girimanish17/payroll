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
                                    <span>Manage Compoff Leavesss</span>
                                </li>
                            </ul>
                           
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
                            <a href="<?php echo base_url(); ?>admin/compoff_leave_request">
                                <div class="d-flex justify-content-between border-0 radius-xl">
                                    <div class="application-task d-flex align-items-center">
                                        <div class="application-task-icon wh-50 mr-15 bg-primary content-center">
                                            <i class="fas fa-edit text-white font-size-20"></i>
                                        </div>
                                        <div class="application-task-content">
                                            <h5>Manage Compoff Leaves</h5>
                                            <span class="text-light fs-13 mt-1 text-capitalize"> Set up Leave</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="">
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
                    <div class="col-xxl-3 col-lg-3 col-md-3 mb-25">
                        <div class="feature-cards5 d-flex justify-content-between border-info radius-xl bg-white p-25">
                            <div class="application-task d-flex w-100 justify-content-between align-items-center">
                                <div class="application-task-content">
                                    <h4><?php echo count($emp_leaves);?></h4>
                                    <span class="text-light fs-18 mt-1 text-capitalize">Total Leave</span>
                                </div>
                                <div class="application-task-icon wh-60 bg-info text-white content-center">
                                    <span data-feather="log-out"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-3 col-md-3 mb-25">
                        <div class="feature-cards5 d-flex justify-content-between border-success radius-xl bg-white p-25">
                            <div class="application-task d-flex w-100 justify-content-between align-items-center">
                                <div class="application-task-content">
                                    <h4><?php echo $approved_leaves;?></h4>
                                    <span class="text-light fs-18 mt-1 text-capitalize">Approved</span>
                                </div>
                                <div class="application-task-icon wh-60 bg-success text-white content-center">
                                    <span class="la la-clipboard-check fs-24"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-3 col-md-3 mb-25">
                        <div class="feature-cards5 d-flex justify-content-between border-secondary radius-xl bg-white p-25">
                            <div class="application-task d-flex w-100 justify-content-between align-items-center">
                                <div class="application-task-content">
                                    <h3 class="fs-24"><?php echo $rejected_leaves;?></h3>
                                    <span class="text-light fs-18 mt-1 text-capitalize">Rejected</span>
                                </div>
                                <div class="application-task-icon wh-60 bg-secondary text-white content-center">
                                    <span class="la la-calendar-times fs-24"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-3 col-md-3 mb-25">
                        <div class="feature-cards5 d-flex justify-content-between border-warning radius-xl bg-white p-25">
                            <div class="application-task d-flex w-100 justify-content-between align-items-center">
                                <div class="application-task-content">
                                    <h3 class="fs-24"><?php echo $pending_leaves;?></h3>
                                    <span class="text-light fs-18 mt-1 text-capitalize">Pending</span>
                                </div>
                                <div class="application-task-icon wh-60 bg-warning text-white content-center">
                                    <span class="la la-history fs-24"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 mb-30">
                        <div class="card mt-30">

                            <div class="userDatatable adv-table-table global-shadow border-0 bg-white w-100 adv-table">
                                <div class="table-responsive">
                                    <div class="card-header border-bottom">
                                        <h5 class=" color-dark fw-600">List All Leave</h5>
                                        <div class="card-extra">
                                           <!-- <button class="btn btn-primary btn-sm" role="button" data-target="#add_Account" data-toggle="modal"> <i class="la la-plus"></i>Add New Account </button>-->
                                        </div>
                                    </div>
									<?php echo $this->session->flashdata('msg');
										if(isset($_SESSION['msg'])){
										unset($_SESSION['msg']);
										}
									?>
                                    <div class="card-body">
                                        <div id="filter-form-container"></div>
                                        <table class="table mb-0 table-borderless adv-table" data-sorting="true" data-filter-container="#filter-form-container" data-paging-current="1" data-paging-position="right" data-paging-size="10" id="tblUser">
                                            <thead>
                                                <tr class="userDatatable-header">
                                                    <th> <span class="userDatatable-title">Employee</span> </th>
                                                    <th> <span class="userDatatable-title">Leave Type</span> </th>
                                                    <th> <span class="userDatatable-title">Leave Duration</span> </th>
                                                    <th> <span class="userDatatable-title">Days</span> </th>
                                                    <th> <span class="userDatatable-title">Applied On</span> </th>
                                                    <th> <span class="userDatatable-title">Status</span> </th>
													<th> <span class="userDatatable-title">Action</span> </th>
                                                </tr>
                                            </thead>
                                            <tbody>
											<?php if($emp_leaves){
													foreach($emp_leaves as $value){
														$employee = $this->common_model->GetSingleData('users',array('user_type'=>1,'emp_id'=>$value['emp_id']));
												?>
                                                <tr>
                                                    <td>
                                                        <div class="userDatatable-inline-title">
                                                            <h6><?php echo $employee['first_name']." ".$employee['last_name']; ?></h6>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="userDatatable-inline-title">
                                                                <h6><?php echo $value['leave_type']; ?></h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-inline-title">
                                                            <h6><?php echo date('d M Y',strtotime($value['from_date'])); ?><?php echo $value['to_date']!='0000-00-00' ?", ".date('d M Y',strtotime($value['to_date'])):""; ?></h6>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-inline-title">
                                                            <h6><?php echo $value['half_days']?"Half Day":$value['selected_days']." Days";?> </h6>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-inline-title">
                                                            <h6><?php echo date('d M Y',strtotime($value['created_date'])); ?> </h6>
                                                        </div>
                                                    </td>
                                                    <td class="userDatatable-inline-title">
													<?php if($value['status']=='Pending'){ ?>
                                                       <h6><span class="atbd-tag tag-warning tag-transparented">Pending</span></h6>
													<?php }elseif($value['status']=='Approved'){ ?>
														<h6><span class="atbd-tag tag-success tag-transparented">Approved</span></h6>
													<?php }elseif($value['status']=='Rejected'){?>
														 <h6><span class="atbd-tag tag-danger tag-transparented">Rejected</span></h6>
													<?php } ?>
                                                    </td>
													<?php if($value['leave_type']!='compoff'){ ?>
														<td class="userDatatable-inline-title">
														<?php if($value['status']=='Pending'){ ?>
														   <a href="<?php echo base_url() ?>admin/leave_approval_status/<?php echo $value['id']; ?>/1" onclick="return confirm('Are you sure want to approve this leave?')"><h6><span class="atbd-tag tag-success tag-transparented">Approve</span></h6></a>
														   <a href="<?php echo base_url() ?>admin/leave_approval_status/<?php echo $value['id']; ?>/2" onclick="return confirm('Are you sure want to reject this leave?')"><h6><span class="atbd-tag tag-danger tag-transparented">Reject </span></h6></a>
														<?php }elseif($value['status']=='Approved'){ ?>
														   <a href="<?php echo base_url() ?>admin/leave_approval_status/<?php echo $value['id']; ?>/2" onclick="return confirm('Are you sure want to reject this leave?')"><h6><span class="atbd-tag tag-danger tag-transparented">Reject </span></h6></a>
														<?php }elseif($value['status']=='Rejected'){?>
														   <a href="<?php echo base_url() ?>admin/leave_approval_status/<?php echo $value['id']; ?>/1" onclick="return confirm('Are you sure want to approve this leave?')"><h6><span class="atbd-tag tag-success tag-transparented">Approve</span></h6></a>
														<?php } ?>
														</td>
													<?php }else{?>
														<td class="userDatatable-inline-title">
														<?php if($value['status']=='Pending'){ ?>
														   <a href="<?php echo base_url() ?>admin/compoff_leave_approval_status/<?php echo $value['id']; ?>/1" onclick="return confirm('Are you sure want to approve this leave?')"><h6><span class="atbd-tag tag-success tag-transparented">Approve</span></h6></a>
														   <a href="<?php echo base_url() ?>admin/compoff_leave_approval_status/<?php echo $value['id']; ?>/2" onclick="return confirm('Are you sure want to reject this leave?')"><h6><span class="atbd-tag tag-danger tag-transparented">Reject </span></h6></a>
														<?php }elseif($value['status']=='Approved'){ ?>
														   <a href="<?php echo base_url() ?>admin/compoff_leave_approval_status/<?php echo $value['id']; ?>/2" onclick="return confirm('Are you sure want to reject this leave?')"><h6><span class="atbd-tag tag-danger tag-transparented">Reject </span></h6></a>
														<?php }elseif($value['status']=='Rejected'){?>
														   <a href="<?php echo base_url() ?>admin/compoff_leave_approval_status/<?php echo $value['id']; ?>/1" onclick="return confirm('Are you sure want to approve this leave?')"><h6><span class="atbd-tag tag-success tag-transparented">Approve</span></h6></a>
														<?php } ?>
														</td>
													<?php } ?>
                                                </tr>
												<?php } } ?>
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

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