<?php include('include/header.php'); ?>

        <div class="contents demo-card expanded">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-default card-md my-4">
                            <div class="card-body">
                                <ul class="atbd-breadcrumb nav">
                                    <li class="atbd-breadcrumb__item">
                                        <a href="<?php echo base_url();?>">
                                            <span class="la la-home"></span>
                                        </a>
                                        <span class="breadcrumb__seperator">
                                            <span class="la la-slash"></span>
                                        </span>
                                    </li>
                                    <li class="atbd-breadcrumb__item">
                                        <span>Apply Leaves</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">

                    <div class="col-xxl-12 col-lg-12 col-md-12 col-sm-12 mb-25">
                        <div class="card mb-25">
                            <div class="card-header border-bottom">
                                <h5>Apply Leave</h5>
                            </div>
                            <div class="card-body">
                                <div class="tab-wrapper">
                                    <div class="atbd-tab tab-horizontal">
                                        <ul class="nav nav-tabs vertical-tabs" role="tablist">

                                            <li class="nav-item">
                                                <a class="nav-link active" id="tab-v-1-tab" data-toggle="tab" href="#tab-v-1" role="tab" aria-controls="tab-v-1" aria-selected="true"> Single Leave Dates</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="tab-v-2-tab" data-toggle="tab" href="#tab-v-2" role="tab" aria-controls="tab-v-2" aria-selected="false"> Multiple
                                                    leave Dates</a>
                                            </li>
											<li class="nav-item">
                                                <a class="nav-link" id="tab-v-3-tab" data-toggle="tab" href="#tab-v-3" role="tab" aria-controls="tab-v-3" aria-selected="false"> CompOff Leave Application</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="tab-v-1" role="tabpanel" aria-labelledby="tab-v-1-tab">
                                                <div class="table4  p-25 bg-white mb-30">
                                                    <div class="table-responsive">
                                                        <form method="post" action="<?php echo base_url('employee/Home/apply_emp_leaves');?>">
														 <?php echo $this->session->flashdata('msg');
														   if(isset($_SESSION['msg'])){
															unset($_SESSION['msg']);
															}
														  ?>
                                                            <table class="table mb-0">
                                                                <thead>
                                                                    <tr class="userDatatable-header">
                                                                        <th>
                                                                            <span class="userDatatable-title">Select
                                                                                Date</span>
                                                                        </th>
                                                                        <th>
                                                                            <span class="userDatatable-title">Leave
                                                                                Types</span>
                                                                        </th>
                                                                        <th>
                                                                            <span class="userDatatable-title">Selected
                                                                                Days</span>
                                                                        </th>
                                                                        <th><span class="userDatatable-title">Reason</span>
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="field_wrapperb2c">

                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-group form-group-calender">
                                                                                <div class="position-relative">
                                                                                    <input type="text" class="form-control  ih-medium ip-light radius-xs b-light px-15" name="ldate[]" id="datepicker8" placeholder="dd-mm-yyyy" required>
                                                                                   <a href="#"><span data-feather="calendar"></span></a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <select class="form-control px-15" id="exampleFormControlSelect1" name="leave_type[]" required>
																				<?php 
																				$compoff = $this->common_model->GetSingleData('compoff_emp_leaves',array('status' =>'Approved','user_id'=>$this->session->userdata('user_id')));
																				if($leave_type){
																					foreach($leave_type as $value){?>
                                                                                    <option value="<?php echo $value['name'];?>"><?php echo $value['name'];?></option>
                                                                                    
																				<?php }} ?>
																				<?php if($compoff){?>
																				   <option value="compoff">Compoff</option>
																				<?php } ?>
                                                                                </select>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="checkbox-theme-default custom-checkbox mt-3">
                                                                                <input class="checkbox" type="checkbox" id="check-un1" onchange="oncheckfun(this)" name="selected_days0"  >
                                                                                <label for="check-un1">
                                                                                    <span class="checkbox-text">Half Day</span>
                                                                                </label>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Reason" name="reason[]" required>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <button class="btn btn-sm btn-primary mt-2" name="add" id="addmorefieldsb2c">+ Add
                                                                                More</button>
                                                                        </td>
																		<input type="hidden" name="type" value="single" >
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <div class="d-flex justify-content-center mt-4">
                                                                <p><input type="submit" class="btn btn-success" value="Submit"></p>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab-v-2" role="tabpanel" aria-labelledby="tab-v-2-tab">
                                                <form method="post" action="<?php echo base_url('employee/Home/apply_emp_leaves');?>" enctype="multipart/form-data">
                                                    <div class="row">
                                                        <div class="col-md-5 mb-25">
                                                            <div class="for-group mb-4">
                                                                <label for="txtDateRange" class="il-gray fs-14 fw-500 align-center">Date
                                                                Range:</label>
                                                                <input type="text" id="txtDateRange" name="txtDateRange" class="inputField shortInputField dateRangeField form-control  ih-medium ip-gray radius-xs b-light" required placeholder="01/10/2021 - 01/15/2021" data-from-field="txtDateFrom" data-to-field="txtDateTo"
                                                                />
                                                                <input type="hidden" id="txtDateFrom" value="" />
                                                                <input type="hidden" id="txtDateTo" value="" />
                                                            </div>
                                                            <!--<div class="form-group mb-4">
                                                                <label for="exampleFormControlSelect2" class="il-gray fs-14 fw-500 align-center">Selected
                                                                    Days</label>
                                                                <select class="form-control px-15" id="exampleFormControlSelect1" name="m_selected_days" required>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                </select>
                                                            </div>-->
															<div class="form-group mb-4">
                                                                <label  class="il-gray fs-14 fw-500 align-center">Selected Days</label>

                                                                <input type="number" class="form-control px-15" min="1" name="m_selected_days" placeholder="Enter Days"/>

                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleFormControlSelect2" class="il-gray fs-14 fw-500 align-center">Leave Types</label>

                                                                <select class="form-control px-15" id="cityOption" name="leave_type" required>
																<?php if($leave_type){foreach($leave_type as $value){?>
                                                                    <option value="<?php echo $value['name'];?>"><?php echo $value['name'];?></option>
															    <?php }} ?>
                                                                </select>

                                                            </div>
															<input type="hidden" name="type" value="multiple" >
                                                        </div>
                                                        <div class="col-md-6 mb-25">
                                                            <div class="form-group">
                                                                <label for="exampleFormControlSelect2" class="il-gray fs-14 fw-500 align-center">Reason</label>
                                                                <textarea class="form-control" rows="8" name="reason"></textarea>
                                                            </div>
                                                            <div class="layout-button mb-4">
															<input type="submit" class="btn btn-primary btn-default btn-squared px-30" value="Submit">
                                                               
                                                            </div>
                                                        </div>
														
                                                    </div>
                                                </form>
                                            </div>
		<!--compoff-->									
											<div class="tab-pane fade" id="tab-v-3" role="tabpanel" aria-labelledby="tab-v-3-tab">
                                                <div class="table4  p-25 bg-white mb-30">
                                                    <div class="table-responsive">
                                                        <form method="post" action="<?php echo base_url('employee/Home/apply_emp_leaves');?>">
														 <?php echo $this->session->flashdata('msg');
														   if(isset($_SESSION['msg'])){
															unset($_SESSION['msg']);
															}
														  ?>
                                                            <table class="table mb-0">
                                                                <thead>
                                                                    <tr class="userDatatable-header">
                                                                        <th>
                                                                            <span class="userDatatable-title">Select
                                                                                Date</span>
                                                                        </th>
                                                                        <th>
                                                                            <span class="userDatatable-title">Leave
                                                                                Types</span>
                                                                        </th>
                                                                       
                                                                        <th><span class="userDatatable-title">Reason</span>
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="field_wrapperb2c">

                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-group form-group-calender">
                                                                                <div class="position-relative">
                                                                                    <input type="date" class="form-control  ih-medium ip-light radius-xs b-light px-15" name="cdate" id="datepicker8" placeholder="dd-mm-yyyy" required>
                                                                                   
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <select class="form-control px-15" id="exampleFormControlSelect1" name="leave_type" required>
																				
                                                                                    <option value="compoff">Comp Off</option>
																				
                                                                                </select>
                                                                            </div>
                                                                        </td>
                                                                       
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Reason" name="reason" required>
                                                                            </div>
                                                                        </td>
                                                                        <!--<td>
                                                                            <button class="btn btn-sm btn-primary mt-2" name="add" id="addmorefieldsb2c">+ Add
                                                                                More</button>
                                                                        </td>-->
																		<input type="hidden" name="type" value="compoff" >
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <div class="d-flex justify-content-center mt-4">
                                                                <p><input type="submit" class="btn btn-success" value="Submit"></p>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <div class="alert alert-info">
                                    <strong>Note!</strong> This will add in your single leave application after admin approval.
                                </div

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        
  
    <style>
        #ui-datepicker-div {
            width: auto !important;
        }
    </style>
 <script src="<?php echo base_url(); ?>assets/vendor_assets/js/jquery/jquery-3.5.1.min.js "></script>
    <script type="text/javascript">
        $(document).ready(function() {
			
            var addButton = $('#addmorefieldsb2c');
            var wrapper = $('#field_wrapperb2c');
            var x = 1;
            $(addButton).click(function(e) {
				e.preventDefault();
				//alert('hi');
                var fieldHTML = '<tr id="customerfield' + x + '">\
        <td>\
            <div class="form-group">\
        <input type="date" id="datepicker81" name="ldate[]" class="form-control ih-medium ip-light radius-xs b-light px-15 hasDatepicker" placeholder="dd/mm/yy">\
        </div>\
        </td>\
        <td>\
            <div class="form-group">\
                <select class="form-control ih-medium ip-light radius-xs b-light px-15" id="skillsOption" name="leave_type[]" >\
				<?php if($leave_type){foreach($leave_type as $value){?>\
                    <option value="<?php echo $value['name'];?>"><?php echo $value['name'];?></option>\
                   <?php }} ?>\
                </select>\
            </div>\
        </td>\
        <td>\
            <div class="checkbox-theme-default custom-checkbox mt-3">\
                <input class="checkbox" type="checkbox" id="check-un0' + x + '"  onchange="oncheckfun(this)" name="selected_days' + x + '">\
                <label for="check-un0' + x + '">\
                    <span class="checkbox-text">Half Day</span>\
                </label>\
            </div>\
        </td>\
        <td>\
            <div class="form-group">\
                <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" placeholder="Reason" name="reason[]" >\
            </div>\
        </td>\
        <td>\
        <a href="javascript:void(0);" class="btn btn-danger btn-sm" id="remove_button" href="javascript:void(0);" onclick="removedivB2C(' + x + ');"  title="Remove Field" ><i class="la la-trash"></i>Remove</a></td>\
        </tr>';
                x++;
                $(wrapper).append(fieldHTML);
                $('.js-example-data-array').select2();
            });
        });

        function removedivB2C(id) {
            var element = document.getElementById("customerfield" + id);
            element.parentNode.removeChild(element);
        }
		
		function oncheckfun(thiss){
			console.log("oncheckfun id" , thiss.id )
			 
			var checkedvalue = $('input[id='+ thiss.id+']:checked');
			console.log("oncheckfun checkedvalue" , checkedvalue )
			if(!$(thiss).is(':checked')){
					$('#'+ thiss.id).val('off'); 
			}else{
				$('#'+ thiss.id).val('on'); 
				
			}
		}
		/*$('.checkbox').on('click', function ()
			var aa = $(this).val(this.checked ? 1 : 0);
		alert(aa);
		});*/
    </script>

    <?php include('include/footer.php'); ?>