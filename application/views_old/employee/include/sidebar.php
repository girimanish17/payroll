    <main class="main-content">

        <aside class="sidebar admin-sidebar">
            <div class="admin-sidebar-brand">
                <p><img src="<?php echo base_url(); ?>assets/employee/img/Nimbus_Logo.jpg" width="100" alt="Nimbus Logo"></p>
            </div>
            <div class="admin-sidebar-wrapper js-scrollbar">
                <ul class="menu">
                    <li class="menu-item ">
                        <a href="<?php echo base_url(); ?>employee/dashboard" class="menu-link">
                            <span class="menu-label">
                                <span class="menu-name">Home</span>
                            </span>
                            <span class="menu-icon">
                                <i class="la la-th-large"></i>
                            </span>
                        </a>
                    </li>
                    <li class="menu-item ">
                        <a href="#" class="open-dropdown menu-link">
                            <span class="menu-label">
                                <span class="menu-name">Leaves
                                    <span class="menu-arrow"></span>
                            </span>
                            </span>
                            <span class="menu-icon">
                                <i class="la la-sign-out-alt"></i>
                            </span>
                        </a>
                        <!--submenu-->
                       <!--  apply-leave.html -->
                        <ul class="sub-menu">
                            <li class="menu-item ">
                                <a href="<?php echo base_url(); ?>employee/apply_leave" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Apply Leave</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-user-check"></i>
                                    </span>
                                </a>
                            </li>
                           <!--  my-leaves.html -->
                            <li class="menu-item ">
                                <a href="<?php echo base_url(); ?>employee/my_leaves" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">My Leaves</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-user-lock"></i>
                                    </span>
                                </a>
                            </li>
							<!--  my-leaves.html -->
                            <li class="menu-item ">
                                <a href="<?php echo base_url(); ?>employee/compoff_leaves" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">My CompOff Leave Application</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-user-lock"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item ">
                        <a href="#" class="open-dropdown menu-link">
                            <span class="menu-label">
                                <span class="menu-name">Self
                                    <span class="menu-arrow"></span>
                            </span>
                            </span>
                            <span class="menu-icon">
                                <i class="la la-user-clock"></i>
                            </span>
                        </a>
                        <!--submenu-->
                        <!-- salary-slips.html -->
                        <ul class="sub-menu">
                            <li class="menu-item ">
                                <a href="<?php echo base_url(); ?>employee/salary_slips" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Salary Slips</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-file-invoice-dollar"></i>
                                    </span>
                                </a>
                            </li>
                            <!-- expense-claims.html -->
                            <li class="menu-item ">
                                <a href="<?php echo base_url(); ?>employee/expense_claims" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Expense Claims</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-file-invoice"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- job-vacancies.html -->
                    <li class="menu-item">
                        <a href="<?php echo base_url(); ?>employee/job_vacancies" class=" menu-link">
                            <span class="menu-label">
                                <span class="menu-name">Job Vacancies</span>
                            </span>
                            <span class="menu-icon">
                                <i class="la la-user-plus"></i>
                            </span>
                        </a>
                    </li>
                    <!-- attendance.html -->
                    <li class="menu-item">
                        <a href="<?php echo base_url(); ?>employee/attendance" class=" menu-link">
                            <span class="menu-label">
                                <span class="menu-name">Attendance</span>
                            </span>
                            <span class="menu-icon">
                                <i class="la la-user-check"></i>
                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="open-dropdown menu-link">
                            <span class="menu-label">
                                <span class="menu-name">My Account
                                    <span class="menu-arrow"></span>
                            </span>
                            </span>
                            <span class="menu-icon">
                                <i class="la la-user-cog"></i>
                            </span>
                        </a>
                        <!--submenu-->
                       <!--  changes-password.html -->
                        <ul class="sub-menu">
                            <li class="menu-item ">
                                <a href="<?php echo base_url(); ?>employee/changes_password" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Changes Password</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-lock"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="<?php echo base_url(); ?>employee/logout" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Log Out</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-sign-out-alt"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </aside>