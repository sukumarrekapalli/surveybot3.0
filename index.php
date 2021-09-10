<?php
if (isset($_SESSION)){
session_destroy();
}
session_start();
$_SESSION['logged_in']='0';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login|kaiwa dashboard</title>
	<link rel="icon" href="./assets/images/kaiwa.ico" type="image/png">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="./loginpage-resources/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./loginpage-resources/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./loginpage-resources/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./loginpage-resources/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="./loginpage-resources/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./loginpage-resources/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./loginpage-resources/css/util.css">
	<link rel="stylesheet" type="text/css" href="./loginpage-resources/css/main.css">
<!--===============================================================================================-->

<style>
    @media only screen and (max-width: 600px) {
  .beatsgif{
     height:70px;
  }
}


   @media only screen and (max-width: 600px) {
  .container-login100{
     
  }
}


.beatsgif{
  width: 100%;
  height: auto;
}
</style>


</head>
<body>
	
	<div class="limiter">
	    
		<div class="container-login100">
			<div class="wrap-login100">
				<div  data-tilt class="col-lg-6 col-sm-12">
					<img class="beatsgif" src="./kaiwa3.0.png" alt="IMG" height="250px" width="500px">
				</div>

				<form class="login100-form validate-form" action="./login.php" method="post">
					<span class="login100-form-title">Kaiwa Admin</span>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="name" placeholder="User name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-o" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					
				</form>
			</div>
		</div>
		
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>

