<?php include('include/header.php'); ?>  
        <div class="contents demo-card expanded">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card my-4">
                            <div class="card-body">
                                <ul class="atbd-breadcrumb nav">
                                    <li class="atbd-breadcrumb__item">
                                        <a href="<?php echo base_url();?>"> Home </a>
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
                                        <span>Stripe Details</span>
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
						<?php echo $this->session->flashdata('msg');
								if(isset($_SESSION['msg'])){
								unset($_SESSION['msg']);
							}
						  ?>
                            <div class="card-body">
                                <div class="row justify-content-center">
                                    <div class="col-xl-7 col-sm-9 col-10">
                                        <div class="horizontal-form border p-4">
                                            <form action="<?php echo base_url(); ?>superadmin/edit_payment_settings" method="post" id="faqForm" enctype="multipart/form-data">
                                                <div class="form-group row mb-25">
                                                    <div class="col-sm-12 d-flex aling-items-center border-bottom mb-25">
                                                        <h5 class="pb-3 fw-500">Add stripe details</h5><br>
														
                                                    </div>
                                                    <div class="col-sm-3 d-flex aling-items-center">
                                                        <label class="col-form-label color-dark fs-14 fw-500 align-center">Publishable key: <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="publishable_key" value="<?php echo $payment_settings['publishable_key'];?>" class="form-control  ih-medium ip-gray radius-xs b-light px-15" placeholder="Stripe  Key">
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-25">
                                                    <div class="col-sm-3">
                                                        <label class=" col-form-label  color-dark fs-14 fw-500 align-center">Stripe Secret:<span class="text-danger">*</span> </label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="stripe_secret" value="<?php echo $payment_settings['stripe_secret'];?>" class="form-control  ih-medium ip-gray radius-xs b-light px-15" placeholder="Stripe Secret">
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-25">
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label color-dark fs-14 fw-500 align-center">Stripe Webhook Secret:<span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="stripe_webhook_secret" value="<?php echo $payment_settings['stripe_webhook_secret'];?>" class="form-control  ih-medium ip-gray radius-xs b-light px-15" placeholder="Stripe webhook secret">
                                                        <ul class="list">
                                                            <li>Visit Generate Add end point as https://hrm-saas.froid.works/save-invoices and enter the webhook key generated</li>
                                                            <li>Select event invoice.payment_failed and invoice.payment_succeeded while creating webhook.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-25">
                                                    <div class="col-sm-3 d-flex aling-items-center">
                                                        <label class="col-form-label color-dark fs-14 fw-500 align-center">Stripe Status: </label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="custom-radio form-check-inline mt-2">
                                                            <input class="radio" type="radio" name="radio_default" value="1" id="radio-un2" <?php if($payment_settings['stripe_status'] == '1'){ echo "checked"; }?>>
                                                            <label for="radio-un2">
                                                                <span class="radio-text">YES</span>
                                                            </label>
                                                        </div>
                                                        <div class="custom-radio form-check-inline mt-2">
                                                            <input class="radio" type="radio" name="radio_default" value="0" id="radio-un4" <?php if($payment_settings['stripe_status'] == '0'){ echo "checked"; }?>>
                                                            <label for="radio-un4">
                                                                <span class="radio-text">NO</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-25">
                                                    <div class="col-sm-12 d-flex aling-items-center border-bottom">
                                                        <h5 class="pb-3 fw-500">Add Paypal Details</h5>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-25">
                                                    <div class="col-sm-3 d-flex aling-items-center">
                                                        <label class="col-form-label color-dark fs-14 fw-500 align-center">Paypal Client Id:
                                                            <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input name="paypal_client_id" value="<?php echo $payment_settings['paypal_client_id'];?>" type="text" class="form-control  ih-medium ip-gray radius-xs b-light px-15" placeholder="Paypal Key">
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-25">
                                                    <div class="col-sm-3 d-flex aling-items-center">
                                                        <label class="col-form-label color-dark fs-14 fw-500 align-center">Paypal Secret key:
                                                            <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="paypal_secret_key" value="<?php echo $payment_settings['paypal_secret_key'];?>" class="form-control  ih-medium ip-gray radius-xs b-light px-15" placeholder="Paypal Secret">
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-25">
                                                    <div class="col-sm-3 d-flex aling-items-center">
                                                        <label class="col-form-label color-dark fs-14 fw-500 align-center">Select Environment:</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="select-style2">
                                                            <div class="atbd-select ">
                                                                <select name="environment" id="select-option2" class="form-control ">
                                                               
                                                                    <option value="sandbox" <?php if("sandbox" == $payment_settings['environment']){ echo "selected"; }?>>sandbox</option>
                                                                    <option value="Live" <?php if("Live" == $payment_settings['environment']){ echo "selected"; }?>>Live</option>
                                                                </select>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-25">
                                                    <div class="col-sm-3 d-flex aling-items-center">
                                                        <label class="col-form-label color-dark fs-14 fw-500 align-center">Webhook URL:</label>
                                                    </div>
                                                    <div class="col-sm-9">
													<input type="text" readonly name="webhook_URL" class="form-control  ih-medium ip-gray radius-xs b-light px-15" placeholder="https://hrm-saas.froid.works/verify-billing-ipn">
                                                    
                                                        <!--<span>https://hrm-saas.froid.works/verify-billing-ipn</span>-->
                                                        <small class="text-danger">Add this webhook url on your paypal app settings.</small>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-25">
                                                    <div class="col-sm-3">
                                                        <label class=" col-form-label  color-dark fs-14 fw-500 align-center">
                                                            Paypal Status: <span data-toggle="tooltip" data-placement="bottom" title="Enable/Disable paypal payment"><i class="fa fa-question-circle text-danger"></i></span>
                                                           </label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="custom-radio form-check-inline mt-2">
                                                            <input class="radio" type="radio" name="radio_default_p" value="1" id="radio-un22" <?php if($payment_settings['paypal_status'] == 1){ echo "checked"; }?>>
                                                            <label for="radio-un22">
                                                                <span class="radio-text">YES</span>
                                                            </label>
                                                        </div>
                                                        <div class="custom-radio form-check-inline mt-2">
                                                            <input class="radio" type="radio" name="radio_default_p" value="0" id="radio-un44" <?php if($payment_settings['paypal_status'] == 0){ echo "checked"; }?> >
                                                            <label for="radio-un44">
                                                                <span class="radio-text">NO</span>
                                                            </label>
                                                        </div>
                                                        <div class="layout-button mt-25">
                                                            <button type="submit" class="btn btn-primary btn-default btn-squared px-30">Update</button>
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
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
<?php include('include/footer.php'); ?>       