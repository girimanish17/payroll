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
                                    <span>Announcements</span>
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
                        <li class="active">
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
<!--&#8626; Enter key symbol-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="project-progree-breadcrumb">
                            <div class="breadcrumb-main user-member justify-content-sm-between ">
                                <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                                    <div class="d-flex align-items-center user-member__title justify-content-center mr-sm-25">
                                        <h4 class="text-capitalize fw-500 breadcrumb-title">List All Announcements</h4>
                                    </div>
                                    <div class="project-search project-search--height global-shadow ml-md-20 my-10 order-md-2 order-1">
                                        <form action="<?php echo base_url(); ?>admin/announcements" class="d-flex align-items-center user-member__form" method="post">
                                            <span data-feather="search"></span>
                                            <input class="form-control mr-sm-2 border-0 box-shadow-none" name="searchKey" type="search" value="<?php echo $searchKey; ?>" placeholder="Search by Title and press Enter " aria-label="Search">
											
										</form>
                                    </div>
                                </div>
                                <div class="card-extra">
                                    <a href="#" class="btn px-15 btn-primary" data-toggle="modal" data-target="#new-member">
                                        <i class="las la-plus fs-16"></i>Add New Announcements</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php foreach ($annoucment as $key => $value) { 
                         $depart = $this->common_model->GetColumnName('department',array("id"=>$value['department_id']),array('name'));
                        ?>
                     
                    <div class="col-xxl-4 col-lg-4 col-md-6 mb-25">
                        <div class="user-group px-30 pt-30 radius-xl bg-white">
                            <div class="border-bottom">
                                <div class="media user-group-media d-flex justify-content-between">
                                    <div class="media-body d-flex align-items-center">
                                        <img class="mr-20 wh-70 rounded-circle bg-opacity-primary" src="<?php echo base_url(); ?>assets/images/announcment/<?php echo $value['image']; ?>" alt="author">
                                        <div>
                                            <a href="application-ui.html">
                                                <h6 class="mt-0  fw-500"><?php echo $value['title'] ?></h6>
                                            </a>
                                            <p class="fs-13 color-light mb-0"><?php echo $value['summary']; ?></p>
                                        </div>
                                    </div>
                                    <div class="mt-n15">
                                        <div class="dropdown dropdown-click">
                                            <button class="btn-link border-0 bg-transparent p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-more-horizontal">
                                                    <circle cx="12" cy="12" r="1"></circle>
                                                    <circle cx="19" cy="12" r="1"></circle>
                                                    <circle cx="5" cy="12" r="1"></circle>
                                                </svg>
                                            </button>
                                            <div class="dropdown-default dropdown-bottomLeft dropdown-menu-right dropdown-menu">
                                                <a class="dropdown-item" data-toggle="modal" data-target="#new-member<?php echo $value['id']; ?>" >edit</a>
                                                <a class="dropdown-item" onclick="return confirm('Are you sure want to delete this announcements?')" href="<?php echo base_url() ?>admin/deleteAnnoucment/<?php echo $value['id']; ?>">delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="user-group-people">
                                    <p class="mt-15"><?php echo $value['message'] ?></p>
                                   
                                </div>
                            </div>
                            <div class="d-flex pb-25 mb-0 justify-content-between user-group-progress-top">
                                <div>
                                    <span class="color-light fs-12">Start Date:</span>
                                    <p class="fs-14 fw-500 color-dark mb-0"><?php echo $value['start_date']; ?></p>
                                </div>
                                <div>
                                    <span class="color-light fs-12">End Date:</span>
                                    <p class="fs-14 fw-500 color-dark mb-0 text-right"><?php echo $value['end_date']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade new-member" id="new-member<?php echo $value['id']; ?>" role="dialog" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                        <form method="post" onsubmit="return editAnnouncement(<?php echo $value['id']; ?>);" id="annucmentform<?php echo $value['id']; ?>">
                            <div id="eMsg<?php echo $value['id']; ?>"> </div>
                            <div class="form-row">
                                 
                                <div class="form-group col-md-6 mb-20">
                                    <input type="text" value="<?php echo $value['title']; ?>" name="title" class="form-control" placeholder="Title*" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 mb-20">
                                   <input type="date" class="form-control" value="<?php echo $value['start_date']; ?>"  name="start_date" /> 
                                </div>
                            <div class="form-control col-md-6 mb-20">
                                <input type="date" class="form-control" value="<?php echo $value['end_date']; ?>" name="end_date" />
                            </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 mb-20">
                                    <div class="category-member">
                                        <select class="js-example-basic-single js-states form-control" name="department_id" id="category-member">
                                             <option value="0">Department</option>
                                            <?php foreach ($department as $key => $d) { ?>
                                           
                                            <option <?php if($value['department_id']==$d['id']){ echo "selected"; } ?> value="<?php echo $d['id']; ?>"><?php echo $d['name']; ?></option>
                                            <?php  } ?>
                                          
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 mb-20">
                                    <input type="text" value="<?php echo $value['summary']; ?>" name="summary" class="form-control" placeholder="Summary*">
                                </div>
                                <div class="form-group formElement-editor col-md-12 mb-0">
                                    <textarea name="message" class="form-control form-control-lg" placeholder="Type your message..."><?php echo $value['message']; ?></textarea>
                                </div>
                                <div class="form-group col-md-6 mb-20">
                                    <input type="file" name="image" >
                                </div>
                            </div>
                            <input type="hidden" name="id"  value="<?php echo $value['id']; ?>">
                            <div class="button-group d-flex pt-25">
                                <button  type="submit" class="btn btn-primary btn-default btn-squared text-capitalize">Update Announcements</button>
                                <button class="btn btn-light btn-default btn-squared fw-400 text-capitalize b-light color-light">cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
                      <?php } ?>
                   
                </div>
                <!--same-->
            </div>

        </div>
       
    </main>

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
                        <form method="post" onsubmit="return addAnnouncement();" id="annucmentform">
                            <div id="eMsg"> </div>
                            <div class="form-row">
                                 <div class="form-group col-md-6 mb-20">
                                    <input type="file" name="image" required>
                                </div>
                                <div class="form-group col-md-6 mb-20">
                                    <input type="text" name="title" class="form-control" placeholder="Title*" required>
                                </div>
                            </div>
                                <div class="form-row">
                                <div class="form-group col-md-6 mb-20">
                                   <input type="date" class="form-control"   name="start_date" /> 
                                </div>
                            <div class="form-control col-md-6 mb-20">
                                <input type="date" class="form-control"  name="end_date" />
                            </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 mb-20">
                                    <div class="category-member">
                                        <select class="js-example-basic-single js-states form-control" name="department_id" id="category-member">
                                             <option value="0">Department</option>
                                            <?php foreach ($department as $key => $d) { ?>
                                           
                                            <option  value="<?php echo $d['id']; ?>"><?php echo $d['name']; ?></option>
                                            <?php  } ?>
                                          
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 mb-20">
                                    <input type="text" name="summary" class="form-control" placeholder="Summary*">
                                </div>
                                <div class="form-group formElement-editor col-md-12 mb-0">
                                    <textarea name="message" class="form-control form-control-lg" placeholder="Type your message..."></textarea>
                                </div>
                            </div>

                            <div class="button-group d-flex pt-25">
                                <button  type="submit" class="btn btn-primary btn-default btn-squared text-capitalize">Save Announcements</button>
                                <button class="btn btn-light btn-default btn-squared fw-400 text-capitalize b-light color-light">cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include('include/footer.php'); ?>  
<script type="text/javascript">
 function addAnnouncement(){

      $.ajax({
                url: "<?php echo base_url(); ?>admin/addAnnouncement",
                type: "POST",
                data:new FormData($('#annucmentform')[0]),
                dataType:"JSON",
                async:false,
                cache:false,
                contentType:false,
                processData:false,
                success: function (res) {
                  
                 if(res.status==1){
                  window.location.href="<?php echo base_url(); ?>admin/announcements";
                 } else {
                  $('#eMsg').html(res.msg);
                  return false;
                 }
            }
        });
     return false;  
}   

 function editAnnouncement(id){

      $.ajax({
                url: "<?php echo base_url(); ?>admin/editAnnouncement",
                type: "POST",
               data:new FormData($('#annucmentform'+id)[0]),
                dataType:"JSON",
                async:false,
                cache:false,
                contentType:false,
                processData:false,
                success: function (res) {
                  
                 if(res.status==1){
                  window.location.href="<?php echo base_url(); ?>admin/announcements";
                 } else {
                  $('#eMsg').html(res.msg);
                  return false;
                 }
            }
        });
     return false;  
}   
</script>
