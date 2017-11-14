<?php
	require "conn.php";
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	/* $username = "amit5";
	$password = "amit"; */
	
	$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
	
	if(mysqli_num_rows(mysqli_query($conn,$query)) > 0){
		echo "Sucessfully logged in";
	}else
	{
		echo "Failed to Login";
	}
?>