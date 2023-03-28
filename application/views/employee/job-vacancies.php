<?php include('include/header.php'); ?>

<style>
    .dataTables_wrapper .dataTables_filter input {
        border: 1px solid #aaa;
        border-radius: 3px;
        padding: 5px;
        background-color: transparent;
        margin-left: 3px;
    }

    #tblUser_wrapper th,
    #tblUser_wrapper td {
        text-align: left;
    }
</style>

<div class="contents demo-card expanded">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-default card-md my-4">
                    <div class="card-body">
                        <ul class="atbd-breadcrumb nav">	
                            <li class="atbd-breadcrumb__item">
                                <a href="<?php echo base_url(); ?>">
                                    <span class="la la-home"></span>
                                </a>
                                <span class="breadcrumb__seperator">
                                    <span class="la la-slash"></span>
                                </span>
                            </li>
                            <li class="atbd-breadcrumb__item">
                                <span>Job Vacancies</span>
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
                                <h6 class="ap-nameAddress__title"><?php echo $employee['first_name'] . " " . $employee['last_name']; ?></h6>
                                <p class="ap-nameAddress__subTitle  fs-14 pt-1 m-0 "><?php echo $this->session->userdata('designation'); ?></p>
                            </div>
                            <p><span class="atbd-tag tag-warning">At work for : <?php echo $this->session->userdata('total_worktime'); ?></span></p>
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
                        <h5>Job Vacancy</h5>
                    </div>
					<?php echo $this->session->flashdata('msg');
														   if(isset($_SESSION['msg'])){
															unset($_SESSION['msg']);
															}
														  ?>
                    <div class="card-body">
                        <div class="row">
						<?php if($job_vacancies){ foreach($job_vacancies as $value){?>
                            <div class="col-sm-4 mb-3">
                                <a href="<?php echo base_url(); ?>employee/job_position/<?php echo $value['id'];?>">
                                    <div class="job-vacancy-box justify-content-center align-items-center">
                                        <div class="content-box">
                                            <h4><?php echo $value['position'];?></h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
						<?php } } ?>
                           
                        </div>

                    </div>
                </div>
<div class="card mb-25">
                            <div class="card-header border-bottom">
                                <h5>Job Applications</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12 mb-3">
                                        <div class="table4 table5">
                                            <div class="table-responsive">
                                                <table class="table table-sm mb-0">
                                                    <thead class="text-center">
													
                                                        <tr class="userDatatable-header">
                                                            <th>
                                                                <div class="userDatatable-title">
                                                                    SR No.
                                                                  
                                                                </div>
                                                            </th>
															<th>
                                                                <div class="userDatatable-title">
                                                                   Position
                                                                </div>
                                                            </th>
															<th>
                                                                <div class="userDatatable-title">
                                                                   Name
                                                                </div>
                                                            </th>
															<th>
                                                                <div class="userDatatable-title">
                                                                   Email
                                                                </div>
                                                            </th>
															<th>
                                                                <div class="userDatatable-title">
                                                                   Phone
                                                                </div>
                                                            </th>
															<th>
                                                                <div class="userDatatable-title">
                                                                   Submitted By
                                                                </div>
                                                            </th>

                                                            <th>
                                                                <div class="userDatatable-title">
                                                                     Resume
                                                                </div>
                                                            </th>
                                                            <th>
                                                                <div class="userDatatable-title">
                                                                    Status
                                                                    </div>
                                                                </div>
                                                            </th>
															<th>
                                                                <div class="userDatatable-title">
                                                                     Action
                                                                </div>
                                                            </th>
                                                        </tr>
													
                                                    </thead>
                                                    <tbody>
													<?php if($job_application){ foreach($job_application as $key => $value){
														$employee = $this->common_model->GetSingleData('users',array('user_id'=>$value['user_id']));
														$position = $this->common_model->GetSingleData('job_vacancies',array('id'=>$value['position_id']));
														?>
                                                        <tr>
                                                            <td>
                                                                <div class="userDatatable-content">
                                                                    <?php echo $key+1; ?>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="userDatatable-content">
                                                                    <?php echo $position['position']; ?>
                                                                </div>
                                                            </td>
                                                           
                                                            <td>
                                                                <div class="userDatatable-content">
                                                                   <?php echo $value['name']; ?>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="">
                                                                     <?php echo strtolower($value['email']); ?>
                                                                </div>
                                                            </td>
															
															 <td>
                                                                <div class="userDatatable-content">
																	<?php echo $value['phone']; ?>
                                                                </div>
                                                            </td>
															 <td>
                                                                <div class="userDatatable-content">
																	<?php echo $employee['first_name']." ".$employee['last_name']; ?>
                                                                </div>
                                                            </td>
															 <td>
                                                                <div class="userDatatable-content">
																	<a href="<?php echo base_url('assets/images/resume/').$value['resume']; ?>" title="Resume" target="_blank">Resume</a>
                                                                </div>
                                                            </td>
															 <td>
                                                                <?php if($value['status']=='0'){ ?>
																   <h6><span class="atbd-tag tag-warning tag-transparented">Pending</span></h6>
																<?php }elseif($value['status']=='1'){ ?>
																	<h6><span class="atbd-tag tag-success tag-transparented">Approved</span></h6>
																<?php }elseif($value['status']=='2'){?>
																	 <h6><span class="atbd-tag tag-danger tag-transparented">Rejected</span></h6>
																<?php } ?>
                                                            </td>
															
															<td>
															<div class="userDatatable-content">
                                                            <div class="userDatatable-content">
                                                                <div class="d-flex justify-content-sm-end action_btn">
																	
                                                                    <a onclick="return confirm('Are you sure you want to delete?');" href="<?php echo base_url('employee/Home/delete_job_application/'.$value['id']);?>" class="btn btn-default btn-danger btn-circle pl-2 pr-2" title="Delete">
                                                                        <em class="la la-trash"></em>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
															
															</td>
                                                        </tr>
													<?php }} ?>
                                                       
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