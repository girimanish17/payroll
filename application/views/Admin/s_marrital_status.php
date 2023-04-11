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
								<span>Marrital Status</span>
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
						<h5>Marrital Status List</h5>
						<div class="card-extra">
							<button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#Add_NewCompany">+ Add New Marrital Status</button>
						</div>
					</div>
					<?php echo $this->session->flashdata('msg');
												   if(isset($_SESSION['msg'])){
													unset($_SESSION['msg']);
													}
												  ?>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered table-social" id="tblUser">
								<thead>
									<tr>
										<th scope="col">ID</th>
										<th scope="col">Marrital Status</th>
										<th scope="col">Created On</th>
										<th scope="col">Status</th>
										<th scope="col">Action</th>
									</tr>
								</thead>
								<tbody>
								<?php $i = 1;if($marrital_status){ foreach($marrital_status as $key => $value){
									//$package = $this->common_model->GetSingleData('packages',array('id'=>$value['package_id']));
									//$admins = $this->common_model->GetSingleData('users',array('user_id'=>$value['admin_id']));
									?>
									<tr>
										<td><?php echo $i;?></td>
										<td><?php echo $value['description'];?></td>
										<td><?php echo date('d M Y',strtotime($value['created_date']));?></td>
										<td><?php echo $value['status']=='1'?"<span class='badge badge-success rounded-pill'>Active":"<span class='badge badge-danger rounded-pill'>Inactive";?></span></td>
										<td>
											<div class="atbd-button-list d-flex flex-wrap">
											   <button class="btn btn-icon btn-success btn-squared" title="Edit" data-toggle="modal" data-target="#Edit_NewCompany<?php echo $i; ?>"><i class="la la-edit mr-0"></i></button>
												<a onclick="return confirm('Are you sure want to delete this Marrital Status?');" href="<?php echo base_url(); ?>superadmin/deletemarrital_status/<?php echo $value['id']; ?>"><button class="btn btn-icon btn-danger btn-squared" title="Delete" data-toggle="modal" data-target="#modal-delete"><i class="la la-trash mr-0"></i></button></a>
									
												<?php if($value['status']=='0'){?>
												<a onclick="return confirm('Are you sure want to change status of this Marrital Status?');" href="<?php echo base_url(); ?>superadmin/changeStatusmarrital_status/<?php echo $value['id'];?>/1"><button class="btn btn-icon btn-success btn-squared" title="Enable" ><i class="la la-ban mr-0"></i></button></a>
												<?php }else{?>
												<a onclick="return confirm('Are you sure want to change status of this Marrital Status?');" href="<?php echo base_url(); ?>superadmin/changeStatusmarrital_status/<?php echo $value['id'];?>/0"><button class="btn btn-icon btn-danger btn-squared" title="Disable" ><i class="la la-ban mr-0"></i></button></a>
												<?php }?>
												</div>
										</td>
									</tr>
								
									
									<div class="modal-basic modal fade show" id="Edit_NewCompany<?php echo $i; ?>" tabindex="-1" role="dialog" aria-hidden="true">
									<div class="modal-dialog modal-md" role="document">
										<div class="modal-content modal-bg-white ">
											<div class="modal-header">
												<h6 class="modal-title">Edit Marrital Status</h6>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span data-feather="x"></span></button>
											</div>
											<div class="modal-body">
												<div class="Vertical-form">
													<form action="<?php echo base_url(); ?>superadmin/editmarrital_status/<?php echo $value['id']; ?>" method="post" id="companyForm2" enctype="multipart/form-data">
														<div class="form-row">
															
															
															<div class="form-group col-sm-12">
																<label>Marrital Status</label>
																<input type="text" name="marrital_status"  value="<?php echo $value['description'];?>" class="form-control ih-medium ip-gray radius-xs b-light px-15"  placeholder="Enter Marrital Status">
															</div>
															
															<div class="layout-button mt-25">
																<button type="submit" class="btn btn-primary btn-sm btn-default btn-squared px-30"><i class="la la-check"></i>Update</button>
																<button type="button" class="btn btn-secondary btn-sm btn-sm" data-dismiss="modal">Back</button>
															</div>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>


								</div>
									
								<?php $i++; } } ?>
									
								</tbody>
							</table>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>




<div class="modal-basic modal fade show" id="Add_NewCompany" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-md" role="document">
	<div class="modal-content modal-bg-white ">
		<div class="modal-header">
			<h6 class="modal-title">Add New Marrital Status</h6>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span data-feather="x"></span></button>
		</div>
		<div class="modal-body">
			<div class="Vertical-form">
				<form action="<?php echo base_url(); ?>superadmin/addmarrital_status" method="post" id="companyForm" enctype="multipart/form-data">
					<div class="form-row">
						
						
						
						<div class="form-group col-sm-12">
							<label> Marrital Status</label>
							<input type="text" name="marrital_status"  value="<?php echo set_value('marrital_status') ?>"  class="form-control ih-medium ip-gray radius-xs b-light px-15"  placeholder="Enter Marrital Status">
						</div>
						
						<div class="layout-button mt-25">
							<button type="submit" class="btn btn-primary btn-sm btn-default btn-squared px-30"><i class="la la-check"></i>Save</button>
							<button type="button" class="btn btn-secondary btn-sm btn-sm" data-dismiss="modal">Back</button>
						</div>
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

<script>
imgInp.onchange = evt => {
	const [file] = imgInp.files
	if (file) {
		blah.src = URL.createObjectURL(file)
	}
}
</script>
<style>
/*.table-social tbody tr td:not(:first-child) {
text-align: center;
}*/
</style>

<?php include('include/footer.php'); ?>       
