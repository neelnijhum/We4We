<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?=base_url()?>asset3/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>asset3/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>asset3/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>asset3/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>asset3/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>asset3/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>asset3/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>asset3/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>asset3/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>asset3/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>asset3/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>asset3/css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #999999;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('images/bg-01.jpg');"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form method="post" action="" class="login100-form validate-form">
					<span class="login100-form-title p-b-59">
						Log In
					</span>
<div class="form-group">

		<input type="text" class="form-control" placeholder="Enter Your Email" value="<?=set_value('email')?>"  name="email"  >

	</div>

	<div class="error"><?=form_error('email')?></div>
 

			<div class="form-group">

		<input type="password" class="form-control" placeholder="Enter password" value="<?=set_value('password')?>"  name="password"   >

	</div>

		<div class="error"><?=form_error('password')?></div>
 
	<div class="form-group">

		
	</div>

					<div class="flex-m w-full p-b-33">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								<span class="txt1">
									I agree to the
									<a href="#" class="txt2 hov1">
										Terms of User
									</a>
								</span>
							</label>
						</div>

						
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" name="submit" class="login100-form-btn">
								Log In
							</button>
						</div>

						<a href="<?=base_url()?>signup" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Sign in
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="href="<?=base_url()?>asset3/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="href="<?=base_url()?>asset3/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="href="<?=base_url()?>asset3/vendor/bootstrap/js/popper.js"></script>
	<script src="href="<?=base_url()?>asset3/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="href="<?=base_url()?>asset3/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="href="<?=base_url()?>asset3/vendor/daterangepicker/moment.min.js"></script>
	<script src="href="<?=base_url()?>asset3/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="href="<?=base_url()?>asset3/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="href="<?=base_url()?>asset3/js/main.js"></script>

</body>
</html>