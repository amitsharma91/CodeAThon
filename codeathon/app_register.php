<?php
	require "conn.php";
	
	$name = $_POST['name'];
	$username = $_POST['userName'];
	$password = $_POST['password'];
	$phone = $_POST['phone'];
	$department = $_POST['department'];
	$year = $_POST['year'];
	
	/* $name = 'Aman';
	$username = 'aman1';
	$password = 'aman';
	$phone = 9876543210;
	$department = 'engg';
	$year = 2017; */
	
	$verify_query = "SELECT * FROM user WHERE username='$username'";
	
	if(mysqli_num_rows(mysqli_query($conn,$verify_query)) > 0){
		echo "Username: '".$username."' Already Exists";
	}else{
		$query = "INSERT INTO user(name,phone_no,username,password,department,yearr,active) VALUES('$name',$phone,'$username','$password','$department',$year,'no')";
	
		if($conn -> query($query) === TRUE){
			echo "Registered Sucessfully!!!. Welcome ".$name;
		}else
		{
			echo "ERROR: ".$conn.error;
		}			
	}
		
?>