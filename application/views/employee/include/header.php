 <!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
 
    <!-- inject:css-->

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor_assets/css/bootstrap/bootstrap.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor_assets/css/daterangepicker.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor_assets/css/fontawesome.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor_assets/css/footable.standalone.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor_assets/css/fullcalendar@5.2.0.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor_assets/css/jquery-jvectormap-2.0.5.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor_assets/css/jquery.mCustomScrollbar.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor_assets/css/leaflet.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor_assets/css/line-awesome.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor_assets/css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor_assets/css/MarkerCluster.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor_assets/css/MarkerCluster.Default.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor_assets/css/select2.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor_assets/css/slick.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor_assets/css/star-rating-svg.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor_assets/css/trumbowyg.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor_assets/css/wickedpicker.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/employee/style.css">

    <!-- endinject -->

    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/employee/img/favicon.png">
</head>

<body class="layout-light side-menu">
    <div class="mobile-search"></div>

    <div class="mobile-author-actions"></div>
    <header class="header-top">
        <nav class="navbar navbar-light">
            <div class="navbar-left">
                <a href="" class="sidebar-toggle">
                    <img class="svg" src="<?php echo base_url(); ?>assets/employee/img/svg/bars.svg" alt="img"></a>
                <a class="navbar-brand" href="javascript:void(0)"><img class="svg dark" src="<?php echo base_url(); ?>assets/img/logo.jpeg" alt="svg"><img class="light" src="<?php echo base_url(); ?>assets/img/logo.jpeg" alt="img"></a>

            </div>
            <!-- ends: navbar-left -->
			<?php   $user = $this->common_model->GetSingleData('users',array('user_id' =>$this->session->userdata('user_id')));
			$desi = $this->common_model->GetSingleData('designation',array('id'=>$user['designation_id']));
			$type = $this->session->userdata('user_type');
			  $start_date             =       date('Y-m-d',strtotime($user['date_of_joining']));
			  $end_date               =       date('Y-m-d');
			  $end_date               =       new DateTime( date('Y-m-d',strtotime($end_date))); // New date object
			  $months                 =       $end_date->diff(new DateTime($start_date));
			  $months                 =       $months->format('%y Year %m Month %d Day');
			  $total_worktime = $this->session->set_userdata('total_worktime',$months);
			  $designation_name = $this->session->set_userdata('designation',$desi['designation_name']);
			   //$company = $this->common_model->GetSingleData('companies',array('company_id' =>$user['comp_id']));
			  $comp_id = $this->session->set_userdata('company_id',$user['comp_id']);
 ?>
            <div class="navbar-right">
                <ul class="navbar-right__menu">
                    <!-- ends: .nav-flag-select -->
                    <li class="nav-author">
                        <div class="dropdown-custom">
                            <a href="javascript:;" class="nav-item-toggle">
                                <div class="nav-author__info">
                                    <div class="author-img">
                                        <img src="<?php echo base_url();?>assets/images/users/<?php echo $user['profile_img'];?>" alt="" class="rounded-circle">
                                    </div>
                                    <div>
                                        <h6><?php echo $user['first_name'].' '.$user['last_name'] ?></h6>
                                        <small><?php echo $this->session->userdata('designation'); ?></small>
										<small>[<?php echo $this->session->userdata('company_id'); ?>]</small>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-wrapper">

                                <div class="nav-author__options">
                                    <ul>
                                        <li>
                                            <a href="<?php echo base_url(); ?>employee/profile">
                                                <span data-feather="user"></span> Profile</a>
                                        </li>
                                        <li>
                                            <!-- changes-password.html -->
                                            <a href="<?php echo base_url(); ?>employee/changes_password">
                                                <span data-feather="lock"></span> Chnage Password</a>
                                        </li>
                                    </ul>
                                    <a href="<?php echo base_url(); ?>employee/logout" class="nav-author__signout">
                                        <span data-feather="log-out"></span> Sign Out</a>
                                </div>
                            </div>
                            <!-- ends: .dropdown-wrapper -->
                        </div>
                    </li>
                    <!-- ends: .nav-author -->
                </ul>
                <!-- ends: .navbar-right__menu -->
                <div class="navbar-right__mobileAction d-md-none">
                    <a href="#" class="btn-search">
                        <span data-feather="search"></span>
                        <span data-feather="x"></span></a>
                    <a href="#" class="btn-author-action">
                        <span data-feather="more-vertical"></span></a>
                </div>
            </div>
            <!-- ends: .navbar-right -->
        </nav>
    </header>
	<style>
	.navbar-right__menu .nav-author__info .author-img img {
     height: 34px;
    }
	</style>
    <?php include('sidebar.php'); ?>
