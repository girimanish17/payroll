    <main class="main-content">
        <aside class="sidebar admin-sidebar">
            <div class="admin-sidebar-brand">
                <p><img src="<?php echo base_url();?>assets/img/logo.jpeg" width="100" alt="Logo"></p>
            </div>
            <div class="admin-sidebar-wrapper js-scrollbar">
                <ul class="menu">
                    <li class="menu-item active">
					<?php if($this->session->userdata('user_type')==2){ ?>
                        <a href="<?php echo base_url(); ?>admin/dashboard" class="menu-link">
                            <span class="menu-label">
                                <span class="menu-name">Home</span>
                            </span>
                            <span class="menu-icon">
                                <i class="la la-th-large"></i>
                            </span>
                        </a>
					<?php }elseif($this->session->userdata('user_type')==3){?>
					 <a href="<?php echo base_url(); ?>superadmin/dashboard" class="menu-link">
                            <span class="menu-label">
                                <span class="menu-name">Home</span>
                            </span>
                            <span class="menu-icon">
                                <i class="la la-th-large"></i>
                            </span>
                        </a>
					<?php } ?>
                        <!--submenu-->
                    </li>
                    <?php if($this->session->userdata('user_type')==2){ ?>
                    <!--<li class="menu-item ">
                        <a href="<?php echo base_url(); ?>admin/employee" class="open-dropdown menu-link">
                            <span class="menu-label">
                                <span class="menu-name">Employees<span class="menu-arrow"></span></span>
                            </span>
                            <span class="menu-icon">
                                <i class="la la-id-card"></i>
                            </span>
                        </a>
						<ul class="sub-menu">
                            <li class="menu-item ">
                                <a href="<?php echo base_url(); ?>admin/employee/emp_expense_claim" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Expense Claim</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-shirtsinbulk"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>-->
					
					<li class="menu-item ">
                        <a href="#" class="open-dropdown menu-link">
                            <span class="menu-label">
                                <span class="menu-name">Employees
                                    <span class="menu-arrow"></span>
                            </span>
                            </span>
                            <span class="menu-icon">
                                <i class="la la-shirtsinbulk"></i>
                            </span>
                        </a>
                        <!--submenu-->
                        <ul class="sub-menu">
                            <li class="menu-item ">
                                <a href="<?php echo base_url(); ?>admin/employee" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Employees</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-shirtsinbulk"></i>
                                    </span>
                                </a>
                            </li>
							<li class="menu-item ">
                                <a href="<?php echo base_url(); ?>admin/emp_expense_claim" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Expense Claim</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-shirtsinbulk"></i>
                                    </span>
                                </a>
                            </li>
							<li class="menu-item ">
                                <a href="<?php echo base_url(); ?>admin/account_type" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Account Type</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-shirtsinbulk"></i>
                                    </span>
                                </a>
                            </li>
							<li class="menu-item ">
                                <a href="<?php echo base_url(); ?>admin/expense_type" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Expense Type</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-shirtsinbulk"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="#" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name"></span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-certificate"></i>
                                    </span>
                                </a>
                                <!--submenu-->
                            </li>
                            
                        </ul>
                    </li>
					
                    <li class="menu-item ">
                        <a href="#" class="open-dropdown menu-link">
                            <span class="menu-label">
                                <span class="menu-name">Core HR
                                    <span class="menu-arrow"></span>
                            </span>
                            </span>
                            <span class="menu-icon">
                                <i class="la la-user-tie"></i>
                            </span>
                        </a>
                        <!--submenu-->
                        <ul class="sub-menu">
                            <li class="menu-item ">
                                <a href="<?php echo base_url(); ?>admin/department" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Department</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-shirtsinbulk"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="<?php echo base_url(); ?>admin/designation" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Designation</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-certificate"></i>
                                    </span>
                                </a>
                                <!--submenu-->
                            </li>
                            <li class="menu-item ">
                                <a href="<?php echo base_url(); ?>admin/announcements" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Announcements</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-bullhorn"></i>
                                    </span>
                                </a>
                                <!--submenu-->
                            </li>
                            <li class="menu-item ">
                                <a href="<?php echo base_url(); ?>admin/policies" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Policies</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-list-ul"></i>
                                    </span>
                                </a>
                                <!--submenu-->
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item">
                        <a href="#" class="open-dropdown menu-link">
                            <span class="menu-label">
                                <span class="menu-name">Attendance
                                    <span class="menu-arrow"></span>
                            </span>
                            </span>
                            <span class="menu-icon">
                                <i class="la la-th-list"></i>
                            </span>
                        </a>
                        <!--submenu-->
                        <ul class="sub-menu">
                            <li class="menu-item ">
                                <a href="<?php echo base_url(); ?>admin/attendance" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Attendance</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-user-check"></i>
                                    </span>
                                </a>
                                <!--submenu-->
                            </li>
                            <li class="menu-item ">
                                <a href="<?php echo base_url(); ?>admin/manual_attendance" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Manual Attendance</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-user-edit"></i>
                                    </span>
                                </a>
                                <!--submenu-->
                            </li>
                            <li class="menu-item ">
                                <a href="<?php echo base_url() ?>admin/monthly_report" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Monthly Report</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-paste"></i>
                                    </span>
                                </a>
                                <!--submenu-->
                            </li>
                            <li class="menu-item ">
                                <a href="<?php echo base_url(); ?>admin/overtime_request" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Overtime Request</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-user-clock"></i>
                                    </span>
                                </a>
                                <!--submenu-->
                            </li>


                        </ul>
                    </li>
                  
                    <li class="menu-item">
                        <a href="finance.html" class=" menu-link">
                            <span class="menu-label">
                                <span class="menu-name">Finance</span>
                            </span>
                            <span class="menu-icon">
                                <i class="la la-hand-holding-usd"></i>
                            </span>
                        </a>
                    </li>
                   

                    <li class="menu-item">
                        <a href="#" onclick="return alert('comming soon')" class="open-dropdown menu-link">
                            <span class="menu-label">
                                <span class="menu-name">Performance (PMS)
                                    <span class="menu-arrow"></span>
                            </span>
                            </span>
                            <span class="menu-icon">
                                <i class="la la-chart-area"></i>
                            </span>
                        </a>
                        <!--submenu-->

                        <ul class="sub-menu">
                            <li class="menu-item ">
                                <a href="kpi_indicator.html" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">KPI (Indicator)</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-traffic-light"></i>
                                    </span>
                                </a>
                                <!--submenu-->
                            </li>
                            <li class="menu-item ">
                                <a href="kpi_appraisal.html" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">KPI (Appraisal)</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-user-shield"></i>
                                    </span>
                                </a>
                                <!--submenu-->
                            </li>
                            <li class="menu-item ">
                                <a href="competencies.html" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Competencies</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-user-cog"></i>
                                    </span>
                                </a>
                                <!--submenu-->
                            </li>
                            <li class="menu-item ">
                                <a href="track_goal.html" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Track Goal (OKRs)</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-bullseye"></i>
                                    </span>
                                </a>
                                <!--submenu-->
                            </li>
                            <li class="menu-item ">
                                <a href="goal_type.html" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Goal Type</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-poll-h"></i>
                                    </span>
                                </a>
                                <!--submenu-->
                            </li>
                            <li class="menu-item ">
                                <a href="goal_calender.html" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Goal Calender</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-calculator"></i>
                                    </span>
                                </a>
                                <!--submenu-->
                            </li>
                        </ul>
                    </li>

                  
                    <li class="menu-item">
                        <a href="<?php echo base_url(); ?>admin/payroll" class=" menu-link">
                            <span class="menu-label">
                                <span class="menu-name">Payroll</span>
                            </span>
                            <span class="menu-icon">
                                <i class="la la-file"></i>
                            </span>
                        </a>
                    </li>

                    <!--  <?php echo base_url(); ?>admin/payroll -->
                    <li class="menu-item">
                        <a href="#" onclick="return alert('comming soon');" class=" menu-link">
                            <span class="menu-label">
                                <span class="menu-name">Payroll</span>
                            </span>
                            <span class="menu-icon">
                                <i class="la la-file"></i>
                            </span>
                        </a>
                    </li>
                    
					<li class="menu-item ">
                        <a href="#" class="open-dropdown menu-link">
                            <span class="menu-label">
                                <span class="menu-name">Job Vacancies
                                    <span class="menu-arrow"></span>
                            </span>
                            </span>
                            <span class="menu-icon">
                                <i class="la la-shirtsinbulk"></i>
                            </span>
                        </a>
                        <!--submenu-->
                        <ul class="sub-menu">
                            <li class="menu-item ">
                                <a href="<?php echo base_url(); ?>admin/offer_breakup" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Offer Breakup</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-shirtsinbulk"></i>
                                    </span>
                                </a>
                            </li>
							<li class="menu-item ">
                                <a href="<?php echo base_url(); ?>admin/job_vacancies" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Job Vacancy Master</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-shirtsinbulk"></i>
                                    </span>
                                </a>
                            </li>
							<li class="menu-item "><!--job_applications-->
                                <a href="<?php echo base_url(); ?>admin/job_applications" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Employee Job Applications</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-shirtsinbulk"></i>
                                    </span>
                                </a>
                            </li>
							
                            <li class="menu-item ">
                                <a href="#" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name"></span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-certificate"></i>
                                    </span>
                                </a>
                                <!--submenu-->
                            </li>
                            
                        </ul>
                    </li>
					
                    
					
					<li class="menu-item ">
                        <a href="#" class="open-dropdown menu-link">
                            <span class="menu-label">
                                <span class="menu-name">Leave Request
                                    <span class="menu-arrow"></span>
                            </span>
                            </span>
                            <span class="menu-icon">
                                <i class="la la-user-tie"></i>
                            </span>
                        </a>
                        <!--submenu-->
                        <ul class="sub-menu">
                            <li class="menu-item ">
                                <a href="<?php echo base_url(); ?>admin/leave_request" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Leave Request</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-shirtsinbulk"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="<?php echo base_url(); ?>admin/compoff_leave_request" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Comp Off Leave Request</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-certificate"></i>
                                    </span>
                                </a>
                                <!--submenu-->
                            </li>
                            
                            <li class="menu-item ">
                                <a href="<?php echo base_url(); ?>admin/policies" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Policies</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-list-ul"></i>
                                    </span>
                                </a>
                                <!--submenu-->
                            </li>
                        </ul>
                    </li>
					
					<li class="menu-item ">
                        <a href="#" class="open-dropdown menu-link">
                            <span class="menu-label">
                                <span class="menu-name">Upcoming Holidays
                                    <span class="menu-arrow"></span>
                            </span>
                            </span>
                            <span class="menu-icon">
                                <i class="la la-shirtsinbulk"></i>
                            </span>
                        </a>
                        <!--submenu-->
                        <ul class="sub-menu">
                            <li class="menu-item ">
                                <a href="<?php echo base_url(); ?>admin/holidays_list" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Upcoming Holiday List</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-shirtsinbulk"></i>
                                    </span>
                                </a>
                            </li>
							
                            <li class="menu-item ">
                                <a href="#" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name"></span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-certificate"></i>
                                    </span>
                                </a>
                                <!--submenu-->
                            </li>
                            
                        </ul>
                    </li>
					
					<li class="menu-item ">
                        <a href="#" class="open-dropdown menu-link">
                            <span class="menu-label">
                                <span class="menu-name">Awards
                                    <span class="menu-arrow"></span>
                            </span>
                            </span>
                            <span class="menu-icon">
                                <i class="la la-shirtsinbulk"></i>
                            </span>
                        </a>
                        <!--submenu-->
                        <ul class="sub-menu">
                            <li class="menu-item ">
                                <a href="<?php echo base_url(); ?>admin/awards" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Awards List</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-shirtsinbulk"></i>
                                    </span>
                                </a>
                            </li>
							
                            <li class="menu-item ">
                                <a href="#" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name"></span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-certificate"></i>
                                    </span>
                                </a>
                                <!--submenu-->
                            </li>
                            
                        </ul>
                    </li>

                    <li class="menu-item ">
                        <a href="#" class="open-dropdown menu-link">
                            <span class="menu-label">
                                <span class="menu-name">Company
                                    <span class="menu-arrow"></span>
                            </span>
                            </span>
                            <span class="menu-icon">
                                <i class="la la-shirtsinbulk"></i>
                            </span>
                        </a>
                        <!--submenu-->
                        <ul class="sub-menu">
                            <li class="menu-item ">
                                <a href="<?php echo base_url(); ?>admin/general_option" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">General Option</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-shirtsinbulk"></i>
                                    </span>
                                </a>
                            </li>
							<li class="menu-item ">
                                <a href="<?php echo base_url(); ?>admin/sequence_number" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Sequence Number</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-shirtsinbulk"></i>
                                    </span>
                                </a>
                            </li>
							<li class="menu-item ">
                                <a href="<?php echo base_url(); ?>admin/password_option" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Password Option</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-shirtsinbulk"></i>
                                    </span>
                                </a>
                            </li>
							<li class="menu-item ">
                                <a href="<?php echo base_url(); ?>admin/list_of_value" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">List of Value</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-shirtsinbulk"></i>
                                    </span>
                                </a>
                            </li>
								
							<li class="menu-item ">
                                <a href="#" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name"></span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-shirtsinbulk"></i>
                                    </span>
                                </a>
                            </li>
							
						
							<li class="menu-item ">
                                <a href="<?php echo base_url(); ?>admin/professional_tax_slab" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Professional Tax Slab</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-shirtsinbulk"></i>
                                    </span>
                                </a>
                            </li>


							<li class="menu-item ">
                                <a href="#" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name"></span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-shirtsinbulk"></i>
                                    </span>
                                </a>
                            </li>
							<li class="menu-item ">
                                <a href="<?php echo base_url(); ?>admin/tax_slab" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Tax Slab</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-traffic-light"></i>
                                    </span>
                                </a>
                                <!--submenu-->
                            </li>
							<li class="menu-item ">
                                <a href="#" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name"></span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-traffic-light"></i>
                                    </span>
                                </a>
                                <!--submenu-->
                            </li>


                            





                            
                        </ul>
                    </li>









               <!-- recruitment.html -->
                    <li class="menu-item ">
                        <a href="#" onclick="return alert('comming soon');" class="menu-link">
                            <span class="menu-label">
                                <span class="menu-name">Recruitment (ATS)</span>
                            </span>
                            <span class="menu-icon">
                                <i class="la la-portrait"></i>
                            </span>
                        </a>
                        <!--submenu-->
                    </li>
                    
                    <li class="menu-item ">
                        <a href="#" onclick="return alert('comming soon');" class="menu-link">
                        <a href="settings.html"  class="menu-link">
                            <span class="menu-label">
                                <span class="menu-name">Settings</span>
                            </span>
                            <span class="menu-icon">
                                <i class="la la-cog"></i>
                            </span>
                        </a>
                        <!--submenu-->
                    </li>
<!--SuperAdmin-->
                  <?php }elseif($this->session->userdata('user_type')==3){?>
				
                    <li class="menu-item">
                        <a href="<?php echo base_url(); ?>superadmin/companies" class=" menu-link">
                            <span class="menu-label">
                                <span class="menu-name">Companies</span>
                            </span>
                            <span class="menu-icon">
                                <i class="la la-city"></i>
                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="<?php echo base_url(); ?>superadmin/contact_requests" class=" menu-link">
                            <span class="menu-label">
                                <span class="menu-name">Contact Requests</span>
                            </span>
                            <span class="menu-icon">
                                <i class="la la-user-plus"></i>
                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="<?php echo base_url(); ?>superadmin/subscription_plans" class=" menu-link">
                            <span class="menu-label">
                                <span class="menu-name">Subscription Plans</span>
                            </span>
                            <span class="menu-icon">
                                <i class="la la-clipboard-check"></i>
                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="<?php echo base_url(); ?>superadmin/invoices" class=" menu-link">
                            <span class="menu-label">
                                <span class="menu-name">Invoices</span>
                            </span>
                            <span class="menu-icon">
                                <i class="la la-file-invoice-dollar"></i>
                            </span>
                        </a>
                    </li>
                    <!--<li class="menu-item">
                        <a href="<?php echo base_url(); ?>superadmin/superadmin_users" class=" menu-link">
                            <span class="menu-label">
                                <span class="menu-name">Admins</span>
                            </span>
                            <span class="menu-icon">
                                <i class="la la-user-tie"></i>
                            </span>
                        </a>
                    </li>-->
                    <li class="menu-item">
                        <a href="<?php echo base_url(); ?>superadmin/pages" class=" menu-link">
                            <span class="menu-label">
                                <span class="menu-name">Pages</span>
                            </span>
                            <span class="menu-icon">
                                <i class="la la-file-alt"></i>
                            </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="<?php echo base_url(); ?>superadmin/pages" class=" menu-link">
                            <span class="menu-label">
                                <span class="menu-name">Pages</span>
                            </span>
                            <span class="menu-icon">
                                <i class="la la-file-alt"></i>
                            </span>
                        </a>
                    </li>
                    
                    <li class="menu-item">
                        <a href="javascript:void(0)" class="open-dropdown menu-link">
                            <span class="menu-label">
                                <span class="menu-name">CMS
                                    <span class="menu-arrow"></span>
                            </span>
                            </span>
                            <span class="menu-icon">
                                <i class="la la-desktop"></i>
                            </span>
                        </a>
                        <!--submenu-->
                        <ul class="sub-menu">
                            <li class="menu-item ">
                                <a href="<?php echo base_url(); ?>superadmin/faq_categories" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">FAQ Category</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-sitemap"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="<?php echo base_url(); ?>superadmin/faq" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">FAQ</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-comments"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="<?php echo base_url(); ?>superadmin/features" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Features</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-star-of-david"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
					
					<li class="menu-item">
                        <!-- <a href="javascript:void(0)" class="open-dropdown menu-link">
                            <span class="menu-label">
                                <span class="menu-name">Settings
                                    <span class="menu-arrow"></span>
                            </span>
                            </span>
                            <span class="menu-icon">
                                <i class="la la-cog"></i>
                            </span>
                        </a> -->
                        <li class="menu-item ">
                                <a href="<?php echo base_url(); ?>superadmin/country" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Country</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-users-cog"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="<?php echo base_url(); ?>superadmin/bulletin_category" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Bulletin Category</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-users-cog"></i>
                                    </span>
                                </a>
                            </li>
                        <!--submenu-->
                        <ul class="sub-menu">
                        <li class="menu-item ">
                                <a href="<?php echo base_url(); ?>superadmin/qualification_level" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Qualification Level</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-users-cog"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="<?php echo base_url(); ?>superadmin/bank" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Bank</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-users-cog"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="<?php echo base_url(); ?>superadmin/bankAccountType" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Bank Account Type</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-users-cog"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="<?php echo base_url(); ?>superadmin/bloodgroup" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Blood Group</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-users-cog"></i>
                                    </span>
                                </a>
                            </li>
                           
                                                                                 
                       
                            <li class="menu-item ">
                                <a href="<?php echo base_url(); ?>superadmin/edit" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">General Settings</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-users-cog"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="<?php echo base_url(); ?>superadmin/email_templates" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Email Templates</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-envelope-square"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="<?php echo base_url(); ?>superadmin/stripe_settings" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Payment Setting</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-hand-holding-usd"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="<?php echo base_url(); ?>superadmin/language" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Language</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-language"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="<?php echo base_url(); ?>superadmin/update_new_version" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Update Log</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-undo-alt"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="<?php echo base_url(); ?>superadmin/smtp_settings" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Smtp Setting</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-chalkboard-teacher"></i>
                                    </span>
                                </a>
                            </li>
							 <li class="menu-item ">
                               
                            </li>
                            <li class="menu-item ">
                                <a href="<?php echo base_url(); ?>superadmin/custom_modules" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Custom Module</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-boxes"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="<?php echo base_url(); ?>superadmin/google_captcha" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Google Captcha Setting</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="la la-sync"></i>
                                    </span>
                                </a>
                            </li>
                        
                        </ul>
                    </li>
					
					
                    <li class="menu-item">
                       
                        <!--submenu-->
                       
                    </li>

				  <?php } ?>

                </ul>
            </div>
        </aside>