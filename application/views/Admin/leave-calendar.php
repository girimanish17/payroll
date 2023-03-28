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
                                    <a href="javascript:void(0)"> Leave Request </a>
                                    <span class="breadcrumb__seperator"> <span class="la la-angle-right"></span> </span>
                                </li>
                                <li class="atbd-breadcrumb__item">
                                    <span>Manage Leaves</span>
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
                        <li class="active">
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
                <div class="row calendar-grid justify-content-center">
                    <div class="col-xxl-3 col-xl-5 col-md-6 col-sm-8">
                        <div class="atbd-calendar-left">
                            <button class="btn btn-secondary btn-lg btn-create-event" data-toggle="modal" data-target="#c-event-modal">
                                <span data-feather="plus"></span>Create New Event</button>
                            <div class="card card-md mb-4">
                                <div class="card-body px-10">
                                    <div class="date-picker">
                                        <div class="date-picker__calendar"></div>
                                        <!-- ends: .date-picker__calendar -->
                                    </div>
                                </div>
                            </div>
                            <div class="card card-md mb-4">
                                <div class="card-body">
                                    <div class="draggable-events" id="draggable-events">
                                        <div class="draggable-events__top d-flex justify-content-between">
                                            <h6>My Calendars</h6>
                                            <a href="#">
                                                <span data-feather="plus"></span></a>
                                        </div>
                                        <ul class="draggable-event-list">
                                            <li class="draggable-event-list__single d-flex align-items-center" data-class="primary">
                                                <span class="badge-dot badge-primary"></span>
                                                <span class="event-text">Family Events</span>
                                            </li>
                                            <!-- ends: .draggable-event-list__single -->
                                            <li class="draggable-event-list__single d-flex align-items-center" data-class="secondary">
                                                <span class="badge-dot badge-secondary"></span>
                                                <span class="event-text">Product Launch</span>
                                            </li>
                                            <!-- ends: .draggable-event-list__single -->
                                            <li class="draggable-event-list__single d-flex align-items-center" data-class="success">
                                                <span class="badge-dot badge-success"></span>
                                                <span class="event-text">Team Meeting</span>
                                            </li>
                                            <!-- ends: .draggable-event-list__single -->
                                            <li class="draggable-event-list__single d-flex align-items-center" data-class="primary">
                                                <span class="badge-dot badge-primary"></span>
                                                <span class="event-text">UI/UX Tasks</span>
                                            </li>
                                            <!-- ends: .draggable-event-list__single -->
                                            <li class="draggable-event-list__single d-flex align-items-center" data-class="warning">
                                                <span class="badge-dot badge-warning"></span>
                                                <span class="event-text">Project Update</span>
                                            </li>
                                            <!-- ends: .draggable-event-list__single -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- ends: .card -->
                        </div>
                    </div>
                    <!-- ends: .col-lg-3 -->
                    <div class="col-xxl-9 col-xl-7">
                        <div class="card card-default card-md mb-4">
                            <div class="card-body">
                                <div id='full-calendar'></div>
                            </div>
                        </div>
                        <!-- ends: .card -->
                    </div>
                </div>
            </div>

        </div>
        
    <!-- ends: .atbd-page-content -->

    <div class="c-event-modal modal fade" id="c-event-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md c-event-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title">Create Event</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span data-feather="x"></span></button>
                </div>
                <div class="modal-body">
                    <div class="c-event-form">
                        <form action="#">
                            <div class="e-form-row d-flex">
                                <div class="e-form-row__left">
                                    <label>Title</label>
                                </div>
                                <div class="e-form-row__right">
                                    <input type="text" name="e-title" placeholder="Weekly report meeting" class="form-control form-control-md">
                                </div>
                            </div>
                            <!-- ends: .e-form-row -->
                            <div class="e-form-row d-flex">
                                <div class="e-form-row__left">
                                    <label>Event type</label>
                                </div>
                                <div class="e-form-row__right">
                                    <div class="radio-horizontal-list d-flex flex-wrap">
                                        <div class="radio-theme-default custom-radio ">
                                            <input class="radio" type="radio" name="radio-e-type" value="01" id="radio-1">
                                            <label for="radio-1">
                                                <span class="radio-text">Event</span>
                                            </label>
                                        </div>
                                        <div class="radio-theme-default custom-radio ">
                                            <input class="radio" type="radio" name="radio-e-type" value="02" id="radio-2">
                                            <label for="radio-2">
                                                <span class="radio-text">Remainder</span>
                                            </label>
                                        </div>
                                        <div class="radio-theme-default custom-radio ">
                                            <input class="radio" type="radio" name="radio-e-type" value="03" id="radio-3">
                                            <label for="radio-3">
                                                <span class="radio-text">Task</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ends: .e-form-row -->
                            <div class="e-form-row d-flex">
                                <div class="e-form-row__left">
                                    <label>Start</label>
                                </div>
                                <div class="e-form-row__right d-flex">
                                    <div class="input-container icon-left position-relative mr-2">
                                        <span class="input-icon icon-left">
                                            <span data-feather="calendar"></span></span>
                                        <input type="text" class="form-control form-control-md" name="s-date" placeholder="Select Date">
                                    </div>
                                    <div class="input-container icon-left position-relative">
                                        <span class="input-icon icon-left">
                                            <span data-feather="clock"></span></span>
                                        <input type="text" class="form-control form-control-md" name="s-time" placeholder="Select Time">
                                    </div>
                                </div>
                            </div>
                            <!-- ends: .e-form-row -->
                            <div class="e-form-row d-flex">
                                <div class="e-form-row__left">
                                    <label>End</label>
                                </div>
                                <div class="e-form-row__right d-flex">
                                    <div class="input-container icon-left position-relative mr-2">
                                        <span class="input-icon icon-left">
                                            <span data-feather="calendar"></span></span>
                                        <input type="text" class="form-control form-control-md" name="e-date" placeholder="Select Date">
                                    </div>
                                    <div class="input-container icon-left position-relative">
                                        <span class="input-icon icon-left">
                                            <span data-feather="clock"></span></span>
                                        <input type="text" class="form-control form-control-md" name="e-time" placeholder="Select Time">
                                    </div>
                                </div>
                            </div>
                            <!-- ends: .e-form-row -->
                            <div class="e-form-row d-flex">
                                <div class="e-form-row__left">
                                    <label>Description</label>
                                </div>
                                <div class="e-form-row__right">
                                    <textarea name="e-description" class="form-control form-control-md" placeholder="Add Description"></textarea>
                                </div>
                            </div>
                            <!-- ends: .e-form-row -->
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white btn-sm" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary btn-sm">Save</button>
                </div>
            </div>
        </div>
    </div>
    <!-- ends: .c-event-modal -->
    <div class="e-info-modal modal fade" id="e-info-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm e-info-dialog modal-dialog-centered" id="c-event" role="document">
            <div class="modal-content">
                <div class="modal-header e-info-header bg-primary">
                    <h6 class="modal-title e-info-title">Project Update</h6>
                    <div class="e-info-action">
                        <button class="btn-icon">
                            <span data-feather="edit"></span></button>
                        <button class="btn-icon">
                            <span data-feather="mail"></span></button>
                        <button class="btn-icon">
                            <span data-feather="trash-2"></span></button>
                        <button type="button" class="btn-icon btn-close" data-dismiss="modal" aria-label="Close">
                            <span data-feather="x"></span></button>
                    </div>
                </div>
                <div class="modal-body">
                    <ul class="e-info-list">
                        <li>
                            <span data-feather="calendar"></span>
                            <span class="list-line">
                                <span class="list-label">Date :</span>
                            <span class="list-meta"> Thursday, January 23</span>
                            </span>
                        </li>
                        <li>
                            <span data-feather="clock"></span>
                            <span class="list-line">
                                <span class="list-label">Time :</span>
                            <span class="list-meta"> 23⋅5:00 – 6:00 am</span>
                            </span>
                        </li>
                        <li>
                            <span data-feather="align-left"></span>
                            <span class="list-line">
                                <span class="list-text"> Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam consetetur sadipscing elitr sed diam</span>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

   <?php include('include/footer.php'); ?>  
