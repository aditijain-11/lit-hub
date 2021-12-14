<?php
session_start();

include("connect.php");

	if (isset($_POST['login'])) {

		$email = htmlentities(mysqli_real_escape_string($con, $_POST['email']));
		$pass = htmlentities(mysqli_real_escape_string($con, $_POST['pass']));

		$select_user = "select * from users where email='$email' AND cpassword='$pass' ";
		$query= mysqli_query($con, $select_user);
		$check_user = mysqli_num_rows($query);

		if($check_user == 1){
			$_SESSION['email'] = $email;

			echo "<script>window.open('index.php')</script>";
		}else{
			echo"<script>alert('Your Email or Password is incorrect')</script>";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>Signin</title>
</head>
<style>
	body {
		overflow-x: hidden;
		background: linear-gradient(rgba(255, 255, 255, 0.3),
				rgba(255, 255, 255, 0.3),
				rgba(255, 255, 255, 0.3),
				rgba(255, 255, 255, 0.3)),
			url("bgsignup.jpg") no-repeat center center fixed;
		;

		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;

	}

	.main-content {
		/* width: 50%;
		height: 40%; */

		background-color: #fff;
		border: 2px solid #e6e6e6;
		padding: 30px 30px;
		box-shadow: 0 2px 4px grey, 0 8px 16px grey;
	}

	.header {
		border: 0px solid #000;
		margin-bottom: 5px;
	}

	#signin {
		width: 60%;
		border-radius: 30px;
		background-color: #d44294;
		color: white;
	}

	#signin:hover {
		background: -webkit-linear-gradient(top, rgb(212, 66, 148) 0%, rgb(217, 117, 197) 100%);
		border-color: #c2046f;
	}

	.overlap-text {
		position: relative;
	}

	.overlap-text a {
		position: absolute;
		top: 8px;
		right: 10px;
		font-size: 14px;
		text-decoration: none;
		font-family: 'Overpass Mono', monospace;
		letter-spacing: -1px;

	}
</style>

<body>
	<div class="row">

	</div>
	<div class="row">
		<div class="col-sm-4"></div>
		<center>
			<div class="col-sm-3" style="margin: 100px 500px;">
				<div class="main-content">
					<div class="header">
						<h4 style="text-align: center;"><strong>Login to LIT.HUB</strong></h4><br>
					</div>
					<div class="l-part">
						<form action="login.php" method="post">
							<input type="email" name="email" placeholder="Email" required="required"
								class="form-control input-md"><br>
							<div class="overlap-text">
								<input type="password" name="pass" placeholder="Password" required="required"
									class="form-control input-md"><br>
							</div>
							<a style="text-decoration: none;float: right;color: #187FAB;" data-toggle="tooltip"
								title="Create Account!" href="signup.php">Don't have an account?</a><br><br>

							<center><button id="signin" class="btn  btn-lg" name="login">Login</button></center>

						</form>
					</div>
				</div>
			</div>
		</center>

	</div </body>

</html>