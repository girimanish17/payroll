<?php include('include/header.php'); ?>  

        <div class="contents demo-card expanded">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card my-4">
                            <div class="card-body">
                                <ul class="atbd-breadcrumb nav">
                                    <li class="atbd-breadcrumb__item">
                                        <a href="#"> Home </a>
                                        <span class="breadcrumb__seperator">
                                            <span class="la la-slash"></span>
                                        </span>
                                    </li>
                                    <li class="atbd-breadcrumb__item">
                                        <span>Features</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-30">
                            <div class="card-header">
                                <h5>Features List</h5>
                                <div class="card-extra">
                                    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#Add_NewFeatures">+ Add New Features</button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered subscription-plans-list">
                                        <thead>
                                            <tr>
                                                <th scope="col">Sr No.</th>
                                                <th scope="col">Title</th>
                                                <th scope="col"> Description</th>
                                                <th scope="col"> Image</th>
                                                <th scope="col" width="125">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Comprehensive Employee Dashboard</td>
                                                <td>
                                                    <p>
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                                                        survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                                    </p>
                                                </td>
                                                <td>
                                                    <img src="img/employee.jpg" class="img-fluid" />
                                                </td>
                                                <td>
                                                    <div class="atbd-button-list d-flex flex-wrap">
                                                        <button class="btn btn-icon btn-primary btn-squared" title="Edit" data-toggle="modal" data-target="#Edit_Features"><i class="la la-edit mr-0"></i></button>
                                                        <button class="btn btn-icon btn-danger btn-squared" title="Delete" data-toggle="modal" data-target="#modal-delete"><i class="la la-trash mr-0"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <nav class="atbd-page d-flex justify-content-between ">

                                    <div class="paging-option">
                                        <select name="page-number" class="page-selection form-control px-15">
                                            <option value="20">20/page</option>
                                            <option value="40">40/page</option>
                                            <option value="60">60/page</option>
                                        </select>
                                    </div>
                                    <ul class="atbd-pagination d-flex">
                                        <li class="atbd-pagination__item">
                                            <a href="#" class="atbd-pagination__link pagination-control"><span class="la la-angle-left"></span></a>
                                            <a href="#" class="atbd-pagination__link"><span class="page-number">1</span></a>
                                            <a href="#" class="atbd-pagination__link active"><span class="page-number">2</span></a>
                                            <a href="#" class="atbd-pagination__link"><span class="page-number">3</span></a>
                                            <a href="#" class="atbd-pagination__link pagination-control"><span class="page-number">...</span></a>
                                            <a href="#" class="atbd-pagination__link"><span class="page-number">12</span></a>
                                            <a href="#" class="atbd-pagination__link pagination-control"><span class="la la-angle-right"></span></a>
                                            <a href="#" class="atbd-pagination__option">
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
    <div class="modal-basic modal fade show" id="Add_NewFeatures" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content modal-bg-white ">
                <div class="modal-header">
                    <h6 class="modal-title">Add Features</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span data-feather="x"></span></button>
                </div>
                <div class="modal-body">
                    <div class="horizontal-form">
                        <form action="#">
                            <div class="form-group row">
                                <div class="col-sm-2 d-flex aling-items-center">
                                    <label class=" col-form-label align-center">Image:<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-10">
                                    <div class="upload-img-box">
                                        <img id="output" src="img/download.png" /></div>
                                    <div class="atbd-upload">
                                        <div class="atbd-upload-avatar media-import dropzone-md-s">
                                            <p class="color-light mt-0 fs-14">Change Image</p>
                                        </div>
                                        <div class="avatar-up">
                                            <input type="file" accept="image/*" onchange="loadFile(event)" name="upload-avatar-input"  class="upload-avatar-input">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 d-flex aling-items-center">
                                    <label class=" col-form-label align-center">Title:<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" placeholder="Enter " value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 d-flex aling-items-center">
                                    <label class=" col-form-label align-center">Description:<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="layout-button mt-25 d-flex justify-content-center">
                                <button type="button" class="btn btn-primary btn-sm btn-default btn-squared px-30">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div class="modal-basic modal fade show" id="Edit_Features" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content modal-bg-white ">
                <div class="modal-header">
                    <h6 class="modal-title">Edit Features</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span data-feather="x"></span></button>
                </div>
                <div class="modal-body">
                    <div class="horizontal-form">
                        <form action="#">
                            <div class="form-group row">
                                <div class="col-sm-2 d-flex aling-items-center">
                                    <label class=" col-form-label align-center">Image:<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-10">
                                    <div class="upload-img-box">
                                        <img id="output" src="img/employee.jpg" /></div>
                                    <div class="atbd-upload">
                                        <div class="atbd-upload-avatar media-import dropzone-md-s">
                                            <p class="color-light mt-0 fs-14">Change Image</p>
                                        </div>
                                        <div class="avatar-up">
                                            <input type="file" accept="image/*" onchange="loadFile(event)" name="upload-avatar-input" class="upload-avatar-input">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 d-flex aling-items-center">
                                    <label class=" col-form-label align-center">Title:<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" placeholder="Enter " value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2 d-flex aling-items-center">
                                    <label class=" col-form-label align-center">Description:<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="layout-button mt-25 d-flex justify-content-center">
                                <button type="button" class="btn btn-primary btn-sm btn-default btn-squared px-30">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div class="modal-basic modal fade show" id="modal-delete" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title">Confirmation</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span data-feather="x"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure .You want to <strong>delete</strong> this Features ?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger btn-sm">Delete</button>
                </div>
            </div>
        </div>
    </div>

    
    <script>
        var loadFile = function(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('output');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        };
    </script>
<?php include('include/footer.php'); ?>       