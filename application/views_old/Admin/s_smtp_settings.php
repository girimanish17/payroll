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
                                        <span>Settings</span>
                                        <span class="breadcrumb__seperator">
                                            <span class="la la-slash"></span>
                                        </span>
                                    </li>
                                    <li class="atbd-breadcrumb__item">
                                        <span>SMTP Settings</span>
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
                            <div class="card-body">
                                <div class="row justify-content-center">
                                    <div class="col-xl-7 col-sm-9 col-10">
                                        <div class="horizontal-form border p-4">
                                            <form action="#">
                                                <div class="form-group row mb-25">
                                                    <div class="col-sm-12 d-flex aling-items-center border-bottom">
                                                        <h5 class="pb-3 fw-500">SMTP Settings</h5>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-3 d-flex aling-items-center">
                                                        <label class="col-form-label color-dark fs-14 fw-500 align-center">MAIL DRIVER: </label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="custom-radio form-check-inline mt-2">
                                                            <input class="radio" type="radio" name="radio-default" value="M" id="Mail" checked>
                                                            <label for="Mail">
                                                                <span class="radio-text">Mail</span>
                                                            </label>
                                                        </div>
                                                        <div class="custom-radio form-check-inline mt-2">
                                                            <input class="radio" type="radio" name="radio-default" value="S" id="SMTP">
                                                            <label for="SMTP">
                                                                <span class="radio-text">SMTP</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-25">
                                                    <div class="col-sm-12 d-flex aling-items-center border-bottom">
                                                        <p></p>
                                                    </div>
                                                </div>

                                                <div class="div_entrega_outro border-bottom mb-4">
                                                    <div class="form-group row mb-25">
                                                        <div class="col-sm-3 d-flex aling-items-center">
                                                            <label class="col-form-label color-dark fs-14 fw-500 align-center">Mail Host: </label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control  ih-medium ip-gray radius-xs b-light px-15" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-25">
                                                        <div class="col-sm-3 d-flex aling-items-center">
                                                            <label class="col-form-label color-dark fs-14 fw-500 align-center">Mail Port: </label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control  ih-medium ip-gray radius-xs b-light px-15" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-25">
                                                        <div class="col-sm-3 d-flex aling-items-center">
                                                            <label class="col-form-label color-dark fs-14 fw-500 align-center">Mail Username: </label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control  ih-medium ip-gray radius-xs b-light px-15" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-25">
                                                        <div class="col-sm-3 d-flex aling-items-center">
                                                            <label class="col-form-label color-dark fs-14 fw-500 align-center">Mail Password: </label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <input type="password" class="form-control  ih-medium ip-gray radius-xs b-light px-15" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-25">
                                                        <div class="col-sm-3 d-flex aling-items-center">
                                                            <label class="col-form-label color-dark fs-14 fw-500 align-center">Mail Encryption: </label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <select class="form-control px-15" id="exampleFormControlSelect1">
                                                                <option>None</option>
                                                                <option>TLS</option>
                                                                <option>SSL</option> 
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="" id="MAIL">
                                                    <div class="form-group row mb-25">
                                                        <div class="col-sm-3 d-flex aling-items-center">
                                                            <label class="col-form-label color-dark fs-14 fw-500 align-center">From Name: </label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control  ih-medium ip-gray radius-xs b-light px-15" placeholder="HRM SAAS">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-25">
                                                        <div class="col-sm-3 d-flex aling-items-center">
                                                            <label class="col-form-label color-dark fs-14 fw-500 align-center">From Email:</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <input type="email" class="form-control  ih-medium ip-gray radius-xs b-light px-15" placeholder="admin@example.com">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="form-group row mb-25">
                                                    <div class="col-sm-3">

                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="layout-button mt-25">
                                                            <button type="button" class="btn btn-primary btn-default btn-squared">Update</button>
                                                            <button type="button" class="btn btn-info btn-default btn-squared">Send Test Email</button>
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
            


    <script>
        $('.div_entrega_outro').hide();
        $("input[name='radio-default']").click(function() {
            if ($(this).val() === 'S') {
                $('.div_entrega_outro').show();
            } else {
                $('.div_entrega_outro').hide();
            }
        });
    </script>
    <style>
        .none {
            display: none;
        }
    </style>
<?php include('include/footer.php'); ?>       