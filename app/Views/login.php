<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Payroll Software</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<div class="logo"><img src="<?= base_url(); ?>/assets/images/onlineinsurelogo.png" alt=""></div>
	<div><p class="page-header text-center" style="font-size:20px;padding:15px;font-weight:200;">Payroll Software</p></div>
	<div>
		<div class="d-flex justify-content-center">
			<div class="login-panel panel panel-primary">
				<div class="panel-body mx-auto ">
					<form method="POST" action="<?php echo base_url(); ?>index.php/user/login">
						<fieldset>
							<div class="text" style="margin-bottom:0.5px;">Username or email address</div>
							<div class="form-group">
								<input class="form-control" placeholder="" type="email" name="email" required>
							</div>
							
							<div class="text" style="margin-bottom:0.5px;">Password</div>
							<div class="form-group">
								<input class="form-control" placeholder="" type="password" name="password" required>
							</div>
							<a type="submit" class="btn btn-lg btn-success btn-block" href="<?php echo base_url('/index.php/payroll') ?>"><span class="glyphicon glyphicon-log-in"></span> Login</a>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
		<div class="d-flex justify-content-center" >
			<div class="signin"><p style="justify-content:center;text-align:center;font-size:14px;margin-top:9px;margin-bottom:9px;">New? <a href="#">Sign In</a> </p></div>
		</div>
	</div>
</div>
</body>
</html>

<style>
.logo
{
	width:100%;
	justify-content: center;
	text-align: center;
	margin-top:5%;
	margin-left:10px;
}
body {
  background-color: #0d1117;
}
p
{
	color:#e0e0e0;
}
.text
{
	color: #e0e0e0;
	margin-bottom: -10px;
}
.btn
{	
	height: 34px;
	width: 274px;
	text-align: center;
	justify-content: center;
	display: inline-block;
	padding: 0px 16px;
	margin: 16px 0 0;
	font-size: 16px;	
	font-weight: bold;
}
.form-control
{
	height: 34px;
	width: 274px;
	padding: 0px 16px;
	margin: 16px 0 0;
	background-color: #0d1117;
	color: white;
}
.form-control:focus
{
	height: 34px;
	width: 274px;
	padding: 0px 16px;
	margin: 16px 0 0;
	background-color: #0d1117;
	color:  #e0e0e0;
}
.login-panel
{
	padding: 19px;
	background-color: #161b22;
	border-radius: 5px;
	border-color: #21262d;
	border-style: solid;
	border-width: 2px;
}
.signin
{
	background-color: #0d1117;
	border-radius: 5px;
	border-color: #21262d;
	padding:4px;width:312px;margin-top:15px;text-align:center;
	border-style: solid;
	border-width: 2px;
}
</style>