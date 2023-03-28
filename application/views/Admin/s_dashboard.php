 <?php include('include/header.php'); ?>  

        <div class="contents demo-card expanded">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-main">
                            <h4 class="text-capitalize breadcrumb-title">Website Performance Dashboard</h4>
                            <div class="breadcrumb-action justify-content-center flex-wrap">
                                <div class="action-btn">

                                    <div class="form-group mb-0">
                                        <div class="input-container icon-left position-relative">
                                            <span class="input-icon icon-left">
                                                <span data-feather="calendar"></span>
                                            </span>
                                            <input type="text" class="form-control form-control-default date-ranger" name="date-ranger" placeholder="Oct 30, 2019 - Nov 30, 2019">
                                            <span class="input-icon icon-right">
                                                <span data-feather="chevron-down"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!--<div class="action-btn">
                                    <a href="javascript:void(0)" class="btn btn-sm btn-primary btn-add">
                                        <i class="la la-plus"></i> Add New</a>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <!-- card -->
                        <div class="card bg-opacity-warning border-warning border">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-uppercase fw-medium text-dark fw-600 text-truncate mb-0"> Total Companies</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end justify-content-between mt-4">
                                    <div>
                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="559.25"><?php echo count($companies); ?></span></h4>
                                        <a href="<?php base_url()?>companies" class="text-decoration-underline btn btn-warning">View more</a>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar avatar-warning avatar-lg avatar-circle fs-24">
                                            <i class="la la-city"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-xl-4 col-md-4 mb-30">
                        <!-- card -->
                        <div class="card bg-opacity-success border-success border">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-uppercase fw-medium text-dark fw-600 text-truncate mb-0"> Weekly Active Companies</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end justify-content-between mt-4">
                                    <div>
                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="559.25">20</span>k </h4>
                                        <a href="" class="text-decoration-underline btn btn-success">View more</a>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar avatar-success avatar-lg avatar-circle fs-24">
                                            <i class="la la-clipboard-check"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-xl-4 col-md-4 mb-30">
                        <!-- card -->
                        <div class="card  bg-opacity-primary card-animate border border-primary">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-uppercase fw-medium text-dark fw-600 text-truncate mb-0"> Total Income</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end justify-content-between mt-4">
                                    <div>
                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="559.25">20</span>k </h4>
                                        <a href="" class="text-decoration-underline btn btn-primary">View more</a>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar avatar-primary avatar-lg avatar-circle fs-24">
                                            <i class="la la-rupee-sign"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!--<div class="row">
                    <div class="col-md-5 col-sm-5 col-sm-12 mb-30">
                        <div class="card">
                            <div class="card-header">
                                <h5>Weekly Active Companies</h5>
                            </div>
                            <div class="card-body">
                                <div class="mb-20">
                                    <div class="files-area d-flex justify-content-between align-items-center">
                                        <div class="files-area__left d-flex align-items-center">
                                            <div class="files-area__img">
                                                <img src="img/hrm-logo-full.png" alt="img" class="wh-42">
                                            </div>
                                            <div class="files-area__title">
                                                <p class="mb-0 fs-14 fw-500 color-dark text-capitalize">Froiden Technologies Private Ltd</p>
                                                <span class="color-light fs-12 d-flex ">2hrs ago</span>
                                                <div class="d-flex text-capitalize">
                                                    <a href="#" class="fs-12 fw-500 color-primary "></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="files-area__right">
                                            <a href="javascript:void(0)" class="btn btn-icon btn-primary btn-squared" title="edit"><i class="fa fa-edit mr-0"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-20">
                                    <div class="files-area d-flex justify-content-between align-items-center">
                                        <div class="files-area__left d-flex align-items-center">
                                            <div class="files-area__img">
                                                <img src="img/hrm-logo-full.png" alt="img" class="wh-42">
                                            </div>
                                            <div class="files-area__title">
                                                <p class="mb-0 fs-14 fw-500 color-dark text-capitalize">Froiden Technologies Private Ltd</p>
                                                <span class="color-light fs-12 d-flex ">2hrs ago</span>
                                                <div class="d-flex text-capitalize">
                                                    <a href="#" class="fs-12 fw-500 color-primary "></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="files-area__right">
                                            <a href="javascript:void(0)" class="btn btn-icon btn-primary btn-squared" title="edit"><i class="fa fa-edit mr-0"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-20">
                                    <div class="files-area d-flex justify-content-between align-items-center">
                                        <div class="files-area__left d-flex align-items-center">
                                            <div class="files-area__img">
                                                <img src="img/hrm-logo-full.png" alt="img" class="wh-42">
                                            </div>
                                            <div class="files-area__title">
                                                <p class="mb-0 fs-14 fw-500 color-dark text-capitalize">Froiden Technologies Private Ltd</p>
                                                <span class="color-light fs-12 d-flex ">2hrs ago</span>
                                                <div class="d-flex text-capitalize">
                                                    <a href="#" class="fs-12 fw-500 color-primary "></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="files-area__right">
                                            <a href="javascript:void(0)" class="btn btn-icon btn-primary btn-squared" title="edit"><i class="fa fa-edit mr-0"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-20">
                                    <div class="files-area d-flex justify-content-between align-items-center">
                                        <div class="files-area__left d-flex align-items-center">
                                            <div class="files-area__img">
                                                <img src="img/hrm-logo-full.png" alt="img" class="wh-42">
                                            </div>
                                            <div class="files-area__title">
                                                <p class="mb-0 fs-14 fw-500 color-dark text-capitalize">Froiden Technologies Private Ltd</p>
                                                <span class="color-light fs-12 d-flex ">2hrs ago</span>
                                                <div class="d-flex text-capitalize">
                                                    <a href="#" class="fs-12 fw-500 color-primary "></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="files-area__right">
                                            <a href="javascript:void(0)" class="btn btn-icon btn-primary btn-squared" title="edit"><i class="fa fa-edit mr-0"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-20">
                                    <div class="files-area d-flex justify-content-between align-items-center">
                                        <div class="files-area__left d-flex align-items-center">
                                            <div class="files-area__img">
                                                <img src="img/hrm-logo-full.png" alt="img" class="wh-42">
                                            </div>
                                            <div class="files-area__title">
                                                <p class="mb-0 fs-14 fw-500 color-dark text-capitalize">Froiden Technologies Private Ltd</p>
                                                <span class="color-light fs-12 d-flex ">2hrs ago</span>
                                                <div class="d-flex text-capitalize">
                                                    <a href="#" class="fs-12 fw-500 color-primary "></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="files-area__right">
                                            <a href="javascript:void(0)" class="btn btn-icon btn-primary btn-squared" title="edit"><i class="fa fa-edit mr-0"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-7 col-sm-12 mb-30">
                        <div class="card">
                            <div class="card-header">
                                <h5>Companies Register</h5>
                            </div>
                            <div class="card-body pt-0">
                                <div class="tab-content">
                                    <div class="tab-pane fade" id="tl_revenue-week" role="tabpanel" aria-labelledby="tl_revenue-week-tab">
                                        <div class="revenue-labels">
                                            <div>
                                                <strong class="text-primary">$72,848</strong>
                                                <span>Current Period</span>
                                            </div>
                                            <div>
                                                <strong>$52,458</strong>
                                                <span>Previous Period</span>
                                            </div>
                                        </div>
                                        
                                        <div class="wp-chart">
                                            <div class="parentContainer">


                                                <div>
                                                    <canvas id="myChart6W"></canvas>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tl_revenue-month" role="tabpanel" aria-labelledby="tl_revenue-month-tab">
                                        <div class="revenue-labels">
                                            <div>
                                                <strong class="text-primary">$72,848</strong>
                                                <span>Current Period</span>
                                            </div>
                                            <div>
                                                <strong>$52,458</strong>
                                                <span>Previous Period</span>
                                            </div>
                                        </div>
                                       
                                        <div class="wp-chart">
                                            <div class="parentContainer">


                                                <div>
                                                    <canvas id="myChart6M"></canvas>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade active show" id="tl_revenue-year" role="tabpanel" aria-labelledby="tl_revenue-year-tab">
                                        <div class="revenue-labels">
                                            <div>
                                                <strong class="text-primary">848</strong>
                                                <span>Current Period</span>
                                            </div>
                                            <div>
                                                <strong>458</strong>
                                                <span>Previous Period</span>
                                            </div>
                                        </div>
                                       
                                        <div class="wp-chart">
                                            <div class="parentContainer">


                                                <div>
                                                    <canvas id="myChart6"></canvas>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-6 col-lg-12 col-md-12 mb-25">

                        <div class="card broder-0">
                            <div class="card-header">
                                <h6>
                                    Total Revenue
                                    <span>Nov 23, 2019 - Nov 29, 2021</span>
                                </h6>
                                <div class="card-extra">
                                    <ul class="card-tab-links mr-3 nav-tabs nav" role="tablist">
                                        <li>
                                            <a href="#t_revenue-week" data-toggle="tab" id="t_revenue-week-tab" role="tab" aria-selected="true">Week</a>
                                        </li>
                                        <li>
                                            <a href="#t_revenue-month" data-toggle="tab" id="t_revenue-month-tab" role="tab" aria-selected="false">Month</a>
                                        </li>
                                        <li>
                                            <a class="active" href="#t_revenue-year" data-toggle="tab" id="t_revenue-year-tab" role="tab" aria-selected="false">Year</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                           
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade" id="t_revenue-week" role="tabpanel" aria-labelledby="t_revenue-week-tab">
                                        <div class="cashflow-display d-flex">
                                            <div class="cashflow-display__single">
                                                <span class="cashflow-display__title">Current Balance</span>
                                                <h2 class="cashflow-display__amount color-primary">$2,784</h2>
                                            </div>
                                            
                                            <div class="cashflow-display__single">
                                                <span class="cashflow-display__title">Cash in</span>
                                                <h2 class="cashflow-display__amount">$4,240</h2>
                                            </div>
                                            
                                            <div class="cashflow-display__single">
                                                <span class="cashflow-display__title">Cash out</span>
                                                <h2 class="cashflow-display__amount">$2,470</h2>
                                            </div>
                                          
                                        </div>

                                        <div class="cashflow-chart">
                                            <div class="parentContainer">


                                                <div>
                                                    <canvas id="barChartCashflow_W"></canvas>
                                                </div>


                                            </div>
                                            <ul class="legend-static">
                                                <li class="custom-label">
                                                    <span style="background-color: rgb(95, 99, 242);"></span>Cash in
                                                </li>
                                                <li class="custom-label">
                                                    <span style="background-color: rgb(255, 77, 79);"></span>Cash out
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="t_revenue-month" role="tabpanel" aria-labelledby="t_revenue-month-tab">
                                        <div class="cashflow-display d-flex">
                                            <div class="cashflow-display__single">
                                                <span class="cashflow-display__title">Current Balance</span>
                                                <h2 class="cashflow-display__amount color-primary">$52,784</h2>
                                            </div>
                                           
                                            <div class="cashflow-display__single">
                                                <span class="cashflow-display__title">Cash in</span>
                                                <h2 class="cashflow-display__amount">$74,240</h2>
                                            </div>
                                           
                                            <div class="cashflow-display__single">
                                                <span class="cashflow-display__title">Cash out</span>
                                                <h2 class="cashflow-display__amount">$22,470</h2>
                                            </div>
                                           
                                        </div>

                                        <div class="cashflow-chart">
                                            <div class="parentContainer">


                                                <div>
                                                    <canvas id="barChartCashflow_M"></canvas>
                                                </div>


                                            </div>
                                            <ul class="legend-static">
                                                <li class="custom-label">
                                                    <span style="background-color: rgb(95, 99, 242);"></span>Cash in
                                                </li>
                                                <li class="custom-label">
                                                    <span style="background-color: rgb(255, 77, 79);"></span>Cash out
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade active show" id="t_revenue-year" role="tabpanel" aria-labelledby="t_revenue-year-tab">
                                        <div class="cashflow-display d-flex">
                                            <div class="cashflow-display__single">
                                                <span class="cashflow-display__title">Current Balance</span>
                                                <h2 class="cashflow-display__amount color-primary">$92,784</h2>
                                            </div>
                                           
                                            <div class="cashflow-display__single">
                                                <span class="cashflow-display__title">Cash in</span>
                                                <h2 class="cashflow-display__amount">$104,240</h2>
                                            </div>
                                           
                                            <div class="cashflow-display__single">
                                                <span class="cashflow-display__title">Cash out</span>
                                                <h2 class="cashflow-display__amount">$872,470</h2>
                                            </div>
                                            
                                        </div>

                                        <div class="cashflow-chart">
                                            <div class="parentContainer">


                                                <div>
                                                    <canvas id="barChartCashflow"></canvas>
                                                </div>


                                            </div>
                                            <ul class="legend-static">
                                                <li class="custom-label">
                                                    <span style="background-color: rgb(95, 99, 242);"></span>Cash in
                                                </li>
                                                <li class="custom-label">
                                                    <span style="background-color: rgb(255, 77, 79);"></span>Cash out
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>

                    </div>
                    <div class="col-xxl-6 col-lg-12 col-md-12 mb-25">

                        <div class="card border-0">
                            <div class="card-header">
                                <h6>Table Structure</h6>
                                <div class="card-extra">
                                    <div class="card-tab btn-group atbd-button-group mr-3 nav nav-tabs">
                                        <a class="btn btn-xs btn-white active border" id="f_today-tab" data-toggle="tab" href="#st_matrics-today" role="tab" area-controls="st_matrics" aria-selected="true">Today</a>
                                        <a class="btn btn-xs btn-white border" id="f_week-tab" data-toggle="tab" href="#st_matrics-week" role="tab" area-controls="st_matrics" aria-selected="false">Week</a>
                                        <a class="btn btn-xs btn-white border" id="f_month-tab" data-toggle="tab" href="#st_matrics-month" role="tab" area-controls="st_matrics" aria-selected="false">Month</a>
                                        <a class="btn btn-xs btn-white border" id="f_year-tab" data-toggle="tab" href="#st_matrics-year" role="tab" area-controls="st_matrics" aria-selected="false">Year</a>
                                    </div>
                                    <div class="dropdown dropleft">
                                        <a href="#" role="button" id="Today" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span data-feather="more-horizontal"></span>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="Today">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="st_matrics-today" role="" aria-labelledby="st_matrics-tab">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-social">
                                                <thead>
                                                    <tr>
                                                        <th scope="col"></th>
                                                        <th scope="col" colspan="3">Acquisition</th>
                                                        <th scope="col" colspan="3">Behavior</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Social Network</td>
                                                        <td>Users</td>
                                                        <td>New Users</td>
                                                        <td>Sessions</td>
                                                        <td>Bounce Rate</td>
                                                        <td>Pages / Sessions</td>
                                                        <td>Avg. Session Duration</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="">Facebook</a>
                                                        </td>
                                                        <td>1,458</td>
                                                        <td>452</td>
                                                        <td>9,235</td>
                                                        <td>25%</td>
                                                        <td>3.9</td>
                                                        <td>00:05:16</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="">Twitter</a>
                                                        </td>
                                                        <td>4,785</td>
                                                        <td>426</td>
                                                        <td>8,156</td>
                                                        <td>-26%</td>
                                                        <td>1.5</td>
                                                        <td>00:05:16</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="">Linkedin</a>
                                                        </td>
                                                        <td>3,416</td>
                                                        <td>951</td>
                                                        <td>6,124</td>
                                                        <td>56%</td>
                                                        <td>5.3</td>
                                                        <td>00:05:16</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="">Youtube</a>
                                                        </td>
                                                        <td>5,426</td>
                                                        <td>753</td>
                                                        <td>9,147</td>
                                                        <td>15%</td>
                                                        <td>7.5</td>
                                                        <td>00:05:16</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="">Instagram</a>
                                                        </td>
                                                        <td>6,258</td>
                                                        <td>852</td>
                                                        <td>4,369</td>
                                                        <td>75%</td>
                                                        <td>2.7</td>
                                                        <td>00:05:16</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="">Google+</a>
                                                        </td>
                                                        <td>9,632</td>
                                                        <td>123</td>
                                                        <td>1,256</td>
                                                        <td>46%</td>
                                                        <td>2.6</td>
                                                        <td>00:05:16</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="st_matrics-week" role="tabpanel" aria-labelledby="st_matrics-tab">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-social">
                                                <thead>
                                                    <tr>
                                                        <th scope="col"></th>
                                                        <th scope="col" colspan="3">Acquisition</th>
                                                        <th scope="col" colspan="3">Behavior</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Social Network</td>
                                                        <td>Users</td>
                                                        <td>New Users</td>
                                                        <td>Sessions</td>
                                                        <td>Bounce Rate</td>
                                                        <td>Pages / Sessions</td>
                                                        <td>Avg. Session Duration</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="">Facebook</a>
                                                        </td>
                                                        <td>1,558</td>
                                                        <td>452</td>
                                                        <td>9,235</td>
                                                        <td>27%</td>
                                                        <td>6.9</td>
                                                        <td>00:06:16</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="">Twitter</a>
                                                        </td>
                                                        <td>4,585</td>
                                                        <td>426</td>
                                                        <td>8,856</td>
                                                        <td>-26%</td>
                                                        <td>1.5</td>
                                                        <td>00:03:16</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="">Linkedin</a>
                                                        </td>
                                                        <td>3,416</td>
                                                        <td>951</td>
                                                        <td>6,124</td>
                                                        <td>56%</td>
                                                        <td>5.3</td>
                                                        <td>00:05:16</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="">Youtube</a>
                                                        </td>
                                                        <td>5,426</td>
                                                        <td>553</td>
                                                        <td>4,647</td>
                                                        <td>20%</td>
                                                        <td>8.5</td>
                                                        <td>00:05:16</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="">Instagram</a>
                                                        </td>
                                                        <td>62,258</td>
                                                        <td>452</td>
                                                        <td>4,669</td>
                                                        <td>55%</td>
                                                        <td>1.7</td>
                                                        <td>00:05:16</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="">Google+</a>
                                                        </td>
                                                        <td>6,632</td>
                                                        <td>113</td>
                                                        <td>1,956</td>
                                                        <td>56%</td>
                                                        <td>5.6</td>
                                                        <td>00:06:16</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="st_matrics-month" role="tabpanel" aria-labelledby="st_matrics-tab">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-social">
                                                <thead>
                                                    <tr>
                                                        <th scope="col"></th>
                                                        <th scope="col" colspan="3">Acquisition</th>
                                                        <th scope="col" colspan="3">Behavior</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Social Network</td>
                                                        <td>Users</td>
                                                        <td>New Users</td>
                                                        <td>Sessions</td>
                                                        <td>Bounce Rate</td>
                                                        <td>Pages / Sessions</td>
                                                        <td>Avg. Session Duration</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="">Facebook</a>
                                                        </td>
                                                        <td>1,258</td>
                                                        <td>452</td>
                                                        <td>9,235</td>
                                                        <td>25%</td>
                                                        <td>3.5</td>
                                                        <td>00:05:16</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="">Twitter</a>
                                                        </td>
                                                        <td>4,785</td>
                                                        <td>423</td>
                                                        <td>8,156</td>
                                                        <td>-26%</td>
                                                        <td>1.5</td>
                                                        <td>00:05:16</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="">Linkedin</a>
                                                        </td>
                                                        <td>3,416</td>
                                                        <td>956</td>
                                                        <td>6,124</td>
                                                        <td>46%</td>
                                                        <td>5.3</td>
                                                        <td>00:05:16</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="">Youtube</a>
                                                        </td>
                                                        <td>5,426</td>
                                                        <td>753</td>
                                                        <td>9,147</td>
                                                        <td>15%</td>
                                                        <td>7.5</td>
                                                        <td>00:05:16</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="">Instagram</a>
                                                        </td>
                                                        <td>6,258</td>
                                                        <td>852</td>
                                                        <td>4,369</td>
                                                        <td>75%</td>
                                                        <td>2.7</td>
                                                        <td>00:05:16</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="">Google+</a>
                                                        </td>
                                                        <td>9,632</td>
                                                        <td>123</td>
                                                        <td>1,656</td>
                                                        <td>36%</td>
                                                        <td>2.8</td>
                                                        <td>00:05:16</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="st_matrics-year" role="tabpanel" aria-labelledby="st_matrics-tab">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-social">
                                                <thead>
                                                    <tr>
                                                        <th scope="col"></th>
                                                        <th scope="col" colspan="3">Acquisition</th>
                                                        <th scope="col" colspan="3">Behavior</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Social Network</td>
                                                        <td>Users</td>
                                                        <td>New Users</td>
                                                        <td>Sessions</td>
                                                        <td>Bounce Rate</td>
                                                        <td>Pages / Sessions</td>
                                                        <td>Avg. Session Duration</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="">Facebook</a>
                                                        </td>
                                                        <td>1,458</td>
                                                        <td>452</td>
                                                        <td>9,245</td>
                                                        <td>35%</td>
                                                        <td>5.9</td>
                                                        <td>00:08:16</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="">Twitter</a>
                                                        </td>
                                                        <td>4,285</td>
                                                        <td>424</td>
                                                        <td>8,356</td>
                                                        <td>-25%</td>
                                                        <td>1.5</td>
                                                        <td>00:05:16</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="">Linkedin</a>
                                                        </td>
                                                        <td>3,416</td>
                                                        <td>951</td>
                                                        <td>6,124</td>
                                                        <td>56%</td>
                                                        <td>5.3</td>
                                                        <td>00:05:16</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="">Youtube</a>
                                                        </td>
                                                        <td>5,426</td>
                                                        <td>753</td>
                                                        <td>9,147</td>
                                                        <td>15%</td>
                                                        <td>7.5</td>
                                                        <td>00:05:16</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="">Instagram</a>
                                                        </td>
                                                        <td>6,258</td>
                                                        <td>852</td>
                                                        <td>4,369</td>
                                                        <td>75%</td>
                                                        <td>2.7</td>
                                                        <td>00:05:16</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="">Google+</a>
                                                        </td>
                                                        <td>9,632</td>
                                                        <td>123</td>
                                                        <td>1,256</td>
                                                        <td>46%</td>
                                                        <td>2.6</td>
                                                        <td>00:05:16</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>-->
            </div>
 <?php include('include/footer.php'); ?>       