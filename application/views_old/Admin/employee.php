<?php include('include/header.php'); ?>  
<div class="contents demo-card expanded">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <div class="breadcrumb-main">
               <ul class="atbd-breadcrumb nav">
                  <li class="atbd-breadcrumb__item">
                     <a href="<?php echo base_url();?>"> Home </a>
                     <span class="breadcrumb__seperator"> <span class="la la-angle-right"></span> </span>
                  </li>
                  <li class="atbd-breadcrumb__item">
                     <span>Employee</span>
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
               <a href="employee.html">
                  <div class="d-flex justify-content-between border-0 radius-xl">
                     <div class="application-task d-flex align-items-center">
                        <div class="application-task-icon wh-50 mr-15 bg-primary content-center">
                           <i class="fas fa-user text-white font-size-20"></i>
                        </div>
                        <div class="application-task-content">
                           <h5>Employee</h5>
                           <span class="text-light fs-13 mt-1 text-capitalize">Set up Employee</span>
                        </div>
                     </div>
                  </div>
               </a>
            </li>
            <!--<li class="">
               <a href="<?php echo base_url(); ?>admin/roles">
                  <div class="d-flex justify-content-between border-0 radius-xl">
                     <div class="application-task d-flex align-items-center">
                        <div class="application-task-icon wh-50 mr-15 bg-secondary content-center">
                           <i class="fas fa-users-cog text-white font-size-20"></i>
                        </div>
                        <div class="application-task-content">
                           <h5>Role & Privilages</h5>
                           <span class="text-light fs-13 mt-1 text-capitalize">Set Roles</span>
                        </div>
                     </div>
                  </div>
               </a>
            </li>-->
            <li class="">
               <a href="shift_&_scheduling.html">
                  <div class="d-flex justify-content-between border-0 radius-xl">
                     <div class="application-task d-flex align-items-center">
                        <div class="application-task-icon wh-50 mr-15 bg-success  content-center">
                           <i class="fas fa-stopwatch text-white font-size-20"></i>
                        </div>
                        <div class="application-task-content">
                           <h5>Shift & Scheduling</h5>
                           <span class="text-light fs-13 mt-1 text-capitalize">Manage Shifts</span>
                        </div>
                     </div>
                  </div>
               </a>
            </li>
            <li class="">
               <a href="employee_exit.html">
                  <div class="d-flex justify-content-between border-0 radius-xl">
                     <div class="application-task d-flex align-items-center">
                        <div class="application-task-icon wh-50 mr-15 bg-warning content-center">
                           <i class="fas fa-sign-out-alt text-white font-size-20"></i>
                        </div>
                        <div class="application-task-content">
                           <h5>Employee Exit</h5>
                           <span class="text-light fs-13 mt-1 text-capitalize">Set up Employee Exit</span>
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
                  <h5 class=" color-dark fw-600">List All Employees</h5>
                  <div class="card-extra">
                     <a class="btn btn-primary btn-sm" href="<?php echo base_url(); ?>admin/addEmployee">
						<i class="la la-plus"></i> Add New Employee
                     </a>
                  </div>
               </div>
                <?php echo $this->session->flashdata('msg');
                if(isset($_SESSION['msg'])){
					unset($_SESSION['msg']);
				} ?>
               <div class="card-body">
                  <div class="userDatatable projectDatatable project-table bg-white w-100 border-0">
                     <div class="atbd-tab tab-horizontal">
                        <ul class="nav nav-tabs vertical-tabs" role="tablist">
                           <li class="nav-item">
                              <a class="nav-link active" id="tab-v-1-tab" data-toggle="tab" href="#tab-v-1" role="tab" aria-controls="tab-v-1" aria-selected="true">All</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" id="tab-v-2-tab" data-toggle="tab" onclick="return filterList('male');" href="#tab-v-2" role="tab" aria-controls="tab-v-2" aria-selected="false">Male <span>(<?php echo count($male_emp); ?>)</span></a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" id="tab-v-3-tab" data-toggle="tab" onclick="return filterList('female');" href="#tab-v-3" role="tab" aria-controls="tab-v-3" aria-selected="false">Female <span>(<?php echo count($female_emp); ?>)</span></a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" id="tab-v-4-tab" data-toggle="tab" onclick="return filterList('active');" href="#tab-v-4" role="tab" aria-controls="tab-v-4" aria-selected="false">Active <span>(<?php echo count($active_emp); ?>)</span></a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" id="tab-v-5-tab" data-toggle="tab" onclick="return filterList('deactive');" href="#tab-v-5" role="tab" aria-controls="tab-v-5" aria-selected="false">Deactive <span>(<?php echo count($deactive_emp); ?>)</span></a>
                           </li>
                        </ul>
						<!--<a href="<?php echo base_url(); ?>admin/sendme" >and</a>-->
                        <div class="tab-content">
                           <div class="tab-pane fade show active" id="tab-v-1" role="tabpanel" aria-labelledby="tab-v-1-tab">
                              <!-- Start Table Responsive -->
                              <div class="table-responsive">
                                 <table class="table mb-0 table-basic" id="tblUser">
                                    <thead>
                                       <tr class="userDatatable-header">
                                          <th><span class="userDatatable-title">Profile</span>
                                          </th>
                                          <th>
                                             <span class="userDatatable-title">Contact</span>
                                          </th>
                                          <th>
                                             <span class="userDatatable-title">Mail Id</span>
                                          </th>
                                          <th>
                                             <span class="userDatatable-title">Gender</span>
                                          </th>
                                          <th>
                                             <span class="userDatatable-title">Local Address</span>
                                          </th>
                                          <th>
                                             <span class="userDatatable-title">Parmanent Address</span>
                                          </th>
                                          <th>
                                             <span class="userDatatable-title">Status</span>
                                          </th>
                                          <th class="text-right">
                                             <span class="userDatatable-title">Actions</span>
                                          </th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($employee as $key => $value) { 
										$designation = $this->common_model->GetSingleData('designation',array('id'=>$value['designation_id']));?>
                                        
                                       <tr>
                                          <td>
                                             <div class="orderDatatable-title">
                                                <div class="d-flex">
                                                   <div class="btn btn-icon btn-light btn-squared btn-outline-primary mr-2"><?php echo strtoupper($value['first_name'][0]); ?></div>
                                                   <div class="userDatatable-inline-title">
                                                      <h6><?php echo $value['first_name'].' '.$value['last_name']; ?></h6>
                                                      <p class="d-block mb-0"><?php echo $designation['designation_name']; ?>
                                                        
                                                      </p>
                                                   </div>
                                                </div>
                                             </div>
                                          </td>
                                          <td><?php echo $value['first_name']; ?></td>
                                          <td><?php echo $value['email']; ?></td>
                                          <td><?php echo $value['gender']; ?></td>
                                          <td><?php echo $value['local_address']; ?></td>
                                          <td><?php echo $value['permanent_address']; ?></td>
                                          <td>
                                             <div class="orderDatatable-status text-center font-size-14">
											 <?php if($value['status'] == 1){ ?>
                                                <a href="<?php echo base_url(); ?>admin/changeStatusEmployee/<?php echo $value['user_id']; ?>/0" onclick="return confirm('Are you sure want to chnage this employee status?');"><span class="btn btn-success btn-default btn-squared btn-transparent-success">Active</span></a>
											 <?php }else{ ?>
											    <a href="<?php echo base_url(); ?>admin/changeStatusEmployee/<?php echo $value['user_id']; ?>/1" onclick="return confirm('Are you sure want to chnage this employee status?');"><span class="btn btn-danger btn-default btn-squared btn-transparent-danger">Inactive</span></a>
											 <?php } ?>
                                             </div>
                                          </td>
                                          <td>
                                             <div class="d-flex justify-content-sm-end action_btn">
                                                <a href="<?php echo base_url(); ?>admin/editEmployee/<?php echo $value['user_id']; ?>" class="btn btn-default btn-primary btn-circle pl-2 pr-2 mr-2"><span data-feather="edit"></span></a>
                                                <a onclick="return confirm('Are you sure want to delete this employee?');" href="<?php echo base_url(); ?>admin/deleteEmployee/<?php echo $value['user_id']; ?>" class="btn btn-default btn-danger btn-circle pl-2 pr-2"><span data-feather="trash-2"></span></a>
                                             </div>
                                          </td>
                                       </tr>
                                       <?php } ?>
                                       <!-- End: tr -->
                                    </tbody>
                                 </table>
                              </div>
                              <!-- Table Responsive End -->
                           </div>
                           <div class="tab-pane fade" id="tab-v-2" role="tabpanel" aria-labelledby="tab-v-2-tab">
                              <div id="maleList"></div>
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
<!-- Modal -->
<div class="modal fade md" id="add_new" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content" id="ajax_view_modal">
         <div class="modal-header">
            <h5 class="modal-title">Add New Employee </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
         </div>
         <div class="modal-body">
            <form>
               <div class="form-row">
                  <div class="account-profile border-bottom form-group col-md-12 text-center pb-4">
                     <div class="ap-img mb-20 pro_img_wrapper ml-auto mr-auto">
                        <input id="imgInp" type="file" accept="image/*" name="fileUpload" class="d-none">
                        <label for="imgInp">
                           <!-- Profile picture image-->
                           <img class="ap-img__main rounded-circle wh-120" id="blah" src="img/author/profile.png" alt="profile">
                           <span class="cross" id="remove_pro_pic">
                           <span data-feather="camera"></span>
                           </span>
                        </label>
                     </div>
                     <h5>
                        Profile Picture. Click above to upload.
                     </h5>
                     <p>
                        <small>
                        Upload files only: gif,png,jpg,jpeg            </small>
                     </p>
                  </div>
               </div>
               <div class="form-row">
                  <div class="form-group col-md-4">
                     <div class="with-icon">
                        <span class="la-user lar color-light"></span>
                        <input type="text" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="First Name">
                     </div>
                  </div>
                  <div class="form-group col-md-4">
                     <div class="with-icon">
                        <span class="la-user lar color-light"></span>
                        <input type="text" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="Last Name">
                     </div>
                  </div>
                  <div class="form-group col-md-4">
                     <div class="with-icon">
                        <span class="la-user lar color-light"></span>
                        <input type="text" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="Employee">
                     </div>
                  </div>
                  <div class="form-group col-md-4">
                     <div class="with-icon">
                        <span class="la la-phone color-light"></span>
                        <input type="tel" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="Contact Number">
                     </div>
                  </div>
                  <div class="form-group col-md-4">
                     <div class="with-icon">
                        <span class="la la-restroom color-light"></span>
                        <select class="form-control ih-medium ip-lightradius-xs b-light">
                           <option selected="">Select Gender</option>
                           <option>Male</option>
                           <option>Female</option>
                        </select>
                     </div>
                  </div>
                  <div class="form-group col-md-4">
                     <div class="with-icon">
                        <span class="la la-envelope color-light"></span>
                        <input type="tel" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="Email Id">
                     </div>
                  </div>
                  <div class="form-group col-md-4">
                     <div class="with-icon">
                        <span class="la la-user-circle color-light"></span>
                        <input type="tel" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="User Name">
                     </div>
                  </div>
                  <div class="form-group col-md-4">
                     <div class="with-icon">
                        <span class="la la-lock color-light"></span>
                        <input type="password" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="Password">
                     </div>
                  </div>
                  <div class="form-group col-md-4">
                     <div class="with-icon">
                        <span class="la la-clock color-light"></span>
                        <select class="form-control ih-medium ip-lightradius-xs b-light">
                           <option selected="">Select Office Shift</option>
                           <option data-select2-id="6">Day Shift</option>
                        </select>
                     </div>
                  </div>
                  <div class="form-group col-md-4">
                     <div class="with-icon">
                        <span class="la la-user-check color-light"></span>
                        <select class="form-control ih-medium ip-lightradius-xs b-light">
                           <option selected="">Select Role</option>
                           <option data-select2-id="6">Marketing Manager</option>
                           <option>Employee</option>
                        </select>
                     </div>
                  </div>
                  <div class="form-group col-md-4">
                     <div class="with-icon">
                        <span class="la la-user-graduate color-light"></span>
                        <select class="form-control ih-medium ip-lightradius-xs b-light">
                           <option selected="">Select Department</option>
                           <option data-select2-id="6">Marketing</option>
                           <option>CAMS</option>
                           <option>Admin</option>
                        </select>
                     </div>
                  </div>
                  <div class="form-group col-md-4">
                     <div class="with-icon">
                        <span class="la la-user-shield color-light"></span>
                        <select class="form-control ih-medium ip-lightradius-xs b-light">
                           <option selected="">Select Designation</option>
                           <option data-select2-id="6">KAM</option>
                           <option>IT Staff</option>
                        </select>
                     </div>
                  </div>
                  <div class="form-group col-md-4">
                     <div class="with-icon">
                        <span class="la la-money-bill-wave color-light"></span>
                        <input type="text" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="Basic Salary">
                     </div>
                  </div>
                  <div class="form-group col-md-4">
                     <div class="with-icon">
                        <span class="la la-money-check-alt color-light"></span>
                        <input type="text" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="Hourly Rate">
                     </div>
                  </div>
                  <div class="form-group col-md-4">
                     <div class="with-icon">
                        <span class="la la-money-check color-light"></span>
                        <select class="form-control ih-medium ip-lightradius-xs b-light">
                           <option selected="" value="">Select Payslip</option>
                           <option data-select2-id="6">Per Month</option>
                        </select>
                     </div>
                  </div>
               </div>
            </form>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-primary btn-sm">Submit</button>
            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
         </div>
      </div>
   </div>
</div>
<?php include('include/footer.php'); ?>
	  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>    
<script>
jQuery(document).ready(function($) {
    $('#tblUser').DataTable({
		"ordering": false,
    "bPaginate": true,
    "bLengthChange": false,
    "bFilter": true,
    "bInfo": false,
    "bAutoWidth": false });
} );   
</script>
<script type="text/javascript">
 function filterList(val){
//alert(val); 
//var msg = $('#l_message').val(); 
        
     
      var params = {filterVal: val};
        $.ajax({
            url: '<?php echo base_url();?>admin/filterEmployee',
            type: 'post',
            data: params,
            success: function (r)
             {
                console.log(r);
                $("#maleList").html(r);
             }
        });

     return false; 
}   
</script>