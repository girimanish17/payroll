<?php include('include/header.php'); ?>  

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
                                    <a href="<?php echo base_url(); ?>admin/attendance"> Attendance </a>
                                    <span class="breadcrumb__seperator"> <span class="la la-angle-right"></span> </span>
                                </li>
                                <li class="atbd-breadcrumb__item">
                                    <span> Monthly Report</span>
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
                            <a href="<?php echo base_url(); ?>admin/attendance">
                                <div class="d-flex justify-content-between border-0 radius-xl">
                                    <div class="application-task d-flex align-items-center">
                                        <div class="application-task-icon wh-50 mr-15 bg-primary content-center">
                                            <i class="fas fa-user-check text-white font-size-20"></i>
                                        </div>
                                        <div class="application-task-content">
                                            <h5>Attendance</h5>
                                            <span class="text-light fs-13 mt-1 text-capitalize">view Attendance</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="">
                            <a href="<?php echo base_url(); ?>admin/manual_attendance">
                                <div class="d-flex justify-content-between border-0 radius-xl">
                                    <div class="application-task d-flex align-items-center">
                                        <div class="application-task-icon wh-50 mr-15 bg-secondary content-center">
                                            <i class="fas fa-file-signature text-white font-size-20"></i>
                                        </div>
                                        <div class="application-task-content">
                                            <h5>Manual Attendance</h5>
                                            <span class="text-light fs-13 mt-1 text-capitalize">Add/Edit Attendance</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="active">
                            <a href="<?php echo base_url(); ?>admin/monthly_report">
                                <div class="d-flex justify-content-between border-0 radius-xl">
                                    <div class="application-task d-flex align-items-center">
                                        <div class="application-task-icon wh-50 mr-15 bg-success  content-center">
                                            <i class="fas fa-calendar-check text-white font-size-20"></i>
                                        </div>
                                        <div class="application-task-content">
                                            <h5>Monthly Report</h5>
                                            <span class="text-light fs-13 mt-1 text-capitalize">View Monthly Report</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!--<li class="">
                            <a href="<?php echo base_url() ?>admin/overtime_request">
                                <div class="d-flex justify-content-between border-0 radius-xl">
                                    <div class="application-task d-flex align-items-center">
                                        <div class="application-task-icon wh-50 mr-15 bg-warning content-center">
                                            <i class="fas fa-calendar-plus text-white font-size-20"></i>
                                        </div>
                                        <div class="application-task-content">
                                            <h5>Overtime Request</h5>
                                            <span class="text-light fs-13 mt-1 text-capitalize">Set up Overtime Request</span>
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
                    <div class="col-lg-12 mb-30">
                        <div class="card mt-30">

                            <div class="userDatatable adv-table-table global-shadow border-0 bg-white w-100 adv-table">
                                <div class="table-responsive">
                                    <div class="card-header border-bottom">
                                        <h5 class=" color-dark fw-600">List Monthly Report</h5>

                                    </div>

                                    <div class="card-body">
                                        <form method="post" action="<?php echo base_url('admin/monthly_report');?>" enctype="multipart/form-data">
                                            <div class="form-row">
                                                <div class="form-group col-sm-5 mb-2">
                                                    <label class="il-gray fs-14 fw-500 align-center">Employee <span class="text-danger">*</span></label>
                                                    <div class="mb-25 select-style2">
                                                        <div class="atbd-select ">
                                                            <select name="employee" id="select-alerts2" class="form-control ">
															<option >Select Employee</option>
                                                               <?php if($employee){ foreach($employee as $value){?>
                                                <option value="<?php echo $value['user_id'];?>"<?php if($employee_id == $value['user_id']){ echo "selected";}?>><?php echo $value['first_name']." ".$value['last_name'];?></option>
                                            <?php }} ?> 
                                                            </select>

                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="form-group col-sm-5 form-group-calender">
                                                    <label class="il-gray fs-14 fw-500 align-center">Select Month<span class="text-danger">*</span></label>
                                                    <div class="position-relative">
                                                        <!--<input type="text" class="form-control  ih-medium ip-gray radius-xs b-light" id="datepicker8" placeholder="Select Month">
                                                        <a href="#"><span data-feather="calendar"></span></a>-->
														<input type="month" name="monthYear" class="form-control  ih-medium ip-gray radius-xs b-light"value="<?php echo $monthYear;?>" placeholder="Select Month">
                                                    </div>
                                                </div>
                                                <div class="form-group col-sm-2 form-group-calender">
                                                    <div class="button-group d-flex mt-1 pt-25">
                                                        <button class="btn btn-primary btn-default btn-squared text-capitalize">Search</button>
                                                    </div>
                                                </div>

                                            </div>

                                        </form>
										
										<hr>
										
										
                                        <div id="filter-form-container"></div>
                                        <table id="tblUser" class="table mb-0 table-borderless adv-table">
                                            <thead>
                                                <tr class="userDatatable-header">
													<th><span class="userDatatable-title">Dates </span></th>
                                                    <th> <span class="userDatatable-title">Employee</span> </th>
                                                    <!--<th> <span class="userDatatable-title">Date</span> </th>-->
                                                    <th> <span class="userDatatable-title">Status</span> </th>
                                                    <th> <span class="userDatatable-title">Clock IN</span> </th>
                                                    <th data-type="html" data-name='position'> <span class="userDatatable-title">Clock OUT</span> </th>
                                                    <th> <span class="userDatatable-title">Working From</span> </th>
                                                    <!--<th data-type="html" data-name='status'> <span class="userDatatable-title">Early Leaving</span> </th>-->
                                                    <th> <span class="userDatatable-title float-right">Total Work</span> </th>
													<!--<th> <span class="userDatatable-title">Added By</span> </th>-->
                                                </tr>
                                            </thead>
                                            <tbody>
											
											<?php 
										
											if($monthYear && $employee_id){
			
											$query_date = $monthYear."-"."01";
											// First day of the month.
											 $b1 = date('Y-m-01', strtotime($query_date));
											// Last day of the month.
											 $e1 = date('Y-m-t', strtotime($query_date));
											
											$begin = new DateTime($b1);
											$end = new DateTime($e1);
											for ($dt = clone $begin; $dt <= $end; $dt->modify('+1 day')) {
												$dates = $dt->format("Y-m-d");
												$attendance = $this->common_model->GetSingleData('attendence',array('user_id'=>$employee_id,'attendence_date'=>$dates));
												
												$users = $this->common_model->GetSingleData('users',array('user_id'=>$employee_id));
										?>	
                                                <tr>
												 <td>
                                                        <div class="d-flex">
                                                            <div class="userDatatable-inline-title">
                                                                <h6><?=$dates?></h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="userDatatable__imgWrapper d-flex align-items-center">
                                                                <img class="profile-image rounded-circle d-block m-0 wh-38" src="<?php echo base_url('assets/images/users/'.$users['profile_img']);?>" alt="" />
                                                            </div>
                                                            <div class="userDatatable-inline-title">
                                                                <h6><?=$users['first_name']." ".$users['last_name']?></h6>
                                                                <p class="d-block mb-0">
                                                                     <?=$users['email']?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <!--<td>
                                                        <div class="d-flex">
                                                            <div class="userDatatable-inline-title">
                                                                <h6><?=$attendance['attendence_date']?></h6>
                                                            </div>
                                                        </div>
                                                    </td>-->
                                                    <td>
                                                        <div class="userDatatable-content">
														<?php if($attendance['checkIn'] && $attendance['checkOut']){?>
                                                            <span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">Present</span>
														<?php }else{?>
														<span class="bg-opacity-danger  color-danger rounded-pill userDatatable-content-status active">-</span>
														<?php } ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            <?=$attendance['checkIn']?$attendance['checkIn']:"-"?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                             <?=$attendance['checkOut']?$attendance['checkOut']:"-"?>
                                                        </div>
                                                    </td>
													
													<td>
                                                        <div class="userDatatable-content">
                                                             <?=$attendance['workingFrom']?$attendance['workingFrom']:"-"?>
                                                        </div>
                                                    </td>
                                                   
                                                    <td>
                                                        <div class="userDatatable-content text-center pl-4">
                                                            <?=$attendance['total_hour']?$attendance['total_hour']:"-"?>
                                                        </div>
                                                    </td>
													<!-- <td>
                                                        <div class="userDatatable-content text-center pl-4">
                                                            <?php if($attendance['created_by']==0){ echo "Employee";}elseif($attendance['created_by']!=0){echo "Manually";}elseif($attendance==''){ echo "-";}?>
                                                        </div>
                                                    </td>-->
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
	//"pageLength": 31,
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
