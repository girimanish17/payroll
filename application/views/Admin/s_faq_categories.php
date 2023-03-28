<?php include('include/header.php'); ?>  
        <div class="contents demo-card expanded">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card my-4">
                            <div class="card-body">
                                <ul class="atbd-breadcrumb nav">
                                    <li class="atbd-breadcrumb__item">
                                        <a href="<?php echo base_url();?>"> Home </a>
                                        <span class="breadcrumb__seperator">
                                            <span class="la la-slash"></span>
                                        </span>
                                    </li>
                                    <li class="atbd-breadcrumb__item">
                                        <span>FAQ Category</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-30">
                            <div class="card-header">
                                <h5>FAQ Category List</h5>
                                <div class="card-extra">
                                    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#Add_NewFAQ">+ Add New FAQ Category</button>
                                </div>
                            </div>
							<?php echo $this->session->flashdata('msg');
							   if(isset($_SESSION['msg'])){
								unset($_SESSION['msg']);
								}
							  ?>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered subscription-plans-list" id="tblUser">
                                        <thead>
                                            <tr>
                                                <th scope="col">Sr No.</th>
                                                <th scope="col">Category Name</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php if($faq_category){ foreach($faq_category as $key => $value){?>
                                            <tr>
                                                <td><?php echo $key+1;?></td>
                                                <td><?php echo $value['name'];?></td>
                                                <td><?php echo $value['status']==1?"Enabled":"Disabled";?></td>
                                                <td>
                                                    <div class="atbd-button-list d-flex flex-wrap">
                                                        <button class="btn btn-icon btn-primary btn-squared" title="Edit" data-toggle="modal" data-target="#Edit_FAQ<?php echo $key+1;?>"><i class="la la-edit mr-0"></i></button>
														<a href="<?php echo base_url(); ?>superadmin/deletefaq_category/<?php echo $value['id'];?>" onclick="return confirm('Are you sure. You want to delete this ?')"><button class="btn btn-icon btn-danger btn-squared" title="Delete" ><i class="la la-trash mr-0"></i></button></a>
													</div>
                                                </td>
                                            </tr>
											
											<div class="modal-basic modal fade show" id="Edit_FAQ<?php echo $key+1;?>" tabindex="-1" role="dialog" aria-hidden="true">
											<div class="modal-dialog modal-md" role="document">
												<div class="modal-content modal-bg-white ">
													<div class="modal-header">
														<h6 class="modal-title">Edit FAQ Category </h6>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span data-feather="x"></span></button>
													</div>
													<div class="modal-body">
														<div class="horizontal-form">
															<form action="<?php echo base_url(); ?>superadmin/editfaqCategories/<?php echo $value['id'];?>" method="post" id="faqForm" enctype="multipart/form-data">
																<div class="form-group row">
																	<div class="col-sm-2 d-flex aling-items-center">
																		<label class=" col-form-label align-center">Name:<span class="text-danger">*</span></label>
																	</div>
																	<div class="col-sm-10">
																		<input type="text" name="name" class="form-control ih-medium ip-light radius-xs b-light px-15" placeholder="Enter Name" value="<?php echo $value['name'];?>">
																	</div>
																</div>
																<div class="form-group row">
																	<div class="col-sm-2 d-flex aling-items-center">
																		<label class=" col-form-label align-center">Status:<span class="text-danger">*</span></label>
																	</div>
																	<div class="col-sm-10">
																		<div class="custom-radio1 form-check-inline mt-2">
																			<input class="radio" type="radio" style="margin-bottom:9px;margin-right:6px;min-width:18px;min-height:18px;" name="radio_default" value="1" id="radio-un21" <?php echo ($value['status']==1) ?  "checked": "" ; ?>>
																			<label for="radio-un21">
																					<span class="radio-text">Enabled</span>
																				</label>
																		</div>


																		<div class="custom-radio1 form-check-inline mt-2">
																			<input class="radio" type="radio" name="radio_default" style="margin-bottom:9px;margin-right:6px;min-width:18px;min-height:18px;" value="0" id="radio-un41" <?php echo ($value['status']==0) ?  "checked": "" ; ?>>
																			<label for="radio-un41">
																					<span class="radio-text">Disabled</span>
																				</label>
																		</div>
																	</div>
																	
																</div>
																<div class="layout-button mt-25 d-flex justify-content-center">
																	<button type="submit" class="btn btn-primary btn-sm btn-default btn-squared px-30">Update</button>
																</div>
															</form>
														</div>
													</div>
												</div>
											</div>


										</div>
																				
											
										<?php } } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!--<nav class="atbd-page d-flex justify-content-between ">
                                    <div class="paging-option">
                                        <select name="page-number" class="page-selection form-control px-15">
                                            <option value="20">20/page</option>
                                            <option value="40">40/page</option>
                                            <option value="60">60/page</option>
                                        </select>
                                    </div>
                                    <ul class="atbd-pagination d-flex">
                                        <li class="atbd-pagination__item">
                                            <a href="#" class="atbd-pagination__link pagination-control"><span class="la la-angle-left"></span></a>
                                            <a href="#" class="atbd-pagination__link"><span class="page-number">1</span></a>
                                            <a href="#" class="atbd-pagination__link active"><span class="page-number">2</span></a>
                                            <a href="#" class="atbd-pagination__link"><span class="page-number">3</span></a>
                                            <a href="#" class="atbd-pagination__link pagination-control"><span class="page-number">...</span></a>
                                            <a href="#" class="atbd-pagination__link"><span class="page-number">12</span></a>
                                            <a href="#" class="atbd-pagination__link pagination-control"><span class="la la-angle-right"></span></a>
                                            <a href="#" class="atbd-pagination__option">
                                            </a>
                                        </li>
                                    </ul>
                                </nav>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
    <div class="modal-basic modal fade show" id="Add_NewFAQ" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content modal-bg-white ">
                <div class="modal-header">
                    <h6 class="modal-title">Add FAQ Category</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span data-feather="x"></span></button>
                </div>
                <div class="modal-body">
                    <div class="horizontal-form">
                        <form action="<?php echo base_url(); ?>superadmin/addfaqCategories" method="post" id="faqForm" enctype="multipart/form-data">
                            <div class="form-group row">
                                <div class="col-sm-2 d-flex aling-items-center">
                                    <label class=" col-form-label align-center">Name:<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control ih-medium ip-light radius-xs b-light px-15" placeholder="Enter Name" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 d-flex aling-items-center">
                                    <label class=" col-form-label align-center">Status:<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-10">
                                    <div class="custom-radio form-check-inline mt-2">
                                        <input class="radio" type="radio" name="radio_default" value=1 id="radio-un2">
                                        <label for="radio-un2">
                                                <span class="radio-text">Enabled</span>
                                            </label>
                                    </div>


                                    <div class="custom-radio form-check-inline mt-2">
                                        <input class="radio" type="radio" name="radio_default" value=0 id="radio-un4">
                                        <label for="radio-un4">
                                                <span class="radio-text">Disabled</span>
                                            </label>
                                    </div>
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

   <?php include('include/footer.php'); ?>       
   