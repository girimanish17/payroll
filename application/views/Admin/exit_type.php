<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exit Type</title>

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

    <link rel="stylesheet" href="style.css">

    <!-- endinject -->

    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.png">
</head>

<body class="layout-light side-menu overlayScroll">
    <div class="mobile-search"></div>

    <div class="mobile-author-actions"></div>
    <header class="header-top">
        <nav class="navbar navbar-light">
            <div class="navbar-left">
                <a href="" class="sidebar-toggle">
                    <img class="svg" src="img/svg/bars.svg" alt="img"></a>
                <a class="navbar-brand" href="#"><img class="svg dark" src="img/Nimbus_Logo.jpg" alt="svg"><img class="light" src="img/Nimbus_Logo.jpg" alt="img"></a>

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
                                    <a href="javascript:void(0)"> Home </a>
                                    <span class="breadcrumb__seperator"> <span class="la la-angle-right"></span> </span>
                                </li>
                                <li class="atbd-breadcrumb__item">
                                    <a href="employee.html"> Employee </a>
                                    <span class="breadcrumb__seperator"> <span class="la la-angle-right"></span> </span>
                                </li>
                                <li class="atbd-breadcrumb__item">
                                    <a href="employee_exit.html"> Employee Exit </a>
                                    <span class="breadcrumb__seperator"> <span class="la la-angle-right"></span> </span>
                                </li>
                                <li class="atbd-breadcrumb__item">
                                    <span>Exit Type</span>
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
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class=" color-dark fw-600">List All Exit Types</h5>
                                <div class="card-extra atbd-button-list">
                                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add_new">
                                        <i class="la la-plus"></i> Add New 
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="userDatatable projectDatatable project-table bg-white w-100 border-0">
                                    <!-- Start Table Responsive -->
                                    <div class="table-responsive">
                                        <table class="table mb-0 projectDatatable table-hover table-borderless border-0">
                                            <thead>
                                                <tr class="userDatatable-header">
                                                    <th><span class="userDatatable-title">Exit Type</span>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title">Created at</span>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="odd text-center">
                                                    <td valign="top" colspan="5" class="dataTables_empty">No records available</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- Table Responsive End -->
                                    <div class=" justify-content-sm-end justify-content-start pt-15 owerflow">
                                        <ul class="atbd-pagination float-left d-flex align-items-center">
                                            <li class="atbd-pagination__item mr-2">
                                                <!-- <div class="paging-option">
                                                    <select name="page-number" class="page-selection">
                                                        <option value="20"> </option> 
                                                    </select>

                                                </div> -->
                                            </li>
                                            <li>
                                                <div class="paging-option">
                                                    No records available
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="atbd-pagination d-flex float-right">
                                            <li class="atbd-pagination__item">
                                                <a href="#" class="atbd-pagination__link pagination-control"><span class="la la-angle-left"></span></a>
                                                <a href="#" class="atbd-pagination__link pagination-control"><span class="page-number">...</span></a>
                                                <a href="#" class="atbd-pagination__link pagination-control"><span class="la la-angle-right"></span></a>
                                                <a href="#" class="atbd-pagination__option">
                                                </a>
                                            </li>

                                        </ul>


                                    </div>
                                </div>
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
                    <h5 class="modal-title"> Add New Exit Type</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="with-icon">
                                <span class="la-user lar color-light"></span>
                                <input type="text" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="Enter Exit Type">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-sm">Submit</button>
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDduF2tLXicDEPDMAtC6-NLOekX0A5vlnY"></script>
    <!-- inject:js-->
    <script src="assets/vendor_assets/js/jquery/jquery-3.5.1.min.js"></script>
    <script src="assets/vendor_assets/js/jquery/jquery-ui.js"></script>
    <script src="assets/theme_assets/js/nimbus.min.js"></script>

    <script src="assets/vendor_assets/js/bootstrap/popper.js"></script>
    <script src="assets/vendor_assets/js/bootstrap/bootstrap.min.js"></script>
    <script src="assets/vendor_assets/js/moment/moment.min.js"></script>
    <script src="assets/vendor_assets/js/accordion.js"></script>
    <script src="assets/vendor_assets/js/autoComplete.js"></script>
    <script src="assets/vendor_assets/js/Chart.min.js"></script>
    <script src="assets/vendor_assets/js/charts.js"></script>
    <script src="assets/vendor_assets/js/daterangepicker.js"></script>
    <script src="assets/vendor_assets/js/drawer.js"></script>
    <script src="assets/vendor_assets/js/dynamicBadge.js"></script>
    <script src="assets/vendor_assets/js/dynamicCheckbox.js"></script>
    <script src="assets/vendor_assets/js/feather.min.js"></script>
    <script src="assets/vendor_assets/js/footable.min.js"></script>
    <script src="assets/vendor_assets/js/fullcalendar@5.2.0.js"></script>
    <script src="assets/vendor_assets/js/google-chart.js"></script>
    <script src="assets/vendor_assets/js/jquery-jvectormap-2.0.5.min.js"></script>
    <script src="assets/vendor_assets/js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendor_assets/js/jquery.countdown.min.js"></script>
    <script src="assets/vendor_assets/js/jquery.filterizr.min.js"></script>
    <script src="assets/vendor_assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendor_assets/js/jquery.mCustomScrollbar.min.js"></script>
    <script src="assets/vendor_assets/js/jquery.peity.min.js"></script>
    <script src="assets/vendor_assets/js/jquery.star-rating-svg.min.js"></script>
    <script src="assets/vendor_assets/js/leaflet.js"></script>
    <script src="assets/vendor_assets/js/leaflet.markercluster.js"></script>
    <script src="assets/vendor_assets/js/loader.js"></script>
    <script src="assets/vendor_assets/js/message.js"></script>
    <script src="assets/vendor_assets/js/moment.js"></script>
    <script src="assets/vendor_assets/js/muuri.min.js"></script>
    <script src="assets/vendor_assets/js/notification.js"></script>
    <script src="assets/vendor_assets/js/popover.js"></script>
    <script src="assets/vendor_assets/js/select2.full.min.js"></script>
    <script src="assets/vendor_assets/js/slick.min.js"></script>
    <script src="assets/vendor_assets/js/trumbowyg.base64.js"></script>
    <script src="assets/vendor_assets/js/trumbowyg.min.js"></script>
    <script src="assets/vendor_assets/js/wickedpicker.min.js"></script>
    <script src="assets/theme_assets/js/drag-drop.js"></script>
    <script src="assets/theme_assets/js/footable.js"></script>
    <script src="assets/theme_assets/js/full-calendar.js"></script>
    <script src="assets/theme_assets/js/googlemap-init.js"></script>
    <script src="assets/theme_assets/js/icon-loader.js"></script>
    <script src="assets/theme_assets/js/jvectormap-init.js"></script>
    <script src="assets/theme_assets/js/leaflet-init.js"></script>
    <script src="assets/theme_assets/js/main.js"></script>
    <script src="assets/theme_assets/js/syntax.js"></script>

</body>

</html>