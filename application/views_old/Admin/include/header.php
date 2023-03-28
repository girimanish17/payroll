<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
	<script type="text/javascript" src="<?php echo base_url();?>assets/assets/vendor_assets/js/chartss.js"></script>
    <!-- inject:css-->

    <link rel="stylesheet" href="<?php echo base_url();?>assets/assets/vendor_assets/css/bootstrap/bootstrap.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/assets/vendor_assets/css/daterangepicker.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/assets/vendor_assets/css/fontawesome.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/assets/vendor_assets/css/footable.standalone.min.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/assets/vendor_assets/css/fullcalendar@5.2.0.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/assets/vendor_assets/css/jquery-jvectormap-2.0.5.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/assets/vendor_assets/css/jquery.mCustomScrollbar.min.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/assets/vendor_assets/css/leaflet.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/assets/vendor_assets/css/line-awesome.min.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/assets/vendor_assets/css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/assets/vendor_assets/css/MarkerCluster.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/assets/vendor_assets/css/MarkerCluster.Default.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/assets/vendor_assets/css/select2.min.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/assets/vendor_assets/css/slick.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/assets/vendor_assets/css/star-rating-svg.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/assets/vendor_assets/css/trumbowyg.min.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/assets/vendor_assets/css/wickedpicker.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/assets/vendor_assets/css/bootstrap-material-datetimepicker.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/style.css">

    <!-- endinject -->

    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>assets/img/favicon.png">
</head>

<body class="layout-light side-menu">
    <div class="mobile-search"></div>

    <div class="mobile-author-actions"></div>
    <header class="header-top">
        <nav class="navbar navbar-light">
            <div class="navbar-left">
                <a href="" class="sidebar-toggle">
                    <img class="svg" src="<?php echo base_url();?>assets/img/svg/bars.svg" alt="img"></a>
                <a class="navbar-brand" href="javascript:void(0)"><img class="svg dark" src="<?php echo base_url();?>assets/img/Nimbus_Logo.jpg" alt="svg"><img class="light" src="<?php echo base_url();?>assets/img/Nimbus_Logo.jpg" alt="img"></a>

            </div>
            <!-- ends: navbar-left -->
            <?php   $user = $this->common_model->GetSingleData('users',array('user_id' =>$this->session->userdata('user_id')));
			$type = $this->session->userdata('user_type');
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
                                        <span><?php if($type==3){echo "Superadmin";}elseif($type==2){echo "Admin";}else{echo "Employee";}?></span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-wrapper">

                                <div class="nav-author__options">
								<?php if($type==2){ ?>
                                    <ul>
                                        <li>
                                            <a href="<?php echo base_url(); ?>admin/profile">
                                                <span data-feather="user"></span> Profile</a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <span data-feather="settings"></span> Settings</a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <span data-feather="users"></span> Activity</a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <span data-feather="bell"></span> Help</a>
                                        </li>
                                    </ul>
								<?php }else if($type==3){?>
									<ul>
                                        <li>
                                            <a href="<?php echo base_url();?>superadmin/profile">
                                                <span data-feather="user"></span>My Profile</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url();?>superadmin/changes_password">
                                                <span data-feather="lock"></span> Chnage Password</a>
                                        </li>
                                    </ul>
								<?php }?>
                                    <a href="<?php echo base_url(); ?>admin/logout" class="nav-author__signout">
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

<?php include('sidebar.php'); ?>  