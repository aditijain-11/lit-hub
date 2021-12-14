<?php
	
$showAlert = false;
$showError = false;
$exists=false;
	
if($_SERVER["REQUEST_METHOD"] == "POST") {
	
	
	include 'connect.php';
	
	$username = $_POST["username"];
    $email=$_POST["email"];
	$usertype=$_POST["usertype"];
   	$password = $_POST["password"];
	$cpassword = $_POST["cpassword"];
			
	
	$sql = "Select * from users where username='$username'";
	
	$result = mysqli_query($con, $sql);
	
	$num = mysqli_num_rows($result);
	
	// This sql query is use to check if
	// the username is already present
	// or not in our Database
	if($num == 0) {
		if(($password == $cpassword) && $exists==false) {
	
			$hash = password_hash($password,PASSWORD_DEFAULT);
				
			// Password Hashing is used here.
			$sql = "INSERT INTO `users` ( `username`,`email`,`usertype`,`password`,`cpassword`) VALUES ('$username','$email','$usertype','$hash','$cpassword')";
	
			$result = mysqli_query($con, $sql);
	
			if ($result) {
				$showAlert = true;
			}
		}
		else {
			$showError = "Passwords do not match";
		}	
	}// end if
	
if($num>0)
{
	$exists="Username not available";
}
	
}//end if
	
?>




<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" href="sstyle.css">

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,
		shrink-to-fit=no">

	<!-- Bootstrap CSS -->

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
		integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
		crossorigin="anonymous"></script>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>Signup</title>

</head>
<style>
	body {
		background: linear-gradient(rgba(255, 255, 255, 0.3),
				rgba(255, 255, 255, 0.3),
				rgba(255, 255, 255, 0.3),
				rgba(255, 255, 255, 0.3)),
			url("bg1su.jpg") no-repeat center center fixed;
		;

		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;

	}

	.main-content {
		width: 50%;
		height: 40%;
		margin: 10px auto;
		background-color: #fff;
		border: 2px solid #e6e6e6;
		padding: 20px 50px;
		box-shadow: 0 2px 4px grey, 0 8px 16px grey;
	}

	.header {
		border: 0px solid #000;
		margin-bottom: 5px;
	}



	#signup {
		width: 60%;
		border-radius: 30px;
		background-color: black;
		color: white;
		border-color: grey;
	}

	#signup:hover {
		background: -webkit-linear-gradient(top, rgb(120, 52, 52) 0%, rgb(82, 7, 7) 100%);
		border-color: #c2046f;
	}
</style>

<body>

	<?php
	
	if($showAlert) {
	
		echo "<script>alert('Signed Up Successfully!')</script>";
	}
	
	if($showError) {
	
		echo "<script>alert('Invalid Username and Password!')</script>"; 
}
		
	if($exists) {
		echo "<script>alert('Username already exists')</script>" ;
	}

?>

	<div class="row" style="display: flex;
  justify-content: center; align-items:center;">

		<div class="col-sm-8">
			<div class="main-content" style='margin-top:30px;'>
				<div class="header">
					<h3 style="text-align: center;"><strong>SIGN UP</strong></h3>
					<hr>
				</div>
				<div class="l-part">
					<form action="signup.php" method="post">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
							<input type="text" class="form-control" placeholder="Username" name="username"
								required="required">
						</div><br>

						<div class="input-group">

							<span class="input-group-addon">USER TYPE</span>
							<select class="form-control" name="usertype">

								<option>VIEWER</option>
								<option>CONTRIBUTOR</option>
							</select>
						</div><br>


						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input id="email" type="email" class="form-control" placeholder="Email" name="email"
								required="required">
						</div><br>

						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							<input id="password" type="password" class="form-control" placeholder="password"
								name="password" required="required">
						</div><br>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							<input id="cpassword" type="password" class="form-control" placeholder="Confirm Password"
								name="cpassword" required="required">
						</div><br>

						<a style="text-decoration: none;float: right;color: #187FAB;" data-toggle="tooltip"
							title="Create Account!" href="login.php">Already have an account?</a><br><br>
						<center><button id="signup" class="btn  btn-lg" name="signup">Signup</button></center>

					</form>
				</div>
			</div>
		</div>

	</div>

	<script src="
https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="
sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>

	<script src="
https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
		integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
		</script>

	<script src="
https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
		integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
		</script>

</body>

</html>