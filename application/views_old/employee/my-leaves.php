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
                                        <span>My Leaves</span>
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
                                        <p class="ap-nameAddress__subTitle  fs-14 pt-1 m-0 "><?php echo $this->session->userdata('designation'); ?></p>
                                    </div>
                                    <p><span class="atbd-tag tag-warning">At work for : <?php echo $this->session->userdata('total_worktime');?></span></p>
                                </div>
                            </div>
                            <div class="card-footer bg-primary mt-2 text-center">

                                <div class="profile-overview d-flex justify-content-between flex-wrap">
                                    <div class="po-details">
                                        <h6 class="po-details__title text-white">0/26</h6>
                                        <span class="po-details__sTitle text-white">Attendance</span>
                                    </div>
                                    <div class="po-details">
                                        <h6 class="po-details__title text-white">0/10</h6>
                                        <span class="po-details__sTitle text-white">Leaves</span>
                                    </div>
                                    <div class="po-details">
                                        <h6 class="po-details__title text-white">04</h6>
                                        <span class="po-details__sTitle text-white">Awards</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-9 col-lg-9 col-md-9 col-sm-8 mb-25">
                        <div class="card mb-25">
                            <div class="card-header border-bottom">
                                <h5>My Leave Applications</h5>
                            </div>
                            <div class="card-body">
                                <div class="table4 table5">
                                    <div class="table-responsive">
									<?php echo $this->session->flashdata('msg');
														   if(isset($_SESSION['msg'])){
															unset($_SESSION['msg']);
															}
														  ?>
                                        <table class="table table-sm mb-0" id="tblUser">
                                            <thead class="text-center">
                                                <tr class="userDatatable-header">
                                                    <th>
                                                        <div class="userDatatable-title">
                                                            Id
                                                            <div class="d-flex justify-content-between align-items-center w-100">
                                                                <span class="userDatatable-sort">
                                                                <i class="fas fa-caret-down"></i>
                                                            </span>
                                                                <span class="userDatatable-filter">
                                                                <i class="fas fa-filter"></i>
                                                            </span>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="userDatatable-title">
                                                            Date
                                                            <div class="d-flex justify-content-between align-items-center w-100">
                                                                <span class="userDatatable-sort">
                                                                <i class="fas fa-sort-up up"></i>
                                                                <i class="fas fa-caret-down down"></i>
                                                            </span>
                                                                <span class="userDatatable-filter">
                                                                <i class="fas fa-filter"></i>
                                                            </span>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="userDatatable-title">
                                                            Days
                                                            <div class="d-flex justify-content-between align-items-center w-100">
                                                                <span class="userDatatable-sort">
                                                                <i class="fas fa-sort-up up"></i>
                                                                <i class="fas fa-caret-down down"></i>
                                                            </span>
                                                                <span class="userDatatable-filter">
                                                                <i class="fas fa-filter"></i>
                                                            </span>
                                                            </div>
                                                        </div>
                                                    </th>

                                                    <th>
                                                        <div class="userDatatable-title">
                                                            Type
                                                            <div class="d-flex justify-content-between align-items-center w-100">
                                                                <span class="userDatatable-sort">
                                                                <i class="fas fa-sort-up up"></i>
                                                                <i class="fas fa-caret-down down"></i>
                                                            </span>
                                                                <span class="userDatatable-filter">
                                                                <i class="fas fa-filter"></i>
                                                            </span>
                                                            </div>
                                                        </div>
                                                    </th>

                                                    <th>
                                                        <div class="userDatatable-title">
                                                            reason
                                                            <div class="d-flex justify-content-between align-items-center w-100">
                                                                <span class="userDatatable-sort">
                                                                <i class="fas fa-sort-up up"></i>
                                                                <i class="fas fa-caret-down down"></i>
                                                            </span>
                                                                <span class="userDatatable-filter">
                                                                <i class="fas fa-filter"></i>
                                                            </span>
                                                            </div>
                                                        </div>
                                                    </th>

                                                    <th>
                                                        <div class="userDatatable-title">
                                                            Applied On
                                                            <div class="d-flex justify-content-between align-items-center w-100">
                                                                <span class="userDatatable-sort">
                                                                <i class="fas fa-sort-up up"></i>
                                                                <i class="fas fa-caret-down down"></i>
                                                            </span>
                                                                <span class="userDatatable-filter">
                                                                <i class="fas fa-filter"></i>
                                                            </span>
                                                            </div>
                                                        </div>
                                                    </th>

                                                    <th>
                                                        <div class="userDatatable-title">
                                                            Status
                                                            <div class="d-flex justify-content-between align-items-center w-100">
                                                                <span class="userDatatable-sort">
                                                                <i class="fas fa-sort-up up"></i>
                                                                <i class="fas fa-caret-down down"></i>
                                                            </span>
                                                                <span class="userDatatable-filter">
                                                                <i class="fas fa-filter"></i>
                                                            </span>
                                                            </div>
                                                        </div>
                                                    </th>

                                                    <th>
                                                        <div class="userDatatable-title">
                                                            Action
                                                            <div class="d-flex justify-content-between align-items-center w-100">
                                                                <span class="userDatatable-sort">
                                                                <i class="fas fa-sort-up up"></i>
                                                                <i class="fas fa-caret-down down"></i>
                                                            </span>
                                                                <span class="userDatatable-filter">
                                                                <i class="fas fa-filter"></i>
                                                            </span>
                                                            </div>
                                                        </div>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
											<?php if($myleaves){
													foreach($myleaves as $value){
												?>
                                                <tr>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                           <?php echo $value['emp_id']; ?> 
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                             <?php echo date('d/m/Y',strtotime($value['from_date'])); ?> 
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            <?php echo $value['half_days']?"Half Day":$value['selected_days']. " Days"; ?> 
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                             <?php echo $value['leave_type'];?> 
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                             <?php echo $value['reason'];?> 
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            <?php echo date('d/m/Y',strtotime($value['created_date'])); ?> 
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
													<?php if($value['status'] == "Approved"){ $clr = "success";}elseif($value['status'] == "Rejected"){$clr = "danger";}else{ $clr = "warning";};?>														
													<span class="atbd-tag tag-<?php echo $clr;?> tag-transparented"> <?php echo $value['status']; ?> </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            <div class="userDatatable-content">
                                                                <div class="d-flex justify-content-sm-end action_btn">
                                                                    <a href="#" class="btn btn-default btn-primary btn-circle pl-2 pr-2 mr-2" title="Reprint Box ID">
                                                                        <!-- <span data-feather="printer"></span> -->
                                                                        <em class="la la-print"></em>
                                                                    </a>
																	<?php if($value['leave_type'] == 'compoff'){?>
																		<a onclick="return confirm('Are you sure you want to delete?');" href="<?php echo base_url('employee/Home/delete_emp_compoff_leaves/'.$value['id']);?>" class="btn btn-default btn-danger btn-circle pl-2 pr-2" title="Close Gate">
                                                                        <!-- <span data-feather="trash-2"></span> -->
                                                                        <em class="la la-trash"></em>
                                                                    </a>
																	<?php }else{?>
                                                                    <a onclick="return confirm('Are you sure you want to delete?');" href="<?php echo base_url('employee/Home/delete_emp_leaves/'.$value['id']);?>" class="btn btn-default btn-danger btn-circle pl-2 pr-2" title="Close Gate">
                                                                        <!-- <span data-feather="trash-2"></span> -->
                                                                        <em class="la la-trash"></em>
                                                                    </a>
																	<?php }?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
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
       
    <div class="modal-basic modal fade show" id="modal-basic" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content modal-bg-white ">
                <div class="modal-header">
                    <h6 class="modal-title">I did: there's no use in crying like that!' said.</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span data-feather="x"></span></button>
                </div>
                <div class="modal-body">
                    <p>Dormouse sulkily remarked, 'If you can't swim, can you?' he added, turning to the dance. So they.</p>
                </div>
            </div>
        </div>
    </div>

    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDduF2tLXicDEPDMAtC6-NLOekX0A5vlnY "></script>
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
 <?php include('include/footer.php'); ?>