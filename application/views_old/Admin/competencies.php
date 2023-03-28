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
                        <li class="">
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
                        <li class="active">
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
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class=" color-dark fw-600">KPI & KPA Competencies</h5>
                            </div>
                            <div class="card-body">
                                <div class="userDatatable projectDatatable project-table bg-white w-100 border-0">
                                    <div class="atbd-tab tab-horizontal">
                                        <ul class="nav nav-tabs vertical-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="tab-v-1-tab" data-toggle="tab" href="#Technical" role="tab" aria-controls="tab-v-1" aria-selected="true"><i class="fa fa-cogs"></i> Technical</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="tab-v-2-tab" data-toggle="tab" href="#Organizational" role="tab" aria-controls="tab-v-2" aria-selected="false"><i class="fa fa-sitemap"></i> Organizational</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">



                                            <div class="tab-pane fade show active" id="Technical" role="tabpanel" aria-labelledby="tab-v-1-tab">
                                                <div class="row">
                                                    <div class="col-md-8 col-sm-7">
                                                        <div class="card">
                                                            <div class="userDatatable adv-table-table global-shadow border-0 bg-white w-100 adv-table">
                                                                <div class="table-responsive">
                                                                    <div class="card-header border-bottom">
                                                                        <h5 class=" color-dark fw-600">List All Categories</h5>
                                                                    </div>

                                                                    <div class="card-body">
                                                                        <div id="filter-form-container"></div>
                                                                        <table class="table mb-0 table-borderless adv-table border" data-sorting="true" data-filter-container="#filter-form-container" data-paging-current="1" data-paging-position="right" data-paging-size="10">
                                                                            <thead>
                                                                                <tr class="userDatatable-header">
                                                                                    <th> <span class="userDatatable-title"><i class="la la-braille"></i> Category</span> </th>
                                                                                    <th> <span class="userDatatable-title"><i class="la la-calendar-check"></i> Created at</span> </th>
                                                                                    <th><span class="userDatatable-title"><i class="la la-podcast"></i> Action</span></th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody class=" border-top">

                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="userDatatable-inline-title pl-3">
                                                                                            <h6>Leadership</h6>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="userDatatable-inline-title pl-3">
                                                                                            <h6>22-02-2021</h6>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                                                                            <li>
                                                                                                <a href="#" class="edit" data-toggle="modal" data-target="#add_new">
                                                                                                    <span data-feather="edit"></span></a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="#" class="remove">
                                                                                                    <span data-feather="trash-2"></span></a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="userDatatable-inline-title pl-3">
                                                                                            <h6>Professional Impact</h6>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="userDatatable-inline-title pl-3">
                                                                                            <h6>12-06-2021</h6>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                                                                            <li>
                                                                                                <a href="#" class="edit">
                                                                                                    <span data-feather="edit" data-toggle="modal" data-target="#add_new"></span></a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="#" class="remove">
                                                                                                    <span data-feather="trash-2"></span></a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </td>
                                                                                </tr>

                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-5">
                                                        <div class="card border">
                                                            <div class="card-header border-bottom">
                                                                <h5>Add New Technical Category</h5>
                                                            </div>
                                                            <div class="card-body">
                                                                <form action="#">
                                                                    <div class="form-group">
                                                                        <label for="category" class="il-gray fs-14 fw-500 align-center">Category  <span class="text-danger">*</span></label>
                                                                        <div class="with-icon">
                                                                            <span class="la-layer-group la color-light"></span>
                                                                            <input type="text" class="form-control  ih-medium ip-lightradius-xs b-light" id="category" placeholder="Category">
                                                                        </div>
                                                                    </div>
                                                                    <div class="layout-button mt-25">
                                                                        <button type="button" class="btn btn-primary btn-default btn-squared px-30">save</button>
                                                                    </div>

                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="Organizational" role="tabpanel" aria-labelledby="tab-v-2-tab">
                                                <div class="row">
                                                    <div class="col-md-8 col-sm-7">
                                                        <div class="card">
                                                            <div class="userDatatable adv-table-table global-shadow border-0 bg-white w-100 adv-table">
                                                                <div class="table-responsive">
                                                                    <div class="card-header border-bottom">
                                                                        <h5 class=" color-dark fw-600">List All Categories</h5>
                                                                    </div>

                                                                    <div class="card-body">
                                                                        <div id="filter-form-container"></div>
                                                                        <table class="table mb-0 table-borderless adv-table border" data-sorting="true" data-filter-container="#filter-form-container" data-paging-current="1" data-paging-position="right" data-paging-size="10">
                                                                            <thead>
                                                                                <tr class="userDatatable-header">
                                                                                    <th> <span class="userDatatable-title"><i class="la la-braille"></i> Category</span> </th>
                                                                                    <th> <span class="userDatatable-title"><i class="la la-calendar-check"></i> Created at</span> </th>
                                                                                    <th><span class="userDatatable-title"><i class="la la-podcast"></i> Action</span></th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody class=" border-top">

                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="userDatatable-inline-title pl-3">
                                                                                            <h6>Leadership</h6>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="userDatatable-inline-title pl-3">
                                                                                            <h6>22-02-2021</h6>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                                                                            <li>
                                                                                                <a href="#" class="edit" data-toggle="modal" data-target="#add_new">
                                                                                                    <span data-feather="edit"></span></a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="#" class="remove">
                                                                                                    <span data-feather="trash-2"></span></a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="userDatatable-inline-title pl-3">
                                                                                            <h6>Professional Impact</h6>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="userDatatable-inline-title pl-3">
                                                                                            <h6>12-06-2021</h6>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                                                                            <li>
                                                                                                <a href="#" class="edit">
                                                                                                    <span data-feather="edit" data-toggle="modal" data-target="#add_new"></span></a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="#" class="remove">
                                                                                                    <span data-feather="trash-2"></span></a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </td>
                                                                                </tr>

                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-5">
                                                        <div class="card border">
                                                            <div class="card-header border-bottom">
                                                                <h5>Add New Organizational Category</h5>
                                                            </div>
                                                            <div class="card-body">
                                                                <form action="#">
                                                                    <div class="form-group">
                                                                        <label for="category" class="il-gray fs-14 fw-500 align-center">Category  <span class="text-danger">*</span></label>
                                                                        <div class="with-icon">
                                                                            <span class="la-layer-group la color-light"></span>
                                                                            <input type="text" class="form-control  ih-medium ip-lightradius-xs b-light" id="category" placeholder="Category">
                                                                        </div>
                                                                    </div>
                                                                    <div class="layout-button mt-25">
                                                                        <button type="button" class="btn btn-primary btn-default btn-squared px-30">save</button>
                                                                    </div>

                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <!-- End: .userDatatable -->
                            </div>
                        </div>

                    </div>
                    <!-- End: .col -->
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

    <!-- Modal -->
    <div class="modal fade md" id="add_new" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content" id="ajax_view_modal">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Technical Category Information <span class="d-block fs-12 text-muted">We need below required information to update this record.</span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                </div>
                <div class="modal-body">

                    <form action="#">
                        <div class="form-group">
                            <label for="category" class="il-gray fs-14 fw-500 align-center">Category  <span class="text-danger">*</span></label>
                            <div class="with-icon">
                                <span class="la-layer-group la color-light"></span>
                                <input type="text" class="form-control  ih-medium ip-lightradius-xs b-light" id="category" placeholder="Leadership">
                            </div>
                        </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-sm">Submit</button>
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                </div>

                </form>
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
    <!-- <script src="assets/theme_assets/js/full-calendar.js "></script> -->
    <script src="assets/theme_assets/js/googlemap-init.js "></script>
    <script src="assets/theme_assets/js/icon-loader.js "></script>
    <script src="assets/theme_assets/js/jvectormap-init.js "></script>
    <script src="assets/theme_assets/js/leaflet-init.js "></script>
    <script src="assets/theme_assets/js/main.js "></script>
    <script src="assets/theme_assets/js/syntax.js "></script>

    <!-- endinject-->

</body>

</html>