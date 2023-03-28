<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- inject:css-->

    <link rel="stylesheet" href="assets/vendor_assets/css/bootstrap/bootstrap.css">

    <link rel="stylesheet" href="assets/vendor_assets/css/daterangepicker.css">

    <link rel="stylesheet" href="assets/vendor_assets/css/fontawesome.css">

    <link rel="stylesheet" href="assets/vendor_assets/css/footable.standalone.min.css">

    <link rel="stylesheet" href="assets/vendor_assets/css/fullcalendar@5.2.0.css">

    <link rel="stylesheet" href="assets/vendor_assets/css/jquery-jvectormap-2.0.5.css">

    <link rel="stylesheet" href="assets/vendor_assets/css/jquery.mCustomScrollbar.min.css">

    <link rel="stylesheet" href="assets/vendor_assets/css/leaflet.css">

    <link rel="stylesheet" href="assets/vendor_assets/css/line-awesome.min.css">

    <link rel="stylesheet" href="assets/vendor_assets/css/magnific-popup.css">

    <link rel="stylesheet" href="assets/vendor_assets/css/MarkerCluster.css">

    <link rel="stylesheet" href="assets/vendor_assets/css/MarkerCluster.Default.css">

    <link rel="stylesheet" href="assets/vendor_assets/css/select2.min.css">

    <link rel="stylesheet" href="assets/vendor_assets/css/slick.css">

    <link rel="stylesheet" href="assets/vendor_assets/css/star-rating-svg.css">

    <link rel="stylesheet" href="assets/vendor_assets/css/trumbowyg.min.css">

    <link rel="stylesheet" href="assets/vendor_assets/css/wickedpicker.min.css">
    <link rel="stylesheet" href="assets/vendor_assets/css/bootstrap-material-datetimepicker.css">

    <link rel="stylesheet" href="style.css">

    <!-- endinject -->

    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.png">
</head>

