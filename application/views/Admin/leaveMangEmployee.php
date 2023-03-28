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
                     <span>Employee leaves</span>
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
                  <h5 class=" color-dark fw-600">List employee leaves</h5>
                 
               </div>
                <?php echo $this->session->flashdata('msg');
                if(isset($_SESSION['msg'])){
					unset($_SESSION['msg']);
				} ?>
               <div class="card-body">
                  <div class="userDatatable projectDatatable project-table bg-white w-100 border-0">
                     <div class="atbd-tab tab-horizontal">
                       
						<!--<a href="<?php echo base_url(); ?>admin/sendme" >and</a>-->
                        <div class="tab-content">
                           <div class="tab-pane fade show active" id="tab-v-1" role="tabpanel" aria-labelledby="tab-v-1-tab">
                              <!-- Start Table Responsive -->
                              <div class="table-responsive">
                                 <table class="table mb-0 table-basic" id="tblUser">
                                    <thead>
                                       <tr class="userDatatable-header">
                                          <th><span class="userDatatable-title">Leave Types</span></th>
                                          <th>
                                             <span class="userDatatable-title">Opening Balance</span>
                                          </th>
                                          <th>
                                             <span class="userDatatable-title">Leave Accrued Year 2022</span>
                                          </th>
                                          <th>
                                             <span class="userDatatable-title">Jan-22</span>
                                          </th>
                                          <th>
                                             <span class="userDatatable-title">Feb-22</span>
                                          </th>
                                          <th>
                                             <span class="userDatatable-title">Mar-22</span>
                                          </th>
                                          <th>
                                             <span class="userDatatable-title">Apr-22</span>
                                          </th>
										  <th>
                                             <span class="userDatatable-title">May-22</span>
                                          </th>
										  <th>
                                             <span class="userDatatable-title">Jun-22</span>
                                          </th>
										  <th>
                                             <span class="userDatatable-title">Jul-22</span>
                                          </th>
										  <th>
                                             <span class="userDatatable-title">Aug-22</span>
                                          </th>
										  <th>
                                             <span class="userDatatable-title">Sep-22</span>
                                          </th>
										  <th>
                                             <span class="userDatatable-title">Oct-22</span>
                                          </th>
										  <th>
                                             <span class="userDatatable-title">Nov-22</span>
                                          </th>
										  <th>
                                             <span class="userDatatable-title">Dec-22</span>
                                          </th>
										  <th>
                                             <span class="userDatatable-title">Total Utilized</span>
                                          </th>
										  <th>
                                             <span class="userDatatable-title">Closing Balance</span>
                                          </th>
                                          
                                       </tr>
                                    </thead>
                                    <tbody>
                                        <?php //foreach ($employee as $key => $value) { 
										//$user_leaves = $this->common_model->GetSingleData('users',array('user_id '=>$this->session->userdata('user_id')));
										// print_r($user_leaves); 
										$date_of_joining= $user_leaves['date_of_joining'];
										//echo $date_of_joining ."== 2022-06-01";
										if($date_of_joining > '2022-06-01'){
											$leave_accrued_cl	 ='6';
											$leave_accrued_op	 ='6'; 
											$leave_accrued_co	 ='3'; 											
										}else{
											$leave_accrued_cl	 ='12';
											$leave_accrued_op	 ='12'; 
											$leave_accrued_co	 ='6';  
										}
										$emp_leaves_cl = $this->common_model->GetAllData('emp_leaves',array('user_id'=>$user_leaves['user_id'],'leave_type'=>'casual','selected_days!='=>0,'status'=>'Approved'),'id');
										$emp_sum_cl = $this->common_model->Get_sum('emp_leaves',array('user_id'=>$user_leaves['user_id'],'leave_type'=>'casual','selected_days!='=>0,'status'=>'Approved'),'selected_days');
										
										//$emp_leaves_co = $this->common_model->GetAllData('emp_leaves',array('user_id'=>$user_leaves['user_id'],array('leave_type'=>"Compoff")),'id');
										//$emp_leaves_op = $this->common_model->GetAllData('emp_leaves',array('user_id'=>$user_leaves['user_id'],array('leave_type'=>"Optional")),'id');
										//echo $month = date('m', strtotime('2022-01-01'));
										?>
                                       
                                       <tr>
                                          <td>Casual Leave </td>
										 <td><?php echo $user_leaves['leave_cl']?></td>
										 <td><?php echo $leave_accrued_cl?></td>
										  <td><?php foreach($emp_leaves_cl as $jan){ if(date('m', strtotime($jan['from_date'])) == "01"){ echo $jan['selected_days']; }}?></td>
										  <td><?php foreach($emp_leaves_cl as $jan){ if(date('m', strtotime($jan['from_date'])) == "02"){ echo $jan['selected_days']; }}?></td>
										  <td><?php foreach($emp_leaves_cl as $jan){ if(date('m', strtotime($jan['from_date'])) == "03"){ echo $jan['selected_days']; }}?></td>
										  <td><?php foreach($emp_leaves_cl as $jan){ if(date('m', strtotime($jan['from_date'])) == "04"){ echo $jan['selected_days']; }}?></td>
										  <td><?php foreach($emp_leaves_cl as $jan){ if(date('m', strtotime($jan['from_date'])) == "05"){ echo $jan['selected_days']; }}?></td>
										  <td><?php foreach($emp_leaves_cl as $jan){ if(date('m', strtotime($jan['from_date'])) == "06"){ echo $jan['selected_days']; }}?></td>
										  <td><?php foreach($emp_leaves_cl as $jan){ if(date('m', strtotime($jan['from_date'])) == "07"){ echo $jan['selected_days']; }}?></td>
										  <td><?php foreach($emp_leaves_cl as $jan){ if(date('m', strtotime($jan['from_date'])) == "08"){ echo $jan['selected_days']; }}?></td>
										  <td><?php foreach($emp_leaves_cl as $jan){ if(date('m', strtotime($jan['from_date'])) == "09"){ echo $jan['selected_days']; }}?></td>
										  <td><?php foreach($emp_leaves_cl as $jan){ if(date('m', strtotime($jan['from_date'])) == "10"){ echo $jan['selected_days']; }}?></td>
										  <td><?php foreach($emp_leaves_cl as $jan){ if(date('m', strtotime($jan['from_date'])) == "11"){ echo $jan['selected_days']; }}?></td>
										  <td><?php foreach($emp_leaves_cl as $jan){ if(date('m', strtotime($jan['from_date'])) == "12"){ echo $jan['selected_days']; }}?></td>
										  <td><?php echo $emp_sum_cl [0][selected_days];   ?></td>
										  <td>Abc</td>
                                       </tr>
									   <tr>
                                          <td>Comp Off </td>
										 <td><?php echo $user_leaves['leave_compOff']?></td>
										 <td><?php echo $leave_accrued_co?></td>
										  <td>Abc</td>
										  <td>Abc</td>
										  <td>Abc</td>
										  <td>Abc</td>
										  <td>Abc</td>
										  <td>Abc</td>
										  <td>Abc</td>
										  <td>Abc</td>
										  <td>Abc</td>
										  <td>Abc</td>
										  <td>Abc</td>
										  <td>Abc</td>
										  <td>Abc</td>
										  <td>Abc</td>
                                       </tr>
									   <tr>
                                          <td>Optional Leave</td>
										 <td><?php echo $user_leaves['leave_optional']?></td>
										  <td><?php echo $leave_accrued_op?></td>
										  <td>Abc</td>
										  <td>Abc</td>
										  <td>Abc</td>
										  <td>Abc</td>
										  <td>Abc</td>
										  <td>Abc</td>
										  <td>Abc</td>
										  <td>Abc</td>
										  <td>Abc</td>
										  <td>Abc</td>
										  <td>Abc</td>
										  <td>Abc</td>
										  <td>Abc</td>
										  <td>Abc</td>
                                       </tr>
                                       <?php //} ?>
                                       <!-- End: tr -->
                                    </tbody>
                                 </table>
                              </div>
                              <!-- Table Responsive End -->
                           </div>
                           <div class="tab-pane fade" id="tab-v-2" role="tabpanel" aria-labelledby="tab-v-2-tab">
                              <div id="maleList"></div>
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
    $('#tblUsera').DataTable({
		"ordering": false,
    "bPaginate": false,
    "bLengthChange": false,
    "bFilter": true,
    "bInfo": false,
    "bAutoWidth": false });
} );   
</script>
<script type="text/javascript">
 function filterList(val){
//alert(val); 
//var msg = $('#l_message').val(); 
        
     
      var params = {filterVal: val};
        $.ajax({
            url: '<?php echo base_url();?>admin/filterEmployee',
            type: 'post',
            data: params,
            success: function (r)
             {
                console.log(r);
                $("#maleList").html(r);
             }
        });

     return false; 
}   
</script>