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
                                        <span>Subscription Plans</span>
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
                                <h5>Subscription Plans</h5>
                                <div class="card-extra">
                                    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#Add_NewCompany">+ Add New Plan</button>
                                </div> </div>
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
                                                <th scope="col">Plan Name</th>
                                                <th scope="col">Stripe Id</th>
                                                <th scope="col">User Count</th>
                                                <th scope="col">Price (USD)</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php if($subscription_plans){ foreach($subscription_plans as $key => $value){?>
                                            <tr>
                                                <td><?php echo $key+1;?></td>
                                                <td><?php echo $value['name'];?></td>
                                                <td>
                                                    <ul>
                                                        <li><i class="fa fa-check text-danger"></i> Monthly - <?php echo $value['s_monthly_id'];?></li>
                                                        <li><i class="fa fa-check text-danger"></i> Annual - <?php echo $value['s_annual_id'];?></li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <ul>
                                                        <li><i class="fa fa-check text-danger"></i> Start Users - <?php echo $value['start_user'];?></li>
                                                        <li><i class="fa fa-check text-danger"></i> End Users - <?php echo $value['end_user'];?></li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <ul>
                                                        <li><i class="fa fa-check text-danger"></i> Monthly - <?php echo $value['monthly_price'];?></li>
                                                        <li><i class="fa fa-check text-danger"></i> Annual - <?php echo $value['annual_price'];?></li>
                                                    </ul>
                                                </td>
                                                <td><?php if($value['status']==1){ ?><span class="badge badge-success rounded-pill">Enabled</span>
													<?php }else{?> <span class="badge badge-danger rounded-pill">Disabled</span><?php } ?>
												</td>
                                                <td>
                                                    <div class="atbd-button-list d-flex flex-wrap">
                                                        <button class="btn btn-icon btn-primary btn-squared" title="Edit" data-toggle="modal" data-target="#modal-Edit<?php echo $key+1;?>"><i class="la la-edit mr-0"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
											 <div class="modal-basic modal fade show" id="modal-Edit<?php echo $key+1;?>" tabindex="-1" role="dialog" aria-hidden="true">
													<div class="modal-dialog modal-md" role="document">
														<div class="modal-content modal-bg-white ">
															<div class="modal-header">
																<h6 class="modal-title">Edit Plans</h6>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																	<span data-feather="x"></span></button>
															</div>
															<div class="modal-body">
																<div class="horizontal-form">
																	<form action="<?php echo base_url(); ?>superadmin/editNewPlans/<?php echo $value['id'];?>" method="post" id="faqForm" enctype="multipart/form-data">
																		<div class="form-group row">
																			<div class="col-sm-2 d-flex aling-items-center">
																				<label class=" col-form-label align-center">Name:<span class="text-danger">*</span></label>
																			</div>
																			<div class="col-sm-10">
																				<input type="text" name="name"  class="form-control ih-medium ip-light radius-xs b-light px-15" placeholder="Enter Name" value="<?php echo $value['name'];?>">
																			</div>
																		</div>
																		<div class="form-group row">
																			<div class="col-sm-2 d-flex aling-items-center">
																				<label class=" col-form-label align-center">Stripe Id:<span class="text-danger">*</span></label>
																			</div>
																			<div class="col-sm-5">
																				<input type="text" name="s_monthly_id" class="form-control ih-medium ip-light radius-xs b-light px-15" placeholder="Monthly id" value="<?php echo $value['s_monthly_id'];?>">
																			</div>
																			<div class="col-sm-5">
																				<input type="text" name="s_annual_id" class="form-control ih-medium ip-light radius-xs b-light px-15" placeholder="Annual id" value="<?php echo $value['s_annual_id'];?>">
																			</div>
																		</div>
																		<div class="form-group row">
																			<div class="col-sm-2 d-flex aling-items-center">
																				<label class=" col-form-label align-center">Price:<span class="text-danger">*</span></label>
																			</div>
																			<div class="col-sm-5">
																				<input type="text" name="monthly_price" class="form-control ih-medium ip-light radius-xs b-light px-15" placeholder="Monthly Price" value="<?php echo $value['monthly_price'];?>">
																			</div>
																			<div class="col-sm-5">
																				<input type="text" name="annual_price" class="form-control ih-medium ip-light radius-xs b-light px-15" placeholder="Annual Price" value="<?php echo $value['annual_price'];?>">
																			</div>
																		</div>
																		<div class="form-group row">
																			<div class="col-sm-2 d-flex aling-items-center">
																				<label class="col-form-label align-center"  >Start User: <span class="text-danger">*</span></label>
																			</div>
																			<div class="col-sm-10">
																				<input type="text" name="start_user" class="form-control ih-medium ip-light radius-xs b-light px-15" placeholder="Start User" value="<?php echo $value['start_user'];?>">
																			</div>
																		</div>
																		<div class="form-group row">
																			<div class="col-sm-2 d-flex aling-items-center">
																				<label class=" col-form-label align-center">End User: <span class="text-danger">*</span></label>
																			</div>
																			<div class="col-sm-10">
																				<input type="text" name="end_user" class="form-control ih-medium ip-light radius-xs b-light px-15" placeholder="End User" value="<?php echo $value['end_user'];?>">
																			</div>
																		</div>
																		<div class="form-group row">
																			<div class="col-sm-2 d-flex aling-items-center">
																				<label class=" col-form-label align-center">Comment: <span class="text-danger">*</span></label>
																			</div>
																			<div class="col-sm-10">
																				<textarea class="form-control ih-medium ip-light radius-xs b-light px-15" name="comment" rows="3" placeholder="Comment"><?php echo $value['comment'];?></textarea>
																			</div>
																		</div>
																		<div class="form-group row">
																			<div class="col-sm-2 d-flex aling-items-center">
																				<label class=" col-form-label align-center">Status: <span class="text-danger">*</span></label>
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
																			<button type="submit" class="btn btn-primary btn-sm btn-default btn-squared px-30"><i class="fa fa-check"></i>Update</button>
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
                                            <a href="<?php base_url('superadmin/subscription_plans')?>" class="atbd-pagination__link"><span class="page-number">1</span></a>
                                            <a href="#" class="atbd-pagination__link pagination-control"><span class="la la-angle-right"></span></a>
                                            <a href="#" class="atbd-pagination__option">
                                            </a>
                                        </li>
                                    </ul>
									<?php }?>-->
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

    <div class="modal-basic modal fade show" id="Add_NewCompany" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content modal-bg-white ">
                <div class="modal-header">
                    <h6 class="modal-title">Add New Plans</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span data-feather="x"></span></button>
                </div>
				
                <div class="modal-body">
                    <div class="horizontal-form">
                        <form action="<?php echo base_url(); ?>superadmin/addNewPlans" method="post" id="faqForm" enctype="multipart/form-data">
                            <div class="form-group row">
                                <div class="col-sm-2 d-flex aling-items-center">
                                    <label class=" col-form-label align-center">Name:<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control ih-medium ip-light radius-xs b-light px-15" placeholder="Enter Name" value="<?php  echo set_value('name'); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 d-flex aling-items-center">
                                    <label class=" col-form-label align-center">Stripe Id:<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-5">
                                    <input type="text" name="s_monthly_id" class="form-control ih-medium ip-light radius-xs b-light px-15" placeholder="Monthly id" value="<?php  echo set_value('s_monthly_id'); ?>">
                                </div>
                                <div class="col-sm-5">
                                    <input type="text" name="s_annual_id" class="form-control ih-medium ip-light radius-xs b-light px-15" placeholder="Annual id" value="<?php  echo set_value('s_annual_id'); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 d-flex aling-items-center">
                                    <label class=" col-form-label align-center">Price:<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-5">
                                    <input type="text" name="monthly_price" class="form-control ih-medium ip-light radius-xs b-light px-15" placeholder="Monthly Price" value="<?php  echo set_value('monthly_price'); ?>">
                                </div>
                                <div class="col-sm-5">
                                    <input type="text" name="annual_price" class="form-control ih-medium ip-light radius-xs b-light px-15" placeholder="Annual Price" value="<?php  echo set_value('annual_price'); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 d-flex aling-items-center">
                                    <label class=" col-form-label align-center">Start User: <span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" name="start_user" class="form-control ih-medium ip-light radius-xs b-light px-15" placeholder="Start User" value="<?php  echo set_value('start_user'); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 d-flex aling-items-center">
                                    <label class=" col-form-label align-center">End User: <span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" name="end_user" class="form-control ih-medium ip-light radius-xs b-light px-15" placeholder="End User" value="<?php  echo set_value('end_user'); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 d-flex aling-items-center">
                                    <label class=" col-form-label align-center">Comment: <span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-10">
								<textarea class="form-control ih-medium ip-light radius-xs b-light px-15" name="comment" rows="3" placeholder="Comment"><?php  echo set_value('comment'); ?></textarea>
                                    <!--<input type="text" name="status" class="form-control ih-medium ip-light radius-xs b-light px-15" placeholder="Comment">-->
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 d-flex aling-items-center">
                                    <label class=" col-form-label align-center">Status: <span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-10">
                                    <div class="custom-radio form-check-inline mt-2">
                                        <input class="radio" type="radio" name="radio_default" value=1 id="radio-un2"  <?php if(set_value('radio_default')==1){ echo "selected"; } ?>>
                                        <label for="radio-un2">
                                                <span class="radio-text">Enabled</span>
                                            </label>
                                    </div>


                                    <div class="custom-radio form-check-inline mt-2">
                                        <input class="radio" type="radio" name="radio_default" value=0 id="radio-un4" <?php if(set_value('radio_default')==0){ echo "selected"; } ?>>
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
        imgInp.onchange = evt => {
            const [file] = imgInp.files
            if (file) {
                blah.src = URL.createObjectURL(file)
            }
        }
    </script>
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
      
  