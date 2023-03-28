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
                                        <span>Email Templates</span>
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
                                <h5>Email Templates List</h5>
								<div class="card-extra">
                                    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#Add_NewCompany">+ Add New Email Template</button>
                                </div>
                            </div>
							
								
								<div class="modal-basic modal fade show" id="Add_NewCompany" tabindex="-1" role="dialog" aria-hidden="true">
									<div class="modal-dialog modal-md" role="document">
										<div class="modal-content modal-bg-white ">
											<div class="modal-header">
												<h6 class="modal-title">Add New Email Template</h6>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span data-feather="x"></span></button>
											</div>
											
											<div class="modal-body">
												<div class="horizontal-form">
													<form action="<?php echo base_url(); ?>superadmin/addemailtemplate" method="post" id="faqForm" enctype="multipart/form-data">
														<div class="form-group row">
																			<div class="col-sm-2 d-flex aling-items-center">
																				<label class=" col-form-label align-center">Template Name:<span class="text-danger">*</span></label>
																			</div>
																			<div class="col-sm-10">
																				<input type="text" name="template_name" required class="form-control ih-medium ip-light radius-xs b-light px-15"  placeholder="Template Name" value="<?php echo $value['template_name'];?>">
																			</div>
																		</div>
																		<div class="form-group row">
																			<div class="col-sm-2 d-flex aling-items-center">
																				<label class=" col-form-label align-center">Subject:<span class="text-danger">*</span></label>
																			</div>
																			<div class="col-sm-10">
																				<input type="text" name="subject" required class="form-control ih-medium ip-light radius-xs b-light px-15" placeholder="License Expired " value="<?php echo $value['subject'];?>">
																			</div>
																		</div>
																		<div class="form-group row">
																			<div class="col-sm-2 d-flex aling-items-center">
																				<label class=" col-form-label align-center">Description:<span class="text-danger">*</span></label>
																			</div>
																			<div class="col-sm-10">
																				<textarea name="description" required id="summernote" cols="30" rows="10"><?php echo $value['description'];?></textarea>
																			</div>
																		</div>
																		<div class="form-group row">
																			<div class="col-sm-2 d-flex aling-items-center">
																				<label class=" col-form-label align-center">VARIABLES USED:<span class="text-danger">*</span></label>
																			</div>
																			<div class="col-sm-10">
																			<input type="text" name="varialbles" value="<?php echo $value['varialbles'];?>" class="form-control ih-medium ip-light radius-xs b-light px-15" placeholder="##PRODUCT## | ##INVOICE_NUMBER## | ##AMOUNT## | ##DATE_GENERATED## | ##DUE_DATE##" value="">
																				
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
												<th scope="col">Sr No</th>
                                                <th scope="col">Template Name</th>
                                                <th scope="col">Subject</th>
                                                <th scope="col"> Text</th>
                                                <th scope="col" width="100px">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php if($email_templates){ foreach($email_templates as $key => $value){?>
                                            <tr>
												<td><?php echo $key+1;?></td>
                                                <td><?php echo $value['template_name'];?></td>
                                                <td><?php echo $value['subject'];?></td>
                                                <td>
                                                    <p><?php echo $value['description'];?></p>
                                                </td>
                                                <td>
                                                    <div class="atbd-button-list d-flex flex-wrap">
                                                        <button class="btn btn-icon btn-primary btn-squared" title="Edit" data-toggle="modal" data-target="#Edit_EmailTemplate<?php echo $key+1;?>"><i class="la la-edit mr-0"></i></button>
														<a onclick="return confirm('Are you sure want to delete this template?')" href="<?php echo base_url() ?>superadmin/delete_email_template/<?php echo $value['id']; ?>"><button class="btn btn-icon btn-danger btn-squared" title="Delete" ><i class="la la-trash mr-0"></i></button></a>
														</div>
                                                </td>
                                            </tr>
                                            
											<div class="modal-basic modal fade show" id="Edit_EmailTemplate<?php echo $key+1;?>" tabindex="-1" role="dialog" aria-hidden="true">
													<div class="modal-dialog modal-md" role="document">
														<div class="modal-content modal-bg-white ">
															<div class="modal-header">
																<h6 class="modal-title">Edit Email Template</h6>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																	<span data-feather="x"></span></button>
															</div>
															<div class="modal-body">
																<div class="horizontal-form">
																	<form action="<?php echo base_url(); ?>superadmin/editemailtemplate/<?php echo $value['id'];?>" method="post" id="faqForm" enctype="multipart/form-data">
																		<div class="form-group row">
																			<div class="col-sm-2 d-flex aling-items-center">
																				<label class=" col-form-label align-center">Template Name:<span class="text-danger">*</span></label>
																			</div>
																			<div class="col-sm-10">
																				<input type="text" name="template_name" required class="form-control ih-medium ip-light radius-xs b-light px-15"  placeholder="Template Name" value="<?php echo $value['template_name'];?>">
																			</div>
																		</div>
																		<div class="form-group row">
																			<div class="col-sm-2 d-flex aling-items-center">
																				<label class=" col-form-label align-center">Subject:<span class="text-danger">*</span></label>
																			</div>
																			<div class="col-sm-10">
																				<input type="text" name="subject" required class="form-control ih-medium ip-light radius-xs b-light px-15" placeholder="License Expired " value="<?php echo $value['subject'];?>">
																			</div>
																		</div>
																		<div class="form-group row">
																			<div class="col-sm-2 d-flex aling-items-center">
																				<label class=" col-form-label align-center">Description:<span class="text-danger">*</span></label>
																			</div>
																			<div class="col-sm-10">
																				<textarea name="description" required  id="summernote" cols="30" rows="10"><?php echo $value['description'];?></textarea>
																			</div>
																		</div>
																		<div class="form-group row">
																			<div class="col-sm-2 d-flex aling-items-center">
																				<label class=" col-form-label align-center">VARIABLES USED:<span class="text-danger">*</span></label>
																			</div>
																			<div class="col-sm-10">
																			<input type="text" name="varialbles" value="<?php echo $value['varialbles'];?>" class="form-control ih-medium ip-light radius-xs b-light px-15" placeholder="##PRODUCT## | ##INVOICE_NUMBER## | ##AMOUNT## | ##DATE_GENERATED## | ##DUE_DATE##" value="">
																				
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

                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
    

   

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css" />

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

    <script>
        $('#summernote').summernote({
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['height', ['height']]
            ]
        });
		
		function loadPage1(){
			var pag=$('#pp').val();
			$.ajax({
			url: '<?=base_url()?>superadmin/email_templates/'+pag,
			type: 'post',
			success: function(response){
				console.log(response);
				//location.reload();
			 }
			});
		}
    </script>
<?php include('include/footer.php'); ?>       