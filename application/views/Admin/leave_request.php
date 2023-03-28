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
                           
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">

                <div id="smartwizard" class="sw-main sw-theme-arrows">
                    <ul class="nav nav-tabs step-anchor">
                        <li class="active">
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
						<li class="">
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
                        <!--<li class="">
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
                        </li>-->
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
                                    <h4><?php echo $approved_leaves?$approved_leaves:"0";?></h4>
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
                                    <h3 class="fs-24"><?php echo $rejected_leaves?$rejected_leaves:"0";?></h3>
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
                                    <h3 class="fs-24"><?php echo $pending_leaves?$pending_leaves:"0";?></h3>
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
														$leave_type = $this->common_model->GetSingleData('leave_type',array('id' =>$value['leave_type']));
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
                                                                <h6><?php echo $leave_type['name']; ?></h6>
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
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h5>Leave Status</h5>
                                <div class="card-extra">
                                    <ul class="card-tab-links nav-tabs nav">
                                        <li>
                                            <a class="active" href="#se_device-month" data-toggle="tab" id="se_device-month-tab" role="tab" area-controls="se_device-" aria-selected="true">Month</a>
                                        </li>
                                        <li>
                                            <a href="#se_device-year" data-toggle="tab" id="se_device-year-tab" role="tab" area-controls="se_device-" aria-selected="false">Year</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
			
                            <div class="card-body">
                                <div class="tab-content">

                                    <div class="tab-pane fade active show" id="se_device-month" role="tabpanel" aria-labelledby="se_device-month-tab">
                                        <div class="device-pieChart-wrap position-relative">
                                            <div class="pie-chart-legend">
                                                <p>
                                                    <span><?php echo $total_emp_leaves_month;?></span>Total Leave
                                                </p>
                                            </div>


                                            <div>
                                                <canvas id="chartDoughnut2"></canvas>
                                            </div>


                                        </div>
                                        <div class="session-wrap">
                                            <div class="session-single">
                                                <div class="chart-label">
                                                    <span class="label-dot dot-success"></span> Approved Leave
                                                </div>
                                                <strong><?php echo $approved_leaves_month;?></strong>
                                                <sub><?php echo $approved_percent_month;?>%</sub>
                                            </div>
                                            <div class="session-single">
                                                <div class="chart-label">
                                                    <span class="label-dot dot-warning"></span> Pending Leave
                                                </div>
                                                <strong><?php echo $pending_leaves_month;?></strong>
                                                <sub><?php echo $pending_percent_month;?>%</sub>
                                            </div>
                                            <div class="session-single">
                                                <div class="chart-label">
                                                    <span class="label-dot dot-secondary"></span> Rejected Leave
                                                </div>
                                                <strong><?php echo $rejected_leaves_month;?></strong>
                                                <sub><?php echo $rejected_percent_month;?>%</sub>
                                            </div>
                                        </div>
                                    </div>
									
									<!--Chart Data start-->
									<script type="text/javascript">
										var Approved_m = '<?php echo $approved_leaves_month?>';
										var Pending_m = '<?php echo $pending_leaves_month?>';
										var Rejected_m = '<?php echo $rejected_leaves_month?>';
									</script>
									<!--Chart Data End-->
									
                                    <div class="tab-pane fade" id="se_device-year" role="tabpanel" aria-labelledby="se_device-year-tab">
                                        <div class="device-pieChart-wrap position-relative">
                                            <div class="pie-chart-legend">
                                                <p>
                                                    <span><?php echo $total_emp_leaves_year;?></span>Total Leave
                                                </p>
                                            </div>


                                            <div>
                                                <canvas id="chartDoughnut2Y"></canvas>
                                            </div>


                                        </div>
                                        <div class="session-wrap">
                                            <div class="session-single">
                                                <div class="chart-label">
                                                    <span class="label-dot dot-success"></span> Approved Leave
                                                </div>
                                                <strong><?php echo $approved_leaves_year;?></strong>
                                                <sub><?php echo $approved_percent_year;?>%</sub>
                                            </div>
                                            <div class="session-single">
                                                <div class="chart-label">
                                                    <span class="label-dot dot-info"></span>Pending Leave
                                                </div>
                                                <strong><?php echo $pending_leaves_year;?></strong>
                                                <sub><?php echo $pending_percent_year;?>%</sub>
                                            </div>
                                            <div class="session-single">
                                                <div class="chart-label">
                                                    <span class="label-dot dot-secondary"></span> Rejected Leave
                                                </div>
                                                <strong><?php echo $rejected_leaves_year;?></strong>
                                                <sub><?php echo $rejected_percent_year;?>%</sub>
                                            </div>
                                        </div>
                                    </div>
									<!--Chart Data year start-->
									<script type="text/javascript">
										var Approved = '<?php echo $approved_leaves_year?>';
										var Pending = '<?php echo $pending_leaves_year?>';
										var Rejected = '<?php echo $rejected_leaves_year?>';
									</script>
									<!--Chart Data year End-->
                                </div>
                                <!-- ends: .session-wrap -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h5>Leave Status</h5>
                                <div class="card-extra">
                                    <ul class="card-tab-links nav-tabs nav" role="tablist">
                                        <li>
                                            <a class="active" href="#rb_device-week" data-toggle="tab" id="rb_device-week-tab" role="tab" aria-selected="false">Week</a>
                                        </li>
                                        <!--<li>
                                            <a href="#rb_device-month" data-toggle="tab" id="rb_device-month-tab" role="tab" aria-selected="false">Month</a>
                                        </li>-->
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="rb_device-week" role="tabpanel" aria-labelledby="rb_device-week-tab">
									 <div class="device-pieChart-wrap position-relative">
                                            <div class="pie-chart-legend">
                                                <p>
                                                    <span><?php echo $total_emp_leaves_week;?></span>Total Leave
                                                </p>
                                            </div>


                                            <div>
                                                <canvas id="chartDoughnut3"></canvas>
                                            </div>


                                        </div>
                                        <!--<div class="revenue-pieChart-wrap">
                                            <div>
                                                <canvas id="chartDoughnut3"></canvas>
                                            </div>
                                        </div>-->
                                        <div class="session-wrap">
                                            <div class="session-single">
                                                <div class="chart-label">
                                                    <span class="label-dot dot-success"></span> Approved Leave
                                                </div>
                                                <strong><?php echo $approved_leaves_week;?></strong>
                                                <sub><?php echo $approved_percent_week;?>%</sub>
                                            </div>
                                            <div class="session-single">
                                                <div class="chart-label">
                                                    <span class="label-dot dot-warning"></span> Pending Leave
                                                </div>
                                                <strong><?php echo $pending_leaves_week;?></strong>
                                                <sub><?php echo $pending_percent_week;?>%</sub>
                                            </div>
                                            <div class="session-single">
                                                <div class="chart-label">
                                                    <span class="label-dot dot-secondary"></span> Rejected Leave
                                                </div>
                                                <strong><?php echo $rejected_leaves_week;?></strong>
                                                <sub><?php echo $rejected_percent_week;?>%</sub>
                                            </div>
                                        </div>
                                    </div>
									<!--Chart Data week start-->
									<script type="text/javascript">
										var Approved_w = '<?php echo $approved_leaves_week?>';
										var Pending_w = '<?php echo $pending_leaves_week?>';
										var Rejected_w = '<?php echo $rejected_leaves_week?>';
									</script>
									<!--Chart Data week End-->
									
									
                                    <div class="tab-pane fade" id="rb_device-month" role="tabpanel" aria-labelledby="rb_device-month-tab">
                                        <div class="revenue-pieChart-wrap">


                                            <div>
                                                <canvas id="chartDoughnut3M"></canvas>
                                            </div>


                                        </div>
                                        <div class="session-wrap">
                                            <div class="session-single">
                                                <div class="chart-label">
                                                    <span class="label-dot dot-success"></span> Approved Leave
                                                </div>
                                                <strong>12</strong>
                                                <sub>45%</sub>
                                            </div>
                                            <div class="session-single">
                                                <div class="chart-label">
                                                    <span class="label-dot dot-warning"></span> Pending Leave
                                                </div>
                                                <strong>00</strong>
                                                <sub>00%</sub>
                                            </div>
                                            <div class="session-single">
                                                <div class="chart-label">
                                                    <span class="label-dot dot-secondary"></span> Rejected Leave
                                                </div>
                                                <strong>2</strong>
                                                <sub>25%</sub>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ends: .session-wrap -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
       

    <div class="modal fade new-member" id="add_Account" role="dialog" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content  radius-xl">
                <div class="modal-header">
                    <h6 class="modal-title fw-500" id="staticBackdropLabel">Add Leave</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span data-feather="x"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="new-member-modal">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6 mb-2">
                                    <label class="il-gray fs-14 fw-500 align-center">Employee <span class="text-danger">*</span></label>
                                    <div class="with-icon">
                                        <span class="la la-user lar color-light"></span>
                                        <input type="text" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputNameIcon" placeholder="Employee">
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="il-gray fs-14 fw-500 align-center">Leave Type <span class="text-danger">*</span></label>
                                    <div class="mb-25  select-style2">
                                        <div class=" atbd-select ">
                                            <select name="select-alerts2" id="selects-alerts2" class="form-control form-control-lg ih-medium ip-lightradius-xs b-light">
                                                <option value=""></option>
                                                <option value="116" data-select2-id="42">Annual</option>
                                                <option value="117" data-select2-id="43">Sick</option>
                                                <option value="118" data-select2-id="44">Hospitalisation</option>
                                                <option value="119" data-select2-id="45">Maternity</option>
                                                <option value="120" data-select2-id="46">Paternity</option>
                                                <option value="121" data-select2-id="47">LOP</option>
                                                <option value="122" data-select2-id="48">Bereavement</option>
                                                <option value="123" data-select2-id="49">Compensatory</option>
                                                <option value="124" data-select2-id="50">Sabbatical</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 form-group-calender">
                                    <label class="il-gray fs-14 fw-500 align-center">Start Date <span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control  ih-medium ip-light radius-xs b-light px-15" id="datepicker8" placeholder="01/10/2021">
                                        <a href="#"><span data-feather="calendar"></span></a>
                                    </div>
                                </div>
                                <div class="col-md-6 form-group-calender">
                                    <label class="il-gray fs-14 fw-500 align-center">End Date <span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control  ih-medium ip-light radius-xs b-light px-15" id="datepicker" placeholder="01/10/2021">
                                        <a href="#"><span data-feather="calendar"></span></a>
                                    </div>
                                </div>
                                <div class="form-group-inline mt-4 col-md-8">
                                    <label class="il-gray fs-14 fw-500 align-center">Leave Attachment</label>
                                    <div class="atbd-tag-wrap">
                                        <div class="atbd-upload">
                                            <div class="atbd-upload__button">
                                                <a href="javascript:void(0)" class="btn btn-lg btn-outline-lighten btn-upload" onclick="$('#upload-1').click()"> <span data-feather="upload"></span> Click to Upload</a>
                                                <input type="file" name="upload-1" class="upload-one" id="upload-1">
                                                <small>Upload files only: pdf,gif,png,jpg,jpeg</small>
                                            </div>
                                            <div class="atbd-upload__file">
                                                <ul>

                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group col-md-4 ">
                                    <div class="embadden-spin-control py-4 d-flex align-items-center">
                                        <div class="custom-control custom-switch switch-primary switch-md">
                                            <input type="checkbox" class="custom-control-input" id="switch-spin">
                                            <label class="custom-control-label" for="switch-spin"></label>
                                        </div>
                                        <span><strong>Half Day</strong></span>
                                    </div>
                                </div>
                                <div class="col-md-12 border-bottom my-2">

                                </div>

                                <div class="form-group col-md-12">
                                    <label class="il-gray fs-14 fw-500 align-center">Remarks<span class="text-danger">*</span></label>
                                    <textarea class="form-control  ih-medium ip-lightradius-xs b-light" rows="2"></textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="il-gray fs-14 fw-500 align-center">Leave Reason<span class="text-danger">*</span></label>
                                    <textarea class="form-control  ih-medium ip-lightradius-xs b-light" rows="2"></textarea>
                                </div>
                            </div>
                            <div class="button-group d-flex pt-25">
                                <button class="btn btn-primary btn-default btn-squared text-capitalize">Save</button>
                                <button class="btn btn-light btn-default btn-squared fw-400 text-capitalize b-light color-light">cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer"></div>
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