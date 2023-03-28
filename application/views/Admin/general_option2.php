<?php include('include/header.php'); ?>  

<style>
    .checkinform {
        padding: 50px;
    background: #ffffff;
    box-shadow: rgb(100 100 111 / 20%) 0px 7px 29px 0px;
    border-radius: 10px;
}

.checkinform h2:before {
    content: '';
    position: absolute;
    bottom: 30px;
    width: 100%;
    height: 1px;
    background: #f1f2f6;
    left: 0;
    right: 0;
    margin: auto;
}

.clock-time2{
    display:none;
}
.clock-time{
    display:none;
}
.checkinform h2 {
    position: relative;
}


div#date-div {
    display: block;
    width: 100%;
    height: 2.625rem;
    padding: 0.375rem 1.2rem;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    border: 1px solid #f1f2f6;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    -webkit-box-shadow: 0 0;
    box-shadow: 0 0;
 
}


</style>

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
                                    <a href="attendance.html"> Attendance </a>
                                    <span class="breadcrumb__seperator"> <span class="la la-angle-right"></span> </span>
                                </li>
                                <li class="atbd-breadcrumb__item">
                                    <span>Manual Attendance </span>
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
                            <a href="<?php echo base_url() ?>admin/attendance">
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
                        <li class="active">
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
                        <li class="">
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
                        <li class="">
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
                        </li>
                    </ul>
                </div>
            </div>




<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="checkinform">
                <h2 class="pb-5 text-center"><i class="fa fa-clock"></i> Today's Attendance</h2>
                <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="currenttime">Current Time</label>
                                <div id="date-div"></div>
                                </div>
                                <div class="form-group col-md-6">
                                <label for="inputPassword4">IP Address</label>
                                <input type="text" class="form-control" id="" placeholder="192.168.168.11">
                                </div>
                            </div>
                            <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputAddress">Working From</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="Office, Home etc">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputAddress2">Notes Regarding Same</label>
                                <input type="textarea" class="form-control" id="inputAddress2" placeholder="Note to HR Executive">
                            </div> 

                            </div>
                


                            <div class="form-row d-flex justify-content-center pt-3" style="gap:15px;">
                                 
                                    <p>    <span class="clock-time">
                                            <strong>Clock In</strong>: 09:49 AM<br>
                                        </span>
                                    </p>
                                    <p>
                                    <span class="clock-time2">
                                            <strong>Clock Out</strong>: 09:49 AM<br>
                                        </span>
                                    </p>
                                 </div>



                            <div class="form-row d-flex justify-content-center pt-3" style="gap:15px;">
                                 
                            <button type="submit" class="btn btn-success">Check in Time</button>
                            <button type="submit" class="btn btn-danger">Check Out Time</button>
                            </div>
</form>
            </div>
        </div>
    </div>
