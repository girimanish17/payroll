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
									 <span>Offer Breakup</span>
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
                                        <h5 class=" color-dark fw-600">Offer Breakup</h5>
                                        <div class="card-extra">
                                            <a href="<?php echo base_url(); ?>admin/add_offer_breakup" class="btn btn-primary btn-sm"> <i class="la la-plus"></i>Add New Offer Breakup</a>
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
													<th> <span class="userDatatable-title">Department</span> </th>
													<th> <span class="userDatatable-title">Designation</span> </th>
													<th> <span class="userDatatable-title">Location</span> </th>
													<th> <span class="userDatatable-title">Offer Date</span> </th>
													<th> <span class="userDatatable-title">Gross CTC</span> </th>
													<th style="text-align: right;"> <span class="userDatatable-title" >Action</span> </th>
                                                </tr>
                                            </thead>
                                            <tbody>
											<?php 
												$sno=1;
											if($records)
												{ 
													foreach($records as $value)
													{ 
											?>
											
                                                <tr>
                                                    
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="userDatatable-inline-title">
                                                                <h6> <?php echo $sno;?></h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            <?php echo $value['name']; ?>
                                                        </div>
                                                    </td>
													<td>
                                                        <div class="userDatatable-content">
                                                            <?php echo $value['department_name']?>
                                                        </div>
                                                    </td>
													<td>
                                                        <div class="userDatatable-content">
                                                            <?php echo $value['designation_name']?>
                                                        </div>
                                                    </td>
													<td>
                                                        <div class="userDatatable-content">
                                                            <?php echo $value['location']?>
                                                        </div>
                                                    </td>
													<td>
                                                        <div class="userDatatable-content">
                                                            <?php echo $value['offer_date']?>
                                                        </div>
                                                    </td>
													<td>
                                                        <div class="userDatatable-content">
                                                            <?php echo $value['g_ctc']?>
                                                        </div>
                                                    </td>													
                                                    <td>
                                                       <div class="d-flex justify-content-end action_btn">
															<a href="<?php echo base_url() ?>admin/offer_print_view/<?php echo $value['id']; ?>" class="btn btn-default btn-success btn-circle pl-2 pr-0 mr-2"><span class="fa fa-eye"></span></a>
															<a href="<?php echo base_url() ?>admin/edit_offer/<?php echo $value['id']; ?>" class="btn btn-default btn-primary btn-circle pl-2 pr-2 mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></a>
                                                            <a onclick="return confirm('Are you sure want to delete this Offer')" href="<?php echo base_url() ?>admin/delete_offer/<?php echo $value['id']; ?>" class="btn btn-default btn-danger btn-circle pl-2 pr-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a>
                                                        </div>
                                                    </td>
                                                    
                                                </tr>
                                            <?php $sno++; } } ?>
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
