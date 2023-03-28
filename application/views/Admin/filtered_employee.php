<div class="tab-content">
			   <div class="tab-pane fade show active" id="tab-v-1" role="tabpanel" aria-labelledby="tab-v-1-tab">
				  <!-- Start Table Responsive -->
				  <div class="table-responsive">
					 <table class="table mb-0 table-basic" id="dtblUser">
						<thead>
						   <tr class="userDatatable-header">
							  <th><span class="userDatatable-title">Profile</span></th>
							  <th><span class="userDatatable-title">Contact</span></th>
							  <th><span class="userDatatable-title">Mail Id</span></th>
							  <th><span class="userDatatable-title">Gender</span></th>
							  <th><span class="userDatatable-title">Local Address</span></th>
							  <th><span class="userDatatable-title">Parmanent Address</span></th>
							  <th><span class="userDatatable-title">Status</span></th>
							  <th class="text-right"><span class="userDatatable-title">Actions</span></th>
						   </tr>
						</thead>
						<tbody>
							<?php foreach ($employee as $key => $value) { 
							$designation = $this->common_model->GetSingleData('designation',array('id'=>$value['designation_id'])); ?>
						   <tr>
							  <td>
								 <div class="orderDatatable-title">
									<div class="d-flex">
									   <div class="btn btn-icon btn-light btn-squared btn-outline-primary mr-2"><?php echo strtoupper($value['first_name'][0]); ?></div>
									   <div class="userDatatable-inline-title">
										  <h6><?php echo $value['first_name'].' '.$value['last_name']; ?></h6>
										  <p class="d-block mb-0">
											 <?php echo $designation['designation_name']; ?>
										  </p>
									   </div>
									</div>
								 </div>
							  </td>
							  <td><?php echo $value['first_name']; ?></td>
							  <td><?php echo $value['email']; ?></td>
							  <td><?php echo $value['gender']; ?></td>
							  <td><?php echo $value['local_address']; ?></td>
							  <td><?php echo $value['permanent_address']; ?></td>
							  <td>
								 <div class="orderDatatable-status text-center font-size-14">
								 <?php if($value['status'] == 1){ ?>
									<a href="<?php echo base_url(); ?>admin/changeStatusEmployee/<?php echo $value['user_id']; ?>/0" onclick="return confirm('Are you sure want to chnage this employee status?');"><span class="btn btn-success btn-default btn-squared btn-transparent-success">Active</span></a>
								 <?php }else{ ?>
									<a href="<?php echo base_url(); ?>admin/changeStatusEmployee/<?php echo $value['user_id']; ?>/1" onclick="return confirm('Are you sure want to chnage this employee status?');"><span class="btn btn-danger btn-default btn-squared btn-transparent-danger">Inactive</span></a>
								 <?php } ?>
								 </div>
							  </td>
							  <td>
								 <div class="d-flex justify-content-sm-end action_btn">
									<a href="<?php echo base_url(); ?>admin/editEmployee/<?php echo $value['user_id']; ?>" class="btn btn-default btn-primary btn-circle pl-2 pr-2 mr-2"><i class="la la-edit mr-0"></i></a>
									<a onclick="return confirm('Are you sure want to delete this employee?');" href="<?php echo base_url(); ?>admin/deleteEmployee/<?php echo $value['user_id']; ?>" class="btn btn-default btn-danger btn-circle pl-2 pr-2"><i class="la la-trash mr-0"></i></a>
								 </div>
							  </td>
						   </tr>
						   <?php } ?>
						</tbody>
					 </table>
				  </div>
			   </div>
			   <div class="tab-pane fade" id="tab-v-2" role="tabpanel" aria-labelledby="tab-v-2-tab">
				  <div id="maleList"></div>
			   </div>
			   
			</div>
				<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css" />
				<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
				<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>    
				<script>
				jQuery(document).ready(function($) {
					$('#dtblUser').DataTable({
						"ordering": false,
						"bPaginate": true,
						"bLengthChange": false,
						"bFilter": true,
						"bInfo": false,
						"bAutoWidth": false });
				} );   
				</script>