</div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 mb-30">
                        <div class="card mt-30">

                            <div class="userDatatable adv-table-table global-shadow border-0 bg-white w-100 adv-table">
                                <div class="table-responsive">
                                    <div class="card-header border-bottom">
                                        <h5 class=" color-dark fw-600">View Attendance</h5>
                                        <div class="card-extra">
                                            <button class="btn btn-primary btn-sm" role="button" data-target="#add_attendance" data-toggle="modal"> <i class="la la-plus"></i>Add New Attendance </button>
                                        </div>
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
                                                    <th> <span class="userDatatable-title">Employee</span> </th>
                                                    <th> <span class="userDatatable-title">Date</span> </th>
                                                    <!--<th> <span class="userDatatable-title">Status</span> </th>-->
                                                    <th> <span class="userDatatable-title">Clock IN</span> </th>
                                                    <th data-type="html" data-name='position'> <span class="userDatatable-title">Clock OUT</span> </th>
                                                    <th> <span class="userDatatable-title">Late</span> </th>
                                                    <th data-type="html" data-name='status'> <span class="userDatatable-title">Early Leaving</span> </th>
                                                    <th> <span class="userDatatable-title float-right">Total Work</span> </th>
                                                </tr>
                                            </thead>
                                            <tbody>
											<?php if($emp_attendance){ foreach($emp_attendance as $key => $value1){?>
											<?php $users = $this->common_model->GetSingleData('users',array('user_id'=>$value1['user_id']));
											$dt = $value1['attendance_date'];
											$in = str_split($value1['in_time'],5);
											$out = str_split($value1['out_time'],5);
											$t1 =  $dt." ".$in[0].":00";
											$t2 =  $dt." ".$out[0].":00";
											 $to_time = strtotime($t1);
											$from_time = strtotime($t2);
											 $minutes = round(abs($to_time - $from_time) / 60,2). " minute";
											
											 $hours = intdiv($minutes, 60).'hr'. ($minutes % 60).'m';
											//echo round(2* ($to_time-$from_time)/(3600))/2;
											?>
                                                <tr>
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
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="userDatatable-inline-title">
                                                                <h6> <?=$value1['attendance_date']?></h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <!--<td>
                                                        <div class="userDatatable-content">
                                                            <span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">Holiday</span>
                                                        </div>
                                                    </td>-->
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            <?=$value1['in_time']?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            <?=$value1['out_time']?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            00:00
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            00:00
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content text-center pl-4">
                                                            <?php echo $hours;?>
                                                        </div>
                                                    </td>
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
     
    <div class="modal fade new-member" id="add_attendance" role="dialog" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content  radius-xl">
                <div class="modal-header">
                    <h6 class="modal-title fw-500" id="staticBackdropLabel">Add Attendance Information
                        <span class="d-block fs-12 text-muted">We need below required information to add this record.</span>
                    </h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span data-feather="x"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="new-member-modal">
                        <form method="post" action="<?php echo base_url('Admin/Attendence/add_manual_attendance');?>" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="form-group col-md-12 mb-2">
                                    <label class="il-gray fs-14 fw-500 align-center">Employee <span class="text-danger">*</span></label>
                                    <div class="mb-25 select-style2">
                                        <div class="atbd-select ">
                                            <select name="employee" id="select-alerts2" class="form-control ">
											<?php if($employee){ foreach($employee as $value){?>
                                                <option value="<?php echo $value['user_id'];?>"><?php echo $value['first_name']." ".$value['last_name'];?></option>
                                            <?php }} ?>  
                                            </select>

                                        </div>

                                    </div>
                                </div>
                                <div class="form-group col-md-12 form-group-calender">
                                    <label class="il-gray fs-14 fw-500 align-center">Attendance Date <span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <input type="text" name="attendance_date" class="form-control  ih-medium ip-gray radius-xs b-light" id="datepicker8" placeholder="Attendance Date">
                                        <a href="#"><span data-feather="calendar"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="shift_name">In Time <span class="text-danger">*</span></label>
                                        <div class="input-container icon-right position-relative w-100 color-light">
                                            <span class="input-icon icon-right"><span data-feather="clock"></span></span>
                                            <input class="form-control ih-medium ip-light radius-xs b-light px-15 color-light timepicker" id="input_starttime" placeholder="In Time" name="in_time" type="text" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="shift_name">Out Time <span class="text-danger">*</span></label>
                                        <div class="input-container icon-right position-relative w-100 color-light">
                                            <span class="input-icon icon-right"><span data-feather="clock"></span></span>
                                            <input class="form-control ih-medium ip-light radius-xs b-light px-15 color-light timepicker" placeholder="Out Time" name="out_time" type="text" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="button-group d-flex pt-25">
                                <button type="submit" class="btn btn-primary btn-default btn-squared text-capitalize">Save</button>
                                <button class="btn btn-light btn-default btn-squared fw-400 text-capitalize b-light color-light">cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>

   <?php //include('include/header.php'); ?>  
<?php include('include/footer.php'); ?>  
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>
 <script src="<?php echo base_url();?>assets/theme_assets/js/bootstrap-material-datetimepicker.js"></script>
<script>
jQuery(document).ready(function($) {
    $('#tblUser').DataTable({
    "bPaginate": true,
    "bLengthChange": false,
    "bFilter": true,
    "bInfo": false,
    "bAutoWidth": false });
} );


        $('.timepicker').bootstrapMaterialDatePicker({
            date: false,
            shortTime: true,
            format: 'HH:mm A',
            twelvehour: true,
            lang: 'en'
        });
   
</script>
<style>
        .dtp {
            z-index: 9999 !important;
        }
        
        .dtp-buttons {
            display: flex;
            justify-content: flex-end;
        }
    </style>



<script>

const dateDiv = document.getElementById('date-div');

function myDateFunction() {
  const now = new Date();
  const nowStr = now.toLocaleString('en-US');
  dateDiv.innerHTML = nowStr;
}
setInterval(myDateFunction, 1000);

    </script>

<script>
    $('.btn-success').click(function(e){
        e.preventDefault();
        $('.clock-time').show();
    });
    $('.btn-danger').click(function(e){
        e.preventDefault();
        $('.clock-time2').show();
    });
   


</script>    