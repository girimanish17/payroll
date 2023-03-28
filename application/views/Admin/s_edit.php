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
                                <h5>Settings/ Edit</h5>
                            </div>
                            <div class="card-body">
                                <div class="row justify-content-center">
                                    <div class="col-xl-7 col-sm-9 col-10">
                                        <div class="horizontal-form border p-4">
                                            <form action="<?php echo base_url(); ?>superadmin/editGeneralSettings" method="post" id="faqForm" enctype="multipart/form-data">
                                                <div class="form-group row mb-25">
                                                    <div class="col-sm-3 d-flex aling-items-center">
                                                        <label class=" col-form-label color-dark fs-14 fw-500 align-center">Company
                                                            Logo</label>
                                                    </div>
													<?php echo $this->session->flashdata('msg');
													   if(isset($_SESSION['msg'])){
														unset($_SESSION['msg']);
														}
													  ?>
                                                    <div class="col-sm-9">
                                                        <div class="upload-img-box">
                                                            <img id="output" src="<?php echo base_url('assets/images/company/').$general_settings['logo']?>" alt="Select Logo" style="height: 170px;width: 222px;"/>
                                                        </div>
                                                        <div class="atbd-upload">
                                                            <div class="atbd-upload-avatar media-import dropzone-md-s">
                                                                <p class="color-light mt-0 fs-14">Change Image</p>
                                                            </div>
                                                            <div class="avatar-up">
                                                                <input type="file" accept="image/*" onchange="loadFile(event)" name="image" class="upload-avatar-input">
                                                                <span class="label text-white bg-danger p-2">
                                                                    NOTE!</span> Image Size must be height 40px
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-25">
                                                    <div class="col-sm-3 d-flex aling-items-center">
                                                        <label class="col-form-label color-dark fs-14 fw-500 align-center">Application
                                                            Name: <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="app_name" value="<?php echo $general_settings['app_name'];?>" class="form-control  ih-medium ip-gray radius-xs b-light px-15" placeholder="HRM SAAS">
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-0">
                                                    <div class="col-sm-3">
                                                        <label class=" col-form-label  color-dark fs-14 fw-500 align-center">Company
                                                            Address: </label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <textarea class="form-control" name="comp_address" rows="3" placeholder="1st Floor, Vipul Plaza, Suncity, Sector 54, Gurugram, Haryana 122011"><?php echo $general_settings['comp_address'];?></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-25">
                                                    <div class="col-sm-3 d-flex aling-items-center">
                                                        <label class="col-form-label color-dark fs-14 fw-500 align-center">Phone:
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="tel" name="phone" value="<?php echo $general_settings['phone'];?>" class="form-control  ih-medium ip-gray radius-xs b-light px-15" placeholder="+1554398242811">
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-25">
                                                    <div class="col-sm-3 d-flex aling-items-center">
                                                        <label class="col-form-label color-dark fs-14 fw-500 align-center">Email
                                                            Id: <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="email" name="email" value="<?php echo $general_settings['email'];?>" class="form-control  ih-medium ip-gray radius-xs b-light px-15" placeholder="admin@example.com">
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-25">
                                                    <div class="col-sm-3 d-flex aling-items-center">
                                                        <label class="col-form-label color-dark fs-14 fw-500 align-center">Name:
                                                            <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="name" value="<?php echo $general_settings['name'];?>" class="form-control  ih-medium ip-gray radius-xs b-light px-15" placeholder="Administrator">
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-25">
                                                    <div class="col-sm-3 d-flex aling-items-center">
                                                        <label class="col-form-label color-dark fs-14 fw-500 align-center">Currency:</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="select-style2">
                                                            <div class="atbd-select ">
                                                                <select name="currency_id"  id="select-option2" class="form-control ">
																<?php foreach ($currency as $key => $value) {?>currency_id
																	<option value="<?php echo $value['id'];?>" <?php if($value['id'] == $general_settings['currency_id']){ echo "selected"; }?>><?php echo $value['code']; ?>(<?php echo $value['symbol']; ?>)</option>
																<?php } ?>
                                                                    <!--<option value=":">()</option>
                                                                    <option value="AED:AED" selected>AED (AED) </option>
                                                                    <option value="؋:AFN">AFN (؋) </option>-->
                                                                </select>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-25">
                                                    <div class="col-sm-3 d-flex aling-items-center">
                                                        <label class="col-form-label color-dark fs-14 fw-500 align-center">Language:</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="mb-25 select-style2">

                                                            <div class="atbd-select ">

                                                                <select name="lang_id" id="select-alerts2" class="form-control ">
																<?php foreach ($languages as $key => $val) {?>
																	<option value="<?php echo $val['id'];?>" <?php if($val['id'] == $general_settings['lang_id']){ echo "selected"; }?>><?php echo $val['name']; ?></option>
																<?php } ?>
                                                                    <!--<option value="01">US English</option>
                                                                    <option value="02">Spanish</option>
                                                                    <option value="03">French</option>
                                                                    <option value="04">Portuguese</option>-->
                                                                </select>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-25">
                                                    <div class="col-sm-3">
                                                        <label class=" col-form-label  color-dark fs-14 fw-500 align-center">App
                                                            Update: <i class="fa fa-question text-danger"
                                                                title="Enable/Disable app update setting"></i></label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="custom-radio form-check-inline mt-2">
                                                            <input class="radio" type="radio" name="radio_default" value="1" <?php if($general_settings['app_update']==1){ echo "checked"; }?> id="radio-un2">
                                                            <label for="radio-un2">
                                                                <span class="radio-text">YES</span>
                                                            </label>
                                                        </div>


                                                        <div class="custom-radio form-check-inline mt-2">
                                                            <input class="radio" type="radio" name="radio_default" value="0" <?php if($general_settings['app_update']==0){ echo "checked"; }?> id="radio-un4" >
                                                            <label for="radio-un4">
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