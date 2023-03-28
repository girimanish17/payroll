<style type="text/css">
  table {width: 100%; border-collapse: collapse;}
  td, th {border: solid 1px black;}
  h1 {text-align: center;}
  span {float: right;}
</style>
<?php $manager = $this->common_model->GetSingleData('users',array('user_id' =>$myexpense['manager'])); 
$expense_types = $this->common_model->GetSingleData('expense_types',array('id' =>$myexpense['expense_type'])); 

?>
<span>
  <b>Request No.</b> <?php echo $myexpense['request_no'];?><br>
  <b>Date</b> <?php echo date('d-m-Y',strtotime($myexpense['created_date']));?><br>
</span>

<b>Employee details</b>
<?php echo $employee['first_name']." ".$employee['last_name']; ?><br>
<b>Employee Id</b>
<?php echo $employee['emp_id']; ?><br>

<b>Manager</b>
<?php echo $manager['first_name']." ".$manager['last_name']; ?><br>

<h1>BILL</h1>

<table>
  <thead>
    <tr>
	  <th>SSN</th>
      <th>Purpose</th>
      <th>Purchase Date</th>
      <th>Pay date range</th>
      <th>Description</th>
	  <th>Account Type</th>
	  <th>Expense Type</th>
		 
    </tr>
  </thead>
  <tbody>
    {% for item in invoice.lines %}
    <tr>
	  <td> <?php echo $myexpense['SSN'];?></td>
      <td> <?php echo $myexpense['purpose'];?></td>
      <td> <?php echo $myexpense['purchase_date'];?></td>
	  <td> <?php echo $myexpense['pay_fromdate']."-".$myexpense['pay_todate'];?></td>
	  <td> <?php echo $myexpense['description'];?></td>
	  <td> <?php echo $myexpense['account_type'];?></td>
	  <td> <?php echo $expense_types['name'];?></td>
    </tr>
	
    {% endfor %}
    <!--<tr>
      <td></td>
      <td></td>
      <td></td>
      <td>Total</td>
      <td>{{ invoice.amount | currency }}</td>
      </tr> -->       
  </tbody>
</table>
</br></br>
 <div class="col" style="padding-top:35px;padding-left:140px;">
 <a target="_blank" href="<?php echo base_url(); ?>assets/images/expense_bill/<?php echo $myexpense['bill']; ?>">
  <img src="<?php echo base_url(); ?>assets/images/expense_bill/<?php echo $myexpense['bill']; ?>" style="width:450px;height:500px;" alt="">
</a>
   
 </div>
<style>
img {
  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 45px 45px 45px 45px;
  width: 450px;
}

img:hover {
  box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}
</style>