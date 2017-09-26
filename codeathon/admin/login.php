<?php 
	session_start();
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Modern an Admin Panel Category Flat Bootstarp Resposive
	Website Template | Login :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords"
	content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet">
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link
	href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'
	rel='stylesheet' type='text/css'>
<!---//webfonts--->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</head>
<body id="login">
	<div class="login-logo">
		<a href="" style="font-size: 27px;">Code-A-Thon</a>
	</div>
	<h2 class="form-heading">Admin login</h2>
	<div class="app-cam">
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
			<input type="text" name="username" class="text" placeholder="Username" required="required"
				onfocus="this.value = '';">
			<input type="password" name="password" placeholder="password" required="required" onfocus="this.value = '';">
			<div class="submit">
				<input type="submit" value="Login">
			</div>
			
			<?php 
				if($_SERVER['REQUEST_METHOD'] == "POST"){
					require 'conn.php';
					
					$username = $_POST['username'];
					$password = $_POST['password'];
					
					$query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
					
					if(mysqli_num_rows(mysqli_query($conn, $query))){
						$_SESSION['id'] = session_id();
						header('Location: index.php');
					}else{
						echo "<h6 style=color:red;text-align:center;font-size:16px;margin-top:8px;font-weight:normal;>Login Failed , Invalid Credentials</h6>";
					}
				}
			?>		
			
			<ul class="new">
				<li class="new_left"><p>
						<a>Forgot Password ?</a>
					</p></li>
				
				<div class="clearfix"></div>
			</ul>
		</form>
	</div>
	<div class="copy_layout login">
		<p>
			Copyright &copy; 2017 Code - A - Thon. All Rights Reserved | Design by <a target="_blank">Students</a>
		</p>
	</div>
</body>
</html>
