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
								<span>Profession Tax Slabs</span>
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
						<h5>Profession Tax Slabs List</h5>
						<div class="card-extra">
							<button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#Add_NewCompany">+ Add New Profession Tax Slabs</button>
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
										<th scope="col">State</th>
										<th scope="col">Location</th>
										<th scope="col">Salary From</th>
										<th scope="col">Salary Till</th>
										<th scope="col">Tax Amount</th>
										<th scope="col">Deduction Month</th>
										<th scope="col">Date</th>
										<th scope="col">Entry Date</th>
										<th scope="col">Status</th>
										<th scope="col">Action</th>
									</tr>
								</thead>
								<tbody>
								<?php $i = 1;if($listData){ foreach($listData as $key => $value){
									//$package = $this->common_model->GetSingleData('packages',array('id'=>$value['package_id']));
									//$admins = $this->common_model->GetSingleData('users',array('user_id'=>$value['admin_id']));
									?>
									<tr>
										<td><?php echo $i;?></td>
										<td><?php echo $value['state_name'];?></td>
										<td><?php echo $value['location'];?></td>
										<td><?php echo $value['salary_from'];?></td>
										<td><?php echo $value['salary_till'];?></td>
										<td><?php echo $value['tax_amount'];?></td>
										<td><?php echo $value['deduction_month'];?></td>
										<td><?php echo date('d M Y',strtotime($value['date']));?></td>
										<td><?php echo date('d M Y',strtotime($value['entry_date']));?></td>
										<td><?php echo $value['status']=='1'?"<span class='badge badge-success rounded-pill'>Active":"<span class='badge badge-danger rounded-pill'>Inactive";?></span></td>
										<td>
											<div class="atbd-button-list d-flex flex-wrap">
											   <button class="btn btn-icon btn-success btn-squared" title="Edit" data-toggle="modal" data-target="#Edit_NewCompany<?php echo $i; ?>"><i class="la la-edit mr-0"></i></button>
												<a onclick="return confirm('Are you sure want to delete this Profession Tax Slabs?');" href="<?php echo base_url(); ?>superadmin/deleteprofession_tax_slabs/<?php echo $value['id']; ?>"><button class="btn btn-icon btn-danger btn-squared" title="Delete" data-toggle="modal" data-target="#modal-delete"><i class="la la-trash mr-0"></i></button></a>
									
												<?php if($value['status']=='0'){?>
												<a onclick="return confirm('Are you sure want to change status of this Profession Tax Slabs?');" href="<?php echo base_url(); ?>superadmin/changeStatusprofession_tax_slabs/<?php echo $value['id'];?>/1"><button class="btn btn-icon btn-success btn-squared" title="Enable" ><i class="la la-ban mr-0"></i></button></a>
												<?php }else{?>
												<a onclick="return confirm('Are you sure want to change status of this Profession Tax Slabs?');" href="<?php echo base_url(); ?>superadmin/changeStatusprofession_tax_slabs/<?php echo $value['id'];?>/0"><button class="btn btn-icon btn-danger btn-squared" title="Disable" ><i class="la la-ban mr-0"></i></button></a>
												<?php }?>
												</div>
										</td>
									</tr>
								
									
									<div class="modal-basic modal fade show" id="Edit_NewCompany<?php echo $i; ?>" tabindex="-1" role="dialog" aria-hidden="true">
									<div class="modal-dialog modal-md" role="document">
										<div class="modal-content modal-bg-white ">
											<div class="modal-header">
												<h6 class="modal-title">Edit Profession Tax Slabs</h6>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span data-feather="x"></span></button>
											</div>
											<div class="modal-body">
												<div class="Vertical-form">
													<form action="<?php echo base_url(); ?>superadmin/editprofession_tax_slabs/<?php echo $value['id']; ?>" method="post" id="companyForm2" enctype="multipart/form-data">
														<div class="form-row">
															
														<div class="form-group col-sm-12">
							<label> State</label>
							<select name="state" class="form-control selectState" id="">
								<option value="">Select State</option>
								<?php if($states) { foreach($states as $state) {  ?>
									<option  <?php if( $value['state']== $state->state_id ){ echo "selected"; } ?>  value="<?php echo $state->state_id; ?>"> <?php echo $state->state_name; ?></option>
									<?php } } ?>
							</select>
						</div>

						<div class="form-group col-sm-12">
							<label> Location</label>
							<select name="location" class="form-control">
								<option value="">Select Location</option>
									<option  <?php if($value['location']== 'General'){ echo "selected"; } ?>  value="General"> General</option>
							</select>
						</div>

						<div class="form-group col-sm-12">
							<label>Date</label>
							<input type="date"  value="<?php echo $value['date'] ?>"  name="date"  class="form-control ip-gray radius-xs b-light px-15"  >
						</div>

						<div class="form-group col-sm-12">
							<label>Salary From</label>
							<input type="text" name="salary_from"  value="<?php echo  $value['salary_from'] ?>"  class="form-control ih-medium ip-gray radius-xs b-light px-15"  placeholder="Enter Salary From">
						</div>

						<div class="form-group col-sm-12">
							<label>Salary Till</label>
							<input type="text" name="salary_till"  value="<?php echo  $value['salary_till'] ?>"  class="form-control ih-medium ip-gray radius-xs b-light px-15"  placeholder="Enter Salary Till">
						</div>

						<div class="form-group col-sm-12">
							<label>Tax Amount</label>
							<input type="text" name="tax_amount"  value="<?php echo $value['tax_amount'] ?>"  class="form-control ih-medium ip-gray radius-xs b-light px-15"  placeholder="Enter Tax Amount">
						</div>

						<div class="form-group col-sm-12">
                  <div class="">
                  <label>Deduction Month:</label>
                     <select name="deduction_month" id=""  class="form-control  ih-medium ip-lightradius-xs b-light" required>
                    <option value="">Select Month</option>
                     <option value="January" <?php  if($value['deduction_month'] == 'January') { echo 'selected'; }  ?>>January</option>
                     <option value="February" <?php  if($value['deduction_month'] == 'February') { echo 'selected'; }  ?>>February</option>
                     <option value="March" <?php  if($value['deduction_month'] == 'March') { echo 'selected'; }  ?>>March</option>
                     <option value="April" <?php  if($value['deduction_month'] == 'April') { echo 'selected'; }  ?>>April</option>
                     <option value="May" <?php  if($value['deduction_month'] == 'May') { echo 'selected'; }  ?>>May</option>
                     <option value="June" <?php  if($value['deduction_month'] == 'June') { echo 'selected'; }  ?>>June</option>
                     <option value="July" <?php  if($value['deduction_month'] == 'July') { echo 'selected'; }  ?>>July</option>
                     <option value="August" <?php  if($value['deduction_month'] == 'August') { echo 'selected'; }  ?>>August</option>
                     <option value="September" <?php  if($value['deduction_month'] == 'September') { echo 'selected'; }  ?>>September</option>
                     <option value="October" <?php  if($value['deduction_month'] == 'October') { echo 'selected'; }  ?>>October</option>
                     <option value="November" <?php  if($value['deduction_month'] == 'November') { echo 'selected'; }  ?>>November</option>
                     <option value="December" <?php  if($value['deduction_month'] == 'December') { echo 'selected'; }  ?>>December</option>
                      
                     </select>
                  </div>
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
			<h6 class="modal-title">Add New Profession Tax Slabs</h6>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span data-feather="x"></span></button>
		</div>
		<div class="modal-body">
			<div class="Vertical-form">
				<form action="<?php echo base_url(); ?>superadmin/addprofession_tax_slabs" method="post" id="companyForm" enctype="multipart/form-data">
					<div class="form-row">
											
						<div class="form-group col-sm-12">
							<label> State</label>
							<select name="state" class="form-control selectState" id="">
								<option value="">Select State</option>
								<?php if($states) { foreach($states as $state) {  ?>
									<option  <?php if( set_value('state')== $state->state_id ){ echo "selected"; } ?>  value="<?php echo $state->state_id; ?>"> <?php echo $state->state_name; ?></option>
									<?php } } ?>
							</select>
						</div>

						<div class="form-group col-sm-12">
							<label> Location</label>
							<select name="location" class="form-control">
								<option value="">Select Location</option>
									<option  <?php if( set_value('location')== 'General'){ echo "selected"; } ?>  value="General"> General</option>
							</select>
						</div>

						<div class="form-group col-sm-12">
							<label>Date</label>
							<input type="date" name="date"  value="<?php echo set_value('date') ?>"  class="form-control "  >
						</div>

						<div class="form-group col-sm-12">
							<label>Salary From</label>
							<input type="text" name="salary_from"  value="<?php echo set_value('salary_from') ?>"  class="form-control ih-medium ip-gray radius-xs b-light px-15"  placeholder="Enter Salary From">
						</div>

						<div class="form-group col-sm-12">
							<label>Salary Till</label>
							<input type="text" name="salary_till"  value="<?php echo set_value('salary_till') ?>"  class="form-control ih-medium ip-gray radius-xs b-light px-15"  placeholder="Enter Salary Till">
						</div>

						<div class="form-group col-sm-12">
							<label>Tax Amount</label>
							<input type="text" name="tax_amount"  value="<?php echo set_value('tax_amount') ?>"  class="form-control ih-medium ip-gray radius-xs b-light px-15"  placeholder="Enter Tax Amount">
						</div>

						<div class="form-group col-sm-12">
                  <div class="">
                  <label>Deduction Month:</label>
                     <select name="deduction_month" id=""  class="form-control  ih-medium ip-lightradius-xs b-light" required>
                    <option value="">Select Month</option>
                     <option value="January" <?php  if($general->currency == 'January') { echo 'selected'; }  ?>>January</option>
                     <option value="February" <?php  if($general->currency == 'February') { echo 'selected'; }  ?>>February</option>
                     <option value="March" <?php  if($general->currency == 'March') { echo 'selected'; }  ?>>March</option>
                     <option value="April" <?php  if($general->currency == 'April') { echo 'selected'; }  ?>>April</option>
                     <option value="May" <?php  if($general->currency == 'May') { echo 'selected'; }  ?>>May</option>
                     <option value="June" <?php  if($general->currency == 'June') { echo 'selected'; }  ?>>June</option>
                     <option value="July" <?php  if($general->currency == 'July') { echo 'selected'; }  ?>>July</option>
                     <option value="August" <?php  if($general->currency == 'August') { echo 'selected'; }  ?>>August</option>
                     <option value="September" <?php  if($general->currency == 'September') { echo 'selected'; }  ?>>September</option>
                     <option value="October" <?php  if($general->currency == 'October') { echo 'selected'; }  ?>>October</option>
                     <option value="November" <?php  if($general->currency == 'November') { echo 'selected'; }  ?>>November</option>
                     <option value="December" <?php  if($general->currency == 'December') { echo 'selected'; }  ?>>December</option>
                      
                     </select>
                  </div>
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
<!-- <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script> -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>   
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> 
<script>

$(document).ready(function() {
    // $('.selectState').select2();
	$('.selectStates').select2({
              dropdownParent: $('#Add_NewCompany')
    });
});


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
