<?php include('include/header.php'); ?>  
<div class="contents demo-card expanded">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <div class="breadcrumb-main">
               <ul class="atbd-breadcrumb nav">
                  <li class="atbd-breadcrumb__item">
                     <a href="<?php echo base_url();?>"> Home </a>
                     <span class="breadcrumb__seperator"> <span class="la la-angle-right"></span> </span>
                  </li>
                  <li class="atbd-breadcrumb__item">
                     <span>Employee Expense Claim</span>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
  
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <div class="card">
               <div class="card-header">
                  <h5 class=" color-dark fw-600">List All Employees Expense Claims</h5>
                  <div class="card-extra">
                     
                  </div>
               </div>
                <?php echo $this->session->flashdata('msg');
                      //unset($this->session->flashdata('msg'));
                if(isset($_SESSION['msg'])){
    unset($_SESSION['msg']);
}
                       ?>
               <div class="card-body">
                  <div class="userDatatable projectDatatable project-table bg-white w-100 border-0">
                     <div class="atbd-tab tab-horizontal">
                        
                        <div class="tab-content">
                           <div class="tab-pane fade show active" id="tab-v-1" role="tabpanel" aria-labelledby="tab-v-1-tab">
                              <!-- Start Table Responsive -->
                              <div class="table-responsive">
                                 <table class="table mb-0 table-basic" id="tblUser">
                                    <thead>
                                       <tr class="userDatatable-header">
                                          <th><span class="userDatatable-title">Emp Id</span>
                                          </th>
                                          <th>
                                             <span class="userDatatable-title">Request No</span>
                                          </th>
                                          <th>
                                             <span class="userDatatable-title">Mail Id</span>
                                          </th>
                                          <th>
                                             <span class="userDatatable-title">SSN</span>
                                          </th>
										   <th>
                                             <span class="userDatatable-title">Account Type</span>
                                          </th>
										  <th>
                                             <span class="userDatatable-title">Expense Type</span>
                                          </th>
										   <th>
                                             <span class="userDatatable-title">Purpose</span>
                                          </th>
										  <th>
                                             <span class="userDatatable-title">Amount</span>
                                          </th>
                                          <th>
                                             <span class="userDatatable-title">pay date</span>
                                          </th>
                                          <th>
                                             <span class="userDatatable-title">Status</span>
                                          </th>
										 <th>
                                             <span class="userDatatable-title">Actions</span>
                                          </th>
										  <th>
                                             <span class="userDatatable-title">Remark</span>
                                          </th>
										  
                                          
                                       </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($emp_expense_claims as $key => $value) {
												$emp = $this->common_model->GetSingleData('users',array('emp_id'=>$value['emp_id']));
												$designation = $this->common_model->GetSingleData('designation',array('id'=>$emp['designation_id']));
												$expense_type = $this->common_model->GetSingleData('expense_types',array('id'=>$value['expense_type']));
											?>
                                        
                                       <tr>
                                          <td>
                                             <div class="orderDatatable-title">
                                                <div class="d-flex">
                                                   <div class="btn btn-icon btn-light btn-squared btn-outline-primary mr-2"><?php echo strtoupper($emp['first_name'][0]); ?></div>
                                                   <div class="userDatatable-inline-title">
                                                      <h6><?php echo $value['emp_id']; ?></h6>
                                                      <p class="d-block mb-0">
                                                        <?php echo $designation['designation_name']; ?>
                                                      </p>
                                                   </div>
                                                </div>
                                             </div>
                                          </td>
                                          <td><?php echo $value['request_no']; ?></td>
                                          <td><?php echo $emp['email']; ?></td>
                                          <td><?php echo $value['SSN']; ?></td>
										  <td><?php echo $value['account_type']; ?></td>
										  <td><?php echo $expense_type['name']; ?></td>
										   <td><?php echo $value['purpose']; ?></td>
										   <td><?php echo number_format((float)$value['amount'],2, '.', ''); ?></td>
                                          <td><?php echo $value['pay_fromdate'].'</br>'.$value['pay_todate']; ?></td>
                                          <td>
                                             <div class="orderDatatable-status text-center font-size-14">
											 <?php if($value['status'] == 1){ ?>
                                               <span>Approved</span>
											 <?php }elseif($value['status'] == 2){ ?>
											    <span>Rejected</span>
											  <?php }else{ ?>
											    <span>Pending</span>
											 <?php } ?>
                                             </div>
                                          </td>
										  <td>
                                             <div class="orderDatatable-status text-center font-size-14">
											 <?php if($value['status'] == 1){ ?>
												<a href="<?php echo base_url(); ?>admin/expense_claim_status/<?php echo $value['id']; ?>/2" onclick="return confirm('Are you sure want to reject this employee status?');"><span class="btn btn-danger btn-default btn-squared btn-transparent-danger">Reject</span></a>
											 <?php }elseif($value['status'] == 2){ ?>
												<a href="<?php echo base_url(); ?>admin/expense_claim_status/<?php echo $value['id']; ?>/1" onclick="return confirm('Are you sure want to approve this employee status?');"><span class="btn btn-success btn-default btn-squared btn-transparent-success">Approve</span></a>
											  <?php }else{ ?>
												<a href="<?php echo base_url(); ?>admin/expense_claim_status/<?php echo $value['id']; ?>/1" onclick="return confirm('Are you sure want to approve this employee status?');"><span class="btn btn-success btn-default btn-squared btn-transparent-success">Approve</span></a>
												<a href="<?php echo base_url(); ?>admin/expense_claim_status/<?php echo $value['id']; ?>/2" onclick="return confirm('Are you sure want to reject this employee status?');"><span class="btn btn-danger btn-default btn-squared btn-transparent-danger">Reject</span></a>
											 <?php } ?>
                                             </div>
										</td>
										<td>
											  <a href="#" class="btn px-10 btn-primary" style="width:89px;height: 27px" data-toggle="modal" data-target="#new-member<?php echo $key+1; ?>">
                                        <i class="las la-plus fs-16"></i>Remark</a>

                                   
									 <!-- Modal -->
                                    <div class="modal fade new-member" id="new-member<?php echo $key+1; ?>" role="dialog" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content  radius-xl">
                                                <div class="modal-header">
                                                    <h6 class="modal-title fw-500" id="staticBackdropLabel">Add Remark</h6>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span data-feather="x"></span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="new-member-modal">
                                                        <form method="post" id="remarkForm<?php echo $value['id']; ?>" onsubmit="return addRemark(<?php echo $value['id']; ?>);">
                                                            <div id="msg"> </div>
                                                            <div class="form-group mb-20">
                                                                <textarea name="remark" class="form-control"><?php echo $value['manager_remarks']; ?>  </textarea>
                                                            </div>
                                                            <input type="hidden" name="id" value="<?php echo $value['id']; ?>">
                                                            <div class="button-group d-flex pt-25">
                                                                <button class="btn btn-primary btn-default btn-squared text-capitalize">Save Remark</button>
                                                                <button class="btn btn-light btn-default btn-squared fw-400 text-capitalize b-light color-light">cancel</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal -->
									
                                          </td>
                                       </tr>
									   
                                       <?php } ?>
									   </br></br>
                                       <!-- End: tr -->
                                    </tbody>
                                 </table>
                              </div>
                              <!-- Table Responsive End -->
                           </div>
                           
                        </div>
                     </div>
                     
                  </div>
                  <!-- End: .userDatatable -->
               </div>
            </div>
         </div>
         <!-- End: .col -->
      </div>
   </div>
</div>


<?php include('include/footer.php'); ?>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>    
<script>
jQuery(document).ready(function($) {
    $('#tblUser').DataTable({
		"ordering": false,
    "bPaginate": true,
    "bLengthChange": false,
    "bFilter": true,
    "bInfo": false,
    "bAutoWidth": true });
} );   
</script>
<script type="text/javascript">
  
function addRemark(id){

      $.ajax({
                url: "<?php echo base_url(); ?>admin/addRemark",
                type: "POST",
                data:$('#remarkForm'+id).serialize(),
                dataType:"JSON",
                success: function (res) {
                  
                 if(res.status==1){
                  window.location.href="<?php echo base_url(); ?>admin/emp_expense_claim";
                 } else {
                  $('#eMsg').html(res.msg);
                  return false;
                 }
            }
        });
     return false;  
}   

 
</script>