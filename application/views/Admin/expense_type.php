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
									 <span>Expense Type</span>
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
                                        <h5 class=" color-dark fw-600">View Expense Type</h5>
                                        <div class="card-extra">
                                            <button class="btn btn-primary btn-sm" role="button" data-target="#add_attendance" data-toggle="modal"> <i class="la la-plus"></i>Add New Expense Type </button>
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
                                                    <th> <span class="userDatatable-title">SNo.</span> </th>
                                                    <th> <span class="userDatatable-title">Name</span> </th>
													<th> <span class="userDatatable-title">Status</span> </th>
													<th style="text-align: right;"> <span class="userDatatable-title" >Action</span> </th>
                                                </tr>
                                            </thead>
                                            <tbody>
											<?php if($expense_type){ foreach($expense_type as $key => $value){?>
											
                                                <tr>
                                                    
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="userDatatable-inline-title">
                                                                <h6> <?php echo $key+1;?></h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            <?php echo $value['name']?>
                                                        </div>
                                                    </td>
													<td>
													 <div class="userDatatable-content">
                                                            <?php if($value['status'] == "1"){echo "Active";}else{ echo "Inactive";}?>
                                                        </div>
                                                        
                                                    </td>
                                                    <td>
                                                       <div class="d-flex justify-content-end action_btn">
                                                        
														 <div class="orderDatatable-status text-center font-size-14">
														 <?php if($value['status'] == 1){ ?>
															<a href="<?php echo base_url(); ?>admin/expense_type_status/<?php echo $value['id']; ?>/0" onclick="return confirm('Are you sure want to inactive this status?');"><span class="btn btn-danger btn-default btn-squared btn-transparent-danger">Inactive</span></a>
														 <?php }else{ ?>
															<a href="<?php echo base_url(); ?>admin/expense_type_status/<?php echo $value['id']; ?>/1" onclick="return confirm('Are you sure want to active this status?');"><span class="btn btn-success btn-default btn-squared btn-transparent-success">Active</span></a>
														  <?php }?>
															
														 </div>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <a onclick="return confirm('Are you sure want to delete this expense type?')" href="<?php echo base_url() ?>admin/deleteexpense_type/<?php echo $value['id']; ?>" class="btn btn-default btn-danger btn-circle pl-2 pr-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a>
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
     
    <div class="modal fade new-member" id="add_attendance" role="dialog" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content  radius-xl">
                <div class="modal-header">
                    <h6 class="modal-title fw-500" id="staticBackdropLabel">Add New Expense Type
                        <span class="d-block fs-12 text-muted">We need below required information to add this record.</span>
                    </h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span data-feather="x"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="new-member-modal">
                        <form method="post" action="<?php echo base_url('Admin/Employee/add_expense_type');?>" enctype="multipart/form-data">
                            <div class="form-row">
                                
                                <div class="form-group col-md-12 form-group-calender">
                                    <label class="il-gray fs-14 fw-500 align-center">Expense Type Name <span class="text-danger">*</span></label>
                                    <div class="position-relative">
									 <input type="text" name="name"  class="form-control  ih-medium ip-lightradius-xs b-light" id="inputsummary" placeholder="Expense Type" value="<?php  echo set_value('name'); ?>">

                                       
                                    
                                </div>
                            </div>
                           
                            <div class="button-group d-flex pt-25">
                                <button type="submit" class="btn btn-primary btn-default btn-squared text-capitalize">Save</button>
                                <button class="btn btn-light btn-default btn-squared fw-400 text-capitalize b-light color-light" data-dismiss="modal">cancel</button>
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


        
</script>