<body class="layout-light side-menu">
    <div class="mobile-search"></div>

    <div class="mobile-author-actions"></div>
    <header class="header-top">
        <nav class="navbar navbar-light">
            <div class="navbar-left">
                <a href="" class="sidebar-toggle">
                    <img class="svg" src="img/svg/bars.svg" alt="img"></a>
                <a class="navbar-brand" href="javascript:void(0)"><img class="svg dark" src="img/Nimbus_Logo.jpg" alt="svg"><img class="light" src="img/Nimbus_Logo.jpg" alt="img"></a>

            </div>
            <!-- ends: navbar-left -->
            <div class="navbar-right">
                <ul class="navbar-right__menu">
                    <!-- ends: .nav-flag-select -->
                    <li class="nav-author">
                        <div class="dropdown-custom">
                            <a href="javascript:;" class="nav-item-toggle">
                                <div class="nav-author__info">
                                    <div class="author-img">
                                        <img src="img/author/2.jpg" alt="" class="rounded-circle">
                                    </div>
                                    <div>
                                        <h6>Rakesh Singh</h6>
                                        <span>HOD</span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-wrapper">

                                <div class="nav-author__options">
                                    <ul>
                                        <li>
                                            <a href="">
                                                <span data-feather="user"></span> Profile</a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <span data-feather="settings"></span> Settings</a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <span data-feather="users"></span> Activity</a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <span data-feather="bell"></span> Help</a>
                                        </li>
                                    </ul>
                                    <a href="" class="nav-author__signout">
                                        <span data-feather="log-out"></span> Sign Out</a>
                                </div>
                            </div>
                            <!-- ends: .dropdown-wrapper -->
                        </div>
                    </li>
                    <!-- ends: .nav-author -->
                </ul>
                <!-- ends: .navbar-right__menu -->
                <div class="navbar-right__mobileAction d-md-none">
                    <a href="#" class="btn-search">
                        <span data-feather="search"></span>
                        <span data-feather="x"></span></a>
                    <a href="#" class="btn-author-action">
                        <span data-feather="more-vertical"></span></a>
                </div>
            </div>
            <!-- ends: .navbar-right -->
        </nav>
    </header>
    <main class="main-content">



        <aside class="sidebar admin-sidebar">
            <div class="admin-sidebar-brand">
                <p><img src="img/Nimbus_Logo.jpg" width="100" alt="Nimbus Logo"></p>
            </div>
            <div class="admin-sidebar-wrapper js-scrollbar">
                <ul class="menu">
                    <li class="menu-item ">
                        <a href="dashboard.html" class="menu-link">
                            <span class="menu-label">
                                <span class="menu-name">Home</span>
                            </span>
                            <span class="menu-icon">
                                <i class="la la-th-large"></i>
                            </span>
                        </a>
                        <!--submenu-->
                    </li>
                    <li class="menu-item ">
                        <a href="employee.html" class="menu-link">
                            <span class="menu-label">
                                <span class="menu-name">Employees</span>
                            </span>
                            <span class="menu-icon">
                                <i class="la la-id-card"></i>
                            </span>
                        </a>
                        <!--submenu-->
                    </li>
                    <li class="menu-item ">
                        <a href="#" class="open-dropdown menu-link">
                            <span class="menu-label">
                                <span class="menu-name">Core HR
                                    <span class="menu-arrow"></span>
                            </span>
                            </span>
                            <span class="menu-icon">
                                <i class="la la-user-tie"></i>
                            </span>
                        </a>
                        <!--submenu-->
                        <ul class="sub-menu">
                            <li class="menu-item ">
                                <a href="department.html" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Department</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-shirtsinbulk"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="designation.html" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Designation</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-certificate"></i>
                                    </span>
                                </a>
                                <!--submenu-->
                            </li>
                            <li class="menu-item ">
                                <a href="announcements.html" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Announcements</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-bullhorn"></i>
                                    </span>
                                </a>
                                <!--submenu-->
                            </li>
                            <li class="menu-item ">
                                <a href="policies.html" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Policies</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-list-ul"></i>
                                    </span>
                                </a>
                                <!--submenu-->
                            </li>



                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="open-dropdown menu-link">
                            <span class="menu-label">
                                <span class="menu-name">Attendance
                                    <span class="menu-arrow"></span>
                            </span>
                            </span>
                            <span class="menu-icon">
                                <i class="la la-th-list"></i>
                            </span>
                        </a>
                        <!--submenu-->
                        <ul class="sub-menu">
                            <li class="menu-item ">
                                <a href="attendance.html" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Attendance</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-user-check"></i>
                                    </span>
                                </a>
                                <!--submenu-->
                            </li>
                            <li class="menu-item ">
                                <a href="manual_attendance.html" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Manual Attendance</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-user-edit"></i>
                                    </span>
                                </a>
                                <!--submenu-->
                            </li>
                            <li class="menu-item ">
                                <a href="monthly_report.html" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Monthly Report</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-paste"></i>
                                    </span>
                                </a>
                                <!--submenu-->
                            </li>
                            <li class="menu-item ">
                                <a href="overtime_request.html" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Overtime Request</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-user-clock"></i>
                                    </span>
                                </a>
                                <!--submenu-->
                            </li>


                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="finance.html" class=" menu-link">
                            <span class="menu-label">
                                <span class="menu-name">Finance</span>
                            </span>
                            <span class="menu-icon">
                                <i class="la la-hand-holding-usd"></i>
                            </span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="#" class="open-dropdown menu-link">
                            <span class="menu-label">
                                <span class="menu-name">Performance (PMS)
                                    <span class="menu-arrow"></span>
                            </span>
                            </span>
                            <span class="menu-icon">
                                <i class="la la-chart-area"></i>
                            </span>
                        </a>
                        <!--submenu-->

                        <ul class="sub-menu">
                            <li class="menu-item ">
                                <a href="kpi_indicator.html" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">KPI (Indicator)</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-traffic-light"></i>
                                    </span>
                                </a>
                                <!--submenu-->
                            </li>
                            <li class="menu-item ">
                                <a href="kpi_appraisal.html" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">KPI (Appraisal)</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-user-shield"></i>
                                    </span>
                                </a>
                                <!--submenu-->
                            </li>
                            <li class="menu-item ">
                                <a href="competencies.html" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Competencies</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-user-cog"></i>
                                    </span>
                                </a>
                                <!--submenu-->
                            </li>
                            <li class="menu-item ">
                                <a href="track_goal.html" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Track Goal (OKRs)</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-bullseye"></i>
                                    </span>
                                </a>
                                <!--submenu-->
                            </li>
                            <li class="menu-item ">
                                <a href="goal_type.html" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Goal Type</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-poll-h"></i>
                                    </span>
                                </a>
                                <!--submenu-->
                            </li>
                            <li class="menu-item ">
                                <a href="goal_calender.html" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Goal Calender</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-calculator"></i>
                                    </span>
                                </a>
                                <!--submenu-->
                            </li>
                        </ul>
                    </li>


                    <li class="menu-item">
                        <a href="payroll.html" class=" menu-link">
                            <span class="menu-label">
                                <span class="menu-name">Payroll</span>
                            </span>
                            <span class="menu-icon">
                                <i class="la la-file-invoice-dollar"></i>
                            </span>
                        </a>
                    </li>
                    <li class="menu-item ">
                        <a href="leave_request.html" class="menu-link">
                            <span class="menu-label">
                                <span class="menu-name">Leave Request</span>
                            </span>
                            <span class="menu-icon">
                                <i class="la la-cog"></i>
                            </span>
                        </a>
                        <!--submenu-->
                    </li>
                    <li class="menu-item ">
                        <a href="recruitment.html" class="menu-link">
                            <span class="menu-label">
                                <span class="menu-name">Recruitment (ATS)</span>
                            </span>
                            <span class="menu-icon">
                                <i class="la la-portrait"></i>
                            </span>
                        </a>
                        <!--submenu-->
                    </li>
                    <li class="menu-item ">
                        <a href="settings.html" class="menu-link">
                            <span class="menu-label">
                                <span class="menu-name">Settings</span>
                            </span>
                            <span class="menu-icon">
                                <i class="la la-cog"></i>
                            </span>
                        </a>
                        <!--submenu-->
                    </li>



                </ul>
            </div>
        </aside>


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
                                    <a href="javascript:void(0)"> Performance (PMS) </a>
                                    <span class="breadcrumb__seperator"> <span class="la la-angle-right"></span> </span>
                                </li>
                                <li class="atbd-breadcrumb__item">
                                    <span>Goals Calendar</span>
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
                    <ul class="nav nav-tabs sstep step-anchor">
                        <li class="">
                            <a href="kpi_indicator.html">
                                <div class="d-flex justify-content-between border-0 radius-xl">
                                    <div class="application-task d-flex align-items-center">
                                        <div class="application-task-icon wh-40 mr-15 bg-primary content-center">
                                            <i class="fas fa-history text-white font-size-20"></i>
                                        </div>
                                        <div class="application-task-content">
                                            <h5>KPI (Indicator)</h5>
                                            <span class="text-light fs-13 mt-1 text-capitalize"> Set up Indicator </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="">
                            <a href="kpi_appraisal.html">
                                <div class="d-flex justify-content-between border-0 radius-xl">
                                    <div class="application-task d-flex align-items-center">
                                        <div class="application-task-icon wh-40 mr-15 bg-secondary content-center">
                                            <i class="fas fa-holly-berry text-white font-size-20"></i>
                                        </div>
                                        <div class="application-task-content">
                                            <h5>KPA (Appraisal)</h5>
                                            <span class="text-light fs-13 mt-1 text-capitalize">Set up Appraisal </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="">
                            <a href="track_goal.html">
                                <div class="d-flex justify-content-between border-0 radius-xl">
                                    <div class="application-task d-flex align-items-center">
                                        <div class="application-task-icon wh-40 mr-15 bg-success  content-center">
                                            <i class="fas fa-record-vinyl text-white font-size-20"></i>
                                        </div>
                                        <div class="application-task-content">
                                            <h5>Track Goals (OKRs) </h5>
                                            <span class="text-light fs-13 mt-1 text-capitalize">Set up Goals </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="active">
                            <a href="goal_calender.html">
                                <div class="d-flex justify-content-between border-0 radius-xl">
                                    <div class="application-task d-flex align-items-center">
                                        <div class="application-task-icon wh-40 mr-15 bg-dark content-center">
                                            <i class="fas fa-calendar-alt text-white font-size-20"></i>
                                        </div>
                                        <div class="application-task-content">
                                            <h5>Calendar</h5>
                                            <span class="text-light fs-13 mt-1 text-capitalize">Goals Calendar</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="">
                            <a href="competencies.html">
                                <div class="d-flex justify-content-between border-0 radius-xl">
                                    <div class="application-task d-flex align-items-center">
                                        <div class="application-task-icon wh-40 mr-15 bg-info content-center">
                                            <i class="fas fa-sliders-h text-white font-size-20"></i>
                                        </div>
                                        <div class="application-task-content">
                                            <h5>Competencies</h5>
                                            <span class="text-light fs-13 mt-1 text-capitalize">Add Competencies</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="">
                            <a href="goal_type.html">
                                <div class="d-flex justify-content-between border-0 radius-xl">
                                    <div class="application-task d-flex align-items-center">
                                        <div class="application-task-icon wh-40 mr-15 bg-danger content-center">
                                            <i class="fas fa-tasks text-white font-size-20"></i>
                                        </div>
                                        <div class="application-task-content">
                                            <h5>Goal Type</h5>
                                            <span class="text-light fs-13 mt-1 text-capitalize">Add        Goal Type</span>
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
        <footer class="footer-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="footer-copyright">
                            <p>2020 @<a href="#">Nimbus Payroll</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="footer-menu text-right">
                            <ul>
                                <li>
                                    <a href="#">About</a>
                                </li>
                                <li>
                                    <a href="#">Team</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <!-- ends: .Footer Menu -->
                    </div>
                </div>
            </div>
        </footer>
    </main>

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
    <!-- ends: .e-info-modal -->

    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDduF2tLXicDEPDMAtC6-NLOekX0A5vlnY "></script>
    <!-- inject:js-->
    <script src="assets/vendor_assets/js/jquery/jquery-3.5.1.min.js "></script>
    <script src="assets/vendor_assets/js/jquery/jquery-ui.js "></script>
    <script src="assets/theme_assets/js/nimbus.min.js "></script>

    <script src="assets/vendor_assets/js/bootstrap/popper.js "></script>
    <script src="assets/vendor_assets/js/bootstrap/bootstrap.min.js "></script>
    <script src="assets/vendor_assets/js/moment/moment.min.js "></script>
    <script src="assets/vendor_assets/js/accordion.js "></script>
    <script src="assets/vendor_assets/js/autoComplete.js "></script>
    <script src="assets/vendor_assets/js/Chart.min.js "></script>
    <script src="assets/vendor_assets/js/charts.js "></script>
    <script src="assets/vendor_assets/js/daterangepicker.js "></script>
    <script src="assets/vendor_assets/js/drawer.js "></script>
    <script src="assets/vendor_assets/js/dynamicBadge.js "></script>
    <script src="assets/vendor_assets/js/dynamicCheckbox.js "></script>
    <script src="assets/vendor_assets/js/feather.min.js "></script>
    <script src="assets/vendor_assets/js/footable.min.js "></script>
    <script src="assets/vendor_assets/js/fullcalendar@5.2.0.js "></script>
    <script src="assets/vendor_assets/js/google-chart.js "></script>
    <script src="assets/vendor_assets/js/jquery-jvectormap-2.0.5.min.js "></script>
    <script src="assets/vendor_assets/js/jquery-jvectormap-world-mill-en.js "></script>
    <script src="assets/vendor_assets/js/jquery.countdown.min.js "></script>
    <script src="assets/vendor_assets/js/jquery.filterizr.min.js "></script>
    <script src="assets/vendor_assets/js/jquery.magnific-popup.min.js "></script>
    <script src="assets/vendor_assets/js/jquery.mCustomScrollbar.min.js "></script>
    <script src="assets/vendor_assets/js/jquery.peity.min.js "></script>
    <script src="assets/vendor_assets/js/jquery.star-rating-svg.min.js "></script>
    <script src="assets/vendor_assets/js/leaflet.js "></script>
    <script src="assets/vendor_assets/js/leaflet.markercluster.js "></script>
    <script src="assets/vendor_assets/js/loader.js "></script>
    <script src="assets/vendor_assets/js/message.js "></script>
    <script src="assets/vendor_assets/js/moment.js "></script>
    <script src="assets/vendor_assets/js/muuri.min.js "></script>
    <script src="assets/vendor_assets/js/notification.js "></script>
    <script src="assets/vendor_assets/js/popover.js "></script>
    <script src="assets/vendor_assets/js/select2.full.min.js "></script>
    <script src="assets/vendor_assets/js/slick.min.js "></script>
    <script src="assets/vendor_assets/js/trumbowyg.base64.js "></script>
    <script src="assets/vendor_assets/js/trumbowyg.min.js "></script>
    <script src="assets/vendor_assets/js/wickedpicker.min.js "></script>
    <script src="assets/theme_assets/js/drag-drop.js "></script>
    <script src="assets/theme_assets/js/footable.js "></script>
    <script src="assets/theme_assets/js/full-calendar.js "></script>
    <script src="assets/theme_assets/js/googlemap-init.js "></script>
    <script src="assets/theme_assets/js/icon-loader.js "></script>
    <script src="assets/theme_assets/js/jvectormap-init.js "></script>
    <script src="assets/theme_assets/js/leaflet-init.js "></script>
    <script src="assets/theme_assets/js/main.js "></script>
    <script src="assets/theme_assets/js/syntax.js "></script>



    <!-- endinject-->
    <style>
        .ui-datepicker {
            z-index: 99 !important;
        }
    </style>
</body>

</html>