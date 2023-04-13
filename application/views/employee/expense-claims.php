<?php include('include/header.php'); ?>
        <div class="contents demo-card expanded">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-default card-md my-4">
                            <div class="card-body">
                                <ul class="atbd-breadcrumb nav">
                                    <li class="atbd-breadcrumb__item">
                                        <a href="<?php echo base_url();?>">
                                            <span class="la la-home"></span>
                                        </a>
                                        <span class="breadcrumb__seperator">
                                            <span class="la la-slash"></span>
                                        </span>
                                    </li>
                                    <li class="atbd-breadcrumb__item">
                                        <span>Expense Claims</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-xxl-3 col-lg-3 col-md-3 col-sm-4 mb-25">
                        <div class="card" style="position: sticky; top:5rem">
                            <div class="card-body text-center pt-30 px-25 pb-0">
                                <div class="account-profile-cards  ">
                                    <div class="ap-img d-flex justify-content-center">
                                        <img class="ap-img__main bg-opacity-primary  wh-120 rounded-circle mb-3 " src="<?php echo base_url(); ?>assets/images/users/<?php echo $employee['profile_img']; ?>" alt="profile">
                                    </div>
                                    <div class="ap-nameAddress">
                                        <h6 class="ap-nameAddress__title"><?php echo $employee['first_name']." ".$employee['last_name']; ?></h6>
                                        <p class="ap-nameAddress__subTitle  fs-14 pt-1 m-0 "><?php echo $this->session->userdata('designation'); ?>
                                        </p>
                                    </div>
                                    <p><span class="atbd-tag tag-warning">At work for : <?php echo $this->session->userdata('total_worktime');?></span></p>
                                </div>
                            </div>
                            <div class="card-footer bg-primary mt-2 text-center">

                                 <div class="profile-overview d-flex justify-content-between flex-wrap">
                                    <div class="po-details">
                                        <h6 class="po-details__title text-white"><?php echo $this->Common_function->attendenceInMonth();?>/<?php echo $this->Common_function->totalMonthdays();?></h6>
                                        <span class="po-details__sTitle text-white">Attendance</span>
                                    </div>
                                    <div class="po-details">
                                        <h6 class="po-details__title text-white"><?php echo $this->Common_function->leavesSumInYear();?>/<?php echo $this->Common_function->user_credit_leaves();?></h6>
                                        <span class="po-details__sTitle text-white">Full Leaves</span>
                                    </div>
                                    <div class="po-details">
                                        <h6 class="po-details__title text-white"><?php echo $this->Common_function->halfleavesSumInYear();?></h6>
                                        <span class="po-details__sTitle text-white">Half Leaves</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-9 col-lg-9 col-md-9 col-sm-8 mb-25">
                        <div class="card mb-25">
                            <div class="card-header border-bottom">
                                <h5>My Expenses</h5>
                                <div class="card-extra">
                                    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#Add_Expense">+ Add Expense</button>
                                </div>
                            </div>
							<?php echo $this->session->flashdata('msg');
														   if(isset($_SESSION['msg'])){
															unset($_SESSION['msg']);
															}
														  ?>
                            <div class="card-body">
                                <div class="table4 table5">
                                    <div class="table-responsive">
                                        <table class="table table-sm mb-0">
                                            <thead class="text-center">
											
                                                <tr class="userDatatable-header">
                                                    <th>
                                                        <div class="userDatatable-title">
                                                            ReqNo
                                                            <div class="d-flex justify-content-between align-items-center w-100">
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="userDatatable-title">
                                                            Purpose
                                                            <div class="d-flex justify-content-between align-items-center w-100">
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="userDatatable-title">
                                                            Purchase Date
                                                            <div class="d-flex justify-content-between align-items-center w-100">
                                                            </div>
                                                        </div>
                                                    </th>

                                                    <th>
                                                        <div class="userDatatable-title">
                                                           Pay Date
                                                            <div class="d-flex justify-content-between align-items-center w-100">
                                                            </div>
                                                        </div>
                                                    </th>

                                                    <th>
                                                        <div class="userDatatable-title">
                                                            Manager
                                                            <div class="d-flex justify-content-between align-items-center w-100">
                                                            </div>
                                                        </div>
                                                    </th>
													
													<th>
                                                        <div class="userDatatable-title">
                                                            Amount
                                                            <div class="d-flex justify-content-between align-items-center w-100">
                                                            </div>
                                                        </div>
                                                    </th>
													
                                                    <th>
                                                        <div class="userDatatable-title">
                                                            Bill
                                                            <div class="d-flex justify-content-between align-items-center w-100">
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="userDatatable-title">
                                                            Status
                                                            <div class="d-flex justify-content-between align-items-center w-100">
                                                            </div>
                                                        </div>
                                                    </th>
													<th>
                                                        <div class="userDatatable-title">
                                                            Action
                                                            <div class="d-flex justify-content-between align-items-center w-100">
                                                            </div>
                                                        </div>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
											<?php if($myexpense){
												foreach($myexpense as $key => $value){
													$manager = $this->common_model->GetSingleData('users',array('user_id' =>$value['manager']));
													?>
                                                <tr>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                             <?php echo $value['request_no'];?> 
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            <?php echo $value['purpose'];?> 
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            <?php echo date('d-m-Y',strtotime(value['purchase_date']));?> 
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                           <?php echo date('d-m-Y',strtotime($value['pay_fromdate']))."-</br>".date('d-m-Y',strtotime($value['pay_todate']));?> 
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="userDatatable-content">
                                                            <?php echo $manager['first_name']." ".$manager['last_name'];?> 
                                                        </div>
                                                    </td>
													<td>
                                                        <div class="userDatatable-content">
                                                            <?php echo number_format((float)$value['amount'], 2, '.', '');;?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
														<a href="<?php echo base_url(); ?>assets/images/expense_bill/<?php echo $value['bill']; ?>" target="_blank"><img src="<?php echo base_url(); ?>assets/images/expense_bill/<?php echo $value['bill']; ?>" style="height: 100px;width: 100px;"></a>
                                                        </div>
                                                    </td>
													 <td>
                                                        <div class="userDatatable-content">
															<?php if($value['status'] == "1"){ $clr = "success";$sts = "Approved";}elseif($value['status'] == "2"){$clr = "danger";$sts = "Rejected";}else{ $clr = "warning";$sts = "Pending";}?>														
															<span class="atbd-tag tag-<?php echo $clr;?> tag-transparented"> <?php echo $sts; ?> </span>
                                                        </div> 
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            <div class="userDatatable-content">
                                                                <div class="d-flex justify-content-sm-end action_btn">
                                                                    
																	<a href="#" data-toggle="modal" data-target="#new-member<?php echo $value['id']; ?>" class="btn btn-default btn-primary btn-circle pl-2 pr-2 mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></a>
																	
																	<a href="<?php echo base_url('employee/Home/pdf_expense_claims/'.$value['id']);?>" target="_blank" onclick="return expensePdf()" class="btn btn-default btn-primary btn-circle pl-2 pr-2 mr-2" title="Reprint Box ID">
                                                                        <em class="la la-print"></em>
                                                                    </a>
																	
																	<a href="<?php echo base_url('employee/Home/delete_expense_claims/'.$value['id']);?>" onclick="return confirm('Are you sure you want to delete?');" class="btn btn-default btn-danger btn-circle pl-2 pr-2" title="Close Gate">
                                                                        <em class="la la-trash"></em>
                                                                    </a>
																	
																	<a href="#" class="btn btn-default btn-primary btn-circle pl-2 pr-2" title="Manager Remark" style="margin-left:5px;" data-toggle="modal" data-target="#new-member2<?php echo $key+1; ?>" >
                                                                        <em class="la la-eye"></em>
                                                                    </a>
																	
																	
																	
																	 <!-- Manager Remark Modal -->
																	<div class="modal fade new-member" id="new-member2<?php echo $key+1; ?>" role="dialog" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
																		<div class="modal-dialog modal-dialog-centered">
																			<div class="modal-content  radius-xl">
																				<div class="modal-header">
																					<h6 class="modal-title fw-500" id="staticBackdropLabel">Manager Remark</h6>
																					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																						<span data-feather="x"></span>
																					</button>
																				</div>
																				<div class="modal-body">
																					<div class="new-member-modal">
																						<form method="post">
																							<div id="msg"> </div>
																							<div class="form-group mb-20">
																								<textarea name="remark" class="form-control"><?php echo $value['manager_remarks']; ?>  </textarea>
																							</div>
																						</form>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<!-- Modal -->
																
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
														<div class="modal-basic modal fade show new-member" id="new-member<?php echo $value['id']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
															<div class="modal-dialog modal-md" role="document">
																<div class="modal-content modal-bg-white ">
																	<div class="modal-header">
																		<h6 class="modal-title">+ Edit Expense</h6>
																		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																			<span data-feather="x"></span></button>
																	</div>
																	<div class="modal-body">
																		<div class="Vertical-form"> 
																			<form method="post" action="<?php echo base_url('employee/Home/edit_expense_claims/').$value['id'];?>"  enctype="multipart/form-data">
																				<div class="form-group">
																					<label>Req No</label>
																					<input type="text" name="purpose" value="<?php echo $value['request_no'];?>" class="form-control ih-medium ip-gray radius-xs b-light px-15"  readonly>
																				</div>
																				<div class="form-group">
																					<label>Purpose</label>
																					<input type="text" name="purpose" value="<?php echo $value['purpose'];?>" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Enter Purpose">
																				</div>
																			  
																				<div class="form-group">
																					<label>SSN</label>
																					<input type="text"  name="SSN" value="<?php echo $value['SSN'];?>" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Enter SSN">
																				</div>
																				
																				 
																				<div class="form-group">
																					<label for="exampleFormControlSelect2" class="il-gray fs-14 fw-500 align-center">Manager</label>
																					<select class="form-control px-15" id="managers" name="manager" required>
																					<option value="" >Select Manager<?php echo $value['manager_id'];?> </option>
																					<?php if($managers){foreach($managers as $val){?>
																						<!--<option value="<?php echo $val['manager_id'];?>" <?php if($val->manager_id==$value['manager_id']) { echo "selected=selected";} ?>><?php echo $val['first_name']." ".$val['last_name'] ;?></option>-->    <?php //echo " [".$val['designation_name']."]"?>
																					        <option value="<?php echo $val['user_id'];?>" <?php if($val['user_id']==$value['manager']) { echo "selected=selected";} ?>><?php echo $val['first_name']." ".$val['last_name'] ;?></option>
																					<?php }} ?>
																					</select>
																				</div>
																				<div class="form-group mb-4">
																				<label for="exampleFormControlSelect2" class="il-gray fs-14 fw-500 align-center">Account Type</label>
																				<select class="form-control px-15" id="account_type1" name="account_type" required>
																				<option value="" >Select Account Type </option>
																				<?php if($account_type){foreach($account_type as $val11){?>
																						<option value="<?php echo $val11['account_type'];?>" <?php if($val11['account_type']==$value['account_type']) { echo "selected=selected";} ?>><?php echo $val11['account_type'];?></option>
																					<?php }} ?>
																					<!--<option <?php if($value['account_type']=='Cash'){  echo "selected";  } ?> value="Cash" >Cash</option>
																					<option <?php if($value['account_type']=='Cheque'){  echo "selected";  } ?> value="Cheque" >Cheque</option>
																					<option <?php if($value['account_type']=='Bank'){  echo "selected";  } ?> value="Bank" >Bank</option>
																					<option <?php if($value['account_type']=='Gpay'){  echo "selected";  } ?> value="Gpay" >Gpay</option>-->
																				</select>
																				</div>
																				<div class="form-group">
																					<label for="exampleFormControlSelect2" class="il-gray fs-14 fw-500 align-center">Expense Type</label>
																					<select class="form-control px-15" id="expense_type" name="expense_type" required>
																					<option value="" >Select Expense Type </option>
																					<?php if($expense_type){foreach($expense_type as $val1){?>
																						<option value="<?php echo $val1['id'];?>" <?php if($val1['id']==$value['expense_type']) { echo "selected=selected";} ?>><?php echo $val1['name'];?></option>
																					<?php }} ?>
																					</select>
																				</div>
																				<div class="form-group form-group-calender">
																					<label>Date of purchase</label>
																					<div class="position-relative"> 
																						<input type="date"  name="purchase_date" id="e_purchase_date" value="<?php echo date('Y-m-d',strtotime(strtr($value['purchase_date'], '-', '/')));?>" class="form-control  ih-medium ip-light radius-xs b-light px-15"  placeholder="01/10/2021">
																						
																					</div>
																				</div>
																				<div class="form-group form-group-calender">
																					<label>Pay Date Range</label>
																					<div class="position-relative">
																						<input type="date" style="width: 275px;float: left;" name="pay_fromdate" value="<?php echo date('Y-m-d',strtotime(strtr($value['pay_fromdate'], '-', '/')));?>" class="form-control ih-medium ip-light radius-xs b-light"  placeholder="01/10/2021">
																						<input type="date" style="width: 275px;" name="pay_todate" value="<?php echo date('Y-m-d',strtotime(strtr($value['pay_todate'], '-', '/')));?>" class="form-control  ih-medium ip-light radius-xs b-light px-15"  placeholder="01/10/2021">
																						
																					</div>
																				</div>
																				<div class="form-group">
																					<label>Amount</label>
																					<input type="text"  name="amount" value="<?php echo $value['amount'];?>" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Enter Amount" required>
																				</div>
																				 <!--<div class="for-group mb-4">
																					<label for="txtDateRange" class="il-gray fs-14 fw-500 align-center">Pay Date Range:</label>
																					
																					<input type="text" id="txtDateRange" name="payDateRange"  class="inputField shortInputField dateRangeField form-control  ih-medium ip-gray radius-xs b-light" required placeholder="01/10/2021 - 01/15/2021" data-from-field="txtDateFrom" data-to-field="txtDateTo"/>
																					<input type="hidden" id="txtDateFrom" value="" />
																					<input type="hidden" id="txtDateTo" value="" />
																				</div>-->
																				
																				<div class="form-group">
																					<label>Bill</label>
																					<input class="form-control ih-medium ip-light radius-xs b-light px-15"  name="image" type="file" id="formFile">
																					<?php if($value['bill']){ ?><a href="<?php echo base_url(); ?>assets/images/expense_bill/<?php echo $value['bill']; ?>" target="_blank">Click here to see your bill!</a><?php } ?>
																				</div>
																				 <div class="form-group">
																					<label for="exampleFormControlSelect2" class="il-gray fs-14 fw-500 align-center">Description</label>
																					<textarea class="form-control" rows="3" name="description"><?php echo $value['description']?></textarea>
																				</div>
																				
																				<div class="layout-button mt-25">
																				<input type="submit" class="btn btn-primary btn-default btn-squared px-30" value="Submit">
																				   
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
            </div>

        </div>
      
    <div class="modal-basic modal fade show" id="Add_Expense" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content modal-bg-white ">
                <div class="modal-header">
                    <h6 class="modal-title">+ Add Expense</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span data-feather="x"></span></button>
                </div>
                <div class="modal-body">
                    <div class="Vertical-form">
                        <form method="post" action="<?php echo base_url('employee/Home/add_expense_claims');?>"  enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Purpose</label>
                                <input type="text" name="purpose" value="<?php echo set_value('purpose');?>" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Enter Purpose">
                            </div>
                            <!--<div class="form-group">
                                <label>Location of purchase</label>
                                <input type="text"  name="purchase_from" value="<?php echo set_value('purchase_from');?>" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Purchase From">
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input type="text"  name="price" value="<?php echo set_value('price');?>" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Enter Price">
                            </div>-->
							<div class="form-group">
                                <label>SSN</label>
                                <input type="text"  name="SSN" value="<?php echo set_value('SSN');?>" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Enter SSN">
                            </div>
							 <div class="form-group">
								<label for="exampleFormControlSelect2" class="il-gray fs-14 fw-500 align-center">Manager</label>
								<select class="form-control px-15" id="manager" name="manager" required>
								<option value="" >Select Manager </option>
								<?php if($manager_add){foreach($manager_add as $values){?>
									<!--<option value="<?php echo $values['manager_id'];?>"><?php echo $values['first_name']." ".$values['last_name'] ;?></option>    <?php //echo " [".$values['designation_name']."]"?>-->
										<option  <?php if(set_value('manager') == $values['user_id']) { echo 'selected'; } ?>  value="<?php echo $values['user_id'];?>" ><?php echo $values['first_name']." ".$values['last_name'] ;?></option>
								<?php }} ?>
								</select>
							</div>
							<div class="form-group mb-4">
							<label for="exampleFormControlSelect2" class="il-gray fs-14 fw-500 align-center">Account Type</label>
							<select class="form-control px-15" id="account_type" name="account_type" required>
							<option value="" >Select Account Type </option>
								<!--<option value="Cash">Cash</option>
								<option value="Cheque">Cheque</option>
								<option value="Bank">Bank</option>
								<option value="Gpay">Gpay</option>-->
								<?php if($account_type){foreach($account_type as $valuee){?>
									<option  <?php if(set_value('account_type') == $valuee['account_type']) { echo 'selected'; } ?>  value="<?php echo $valuee['account_type'];?>"><?php echo $valuee['account_type'];?></option>
								<?php }} ?>
							</select>
							</div>
							<div class="form-group">
								<label for="exampleFormControlSelect2" class="il-gray fs-14 fw-500 align-center">Expense Type</label>
								<select class="form-control px-15" id="expense_type" name="expense_type" required>
								<option value="" >Select Expense Type </option>
								<?php if($expense_type){foreach($expense_type as $value){?>
									<option  <?php if(set_value('expense_type') == $value['id']) { echo 'selected'; } ?> value="<?php echo $value['id'];?>"><?php echo $value['name'];?></option>
								<?php }} ?>
								</select>
							</div>
                            <div class="form-group form-group-calender">
                                <label>Date of purchase</label>
                                <div class="position-relative">
                                    <input type="text"  name="purchase_date" value="<?php echo set_value('purchase_date');?>" class="form-control  ih-medium ip-light radius-xs b-light px-15" id="datepicker8" placeholder="01/10/2021">
                                    <a href="#"><span data-feather="calendar"></span></a>
                                </div>
                            </div>
							 <div class="for-group mb-4">
								<label for="txtDateRange" class="il-gray fs-14 fw-500 align-center">Pay Date Range:</label>
								<input type="text" id="txtDateRange" name="payDateRange" class="inputField shortInputField dateRangeField form-control  ih-medium ip-gray radius-xs b-light" required placeholder="01/10/2021 - 01/15/2021" data-from-field="txtDateFrom" data-to-field="txtDateTo"/>
								<input type="hidden" id="txtDateFrom" value="" />
								<input type="hidden" id="txtDateTo" value="" />
							</div>
							
							<div class="form-group">
                                <label>Amount</label>
                                <input type="text"  name="amount" value="<?php echo set_value('amount');?>" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Enter Amount" required>
                            </div>
							
                            <div class="form-group">
                                <label>Bill</label>
                                <input class="form-control ih-medium ip-light radius-xs b-light px-15"  name="image" type="file" id="formFile">
                            </div>
							 <div class="form-group">
								<label for="exampleFormControlSelect2" class="il-gray fs-14 fw-500 align-center">Description</label>
								<textarea class="form-control" rows="3" name="description"></textarea>
							</div>
							
                            <div class="layout-button mt-25">
							<input type="submit" class="btn btn-primary btn-default btn-squared px-30" value="Submit">
                               
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	
 <style>
        #ui-datepicker-div {
            width: auto !important;
        }
    </style>

    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDduF2tLXicDEPDMAtC6-NLOekX0A5vlnY "></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
function expensePdf(){

	 alert("Pdf is comming soon!!");
     return false;  
}    

</script>
    <!-- endinject-->
    <script>
        imgInp.onchange = evt => {
            const [file] = imgInp.files
            if (file) {
                blah.src = URL.createObjectURL(file)
            }
        }
		
		
    </script>

 <?php include('include/footer.php'); ?>