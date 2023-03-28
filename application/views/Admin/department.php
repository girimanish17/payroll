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
                                    <span>Department</span>
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
                            <a href="<?php echo base_url(); ?>admin/department">
                                <div class="d-flex justify-content-between border-0 radius-xl">
                                    <div class="application-task d-flex align-items-center">
                                        <div class="application-task-icon wh-50 mr-15 bg-primary content-center">
                                            <i class="fas fa-users text-white font-size-20"></i>
                                        </div>
                                        <div class="application-task-content">
                                            <h5>Department</h5>
                                            <span class="text-light fs-13 mt-1 text-capitalize">Set up Department</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="">
                            <a href="<?php echo base_url(); ?>admin/designation">
                                <div class="d-flex justify-content-between border-0 radius-xl">
                                    <div class="application-task d-flex align-items-center">
                                        <div class="application-task-icon wh-50 mr-15 bg-secondary content-center">
                                            <i class="fas fa-user-tie text-white font-size-20"></i>
                                        </div>
                                        <div class="application-task-content">
                                            <h5>Designation</h5>
                                            <span class="text-light fs-13 mt-1 text-capitalize">Set up Designation</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="">
                            <a href="<?php echo base_url(); ?>admin/announcements">
                                <div class="d-flex justify-content-between border-0 radius-xl">
                                    <div class="application-task d-flex align-items-center">
                                        <div class="application-task-icon wh-50 mr-15 bg-success  content-center">
                                            <i class="fas fa-bullhorn text-white font-size-20"></i>
                                        </div>
                                        <div class="application-task-content">
                                            <h5>Announcements</h5>
                                            <span class="text-light fs-13 mt-1 text-capitalize">Set up Announcements</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="">
                            <a href="<?php echo base_url(); ?>admin/policies">
                                <div class="d-flex justify-content-between border-0 radius-xl">
                                    <div class="application-task d-flex align-items-center">
                                        <div class="application-task-icon wh-50 mr-15 bg-warning content-center">
                                            <i class="fas fa-file-alt text-white font-size-20"></i>
                                        </div>
                                        <div class="application-task-content">
                                            <h5>Policies</h5>
                                            <span class="text-light fs-13 mt-1 text-capitalize">Set up Policies</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
         <?php echo $this->session->flashdata('depmsg'); ?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="project-progree-breadcrumb">
                            <div class="breadcrumb-main user-member justify-content-sm-between ">
                                <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                                    <!--<div class="d-flex align-items-center user-member__title justify-content-center mr-sm-25">
                                        <h4 class="text-capitalize fw-500 breadcrumb-title">List All Departments</h4>
                                    </div>
                                    <div class="project-search project-search--height global-shadow ml-md-20 my-10 order-md-2 order-1">
                                        <form action="/" class="d-flex align-items-center user-member__form">
                                            <span data-feather="search"></span>
                                            <input class="form-control mr-sm-2 border-0 box-shadow-none" type="search" placeholder="Search by Name" aria-label="Search">
                                        </form>
                                    </div>-->
                                </div>
                                <div class="action-btn">
                                    <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#new-member" style="float: left;margin-right:5px;">
                                        <i class="las la-plus fs-16"></i>New Department
									</a>
									 

                                    <!-- Modal -->
                                    <div class="modal fade new-member" id="new-member" role="dialog" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content  radius-xl">
                                                <div class="modal-header">
                                                    <h6 class="modal-title fw-500" id="staticBackdropLabel">Add New Department</h6>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span data-feather="x"></span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="new-member-modal">
                                                        <form method="post" id="departmentForm" onsubmit="return addDepartment();">
                                                            <div id="msg"> </div>
                                                            <div class="form-group mb-20">
                                                                <input type="text" required class="form-control" name="name" placeholder="Name">
                                                            </div>
                                                            
                                                            <div class="button-group d-flex pt-25">
                                                                <button class="btn btn-primary btn-default btn-squared text-capitalize">Save Department</button>
                                                                <button class="btn btn-light btn-default btn-squared fw-400 text-capitalize b-light color-light">cancel</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal -->
									
									<a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#new-member2" style="margin-left: 5px;">
										<i class="las la-plus fs-16"></i>Import Department and Desingnation
									</a>
									
										 <!-- Modal -->
                                    <div class="modal fade new-member2" id="new-member2" role="dialog" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content  radius-xl">
                                                <div class="modal-header">
                                                    <h6 class="modal-title fw-500" id="staticBackdropLabel">Bulk Departments and Designations Import by CSV</h6>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span data-feather="x"></span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="new-member-modal">
                                                        <form method="post" id="importForm" action="<?= base_url() ?>admin/importDepartment" enctype="multipart/form-data">
                                                            <div id="msg"> </div>
                                                            <div class="form-group mb-20">
                                                                <input  type="file" name="csv_file" id="csv_file" required>
																<a href="<?php echo base_url('admin/dep_download'); ?>" id="format_type" download="">Download Sample CSV</a>
                                                            </div>
                                                            
                                                            <div class="button-group d-flex pt-25">
                                                                <button class="btn btn-primary btn-default btn-squared text-capitalize">Submit</button>
                                                                <button class="btn btn-light btn-default btn-squared fw-400 text-capitalize b-light color-light">cancel</button>
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
                                                        <span class="userDatatable-title">Name</span>
                                                    </th>
                                                    
                                                    <th>
                                                        <span class="userDatatable-title float-right">action</span>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($department as $key => $value) { ?>
                                                
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
                                                         <div class="d-flex justify-content-end action_btn">
                                                        <a href="#" data-toggle="modal" data-target="#new-member<?php echo $key+1; ?>" class="btn btn-default btn-primary btn-circle pl-2 pr-2 mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></a>
                                                            <a onclick="return confirm('Are you sure want to delete this department?')" href="<?php echo base_url() ?>admin/deleteDepartment/<?php echo $value['id']; ?>" class="btn btn-default btn-danger btn-circle pl-2 pr-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a>
                                                        </div>
                                                    </td>
                                                </tr>

                                
                                    <!-- Modal -->
                                    <div class="modal fade new-member" id="new-member<?php echo $key+1; ?>" role="dialog" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content  radius-xl">
                                                <div class="modal-header">
                                                    <h6 class="modal-title fw-500" id="staticBackdropLabel">Edit New Department</h6>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span data-feather="x"></span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="new-member-modal">
                                                        <form method="post" id="departmentForm<?php echo $value['id']; ?>" onsubmit="return editDepartment(<?php echo $value['id']; ?>);">
                                                            <div id="msg"> </div>
                                                            <div class="form-group mb-20">
                                                                <input type="text" value="<?php echo $value['name']; ?>" required class="form-control" name="name" placeholder="Name">
                                                            </div>
                                                            <input type="hidden" name="id" value="<?php echo $value['id']; ?>">
                                                            <div class="button-group d-flex pt-25">
                                                                <button class="btn btn-primary btn-default btn-squared text-capitalize">Save Department</button>
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