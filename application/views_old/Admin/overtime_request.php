<?php include('include/header.php'); ?>  

        <div class="contents demo-card expanded">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-main">
                            <ul class="atbd-breadcrumb nav">
                                <li class="atbd-breadcrumb__item">
                                    <a href="#"> Home </a>
                                    <span class="breadcrumb__seperator"> <span class="la la-angle-right"></span> </span>
                                </li>
                                <li class="atbd-breadcrumb__item">
                                    <a href="attendance.html"> Attendance </a>
                                    <span class="breadcrumb__seperator"> <span class="la la-angle-right"></span> </span>
                                </li>
                                <li class="atbd-breadcrumb__item">
                                    <span>Overtime Request </span>
                                </li>
                            </ul>
                            <div class="row align-items-center profile_complete">
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
                            </div>
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
                        <li class="">
                            <a href="<?php echo base_url() ?>admin/monthly_report">
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
                        <li class="active">
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

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 mb-30">
                        <div class="card mt-30">

                            <div class="userDatatable adv-table-table global-shadow border-0 bg-white w-100 adv-table">
                                <div class="table-responsive">
                                    <div class="card-header border-bottom">
                                        <h5 class=" color-dark fw-600">List Overtime Request</h5>
                                        <div class="card-extra">
                                            <button class="btn btn-primary btn-sm" role="button" data-target="#add_attendance" data-toggle="modal"> <i class="la la-plus"></i>Add New Attendance </button>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <div id="filter-form-container"></div>
                                        <table class="table mb-0 table-borderless adv-table" data-sorting="true" data-filter-container="#filter-form-container" data-paging-current="1" data-paging-position="right" data-paging-size="10">
                                            <thead>
                                                <tr class="userDatatable-header">
                                                    <th> <span class="userDatatable-title">Employee</span> </th>
                                                    <th> <span class="userDatatable-title">Date</span> </th>
                                                    <th> <span class="userDatatable-title">IN Time</span> </th>
                                                    <th> <span class="userDatatable-title">Out Time</span> </th>
                                                    <th> <span class="userDatatable-title">Total Hours</span> </th>
                                                    <th> <span class="userDatatable-title">Status</span> </th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="userDatatable__imgWrapper d-flex align-items-center">
                                                                <img class="profile-image rounded-circle d-block m-0 wh-38" src="img/author/1.jpg" alt="" />
                                                            </div>
                                                            <div class="userDatatable-inline-title">
                                                                <h6>Kellie Marquot</h6>
                                                                <p class="d-block mb-0">
                                                                    kellie6543@gmail.com
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="userDatatable-inline-title">
                                                                <h6>23/04/2022</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            10:00 am
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            08:00 pm
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            09:00
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            <span class="bg-opacity-warning  color-warning rounded-pill userDatatable-content-status active">Pending</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="userDatatable__imgWrapper d-flex align-items-center">
                                                                <img class="profile-image rounded-circle d-block m-0 wh-38" src="img/author/1.jpg" alt="" />
                                                            </div>
                                                            <div class="userDatatable-inline-title">
                                                                <h6>Kellie Marquot</h6>
                                                                <p class="d-block mb-0">
                                                                    kellie6543@gmail.com
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="userDatatable-inline-title">
                                                                <h6>23/04/2022</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            10:00 am
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            08:00 pm
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            09:00
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            <span class="bg-opacity-warning  color-warning rounded-pill userDatatable-content-status active">Pending</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="userDatatable__imgWrapper d-flex align-items-center">
                                                                <img class="profile-image rounded-circle d-block m-0 wh-38" src="img/author/1.jpg" alt="" />
                                                            </div>
                                                            <div class="userDatatable-inline-title">
                                                                <h6>Kellie Marquot</h6>
                                                                <p class="d-block mb-0">
                                                                    kellie6543@gmail.com
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="userDatatable-inline-title">
                                                                <h6>23/04/2022</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            10:00 am
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            08:00 pm
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            09:00
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            <span class="bg-opacity-warning  color-warning rounded-pill userDatatable-content-status active">Pending</span>
                                                        </div>
                                                    </td>
                                                </tr>
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
                    <h6 class="modal-title fw-500" id="staticBackdropLabel">Add Overtime Request Information
                        <span class="d-block fs-12 text-muted">We need below required information to add this record.</span>
                    </h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span data-feather="x"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="new-member-modal">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-12 mb-2">
                                    <label class="il-gray fs-14 fw-500 align-center">Employee <span class="text-danger">*</span></label>
                                    <div class="mb-25 select-style2">
                                        <div class="atbd-select ">
                                            <select name="select-alerts2" id="select-alerts2" class="form-control ">
                                                <option value="7">Alok Dixit</option>
                                                <option value="7">test employee</option>
                                                <option value="7">Shubham Sathwane</option>
                                                <option value="7">FGHUYRT FGHUYRT</option>
                                                <option value="7">VBHYETR VHBTYER</option>
                                            </select>

                                        </div>

                                    </div>
                                </div>
                                <div class="form-group col-md-12 form-group-calender">
                                    <label class="il-gray fs-14 fw-500 align-center">Date <span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control  ih-medium ip-gray radius-xs b-light" readonly id="datepicker8" placeholder="23/02/2022">
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
                                            <input class="form-control ih-medium ip-light radius-xs b-light px-15 color-light timepicker" readonly id="input_starttime" placeholder="In Time" name="monday_in_time" type="text" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="shift_name">Out Time <span class="text-danger">*</span></label>
                                        <div class="input-container icon-right position-relative w-100 color-light">
                                            <span class="input-icon icon-right"><span data-feather="clock"></span></span>
                                            <input class="form-control ih-medium ip-light radius-xs b-light px-15 color-light timepicker" readonly placeholder="Out Time" name="monday_out_time" type="text" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="shift_name">Reason <span class="text-danger">*</span></label>
                                        <textarea class="form-control ih-medium ip-light radius-xs b-light px-15 color-light"></textarea>

                                    </div>
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

   <?php include('include/header.php'); ?>  
<?php include('include/footer.php'); ?>  
