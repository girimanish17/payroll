<?php include('include/header.php'); ?>

        <div class="contents demo-card expanded">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-default card-md my-4">
                            <div class="card-body">
                                <ul class="atbd-breadcrumb nav">
                                    <li class="atbd-breadcrumb__item">
                                        <a href="<?php echo base_url();?>">
                                            <span class="la la-home"></span>
                                        </a>
                                        <span class="breadcrumb__seperator">
                                            <span class="la la-slash"></span>
                                        </span>
                                    </li>
                                    <li class="atbd-breadcrumb__item">
                                        <span>Salary Slips</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-xxl-3 col-lg-3 col-md-3 col-sm-4 mb-25">
                        <div class="card" style="position: sticky; top:5rem">
                            <div class="card-body text-center pt-30 px-25 pb-0">
                                <div class="account-profile-cards  ">
                                    <div class="ap-img d-flex justify-content-center">
                                        <img class="ap-img__main bg-opacity-primary  wh-120 rounded-circle mb-3 " src="<?php echo base_url(); ?>assets/images/users/<?php echo $employee['profile_img']; ?>" alt="profile">
                                    </div>
                                    <div class="ap-nameAddress">
                                        <h6 class="ap-nameAddress__title"><?php echo $employee['first_name']." ".$employee['last_name']; ?></h6>
                                        <p class="ap-nameAddress__subTitle  fs-14 pt-1 m-0 "><?php echo $this->session->userdata('designation'); ?></p>
                                    </div>
                                    <p><span class="atbd-tag tag-warning">At work for : <?php echo $this->session->userdata('total_worktime');?></span></p>
                                </div>
                            </div>
                            <div class="card-footer bg-primary mt-2 text-center">

                                <div class="profile-overview d-flex justify-content-between flex-wrap">
                                    <div class="po-details">
                                        <h6 class="po-details__title text-white"><?php echo $this->Common_function->attendenceInMonth();?>/<?php echo $this->Common_function->totalMonthdays();?></h6>
                                        <span class="po-details__sTitle text-white">Attendance</span>
                                    </div>
                                    <div class="po-details">
                                        <h6 class="po-details__title text-white"><?php echo $this->Common_function->leavesSumInYear();?>/<?php echo $this->Common_function->user_credit_leaves();?></h6>
                                        <span class="po-details__sTitle text-white">Full Leaves</span>
                                    </div>
                                    <div class="po-details">
                                        <h6 class="po-details__title text-white"><?php echo $this->Common_function->halfleavesSumInYear();?></h6>
                                        <span class="po-details__sTitle text-white">Half Leaves</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-9 col-lg-9 col-md-9 col-sm-8 mb-25">
                        <div class="card mb-25">
                            <div class="card-header border-bottom">
                                <h5>My Salary Slips</h5>
                            </div>
                            <div class="card-body">
                                <div class="table4 table5">
                                    <div class="table-responsive">
                                        <table class="table table-sm mb-0">
                                            <thead class="text-center">
                                                <tr class="userDatatable-header">
                                                    <th>
                                                        <div class="userDatatable-title">
                                                            Id
                                                            <div class="d-flex justify-content-between align-items-center w-100">
                                                                <span class="userDatatable-sort">
                                                                    <i class="fas fa-caret-down"></i>
                                                                </span>
                                                                <span class="userDatatable-filter">
                                                                    <i class="fas fa-filter"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="userDatatable-title">
                                                            Month
                                                            <div class="d-flex justify-content-between align-items-center w-100">
                                                                <span class="userDatatable-sort">
                                                                    <i class="fas fa-sort-up up"></i>
                                                                    <i class="fas fa-caret-down down"></i>
                                                                </span>
                                                                <span class="userDatatable-filter">
                                                                    <i class="fas fa-filter"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="userDatatable-title">
                                                            Year
                                                            <div class="d-flex justify-content-between align-items-center w-100">
                                                                <span class="userDatatable-sort">
                                                                    <i class="fas fa-sort-up up"></i>
                                                                    <i class="fas fa-caret-down down"></i>
                                                                </span>
                                                                <span class="userDatatable-filter">
                                                                    <i class="fas fa-filter"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </th>

                                                    <th>
                                                        <div class="userDatatable-title">
                                                            Net Salary
                                                            <div class="d-flex justify-content-between align-items-center w-100">
                                                                <span class="userDatatable-sort">
                                                                    <i class="fas fa-sort-up up"></i>
                                                                    <i class="fas fa-caret-down down"></i>
                                                                </span>
                                                                <span class="userDatatable-filter">
                                                                    <i class="fas fa-filter"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </th>

                                                    <th>
                                                        <div class="userDatatable-title">
                                                            Created On
                                                            <div class="d-flex justify-content-between align-items-center w-100">
                                                                <span class="userDatatable-sort">
                                                                    <i class="fas fa-sort-up up"></i>
                                                                    <i class="fas fa-caret-down down"></i>
                                                                </span>
                                                                <span class="userDatatable-filter">
                                                                    <i class="fas fa-filter"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </th>

                                                    <th>
                                                        <div class="userDatatable-title">
                                                            Action
                                                            <div class="d-flex justify-content-between align-items-center w-100">
                                                                <span class="userDatatable-sort">
                                                                    <i class="fas fa-sort-up up"></i>
                                                                    <i class="fas fa-caret-down down"></i>
                                                                </span>
                                                                <span class="userDatatable-filter">
                                                                    <i class="fas fa-filter"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            NIM4356
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            July
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            2021
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            20,000.00
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            25/06/2021
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            <div class="userDatatable-content">
                                                                <div class="d-flex justify-content-sm-end action_btn">
                                                                    <a href="#" class="btn btn-default btn-primary btn-circle pl-2 pr-2 mr-2" title="Reprint Box ID">
                                                                        <em class="la la-print"></em>
                                                                    </a>
                                                                    <a href="#" class="btn btn-default btn-danger btn-circle pl-2 pr-2" title="Close Gate">
                                                                        <em class="la la-trash"></em>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            NIM4356
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            August
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            2021
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            20,000.00
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            28/07/2021
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            <div class="userDatatable-content">
                                                                <div class="d-flex justify-content-sm-end action_btn">
                                                                    <a href="#" class="btn btn-default btn-primary btn-circle pl-2 pr-2 mr-2" title="Reprint Box ID">
                                                                        <em class="la la-print"></em>
                                                                    </a>
                                                                    <a href="#" class="btn btn-default btn-danger btn-circle pl-2 pr-2" title="Close Gate">
                                                                        <em class="la la-trash"></em>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            NIM4356
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            July
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            2021
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            20,000.00
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            25/06/2021
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            <div class="userDatatable-content">
                                                                <div class="d-flex justify-content-sm-end action_btn">
                                                                    <a href="#" class="btn btn-default btn-primary btn-circle pl-2 pr-2 mr-2" title="Reprint Box ID">
                                                                        <em class="la la-print"></em>
                                                                    </a>
                                                                    <a href="#" class="btn btn-default btn-danger btn-circle pl-2 pr-2" title="Close Gate">
                                                                        <em class="la la-trash"></em>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            NIM4356
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            July
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            2021
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            20,000.00
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            25/06/2021
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            <div class="userDatatable-content">
                                                                <div class="d-flex justify-content-sm-end action_btn">
                                                                    <a href="#" class="btn btn-default btn-primary btn-circle pl-2 pr-2 mr-2" title="Reprint Box ID">
                                                                        <em class="la la-print"></em>
                                                                    </a>
                                                                    <a href="#" class="btn btn-default btn-danger btn-circle pl-2 pr-2" title="Close Gate">
                                                                        <em class="la la-trash"></em>
                                                                    </a>
                                                                </div>
                                                            </div>
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
        
    <div class="modal-basic modal fade show" id="modal-basic" tabindex="-1" role="dialog" aria-hidden="true">


        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content modal-bg-white ">
                <div class="modal-header">



                    <h6 class="modal-title">I did: there's no use in crying like that!' said.</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span data-feather="x"></span></button>
                </div>
                <div class="modal-body">
                    <p>Dormouse sulkily remarked, 'If you can't swim, can you?' he added, turning to the dance. So they.
                    </p>
                </div>
            </div>
        </div>


    </div>

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
    <script>
        imgInp.onchange = evt => {
            const [file] = imgInp.files
            if (file) {
                blah.src = URL.createObjectURL(file)
            }
        }
    </script>
 <?php include('include/footer.php'); ?>