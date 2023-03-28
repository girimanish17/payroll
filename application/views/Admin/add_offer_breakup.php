<?php include('include/header.php'); ?> 
<style>
table.table.mb-0.table-basic.no-footer th, table.table.mb-0.table-basic.no-footer td {
    border: 1px solid;
}
</style> 
<div id="scrolltophere"></div>
<div class="contents demo-card expanded">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-4">
            <div class="breadcrumb-main">
               <ul class="atbd-breadcrumb nav">
                  <li class="atbd-breadcrumb__item">
                     <a href="#"> Home </a>
                     <span class="breadcrumb__seperator"> <span class="la la-angle-right"></span> </span>
                  </li>
                  <li class="atbd-breadcrumb__item">
                     <span>Add New Breakup Offer</span>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="contents demo-card expanded">
   <div class="row">
      <div class="col-sm-12">
         <form method="post" action="" id="employeeForm" enctype="multipart/form-data">
		 <!--<form method="post" action="<?php echo base_url(); ?>admin/addEmployeeForm" id="employeeForm" enctype="multipart/form-data">-->
         
             <?php echo $this->session->flashdata('msg');
               if(isset($_SESSION['msg'])){
    unset($_SESSION['msg']);
}
              ?>
            <div id="eMsg"></div>
			
            <div class="form-row">
			<div class="form-group col-sm-12">
               <h3>Offer Details</h3>
			   </div>
			    
				 <div class="form-group col-sm-3">
                  <div class="with-icon">
				    <label> Name </label>				
                    <input type="text" name="name" class="form-control  ih-medium ip-lightradius-xs b-light" id="=" required placeholder="Name">
                  </div>
               </div>
			    <div class="form-group col-sm-3">
                  <div class="with-icon">
                     <label> Department </label>
                     <select name="department_id" id="department_id" class="form-control ih-medium ip-lightradius-xs b-light" required onchange="getdesignation();">
                        <option selected="">Select Department</option>
						<?php if($department){?>
						<?php foreach($department as $val){?>
                        <option value="<?php echo $val['id'];?>"><?php echo $val['name'];?></option>
                        <?php } } ?>
                     </select>
                  </div>
               </div>
               <div class="form-group col-sm-3">
                  <div class="with-icon">
                     <label> Designation </label>
                     <select name="designation_id"  id="designation_id" class="form-control ih-medium ip-lightradius-xs b-light" required>
                        <option selected="">Select Designation</option>
                        <?php if($designation){?>
						<?php foreach($designation as $val){?>
                        <option value="<?php echo $val['id'];?>"><?php echo $val['designation_name'];?></option>
                        <?php } } ?>
                     </select>
                  </div>
               </div>
			   <div class="form-group col-sm-3">
                  <div class="with-icon">
                     <label> Location </label>
                     <input type="text" name="location" class="form-control  ih-medium ip-lightradius-xs b-light" id="location" required  placeholder="Job Location">
                  </div>
               </div>			   
               <div class="form-group col-sm-2">
                  <div class="with-icon">
                     <label>Previous Company</label>
                     <input value="0" onkeyup="chkcheckbox();" type="number" name="p_company" id="p_company" class="form-control  ih-medium ip-lightradius-xs b-light"   placeholder="Previous Company">
                  </div>
               </div>
			   <div class="form-group col-sm-2">
                  <div class="with-icon">
                     <label>Calculate % <input value="1" onclick="chkcheckbox();" type="checkbox" name="calculate_p" id="calculate_p" class="ih-medium ip-lightradius-xs b-light" ></label>
                     <input style="display:none" onkeyup="calculation_per();" type="number" name="calculate_per" id="calculate_per" class="form-control  ih-medium ip-lightradius-xs b-light"   placeholder="Enter Calculate %">
                  </div>
               </div>
			   <div class="form-group col-sm-2">
                  <div class="with-icon">
                     <label>Gross CTC</label>
                     <input onkeyup="calculation();" type="number" name="g_ctc" id="g_ctc" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="Gross CTC" required>
                  </div>
               </div>
			   <div class="form-group col-sm-2">
                  <div class="with-icon">
                     <label>Veriable Pay</label>
                     <input value="0" onkeyup="calculation_veriable_pay();" type="number" name="veriable_pay" id="veriable_pay" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="Veriable Pay">
                  </div>
               </div>
			   <div class="form-group col-sm-2">
                  <div class="with-icon">
                     <label>Retention Bonus</label>
                     <input value="0" onkeyup="calculation_retention_bonus();" type="number" name="retention_bonus" id="retention_bonus" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="Retention Bonus">
                  </div>
               </div>
			   <div class="form-group col-sm-2">
                  <div class="with-icon">
                     <label>Mediclaim Insurance</label>
                     <input value="0" onkeyup="calculation_mediclaim_insurance();" type="number" name="mediclaim_insurance" id="mediclaim_insurance" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="Mediclaim Insurance">
                  </div>
               </div>
			   <div class="form-group col-sm-2">
                  <div class="with-icon">
                     <label> Offer Date </label>
                     <input type="date" name="offer_date" class="form-control  ih-medium ip-lightradius-xs b-light" id="=" required placeholder="Offer Date">
                  </div>
               </div>
			  
				<div class="form-group col-sm-12">
				   <h3>Offer Breakup</h3>
				</div>
				
				<div class="form-group col-sm-12">
					<table class="table mb-0 table-basic no-footer">
						<tbody>
						<tr>
							<th> Component </th>
							<th> Annual </th>
							<th> Monthly </th>
						</tr>
						<tr>
							<th> Annual Target Compensation </th>
							<td> <input value="0" readonly type="number" name="atc_annual" id="atc_annual" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="Annual"> </td>
							<td> <input value="0" readonly type="number" name="atc_monthly" id="atc_monthly" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="Monthly"> </td>
						</tr>
						<tr>
							<th> Performance / Variable Bonus </th>
							<td> <input value="0" readonly type="number" name="pvb_annual" id="pvb_annual" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="Annual"> </td>
							<td> <input value="0" readonly type="text" name="pvb_monthly" id="pvb_monthly" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="Monthly" value="-"> </td>
						</tr>
						<tr>
							<th> Retention Bonus Applicable </th>
							<td> <input value="0" readonly type="number" name="rba_annual" id="rba_annual" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="Annual"> </td>
							<td> <input value="0" readonly type="text" name="rba_monthly" id="rba_monthly" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="Monthly" value="-"> </td>
						</tr>
						<tr>
							<th> Employer's Contribution to PF </th>
							<td> <input value="0" readonly type="number" name="actpf_annual" id="actpf_annual" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="Annual"> </td>
							<td> <input value="0" readonly type="number" name="actpf_monthly" id="actpf_monthly" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="Monthly"> </td>
						</tr>
						<tr>
							<th> Mediclaim Insurance Premium </th>
							<td> <input value="0" readonly type="number" name="mip_annual" id="mip_annual" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="Annual"> </td>
							<td> <input value="0" readonly type="number" name="mip_monthly" id="mip_monthly" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="Monthly"> </td>
						</tr>
						<tr>
							<th style="text-align: center;"> Net CTC </th>
							<th> <b id="netctc_b">0.00</b> <input type="hidden" id="netctc" name="netctc" > </th>
							<th> <b id="netctc_m_b">0.00</b> <input type="hidden" id="netctc_m" name="netctc_m" > </th>
						</tr>
						<tr>
							<th> Monthly Components </th>
							<th> Annualized (Rupees) </th>
							<th> Per Month (Rupees) </th>
						</tr>
						<tr>
							<th> Basic </th>
							<td> <input value="0" readonly type="number" name="basic_annualized" id="basic_annualized" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="Annualized (Rupees)"> </td>
							<td> <input value="0" readonly type="number" name="basic_per_month" id="basic_per_month" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="Per Month (Rupees)"> </td>
						</tr>
						<tr>
							<th> H.R.A. </th>
							<td> <input value="0" readonly type="number" name="hra_annualized" id="hra_annualized" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="Annualized (Rupees)"> </td>
							<td> <input value="0" readonly type="number" name="hra_per_month" id="hra_per_month" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="Per Month (Rupees)"> </td>
						</tr>
						<tr>
							<th> Car Maintenance Allowance </th>
							<td> <input value="0" readonly type="number" name="cma_annualized" id="cma_annualized" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="Annualized (Rupees)"> </td>
							<td> <input value="0" readonly type="number" name="cma_per_month" id="cma_per_month" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="Per Month (Rupees)"> </td>
						</tr>
						<tr>
							<th> Journal Allowance </th>
							<td> <input value="0" readonly type="number" name="ja_annualized" id="ja_annualized" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="Annualized (Rupees)"> </td>
							<td> <input value="0" readonly type="number" name="ja_per_month" id="ja_per_month" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="Per Month (Rupees)"> </td>
						</tr>
						<tr>
							<th> Mobile Allowance </th>
							<td> <input value="0" readonly type="number" name="ma_annualized" id="ma_annualized" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="Annualized (Rupees)"> </td>
							<td> <input value="0" readonly type="number" name="ma_per_month" id="ma_per_month" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="Per Month (Rupees)"> </td>
						</tr>
						<tr>
							<th> Child Education Allowance </th>
							<td> <input value="0" readonly type="number" name="cea_annualized" id="cea_annualized" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="Annualized (Rupees)"> </td>
							<td> <input value="0" readonly type="number" name="cea_per_month" id="cea_per_month" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="Per Month (Rupees)"> </td>
						</tr>
						<tr>
							<th> Uniform Allowance </th>
							<td> <input value="0" readonly type="number" name="ua_annualized" id="ua_annualized" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="Annualized (Rupees)"> </td>
							<td> <input value="0" readonly type="number" name="ua_per_month" id="ua_per_month" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="Per Month (Rupees)"> </td>
						</tr>
						<tr>
							<th> Special Allowance </th>
							<td> <input value="0" readonly type="number" name="sp_annualized" id="sp_annualized" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="Annualized (Rupees)"> </td>
							<td> <input value="0" readonly type="number" name="sp_per_month" id="sp_per_month" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="Per Month (Rupees)"> </td>
						</tr>
						<tr>
							<th style="text-align: center;"> Total Fixed Components </th>
							<th> <b id="totalfc_b">0.00</b> <input type="hidden" id="totalfc" name="totalfc" > </th>
							<th> <b id="totalfc_m_b">0.00</b> <input type="hidden" id="totalfc_m" name="totalfc_m" > </th> 
						</tr> 
						<tr>
							<th colspan="3" style="text-align: center;"> DEDUCTIONS </th>
						</tr>
						<tr>
							<th> Components </th>
							<th> Annualized (Rupees) </th>
							<th> Per Month (Rupees) </th>
						</tr>
						<tr>
							<th> Provident Fund (Employee) </th>
							<td> <input value="0" readonly type="number" name="pf_annualized" id="pf_annualized" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="Annualized (Rupees)"> </td>
							<td> <input value="0" readonly type="number" name="pf_per_month" id="pf_per_month" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="Per Month (Rupees)"> </td>
						</tr>
						<tr>
							<th> Professional Tax </th>
							<td> <input value="0" readonly type="number" name="pt_annualized" id="pt_annualized" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="Annualized (Rupees)"> </td>
							<td> <input value="0" readonly type="number" name="pt_per_month" id="pt_per_month" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="Per Month (Rupees)"> </td>
						</tr>
						<tr>
							<th> ESIC </th>
							<td> <input value="0" readonly type="number" name="esic_annualized" id="esic_annualized" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="Annualized (Rupees)"> </td>
							<td> <input value="0" readonly type="number" name="esic_per_month" id="esic_per_month" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="Per Month (Rupees)"> </td>
						</tr>
						<tr>
							<th> Income Tax (Depend on Investment) </th>
							<td> <input value="0" readonly type="number" name="it_annualized" id="it_annualized" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="Annualized (Rupees)"> </td>
							<td> <input value="0" readonly type="number" name="it_per_month" id="it_per_month" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="Per Month (Rupees)"> </td>
						</tr>
						<tr>
							<th> MLWF whenever applicable </th>
							<td> <input value="0" readonly type="number" name="mlwf_annualized" id="mlwf_annualized" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="Annualized (Rupees)"> </td>
							<td> <input value="0" readonly type="number" name="mlwf_per_month" id="mlwf_per_month" class="form-control  ih-medium ip-lightradius-xs b-light"  placeholder="Per Month (Rupees)"> </td>
						</tr>
						<tr>
							<th style="text-align: center;">Total Deductions </th>
							<th> <b id="totalded_b">0.00</b> <input type="hidden" id="totalded" name="totalded" > </th>
							<th> <b id="totalded_m_b">0.00</b> <input type="hidden" id="totalded_m" name="totalded_m" > </th>
						</tr>
						<tr>
							<th style="text-align: center;"> Net Take Home </th>
							<th> <b id="nettake_b">0.00</b> <input type="hidden" id="nettake" name="nettake" > </th>
							<th> <b id="nettake_m_b">0.00</b> <input type="hidden" id="nettake_m" name="nettake_m" > </th>
						</tr>
						<tr>
							<td colspan="3"> 
							<p>TERMS - Net Salary is subject to Income Tax deductions as per applicable law(s). </p>
							<p>NOTE : Employee Family Insurance Amount Recovery by Employee Only. </p>
							</td>
						</tr>
						</tbody>
					</table>
				</div>
			    
               <div class="form-group col-sm-12">
                  <button type="submit" class="btn btn-primary btn-sm">Submit</button>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>

