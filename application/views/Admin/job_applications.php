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
                                    <span>Job Vacancies</span>
                                </li>
                            </ul>
                           
                        </div>
                    </div>
                </div>
            </div>

         <?php echo $this->session->flashdata('depmsg'); ?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="project-progree-breadcrumb">
                            <div class="breadcrumb-main user-member justify-content-sm-between ">
                                <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                                  <?php echo $this->session->flashdata('msg');
														   if(isset($_SESSION['msg'])){
															unset($_SESSION['msg']);
															}
														  ?>
                                </div>
                                
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="userDatatable w-100 mb-30">
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-borderless" id="tblUser">
                                            <thead>
                                                <tr class="userDatatable-header">
                                                     <th>
                                                        <span class="userDatatable-title">Sr no.</span>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title">Position</span>
                                                    </th>
													<th>
                                                        <span class="userDatatable-title">Name</span>
                                                    </th>
													<th>
                                                        <span class="userDatatable-title">Email</span>
                                                    </th>
													<th>
                                                        <span class="userDatatable-title">Phone</span>
                                                    </th>
													<th>
                                                        <span class="userDatatable-title">Submitted By</span>
                                                    </th>
													<th>
                                                        <span class="userDatatable-title">Resume</span>
                                                    </th>
                                                    <th>
														 <span class="userDatatable-title">Status</span>
													  </th>
                                                    <th>
                                                        <span class="userDatatable-title float-right">action</span>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if($job_applications){ foreach($job_applications as $key => $value){
														$employee = $this->common_model->GetSingleData('users',array('user_id'=>$value['user_id']));
														$position = $this->common_model->GetSingleData('job_vacancies',array('id'=>$value['position_id']));
														?>
                                                <tr>

                                                    <td>
                                                        <div class="userDatatable-content">
                                                         <?php echo $key+1; ?>
                                                        </div>
                                                    </td>
                                                    
                                                    <td>
                                                        <div class="userDatatable-content">
                                                           <?php echo $position['position']; ?>
                                                        </div>
                                                    </td>
													
													<td>
                                                        <div class="userDatatable-content">
                                                           <?php echo $value['name']; ?>
                                                        </div>
                                                    </td>
													<td>
                                                        <div class="userDatatable-content">
                                                           <?php echo $value['email']; ?>
                                                        </div>
                                                    </td>
													<td>
                                                        <div class="userDatatable-content">
                                                           <?php echo $value['phone']; ?>
                                                        </div>
                                                    </td>
													<td>
                                                        <div class="userDatatable-content">
                                                          <?php echo $employee['first_name']." ".$employee['last_name']; ?>
                                                        </div>
                                                    </td>
													<td>
                                                        <div class="userDatatable-content">
                                                         	<a href="<?php echo base_url('assets/images/resume/').$value['resume']; ?>" title="Resume" target="_blank">Resume</a>
                                                        </div>
                                                    </td>
													<td>
                                                        <div class="userDatatable-content">
														
														<?php if($value['status']=='0'){ ?>
                                                       <h6><span class="atbd-tag tag-warning tag-transparented">Pending</span></h6>
													<?php }elseif($value['status']=='1'){ ?>
														<h6><span class="atbd-tag tag-success tag-transparented">Approved</span></h6>
													<?php }elseif($value['status']=='2'){?>
														 <h6><span class="atbd-tag tag-danger tag-transparented">Rejected</span></h6>
													<?php } ?>
													
                                                       
                                                        </div>
                                                    </td>
													
                                                    <td class="userDatatable-inline-title">
														<?php if($value['status']=='0'){ ?>
														   <a href="<?php echo base_url() ?>admin/jobApplications_approval_status/<?php echo $value['id']; ?>/1" onclick="return confirm('Are you sure want to approve this application?')"><h6><span class="atbd-tag tag-success tag-transparented">Approve</span></h6></a>
														   <a href="<?php echo base_url() ?>admin/jobApplications_approval_status/<?php echo $value['id']; ?>/2" onclick="return confirm('Are you sure want to reject this application?')"><h6><span class="atbd-tag tag-danger tag-transparented">Reject </span></h6></a>
														<?php }elseif($value['status']=='1'){ ?>
														   <a href="<?php echo base_url() ?>admin/jobApplications_approval_status/<?php echo $value['id']; ?>/2" onclick="return confirm('Are you sure want to reject this application?')"><h6><span class="atbd-tag tag-danger tag-transparented">Reject </span></h6></a>
														<?php }elseif($value['status']=='2'){?>
														   <a href="<?php echo base_url() ?>admin/jobApplications_approval_status/<?php echo $value['id']; ?>/1" onclick="return confirm('Are you sure want to approve this application?')"><h6><span class="atbd-tag tag-success tag-transparented">Approve</span></h6></a>
														<?php } ?>
														</td>
                                                </tr>

                                <?php }} ?>
                                   
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                    
                </div>
               <div class="row">
                    <div class="col-lg-12">
                        <div class="d-flex  mt-30 mb-30">

                           
                        </div>
                    </div>
                </div>
                <!--same-->
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
    "bAutoWidth": false });
} );   
</script>   

<script type="text/javascript">
  
</script>