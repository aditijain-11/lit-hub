<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "lithub";
	// Create a connection
	$con = mysqli_connect($servername,
		$username, $password, $database);

	if($con) {
		echo " ";
	}
	else {
		die("Error". mysqli_connect_error());
	}
?>
