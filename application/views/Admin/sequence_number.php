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
                                   <span>Sequence Number</span>
                                </li>
                            </ul>
                           
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 mb-30">
                        <div class="card mt-30">

                            <div class="userDatatable adv-table-table global-shadow border-0 bg-white w-100 adv-table">
                                <div class="table-responsive">
                                    <div class="card-header border-bottom">
                                        <h5 class=" color-dark fw-600">Sequence Number</h5>
                                        <div class="card-extra">
                                            <button class="btn btn-primary btn-sm" role="button" data-target="#add_attendance" data-toggle="modal"> <i class="la la-plus"></i>Add New</button>
                                        </div>
                                    </div>
									<?php echo $this->session->flashdata('msg');
										if(isset($_SESSION['msg'])){
										unset($_SESSION['msg']);
										}
									?>
                                    <div class="card-body">
                                        <div id="filter-form-container"></div>
                                        <table class="table mb-0 table-borderless adv-table" id="tblUser" data-sorting="true" data-filter-container="#filter-form-container" data-paging-current="1" data-paging-position="right" data-paging-size="10">
                                            <thead>
                                                 <tr class="userDatatable-header">
                                                    <th> <span class="userDatatable-title">Name</span> </th>
                                                    <th> <span class="userDatatable-title">Type</span> </th>
                                                    <th> <span class="userDatatable-title">Key</span> </th>
                                                    <th> <span class="userDatatable-title">Format</span> </th>
                                                    <th> <span class="userDatatable-title">Current Index</span> </th>
                                                    <th> <span class="userDatatable-title">Action</span> </th>
                                                </tr>
                                            </thead>
                                            <tbody>
											<?php if($comp_sequence_numbers){ foreach($comp_sequence_numbers as $key => $value1){?>
											
												<tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="userDatatable-inline-title">
                                                                <h6><?=$value1['name']?></h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="userDatatable-inline-title">
                                                                <h6><?=$value1['type']?></h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                    <div class="d-flex">
                                                            <div class="userDatatable-inline-title">
                                                            <h6><?=$value1['key']?></h6>
                                                         </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            <?=$value1['format']?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                           <?=$value1['index']?>
                                                        </div>
														
                                                    </td>
                                                    <td>
                                                         <div class="d-flex justify-content-end action_btn"> 
                                                        <a href="#" data-toggle="modal" data-target="#new-member<?php echo $key+1; ?>" class="btn btn-default btn-primary btn-circle pl-2 pr-2 mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></a>
                                                            <a href="<?php echo base_url() ?>admin/delete_sequence_number/<?php echo $value1['id']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                               
                                            <!-- Modal -->
                                    <div class="modal fade new-member" id="new-member<?php echo $key+1; ?>" role="dialog" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content  radius-xl">
                                                <div class="modal-header">
                                                    <h6 class="modal-title fw-500" id="staticBackdropLabel">Edit New Vacancies</h6>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span data-feather="x"></span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="new-member-modal">
                                                        <form method="post" id="departmentForm<?php echo $value1['id']; ?>" action="<?php echo base_url('admin/edit_sequence_number/').$value1['id'];?>">
                                                            <div class="form-group row">
                                                    
                                                </div>
												<div class="form-group col-md-12 form-group-calender">
														<label class="il-gray fs-14 fw-500 align-center">Name <span class="text-danger">*</span></label>
														<div class="position-relative">
															<input type="text" name="name" value="<?=$value1['name']?>" class="form-control  ih-medium ip-gray radius-xs b-light" placeholder="Name" required>
														   
														</div>
													</div>
													 <div class="form-group col-md-12 form-group-calender">
														<label class="il-gray fs-14 fw-500 align-center">Type <span class="text-danger">*</span></label>
														<div class="position-relative">
															<input type="text" name="type" value="<?=$value1['type']?>" class="form-control  ih-medium ip-gray radius-xs b-light" placeholder="Type" required>
														   
														</div>
													</div>
													 <div class="form-group col-md-12 form-group-calender">
														<label class="il-gray fs-14 fw-500 align-center">Key <span class="text-danger">*</span></label>
														<div class="position-relative">
															<input type="text" name="key" value="<?=$value1['key']?>" class="form-control  ih-medium ip-gray radius-xs b-light" placeholder="Key" required>
														   
														</div>
													</div>
													 <div class="form-group col-md-12 form-group-calender">
														<label class="il-gray fs-14 fw-500 align-center">Format <span class="text-danger">*</span></label>
														<div class="position-relative">
															<input type="text" name="format" value="<?=$value1['format']?>" class="form-control  ih-medium ip-gray radius-xs b-light" placeholder="Format" required>
														   
														</div>
													</div>
													<div class="form-group col-md-12 form-group-calender">
														<label class="il-gray fs-14 fw-500 align-center">Index <span class="text-danger">*</span></label>
														<div class="position-relative">
															<input type="text" name="index" value="<?=$value1['index']?>" class="form-control  ih-medium ip-gray radius-xs b-light" placeholder="Index" required>
														   
														</div>
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
     
    <div class="modal fade new-member" id="add_attendance" role="dialog" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content  radius-xl">
                <div class="modal-header">
                    <h6 class="modal-title fw-500" id="staticBackdropLabel">Add Sequence Number
                       
                    </h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span data-feather="x"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="new-member-modal">
                        <form method="post" action="<?php echo base_url('Admin/Home/add_sequence_number');?>" enctype="multipart/form-data">
                            <div class="form-row">
                                
                                <div class="form-group col-md-12 form-group-calender">
                                    <label class="il-gray fs-14 fw-500 align-center">Name <span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <input type="text" name="name" value="<?php echo set_value('name') ?>" class="form-control  ih-medium ip-gray radius-xs b-light" placeholder="Name" required>
                                       
                                    </div>
                                </div>
								 <div class="form-group col-md-12 form-group-calender">
                                    <label class="il-gray fs-14 fw-500 align-center">Type <span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <input type="text" name="type" value="<?php echo set_value('type') ?>" class="form-control  ih-medium ip-gray radius-xs b-light" placeholder="Type" required>
                                       
                                    </div>
                                </div>
								 <div class="form-group col-md-12 form-group-calender">
                                    <label class="il-gray fs-14 fw-500 align-center">Key <span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <input type="text" name="key" value="<?php echo set_value('key') ?>" class="form-control  ih-medium ip-gray radius-xs b-light" placeholder="Key" required>
                                       
                                    </div>
                                </div>
								 <div class="form-group col-md-12 form-group-calender">
                                    <label class="il-gray fs-14 fw-500 align-center">Format <span class="text-danger"></span></label>
                                    <div class="position-relative">
                                        <input type="text" name="format" value="<?php echo set_value('format') ?>" class="form-control  ih-medium ip-gray radius-xs b-light" placeholder="Format" >
                                       
                                    </div>
                                </div>
								<div class="form-group col-md-12 form-group-calender">
                                    <label class="il-gray fs-14 fw-500 align-center">Index <span class="text-danger">*</span></label>
                                    <div class="position-relative">
                                        <input type="text" name="index" value="<?php echo set_value('index') ?>" class="form-control  ih-medium ip-gray radius-xs b-light" placeholder="Index" required>
                                       
                                    </div>
                                </div>
								
                            </div>
                           
                            <div class="button-group d-flex pt-25">
                                <button type="submit" class="btn btn-primary btn-default btn-squared text-capitalize">Save</button>
                                <button class="btn btn-light btn-default btn-squared fw-400 text-capitalize b-light color-light">cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>

   <?php //include('include/header.php'); ?>  
<?php include('include/footer.php'); ?>  
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>
 <script src="<?php echo base_url();?>assets/theme_assets/js/bootstrap-material-datetimepicker.js"></script>
<script>
jQuery(document).ready(function($) {
    $('#tblUser').DataTable({
    "bPaginate": true,
    "bLengthChange": false,
    "bFilter": true,
    "bInfo": false,
    "bAutoWidth": false });
} );


        $('.timepicker').bootstrapMaterialDatePicker({
            date: false,
            shortTime: true,
            format: 'HH:mm A',
            twelvehour: true,
            lang: 'en'
        });
   
</script>
<style>
        .dtp {
            z-index: 9999 !important;
        }
        
        .dtp-buttons {
            display: flex;
            justify-content: flex-end;
        }
    </style>



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
    $('.btn-success').click(function(e){
        e.preventDefault();
        $('.clock-time').show();
    });
    $('.btn-danger').click(function(e){
        e.preventDefault();
        $('.clock-time2').show();
    });
   


</script>    