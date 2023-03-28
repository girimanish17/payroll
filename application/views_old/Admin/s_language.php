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
                                        <span>Settings</span>
                                        <span class="breadcrumb__seperator">
                                            <span class="la la-slash"></span>
                                        </span>
                                    </li>
                                    <li class="atbd-breadcrumb__item">
                                        <span>Language</span>
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
                                <h5>Language List</h5>
                                <div class="card-extra">
                                    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#Add_NewLanguage">+ Add New Language</button>
                                </div>
								
                            </div>
							<?php echo $this->session->flashdata('msg');
													   if(isset($_SESSION['msg'])){
														unset($_SESSION['msg']);
														}
													  ?>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="tblUser">
                                        <thead>
										
                                            <tr>
                                                <th scope="col">Sr No.</th>
                                                <th scope="col"> Locale </th>
                                                <th scope="col"> Language </th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php if($language){ foreach($language as $key => $value){?>
                                            <tr>
                                                <td><?php echo $key+1;?></td>
                                                <td><?php echo $value['locale'];?></td>
                                                <td><?php echo $value['language'];?></td>
												<td><?php if($value['status']==1){ ?><span class="badge badge-success rounded-pill">Active</span>
													<?php }else{?> <span class="badge badge-danger rounded-pill">In-Active</span><?php } ?>
												</td>
                                               
                                                <td>
                                                    <div class="atbd-button-list d-flex flex-wrap">
                                                        <button class="btn btn-icon btn-primary btn-squared" data-toggle="modal" data-target="#Edit_NewLanguage<?php echo $key+1;?>"><i class="la la-edit mr-0"></i></button>
                                                        <!--<button class="btn btn-icon btn-danger btn-squared" title="Delete" data-toggle="modal" data-target="#modal-delete"><i class="la la-trash mr-0"></i></button>-->
														<a onclick="return confirm('Are you sure want to delete this language?');" href="<?php echo base_url(); ?>superadmin/deleteLanguage/<?php echo $value['id']; ?>"><button class="btn btn-icon btn-danger btn-squared" title="Delete" data-toggle="modal" ><i class="la la-trash mr-0"></i></button></a>
                                            
                                                    </div>
                                                </td>
                                            </tr>
                                             <div class="modal-basic modal fade show" id="Edit_NewLanguage<?php echo $key+1;?>" tabindex="-1" role="dialog" aria-hidden="true">
												<div class="modal-dialog modal-md" role="document">
													<div class="modal-content modal-bg-white ">
														<div class="modal-header">
															<h6 class="modal-title">Edit Language</h6>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span data-feather="x"></span></button>
														</div>
														<div class="modal-body">
															<div class="horizontal-form">
																<form action="<?php echo base_url(); ?>superadmin/editLanguages/<?php echo $value['id'];?>" method="post" id="faqForm" enctype="multipart/form-data">
																	<div class="form-group row">
																		<div class="col-sm-3 d-flex aling-items-center">
																			<label class=" col-form-label align-center">Locale:<span class="text-danger">*</span></label>
																		</div>
																		<div class="col-sm-9">
																			<input type="text" name="locale" class="form-control ih-medium ip-light radius-xs b-light px-15" placeholder="Enter Locale" value="<?php echo $value['locale'];?>">
																		</div>
																	</div>
																	<div class="form-group row">
																		<div class="col-sm-3 d-flex aling-items-center">
																			<label class=" col-form-label align-center">Language:<span class="text-danger">*</span></label>
																		</div>
																		<div class="col-sm-9">
																			<input type="text" name="language" class="form-control ih-medium ip-light radius-xs b-light px-15" placeholder="Enter Language" value="<?php echo $value['language'];?>">
																		</div>
																	</div>
																	<div class="form-group row">
																		<div class="col-sm-3 d-flex aling-items-center">
																			<label class=" col-form-label align-center">Status: <span class="text-danger">*</span></label>
																		</div>
																		
																		<div class="col-sm-9">
																			<div class="custom-radio1 form-check-inline mt-2">
																			<input class="radio" type="radio" style="margin-bottom:9px;margin-right:6px;min-width:18px;min-height:18px;" name="radio_default" value="1" id="radio-un21" <?php echo ($value['status']==1) ?  "checked": "" ; ?>>
																			<label for="radio-un21">
																					<span class="radio-text">Active</span>
																				</label>
																			</div>


																		<div class="custom-radio1 form-check-inline mt-2">
																			<input class="radio" type="radio" name="radio_default" style="margin-bottom:9px;margin-right:6px;min-width:18px;min-height:18px;" value="0" id="radio-un41" <?php echo ($value['status']==0) ?  "checked": "" ; ?>>
																			<label for="radio-un41">
																					<span class="radio-text">In-Active</span>
																				</label>
																		</div>
																		</div>
																	</div>

																	<div class="layout-button mt-25 d-flex justify-content-center">
																		<button type="submit" class="btn btn-primary btn-sm btn-default btn-squared px-30"><i class="la la-check"></i>Update</button>
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
                                <nav class="atbd-page d-flex justify-content-between ">

                                    <div class="paging-option">
                                        <!--<select name="page-number" class="page-selection form-control px-15">
                                            <option value="20">20/page</option>
                                            <option value="40">40/page</option>
                                            <option value="60">60/page</option>
                                        </select>-->
                                    </div>
                                    <!--<?php if($links){;?>
                                    <ul class="atbd-pagination d-flex">
									<span class="page-number">
                                        <?php echo $links;?></span>
                                    </ul>
									<?php }else{?>
									<ul class="atbd-pagination d-flex">
                                        <li class="atbd-pagination__item">
                                            <a href="#" class="atbd-pagination__link pagination-control"><span class="la la-angle-left"></span></a>
                                            <a href="<?php base_url('superadmin/language')?>" class="atbd-pagination__link"><span class="page-number">1</span></a>
                                            <a href="#" class="atbd-pagination__link pagination-control"><span class="la la-angle-right"></span></a>
                                            <a href="#" class="atbd-pagination__option"></a>
                                        </li>
                                    </ul>
									<?php }?>-->
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
    <div class="modal-basic modal fade show" id="modal-delete" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title">Confirmation</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span data-feather="x"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure .You want to <strong>delete</strong>?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger btn-sm">Delete</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-basic modal fade show" id="Add_NewLanguage" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content modal-bg-white ">
                <div class="modal-header">
                    <h6 class="modal-title">Add New Language</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span data-feather="x"></span></button>
                </div>
                <div class="modal-body">
                    <div class="horizontal-form">
                        <form action="<?php echo base_url(); ?>superadmin/addLanguage" method="post" id="faqForm" enctype="multipart/form-data">
                            <div class="form-group row">
                                <div class="col-sm-3 d-flex aling-items-center">
                                    <label class=" col-form-label align-center">Locale:<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" name="locale" class="form-control ih-medium ip-light radius-xs b-light px-15" placeholder="Enter Locale" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3 d-flex aling-items-center">
                                    <label class=" col-form-label align-center">Language:<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" name="language" class="form-control ih-medium ip-light radius-xs b-light px-15" placeholder="Enter Language" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3 d-flex aling-items-center">
                                    <label class=" col-form-label align-center">Status: <span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-9">
                                    <div class="custom-radio form-check-inline mt-2">
                                        <input class="radio" type="radio" name="radio_default" value=1 id="radio-un11">
                                        <label for="radio-un11">
                                                <span class="radio-text">Active</span>
                                            </label>
                                    </div>


                                    <div class="custom-radio form-check-inline mt-2">
                                        <input class="radio" type="radio" name="radio_default" value=0 id="radio-un22">
                                        <label for="radio-un22">
                                                <span class="radio-text">In-Active</span>
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
   


    <script>
        imgInp.onchange = evt => {
            const [file] = imgInp.files
            if (file) {
                blah.src = URL.createObjectURL(file)
            }
        }
    </script>
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