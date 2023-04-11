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
                                        <span>IT Declaration</span>
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
                                <h5>IT Declaration List</h5>
                                <div class="card-extra">
                                    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#Add_NewCompany">+ Add New IT Declaration</button>
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
												<th scope="col">Financial Year</th>
												<th scope="col">Category</th>
												<th scope="col">Description</th>
												<th scope="col">Section</th>
                                                <th scope="col">Max Limit</th>
                                                <th scope="col">Deduct %</th>
                                                <th scope="col">Sort Order</th>
                                                <th scope="col">Visible</th>
                                                <th scope="col">Is Infra</th>
                                                <th scope="col">Consider As</th>
                                                <th scope="col">Code</th>
                                                <th scope="col">Created On</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php $i = 1;if($it_declarations){ foreach($it_declarations as $key => $value){
											
											$category = $this->common_model->GetSingleData('it_declaration_categories',array('id'=>$value['category_id']));
											$section = $this->common_model->GetSingleData('it_declaration_sections',array('id'=>$value['section_id']));
											?>
                                            <tr>
                                                <td><?php echo $i;?></td>
												<td><?php echo $value['financial_year'];?></td>
												<td><?php echo $category['name'];?></td>
												<td><?php echo $value['description'];?></td>
                                                <td><?php echo ucfirst($section['name']);?></td>
                                                <td><?php echo $value['max_limit'];?></td>
                                                <td><?php echo $value['deduct'];?></td>
                                                <td><?php echo $value['sort_order'];?></td>
                                                <td><?php echo ucfirst($value['visible']);?></td>
                                                <td><?php echo $value['is_infra'];?></td>
                                                <td><?php echo ucfirst($value['consider_as']);?></td>
                                                <td><?php echo $value['code'];?></td>
                                                <td><?php echo date('d M Y',strtotime($value['created_date']));?></td>
                                                <td><?php echo $value['status']=='1'?"<span class='badge badge-success rounded-pill'>Active":"<span class='badge badge-danger rounded-pill'>Inactive";?></span></td>
                                                <td>
                                                    <div class="atbd-button-list d-flex flex-wrap">
                                                       <button class="btn btn-icon btn-success btn-squared" title="Edit" data-toggle="modal" data-target="#Edit_NewCompany<?php echo $i; ?>"><i class="la la-edit mr-0"></i></button>
                                                        <a onclick="return confirm('Are you sure want to delete this IT Declaration?');" href="<?php echo base_url(); ?>superadmin/deleteITDeclaration/<?php echo $value['id']; ?>"><button class="btn btn-icon btn-danger btn-squared" title="Delete" data-toggle="modal" data-target="#modal-delete"><i class="la la-trash mr-0"></i></button></a>
                                            
                                                        <?php if($value['status']=='0'){?>
														<a onclick="return confirm('Are you sure want to change status of this IT Declaration?');" href="<?php echo base_url(); ?>superadmin/changeStatusITDeclaration/<?php echo $value['id'];?>/1"><button class="btn btn-icon btn-danger btn-squared" title="Enable" ><i class="la la-ban mr-0"></i></button></a>
														<?php }else{?>
														<a onclick="return confirm('Are you sure want to change status of this IT Declaration?');" href="<?php echo base_url(); ?>superadmin/changeStatusITDeclaration/<?php echo $value['id'];?>/0"><button class="btn btn-icon btn-danger btn-squared" title="Disable" ><i class="la la-ban mr-0"></i></button></a>
														<?php }?>
                                                        </div>
                                                </td>
                                            </tr>
											
											
											<div class="modal-basic modal fade show" id="Edit_NewCompany<?php echo $i; ?>" tabindex="-1" role="dialog" aria-hidden="true">
											<div class="modal-dialog modal-md" role="document">
												<div class="modal-content modal-bg-white ">
													<div class="modal-header">
														<h6 class="modal-title">Edit IT Declaration</h6>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span data-feather="x"></span></button>
													</div>
													<div class="modal-body">
														<div class="Vertical-form">
															<form action="<?php echo base_url(); ?>superadmin/edit_ITDeclaration/<?php echo $value['id']; ?>" method="post" id="companyForm2" enctype="multipart/form-data">
																<div class="form-row">
																	
																	<div class="form-group col-md-12">
																		<label>Financial Year</label>
																		<select class="form-control px-15" id="financial_year" name="financial_year">
																		<option>Select  Financial Year</option>
																		
																		<option value="2022" <?php if($value['financial_year']== "2022" ){ echo 'selected';}?>>2022</option>
																		<option value="2023" <?php if($value['financial_year']== "2023" ){ echo 'selected';}?>>2023</option>
																	</select>
																	</div>

																	<div class="form-group col-md-12">
																		<label>Category</label>
																		<select class="form-control px-15" id="category" name="category">
																		<option>Select Category</option>
																		<?php  if($categorys){ foreach($categorys as $key1 => $value1) {	?>
																		<option value="<?php echo $value1['id'];?>" <?php if($value['category_id']== $value1['id'] ){ echo 'selected';}?>><?php echo $value1['name']; ?></option>
																		<?php }} ?>
																	</select>
																	</div>

																	<div class="form-group col-sm-12">
									                                    <label> Description</label>
									                                    <textarea name="description" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Enter Description"><?php echo ucfirst($value['description']);?></textarea>
									                                </div>

									                                <div class="form-group col-md-12">
									                                    <label>Section</label>
									                                    <select class="form-control px-15" id="section" name="section">
																		<option value="">Select Section</option>
									                                    <?php if($sections){ foreach ($sections as $key => $value1) {	?>
									                                    <option value="<?php echo $value1['id'];?>" <?php if($value['section_id']== $value1['id'] ){ echo 'selected';}?>><?php echo $value1['name']; ?></option>
									                                    <?php }} ?>
									                                </select>
									                                </div>

																	<div class="form-group col-sm-12">
									                                    <label> Max Limit</label>
									                                    <input type="text" name="max_limit" class="form-control ih-medium ip-gray radius-xs b-light px-15" value="<?php echo $value['max_limit'];?>"  placeholder="Enter Max Limit">
									                                </div>

																	<div class="form-group col-sm-12">
									                                    <label> Deduct %</label>
									                                    <input type="number" min="0" name="deduct" class="form-control ih-medium ip-gray radius-xs b-light px-15" value="<?php echo $value['deduct'];?>" placeholder="Enter Deduct">
									                                </div>

																	<div class="form-group col-sm-12">
									                                    <label> Sort Order</label>
									                                    <input type="number" min="0" name="sort_order" class="form-control ih-medium ip-gray radius-xs b-light px-15" value="<?php echo $value['sort_order'];?>"  placeholder="Enter Sort order">
									                                </div>

									                                <div class="form-group col-sm-12">
									                                    <label>Visible</label>
									                                    <select class="form-control px-15" id="visible" name="visible">
																		<option value="">Select Visible</option>
									                                    <option value="visible" <?php if($value['visible']== "visible" ){ echo 'selected';}?>>Visible</option>
									                                    <option value="invisible" <?php if($value['visible']== "invisible" ){ echo 'selected';}?>>Invisible</option>     
									                                </select>
									                                </div>

																	<div class="form-group col-sm-12">
									                                    <label> Is Infra</label>
									                                    <input type="text" name="is_infra" class="form-control ih-medium ip-gray radius-xs b-light px-15" value="<?php echo $value['is_infra'];?>" placeholder="Enter Is Infra">
									                                </div>
																	
																	 <div class="form-group col-sm-12">
									                                    <label>Consider As</label>
									                                    <select class="form-control px-15" id="consider_as" name="consider_as">
																		<option value="">Select Consider As</option>
									                                    <option value="Income" <?php if($value['consider_as']== "Income" ){ echo 'selected';}?>>Income</option>
									                                </select>
									                                </div>

																	<div class="form-group mb-25 col-sm-12">
									                                    <label>Code</label>
									                                    <input type="text" name="code" class="form-control ih-medium ip-gray radius-xs b-light px-15" value="<?php echo $value['code'];?>" placeholder="Enter Code">
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
                    <h6 class="modal-title">Add New IT Declaration</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span data-feather="x"></span></button>
                </div>
                <div class="modal-body">
                    <div class="Vertical-form">
                        <form action="<?php echo base_url(); ?>superadmin/addITDeclaration" method="post" id="companyForm" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="form-group col-sm-12">
                                    <label>Financial Year</label>*
                                    <select class="form-control px-15" id="financial_year" name="financial_year" required>
									<option value="">Select Financial Year</option>
                                    <option value="2022" <?php if(set_value('financial_year')=="2022"){ echo "selected"; } ?>>2022</option>
                                    <option value="2023" <?php if(set_value('financial_year')=="2023"){ echo "selected"; } ?>>2023</option>     
                                </select>
                                </div>

                                <div class="form-group col-md-12">
                                    <label>Category</label>
                                    <select class="form-control px-15" id="category" name="category">
									<option value="">Select Category</option>
                                    <?php if($category1){ foreach ($category1 as $key2 => $value2) {	?>
                                    <option value="<?php echo $value2['id'];?>" <?php if(set_value('category')==$value2['id']){ echo "selected"; } ?>><?php echo $value2['name']; ?></option>
									<?php }} ?>
                                </select>
                                </div>

								<div class="form-group col-sm-12">
                                    <label> Description</label>
                                    <textarea name="description"  class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Enter Description"><?php  echo set_value('description'); ?></textarea>
                                </div>

                                <div class="form-group col-md-12">
                                    <label>Section</label>
                                    <select class="form-control px-15" id="section" name="section">
									<option value="">Select Section</option>
                                    <?php if($section1){ foreach ($section1 as $key => $value) {	?>
                                    <option value="<?php echo $value['id'];?>" <?php if(set_value('section')==$value['id']){ echo "selected"; } ?>><?php echo $value['name']; ?></option>
                                    <?php }} ?>
                                </select>
                                </div>

								<div class="form-group col-sm-12">
                                    <label> Max Limit</label>
                                    <input type="text" name="max_limit" class="form-control ih-medium ip-gray radius-xs b-light px-15" value="<?php  echo set_value('max_limit'); ?>"  placeholder="Enter Max Limit">
                                </div>

								<div class="form-group col-sm-12">
                                    <label> Deduct %</label>
                                    <input type="number" min="0" name="deduct" class="form-control ih-medium ip-gray radius-xs b-light px-15"  placeholder="Enter Deduct" value="<?php  echo set_value('deduct'); ?>">
                                </div>

								<div class="form-group col-sm-12">
                                    <label> Sort Order</label>
                                    <input type="number" min="0" name="sort_order" class="form-control ih-medium ip-gray radius-xs b-light px-15"  placeholder="Enter Sort order" value="<?php  echo set_value('sort_order'); ?>">
                                </div>

                                 <div class="form-group col-sm-12">
                                    <label>Visible</label>
                                    <select class="form-control px-15" id="visible" name="visible">
									<option value="">Select Visible</option>
                                    <option value="visible" <?php if(set_value('visible')=="visible"){ echo "selected"; } ?>>Visible</option>
                                    <option value="invisible" <?php if(set_value('visible')=="invisible"){ echo "selected"; } ?>>Invisible</option>     
                                </select>
                                </div>

								<div class="form-group col-sm-12">
                                    <label> Is Infra</label>
                                    <input type="text" name="is_infra" class="form-control ih-medium ip-gray radius-xs b-light px-15"  placeholder="Enter Is Infra" value="<?php  echo set_value('is_infra'); ?>">
                                </div>
								
								 <div class="form-group col-sm-12">
                                    <label>Consider As</label>
                                    <select class="form-control px-15" id="consider_as" name="consider_as">
									<option value="">Select Consider As</option>
                                    <option value="Income" <?php if(set_value('consider_as')=="Income"){ echo "selected"; } ?>>Income</option>
                                </select>
                                </div>

								<div class="form-group mb-25 col-sm-12">
                                    <label>Code</label>
                                    <input type="text" name="code" class="form-control ih-medium ip-gray radius-xs b-light px-15"  placeholder="Enter Code" value="<?php  echo set_value('code'); ?>">
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

    
<style>
/*.table-social tbody tr td:not(:first-child) {
    text-align: center;
}*/
</style>

 <?php include('include/footer.php'); ?>       