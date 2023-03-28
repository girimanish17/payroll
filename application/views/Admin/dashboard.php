 <?php include('include/header.php'); ?>  

        <div class="contents demo-card expanded">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-main">
                            <ul class="atbd-breadcrumb nav">
                                <li class="atbd-breadcrumb__item">
                                    <span>Home</span>
                                </li>
                            </ul>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <div class="card-group m-b-30">
                            <div class="ratio-box card">
                                <div class="card-body">
                                    <h6 class="ratio-title mb-2">Total Staff</h6>
                                    <div class="ratio-info d-flex justify-content-between align-items-center">
                                        <h4 class="ratio-point fw-300"><?php echo count($totoal_staff)?></h4>
                                        
                                    </div>
                                    <div class="progress-wrap mb-0">
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 100%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>

                                        </div>
                                        <span class="progress-text">
                                            <span class="color-dark dark">Overall Staff <?php echo count($totoal_staff)?></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="ratio-box card">
                                <div class="card-body">
                                    <h6 class="ratio-title mb-2">New Employees</h6>
                                    <div class="ratio-info d-flex justify-content-between align-items-center">
                                        <h1 class="ratio-point"><?php echo count($new_employee)?></h1>
                                       
                                    </div>
                                    <div class="progress-wrap mb-0">
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 100%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>

                                        </div>
                                        <span class="progress-text">
                                            <span class="color-dark dark">Overall Employees </span>
                                        <span class="progress-target"><?php echo count($totoal_staff)?></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="ratio-box card">
                                <div class="card-body">
                                    <h6 class="ratio-title mb-2">Terminations</h6>
                                    <div class="ratio-info d-flex justify-content-between align-items-center">
                                        <h1 class="ratio-point"><?php echo count($termination)?></h1>
                                    </div>
                                    <div class="progress-wrap mb-0">
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 100%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>

                                        </div>
                                        <span class="progress-text">
                                            <span class="color-dark dark">Previous Month </span>
                                        <span class="progress-target"> <?php echo count($last_month_termination)?></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="ratio-box card">
                                <div class="card-body">
                                    <h6 class="ratio-title mb-2">Department</h6>
                                    <div class="ratio-info d-flex justify-content-between align-items-center">
                                        <h1 class="ratio-point"><?php echo count($total_department)?></h1>
                                      
                                    </div>
                                    <div class="progress-wrap mb-0">
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 100%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>

                                        </div>
                                        <span class="progress-text">
                                            <a href="<?php echo base_url('admin/department');?>"><span class="color-dark dark">View all department &#8594;</span></a>
                                      
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-4 col-sm-4 mb-25">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h5>Designation wise staff Total :  <b style="color:#FA8B0C;"><?php echo $totalSum_designation_wise_staff[0]['total'];?></b></h5> 
                            </div>
                            <div class="card-body">
                                <div class="device-pieChart-wrap position-relative">
                                    <div class="pie-chart-legend">
                                        <p> <span></span> </p>
                                    </div>
                                </div>
                                <div class="session-wrap">
								<?php 
								if($designationwisestaff){ foreach($designationwisestaff as $desi){
								?>
                                    <div class="session-single">
                                        <div class="chart-label">
                                            <span class="label-dot dot-success"></span><?php echo $desi['designation_name']; ?> : <b style="color:#FA8B0C;"> <?php echo $desi['count_designation'];?></b>
                                        </div>
                                    </div>
									
								<?php } } ?>
                                    <!--<div class="session-single">
                                        <div class="chart-label">
                                            <span class="label-dot dot-warning"></span> Trainee
                                        </div>
                                    </div>
                                    <div class="session-single">
                                        <div class="chart-label">
                                            <span class="label-dot dot-secondary"></span> Sr Tech
                                        </div>
                                    </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
					 <div class="col-lg-6 col-md-4 col-sm-4 mb-25">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h5>Department wise staff Total : <b style="color:#FA8B0C;"><?php echo $totalSum_department_wise_staff[0]['total'];?></b></h5>
                            </div>
                            <div class="card-body">
                                <div class="device-pieChart-wrap position-relative">
                                    <div class="pie-chart-legend">
                                        <p> <span></span> </p>
                                    </div>
                                    
                                </div>
                                <div class="session-wrap">
								<?php //echo $designationwisestaff['count_designation']
								if($department_wise_staff){ foreach($department_wise_staff as $dep){
								?>
                                    <div class="session-single">
                                        <div class="chart-label">
                                            <span class="label-dot dot-success"></span> <?php echo $dep['name']; ?> : <b style="color:#FA8B0C;"> <?php echo $dep['count_department'];?></b>
                                        </div>
                                    </div>
									
								<?php } } ?>
                                    
                                   
                                </div>
                            </div>
                        </div>
                    </div>
					
					
                    <!--<div class="col-lg-4 col-md-4 col-sm-4 mb-25">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h5>Department wise staff</h5>
                            </div>
                            <div class="card-body">
                                <div class="revenue-pieChart-wrap">
                                    <div>
                                        <canvas id="mychart7"></canvas>
                                    </div>
                                </div>
                                <div class="session-wrap">
                                    <div class="session-single">
                                        <div class="chart-label">
                                            <span class="label-dot dot-success"></span> Design: <span class="text-muted ml-2 fw-600">10</span>
                                        </div>
                                    </div>
                                    <div class="session-single">
                                        <div class="chart-label">
                                            <span class="label-dot dot-warning"></span> PHP: <span class="text-muted ml-2 fw-600">30</span>
                                        </div>
                                    </div>
                                    <div class="session-single">
                                        <div class="chart-label">
                                            <span class="label-dot dot-secondary"></span> IOS: <span class="text-muted ml-2 fw-600">05</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
				
                </div>
              
            </div>

        </div>
	
 <?php include('include/footer.php'); ?> 
