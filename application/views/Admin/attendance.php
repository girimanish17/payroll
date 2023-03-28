<?php include('include/header.php'); ?>  
<style>
    .companygeneral{
        padding:40px;
    }
</style>
<div class="contents demo-card expanded">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-main">
                            <ul class="atbd-breadcrumb nav">
                                <li class="atbd-breadcrumb__item">
                                    <a href="<?php echo base_url(); ?>"> Home </a>
                                    <span class="breadcrumb__seperator"> <span class="la la-angle-right"></span> </span>
                                </li>
                                <li class="atbd-breadcrumb__item">
                                    <span>Attendance </span>
                                </li>
                            </ul>
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div id="smartwizard" class="sw-main sw-theme-arrows">
                    <ul class="nav nav-tabs step-anchor">
                        <li class="active">
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
                            <a href="<?php echo base_url(); ?>admin/monthly_report">
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
                        <!--<li class="">
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
                        </li>-->
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
                                        <h5 class=" color-dark fw-600">Daily Attendace Report</h5>
                                        <div class="card-extra">
                                            <!--<div class="dropdown">
                                                <a class="btn btn-primary dropdown-toggle atbd-select" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Export
                                                        </a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item" href="#">copy</a>
                                                    <a class="dropdown-item" href="#">csv</a>
                                                    <a class="dropdown-item" href="#">print</a>
                                                </div>
                                            </div>-->
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="filter-form-container"></div>
                                        <table class="table mb-0 table-borderless adv-table" data-sorting="true" data-filter-container="#filter-form-container" data-paging-current="1" data-paging-position="right" data-paging-size="10" id="tblUser">
                                            <thead>
                                                <tr class="userDatatable-header">
                                                    <th> <span class="userDatatable-title">Employee</span> </th>
                                                    <th> <span class="userDatatable-title">Date</span> </th>
                                                    <th> <span class="userDatatable-title">Status</span> </th>
                                                    <th> <span class="userDatatable-title">Clock IN</span> </th>
                                                    <th data-type="html" data-name='position'> <span class="userDatatable-title">Clock OUT</span> </th>
                                                    <th> <span class="userDatatable-title">Working From</span> </th>
                                                    <!--<th data-type="html" data-name='status'> <span class="userDatatable-title">Early Leaving</span> </th>-->
                                                    <th> <span class="userDatatable-title float-right">Total Work</span> </th>
													<th> <span class="userDatatable-title">Added By</span> </th>
                                                </tr>
                                            </thead>
                                            <tbody>
											<?php if($emp_attendance){ foreach($emp_attendance as $key => $value1){
												$users = $this->common_model->GetSingleData('users',array('user_id'=>$value1['user_id']));
												?>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="userDatatable__imgWrapper d-flex align-items-center">
                                                                <img class="profile-image rounded-circle d-block m-0 wh-38" src="<?php echo base_url('assets/images/users/'.$users['profile_img']);?>" alt="" />
                                                            </div>
                                                            <div class="userDatatable-inline-title">
                                                                <h6><?=$users['first_name']." ".$users['last_name']?></h6>
                                                                <p class="d-block mb-0">
                                                                     <?=$users['email']?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="userDatatable-inline-title">
                                                                <h6><?=$value1['attendence_date']?></h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            <span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">Present</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            <?=$value1['checkIn']?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                             <?=$value1['checkOut']?>
                                                        </div>
                                                    </td>
													
													<td>
                                                        <div class="userDatatable-content">
                                                             <?=$value1['workingFrom']?>
                                                        </div>
                                                    </td>
                                                   
                                                    <td>
                                                        <div class="userDatatable-content text-center pl-4">
                                                            <?=$value1['total_hour']?>
                                                        </div>
                                                    </td>
													 <td>
                                                        <div class="userDatatable-content text-center pl-4">
                                                            <?=$value1['created_by']==0?"Employee":"Manually"?>
                                                        </div>
                                                    </td>
                                                </tr>
											<?php } } ?>
                                                
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
    <div class="modal fade new-member" id="new-member" role="dialog" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content  radius-xl">
                <div class="modal-header">
                    <h6 class="modal-title fw-500" id="staticBackdropLabel">Add New Announcements</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span data-feather="x"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="new-member-modal">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6 mb-20">
                                    <input type="text" class="form-control" placeholder="Title*">
                                </div>
                                <div class="form-group col-md-6 form-group-calender">
                                    <div id="pageWrapper">
                                        <div id="pageMasthead" class="pageSection"></div>
                                        <div id="pageContentArea" class="pageSection position-relative">
                                            <input type="text" id="txtDateRange" name="txtDateRange" class="inputField shortInputField dateRangeField form-control  ih-medium ip-gray radius-xs b-light" placeholder="01/10/2021 - 01/15/2021" data-from-field="txtDateFrom" data-to-field="txtDateTo"
                                            />
                                            <input type="hidden" id="txtDateFrom" value="" />
                                            <input type="hidden" id="txtDateTo" value="" />
                                            <a href="#"><span data-feather="calendar"></span></a>
                                        </div>
                                        <div id="pageFooter" class="pageSection"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 mb-20">
                                    <div class="category-member">
                                        <select class="js-example-basic-single js-states form-control" id="category-member">
                                            <option value="0">Department</option>
                                            <option value="1">2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 mb-20">
                                    <input type="text" class="form-control" placeholder="Summary*">
                                </div>
                            </div>
                            <div class="form-group formElement-editor mb-0">
                                <textarea name="message" id="mail-reply-message2" class="form-control-lg" placeholder="Type your message..."></textarea>
                            </div>
                            <div class="button-group d-flex pt-25">
                                <button class="btn btn-primary btn-default btn-squared text-capitalize">add new Announcements</button>
                                <button class="btn btn-light btn-default btn-squared fw-400 text-capitalize b-light color-light">cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <?php include('include/footer.php'); ?>
   <!--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>
 <script src="<?php echo base_url();?>assets/theme_assets/js/bootstrap-material-datetimepicker.js"></script>-->
 <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
 <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
<script>
jQuery(document).ready(function($) {
    $('#tblUser').DataTable({
    "bPaginate": true,
    "bLengthChange": false,
    "bFilter": true,
    "bInfo": false,
    "bAutoWidth": false,
	 dom: 'Bfrtip',
 buttons: [
 'copyHtml5',
 'excelHtml5',
 'csvHtml5',
 'pdfHtml5'
 ]
	});
} );
   
        imgInp.onchange = evt => {
            const [file] = imgInp.files
            if (file) {
                blah.src = URL.createObjectURL(file)
            }
        }
    </script>