<?php include('include/footer.php'); ?> 
<script type="text/javascript">
	function chkcheckbox()
	{
		if($("#calculate_p").prop('checked') == true){
			$("#g_ctc").attr("readonly","readonly");
			
			$('#calculate_per').show();
			var value= $('#calculate_per').val();
			var p_company= $('#p_company').val();
			
			var g_ctc = (p_company*value)/100;
			g_ctc = parseFloat(p_company)+parseFloat(g_ctc);
			$('#g_ctc').val(g_ctc);
			calculation();
			
		}else{
			$("#g_ctc").removeAttr("readonly");
			$('#calculate_per').hide();
			$('#g_ctc').val('0');
			calculation();
		}
	}
	function calculation_per()
	{
		var value= $('#calculate_per').val();
		var p_company= $('#p_company').val();
		
		var g_ctc = (p_company*value)/100;
		g_ctc = parseFloat(p_company)+parseFloat(g_ctc);
		$('#g_ctc').val(g_ctc);
		calculation();
	}
	
	function calculation()
	{ 
		var value= $('#g_ctc').val();
		
		var atc_annual = value;
		var atc_monthly = Math.round((atc_annual/12).toFixed(2));
		
		$('#atc_annual').val(atc_annual);
		$('#atc_monthly').val(atc_monthly);	
		
		if(atc_annual>=500000)
		{
			var basic_annualized = atc_annual*45/100;
		}
		else if(atc_annual<500000 && atc_annual>=250000)
		{
			var basic_annualized = 15000;
		}
		else
		{
			var basic_annualized = atc_annual*60/100;
		}
		
		basic_annualized = Math.round(basic_annualized.toFixed(2));
		$('#basic_annualized').val(basic_annualized);
		var basic_per_month = Math.round((basic_annualized/12).toFixed(2));
		
		$('#basic_per_month').val(basic_per_month);
		
		var pf_annualized = basic_annualized*12/100;
		var pf_annualized = Math.round(pf_annualized.toFixed(2));
		
		var pf_per_month = Math.round((pf_annualized/12).toFixed(2));
		
		$('#pf_annualized').val(pf_annualized);
		$('#actpf_annual').val(pf_annualized);
		$('#pf_per_month').val(pf_per_month);
		
		var hra_annualized = basic_annualized*40/100;
		hra_annualized = Math.round(hra_annualized.toFixed(2));
		$('#hra_annualized').val(hra_annualized);
		var hra_per_month = Math.round((hra_annualized/12).toFixed(2));
		$('#hra_per_month').val(hra_per_month);
	
		//Net CTC
		var atc_annual = $("#atc_annual").val();
		var pvb_annual = $("#pvb_annual").val();
		var rba_annual = $("#rba_annual").val();
		var actpf_annual = $("#actpf_annual").val();
		var mip_annual = $("#mip_annual").val();
		
		var netctc = atc_annual-pvb_annual-rba_annual-actpf_annual-mip_annual;
		$("#netctc").val(netctc);
		$("#netctc_b").text(netctc);
		var netctc_m = Math.round((netctc/12).toFixed(2));
		$("#netctc_m").val(netctc_m);
		$("#netctc_m_b").text(netctc_m);
		
		$("#cma_annualized").val('0');
		$("#cma_per_month").val('0');
		if(atc_annual>1000000)
		{
			$("#cma_annualized").val('21600');
			var cma_per_month = 21600/12;
			$("#cma_per_month").val(cma_per_month);
		}
		$("#ja_annualized").val('0');
		$("#ja_per_month").val('0');
		if(atc_annual>1000000)
		{
			$("#ja_annualized").val('12000');
			var ja_per_month = 12000/12;
			$("#ja_per_month").val(ja_per_month);
		}
		$("#ma_annualized").val('0');
		$("#ma_per_month").val('0');
		if(atc_annual>1000000)
		{
			$("#ma_annualized").val('24000');
			var ma_per_month = 24000/12;
			$("#ma_per_month").val(ma_per_month);
		}
		$("#cea_annualized").val('0');
		$("#cea_per_month").val('0');
		if(atc_annual>1000000)
		{
			$("#cea_annualized").val('4800');
			var cea_per_month = 4800/12;
			$("#cea_per_month").val(cea_per_month);
		}
		$("#ua_annualized").val('0');
		$("#ua_per_month").val('0');
		if(atc_annual>1000000)
		{
			$("#ua_annualized").val('24000');
			var ua_per_month = 24000/12;
			$("#ua_per_month").val(ua_per_month);
		}
		
		var netctc = $("#netctc").val();
		var basic_annualized = $("#basic_annualized").val();
		var hra_annualized = $("#hra_annualized").val();
		var cma_annualized = $("#cma_annualized").val();
		var ja_annualized = $("#ja_annualized").val();
		var ma_annualized = $("#ma_annualized").val();
		var cea_annualized = $("#cea_annualized").val();
		var ua_annualized = $("#ua_annualized").val();
		
		var sp_annualized = netctc-basic_annualized-hra_annualized-cma_annualized-ja_annualized-ma_annualized-cea_annualized-ua_annualized;
		$("#sp_annualized").val(sp_annualized);
		var sp_per_month = Math.round((sp_annualized/12).toFixed(2));
		$("#sp_per_month").val(sp_per_month);
		
		var totalfc = parseFloat(basic_annualized)+parseFloat(hra_annualized)+parseFloat(cma_annualized)+parseFloat(ja_annualized)+parseFloat(ma_annualized)+parseFloat(cea_annualized)+parseFloat(ua_annualized)+parseFloat(sp_annualized);
		$("#totalfc").val(totalfc);
		$("#totalfc_b").text(totalfc);
		var totalfc_m = Math.round((totalfc/12).toFixed(2));
		$("#totalfc_m").val(totalfc_m);
		$("#totalfc_m_b").text(totalfc_m);
		
		//Deductions
		var pf_annualized = Math.round((basic_annualized*12/100).toFixed(2));
		$("#pf_annualized").val(pf_annualized);
		var pf_per_month = Math.round((pf_annualized/12).toFixed(2));
		$("#pf_per_month").val(pf_per_month);
		
		$("#pt_annualized").val('2500');
		$("#pt_per_month").val('200');
		
		var totalfc = $("#totalfc").val();
		$("#esic_annualized").val('0');
		$("#esic_per_month").val('0');
		if(totalfc<252000)
		{
			var esic_annualized = Math.round((totalfc*0.75/100).toFixed(2));
			$("#esic_annualized").val(esic_annualized);
			var esic_per_month = Math.round((esic_annualized/12).toFixed(2));
			$("#esic_per_month").val(esic_per_month);
		}		
		$("#mlwf_annualized").val('24');
		
		var pf_annualized = $("#pf_annualized").val();
		var pt_annualized = $("#pt_annualized").val();
		var esic_annualized = $("#esic_annualized").val();
		var it_annualized = $("#it_annualized").val();
		var mlwf_annualized = $("#mlwf_annualized").val();
		
		var totalded = parseFloat(pf_annualized)+parseFloat(pt_annualized)+parseFloat(esic_annualized)+parseFloat(it_annualized)+parseFloat(mlwf_annualized);
		$("#totalded").val(totalded);
		$("#totalded_b").text(totalded);
		
		var pf_per_month = $("#pf_per_month").val();
		var pt_per_month = $("#pt_per_month").val();
		var esic_per_month = $("#esic_per_month").val();
		var it_per_month = $("#it_per_month").val();
		var mlwf_per_month = $("#mlwf_per_month").val();
		
		var totalded_m = parseFloat(pf_per_month)+parseFloat(pt_per_month)+parseFloat(esic_per_month)+parseFloat(it_per_month)+parseFloat(mlwf_per_month);
		$("#totalded_m").val(totalded_m);
		$("#totalded_m_b").text(totalded_m);
		
		//Net Take home
		var totalfc = $("#totalfc").val();
		var totalded = $("#totalded").val();
		var nettake = totalfc-totalded;
		$("#nettake").val(nettake);
		$("#nettake_b").text(nettake);
		
		var totalfc_m = $("#totalfc_m").val();
		var totalded_m = $("#totalded_m").val();
		var nettake_m = totalfc_m-totalded_m;
		$("#nettake_m").val(nettake_m);
		$("#nettake_m_b").text(nettake_m);
	}
	
	function calculation_veriable_pay()
	{
		var veriable_pay = $("#veriable_pay").val();
		$('#pvb_annual').val(veriable_pay);
		calculation();
	}
	
	function calculation_retention_bonus()
	{
		var retention_bonus = $("#retention_bonus").val();
		$('#rba_annual').val(retention_bonus);
		calculation();
	}
	function calculation_mediclaim_insurance()
	{
		var mediclaim_insurance = $("#mediclaim_insurance").val();
		$('#mip_annual').val(mediclaim_insurance);
		calculation();
	}

function getdesignation()
  {
	  //alert("hi");
	  var department_id = $('#department_id').val();	 
	  var params = {department_id: department_id};
		$.ajax({
			url: '<?php echo base_url();?>admin/getdesignation',
			type: 'post',
			data: params,
			success: function (r)
			 {
				 $("#designation_id").html(r);
			 }
		});
  }
</script>