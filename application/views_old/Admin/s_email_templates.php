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
                                                <th scope="col">Email Id</th>
                                                <th scope="col">Subject</th>
                                                <th scope="col"> Text</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php if($email_templates){ foreach($email_templates as $key => $value){?>
                                            <tr>
                                                <td><?php echo $value['template_name'];?></td>
                                                <td><?php echo $value['subject'];?></td>
                                                <td>
                                                    <p><?php echo $value['description'];?></p>
                                                </td>
                                                <td>
                                                    <div class="atbd-button-list d-flex flex-wrap">
                                                        <button class="btn btn-icon btn-primary btn-squared" title="Edit" data-toggle="modal" data-target="#Edit_EmailTemplate<?php echo $key+1;?>"><i class="la la-edit mr-0"></i></button>
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
																				<input type="text" name="template_name" class="form-control ih-medium ip-light radius-xs b-light px-15"  placeholder="Template Name" value="<?php echo $value['template_name'];?>">
																			</div>
																		</div>
																		<div class="form-group row">
																			<div class="col-sm-2 d-flex aling-items-center">
																				<label class=" col-form-label align-center">Subject:<span class="text-danger">*</span></label>
																			</div>
																			<div class="col-sm-10">
																				<input type="text" name="subject" class="form-control ih-medium ip-light radius-xs b-light px-15" placeholder="License Expired " value="<?php echo $value['subject'];?>">
																			</div>
																		</div>
																		<div class="form-group row">
																			<div class="col-sm-2 d-flex aling-items-center">
																				<label class=" col-form-label align-center">Description:<span class="text-danger">*</span></label>
																			</div>
																			<div class="col-sm-10">
																				<textarea name="description"  id="summernote" cols="30" rows="10"><?php echo $value['description'];?></textarea>
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

                                <!--<nav class="atbd-page d-flex justify-content-between ">
                                    <div class="paging-option">
                                        <select name="page-number" onchange="loadPage(this.value)" id="pp" class="page-selection form-control px-15">
                                            <option value="1">20/page</option>
                                            <option value="2">40/page</option>
                                            <option value="60">60/page</option>
                                        </select>
                                    </div>
									<?php if($links){;?>
                                    <ul class="atbd-pagination d-flex">
									<span class="page-number">
                                        <?php echo $links;?></span>
                                    </ul>
									<?php }else{?>
									<ul class="atbd-pagination d-flex">
                                        <li class="atbd-pagination__item">
                                            <a href="#" class="atbd-pagination__link pagination-control"><span class="la la-angle-left"></span></a>
                                            <a href="<?php base_url('superadmin/email_templates')?>" class="atbd-pagination__link"><span class="page-number">1</span></a>
                                            <a href="#" class="atbd-pagination__link pagination-control"><span class="la la-angle-right"></span></a>
                                            <a href="#" class="atbd-pagination__option">
                                            </a>
                                        </li>
                                    </ul>
									<?php }?>
                                </nav>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
    

    <div class="modal-basic modal fade show" id="modal-delete" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title">Confirmation</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span data-feather="x"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure .You want to <strong>delete</strong> this Features ?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger btn-sm">Delete</button>
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