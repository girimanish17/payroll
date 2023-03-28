<?php include('include/header.php'); ?>  

        <div class="contents demo-card expanded">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 py-4">
                        <div class=" alert alert-success  alert-dismissible fade show " role="alert">
                            <div class="alert-content">
                                <p>You have latest version of this app.</p>
                                <button type="button" class="close text-capitalize" data-dismiss="alert" aria-label="Close">
                                <span class="fa fa-window-close"></span>    
                                </button>

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
                                <h5>System Details</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <th scope="col">System Details</th>
                                            </tr>
                                            <tr>
                                                <td class="d-flex justify-content-between"><span>App Version </span> <span class="pull-right">4.2.1
                                    </span></td>
                                            </tr>
                                            <tr>
                                                <td class="d-flex justify-content-between"><span>Laravel Version </span> <span class="pull-right">7.30.4</span></td>
                                            </tr>
                                            <tr>
                                                <td class="d-flex justify-content-between"><span>PHP Version</span>
                                                    <span class="pull-right">7.4.30 <i class="fa fa fa-check-circle text-success"></i></span>
                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
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
                    <p>Are you sure .You want to <strong>delete</strong>?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger btn-sm">Delete</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-basic modal fade show" id="Add_NewLanguage" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content modal-bg-white ">
                <div class="modal-header">
                    <h6 class="modal-title">Add New Language</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span data-feather="x"></span></button>
                </div>
                <div class="modal-body">
                    <div class="horizontal-form">
                        <form action="#">
                            <div class="form-group row">
                                <div class="col-sm-3 d-flex aling-items-center">
                                    <label class=" col-form-label align-center">Locale:<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" placeholder="Enter Locale" value="Basic">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3 d-flex aling-items-center">
                                    <label class=" col-form-label align-center">Language:<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" placeholder="Enter Language" value="hrm_basic_plan_monthly">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3 d-flex aling-items-center">
                                    <label class=" col-form-label align-center">Status: <span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-9">
                                    <div class="custom-radio form-check-inline mt-2">
                                        <input class="radio" type="radio" name="radio-default" value=0 id="radio-un11">
                                        <label for="radio-un11">
                                                <span class="radio-text">Active</span>
                                            </label>
                                    </div>


                                    <div class="custom-radio form-check-inline mt-2">
                                        <input class="radio" type="radio" name="radio-default" value=0 id="radio-un22" checked>
                                        <label for="radio-un22">
                                                <span class="radio-text">In-Active</span>
                                            </label>
                                    </div>
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
    <div class="modal-basic modal fade show" id="Edit_NewLanguage" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content modal-bg-white ">
                <div class="modal-header">
                    <h6 class="modal-title">Edit Language</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span data-feather="x"></span></button>
                </div>
                <div class="modal-body">
                    <div class="horizontal-form">
                        <form action="#">
                            <div class="form-group row">
                                <div class="col-sm-3 d-flex aling-items-center">
                                    <label class=" col-form-label align-center">Locale:<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" placeholder="Enter Locale" value="ABC">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3 d-flex aling-items-center">
                                    <label class=" col-form-label align-center">Language:<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control ih-medium ip-light radius-xs b-light px-15" placeholder="Enter Language" value="Portuguese">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3 d-flex aling-items-center">
                                    <label class=" col-form-label align-center">Status: <span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-9">
                                    <div class="custom-radio form-check-inline mt-2">
                                        <input class="radio" type="radio" name="radio-default" value=0 id="radio-un11">
                                        <label for="radio-un11">
                                                <span class="radio-text">Active</span>
                                            </label>
                                    </div>


                                    <div class="custom-radio form-check-inline mt-2">
                                        <input class="radio" type="radio" name="radio-default" value=0 id="radio-un22" checked>
                                        <label for="radio-un22">
                                                <span class="radio-text">In-Active</span>
                                            </label>
                                    </div>
                                </div>
                            </div>

                            <div class="layout-button mt-25 d-flex justify-content-center">
                                <button type="button" class="btn btn-primary btn-sm btn-default btn-squared px-30"><i class="la la-check"></i>Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>


    <script>
        imgInp.onchange = evt => {
            const [file] = imgInp.files
            if (file) {
                blah.src = URL.createObjectURL(file)
            }
        }
    </script>
<?php include('include/footer.php'); ?>       