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
                                        <a href="javascript:void(0)">
                                            <span>Job Vacancies</span>
                                        </a>
                                        <span class="breadcrumb__seperator">
                                            <span class="la la-slash"></span>
                                        </span>
                                    </li>
                                    <li class="atbd-breadcrumb__item">
                                        <span>Fresher Developer</span>
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
                                        <img class="ap-img__main bg-opacity-primary  wh-120 rounded-circle mb-3 " src="img/author/2.jpg" alt="profile">
                                    </div>
                                    <div class="ap-nameAddress">
                                        <h6 class="ap-nameAddress__title">Duran Clayton</h6>
                                        <p class="ap-nameAddress__subTitle  fs-14 pt-1 m-0 ">Senior Android Developer
                                        </p>
                                    </div>
                                    <p><span class="atbd-tag tag-warning">At work for : 2 m 26 d</span></p>
                                </div>
                            </div>
                            <div class="card-footer bg-primary mt-2 text-center">

                                <div class="profile-overview d-flex justify-content-between flex-wrap">
                                    <div class="po-details">
                                        <h6 class="po-details__title text-white">0/26</h6>
                                        <span class="po-details__sTitle text-white">Attendance</span>
                                    </div>
                                    <div class="po-details">
                                        <h6 class="po-details__title text-white">0/10</h6>
                                        <span class="po-details__sTitle text-white">Leaves</span>
                                    </div>
                                    <div class="po-details">
                                        <h6 class="po-details__title text-white">04</h6>
                                        <span class="po-details__sTitle text-white">Awards</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-9 col-lg-9 col-md-9 col-sm-8 mb-25">
                        <div class="card mb-25">
                            <div class="card-header border-bottom">
                                <h5>Job Vacancy</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-4 mb-3">
                                        <a href="fresher-developer.html">
                                            <div class="job-vacancy-box justify-content-center align-items-center">
                                                <div class="content-box">
                                                    <h4>Fresher Laravel Developer</h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-4 mb-3">
                                        <a href="fresher-developer.html">
                                            <div class="job-vacancy-box justify-content-center align-items-center">
                                                <div class="content-box">
                                                    <h4>Senior Human Resource</h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-4 mb-3">
                                        <a href="fresher-developer.html">
                                            <div class="job-vacancy-box justify-content-center align-items-center">
                                                <div class="content-box">
                                                    <h4>Fresher Laravel Developer</h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <h5 class="border-bottom pb-2 mb-4">Fresher Laravel Developer</h5>
                                        <p>Aut ipsum distinctio est est accusantium. At reiciendis voluptatum omnis id. Nisi aut quidem molestiae voluptate ut. Fugiat quo et perspiciatis suscipit magnam voluptate tenetur.</p>
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#Apply_Now">Apply Now</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
       

    <div class="modal-basic modal fade show" id="Apply_Now" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content modal-bg-white ">
                <div class="modal-header">
                    <h6 class="modal-title">Application Form</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span data-feather="x"></span></button>
                </div>
                <div class="modal-body">
                    <div class="Vertical-form">
                        <form action="#">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Enter Full Name">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Email Id">
                            </div>
                            <div class="form-group">
                                <label>Contact</label>
                                <input type="tel" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Enter Contact Number">
                            </div>
                            <div class="form-group">
                                <label>Cover</label>
                                <textarea class="form-control ip-light radius-xs b-light px-15" rows="3" placeholder="Cover Letter"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Upload Resume</label>
                                <input class="form-control ih-medium ip-light radius-xs b-light px-15" type="file" id="formFile">
                            </div>
                            <div class="layout-button mt-25">
                                <button type="button" class="btn btn-primary btn-default btn-squared px-30">Submit</button>
                            </div>
                        </form>
                    </div>
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