<!--<footer class="footer-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="footer-copyright">
                            <p>2022 @<a href="#">Nimbus Payroll</a>
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
                        
                    </div>
                </div>
            </div>
        </footer>
    </main>


    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDduF2tLXicDEPDMAtC6-NLOekX0A5vlnY"></script>
  
    <script src="<?php echo base_url();?>assets/assets/vendor_assets/js/jquery/jquery-3.5.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/assets/vendor_assets/js/jquery/jquery-ui.js"></script>
    <script src="<?php echo base_url();?>assets/assets/theme_assets/js/nimbus.min.js"></script>

    <script src="<?php echo base_url();?>assets/assets/vendor_assets/js/bootstrap/popper.js"></script>
    <script src="<?php echo base_url();?>assets/assets/vendor_assets/js/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/assets/vendor_assets/js/moment/moment.min.js"></script>
    <script src="<?php echo base_url();?>assets/assets/vendor_assets/js/accordion.js"></script>
    <script src="<?php echo base_url();?>assets/assets/vendor_assets/js/autoComplete.js"></script>
    <script src="<?php echo base_url();?>assets/vendor_assets/js/Chart.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor_assets/js/charts.js"></script>
    <script src="<?php echo base_url();?>assets/assets/vendor_assets/js/daterangepicker.js"></script>
    <script src="<?php echo base_url();?>assets/assets/vendor_assets/js/drawer.js"></script>
    <script src="<?php echo base_url();?>assets/assets/vendor_assets/js/dynamicBadge.js"></script>
    <script src="<?php echo base_url();?>assets/assets/vendor_assets/js/dynamicCheckbox.js"></script>
    <script src="<?php echo base_url();?>assets/assets/vendor_assets/js/feather.min.js"></script>
    <script src="<?php echo base_url();?>assets/assets/vendor_assets/js/footable.min.js"></script>
    <script src="<?php echo base_url();?>assets/assets/vendor_assets/js/fullcalendar@5.2.0.js"></script>
    <script src="<?php echo base_url();?>assets/assets/vendor_assets/js/google-chart.js"></script>
    <script src="<?php echo base_url();?>assets/assets/vendor_assets/js/jquery-jvectormap-2.0.5.min.js"></script>
    <script src="<?php echo base_url();?>assets/assets/vendor_assets/js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?php echo base_url();?>assets/assets/vendor_assets/js/jquery.countdown.min.js"></script>
    <script src="<?php echo base_url();?>assets/assets/vendor_assets/js/jquery.filterizr.min.js"></script>
    <script src="<?php echo base_url();?>assets/assets/vendor_assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url();?>assets/assets/vendor_assets/js/jquery.mCustomScrollbar.min.js"></script>
    <script src="<?php echo base_url();?>assets/assets/vendor_assets/js/jquery.peity.min.js"></script>
    <script src="<?php echo base_url();?>assets/assets/vendor_assets/js/jquery.star-rating-svg.min.js"></script>
    <script src="<?php echo base_url();?>assets/assets/vendor_assets/js/leaflet.js"></script>
    <script src="<?php echo base_url();?>assets/assets/vendor_assets/js/leaflet.markercluster.js"></script>
    <script src="<?php echo base_url();?>assets/assets/vendor_assets/js/loader.js"></script>
    <script src="<?php echo base_url();?>assets/assets/vendor_assets/js/message.js"></script>
    <script src="<?php echo base_url();?>assets/assets/vendor_assets/js/moment.js"></script>
    <script src="<?php echo base_url();?>assets/assets/vendor_assets/js/muuri.min.js"></script>
    <script src="<?php echo base_url();?>assets/assets/vendor_assets/js/notification.js"></script>
    <script src="<?php echo base_url();?>assets/assets/vendor_assets/js/popover.js"></script>
    <script src="<?php echo base_url();?>assets/assets/vendor_assets/js/select2.full.min.js"></script>
    <script src="<?php echo base_url();?>assets/assets/vendor_assets/js/slick.min.js"></script>
    <script src="<?php echo base_url();?>assets/assets/vendor_assets/js/trumbowyg.base64.js"></script>
    <script src="<?php echo base_url();?>assets/assets/vendor_assets/js/trumbowyg.min.js"></script>
    <script src="<?php echo base_url();?>assets/assets/vendor_assets/js/wickedpicker.min.js"></script>
    <script src="<?php echo base_url();?>assets/assets/theme_assets/js/drag-drop.js"></script>
    <script src="<?php echo base_url();?>assets/assets/theme_assets/js/footable.js"></script>
    <script src="<?php echo base_url();?>assets/assets/theme_assets/js/full-calendar.js"></script>
    <script src="<?php echo base_url();?>assets/assets/theme_assets/js/googlemap-init.js"></script>
    <script src="<?php echo base_url();?>assets/assets/theme_assets/js/icon-loader.js"></script>
    <script src="<?php echo base_url();?>assets/assets/theme_assets/js/jvectormap-init.js"></script>
    <script src="<?php echo base_url();?>assets/assets/theme_assets/js/leaflet-init.js"></script>
    <script src="<?php echo base_url();?>assets/assets/theme_assets/js/main.js"></script>
    <script src="<?php echo base_url();?>assets/assets/theme_assets/js/syntax.js"></script>
   

</body>

</html> -->
