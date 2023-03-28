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
                                    <span>Holiday List</span>
                                </li>
                            </ul>
                           
                        </div>
                    </div>
                </div>
            </div>

         <?php echo $this->session->flashdata('depmsg'); ?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="project-progree-breadcrumb">
                            <div class="breadcrumb-main user-member justify-content-sm-between ">
                                <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                                  <?php echo $this->session->flashdata('msg');
														   if(isset($_SESSION['msg'])){
															unset($_SESSION['msg']);
															}
														  ?>
                                </div>
                                <div class="action-btn">
                                    <a href="#" class="btn px-15 btn-primary" data-toggle="modal" data-target="#new-member">
                                        <i class="las la-plus fs-16"></i>Add New Holiday</a>

                                    <!-- Modal -->
                                    <div class="modal fade new-member" id="new-member" role="dialog" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content  radius-xl">
                                                <div class="modal-header">
                                                    <h6 class="modal-title fw-500" id="staticBackdropLabel">Add New Holiday</h6>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span data-feather="x"></span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="new-member-modal">
                                                        <form  method="post" action="<?php echo base_url('admin/add_upcoming_holiday');?>"  enctype="multipart/form-data" id="departmentForm" >
                                                           <div class="form-group row">
                                                    <div class="col-sm-2 d-flex aling-items-center pr-0">
                                                        <label class=" col-form-label align-center">Holiday Name:<span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" name="name" required="" placeholder="Enter " value="">
                                                    </div>
                                                </div>
												
												<div class="form-group row">
                                                    <div class="col-sm-2 d-flex aling-items-center pr-0">
                                                        <label class=" col-form-label align-center">Date:<span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <input type="date" class="form-control ih-medium ip-light radius-xs b-light px-15" min="<?php echo date("Y-m-d"); ?>" name="holiday_date" required="" placeholder="Enter " value="">
                                                    </div>
                                                </div>
												
												<div class="form-group row">
                                                    <div class="col-sm-2 d-flex aling-items-center pr-0">
                                                        <label class=" col-form-label align-center">Description:</label>
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                    </div>
                                                </div>
												
                                                <div class="layout-button mt-25 d-flex justify-content-center">
                                                    <button type="submit" class="btn btn-primary btn-sm btn-default btn-squared px-30">Submit</button>
                                                </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal -->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="userDatatable w-100 mb-30">
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-borderless" id="tblUser">
                                            <thead>
                                                <tr class="userDatatable-header">
                                                     <th>
                                                        <span class="userDatatable-title">Sr no.</span>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title">Holiday Name</span>
                                                    </th>
													<th>
                                                        <span class="userDatatable-title">Holiday Date</span>
                                                    </th>
													<th>
                                                        <span class="userDatatable-title">Description</span>
                                                    </th>
													<th>
                                                        <span class="userDatatable-title">Status</span>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title float-right">action</span>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($upcoming_holidays as $key => $value) { 
												
												?>
                                                
                                                <tr>

                                                    <td>
                                                        <div class="userDatatable-content">
                                                         <?php echo $key+1; ?>
                                                        </div>
                                                    </td>
                                                    
                                                    <td>
                                                        <div class="userDatatable-content">
                                                           <?php echo $value['name']; ?>
                                                        </div>
                                                    </td>
													
													<td>
                                                        <div class="userDatatable-content">
                                                           <?php echo $value['holiday_date']; ?>
                                                        </div>
                                                    </td>
													<td>
                                                        <div class="userDatatable-content">
                                                           <?php echo $value['description']; ?>
														   </div>
                                                    </td>
													
													<td>
                                             <div class="orderDatatable-status text-center font-size-14">
											 <?php if($value['status'] == 1){ ?>
                                               <span class="btn btn-success btn-default btn-squared btn-transparent-success">Active</span>
											 <?php }else{ ?>
											   <span class="btn btn-danger btn-default btn-squared btn-transparent-danger">Inactive</span>
											 <?php } ?>
                                             </div>
                                          </td>
                                                    <td>
													
                                                         <div class="d-flex justify-content-end action_btn">
													<?php if(date('Y-m-d') <= $value['holiday_date']){?>
                                                        <a href="#" data-toggle="modal" data-target="#new-member<?php echo $key+1; ?>" class="btn btn-default btn-primary btn-circle pl-2 pr-2 mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></a>
                                                        <a onclick="return confirm('Are you sure want to delete this holiday?')" href="<?php echo base_url() ?>admin/delete_upcoming_holiday/<?php echo $value['id']; ?>" class="btn btn-default btn-danger btn-circle pl-2 pr-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a>
                                                    <?php }else{?> 
														<a href="#"  style="opacity: 0.5;" class="btn btn-default btn-primary btn-circle pl-2 pr-2 mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></a>
                                                        <a  href="#" style="opacity: 0.5;" class="btn btn-default btn-danger btn-circle pl-2 pr-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a>
													<?php }?>
														</div>
                                                    </td>
                                                </tr>

                                
                                    <!-- Modal -->
                                    <div class="modal fade new-member" id="new-member<?php echo $key+1; ?>" role="dialog" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content  radius-xl">
                                                <div class="modal-header">
                                                    <h6 class="modal-title fw-500" id="staticBackdropLabel">Edit New Upcoming Holiday</h6>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span data-feather="x"></span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="new-member-modal">
                                                        <form method="post" id="departmentForm<?php echo $value['id']; ?>" action="<?php echo base_url('admin/edit_upcoming_holiday/').$value['id'];?>">
                                                            <div class="form-group row">
																<div class="col-sm-2 d-flex aling-items-center pr-0">
																	<label class=" col-form-label align-center">Holiday Name:<span class="text-danger">*</span></label>
																</div>
																<div class="col-sm-10">
																	<input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" name="name" required="" placeholder="Enter " value="<?php echo $value['name']; ?>">
																</div>
															</div>
															
															<div class="form-group row">
																<div class="col-sm-2 d-flex aling-items-center pr-0">
																	<label class=" col-form-label align-center">Holiday Date:<span class="text-danger">*</span></label>
																</div>
																<div class="col-sm-10">
																	<input type="date" class="form-control ih-medium ip-light radius-xs b-light px-15" min="<?php echo date("Y-m-d"); ?>" name="holiday_date" required="" placeholder="Enter " value="<?php echo $value['holiday_date']; ?>">
																</div>
															</div>
															
															<div class="form-group row">
																<div class="col-sm-2 d-flex aling-items-center pr-0">
																	<label class=" col-form-label align-center">Description:</label>
																</div>
																<div class="col-sm-10">
																	<textarea class="form-control" name="description" required="" id="exampleFormControlTextarea1" rows="3"><?php echo $value['description']; ?></textarea>
																</div>
															</div>
														
															<div class="form-group row">
																<div class="col-sm-2 d-flex aling-items-center pr-0">
																	<label class=" col-form-label align-center">Status:<span class="text-danger">*</span></label>
																</div>
																 <div class="col-sm-10">
																<select class="form-control ih-medium ip-light radius-xs b-light px-15" name="status">
																   <option selected="">Select Status</option>
																   <option value="1" <?php if($value['status']==1){ echo "selected"; }?>>Active</option>
																   <option value="0" <?php if($value['status']==0){ echo "selected"; }?>>Inactive</option>
																</select>
																</div>
															</div>
															
															<div class="button-group d-flex pt-25">
																<button type="submit" class="btn btn-primary btn-default btn-squared text-capitalize">Submit</button>
																<button class="btn btn-light btn-default btn-squared fw-400 text-capitalize b-light color-light">cancel</button>
															</div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal -->
                                                                            
                                                 <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                    
                </div>
               <div class="row">
                    <div class="col-lg-12">
                        <div class="d-flex  mt-30 mb-30">

                           
                        </div>
                    </div>
                </div>
                <!--same-->
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
    function addDepartment(){

      $.ajax({
                url: "<?php echo base_url(); ?>admin/addDepartment",
                type: "POST",
                data:$('#departmentForm').serialize(),
                dataType:"JSON",
                success: function (res) {
                  
                 if(res.status==1){
                  window.location.href="<?php echo base_url(); ?>admin/department";
                 } else {
                  $('#eMsg').html(res.msg);
                  return false;
                 }
            }
        });
     return false;  
}   

 function editDepartment(id){

      $.ajax({
                url: "<?php echo base_url(); ?>admin/editDepartment",
                type: "POST",
                data:$('#departmentForm'+id).serialize(),
                dataType:"JSON",
                success: function (res) {
                  
                 if(res.status==1){
                  window.location.href="<?php echo base_url(); ?>admin/department";
                 } else {
                  $('#eMsg').html(res.msg);
                  return false;
                 }
            }
        });
     return false;  
}   
</script>