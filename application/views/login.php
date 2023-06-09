<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!------ Include the above in your HEAD tag ---------->
<style type="text/css">
    body {
    padding-top: 90px;
}
.panel-login {
	border-color: #ccc;
	-webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	-moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
}
.panel-login>.panel-heading {
	color: #00415d;
	background-color: #fff;
	border-color: #fff;
	text-align:center;
}
.panel-login>.panel-heading a{
	text-decoration: none;
	color: #666;
	font-weight: bold;
	font-size: 15px;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear;
}
.panel-login>.panel-heading a.active{
	color: #029f5b;
	font-size: 18px;
}
.panel-login>.panel-heading hr{
	margin-top: 10px;
	margin-bottom: 0px;
	clear: both;
	border: 0;
	height: 1px;
	background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
	background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
}
.panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"] {
	height: 45px;
	border: 1px solid #ddd;
	font-size: 16px;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear;
}
.panel-login input:hover,
.panel-login input:focus {
	outline:none;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
	border-color: #ccc;
}
.btn-login {
	background-color: #59B2E0;
	outline: none;
	color: #fff;
	font-size: 14px;
	height: auto;
	font-weight: normal;
	padding: 9px 52px;
	text-transform: uppercase;
	border-color: #59B2E6;
	margin-left: inherit;
}
.btn-login:hover,
.btn-login:focus {
	color: #fff;
	background-color: #53A3CD;
	border-color: #53A3CD;
}
.forgot-password {
	text-decoration: underline;
	color: #888;
}
.forgot-password:hover,
.forgot-password:focus {
	text-decoration: underline;
	color: #666;
}



</style>
<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="login-logo" style="text-align: center;">
				<img src="<?php echo base_url();?>assets/img/logo.jpeg" style="height: 130px;" width="auto"  alt="User Image">
				<!-- <a href="../../index2.html"><b>Admin</b>LTE</a> -->
			</div>
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Employee Login</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">Manager Login</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="empLogin" onsubmit="return employeeLogin()" method="post" role="form" style="display: block;">

									<div id="eMsg"></div>
									<div class="form-group">
										<input type="text" name="email"  id="email" tabindex="1" class="form-control" placeholder="Email" required="">
									</div>
									<div class="form-group">
										<input type="password" name="password"  id="password" tabindex="2" class="form-control" placeholder="Password" required="">
									</div>
									<input type="text" name="type" value="1" hidden >
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<button type="submit" name="submit" class="btn btn-login">Login</button>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="<?php echo base_url() ?>forgot-password" tabindex="5" class="forgot-password">Forgot Password?</a>
												</div>
											</div>
										</div>
									</div>
								</form>
								<form id="managerLogin" onsubmit="return managerLogin();" method="post" role="form" style="display: none;">
									<div id="mMsg"></div>
									<div class="form-group">
										<input type="text" name="email" id="email" tabindex="1" class="form-control" placeholder="Username" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<input type="text" name="type" value="2" hidden >
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<button type="submit" name="submit" class="btn btn-login">Login</button>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="<?php echo base_url() ?>forgot-password" tabindex="5" class="forgot-password">Forgot Password?</a>
												</div>
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

<script>
    $(function() {

$('#login-form-link').click(function(e) {
    $("#empLogin").delay(100).fadeIn(100);
     $("#managerLogin").fadeOut(100);
    $('#register-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
});
$('#register-form-link').click(function(e) {
    $("#managerLogin").delay(100).fadeIn(100);
     $("#empLogin").fadeOut(100);
    $('#login-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
});

});

function employeeLogin(){

	  $.ajax({
                url: "<?php echo base_url(); ?>doLogin",
                type: "POST",
                data:$('#empLogin').serialize(),
                dataType:"JSON",
                success: function (res) {
                  console.log(res);
                 if(res.status==1){
                  window.location.href="<?php echo base_url(); ?>employee/dashboard";
                 } else {
                  $('#eMsg').html(res.msg);
                  return false;
                 }
            }
        });
     return false;  
}    

function managerLogin(){

	  $.ajax({
                url: "<?php echo base_url(); ?>doLogin",
                type: "POST",
                data:$('#managerLogin').serialize(),
                dataType:"JSON",
                success: function (res) {
                  console.log(res);
                 if(res.status==1){
					 if(res.user_type==2){
						window.location.href="<?php echo base_url(); ?>admin/dashboard";
					 }else{
						window.location.href="<?php echo base_url(); ?>superadmin/dashboard";	
						}
					
                 } else {
                  $('#mMsg').html(res.msg);
                  return false;
                 }
            }
        });
     return false;  
}
</script>    