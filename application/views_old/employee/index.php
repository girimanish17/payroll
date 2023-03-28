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
                                        </a> <span>Home</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<?php 
		
			?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xxl-3 col-lg-3 col-md-3 col-sm-4 mb-25">
                        <div class="card" style="position: sticky; top:5rem">
                            <div class="card-body text-center pt-30 px-25 pb-0">
                                <div class="account-profile-cards  ">
                                    <div class="ap-img d-flex justify-content-center">
                                        <img class="ap-img__main bg-opacity-primary  wh-120 rounded-circle mb-3 " src="<?php echo base_url();?>assets/images/users/<?php echo $user['profile_img'];?>" alt="profile">
                                    </div>
                                    <div class="ap-nameAddress">
                                        <h6 class="ap-nameAddress__title"><?php echo $user['first_name'].' '.$user['last_name'] ?></h6>
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
					<?php   $department = $this->common_model->GetSingleData('department',array('id' =>$user['department_id']));
							$designation = $this->common_model->GetSingleData('designation',array('id' =>$user['designation_id']));
							//echo "hi";  print_r($designation); die;
					?>
                    <div class="col-xxl-9 col-lg-9 col-md-9 col-sm-8 mb-25">
                        <div class="row">
                            <div class="col-xxl-6 col-lg-6 col-md-6 col-sm-12 mb-25">
                                <div class="card mb-25">
                                    <div class="card-header border-bottom">
                                        <h5>Personal Details</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td>Name</td>
                                                        <td><?php echo $user['first_name'].' '.$user['last_name'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Father's Name</td>
                                                        <td><?php echo $user['father_name'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Date of Birth</td>
                                                        <td><?php echo date('d M Y',strtotime($user['dob'])) ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gender</td>
                                                        <td><?php echo $user['gender'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Email Id</td>
                                                        <td><?php echo $user['email'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Phone</td>
                                                        <td><?php echo $user['phone'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Local Address</td>
                                                        <td>
                                                            <small>
                                                                <?php echo $user['local_address'] ?>
                                                            </small>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Permanent Address</td>
                                                        <td>
                                                            <small>
                                                               <?php echo $user['permanent_address'] ?>
                                                            </small>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-25">
                                    <div class="card-header border-bottom ">
                                        <h5>Company Details</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td>Employee ID</td>
                                                        <td><?php echo $user['emp_id'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Department</td>
                                                        <td><?php echo $department['name'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Designation</td>
                                                        <td><?php echo $designation['designation_name'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Date of Joining</td>
                                                        <td><?php echo date('d-M-Y',strtotime($user['date_of_joining'])) ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Salary <sub class="fs-16">₹</sub></td>
                                                        <td>
                                                            <small>Basic : ₹<?php echo $user['basic_salary'] ?> </small><br><small>Hourly Rate : ₹<?php echo $user['hourly_rate'] ?></small></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-25">
                                    <div class="card-header border-bottom">
                                        <h5>Bank Details</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td>Account Holder Name</td>
                                                        <td><?php echo $user_bank_detail['account_holder_name'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Account Number</td>
                                                        <td><?php echo $user_bank_detail['account_number'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bank Name</td>
                                                        <td><?php echo $user_bank_detail['bank_name'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>BSB</td>
                                                        <td><?php echo "..." ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tax Payer Id</td>
                                                        <td><?php echo $user_bank_detail['tax_payer_id'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bank Identifier Code</td>
                                                        <td><?php echo $user_bank_detail['bank_ifsc_code'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Branch Location</td>
                                                        <td><?php echo $user_bank_detail['branch_location'] ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-lg-6 col-md-6 col-sm-12 mb-25">
                                <div class="card mb-25">
                                    <div class="card-header border-bottom">
                                        <h5>Notice Board</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="search-body">
                                            <ul class="user-list" style="max-height: 300px;">
											<?php if($announcements){ foreach($announcements as $key => $value){?>
                                                <li class="user-list-item">
                                                    <div class="user-list-item__wrapper" data-toggle="modal" data-target="#modal-basic<?php echo $key+1;?>">
                                                        <div class="users-list-body">
                                                            <div class="users-list-body-title">
                                                                <h6><?php echo $key+1 .". ".$value['title'];?></h6>
                                                                <div class="text-limit">
                                                                    <p class="mb-0"><span><?php echo $value['message'];?></span>...</p>
                                                                </div>
                                                            </div>
                                                            <div class="last-chat-time unread">
                                                                <small class="text-primary fw-600"><?php echo date('d/m/Y');?></small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
												<div class="modal-basic modal fade show" id="modal-basic<?php echo $key+1;?>" tabindex="-1" role="dialog" aria-hidden="true">
													<div class="modal-dialog modal-dialog-centered modal-md" role="document">
														<div class="modal-content modal-bg-white ">
															<div class="modal-header">



																<h6 class="modal-title"><?php echo $key+1 .". ".$value['title'];?></h6>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																	<span data-feather="x"></span></button>
															</div>
															<div class="modal-body">
																<p><?php echo $value['message'];?></p>
															</div>
														</div>
													</div>
												</div>
											<?php }}else{?>
											<li class="user-list-item">
                                                    <div class="d-flex justify-content-center align-items-center">
                                                        <p>No Notice Found!</p>
                                                    </div>
                                                </li>
											
												<div></div>
											<?php } ?>
                                                <!--<li class="user-list-item">
                                                    <div class="user-list-item__wrapper" data-toggle="modal" data-target="#modal-basic">
                                                        <div class="users-list-body">
                                                            <div class="users-list-body-title">
                                                                <h6>I did: there's no use in crying like that!' said.</h6>
                                                                <div class="text-limit" data-maxlength="10">
                                                                    <p class="mb-0"><span>Dormouse sulkily remarked, 'If you can't swim, can you?' he added, turning to the dance. So they.</span>...</p>
                                                                </div>
                                                            </div>
                                                            <div class="last-chat-time unread">
                                                                <small class="text-primary fw-600">01/07/2022</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="user-list-item">
                                                    <div class="user-list-item__wrapper" data-toggle="modal" data-target="#modal-basic">
                                                        <div class="users-list-body">
                                                            <div class="users-list-body-title">
                                                                <h6>I did: there's no use in crying like that!' said.</h6>
                                                                <div class="text-limit" data-maxlength="10">
                                                                    <p class="mb-0"><span>Dormouse sulkily remarked, 'If you can't swim, can you?' he added, turning to the dance. So they.</span>...</p>
                                                                </div>
                                                            </div>
                                                            <div class="last-chat-time unread">
                                                                <small class="text-primary fw-600">01/07/2022</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="user-list-item">
                                                    <div class="user-list-item__wrapper" data-toggle="modal" data-target="#modal-basic">
                                                        <div class="users-list-body">
                                                            <div class="users-list-body-title">
                                                                <h6>I did: there's no use in crying like that!' said.</h6>
                                                                <div class="text-limit" data-maxlength="10">
                                                                    <p class="mb-0"><span>Dormouse sulkily remarked, 'If you can't swim, can you?' he added, turning to the dance. So they.</span>...</p>
                                                                </div>
                                                            </div>
                                                            <div class="last-chat-time unread">
                                                                <small class="text-primary fw-600">01/07/2022</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>-->
                                            </ul>
                                        </div>
                                        <!-- Ends: .search-body -->
                                    </div>
                                </div>
                                <div class="card mb-25">
                                    <div class="card-header border-bottom">
                                        <h5>Upcoming Holidays</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="search-body">
                                            <div class="user-list" style="max-height: 300px;">
                                                <div class="alert-icon-big alert alert-info " role="alert">
                                                    <div class="alert-content d-flex justify-content-between w-100 ">
                                                        <h6 class='alert-heading mb-0'>Sunday</h6>
                                                        <h6 class='alert-heading mb-0 fw-300 fs-16'><i>03 July 2022</i></h6>
                                                    </div>
                                                </div>
                                                <div class="alert-icon-big alert alert-warning " role="alert">
                                                    <div class="alert-content d-flex justify-content-between w-100 ">
                                                        <h6 class='alert-heading mb-0'>Sunday</h6>
                                                        <h6 class='alert-heading mb-0 fw-300 fs-16'><i>10 July 2022</i></h6>
                                                    </div>
                                                </div>
                                                <div class="alert-icon-big alert alert-primary " role="alert">
                                                    <div class="alert-content d-flex justify-content-between w-100 ">
                                                        <h6 class='alert-heading mb-0'>Sunday</h6>
                                                        <h6 class='alert-heading mb-0 fw-300 fs-16'><i>17 July 2022</i></h6>
                                                    </div>
                                                </div>
                                                <div class="alert-icon-big alert alert-success " role="alert">
                                                    <div class="alert-content d-flex justify-content-between w-100 ">
                                                        <h6 class='alert-heading mb-0'>Sunday</h6>
                                                        <h6 class='alert-heading mb-0 fw-300 fs-16'><i>24 July 2022</i></h6>
                                                    </div>
                                                </div>
                                                <div class="alert-icon-big alert alert-warning " role="alert">
                                                    <div class="alert-content d-flex justify-content-between w-100 ">
                                                        <h6 class='alert-heading mb-0'>Sunday</h6>
                                                        <h6 class='alert-heading mb-0 fw-300 fs-16'><i>10 July 2022</i></h6>
                                                    </div>
                                                </div>
                                                <div class="alert-icon-big alert alert-primary " role="alert">
                                                    <div class="alert-content d-flex justify-content-between w-100 ">
                                                        <h6 class='alert-heading mb-0'>Sunday</h6>
                                                        <h6 class='alert-heading mb-0 fw-300 fs-16'><i>17 July 2022</i></h6>
                                                    </div>
                                                </div>
                                                <div class="alert-icon-big alert alert-success " role="alert">
                                                    <div class="alert-content d-flex justify-content-between w-100 ">
                                                        <h6 class='alert-heading mb-0'>Sunday</h6>
                                                        <h6 class='alert-heading mb-0 fw-300 fs-16'><i>24 July 2022</i></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Ends: .search-body -->
                                    </div>
                                </div>
                                <div class="card mb-25">
                                    <div class="card-header border-bottom">
                                        <h5>Awards</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="search-body">
                                            <ul class="user-list" style="max-height: 300px;">

                                                <li class="user-list-item">
                                                    <div class="d-flex justify-content-center align-items-center">
                                                        <p>No Award</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Ends: .search-body -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-25">
                            <div class="card-header">
                                <h5>Attendence Calender</h5>
                            </div>
                            <div class="card-body">
                                <div class="draggable-events" id="draggable-events"> </div>
                                <div id='full-calendar'></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
       
    

    <?php include('include/footer.php'); ?>