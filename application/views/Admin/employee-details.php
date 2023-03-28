 
 <?php include('include/header.php'); ?>  
        <div class="contents demo-card expanded">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-main">
                            <ul class="atbd-breadcrumb nav">
                                <li class="atbd-breadcrumb__item">
                                    <a href="#"> Home </a>
                                    <span class="breadcrumb__seperator"> <span class="la la-angle-right"></span> </span>
                                </li>
                                <li class="atbd-breadcrumb__item">
                                    <a href="employee.html"> Employee </a>
                                    <span class="breadcrumb__seperator"> <span class="la la-angle-right"></span> </span>
                                </li>
                                <li class="atbd-breadcrumb__item">
                                    <span>Employee Details</span>
                                </li>
                            </ul>
                            <div class="row align-items-center profile_complete">
                                <div class="col-auto dropdown dropdown-hover">
                                    <a class="btn-link text-dark fw-600" href="javascript:void(0)">Profile completeness <span data-feather=chevron-down></span></a>
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
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card scrl-top">
                            <div class="card-header1 p-2 border-bottom">
                                <div class="media d-flex justify-content-between">
                                    <div class="media-body d-flex align-items-center">
                                        <img class="mr-20 wh-40 rounded-circle bg-opacity-primary" src="img/author/user.jpg" alt="author" style="border: 2px solid #f4f5f7;box-shadow: 0px 0px 3px 0px #0e0d0d;">
                                        <div class="certificated-badge"> <i class="fas fa-certificate text-primary bg-icon"></i> <i class="fas fa-check front-icon text-white"></i> </div>
                                        <div>
                                            <a href="javascript:void(0)">
                                                <h6 class="mt-0  fw-500">Alok Dixit</h6>
                                            </a>
                                            <p class="fs-13 color-light mb-0">UI, Manager <span data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Department Head"><i class="fas fa-question-circle"></i></span></p>
                                        </div>
                                    </div>
                                    <div class="float-right">
                                        <span class="atbd-tag tag-success tag-transparented">Active</span> </div>

                                </div>
                                <div class="d-flex justify-content-between p-2 mt-3 border-top">
                                    <div class="left"><i class="la la-envelope fs-20"></i> <span>Email</span>
                                    </div>
                                    <div class="right">test@test.com</div>
                                </div>

                            </div>
                            <div class="card-body p-4">

                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link active" id="Contract_Tab" data-toggle="pill" href="#Contract" role="tab" aria-controls="Contract" aria-selected="true">
                                        <span class="f-w-500"><i class="la la-lock m-r-10 fa-18"></i> Contract </span>
                                        <span class="float-right"><i class="la la-angle-right"></i></span>
                                    </a>
                                    <a class="nav-link" id="Basic_Information_Tab" data-toggle="pill" href="#Basic_Information" role="tab" aria-controls="Basic_Information" aria-selected="false">
                                        <span class="f-w-500"><i class="la la-file-alt mr-2 fa-18 "></i> Basic Information </span>
                                        <span class="float-right"><i class="la la-angle-right"></i></span>
                                    </a>
                                    <a class="nav-link" id="Personal_Information_Tab" data-toggle="pill" href="#Personal_Information" role="tab" aria-controls="Personal_Information" aria-selected="false">
                                        <span class="f-w-500"><i class="la la-user mr-2 fa-18 "></i> Personal Information </span>
                                        <span class="float-right"><i class="la la-angle-right"></i></span>
                                    </a>
                                    <a class="nav-link" id="Profile_Picture_Tab" data-toggle="pill" href="#Profile_Picture" role="tab" aria-controls="Profile_Picture" aria-selected="false">
                                        <span class="f-w-500"><i class="la la-image mr-2 fa-18"></i> Profile Picture </span>
                                        <span class="float-right"><i class="la la-angle-right"></i></span>
                                    </a>
                                    <a class="nav-link" id="Account_Information_Tab" data-toggle="pill" href="#Account_Information" role="tab" aria-controls="Account_Information" aria-selected="false">
                                        <span class="f-w-500"><i class="la la-book mr-2 fa-18 "></i> Account Information </span>
                                        <span class="float-right"><i class="la la-angle-right"></i></span>
                                    </a>
                                    <a class="nav-link" id="Documents_Tab" data-toggle="pill" href="#Documents" role="tab" aria-controls="Documents" aria-selected="false">
                                        <span class="f-w-500"><i class="la la-file-contract mr-2 fa-18"></i> Documents </span>
                                        <span class="float-right"><i class="la la-angle-right"></i></span>
                                    </a>
                                    <a class="nav-link" id="Timesheet_Agenda_Tab" data-toggle="pill" href="#Timesheet_Agenda" role="tab" aria-controls="Timesheet_Agenda" aria-selected="false">
                                        <span class="f-w-500"><i class="la la-box mr-2 fa-18  "></i> Timesheet Agenda </span>
                                        <span class="float-right"><i class="la la-angle-right"></i></span>
                                    </a>
                                    <a class="nav-link" id="Change_Password_Tab" data-toggle="pill" href="#Change_Password" role="tab" aria-controls="Change_Password" aria-selected="false">
                                        <span class="f-w-500"><i class="la la-user-lock mr-2 fa-18"></i> Change Password </span>
                                        <span class="float-right"><i class="la la-angle-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- End: .col -->
                    <div class="col-lg-9">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="Contract" role="tabpanel" aria-labelledby="Contract_Tab">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="color-dark fw-600"><span class="f-w-500 ml-0"><i class="la la-lock mr-1 la-2x"></i> </span>Set Contract</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-wrapper">

                                            <div class="atbd-tab tab-horizontal">
                                                <ul class="nav nav-tabs vertical-tabs" role="tablist">

                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="Contracts-tab" data-toggle="tab" href="#Contracts" role="tab" aria-controls="tab-v-1" aria-selected="true"><i class="la la-file-contract fs-18"></i> Contract</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="Allowances-tab" data-toggle="tab" href="#Allowances" role="tab" aria-controls="tab-v-2" aria-selected="false"><i class="la la-hand-holding-usd fs-18"></i> Allowances</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="Commissions-tab" data-toggle="tab" href="#Commissions" role="tab" aria-controls="tab-v-3" aria-selected="false"><i class="la la-file-contract fs-18"></i> Commissions</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="Statutory_deductions-tab" data-toggle="tab" href="#Statutory_deductions" role="tab" aria-controls="tab-v-4" aria-selected="true"><i class="la la-gg-circle fs-18"></i> Statutory deductions</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="Reimbursements-tab" data-toggle="tab" href="#Reimbursements" role="tab" aria-controls="tab-v-5" aria-selected="false"><i class="la la-file-invoice-dollar fs-18"></i> Reimbursements</a>
                                                    </li>



                                                </ul>
                                                <div class="tab-content">

                                                    <div class="tab-pane fade active show" id="Contracts" role="tabpanel" aria-labelledby="Contracts-tab">
                                                        <form>
                                                            <div class="form-row mx-n15">
                                                                <div class="col-md-4 mb-10 px-15">
                                                                    <div class="form-group form-group-calender ">
                                                                        <label for="datepicker8" class="il-gray fs-14 fw-500 align-center">Contract Date <span class="text-danger">*</span></label>
                                                                        <div class="position-relative">
                                                                            <input type="text" class="form-control  ih-medium ip-gray radius-xs b-light" id="datepicker8" placeholder="01/10/2021">
                                                                            <a href="#"><span data-feather="calendar"></span></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 mb-10 px-15">
                                                                    <label for="validationDefault01" class="il-gray fs-14 fw-500 align-center">Department <span class="text-danger">*</span></label>
                                                                    <div class="mb-25 select-style2">
                                                                        <div class="atbd-select ">
                                                                            <select name="select-alerts2" id="select-alerts2" class="form-control ">
                                                                                <option value="01">Department</option>
                                                                                <option value="02">Tech</option>
                                                                                <option value="03">Marketing</option>
                                                                                <option value="04">Admin</option>
                                                                                <option value="05">CAMS</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 mb-10 px-15">
                                                                    <label for="validationDefault01" class="il-gray fs-14 fw-500 align-center">Designation <span class="text-danger">*</span></label>
                                                                    <div class="mb-25 select-style2">
                                                                        <div class="atbd-select ">
                                                                            <select name="select-option2" id="select-option2" class="form-control ">
                                                                                <option value="01">Software Engineer</option>
                                                                                <option value="02">CEO</option>
                                                                                <option value="03">CTO</option>
                                                                                <option value="04">Product Manager</option>
                                                                                <option value="05">VP of Marketing</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 mb-10 px-15">
                                                                    <label class="il-gray fs-14 fw-500 align-center">Basic Salary <span class="text-danger">*</span></label>
                                                                    <div class="input-group mb-2">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text"><i class="la la-rupee-sign"></i></div>
                                                                        </div>
                                                                        <input type="text" class="form-control  ih-medium ip-lightradius-xs b-light" value="2000.00" placeholder="Payment Method">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 mb-10 px-15">
                                                                    <label class="il-gray fs-14 fw-500 align-center">Hourly Rate <span class="text-danger">*</span></label>
                                                                    <div class="input-group mb-2">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text"><i class="la la-rupee-sign"></i></div>
                                                                        </div>
                                                                        <input type="text" class="form-control  ih-medium ip-lightradius-xs b-light" value="2000.00" placeholder="Payment Method">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 mb-10 px-15">
                                                                    <label class="il-gray fs-14 fw-500 align-center">Payslip Type <span class="text-danger">*</span></label>
                                                                    <div class="mb-25 select-style2">
                                                                        <select class="form-control px-15" id="exampleFormControlSelect1">
                                                                                <option value="01">Per Month</option>
                                                                                <option value="02">Per Year</option>
                                                                            </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mb-10 px-15">
                                                                    <label class="il-gray fs-14 fw-500 align-center">Office Shift <span class="text-danger">*</span></label>
                                                                    <select class="form-control px-15" id="countryOption">
                                                                        <option>Day Shift</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-6 mb-10 px-15">
                                                                    <div class="form-group form-group-calender ">
                                                                        <label for="datepicker9" class="il-gray fs-14 fw-500 align-center">Contract End <span class="text-danger">*</span></label>
                                                                        <div class="position-relative">
                                                                            <input type="text" class="form-control  ih-medium ip-gray radius-xs b-light" id="datepicker9" placeholder="Date of Leaving">
                                                                            <a href="#"><span data-feather="calendar"></span></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 mb-10 px-15">
                                                                    <div class="form-group tagSelect-rtl">
                                                                        <label for="exampleFormControlSelect2" class="il-gray fs-14 fw-500 align-center"> Leave Categories</label>
                                                                        <div class="atbd-select ">
                                                                            <select name="select-tag" id="select-tag" class="form-control " multiple="multiple">
                                                                                <option value="00">All</option>
                                                                                <option value="01">Annual</option>
                                                                                <option value="02">Sick</option>
                                                                                <option value="03">Hospitalisation</option>
                                                                                <option value="04">Maternity</option>
                                                                                <option value="05">Paternity</option>
                                                                            </select>
                                                                        </div>

                                                                        <small>If All is selected, then all leave categories will show to employee which are added in the system.</small>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 mb-10 px-15">
                                                                    <div class="form-group form-group-calender ">
                                                                        <label class="il-gray fs-14 fw-500 align-center">Role Description <span class="text-danger">*</span></label>
                                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" spellcheck="false"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-primary px-30" type="submit">Update Contract</button>
                                                        </form>
                                                    </div>
                                                    <div class="tab-pane fade" id="Allowances" role="tabpanel" aria-labelledby="Allowances-tab">
                                                        <div class="user-profile-list mt-4">
                                                            <h5 class="mt-1 fw-500 mb-3 pb-3 border-bottom text-gray"> List All Allowances </h5>
                                                            <div class="userDatatable projectDatatable project-table bg-white w-100 border-0">
                                                                <div class="table-responsive">
                                                                    <table class="table mb-0 table-basic border">
                                                                        <thead>
                                                                            <tr class="userDatatable-header">
                                                                                <th><span class="userDatatable-title">Title</span>
                                                                                </th>
                                                                                <th>
                                                                                    <span class="userDatatable-title">Amount</span>
                                                                                </th>
                                                                                <th>
                                                                                    <span class="userDatatable-title">Allowances Option</span>
                                                                                </th>
                                                                                <th class="text-right">
                                                                                    <span class="userDatatable-title">Amount Option</span>
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <!-- End: tr -->
                                                                            <tr>
                                                                                <td valign="top" colspan="4" class="dataTables_empty text-center">No records available</td>
                                                                            </tr>
                                                                            <!-- End: tr -->

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <form class="mt-4">
                                                                <div class="form-row mx-n15">
                                                                    <div class="col-md-6 mb-20 px-15">
                                                                        <label class="il-gray fs-14 fw-500 align-center">Allowance Option <span class="text-danger">*</span></label>
                                                                        <select class="form-control px-15" id="skillsOption">
                                                                            <option selected="">Non Taxable</option>
                                                                            <option>Fully Taxable</option>
                                                                            <option>Partially Taxable</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-6 mb-20 px-15">
                                                                        <label class="il-gray fs-14 fw-500 align-center">Amount Option <span class="text-danger">*</span></label>
                                                                        <select class="form-control px-15" id="cityOption">
                                                                            <option selected="">Fixed</option>
                                                                            <option>Percentage</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-6 mb-20 px-15">
                                                                        <label class="il-gray fs-14 fw-500 align-center">Title <span class="text-danger">*</span></label>
                                                                        <input type="text" class="form-control ih-medium ip-light radius-xs b-light" placeholder="" required="">
                                                                    </div>
                                                                    <div class="col-md-6 mb-20 px-15">
                                                                        <label class="il-gray fs-14 fw-500 align-center">Amount <span class="text-danger">*</span> </label>
                                                                        <div class="input-group mb-2">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text"><i class="la la-rupee-sign"></i></div>
                                                                            </div>
                                                                            <input type="text" class="form-control ih-medium ip-light radius-xs b-light" placeholder="Amount">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <button class="btn btn-primary px-30" type="submit">Save</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="Commissions" role="tabpanel" aria-labelledby="Commissions-tab">
                                                        <div class="user-profile-list mt-4">
                                                            <h5 class="mt-1 fw-500 mb-3 pb-3 border-bottom text-gray"> List All Commissions</h5>
                                                            <div class="userDatatable projectDatatable project-table bg-white w-100 border-0">
                                                                <div class="table-responsive">
                                                                    <table class="table mb-0 table-basic border">
                                                                        <thead>
                                                                            <tr class="userDatatable-header">
                                                                                <th><span class="userDatatable-title">Title</span>
                                                                                </th>
                                                                                <th>
                                                                                    <span class="userDatatable-title">Amount</span>
                                                                                </th>
                                                                                <th>
                                                                                    <span class="userDatatable-title">Commissions Option</span>
                                                                                </th>
                                                                                <th class="text-right">
                                                                                    <span class="userDatatable-title">Amount Option</span>
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <!-- End: tr -->
                                                                            <tr>
                                                                                <td valign="top" colspan="4" class="dataTables_empty text-center">No records available</td>
                                                                            </tr>
                                                                            <!-- End: tr -->

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <form class="mt-4">
                                                                <div class="form-row mx-n15">
                                                                    <div class="col-md-6 mb-20 px-15">
                                                                        <label class="il-gray fs-14 fw-500 align-center">Commissions Option <span class="text-danger">*</span></label>
                                                                        <select class="form-control px-15" id="Commissions">
                                                                            <option selected="">Non Taxable</option>
                                                                            <option>Fully Taxable</option>
                                                                            <option>Partially Taxable</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-6 mb-20 px-15">
                                                                        <label class="il-gray fs-14 fw-500 align-center">Amount Option <span class="text-danger">*</span></label>
                                                                        <select class="form-control px-15" id="Amount_One">
                                                                            <option selected="">Fixed</option>
                                                                            <option>Percentage</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-6 mb-20 px-15">
                                                                        <label class="il-gray fs-14 fw-500 align-center">Title <span class="text-danger">*</span></label>
                                                                        <input type="text" class="form-control ih-medium ip-light radius-xs b-light" placeholder="" required="">
                                                                    </div>
                                                                    <div class="col-md-6 mb-20 px-15">
                                                                        <label class="il-gray fs-14 fw-500 align-center">Amount <span class="text-danger">*</span> </label>
                                                                        <div class="input-group mb-2">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text"><i class="la la-rupee-sign"></i></div>
                                                                            </div>
                                                                            <input type="text" class="form-control ih-medium ip-light radius-xs b-light" placeholder="Amount">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <button class="btn btn-primary px-30" type="submit">Save</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="Statutory_deductions" role="tabpanel" aria-labelledby="Statutory_deductions-tab">
                                                        <div class="user-profile-list mt-4">
                                                            <h5 class="mt-1 fw-500 mb-3 pb-3 border-bottom text-gray"> List All Statutory Deductions</h5>
                                                            <div class="userDatatable projectDatatable project-table bg-white w-100 border-0">
                                                                <div class="table-responsive">
                                                                    <table class="table mb-0 table-basic border">
                                                                        <thead>
                                                                            <tr class="userDatatable-header">
                                                                                <th><span class="userDatatable-title">Title</span>
                                                                                </th>
                                                                                <th>
                                                                                    <span class="userDatatable-title">Amount</span>
                                                                                </th>
                                                                                <th>
                                                                                    <span class="userDatatable-title">deduction Option</span>
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <!-- End: tr -->
                                                                            <tr>
                                                                                <td valign="top" colspan="3" class="dataTables_empty text-center">No records available</td>
                                                                            </tr>
                                                                            <!-- End: tr -->

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <form class="mt-4">
                                                                <div class="form-row mx-n15">
                                                                    <div class="col-md-4 mb-20 px-15">
                                                                        <label class="il-gray fs-14 fw-500 align-center">Deduction Option <span class="text-danger">*</span></label>
                                                                        <select class="form-control px-15" id="Deduction">
                                                                            <option selected="">Fixed</option>
                                                                            <option>Percentage</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-4 mb-20 px-15">
                                                                        <label class="il-gray fs-14 fw-500 align-center">Title <span class="text-danger">*</span></label>
                                                                        <input type="text" class="form-control ih-medium ip-light radius-xs b-light" placeholder="" required="">
                                                                    </div>
                                                                    <div class="col-md-4 mb-20 px-15">
                                                                        <label class="il-gray fs-14 fw-500 align-center">Amount <span class="text-danger">*</span> </label>
                                                                        <div class="input-group mb-2">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text"><i class="la la-rupee-sign"></i></div>
                                                                            </div>
                                                                            <input type="text" class="form-control ih-medium ip-light radius-xs b-light" placeholder="Amount">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <button class="btn btn-primary px-30" type="submit">Save</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="Reimbursements" role="tabpanel" aria-labelledby="Reimbursements-tab">
                                                        <div class="user-profile-list mt-4">
                                                            <h5 class="mt-1 fw-500 mb-3 pb-3 border-bottom text-gray">List All Reimbursements</h5>
                                                            <div class="userDatatable projectDatatable project-table bg-white w-100 border-0">
                                                                <div class="table-responsive">
                                                                    <table class="table mb-0 table-basic border">
                                                                        <thead>
                                                                            <tr class="userDatatable-header">
                                                                                <th><span class="userDatatable-title">Title</span>
                                                                                </th>
                                                                                <th>
                                                                                    <span class="userDatatable-title">Amount</span>
                                                                                </th>
                                                                                <th>
                                                                                    <span class="userDatatable-title">Reimbursement Option</span>
                                                                                </th>
                                                                                <th class="text-right">
                                                                                    <span class="userDatatable-title">Amount Option</span>
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <!-- End: tr -->
                                                                            <tr>
                                                                                <td valign="top" colspan="4" class="dataTables_empty text-center">No records available</td>
                                                                            </tr>
                                                                            <!-- End: tr -->

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <form class="mt-4">
                                                                <div class="form-row mx-n15">
                                                                    <div class="col-md-6 mb-20 px-15">
                                                                        <label class="il-gray fs-14 fw-500 align-center">Reimbursement  Option <span class="text-danger">*</span></label>
                                                                        <select class="form-control px-15" id="Reimbursement">
                                                                            <option selected="">Non Taxable</option>
                                                                            <option>Fully Taxable</option>
                                                                            <option>Partially Taxable</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-6 mb-20 px-15">
                                                                        <label class="il-gray fs-14 fw-500 align-center">Amount Option <span class="text-danger">*</span></label>
                                                                        <select class="form-control px-15" id="Amount_Two">
                                                                            <option selected="">Fixed</option>
                                                                            <option>Percentage</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-6 mb-20 px-15">
                                                                        <label class="il-gray fs-14 fw-500 align-center">Title <span class="text-danger">*</span></label>
                                                                        <input type="text" class="form-control ih-medium ip-light radius-xs b-light" placeholder="" required="">
                                                                    </div>
                                                                    <div class="col-md-6 mb-20 px-15">
                                                                        <label class="il-gray fs-14 fw-500 align-center">Amount <span class="text-danger">*</span> </label>
                                                                        <div class="input-group mb-2">
                                                                            <div class="input-group-prepend">
                                                                                <div class="input-group-text"><i class="la la-rupee-sign"></i></div>
                                                                            </div>
                                                                            <input type="text" class="form-control ih-medium ip-light radius-xs b-light" placeholder="Amount">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <button class="btn btn-primary px-30" type="submit">Save</button>
                                                            </form>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Basic_Information" role="tabpanel" aria-labelledby="Basic_Information_Tab">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="color-dark fw-600"><span class="f-w-500 ml-0"><i class="la la-file-alt mr-2 la-2x"></i> </span> Basic Information </h5>
                                    </div>
                                    <div class="card-body user-profile-list">
                                        <div class="basic_information_body">
                                            <form>
                                                <div class="form-row mx-n15">
                                                    <div class="col-md-4 mb-20 px-15">
                                                        <label class="il-gray fs-14 fw-500 align-center">First name</label>
                                                        <input type="text" class="form-control ih-medium ip-light radius-xs b-light" placeholder="Mark" required="">
                                                    </div>
                                                    <div class="col-md-4 mb-20 px-15">
                                                        <label class="il-gray fs-14 fw-500 align-center">Last name</label>
                                                        <input type="text" class="form-control  ih-medium ip-light radius-xs b-light" placeholder="Clayton" required="">
                                                    </div>
                                                    <div class="col-md-4 mb-20 px-15">
                                                        <label class="il-gray fs-14 fw-500 align-center">Contact Number</label>
                                                        <input type="tel" class="form-control  ih-medium ip-light radius-xs b-light" placeholder="**********" required="">
                                                    </div>
                                                </div>
                                                <div class="form-row mx-n15">
                                                    <div class="col-md-3 mb-20 px-15">
                                                        <label class="il-gray fs-14 fw-500 align-center">Gender</label>
                                                        <select class="form-control px-15" id="Gender">
                                                            <option selected="">Male</option>
                                                            <option>Female</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-3 mb-20 px-15">
                                                        <label class="il-gray fs-14 fw-500 align-center">Employee ID</label>
                                                        <input type="text" class="form-control  ih-medium ip-light radius-xs b-light" placeholder="32987" required="">
                                                    </div>
                                                    <div class="col-md-3 mb-20 px-15">
                                                        <div class="form-group form-group-calender ">
                                                            <label for="datepicker9" class="il-gray fs-14 fw-500 align-center">Date of Birth<span class="text-danger">*</span></label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control  ih-medium ip-gray radius-xs b-light" id="datepicker2" placeholder="22 Aug 2019">
                                                                <a href="#"><span data-feather="calendar"></span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 mb-20 px-15">
                                                        <label class="il-gray fs-14 fw-500 align-center">Status</label>
                                                        <select class="form-control px-15" id="Status">
                                                            <option selected="">Active</option>
                                                            <option>Banned</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 mb-20 px-15">
                                                        <label class="il-gray fs-14 fw-500 align-center">Marital Status</label>
                                                        <select class="form-control px-15" id="Marital_Status">
                                                            <option value="0" selected=""> Single </option>
                                                            <option value="1"> Married </option>
                                                            <option value="2"> Widowed </option>
                                                            <option value="3"> Divorced or Separated </option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 mb-20 px-15">
                                                        <label class="il-gray fs-14 fw-500 align-center">Role *</label>
                                                        <select class="form-control px-15" id="Employee_Role">
                                                            <option>Employee</option>
                                                            <option>Marketing Manager</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 mb-20 px-15">
                                                        <label class="il-gray fs-14 fw-500 align-center">State / Province</label>
                                                        <input type="text" class="form-control  ih-medium ip-light radius-xs b-light" placeholder="State / Province" required="">
                                                    </div>
                                                    <div class="col-md-4 mb-20 px-15">
                                                        <label class="il-gray fs-14 fw-500 align-center">City</label>
                                                        <input type="text" class="form-control  ih-medium ip-light radius-xs b-light" placeholder="City" required="">
                                                    </div>
                                                    <div class="col-md-4 mb-20 px-15">
                                                        <label class="il-gray fs-14 fw-500 align-center">Zip Code / Postal Code</label>
                                                        <input type="text" class="form-control  ih-medium ip-light radius-xs b-light" placeholder="Zip Code / Postal Code" required="">
                                                    </div>
                                                    <div class="col-md-4 mb-20 px-15">
                                                        <label class="il-gray fs-14 fw-500 align-center">Religion</label>
                                                        <select class="form-control px-15" id="Religion">
                                                            <option value="" data-select2-id="156"></option>
                                                            <option value="16" data-select2-id="1226">Agnosticism</option>
                                                            <option value="17" data-select2-id="1227"> Atheism</option>
                                                            <option value="18" data-select2-id="1228"> Baha'i</option>
                                                            <option value="19" data-select2-id="1229"> Buddhism</option>
                                                            <option value="20" data-select2-id="1230"> Christianity</option>
                                                            <option value="21" data-select2-id="1231"> Humanism</option>
                                                            <option value="22" data-select2-id="1232"> Hinduism</option>
                                                            <option value="23" data-select2-id="1233"> Islam</option>
                                                            <option value="24" data-select2-id="1234"> Jainism</option>
                                                            <option value="25" data-select2-id="1235"> Judaism</option>
                                                            <option value="26" data-select2-id="1236"> Sikhism</option>
                                                            <option value="27" data-select2-id="1237"> Zoroastrianism</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 mb-20 px-15">
                                                        <label class="il-gray fs-14 fw-500 align-center">Blood Group</label>
                                                        <select class="form-control px-15" id="Blood_Group">
                                                            <option value="" data-select2-id="167"></option>
                                                            <option value="A+" data-select2-id="1240">A+</option>
                                                            <option value="A-" data-select2-id="1241">A-</option>
                                                            <option value="B+" data-select2-id="1242">B+</option>
                                                            <option value="B-" data-select2-id="1243">B-</option>
                                                            <option value="AB+" data-select2-id="1244">AB+</option>
                                                            <option value="AB-" data-select2-id="1245">AB-</option>
                                                            <option value="O+" data-select2-id="1246">O+</option>
                                                            <option value="O-" data-select2-id="1247">O-</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 mb-20 px-15">
                                                        <label class="il-gray fs-14 fw-500 align-center">Nationality</label>
                                                        <select class="form-control px-15" id="Nationality">
                                                            <option value="" data-select2-id="415">Select One</option>
                                                            <option value="1" data-select2-id="977"> Afghanistan </option>
                                                            <option value="2" data-select2-id="978">  Albania </option>
                                                            <option value="3" data-select2-id="979">Algeria </option>
                                                            <option value="4" data-select2-id="980"> American Samoa</option>
                                                            <option value="5" data-select2-id="981">Andorra</option>
                                                            <option value="6" data-select2-id="982">Angola</option>
                                                            <option value="7" data-select2-id="983">Anguilla</option>
                                                            <option value="8" data-select2-id="984">Antarctica</option>
                                                            <option value="9" data-select2-id="985">Antigua and Barbuda</option>
                                                            <option value="10" data-select2-id="986">Argentina</option>
                                                            <option value="11" data-select2-id="987">Armenia</option>
                                                            <option value="12" data-select2-id="988">Aruba</option>
                                                            <option value="13" data-select2-id="989">Australia</option>
                                                            <option value="14" data-select2-id="990">Austria</option>
                                                            <option value="15" data-select2-id="991">Azerbaijan</option>
                                                            <option value="16" data-select2-id="992">Bahamas</option>
                                                            <option value="17" data-select2-id="993">Bahrain</option>
                                                            <option value="18" data-select2-id="994">Bangladesh</option>
                                                            <option value="19" data-select2-id="995">Barbados</option>
                                                            <option value="20" data-select2-id="996">Belarus</option>
                                                            <option value="21" data-select2-id="997">Belgium</option>
                                                            <option value="22" data-select2-id="998">Belize</option>
                                                            <option value="23" data-select2-id="999">Benin</option>
                                                            <option value="24" data-select2-id="1000">Bermuda</option>
                                                            <option value="25" data-select2-id="1001">Bhutan</option>
                                                            <option value="26" data-select2-id="1002">Bolivia</option>
                                                            <option value="27" data-select2-id="1003">Bosnia and Herzegovina</option>
                                                            <option value="28" data-select2-id="1004">Botswana</option>
                                                            <option value="29" data-select2-id="1005">Bouvet Island</option>
                                                            <option value="30" data-select2-id="1006">Brazil</option>
                                                            <option value="31" data-select2-id="1007">British Indian Ocean Territory</option>
                                                            <option value="32" data-select2-id="1008">Brunei Darussalam</option>
                                                            <option value="33" data-select2-id="1009">Bulgaria</option>
                                                            <option value="34" data-select2-id="1010">Burkina Faso</option>
                                                            <option value="35" data-select2-id="1011">Burundi</option>
                                                            <option value="36" data-select2-id="1012">Cambodia</option>
                                                            <option value="37" data-select2-id="1013">Cameroon</option>
                                                            <option value="38" data-select2-id="1014">Canada</option>
                                                            <option value="39" data-select2-id="1015">Cape Verde</option>
                                                            <option value="40" data-select2-id="1016">Cayman Islands</option>
                                                            <option value="41" data-select2-id="1017">Central African Republic</option>
                                                            <option value="42" data-select2-id="1018">Chad</option>
                                                            <option value="43" data-select2-id="1019">Chile</option>
                                                            <option value="44" data-select2-id="1020">China</option>
                                                            <option value="45" data-select2-id="1021">Christmas Island</option>
                                                            <option value="46" data-select2-id="1022">Cocos (Keeling) Islands</option>
                                                            <option value="47" data-select2-id="1023">Colombia</option>
                                                            <option value="48" data-select2-id="1024">Comoros</option>
                                                            <option value="49" data-select2-id="1025">Congo</option>
                                                            <option value="50" data-select2-id="1026">Cook Islands</option>
                                                            <option value="51" data-select2-id="1027">Costa Rica</option>
                                                            <option value="52" data-select2-id="1028">Croatia (Hrvatska)</option>
                                                            <option value="53" data-select2-id="1029">Cuba</option>
                                                            <option value="54" data-select2-id="1030">Cyprus</option>
                                                            <option value="55" data-select2-id="1031">Czech Republic</option>
                                                            <option value="56" data-select2-id="1032">Denmark</option>
                                                            <option value="57" data-select2-id="1033">Djibouti</option>
                                                            <option value="58" data-select2-id="1034">Dominica</option>
                                                            <option value="59" data-select2-id="1035">Dominican Republic</option>
                                                            <option value="60" data-select2-id="1036">East Timor</option>
                                                            <option value="61" data-select2-id="1037">Ecuador</option>
                                                            <option value="62" data-select2-id="1038">Egypt</option>
                                                            <option value="63" data-select2-id="1039">El Salvador</option>
                                                            <option value="64" data-select2-id="1040">Equatorial Guinea</option>
                                                            <option value="65" data-select2-id="1041">Eritrea</option>
                                                            <option value="66" data-select2-id="1042">Estonia</option>
                                                            <option value="67" data-select2-id="1043">Ethiopia</option>
                                                            <option value="68" data-select2-id="1044">Falkland Islands (Malvinas)</option>
                                                            <option value="69" data-select2-id="1045">Faroe Islands</option>
                                                            <option value="70" data-select2-id="1046">Fiji</option>
                                                            <option value="71" data-select2-id="1047">Finland</option>
                                                            <option value="72" data-select2-id="1048">France</option>
                                                            <option value="73" data-select2-id="1049">France, Metropolitan</option>
                                                            <option value="74" data-select2-id="1050">French Guiana</option>
                                                            <option value="75" data-select2-id="1051">French Polynesia</option>
                                                            <option value="76" data-select2-id="1052">French Southern Territories</option>
                                                            <option value="77" data-select2-id="1053">Gabon</option>
                                                            <option value="78" data-select2-id="1054">Gambia</option>
                                                            <option value="79" data-select2-id="1055">Georgia</option>
                                                            <option value="80" data-select2-id="1056">Germany</option>
                                                            <option value="81" data-select2-id="1057">Ghana</option>
                                                            <option value="82" data-select2-id="1058">Gibraltar</option>
                                                            <option value="83" data-select2-id="1059">Guernsey</option>
                                                            <option value="84" data-select2-id="1060">Greece</option>
                                                            <option value="85" data-select2-id="1061">Greenland</option>
                                                            <option value="86" data-select2-id="1062">Grenada</option>
                                                            <option value="87" data-select2-id="1063">Guadeloupe</option>
                                                            <option value="88" data-select2-id="1064">Guam</option>
                                                            <option value="89" data-select2-id="1065">Guatemala</option>
                                                            <option value="90" data-select2-id="1066">Guinea</option>
                                                            <option value="91" data-select2-id="1067">Guinea-Bissau</option>
                                                            <option value="92" data-select2-id="1068">Guyana</option>
                                                            <option value="93" data-select2-id="1069">Haiti</option>
                                                            <option value="94" data-select2-id="1070">Heard and Mc Donald Islands</option>
                                                            <option value="95" data-select2-id="1071">Honduras</option>
                                                            <option value="96" data-select2-id="1072">Hong Kong</option>
                                                            <option value="97" data-select2-id="1073">Hungary</option>
                                                            <option value="98" data-select2-id="1074">Iceland</option>
                                                            <option value="99" data-select2-id="1075">India</option>
                                                            <option value="100" data-select2-id="1076">Isle of Man</option>
                                                            <option value="101" data-select2-id="1077">Indonesia</option>
                                                            <option value="102" data-select2-id="1078">Iran (Islamic Republic of)</option>
                                                            <option value="103" data-select2-id="1079">Iraq</option>
                                                            <option value="104" data-select2-id="1080">Ireland</option>
                                                            <option value="105" data-select2-id="1081">Israel</option>
                                                            <option value="106" data-select2-id="1082">Italy</option>
                                                            <option value="107" data-select2-id="1083">Ivory Coast</option>
                                                            <option value="108" data-select2-id="1084">Jersey</option>
                                                            <option value="109" data-select2-id="1085">Jamaica</option>
                                                            <option value="110" data-select2-id="1086">Japan</option>
                                                            <option value="111" data-select2-id="1087">Jordan</option>
                                                            <option value="112" data-select2-id="1088">Kazakhstan</option>
                                                            <option value="113" data-select2-id="1089">Kenya</option>
                                                            <option value="114" data-select2-id="1090">Kiribati</option>
                                                            <option value="115" data-select2-id="1091">Korea, Democratic People's Republic of</option>
                                                            <option value="116" data-select2-id="1092">Korea, Republic of</option>
                                                            <option value="117" data-select2-id="1093">Kosovo</option>
                                                            <option value="118" data-select2-id="1094">Kuwait</option>
                                                            <option value="119" data-select2-id="1095">Kyrgyzstan</option>
                                                            <option value="120" data-select2-id="1096">Lao People's Democratic Republic</option>
                                                            <option value="121" data-select2-id="1097">Latvia</option>
                                                            <option value="122" data-select2-id="1098">Lebanon</option>
                                                            <option value="123" data-select2-id="1099">Lesotho</option>
                                                            <option value="124" data-select2-id="1100">Liberia</option>
                                                            <option value="125" data-select2-id="1101">Libyan Arab Jamahiriya</option>
                                                            <option value="126" data-select2-id="1102">Liechtenstein</option>
                                                            <option value="127" data-select2-id="1103">Lithuania</option>
                                                            <option value="128" data-select2-id="1104">Luxembourg</option>
                                                            <option value="129" data-select2-id="1105">Macau</option>
                                                            <option value="130" data-select2-id="1106">Macedonia</option>
                                                            <option value="131" data-select2-id="1107">Madagascar</option>
                                                            <option value="132" data-select2-id="1108">Malawi</option>
                                                            <option value="133" data-select2-id="1109">Malaysia</option>
                                                            <option value="134" data-select2-id="1110">Maldives</option>
                                                            <option value="135" data-select2-id="1111">Mali</option>
                                                            <option value="136" data-select2-id="1112">Malta</option>
                                                            <option value="137" data-select2-id="1113">Marshall Islands</option>
                                                            <option value="138" data-select2-id="1114">Martinique</option>
                                                            <option value="139" data-select2-id="1115">Mauritania</option>
                                                            <option value="140" data-select2-id="1116">Mauritius</option>
                                                            <option value="141" data-select2-id="1117">Mayotte</option>
                                                            <option value="142" data-select2-id="1118">Mexico</option>
                                                            <option value="143" data-select2-id="1119">Micronesia, Federated States of</option>
                                                            <option value="144" data-select2-id="1120">Moldova, Republic of</option>
                                                            <option value="145" data-select2-id="1121">Monaco</option>
                                                            <option value="146" data-select2-id="1122">Mongolia</option>
                                                            <option value="147" data-select2-id="1123">Montenegro</option>
                                                            <option value="148" data-select2-id="1124">Montserrat</option>
                                                            <option value="149" data-select2-id="1125">Morocco</option>
                                                            <option value="150" data-select2-id="1126">Mozambique</option>
                                                            <option value="151" data-select2-id="1127">Myanmar</option>
                                                            <option value="152" data-select2-id="1128">Namibia</option>
                                                            <option value="153" data-select2-id="1129">Nauru</option>
                                                            <option value="154" data-select2-id="1130">Nepal</option>
                                                            <option value="155" data-select2-id="1131">Netherlands</option>
                                                            <option value="156" data-select2-id="1132">Netherlands Antilles</option>
                                                            <option value="157" data-select2-id="1133">New Caledonia</option>
                                                            <option value="158" data-select2-id="1134">New Zealand</option>
                                                            <option value="159" data-select2-id="1135">Nicaragua</option>
                                                            <option value="160" data-select2-id="1136">Niger</option>
                                                            <option value="161" data-select2-id="1137">Nigeria</option>
                                                            <option value="162" data-select2-id="1138">Niue</option>
                                                            <option value="163" data-select2-id="1139">Norfolk Island</option>
                                                            <option value="164" data-select2-id="1140">Northern Mariana Islands</option>
                                                            <option value="165" data-select2-id="1141">Norway</option>
                                                            <option value="166" data-select2-id="1142">Oman</option>
                                                            <option value="167" data-select2-id="1143">Pakistan</option>
                                                            <option value="168" data-select2-id="1144">Palau</option>
                                                            <option value="169" data-select2-id="1145">Palestine</option>
                                                            <option value="170" data-select2-id="1146">Panama</option>
                                                            <option value="171" data-select2-id="1147">Papua New Guinea</option>
                                                            <option value="172" data-select2-id="1148">Paraguay</option>
                                                            <option value="173" data-select2-id="1149">Peru</option>
                                                            <option value="174" data-select2-id="1150">Philippines</option>
                                                            <option value="175" data-select2-id="1151">Pitcairn</option>
                                                            <option value="176" data-select2-id="1152">Poland</option>
                                                            <option value="177" data-select2-id="1153">Portugal</option>
                                                            <option value="178" data-select2-id="1154">Puerto Rico</option>
                                                            <option value="179" data-select2-id="1155">Qatar</option>
                                                            <option value="180" data-select2-id="1156">Reunion</option>
                                                            <option value="181" data-select2-id="1157">Romania</option>
                                                            <option value="182" data-select2-id="1158">Russian Federation</option>
                                                            <option value="183" data-select2-id="1159">Rwanda</option>
                                                            <option value="184" data-select2-id="1160">Saint Kitts and Nevis</option>
                                                            <option value="185" data-select2-id="1161">Saint Lucia</option>
                                                            <option value="186" data-select2-id="1162">Saint Vincent and the Grenadines</option>
                                                            <option value="187" data-select2-id="1163">Samoa</option>
                                                            <option value="188" data-select2-id="1164">San Marino</option>
                                                            <option value="189" data-select2-id="1165">Sao Tome and Principe</option>
                                                            <option value="190" data-select2-id="1166">Saudi Arabia</option>
                                                            <option value="191" data-select2-id="1167">Senegal</option>
                                                            <option value="192" data-select2-id="1168">Serbia</option>
                                                            <option value="193" data-select2-id="1169">Seychelles</option>
                                                            <option value="194" data-select2-id="1170">Sierra Leone</option>
                                                            <option value="195" data-select2-id="1171">Singapore</option>
                                                            <option value="196" data-select2-id="1172">Slovakia</option>
                                                            <option value="197" data-select2-id="1173">Slovenia</option>
                                                            <option value="198" data-select2-id="1174">Solomon Islands</option>
                                                            <option value="199" data-select2-id="1175">Somalia</option>
                                                            <option value="200" data-select2-id="1176">South Africa</option>
                                                            <option value="201" data-select2-id="1177">South Georgia South Sandwich Islands</option>
                                                            <option value="202" data-select2-id="1178">Spain</option>
                                                            <option value="203" data-select2-id="1179">Sri Lanka</option>
                                                            <option value="204" data-select2-id="1180">St. Helena</option>
                                                            <option value="205" data-select2-id="1181">St. Pierre and Miquelon</option>
                                                            <option value="206" data-select2-id="1182">Sudan</option>
                                                            <option value="207" data-select2-id="1183">Suriname</option>
                                                            <option value="208" data-select2-id="1184">Svalbard and Jan Mayen Islands</option>
                                                            <option value="209" data-select2-id="1185">Swaziland</option>
                                                            <option value="210" data-select2-id="1186">Sweden</option>
                                                            <option value="211" data-select2-id="1187">Switzerland</option>
                                                            <option value="212" data-select2-id="1188">Syrian Arab Republic</option>
                                                            <option value="213" data-select2-id="1189">Taiwan</option>
                                                            <option value="214" data-select2-id="1190">Tajikistan</option>
                                                            <option value="215" data-select2-id="1191">Tanzania, United Republic of</option>
                                                            <option value="216" data-select2-id="1192">Thailand</option>
                                                            <option value="217" data-select2-id="1193">Togo</option>
                                                            <option value="218" data-select2-id="1194">Tokelau</option>
                                                            <option value="219" data-select2-id="1195">Tonga</option>
                                                            <option value="220" data-select2-id="1196">Trinidad and Tobago</option>
                                                            <option value="221" data-select2-id="1197">Tunisia</option>
                                                            <option value="222" data-select2-id="1198">Turkey</option>
                                                            <option value="223" data-select2-id="1199">Turkmenistan</option>
                                                            <option value="224" data-select2-id="1200">Turks and Caicos Islands</option>
                                                            <option value="225" data-select2-id="1201">Tuvalu</option>
                                                            <option value="226" data-select2-id="1202">Uganda</option>
                                                            <option value="227" data-select2-id="1203">Ukraine</option>
                                                            <option value="228" data-select2-id="1204">United Arab Emirates</option>
                                                            <option value="229" data-select2-id="1205">United Kingdom</option>
                                                            <option value="230" data-select2-id="1206">United States</option>
                                                            <option value="231" data-select2-id="1207">United States minor outlying islands</option>
                                                            <option value="232" data-select2-id="1208">Uruguay</option>
                                                            <option value="233" data-select2-id="1209">Uzbekistan</option>
                                                            <option value="234" data-select2-id="1210">Vanuatu</option>
                                                            <option value="235" data-select2-id="1211">Vatican City State</option>
                                                            <option value="236" data-select2-id="1212">Venezuela</option>
                                                            <option value="237" data-select2-id="1213">Vietnam</option>
                                                            <option value="238" data-select2-id="1214">Virgin Islands (British)</option>
                                                            <option value="239" data-select2-id="1215">Virgin Islands (U.S.)</option>
                                                            <option value="240" data-select2-id="1216">Wallis and Futuna Islands</option>
                                                            <option value="241" data-select2-id="1217">Western Sahara</option>
                                                            <option value="242" data-select2-id="1218">Yemen</option>
                                                            <option value="243" data-select2-id="1219">Zaire</option>
                                                            <option value="244" data-select2-id="1220">Zambia</option>
                                                            <option value="245" data-select2-id="1221">Zimbabwe</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 mb-20 px-15">
                                                        <label class="il-gray fs-14 fw-500 align-center">Citizenship</label>
                                                        <select class="form-control px-15" id="Citizenship">
                                                            <option value="" data-select2-id="663"> Select One</option>
                                                            <option value="1" data-select2-id="730"> Afghanistan</option> 
                                                            <option value="2" data-select2-id="731"> Albania</option> 
                                                            <option value="3" data-select2-id="732"> Algeria</option> 
                                                            <option value="4" data-select2-id="733"> American Samoa</option> 
                                                            <option value="5" data-select2-id="734"> Andorra</option> 
                                                            <option value="6" data-select2-id="735"> Angola</option> 
                                                            <option value="7" data-select2-id="736"> Anguilla</option> 
                                                            <option value="8" data-select2-id="737"> Antarctica</option> 
                                                            <option value="9" data-select2-id="738"> Antigua and Barbuda</option> 
                                                            <option value="10" data-select2-id="739"> Argentina</option> 
                                                            <option value="11" data-select2-id="740"> Armenia</option> 
                                                            <option value="12" data-select2-id="741"> Aruba</option> 
                                                            <option value="13" data-select2-id="742"> Australia</option> 
                                                            <option value="14" data-select2-id="743"> Austria</option> 
                                                            <option value="15" data-select2-id="744"> Azerbaijan</option> 
                                                            <option value="16" data-select2-id="745"> Bahamas</option> 
                                                            <option value="17" data-select2-id="746"> Bahrain</option> 
                                                            <option value="18" data-select2-id="747"> Bangladesh</option> 
                                                            <option value="19" data-select2-id="748"> Barbados</option> 
                                                            <option value="20" data-select2-id="749"> Belarus</option> 
                                                            <option value="21" data-select2-id="750"> Belgium</option> 
                                                            <option value="22" data-select2-id="751"> Belize</option> 
                                                            <option value="23" data-select2-id="752"> Benin</option> 
                                                            <option value="24" data-select2-id="753"> Bermuda</option> 
                                                            <option value="25" data-select2-id="754"> Bhutan</option> 
                                                            <option value="26" data-select2-id="755"> Bolivia</option> 
                                                            <option value="27" data-select2-id="756"> Bosnia and Herzegovina</option> 
                                                            <option value="28" data-select2-id="757"> Botswana</option> 
                                                            <option value="29" data-select2-id="758"> Bouvet Island</option> 
                                                            <option value="30" data-select2-id="759"> Brazil</option> 
                                                            <option value="31" data-select2-id="760"> British Indian Ocean Territory</option> 
                                                            <option value="32" data-select2-id="761"> Brunei Darussalam</option> 
                                                            <option value="33" data-select2-id="762"> Bulgaria</option> 
                                                            <option value="34" data-select2-id="763"> Burkina Faso</option> 
                                                            <option value="35" data-select2-id="764"> Burundi</option> 
                                                            <option value="36" data-select2-id="765"> Cambodia</option> 
                                                            <option value="37" data-select2-id="766"> Cameroon</option> 
                                                            <option value="38" data-select2-id="767"> Canada</option> 
                                                            <option value="39" data-select2-id="768"> Cape Verde</option> 
                                                            <option value="40" data-select2-id="769"> Cayman Islands</option> 
                                                            <option value="41" data-select2-id="770"> Central African Republic</option> 
                                                            <option value="42" data-select2-id="771"> Chad</option> 
                                                            <option value="43" data-select2-id="772"> Chile</option> 
                                                            <option value="44" data-select2-id="773"> China</option> 
                                                            <option value="45" data-select2-id="774"> Christmas Island</option> 
                                                            <option value="46" data-select2-id="775"> Cocos (Keeling) Islands</option> 
                                                            <option value="47" data-select2-id="776"> Colombia</option> 
                                                            <option value="48" data-select2-id="777"> Comoros</option> 
                                                            <option value="49" data-select2-id="778"> Congo</option> 
                                                            <option value="50" data-select2-id="779"> Cook Islands</option> 
                                                            <option value="51" data-select2-id="780"> Costa Rica</option> 
                                                            <option value="52" data-select2-id="781"> Croatia (Hrvatska)</option> 
                                                            <option value="53" data-select2-id="782"> Cuba</option> 
                                                            <option value="54" data-select2-id="783"> Cyprus</option> 
                                                            <option value="55" data-select2-id="784"> Czech Republic</option> 
                                                            <option value="56" data-select2-id="785"> Denmark</option> 
                                                            <option value="57" data-select2-id="786"> Djibouti</option> 
                                                            <option value="58" data-select2-id="787"> Dominica</option> 
                                                            <option value="59" data-select2-id="788"> Dominican Republic</option> 
                                                            <option value="60" data-select2-id="789"> East Timor</option> 
                                                            <option value="61" data-select2-id="790"> Ecuador</option> 
                                                            <option value="62" data-select2-id="791"> Egypt</option> 
                                                            <option value="63" data-select2-id="792"> El Salvador</option> 
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 mb-20 px-15">
                                                        <label class="il-gray fs-14 fw-500 align-center">Address Line 1</label>
                                                        <textarea rows="3" class="form-control ip-light radius-xs b-light"></textarea>
                                                    </div>
                                                    <div class="col-md-6 mb-20 px-15">
                                                        <label class="il-gray fs-14 fw-500 align-center">Address Line 2</label>
                                                        <textarea rows="3" class="form-control ip-light radius-xs b-light"></textarea>
                                                    </div>
                                                </div>
                                                <button class="btn btn-primary px-30" type="submit">Update Profile</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Personal_Information" role="tabpanel" aria-labelledby="Personal_Information_Tab">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="color-dark fw-600"><span class="f-w-500 ml-0"><i class="la la-user mr-2 la-2x"></i> </span> Personal Information </h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-wrapper">

                                            <div class="atbd-tab tab-horizontal">
                                                <ul class="nav nav-tabs vertical-tabs" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="BIO-tab" data-toggle="tab" href="#BIO" role="tab" aria-controls="tab-v-1" aria-selected="true">BIO</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="Social_Profile-tab" data-toggle="tab" href="#Social_Profile" role="tab" aria-controls="tab-v-2" aria-selected="false">Social Profile</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="Bank_Account-tab" data-toggle="tab" href="#Bank_Account" role="tab" aria-controls="tab-v-3" aria-selected="false">Bank Account</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="Emergency_Contact-tab" data-toggle="tab" href="#Emergency_Contact" role="tab" aria-controls="tab-v-4" aria-selected="false">Emergency Contact</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content mt-4">
                                                    <div class="tab-pane fade show active" id="BIO" role="tabpanel" aria-labelledby="BIO-tab">
                                                        <div class="horizontal-form">
                                                            <form action="#">
                                                                <div class="form-group row mb-25">
                                                                    <div class="col-sm-2 d-flex aling-items-center">
                                                                        <label for="inputName" class=" col-form-label color-dark fs-14 fw-500 align-center">Bio </label>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <textarea class="form-control ip-gray radius-xs b-light px-15" placeholder="Enter staff bio here..."></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mb-25">
                                                                    <div class="col-sm-2 d-flex aling-items-center">
                                                                        <label for="inputPassword" class="col-form-label  color-dark fs-14 fw-500 align-center">Experience </label>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <select class="form-control ih-medium ip-gray radius-xs b-light px-15" id="Experience">
                                                                            <option value="0" selected="selected" data-select2-id="677">Startup</option>
                                                                                <option value="1" data-select2-id="1258"> 1 year</option>
                                                                                <option value="2" data-select2-id="1259"> 2 years</option>
                                                                                <option value="3" data-select2-id="1260"> 3 years</option>
                                                                                <option value="4" data-select2-id="1261"> 4 years</option>
                                                                                <option value="5" data-select2-id="1262"> 5 years</option>
                                                                                <option value="6" data-select2-id="1263"> 6 years </option>
                                                                                <option value="7" data-select2-id="1264"> 7 years</option>
                                                                                <option value="8" data-select2-id="1265"> 8 years</option>
                                                                                <option value="9" data-select2-id="1266"> 9 years</option>
                                                                                <option value="10" data-select2-id="1267"> 10 years</option>
                                                                                <option value="10+" data-select2-id="1268"> 10+ years</option>
                                                                        </select>
                                                                        <div class="layout-button mt-25">
                                                                            <button type="button" class="btn btn-primary btn-default btn-squared px-30">Update BIO</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="Social_Profile" role="tabpanel" aria-labelledby="Social_Profile-tab">
                                                        <div class="social_profile col-md-8">
                                                            <form action="#">
                                                                <div class="form-group">
                                                                    <label for="a10" class="il-gray fs-14 fw-500 align-center">Facebook</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend"> <span class="input-group-text bg-facebook text-white"> <i class="fab fa-facebook-f"></i> </span> </div>
                                                                        <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" placeholder="Profile Url" name="fb_profile" value="">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="a10" class="il-gray fs-14 fw-500 align-center">Twitter</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend"> <span class="input-group-text bg-twitter text-white"> <i class="fab fa-twitter"></i> </span> </div>
                                                                        <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" placeholder="Profile Url" name="tw_profile" value="">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="a10" class="il-gray fs-14 fw-500 align-center">Linkedin</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend"> <span class="input-group-text bg-linkedin text-white"> <i class="fab fa-linkedin-in"></i> </span> </div>
                                                                        <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" placeholder="Profile Url" name="linkedin_profile" value="">
                                                                    </div>
                                                                </div>
                                                                <button class="btn btn-primary px-30" type="submit">Update Social</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="Bank_Account" role="tabpanel" aria-labelledby="Bank_Account-tab">
                                                        <form action="#">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="a1" class="il-gray fs-14 fw-500 align-center">Account Title <span class="text-danger">*</span></label>
                                                                        <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" id="a1" placeholder="One of Three Columns">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="a2" class="il-gray fs-14 fw-500 align-center">Account Number <span class="text-danger">*</span></label>
                                                                        <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" id="a2" placeholder="One of Three Columns">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="a3" class="il-gray fs-14 fw-500 align-center">Bank Name <span class="text-danger">*</span></label>
                                                                        <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" id="a3" placeholder="One of Three Columns">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="a4" class="il-gray fs-14 fw-500 align-center">IBAN <span class="text-danger">*</span></label>
                                                                        <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" id="a4" placeholder="One of Four Columns">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="a5" class="il-gray fs-14 fw-500 align-center">Swift Code <span class="text-danger">*</span></label>
                                                                        <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" id="a5" placeholder="One of Four Columns">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="a6" class="il-gray fs-14 fw-500 align-center">Bank Branch <span class="text-danger">*</span></label>
                                                                        <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" id="a6" placeholder="One of Four Columns">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group mb-0">
                                                                        <button class="btn btn-primary px-30" type="submit">Update Bank Info</button>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="tab-pane fade" id="Emergency_Contact" role="tabpanel" aria-labelledby="Emergency_Contact-tab">
                                                        <form action="#">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="il-gray fs-14 fw-500 align-center">Full Name <span class="text-danger">*</span></label>
                                                                        <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" placeholder="Full Name">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="il-gray fs-14 fw-500 align-center">Contact Number <span class="text-danger">*</span></label>
                                                                        <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" placeholder="Contact Number">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="il-gray fs-14 fw-500 align-center">Email Id <span class="text-danger">*</span></label>
                                                                        <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" placeholder="Email Id">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="il-gray fs-14 fw-500 align-center">Address <span class="text-danger">*</span></label>
                                                                        <textarea class="form-control ip-light radius-xs b-light px-15" rows="4" placeholder="Address"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group mb-0">
                                                                        <button class="btn btn-primary px-30" type="submit">Update Contact</button>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Profile_Picture" role="tabpanel" aria-labelledby="Profile_Picture_Tab">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="color-dark fw-600"><span class="f-w-500 ml-0"><i class="la la-image mr-2 la-2x"></i> </span> Profile Picture </h5>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="form-row">
                                                <div class="account-profile border-bottom form-group col-md-12 text-center pb-4">
                                                    <div class="ap-img mb-20 pro_img_wrapper ml-auto mr-auto">
                                                        <input id="imgInp" type="file" accept="image/*" name="fileUpload" class="d-none">
                                                        <label for="imgInp">
                                                            <img class="ap-img__main rounded-circle wh-120" id="blah" src="img/author/profile.png" alt="profile">
                                                            <span class="cross" id="remove_pro_pic"><span data-feather="camera"></span></span>
                                                        </label>
                                                    </div>
                                                    <h5> Profile Picture. Click above to upload. </h5>
                                                    <p> <small> Upload files only: gif,png,jpg,jpeg</small> </p>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Account_Information" role="tabpanel" aria-labelledby="Account_Information_Tab">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="color-dark fw-600">
                                            <span class="f-w-500 ml-0"><i class="la la-book mr-2 la-2x"></i> </span> Account Information
                                            <small class="d-block fs-10 ml-3 pl-3">change your account information</small>
                                        </h5>
                                    </div>
                                    <div class="card-body">
                                        <form action="#">
                                            <div class="form-group row mb-n25">
                                                <div class="col-md-4 mb-25">
                                                    <label class=" color-dark fs-14 fw-500 align-center">User Name <span class="text-danger">*</span></label>
                                                    <div class="with-icon">
                                                        <span class="la-user lar color-light"></span>
                                                        <input type="text" class="form-control  ih-medium ip-lightradius-xs b-light" placeholder="Duran Clayton">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-25">
                                                    <label class=" color-dark fs-14 fw-500 align-center">Email Id<span class="text-danger">*</span></label>
                                                    <div class="with-icon">
                                                        <span class="las la-envelope color-light"></span>
                                                        <input type="text" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputNameIcon" placeholder="Email">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="layout-button mt-25">
                                                <button type="button" class="btn btn-primary btn-default btn-squared px-30">save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Documents" role="tabpanel" aria-labelledby="Documents_Tab">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="color-dark fw-600"><span class="f-w-500 ml-0"><i class="la la-file-signature mr-2 la-2x"></i> </span> Documents</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="user-profile-list">
                                            <h5 class="mt-1 fw-500 mb-3 pb-3 border-bottom text-gray"> List All Documents </h5>
                                            <div class="userDatatable projectDatatable project-table bg-white w-100 border-0">
                                                <div class="table-responsive">
                                                    <table class="table mb-0 table-basic border">
                                                        <thead>
                                                            <tr class="userDatatable-header">
                                                                <th><span class="userDatatable-title">Document Name</span>
                                                                </th>
                                                                <th>
                                                                    <span class="userDatatable-title">Document Type</span>
                                                                </th>
                                                                <th>
                                                                    <span class="userDatatable-title">Document File</span>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <!-- End: tr -->
                                                            <tr>
                                                                <td valign="top" colspan="3" class="dataTables_empty text-center">No records available</td>
                                                            </tr>
                                                            <!-- End: tr -->

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <form class="mt-4">
                                                <div class="form-row mx-n15">
                                                    <div class="col-md-12 mb-20 px-15">
                                                        <p class="border-bottom pb-1"><strong>Add New Document</strong> </p>
                                                    </div>
                                                    <div class="col-md-6 mb-20 px-15">
                                                        <label class="il-gray fs-14 fw-500 align-center">Document Name <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control ih-medium ip-light radius-xs b-light" placeholder="" required="">
                                                    </div>
                                                    <div class="col-md-6 mb-20 px-15">
                                                        <label class="il-gray fs-14 fw-500 align-center">Document Type<span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control ih-medium ip-light radius-xs b-light" placeholder="" required="">
                                                    </div>
                                                    <div class="col-md-6 mb-20 px-15">
                                                        <label class="il-gray fs-14 fw-500 align-center">Document File <span class="text-danger">*</span></label>
                                                        <input type="file" class="form-control ih-medium ip-light radius-xs b-light" placeholder="" required="">
                                                    </div>
                                                </div>
                                                <button class="btn btn-primary px-30" type="submit">Add Documents</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Timesheet_Agenda" role="tabpanel" aria-labelledby="Timesheet_Agenda_Tab">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="color-dark fw-600"><span class="f-w-500 ml-0"><i class="la la-box mr-2 la-2x"></i> </span>Timesheet Agenda</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-wrapper">

                                            <div class="atbd-tab tab-horizontal">
                                                <ul class="nav nav-tabs vertical-tabs" role="tablist">

                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="Leave Request-tab" data-toggle="tab" href="#Leave_Request" role="tab" aria-controls="tab-v-1" aria-selected="true">Leave Request</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="Expense_Claim-tab" data-toggle="tab" href="#Expense_Claim" role="tab" aria-controls="tab-v-2" aria-selected="false">Expense Claim</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="Request_Loan-tab" data-toggle="tab" href="#Request_Loan" role="tab" aria-controls="tab-v-3" aria-selected="false">Request Loan</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="Travel_Request-tab" data-toggle="tab" href="#Travel_Request" role="tab" aria-controls="tab-v-4" aria-selected="false">Travel Request</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="Advance_Salary-tab" data-toggle="tab" href="#Advance_Salary" role="tab" aria-controls="tab-v-5" aria-selected="false">Advance Salary</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="Overtime_Request-tab" data-toggle="tab" href="#Overtime_Request" role="tab" aria-controls="tab-v-6" aria-selected="false">Overtime Request</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="Awards-tab" data-toggle="tab" href="#Awards" role="tab" aria-controls="tab-v-7" aria-selected="false">Awards</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="Projects-tab" data-toggle="tab" href="#Projects" role="tab" aria-controls="tab-v-8" aria-selected="false">Projects</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="Tasks-tab" data-toggle="tab" href="#Tasks" role="tab" aria-controls="tab-v-9" aria-selected="false">Tasks</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="Payslip_History-tab" data-toggle="tab" href="#Payslip_History" role="tab" aria-controls="tab-v-10" aria-selected="false">Payslip History</a>
                                                    </li>

                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane fade show active" id="Leave_Request" role="tabpanel" aria-labelledby="Leave_Request-tab">
                                                        <div class="user-profile-list mt-4">
                                                            <h5 class="mt-1 fw-500 mb-3 pb-3 border-bottom text-gray"> List All Leave </h5>
                                                            <div class="userDatatable projectDatatable project-table bg-white w-100 border-0">
                                                                <div class="table-responsive">
                                                                    <table class="table mb-0 table-basic border">
                                                                        <thead>
                                                                            <tr class="userDatatable-header">
                                                                                <th><span class="userDatatable-title">Employee</span>
                                                                                </th>
                                                                                <th>
                                                                                    <span class="userDatatable-title">Leave Type</span>
                                                                                </th>
                                                                                <th>
                                                                                    <span class="userDatatable-title">Leave Duration</span>
                                                                                </th>
                                                                                <th><span class="userDatatable-title">Days</span>
                                                                                </th>
                                                                                <th>
                                                                                    <span class="userDatatable-title">Applied On</span>
                                                                                </th>
                                                                                <th class="text-right">
                                                                                    <span class="userDatatable-title">Status</span>
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <!-- End: tr -->
                                                                            <tr>
                                                                                <td valign="top" colspan="5" class="dataTables_empty text-center">No records available</td>
                                                                            </tr>
                                                                            <!-- End: tr -->

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="Expense_Claim" role="tabpanel" aria-labelledby="Expense_Claim-tab">
                                                        <div class="user-profile-list mt-4">
                                                            <h5 class="mt-1 fw-500 mb-3 pb-3 border-bottom text-gray"> List All Expense Claim </h5>
                                                            <div class="userDatatable projectDatatable project-table bg-white w-100 border-0">
                                                                <div class="table-responsive">
                                                                    <table class="table mb-0 table-basic border">
                                                                        <thead>
                                                                            <tr class="userDatatable-header">
                                                                                <th><span class="userDatatable-title">Account Title</span>
                                                                                </th>
                                                                                <th>
                                                                                    <span class="userDatatable-title">Payee</span>
                                                                                </th>
                                                                                <th>
                                                                                    <span class="userDatatable-title">Amount</span>
                                                                                </th>
                                                                                <th><span class="userDatatable-title">Category</span>
                                                                                </th>
                                                                                <th>
                                                                                    <span class="userDatatable-title">REF#</span>
                                                                                </th>
                                                                                <th class="text-right">
                                                                                    <span class="userDatatable-title">Payment Method</span>
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <!-- End: tr -->
                                                                            <tr>
                                                                                <td valign="top" colspan="5" class="dataTables_empty text-center">No records available</td>
                                                                            </tr>
                                                                            <!-- End: tr -->

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="Request_Loan" role="tabpanel" aria-labelledby="Request_Loan-tab">
                                                        <div class="user-profile-list mt-4">
                                                            <h5 class="mt-1 fw-500 mb-3 pb-3 border-bottom text-gray">List All Request Loan</h5>
                                                            <div class="userDatatable projectDatatable project-table bg-white w-100 border-0">
                                                                <div class="table-responsive">
                                                                    <table class="table mb-0 table-basic border">
                                                                        <thead>
                                                                            <tr class="userDatatable-header">
                                                                                <th><span class="userDatatable-title">Employee</span>
                                                                                </th>
                                                                                <th>
                                                                                    <span class="userDatatable-title">Amount</span>
                                                                                </th>
                                                                                <th>
                                                                                    <span class="userDatatable-title">Month & Year</span>
                                                                                </th>
                                                                                <th><span class="userDatatable-title">One Time Deduct</span>
                                                                                </th>
                                                                                <th>
                                                                                    <span class="userDatatable-title">EMI</span>
                                                                                </th>
                                                                                <th class="text-right">
                                                                                    <span class="userDatatable-title">Created at</span>
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <!-- End: tr -->
                                                                            <tr>
                                                                                <td valign="top" colspan="5" class="dataTables_empty text-center">No records available</td>
                                                                            </tr>
                                                                            <!-- End: tr -->

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="Travel_Request" role="tabpanel" aria-labelledby="Travel_Request-tab">
                                                        <div class="user-profile-list mt-4">
                                                            <h5 class="mt-1 fw-500 mb-3 pb-3 border-bottom text-gray">List All Travel Request</h5>
                                                            <div class="userDatatable projectDatatable project-table bg-white w-100 border-0">
                                                                <div class="table-responsive">
                                                                    <table class="table mb-0 table-basic border">
                                                                        <thead>
                                                                            <tr class="userDatatable-header">
                                                                                <th><span class="userDatatable-title">Employee</span>
                                                                                </th>
                                                                                <th>
                                                                                    <span class="userDatatable-title">Place of Visit</span>
                                                                                </th>
                                                                                <th>
                                                                                    <span class="userDatatable-title">Visit Purpose</span>
                                                                                </th>
                                                                                <th><span class="userDatatable-title">Arrangement Type</span>
                                                                                </th>
                                                                                <th>
                                                                                    <span class="userDatatable-title">Actual Budget</span>
                                                                                </th>
                                                                                <th class="text-right">
                                                                                    <span class="userDatatable-title">End Date</span>
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <!-- End: tr -->
                                                                            <tr>
                                                                                <td valign="top" colspan="5" class="dataTables_empty text-center">No records available</td>
                                                                            </tr>
                                                                            <!-- End: tr -->

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="Advance_Salary" role="tabpanel" aria-labelledby="Advance_Salary-tab">
                                                        <div class="user-profile-list mt-4">
                                                            <h5 class="mt-1 fw-500 mb-3 pb-3 border-bottom text-gray">List All Advane Salary</h5>
                                                            <div class="userDatatable projectDatatable project-table bg-white w-100 border-0">
                                                                <div class="table-responsive">
                                                                    <table class="table mb-0 table-basic border">
                                                                        <thead>
                                                                            <tr class="userDatatable-header">
                                                                                <th><span class="userDatatable-title">Employee</span>
                                                                                </th>
                                                                                <th>
                                                                                    <span class="userDatatable-title">Amount</span>
                                                                                </th>
                                                                                <th>
                                                                                    <span class="userDatatable-title">Month & Year</span>
                                                                                </th>
                                                                                <th><span class="userDatatable-title">One Time Deduct</span>
                                                                                </th>
                                                                                <th>
                                                                                    <span class="userDatatable-title">EMI</span>
                                                                                </th>
                                                                                <th class="text-right">
                                                                                    <span class="userDatatable-title">Created at</span>
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <!-- End: tr -->
                                                                            <tr>
                                                                                <td valign="top" colspan="5" class="dataTables_empty text-center">No records available</td>
                                                                            </tr>
                                                                            <!-- End: tr -->

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="Overtime_Request" role="tabpanel" aria-labelledby="Overtime_Request-tab">
                                                        <div class="user-profile-list mt-4">
                                                            <h5 class="mt-1 fw-500 mb-3 pb-3 border-bottom text-gray">List All Overtime Request</h5>
                                                            <div class="userDatatable projectDatatable project-table bg-white w-100 border-0">
                                                                <div class="table-responsive">
                                                                    <table class="table mb-0 table-basic border">
                                                                        <thead>
                                                                            <tr class="userDatatable-header">
                                                                                <th><span class="userDatatable-title">Employee</span>
                                                                                </th>
                                                                                <th>
                                                                                    <span class="userDatatable-title">Date</span>
                                                                                </th>
                                                                                <th>
                                                                                    <span class="userDatatable-title">In Time</span>
                                                                                </th>
                                                                                <th><span class="userDatatable-title">Out Time</span>
                                                                                </th>
                                                                                <th>
                                                                                    <span class="userDatatable-title">Total Hours</span>
                                                                                </th>
                                                                                <th class="text-right">
                                                                                    <span class="userDatatable-title">Status</span>
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <!-- End: tr -->
                                                                            <tr>
                                                                                <td valign="top">...</td>
                                                                                <td valign="top">...</td>
                                                                                <td valign="top">...</td>
                                                                                <td valign="top">...</td>
                                                                                <td valign="top">...</td>
                                                                                <td valign="top">...</td>
                                                                            </tr>
                                                                            <!-- End: tr -->

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="Awards" role="tabpanel" aria-labelledby="Awards-tab">
                                                        <div class="user-profile-list mt-4">
                                                            <h5 class="mt-1 fw-500 mb-3 pb-3 border-bottom text-gray">List All Awards</h5>
                                                            <div class="userDatatable projectDatatable project-table bg-white w-100 border-0">
                                                                <div class="table-responsive">
                                                                    <table class="table mb-0 table-basic border">
                                                                        <thead>
                                                                            <tr class="userDatatable-header">
                                                                                <th><span class="userDatatable-title">Award Type</span>
                                                                                </th>
                                                                                <th>
                                                                                    <span class="userDatatable-title">Employee</span>
                                                                                </th>
                                                                                <th>
                                                                                    <span class="userDatatable-title">Award Gift</span>
                                                                                </th>
                                                                                <th><span class="userDatatable-title">Award Cash</span>
                                                                                </th>
                                                                                <th>
                                                                                    <span class="userDatatable-title">Month/Year</span>
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <!-- End: tr -->
                                                                            <tr>
                                                                                <td valign="top">...</td>
                                                                                <td valign="top">...</td>
                                                                                <td valign="top">...</td>
                                                                                <td valign="top">...</td>
                                                                                <td valign="top">...</td>
                                                                            </tr>
                                                                            <!-- End: tr -->

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="Projects" role="tabpanel" aria-labelledby="Projects-tab">
                                                        <div class="user-profile-list mt-4">
                                                            <h5 class="mt-1 fw-500 mb-3 pb-3 border-bottom text-gray">List All Projects</h5>
                                                            <div class="userDatatable projectDatatable project-table bg-white w-100 border-0">
                                                                <div class="table-responsive">
                                                                    <table class="table mb-0 table-basic border">
                                                                        <thead>
                                                                            <tr class="userDatatable-header">
                                                                                <th><span class="userDatatable-title">Projects</span>
                                                                                </th>
                                                                                <th>
                                                                                    <span class="userDatatable-title">Client</span>
                                                                                </th>
                                                                                <th>
                                                                                    <span class="userDatatable-title">Start Date</span>
                                                                                </th>
                                                                                <th><span class="userDatatable-title">End Date</span>
                                                                                </th>
                                                                                <th>
                                                                                    <span class="userDatatable-title">team</span>
                                                                                </th>
                                                                                <th>
                                                                                    <span class="userDatatable-title">Priority</span>
                                                                                </th>
                                                                                <th>
                                                                                    <span class="userDatatable-title">Progress</span>
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <!-- End: tr -->
                                                                            <tr>
                                                                                <td valign="top" colspan="5" class="text-center">No Records Available</td>
                                                                            </tr>
                                                                            <!-- End: tr -->

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="Tasks" role="tabpanel" aria-labelledby="Tasks-tab">
                                                        <div class="user-profile-list mt-4">
                                                            <h5 class="mt-1 fw-500 mb-3 pb-3 border-bottom text-gray">List All Tasks</h5>
                                                            <div class="userDatatable projectDatatable project-table bg-white w-100 border-0">
                                                                <div class="table-responsive">
                                                                    <table class="table mb-0 table-basic border">
                                                                        <thead>
                                                                            <tr class="userDatatable-header">
                                                                                <th><span class="userDatatable-title">Title</span>
                                                                                </th>
                                                                                <th>
                                                                                    <span class="userDatatable-title">Team</span>
                                                                                </th>
                                                                                <th>
                                                                                    <span class="userDatatable-title">Start Date</span>
                                                                                </th>
                                                                                <th><span class="userDatatable-title">End Date</span>
                                                                                </th>
                                                                                <th>
                                                                                    <span class="userDatatable-title">Status</span>
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <!-- End: tr -->
                                                                            <tr>
                                                                                <td valign="top" colspan="7" class="text-center">No Records Available</td>
                                                                            </tr>
                                                                            <!-- End: tr -->

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="Payslip_History" role="tabpanel" aria-labelledby="Payslip_History-tab">
                                                        <div class="user-profile-list mt-4">
                                                            <h5 class="mt-1 fw-500 mb-3 pb-3 border-bottom text-gray">List Payslip History</h5>
                                                            <div class="userDatatable projectDatatable project-table bg-white w-100 border-0">
                                                                <div class="table-responsive">
                                                                    <table class="table mb-0 table-basic border">
                                                                        <thead>
                                                                            <tr class="userDatatable-header">
                                                                                <th><span class="userDatatable-title">Employee</span>
                                                                                </th>
                                                                                <th>
                                                                                    <span class="userDatatable-title">Net Payable</span>
                                                                                </th>
                                                                                <th>
                                                                                    <span class="userDatatable-title">Salary Month</span>
                                                                                </th>
                                                                                <th><span class="userDatatable-title">Pay Date</span>
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <!-- End: tr -->
                                                                            <tr>
                                                                                <td valign="top" colspan="4" class="text-center">No Records Available</td>
                                                                            </tr>
                                                                            <!-- End: tr -->

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
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Change_Password" role="tabpanel" aria-labelledby="Change_Password_Tab">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="color-dark fw-600"><span class="f-w-500 ml-0"><i class="la la-user-lock mr-2 la-2x"></i> </span>Change Password</h5>
                                    </div>
                                    <div class="card-body">
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group mb-25">
                                                        <label class="il-gray fs-14 fw-500 align-center">Current password <span class="text-danger">*</span></label>
                                                        <div class="with-icon">
                                                            <span class="la-lock las color-light"></span>
                                                            <input type="password" class="form-control ih-medium ip-lightradius-xs b-light" readonly placeholder="*****************">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group mb-25">
                                                        <label class="il-gray fs-14 fw-500 align-center">New password <span class="text-danger">*</span></label>
                                                        <div class="with-icon">
                                                            <span class="la-lock las color-light"></span>
                                                            <input type="password" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputNameIcon" placeholder="*****************">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group mb-25">
                                                        <label class="il-gray fs-14 fw-500 align-center">Repeat New password <span class="text-danger">*</span></label>
                                                        <div class="with-icon">
                                                            <span class="la-lock las color-light"></span>
                                                            <input type="password" class="form-control  ih-medium ip-lightradius-xs b-light" id="inputNameIcon" placeholder="*****************">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group mb-0">
                                                        <button class="btn btn-primary px-30" type="submit">Change Password</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
<?php include('include/footer.php'); ?>       