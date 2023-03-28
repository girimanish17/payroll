 <?php include('include/header.php'); ?>  
        <div class="contents demo-card expanded">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-main">
                            <ul class="atbd-breadcrumb nav">
                                <li class="atbd-breadcrumb__item">
                                    <a href="javascript:void(0)"> Home </a>
                                    <span class="breadcrumb__seperator"> <span class="la la-angle-right"></span> </span>
                                </li>
                                <li class="atbd-breadcrumb__item">
                                    <a href="employee.html"> Employee </a>
                                    <span class="breadcrumb__seperator"> <span class="la la-angle-right"></span> </span>
                                </li>
                                <li class="atbd-breadcrumb__item">
                                    <span>Role & Privilages</span>
                                </li>
                            </ul>
                            <div class="row align-items-center profile_complete">
                                <div class="col-auto dropdown dropdown-hover">
                                    <a class="btn-link text-dark fw-600" href="javascript:void(0)">Profile completeness
                                        <span data-feather=chevron-down></span></a>
                                    <div class="dropdown-default">
                                        <a class="dropdown-item" href="department.html"><i data-feather="menu"></i> <span>Department <i data-feather="check-circle" class="text-success"></i></span> </a>
                                        <a class="dropdown-item" href="designation.html"><i data-feather="list"></i> <span>Designation</span> <i data-feather="check-circle" class="text-success"></i></a>
                                        <a class="dropdown-item" href="role_&_Privilages.html"><i data-feather="unlock"></i> <span>Set Roles</span> <i data-feather="check-circle" class="text-success"></i></a>
                                        <a class="dropdown-item" href="shift_&_scheduling.html"><i data-feather="clock"></i> <span>Office Shifts</span> <i data-feather="check-circle" class="text-success"></i></a>
                                        <a class="dropdown-item" href="#"><i data-feather="list"></i> <span>Competencies</span> <i data-feather="check-circle" class="text-success"></i></a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#"><i data-feather="help-circle"></i> <span>Need more help?</span> </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="progress-wrap d-flex align-items-center mb-0" style="width: 120px;">
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span class="progress-percentage fw-600">60%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div id="smartwizard" class="sw-main sw-theme-arrows">
                    <ul class="nav nav-tabs step-anchor">
                        <li>
                            <a href="<?php echo base_url(); ?>admin/employee">
                                <div class="d-flex justify-content-between border-0 radius-xl">
                                    <div class="application-task d-flex align-items-center">
                                        <div class="application-task-icon wh-50 mr-15 bg-primary content-center">
                                            <i class="fas fa-user text-white font-size-20"></i>
                                        </div>
                                        <div class="application-task-content">
                                            <h5>Employee</h5>
                                            <span class="text-light fs-13 mt-1 text-capitalize">Set up Employee</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="active">
                            <a href="<?php echo base_url(); ?>admin/roles">
                                <div class="d-flex justify-content-between border-0 radius-xl">
                                    <div class="application-task d-flex align-items-center">
                                        <div class="application-task-icon wh-50 mr-15 bg-secondary content-center">
                                            <i class="fas fa-users-cog text-white font-size-20"></i>
                                        </div>
                                        <div class="application-task-content">
                                            <h5>Role & Privilages</h5>
                                            <span class="text-light fs-13 mt-1 text-capitalize">Set Roles</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="">
                            <a href="shift_&_scheduling.html">
                                <div class="d-flex justify-content-between border-0 radius-xl">
                                    <div class="application-task d-flex align-items-center">
                                        <div class="application-task-icon wh-50 mr-15 bg-success  content-center">
                                            <i class="fas fa-stopwatch text-white font-size-20"></i>
                                        </div>
                                        <div class="application-task-content">
                                            <h5>Shift & Scheduling</h5>
                                            <span class="text-light fs-13 mt-1 text-capitalize">Manage Shifts</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="">
                            <a href="employee_exit.html">
                                <div class="d-flex justify-content-between border-0 radius-xl">
                                    <div class="application-task d-flex align-items-center">
                                        <div class="application-task-icon wh-50 mr-15 bg-warning content-center">
                                            <i class="fas fa-sign-out-alt text-white font-size-20"></i>
                                        </div>
                                        <div class="application-task-content">
                                            <h5>Employee Exit</h5>
                                            <span class="text-light fs-13 mt-1 text-capitalize">Set up Employee
                                                Exit</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class=" color-dark fw-600">List All Roles</h5>
                                <div class="card-extra">
                                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add_new">
                                        <i class="la la-plus"></i> Add New Employee
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="userDatatable projectDatatable project-table bg-white w-100 border-0">
                                    <!-- Start Table Responsive -->
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-basic">
                                            <thead>
                                                <tr class="userDatatable-header">
                                                    <th><span class="userDatatable-title">Role Name</span>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title">Menu Permission</span>
                                                    </th>
                                                    <th>
                                                        <span class="userDatatable-title">Added Date</span>
                                                    </th>
                                                    <th class="text-right">
                                                        <span class="userDatatable-title">Actions</span>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Employee</td>
                                                    <td>Custom Menu Access</td>
                                                    <td>21-09-21</td>
                                                    <td>
                                                        <div class="d-flex justify-content-sm-end action_btn">
                                                            <a href="#" class="btn btn-default btn-primary btn-circle pl-2 pr-2 mr-2">
                                                                <span data-feather="edit"></span>
                                                            </a>
                                                            <a href="#" class="btn btn-default btn-danger btn-circle pl-2 pr-2">
                                                                <span data-feather="trash-2"></span>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- End: tr -->
                                                <tr>
                                                    <td>Employee</td>
                                                    <td>Custom Menu Access</td>
                                                    <td>21-09-21</td>
                                                    <td>
                                                        <div class="d-flex justify-content-sm-end action_btn">
                                                            <a href="#" class="btn btn-default btn-primary btn-circle pl-2 pr-2 mr-2"><span
                                                                    data-feather="edit"></span></a>
                                                            <a href="#" class="btn btn-default btn-danger btn-circle pl-2 pr-2"><span
                                                                    data-feather="trash-2"></span></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- End: tr -->
                                                <tr>
                                                    <td>Employee</td>
                                                    <td>Custom Menu Access</td>
                                                    <td>21-09-21</td>
                                                    <td>
                                                        <div class="d-flex justify-content-sm-end action_btn">
                                                            <a href="#" class="btn btn-default btn-primary btn-circle pl-2 pr-2 mr-2"><span
                                                                    data-feather="edit"></span></a>
                                                            <a href="#" class="btn btn-default btn-danger btn-circle pl-2 pr-2"><span
                                                                    data-feather="trash-2"></span></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- End: tr -->

                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- Table Responsive End -->
                                    <div class=" justify-content-sm-end justify-content-start pt-15 owerflow">
                                        <ul class="atbd-pagination float-left d-flex align-items-center">
                                            <li class="atbd-pagination__item mr-2">
                                                <div class="paging-option">
                                                    <select name="page-number" class="page-selection">
                                                        <option value="20">20/page</option>
                                                        <option value="40">40/page</option>
                                                        <option value="60">60/page</option>
                                                    </select>

                                                </div>
                                            </li>
                                            <li>
                                                <div class="paging-option">
                                                    Showing 1 to 50 of 408 entries
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="atbd-pagination d-flex float-right">
                                            <li class="atbd-pagination__item">
                                                <a href="#" class="atbd-pagination__link pagination-control"><span
                                                        class="la la-angle-left"></span></a>
                                                <a href="#" class="atbd-pagination__link"><span
                                                        class="page-number">1</span></a>
                                                <a href="#" class="atbd-pagination__link active"><span
                                                        class="page-number">2</span></a>
                                                <a href="#" class="atbd-pagination__link"><span
                                                        class="page-number">3</span></a>
                                                <a href="#" class="atbd-pagination__link pagination-control"><span
                                                        class="page-number">...</span></a>
                                                <a href="#" class="atbd-pagination__link"><span
                                                        class="page-number">12</span></a>
                                                <a href="#" class="atbd-pagination__link pagination-control"><span
                                                        class="la la-angle-right"></span></a>
                                                <a href="#" class="atbd-pagination__option">
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End: .col -->
                </div>
            </div>
        </div>
       
    </main>
    <?php include('include/footer.php'); ?>  

    <!-- Modal -->
    <div class="modal fade md" id="add_new" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content" id="ajax_view_modal">
                <div class="modal-header">
                    <h5 class="modal-title"> Add New Role & Privilages</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
                            aria-hidden="true">×</span> </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row mb-n25">
                                        <div class="col-md-6 mb-25">
                                            <div class="with-icon">
                                                <span class="la-user lar color-light"></span>
                                                <input type="text" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputNameIcon" placeholder="Enter Your Role Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-25">
                                            <div class="mb-25  select-style2">
                                                <div class=" atbd-select ">
                                                    <select name="select-alerts2" id="selects-alerts2" class="form-control ih-medium ip-lightradius-xs b-light">
                                                        <option></option>
                                                        <option value="">Select Access</option>
                                                        <option value="1">All Menu Access</option>
                                                        <option value="2">Custom Menu Access</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <h4 class="title-text border-bottom pb-2 mb-2">Staff Apps</h4>
                                        <div id="all_resources">
                                            <div class="demo-section k-content">
                                                <div>
                                                    <div id="treeview_r1"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <h4 class="title-text border-bottom pb-2 mb-2">Company Apps</h4>
                                        <div id="all_resources">
                                            <div class="demo-section k-content">
                                                <div>
                                                    <div id="treeview_r2"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-sm">Submit</button>
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="https://phpstack-670569-2197890.cloudwaysapps.com/public/assets/plugins/kendo/kendo.all.min.js"></script>
        <script src="https://phpstack-670569-2197890.cloudwaysapps.com/public/assets/plugins/kendo/kendo.timezones.min.js"></script>
        <script type="text/javascript">
            //$(document).ready(function(){
            jQuery("#treeview_r1").kendoTreeView({
                checkboxes: {
                    checkChildren: true,
                    template: "<label class='custom-control custom-checkbox' ><input type='checkbox' class='#= item.class #' name='role_resources[]' value='#= item.value #'><span class='custom-control-label'>#= item.text #</span></label>"
                },
                check: onCheck,
                dataSource: [
                    // Attendance
                    {
                        id: "",
                        class: "role-checkbox custom-control-input input-light-primary",
                        text: "Attendance",
                        value: "attendance",
                    },
                    //Projects
                    {
                        id: "",
                        class: "role-checkbox custom-control-input input-light-primary",
                        text: "Projects",
                        add_info: "",
                        value: "hr_projects",
                        items: [{
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Projects",
                            value: "project1",
                            items: [{
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Enable Module",
                                value: "project1",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Add",
                                value: "project2",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Edit",
                                value: "project3",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Delete",
                                value: "project4",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Update Status",
                                value: "project5",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Discussion",
                                value: "project6",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Bugs",
                                value: "project7",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Tasks",
                                value: "project8",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Attach files",
                                value: "project9",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Note",
                                value: "project10",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Time Logs",
                                value: "project11",
                            }]
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Projects Calendar",
                            value: "projects_calendar",
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Projects Kanban Board",
                            value: "projects_sboard",
                        }, ]
                    },
                    //Tasks
                    {
                        id: "",
                        class: "role-checkbox custom-control-input input-light-primary",
                        text: "Tasks",
                        add_info: "",
                        value: "hr_tasks",
                        items: [{
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Tasks",
                            value: "task1",
                            items: [{
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Enable Module",
                                value: "task1",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Add",
                                value: "task2",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Edit",
                                value: "task3",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Delete",
                                value: "task4",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Update Status",
                                value: "task5",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Discussion",
                                value: "task6",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Attach files",
                                value: "task7",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Note",
                                value: "task8",
                            }]
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Tasks Calendar",
                            value: "tasks_calendar",
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Tasks Kanban Board",
                            value: "tasks_sboard",
                        }, ]
                    },
                    //Payroll
                    {
                        id: "",
                        class: "role-checkbox custom-control-input input-light-primary",
                        text: "Payroll",
                        add_info: "",
                        value: "hr_payroll",
                        items: [{
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Set up Payroll",
                            value: "pay1",
                            items: [{
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Company Payroll List",
                                value: "pay1",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Generate Payslip",
                                value: "pay2",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Delete",
                                value: "pay3",
                            }, ]
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Payslip History",
                            value: "pay_history",
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Advance Salary",
                            value: "hradvance_salary",
                            items: [{
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Enable Module",
                                value: "advance_salary1",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Request Advance Salary",
                                value: "advance_salary2",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Edit",
                                value: "advance_salary3",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Delete",
                                value: "advance_salary4",
                            }, ]
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Loan",
                            value: "hrloan",
                            items: [{
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Enable Module",
                                value: "loan1",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Request Advance Salary",
                                value: "loan2",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Edit",
                                value: "loan3",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Delete",
                                value: "loan4",
                            }, ]
                        }, ]
                    },
                    //Helpdesk
                    {
                        id: "",
                        class: "role-checkbox custom-control-input input-light-primary",
                        text: "Helpdesk",
                        value: "hr_helpdesk",
                        items: [{
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Enable Module",
                            value: "helpdesk1",
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Create Ticket",
                            value: "helpdesk2",
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Edit",
                            value: "helpdesk3",
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "View Ticket",
                            value: "helpdesk4",
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Delete",
                            value: "helpdesk5",
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Update Status",
                            value: "helpdesk6",
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Attach files",
                            value: "helpdesk7",
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Note",
                            value: "helpdesk8",
                        }]
                    },
                    //Training Sessions
                    {
                        id: "",
                        class: "role-checkbox custom-control-input input-light-primary",
                        text: "Training Sessions",
                        add_info: "",
                        value: "hr_training",
                        items: [{
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Training Sessions",
                            value: "training1",
                            items: [{
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Enable Module",
                                value: "training2",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Add",
                                value: "training3",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Edit",
                                value: "training4",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Delete",
                                value: "training6",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Note",
                                value: "training5",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Update Status",
                                value: "training7",
                            }, ]
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Trainers",
                            value: "trainer1",
                            items: [{
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Enable Module",
                                value: "trainer1",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Add",
                                value: "trainer2",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Edit",
                                value: "trainer3",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Delete",
                                value: "trainer4",
                            }, ]
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Training Skills",
                            value: "training_skill1",
                            items: [{
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Enable Module",
                                value: "training_skill1",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Add",
                                value: "training_skill2",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Edit",
                                value: "training_skill3",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Delete",
                                value: "training_skill4",
                            }, ]
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Training Calendar",
                            value: "training_calendar",
                        }, ]
                    },
                    //Assets
                    {
                        id: "",
                        class: "role-checkbox custom-control-input input-light-primary",
                        text: "Assets",
                        add_info: "",
                        value: "hr_assets",
                        items: [{
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Assets",
                            value: "asset1",
                            items: [{
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Enable Module",
                                value: "asset1",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Add",
                                value: "asset2",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Edit",
                                value: "asset3",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Delete",
                                value: "asset4",
                            }, ]
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Category",
                            value: "asset_cat1",
                            items: [{
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Enable Module",
                                value: "asset_cat1",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Add",
                                value: "asset_cat2",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Edit",
                                value: "asset_cat3",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Delete",
                                value: "asset_cat4",
                            }]
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Brands",
                            value: "asset_brand1",
                            items: [{
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Enable Module",
                                value: "asset_brand1",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Add",
                                value: "asset_brand2",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Edit",
                                value: "asset_brand3",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Delete",
                                value: "asset_brand4",
                            }]
                        }, ]
                    },
                    //Awards
                    {
                        id: "",
                        class: "role-checkbox custom-control-input input-light-primary",
                        text: "Awards",
                        add_info: "",
                        value: "hr_awards",
                        items: [{
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Awards",
                            value: "award1",
                            items: [{
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Enable Module",
                                value: "award1",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Add",
                                value: "award2",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Edit",
                                value: "award3",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Delete",
                                value: "award4",
                            }, ]
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Award Type",
                            value: "award_type1",
                            items: [{
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Enable Module",
                                value: "award_type1",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Add",
                                value: "award_type2",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Edit",
                                value: "award_type3",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Delete",
                                value: "award_type4",
                            }]
                        }, ]
                    },
                    //Travel
                    {
                        id: "",
                        class: "role-checkbox custom-control-input input-light-primary",
                        text: "Travels",
                        add_info: "",
                        value: "hr_travel",
                        items: [{
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Travels",
                            value: "travel1",
                            items: [{
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Enable Module",
                                value: "travel1",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Add",
                                value: "travel2",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Edit",
                                value: "travel3",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Delete",
                                value: "travel4",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Update Status",
                                value: "travel5",
                            }, ]
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Arrangement Type",
                            value: "travel_type1",
                            items: [{
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Enable Module",
                                value: "travel_type1",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Add",
                                value: "travel_type2",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Edit",
                                value: "travel_type3",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Delete",
                                value: "travel_type4",
                            }]
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Travel Calendar",
                            value: "travel_calendar",
                        }, ]
                    },

                    //Manage Leave
                    {
                        id: "",
                        class: "role-checkbox custom-control-input input-light-primary",
                        text: "Leave Request",
                        add_info: "",
                        value: "hr_leave",
                        items: [{
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Manage Leaves",
                            value: "leave1",
                            items: [{
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Enable Module",
                                value: "leave2",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Add",
                                value: "leave3",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Edit",
                                value: "leave4",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Delete",
                                value: "leave6",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Update Status",
                                value: "leave7",
                            }, ]
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Leave Calendar",
                            value: "leave_calendar",
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Leave Type",
                            value: "leave_type1",
                            items: [{
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Enable Module",
                                value: "leave_type1",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Add",
                                value: "leave_type2",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Edit",
                                value: "leave_type3",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Delete",
                                value: "leave_type4",
                            }, ]
                        }, ]
                    },
                    // Overtime Request
                    {
                        id: "",
                        class: "role-checkbox custom-control-input input-light-primary",
                        text: "Overtime Request",
                        value: "overtime_req1",
                        items: [{
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Enable Module",
                            value: "overtime_req1",
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Add",
                            value: "overtime_req2",
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Edit",
                            value: "overtime_req3",
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Delete",
                            value: "overtime_req4",
                        }, ]
                    },
                    //Complaints
                    {
                        id: "",
                        class: "role-checkbox custom-control-input input-light-primary",
                        text: "Complaints",
                        value: "hr_complaints",
                        items: [{
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Enable Module",
                            value: "complaint1",
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Add",
                            value: "complaint2",
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Edit",
                            value: "complaint3",
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Delete",
                            value: "complaint4",
                        }, ]
                    },
                    //Resignations
                    {
                        id: "",
                        class: "role-checkbox custom-control-input input-light-primary",
                        text: "Resignations",
                        value: "hr_resignations",
                        items: [{
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Enable Module",
                            value: "resignation1",
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Add",
                            value: "resignation2",
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Edit",
                            value: "resignation3",
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Delete",
                            value: "resignation4",
                        }, ]
                    },
                    //Disciplinary Cases 
                    {
                        id: "",
                        class: "role-checkbox custom-control-input input-light-primary",
                        text: "Disciplinary Cases",
                        add_info: "",
                        value: "hr_disciplinary",
                        items: [{
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Disciplinary Cases",
                            value: "disciplinary1",
                            items: [{
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Enable Module",
                                value: "disciplinary1",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Add",
                                value: "disciplinary2",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Edit",
                                value: "disciplinary3",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Delete",
                                value: "disciplinary5",
                            }]
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Case Type",
                            value: "case_type1",
                            items: [{
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Enable Module",
                                value: "case_type1",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Add",
                                value: "case_type2",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Edit",
                                value: "case_type3",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Delete",
                                value: "case_type4",
                            }, ]
                        }, ]
                    },
                    //Transfers 
                    {
                        id: "",
                        class: "role-checkbox custom-control-input input-light-primary",
                        text: "Transfers",
                        value: "hr_transfers",
                        items: [{
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Enable Module",
                            value: "transfers1",
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Add",
                            value: "transfers2",
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Edit",
                            value: "transfers3",
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Delete",
                            value: "transfers4",
                        }, ]
                    },
                    //Settings 
                    {
                        id: "",
                        class: "role-checkbox custom-control-input input-light-primary",
                        text: "Settings",
                        value: "hr_settings",
                        items: [{
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Settings",
                            value: "settings1",
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Module Types",
                            value: "settings2",
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Email Templates",
                            value: "settings3",
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Multi Language",
                            value: "settings4",
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Database Log",
                            value: "settings5",
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Currency Converter",
                            value: "settings6",
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "SMS Templates",
                            value: "settings7",
                        }, ]
                    },
                    //Inventory Control
                    {
                        id: "",
                        class: "role-checkbox custom-control-input input-light-primary",
                        text: "Inventory Control",
                        add_info: "",
                        value: "hr_inventory_control",
                        items: [{
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Warehouses",
                            value: "warehouse1",
                            items: [{
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Enable Module",
                                value: "warehouse1",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Add",
                                value: "warehouse2",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Edit",
                                value: "warehouse3",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Delete",
                                value: "warehouse4",
                            }]
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Products",
                            value: "product1",
                            items: [{
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Enable Module",
                                value: "product1",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Add",
                                value: "product2",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Edit",
                                value: "product3",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Delete",
                                value: "product4",
                            }, ]
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Out of Stock",
                            value: "out_of_stock",
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Expired Products",
                            value: "expired_product",
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Product Category",
                            value: "product_category1",
                            items: [{
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Enable Module",
                                value: "product_category1",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Add",
                                value: "product_category2",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Edit",
                                value: "product_category3",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Delete",
                                value: "product_category4",
                            }, ]
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Suppliers",
                            value: "supplier1",
                            items: [{
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Enable Module",
                                value: "supplier1",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Add",
                                value: "supplier2",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Edit",
                                value: "supplier3",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Delete",
                                value: "supplier4",
                            }, ]
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Purchases",
                            value: "purchases1",
                            items: [{
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Enable Module",
                                value: "purchases1",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "New Purchase",
                                value: "purchases2",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Edit Purchase",
                                value: "purchases3",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Delete",
                                value: "purchases4",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Update Status",
                                value: "purchases5",
                            }, ]
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Sales Order",
                            value: "sales_order1",
                            items: [{
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Enable Module",
                                value: "sales_order1",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Add New Order",
                                value: "sales_order2",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Edit Order",
                                value: "sales_order3",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Delete",
                                value: "sales_order4",
                            }, ]
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Quote Orders",
                            value: "quote_order1",
                            items: [{
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Enable Module",
                                value: "quote_order1",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Add Order Quote",
                                value: "quote_order2",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Edit Quote",
                                value: "quote_order3",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Delete",
                                value: "quote_order4",
                            }, ]
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Paid Orders",
                            value: "paid_orders",
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Unpaid Orders",
                            value: "unpaid_orders",
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Packed Orders",
                            value: "packed_orders",
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Delivered Orders",
                            value: "delivered_orders",
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Cancelled Orders",
                            value: "cancelled_orders",
                        }, ]
                    }, {
                        id: "",
                        class: "role-checkbox custom-control-input input-light-primary",
                        text: "Custom Fields",
                        value: "custom_fields",
                    },
                    //end1st
                ]
            });

            jQuery("#treeview_r2").kendoTreeView({
                checkboxes: {
                    checkChildren: true,
                    template: "<label class='custom-control custom-checkbox'><input type='checkbox' #= item.check# class='#= item.class #' name='role_resources[]' value='#= item.value #'><span class='custom-control-label'>#= item.text #</span></label>"
                },
                check: onCheck,
                dataSource: [
                    //Employees
                    {
                        id: "",
                        class: "role-checkbox custom-control-input input-light-primary",
                        text: "Employees",
                        add_info: "",
                        value: "hr_staff",
                        items: [{
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Employees",
                                value: "staff2",
                                items: [{
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Enable Module",
                                    value: "staff2",
                                }, {
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Add",
                                    value: "staff3",
                                }, {
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "View",
                                    value: "staff4",
                                }, {
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Delete",
                                    value: "staff5",
                                }, ]
                            },

                            {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Shift & Scheduling",
                                value: "shift1",
                                items: [{
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Enable Module",
                                    value: "shift1",
                                }, {
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Add",
                                    value: "shift2",
                                }, {
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Edit",
                                    value: "shift3",
                                }, {
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Delete",
                                    value: "shift4",
                                }]
                            },

                            {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Employees Exit",
                                value: "staffexit1",
                                items: [{
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Enable Module",
                                    value: "staffexit1",
                                }, {
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Add",
                                    value: "staffexit2",
                                }, {
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Edit",
                                    value: "staffexit3",
                                }, {
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Delete",
                                    value: "staffexit4",
                                }, ]
                            },

                            {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Exit Type",
                                value: "exit_type1",
                                items: [{
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Enable Module",
                                    value: "exit_type1",
                                }, {
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Add",
                                    value: "exit_type2",
                                }, {
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Edit",
                                    value: "exit_type3",
                                }, {
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Delete",
                                    value: "exit_type4",
                                }, ]
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Employee Profile",
                                value: "hr_profile",
                                items: [{
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Edit Basic Information",
                                    value: "hr_basic_info",
                                }, {
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Edit Personal Information",
                                    value: "hr_personal_info",
                                }, {
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Edit Profile Picture",
                                    value: "hr_picture",
                                }, {
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Edit Account Information",
                                    value: "account_info",
                                }, {
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "View Documents",
                                    value: "hr_documents",
                                }, {
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Change Password",
                                    value: "change_password",
                                }, ]
                            },
                        ]
                    },
                    //Recruitment
                    {
                        id: "",
                        class: "role-checkbox custom-control-input input-light-primary",
                        text: "Recruitment (ATS)",
                        add_info: "",
                        value: "hr_ats",
                        items: [{
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "New Opening",
                                value: "ats2",
                                items: [{
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Jobs List",
                                    value: "ats2",
                                }, {
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Add",
                                    value: "ats3",
                                }, {
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Edit",
                                    value: "ats4",
                                }, {
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Delete",
                                    value: "ats5",
                                }, ]
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Candidates",
                                value: "candidate",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Interviews",
                                value: "interview",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Promotions",
                                value: "promotion",
                            },

                        ]
                    },
                    //CoreHR
                    {
                        id: "",
                        class: "role-checkbox custom-control-input input-light-primary",
                        text: "Core HR",
                        add_info: "",
                        value: "core_hr",
                        items: [{
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Announcements",
                            value: "news1",
                            items: [{
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Enable Module",
                                value: "news1",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Add",
                                value: "news2",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Edit",
                                value: "news3",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Delete",
                                value: "news4",
                            }, ]
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Department",
                            value: "department1",
                            items: [{
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Enable Module",
                                value: "department1",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Add",
                                value: "department2",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Edit",
                                value: "department3",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Delete",
                                value: "department4",
                            }, ]
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Designation",
                            value: "designation1",
                            items: [{
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Enable Module",
                                value: "designation1",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Add",
                                value: "designation2",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Edit",
                                value: "designation3",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Delete",
                                value: "designation4",
                            }, ]
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Policies",
                            value: "policy1",
                            items: [{
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Enable Module",
                                value: "policy1",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Add",
                                value: "policy2",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Edit",
                                value: "policy3",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Delete",
                                value: "policy4",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "View Policies",
                                value: "policy5",
                            }]
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Organization Chart",
                            value: "org_chart",
                        }, ]
                    },
                    //Attendance
                    {
                        id: "",
                        class: "role-checkbox custom-control-input input-light-primary",
                        text: "Attendance",
                        add_info: "",
                        value: "timesheet",
                        items: [

                            {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Manual Attendance",
                                value: "upattendance1",
                                items: [{
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Enable Module",
                                    value: "upattendance1",
                                }, {
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Add",
                                    value: "upattendance2",
                                }, {
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Edit",
                                    value: "upattendance3",
                                }, {
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Delete",
                                    value: "upattendance4",
                                }, ]
                            },

                            {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Monthly Report",
                                value: "monthly_time",
                            },
                        ]
                    },
                    //Finance
                    {
                        id: "",
                        class: "role-checkbox custom-control-input input-light-primary",
                        text: "Finance",
                        add_info: "",
                        value: "hr_finance",
                        items: [{
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Accounts",
                            value: "accounts1",
                            items: [{
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Enable Module",
                                value: "accounts1",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Add",
                                value: "accounts2",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Edit",
                                value: "accounts3",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Delete",
                                value: "accounts4",
                            }, ]
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Deposit",
                            value: "deposit1",
                            items: [{
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Enable Module",
                                value: "deposit1",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Add",
                                value: "deposit2",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Edit",
                                value: "deposit3",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Delete",
                                value: "deposit4",
                            }, ]
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Expense",
                            value: "expense1",
                            items: [{
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Enable Module",
                                value: "expense1",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Add",
                                value: "expense2",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Edit",
                                value: "expense3",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Delete",
                                value: "expense4",
                            }, ]
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Transactions",
                            value: "transaction1",
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Deposit Categories",
                            value: "dep_cat1",
                            items: [{
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Enable Module",
                                value: "dep_cat1",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Add",
                                value: "dep_cat2",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Edit",
                                value: "dep_cat3",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Delete",
                                value: "dep_cat4",
                            }, ]
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Expense Categories",
                            value: "exp_cat1",
                            items: [{
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Enable Module",
                                value: "exp_cat1",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Add",
                                value: "exp_cat2",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Edit",
                                value: "exp_cat3",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Delete",
                                value: "exp_cat4",
                            }, ]
                        }, ]
                    },

                    //Performance (PMS)
                    {
                        id: "",
                        class: "role-checkbox custom-control-input input-light-primary",
                        text: "Performance (PMS)",
                        add_info: "",
                        value: "hr_talent",
                        items: [{
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "KPI (Indicator)",
                                value: "indicator1",
                                items: [{
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Enable Module",
                                    value: "indicator1",
                                }, {
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Add",
                                    value: "indicator2",
                                }, {
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Edit",
                                    value: "indicator3",
                                }, {
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Delete",
                                    value: "indicator4",
                                }, ]
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "KPA (Appraisal)",
                                value: "appraisal1",
                                items: [{
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Enable Module",
                                    value: "appraisal1",
                                }, {
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Add",
                                    value: "appraisal2",
                                }, {
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Edit",
                                    value: "appraisal3",
                                }, {
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Delete",
                                    value: "appraisal4",
                                }, ]
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Competencies",
                                value: "competency1",
                                items: [{
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Enable Module",
                                    value: "competency1",
                                }, {
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Add",
                                    value: "competency2",
                                }, {
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Edit",
                                    value: "competency3",
                                }, {
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Delete",
                                    value: "competency4",
                                }, ]
                            },

                            {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Track Goals (OKRs)",
                                value: "tracking1",
                                items: [{
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Enable Module",
                                    value: "tracking1",
                                }, {
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Add",
                                    value: "tracking2",
                                }, {
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Edit",
                                    value: "tracking3",
                                }, {
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Delete",
                                    value: "tracking4",
                                }, {
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Update Rating",
                                    value: "tracking5",
                                }, ]
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Goal Type",
                                value: "track_type1",
                                items: [{
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Enable Module",
                                    value: "track_type1",
                                }, {
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Add",
                                    value: "track_type2",
                                }, {
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Edit",
                                    value: "track_type3",
                                }, {
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Delete",
                                    value: "track_type4",
                                }, ]
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Goals Calendar",
                                value: "track_calendar",
                            },
                        ]
                    },

                    //Clients
                    {
                        id: "",
                        class: "role-checkbox custom-control-input input-light-primary",
                        text: "Manage Clients",
                        value: "hr_clients",
                        items: [{
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Enable Module",
                            value: "client1",
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Add",
                            value: "client2",
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Edit",
                            value: "client3",
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Delete",
                            value: "client4",
                        }, ]
                    },

                    //Leads
                    {
                        id: "",
                        class: "role-checkbox custom-control-input input-light-primary",
                        text: "Leads",
                        value: "hr_leads",
                        items: [{
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Enable Module",
                            value: "leads1",
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Add",
                            value: "leads2",
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Edit",
                            value: "leads3",
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Delete",
                            value: "leads4",
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Change to Client",
                            value: "leads5",
                        }, ]
                    },

                    //Invoices
                    {
                        id: "",
                        class: "role-checkbox custom-control-input input-light-primary",
                        text: "Invoices",
                        add_info: "",
                        value: "hr_invoices",
                        items: [{
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Billing Invoices",
                                value: "invoice1",
                                items: [{
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Enable Module",
                                    value: "invoice2",
                                }, {
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Create New Invoice",
                                    value: "invoice3",
                                }, {
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Edit Invoice",
                                    value: "invoice4",
                                }, {
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Delete",
                                    value: "invoice5",
                                }, ]
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Invoice Payments",
                                value: "invoice_payments",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Calendar",
                                value: "invoice_calendar",
                            },

                            {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Tax Type",
                                value: "tax_type1",
                                items: [{
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Enable Module",
                                    value: "tax_type1",
                                }, {
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Add",
                                    value: "tax_type2",
                                }, {
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Edit",
                                    value: "tax_type3",
                                }, {
                                    id: "",
                                    class: "role-checkbox custom-control-input input-light-primary",
                                    text: "Delete",
                                    value: "tax_type4",
                                }, ]
                            },
                        ]
                    },
                    //Estimates
                    {
                        id: "",
                        class: "role-checkbox custom-control-input input-light-primary",
                        text: "Estimates",
                        value: "estimate1",
                        items: [{
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Enable Module",
                            value: "estimate2",
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Create New Estimate",
                            value: "estimate3",
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Edit Estimate",
                            value: "estimate4",
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Delete",
                            value: "estimate5",
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Convert to Invoice",
                            value: "estimate6",
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Cancel Estimate",
                            value: "estimate7",
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Estimate Calendar",
                            value: "estimates_calendar",
                        }, ]
                    },
                    //Events
                    {
                        id: "",
                        class: "role-checkbox custom-control-input input-light-primary",
                        text: "Events",
                        add_info: "",
                        value: "hr_events",
                        items: [{
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Events",
                            value: "hr_event1",
                            items: [{
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Enable Module",
                                value: "hr_event1",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Add",
                                value: "hr_event2",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Edit",
                                value: "hr_event3",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Delete",
                                value: "hr_event4",
                            }, ]
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Events Calendar",
                            value: "events_calendar",
                        }, ]
                    },
                    //Conference Booking
                    {
                        id: "",
                        class: "role-checkbox custom-control-input input-light-primary",
                        text: "Conference Booking",
                        add_info: "",
                        value: "hr_conference",
                        items: [{
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Conference Booking",
                            value: "conference1",
                            items: [{
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Enable Module",
                                value: "conference1",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Add",
                                value: "conference2",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Edit",
                                value: "conference3",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Delete",
                                value: "conference4",
                            }, ]
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Conference Calendar",
                            value: "conference_calendar",
                        }, ]
                    },
                    //Holidays
                    {
                        id: "",
                        class: "role-checkbox custom-control-input input-light-primary",
                        text: "Holidays",
                        add_info: "",
                        value: "hr_holidays",
                        items: [{
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Holidays",
                            value: "holiday1",
                            items: [{
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Enable Module",
                                value: "holiday1",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Add",
                                value: "holiday2",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Edit",
                                value: "holiday3",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Delete",
                                value: "holiday4",
                            }, ]
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Holidays Calendar",
                            value: "holidays_calendar",
                        }, ]
                    },
                    //Visitor Book
                    {
                        id: "",
                        class: "role-checkbox custom-control-input input-light-primary",
                        text: "Visitor Book",
                        value: "hr_visitors",
                        items: [{
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Enable Module",
                            value: "visitor1",
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Add",
                            value: "visitor2",
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Edit",
                            value: "visitor3",
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Delete",
                            value: "visitor4",
                        }, ]
                    },
                    //Documents Manager
                    {
                        id: "",
                        class: "role-checkbox custom-control-input input-light-primary",
                        text: "Documents Manager",
                        add_info: "",
                        value: "hr_files",
                        items: [{
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "General Documents",
                            value: "file1",
                            items: [{
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Enable Module",
                                value: "file1",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Add",
                                value: "file2",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Edit",
                                value: "file3",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Delete",
                                value: "file4",
                            }, ]
                        }, {
                            id: "",
                            class: "role-checkbox custom-control-input input-light-primary",
                            text: "Official Documents",
                            value: "officialfile1",
                            items: [{
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Enable Module",
                                value: "officialfile1",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Add",
                                value: "officialfile2",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Edit",
                                value: "officialfile3",
                            }, {
                                id: "",
                                class: "role-checkbox custom-control-input input-light-primary",
                                text: "Delete",
                                value: "officialfile4",
                            }, ]
                        }, ]
                    },

                    //Todo List
                    {
                        id: "",
                        class: "role-checkbox custom-control-input input-light-primary",
                        text: "Todo List",
                        value: "todo_ist",
                    },
                    //System Calendar
                    {
                        id: "",
                        class: "role-checkbox custom-control-input input-light-primary",
                        text: "System Calendar",
                        value: "system_calendar",
                    },
                    //System Reports
                    {
                        id: "",
                        class: "role-checkbox custom-control-input input-light-primary",
                        text: "System Reports",
                        value: "system_reports",
                    },
                    //
                ]
            });
            //});
            // show checked node IDs on datasource change
            function onCheck() {
                var checkedNodes = [],
                    treeView = jQuery("#treeview2").data("kendoTreeView"),
                    message;
                jQuery("#result").html(message);
            }
        </script>
