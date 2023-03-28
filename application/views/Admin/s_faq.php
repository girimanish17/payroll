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
                                        <span>FAQ</span>
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
                                <h5>FAQ List</h5>
                                <div class="card-extra">
                                    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#Add_NewFAQ">+ Add New FAQ</button>
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
                                                <th scope="col">Category</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">Content</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php if($faq){ foreach($faq as $key => $value){
											$faq_categorys = $this->common_model->GetSingleData('faq_category',array('id'=>$value['category_id']));
											?>
                                            <tr>
                                                <td><?php echo $key+1;?></td>
                                                <td><?php echo $faq_categorys['name'];?></td>
                                                <td><?php echo $value['title'];?></td>
                                                <td><?php echo $value['content'];?></td>
                                                <td>
                                                    <div class="atbd-button-list d-flex flex-wrap">
                                                        <button class="btn btn-icon btn-primary btn-squared" title="Edit" data-toggle="modal" data-target="#Edit_FAQ<?php echo $key+1;?>"><i class="la la-edit mr-0"></i></button>
														<a href="<?php echo base_url(); ?>superadmin/deletefaq/<?php echo $value['id'];?>" onclick="return confirm('Are you sure. You want to delete this ?')"><button class="btn btn-icon btn-danger btn-squared" title="Delete" ><i class="la la-trash mr-0"></i></button></a>
													</div>
                                                </td>
                                            </tr>
											<div class="modal-basic modal fade show" id="Edit_FAQ<?php echo $key+1;?>" tabindex="-1" role="dialog" aria-hidden="true">
												<div class="modal-dialog modal-md" role="document">
													<div class="modal-content modal-bg-white ">
														<div class="modal-header">
															<h6 class="modal-title">Edit FAQ</h6>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span data-feather="x"></span></button>
														</div>
														<div class="modal-body">
															<div class="horizontal-form">
																<form action="<?php echo base_url(); ?>superadmin/editfaq/<?php echo $value['id'];?>" method="post" id="faqForm" enctype="multipart/form-data">
																	<div class="form-group row">
																		<div class="col-sm-2 d-flex aling-items-center">
																			<label class=" col-form-label align-center">Category:<span class="text-danger">*</span></label>
																		</div>
																		<div class="col-sm-10">
																			<select class="form-control px-15" id="exampleFormControlSelect1" name="category_id" required>
																				<option value=''>Select Category</option>
																				<?php if($faq_category){ foreach($faq_category as $value3){?>
																					<option value="<?php echo $value3['id'];?>" <?php if($value3['id'] == $value['category_id']){ echo "selected";}?>><?php echo $value3['name'];?></option>
																				<?php }} ?>
																				
																			</select>
																		</div>
																	</div>
																	<div class="form-group row">
																		<div class="col-sm-2 d-flex aling-items-center">
																			<label class=" col-form-label align-center">Title:<span class="text-danger">*</span></label>
																		</div>
																		<div class="col-sm-10">
																			<input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15"  name="title" required placeholder="Enter " value="<?php echo $value['title'];?>">
																		</div>
																	</div>
																	<div class="form-group row">
																		<div class="col-sm-2 d-flex aling-items-center">
																			<label class=" col-form-label align-center">Content:<span class="text-danger">*</span></label>
																		</div>
																		<div class="col-sm-10">
																			<textarea class="form-control"  name="content" required id="exampleFormControlTextarea1" rows="3"><?php echo $value['content'];?></textarea>
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
                    <h6 class="modal-title">Add FAQ</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span data-feather="x"></span></button>
                </div>
                <div class="modal-body">
                    <div class="horizontal-form">
                        <form action="<?php echo base_url(); ?>superadmin/addfaq" method="post" id="faqForm" enctype="multipart/form-data">
                            <div class="form-group row">
                                <div class="col-sm-2 d-flex aling-items-center">
                                    <label class=" col-form-label align-center">Category:<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-10">
                                    <select class="form-control px-15" id="skillsOption" name="category_id" required>
									<option value=''>Select Category</option>
                                        <?php if($faq_category){ foreach($faq_category as $key1=>$value1){?>
										<option value="<?php echo $value1['id'];?>"><?php echo $value1['name'];?></option>
										<?php }} ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 d-flex aling-items-center">
                                    <label class=" col-form-label align-center">Title:<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" name="title" class="form-control ih-medium ip-light radius-xs b-light px-15" placeholder="Enter " value="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 d-flex aling-items-center">
                                    <label class=" col-form-label align-center">Content:<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3" required></textarea>
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

    <div class="modal-basic modal fade show" id="Edit_FAQ" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content modal-bg-white ">
                <div class="modal-header">
                    <h6 class="modal-title">Edit FAQ</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span data-feather="x"></span></button>
                </div>
                <div class="modal-body">
                    <div class="horizontal-form">
                        <form action="#">
                            <div class="form-group row">
                                <div class="col-sm-2 d-flex aling-items-center">
                                    <label class=" col-form-label align-center">Category:<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-10">
                                    <select class="form-control px-15" id="exampleFormControlSelect1">
                                        <option>Select1</option>
                                        <option selected>Select2</option>
                                        <option>Select3</option>
                                        <option>Select4</option>
                                        <option>Select5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 d-flex aling-items-center">
                                    <label class=" col-form-label align-center">Title:<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" placeholder="Enter " value="------">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 d-flex aling-items-center">
                                    <label class=" col-form-label align-center">Content:<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="layout-button mt-25 d-flex justify-content-center">
                                <button type="button" class="btn btn-primary btn-sm btn-default btn-squared px-30">Submit</button>
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