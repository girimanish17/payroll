
<?php include('include/header.php'); ?>  

        <div class="contents demo-card expanded">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-main">
                            <ul class="atbd-breadcrumb nav">
                                <li class="atbd-breadcrumb__item">
                                    <a href="#"> Home </a>
                                    <span class="breadcrumb__seperator"> <span class="la la-angle-right"></span> </span>
                                </li>
                                <li class="atbd-breadcrumb__item">
                                    <span>Policies</span>
                                </li>
                            </ul>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">

                 <div id="smartwizard" class="sw-main sw-theme-arrows">
                    <ul class="nav nav-tabs step-anchor">
                        <li class="">
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
                        <li class="active">
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

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <h5 class="color-dark fw-600 mr-15">List All Policies</h5>
                                    <div class="project-search project-search--height border ml-md-20 my-10 order-md-2 order-1">
                                        <form action="/" class="d-flex align-items-center user-member__form user-member-designation">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                            <input class="form-control mr-sm-2 border-0 box-shadow-none" type="search" placeholder="Search by Name" aria-label="Search">
                                        </form>
                                    </div>
                                </div>
                                <div class="card-extra">
                                   
                                    <a href="#" class="btn px-15 btn-primary" data-toggle="modal" data-target="#new-member">
                                        <i class="las la-plus fs-16"></i>Add New Policies</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="fileM-grid table-responsive">
                                    <div class="filleM-table w-100">
                                        <table class="table mb-0" id="tblUser">
                                            <thead>
                                                <tr class="userDatatable-header">
                                                     <th>
                                                        <span class="projectDatatable-title">Sr no</span>
                                                    </th>
                                                    <th>
                                                        <span class="projectDatatable-title">Title</span>
                                                    </th>
                                                    <th>
                                                        <span class="projectDatatable-title">Description</span>
                                                    </th>
                                                    <th>
                                                        <span class="projectDatatable-title">Image</span>
                                                    </th>
                                                    <th>
                                                        <span class="projectDatatable-title">Created Date</span>
                                                    </th>
                                                    <th>
                                                        <span class="projectDatatable-title float-right">action</span>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($policies as $key => $value) { ?>
                                                 
                                                <tr>
                                                    <td> 
                                                        <div class="userDatatable-content">
                                                          <?php echo $key+1; ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="files-area__title">
                                                           <p class="mb-0 fs-14 fw-500 color-dark text-capitalize"><?php echo $value['title']; ?></p>
                                                           
                                                        </div>

                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                           <?php echo $value['description']; ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                           <a href="#"><img class="rounded-circle wh-34" src="<?php echo base_url(); ?>assets/images/policies/<?php echo $value['image']; ?>" alt="author"></a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            <?php echo $value['created_at']; ?>
                                                        </div>
                                                    </td>
                                                   
                                                    <td>
                                                        <div class="d-flex justify-content-end action_btn">
                                                            <a  href="#" class="btn btn-default btn-primary btn-circle pl-2 pr-2 mr-2" data-toggle="modal" data-target="#new-members<?php echo $value['id']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></a>
                                        
                                                            <a href="#" data-toggle="modal" data-target="#new-member<?php echo $value['id']; ?>" class="btn btn-default btn-primary btn-circle pl-2 pr-2 mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></a>
                                                            <a onclick="return confirm('Are you sure want to delete this policy?')" href="<?php echo base_url() ?>admin/deletePolicies/<?php echo $value['id']; ?>" class="btn btn-default btn-danger btn-circle pl-2 pr-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a>
                                                        </div>
                                                    </td>
                                                </tr>

    <div class="modal fade new-member" id="new-member<?php echo $value['id']; ?>" role="dialog" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content  radius-xl">
                <div class="modal-header">
                    <h6 class="modal-title fw-500" id="staticBackdropLabel">Edit Policies</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span data-feather="x"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="new-member-modal">
                        <form method="post" onsubmit="return editPolicies(<?php echo $value['id']; ?>);" id="policiesForm<?php echo $value['id']; ?>">
                            <div id="eMsg<?php echo $value['id']; ?>"></div>
                            <div class="form-row">
                                <div class="form-group col-md-6 mb-20">
                                    <input type="text" class="form-control" value="<?php echo $value['title']; ?>" name="title" placeholder="Title*">
                                </div>
                                <div class="form-group col-md-6 form-group-calender">
                                    <div class="custom-file">
                                        <input  type="file" name="image" id="formFile">
                                        <img src="<?php echo base_url(); ?>assets/images/policies/<?php echo $value['image']; ?>" style="height: 57px; width: 57px;">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-element-textarea mb-20">
                                <textarea class="form-control" name="description" rows="3" placeholder="Description*"><?php echo $value['description']; ?></textarea>
                            </div>
                            <input type="hidden" name="id" value="<?php echo $value['id']; ?>">
                            <div class="button-group d-flex pt-25">
                                <button type="submit" class="btn btn-primary btn-default btn-squared text-capitalize">Update Policies</button>
                                <button class="btn btn-light btn-default btn-squared fw-400 text-capitalize b-light color-light">cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade new-member" id="new-members<?php echo $value['id']; ?>" role="dialog" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content  radius-xl">
                <div class="modal-header">
                    <h6 class="modal-title fw-500" id="staticBackdropLabel">View Policie</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span data-feather="x"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="new-member-modal">
                        <form method="post" >
                            <div id="eMsg<?php echo $value['id']; ?>"></div>
                            <div class="form-row">
                                <div class="form-group col-md-6 mb-20">
                                    <input readonly type="text" class="form-control" value="<?php echo $value['title']; ?>" name="title" placeholder="Title*">
                                </div>
                             
                            </div>
                            <div class="form-group form-element-textarea mb-20">
                                <textarea readonly class="form-control" name="description" rows="3" placeholder="Description*"><?php echo $value['description']; ?></textarea>
                            </div>
                            <input type="hidden" name="id" value="<?php echo $value['id']; ?>">
                            <div class="button-group d-flex pt-25">
                               
                                <button class="btn btn-light btn-default btn-squared fw-400 text-capitalize b-light color-light">cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
                                                 <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- End: .userDatatable-->
                                </div>
                            </div>
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
    </main>

    <div class="modal fade new-member" id="new-member" role="dialog" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content  radius-xl">
                <div class="modal-header">
                    <h6 class="modal-title fw-500" id="staticBackdropLabel">Add New Policies</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span data-feather="x"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="new-member-modal">
                        <form method="post" onsubmit="return addPolicies();" id="policiesForm">
                            <div id="eMsg"></div>
                            <div class="form-row">
                                <div class="form-group col-md-6 mb-20">
                                    <input type="text" class="form-control" name="title" placeholder="Title*" value="<?php  echo set_value('title'); ?>">
                                </div>
                                <div class="form-group col-md-6 form-group-calender">
                                    <div class="custom-file">
                                        <input  type="file" name="image" id="formFile">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-element-textarea mb-20">
                                <textarea class="form-control" name="description" rows="3" placeholder="Description*"><?php  echo set_value('description'); ?></textarea>
                            </div>
                            <div class="button-group d-flex pt-25">
                                <button type="submit" class="btn btn-primary btn-default btn-squared text-capitalize">add new Policies</button>
                                <button class="btn btn-light btn-default btn-squared fw-400 text-capitalize b-light color-light" data-dismiss="modal">cancel</button>
                            </div>
                        </form>
                    </div>
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
    "bPaginate": true,
    "bLengthChange": false,
    "bFilter": true,
    "bInfo": false,
    "bAutoWidth": false });
} );   
</script>
<script type="text/javascript">
 function addPolicies(){

      $.ajax({
                url: "<?php echo base_url(); ?>admin/addPolicies",
                type: "POST",
                data:new FormData($('#policiesForm')[0]),
                dataType:"JSON",
                async:false,
                cache:false,
                contentType:false,
                processData:false,
                success: function (res) {
                  
                 if(res.status==1){
                  window.location.href="<?php echo base_url(); ?>admin/policies";
                 } else {
                  $('#eMsg').html(res.msg);
                  return false;
                 }
            }
        });
     return false;  
}   

 function editPolicies(id){

      $.ajax({
                url: "<?php echo base_url(); ?>admin/editPolicies",
                type: "POST",
               data:new FormData($('#policiesForm'+id)[0]),
                dataType:"JSON",
                async:false,
                cache:false,
                contentType:false,
                processData:false,
                success: function (res) {
                  
                 if(res.status==1){
                  window.location.href="<?php echo base_url(); ?>admin/policies";
                 } else {
                  $('#eMsg').html(res.msg);
                  return false;
                 }
            }
        });
     return false;  
}   
</script>