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
                                        <span>Attendance</span>
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
                            <h2 class=""><i class="fa fa-clock"></i> Today's Attendance</h2>
                            </div>
							 <div id="eMsg"></div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12 mb-3">
                                        <!-- <div class="content-box py-2">
                                            <h4 class="fw-500 text-danger">You have been marked <strong>Absent </strong> for today</h4>
                                        </div> -->


                                        <form method="post" action="" id="profileForm">
											<?php echo $this->session->flashdata('msg');
											   if(isset($_SESSION['msg'])){
												unset($_SESSION['msg']);
												}
											  ?>										
										<div class="form-row">
											<div class="form-group col-md-6">
											<label for="currenttime">Current Time</label>
											<div id="date-div"></div>
											</div>
											<div class="form-group col-md-6">
											<label for="inputPassword4">IP Address</label>
											<input type="text" readonly class="form-control" name="myIP" id="myIP" value="<?php echo getenv("REMOTE_ADDR"); ?>" >
											</div>
										</div>
										<div class="form-row">
										<div class="form-group col-md-6">
											<label for="inputAddress">Working From</label>
											<input type="text" class="form-control" name="workingFrom" id="inputAddress" value="" placeholder="Office, Home etc">
										</div>
										<div class="form-group col-md-6">
											<label for="inputAddress2">Notes Regarding Same</label>
											<input type="textarea" class="form-control" name="note" id="inputAddress2" value="" placeholder="Note to HR Executive">
										</div> 

										</div>
							

										<div class="form-row d-flex justify-content-center pt-3" style="gap:15px;">
											 <input type="hidden" name="todayDate" id="todayDate" value="<?php echo date('Y-m-d');?>" >
												<p>    <span class="clock-time">
														<strong>Clock In</strong><br><span class="clockin-time">
													</span>
													<input type="hidden" name="clockIn" id="clockIn" value="" >
												</p>
												<?php if($attendence && $attendence['attendence_date'] == date('Y-m-d') && $attendence['checkIn']!=''){?>
													<p><span >
													
														<strong>Clock In :</strong> <?php echo $attendence['checkIn'];?>
														</span>
													</p>
												<?php }?>	
												
												<p>
												<span class="clock-time2">
														<strong>Clock Out</strong><br><span class="clockout-time">
													</span>
													<input type="hidden" name="clockOut" id="clockOut" value="" >
												</p>
												<?php if($attendence && $attendence['attendence_date'] == date('Y-m-d') && $attendence['checkOut']!=''){?>
											<p><span >
												<strong>Clock Out :</strong> <?php echo $attendence['checkOut'];?>
												</span>
											</p>
											
										<?php }?>
												
											 </div>

											
									<?php if($attendence['attendence_date']!='' && $attendence['checkIn']!='' && $attendence['checkOut']!=''){?>
										<div class="form-row d-flex justify-content-center pt-3" style="gap:15px;">
										<input type="hidden" name="tblid" id="tblid" value="<?php echo $attendence['id']?>" >										
										<button type="button" disabled class="btn btn-success">Check in Time</button>
										<button type="button"  disabled class="btn btn-danger">Check Out Time</button>
										</div>
									<?}else{?>
										<div class="form-row d-flex justify-content-center pt-3" style="gap:15px;">
										<?php if(($attendence['checkIn']!='' && $attendence['checkOut']=='') && $attendence['attendence_date'] == date('Y-m-d')){ ?>	
										<input type="hidden" name="tblid" id="tblid" value="<?php echo $attendence['id']?>" >										
											<button type="button" disabled class="btn btn-success">Check in Time</button>
										<?php }else{?>
											<button type="submit"  onclick="return addAttendance()" class="btn btn-success cin">Check in Time</button>
										<?php } ?>
										
										<?php if(($attendence['checkIn']!='' && $attendence['checkOut']!='') && $attendence['attendence_date'] == date('Y-m-d')){ ?>
											<button type="button"  disabled class="btn btn-danger">Check Out Time</button>
										<?php }else{?>										
											<button type="submit" onclick="return editAttendance()" class="btn btn-danger cout">Check Out Time</button>
										<?php } ?>
										</div>
										
									<?php } ?>
										
								</form>




                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card mb-25">
                            <div class="card-header border-bottom">
                                <h5>Attendance Summary</h5>
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
                                                                    Date
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
                                                                    Status
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
                                                                   Check In
                                                                </div>
                                                            </th>

                                                            <th>
                                                                <div class="userDatatable-title">
                                                                     Check Out
                                                                </div>
                                                            </th>
															
															<th>
                                                                <div class="userDatatable-title">
                                                                     Hours
                                                                </div>
                                                            </th>
                                                        </tr>
													
                                                    </thead>
                                                    <tbody>
													<?php if($full_attendence){ foreach($full_attendence as $key => $value){?>
                                                        <tr>
                                                            <td>
                                                                <div class="userDatatable-content">
                                                                    <?php echo $key+1; ?>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="userDatatable-content">
                                                                    <?php echo date('d M Y',strtotime($value['attendence_date'])); ?>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="userDatatable-content">
																<?php if($value['status']==1){ ?>
																<span class="atbd-tag tag-success tag-transparented"> Present</span>
																<?php }else{ ?>
                                                                    <span class="atbd-tag tag-warning tag-transparented"> Absent</span>
																	<?php }?>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="userDatatable-content">
                                                                   <?php echo $value['checkIn']; ?>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="userDatatable-content">
                                                                     <?php echo $value['checkOut']; ?>
                                                                </div>
                                                            </td>
															
															 <td>
                                                                <div class="userDatatable-content">
																<?php 
																
																?>
																	<?php echo $value['total_hour']; ?>
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
    $('.cin').click(function(e){
        e.preventDefault();
		var dt = new Date();
		var time = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();
		 $(".clockin-time").html(time);
		 $("#clockIn").val(time);
        $('.clock-time').show();
    });
    $('.cout').click(function(e){
        e.preventDefault();
		var dt = new Date();
		var time2 = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();
		$(".clockout-time").html(time2);
		$("#clockOut").val(time2);
        $('.clock-time2').show();
    });
   
 function addAttendance(){
	 //alert("hi");
		var dt = new Date();
		var time = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();
		var myIP = $('#myIP').val();
		var workingFrom = $('#inputAddress').val();
		var note = $('#inputAddress2').val();
		var clockIn = $('#clockIn').val();
		var todayDate = $('#todayDate').val();
	  
	  var params = {myIP: myIP,workingFrom:workingFrom,note:note,clockIn:time,todayDate:todayDate};
		$.ajax({
			url: '<?php echo base_url();?>employee/addAttendance',
			type: 'post',
			data: params,
			success: function (r)
			 {
				 console.log(r);
				  $('#eMsg').html(r);
				  $(".cin").attr("disabled", true);
			 }
		});
 
}  

function editAttendance(){
		var dt = new Date();
		var time2 = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();
		var todayDate = $('#todayDate').val();
		var tblid = $('#tblid').val();
	  
	  var params = {clockOut:time2,todayDate:todayDate,tblid:tblid};
		$.ajax({
			url: '<?php echo base_url();?>employee/editAttendance',
			type: 'post',
			data: params,
			success: function (r)
			 {
				 console.log(r);
				  $('#eMsg').html(r);
				  $(".cout").attr("disabled", true);
			 }
		});
 
}  

</script>    


