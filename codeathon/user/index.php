<?php
session_start ();

if (isset ( $_POST ['login'] )) {
	require 'conn.php';
	$username = $_POST ['username'];
	$password = $_POST ['password'];
	
	$query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
	
	if ($row = mysqli_fetch_assoc ( mysqli_query ( $conn, $query ) )) {
		echo "Login Sucessful....";
		$_SESSION['id'] = session_id();
		$_SESSION ['username'] = $username;
		$_SESSION ['user_id'] = $row ['uid'];
		header ( 'Location: homeUser.php' );
	} else {
		?>

<?php
		echo "<h6 style=color:yellow;text-align:center;font-size:16px;margin-top:8px;font-weight:normal;>Login Failed , Invalid Credentials</h6>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Code A Thon</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript">
	 addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 
</script>
<meta name="keywords"
	content="code a thon,Code-A-Thon,Code Marathon,Code,Thon,Coding Competition," />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!--webfonts-->
<!-- <link
	href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic|Oswald:400,300,700'
	rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Exo+2'
	rel='stylesheet' type='text/css'> -->
<!--//webfonts-->
<script
	src="assets/js/jquery-3.1.1.js"></script>
</head>
<body>
	<script>
		$(document).ready(function(c) {
			$('.close').on('click', function(c) {
				$('.login-form').fadeOut('slow', function(c) {
					$('.login-form').remove();
				});
			});
		});
	</script>
	<!--SIGN UP-->
	<h1>Code-A-Thon</h1>
	<div class="login-form">
		<div class="head-info">Login</div>
		<div class="clear"></div>
		<div class="avtar">
			<img src="images/Logo.png" style="width: 120px; height: 79px;" />
		</div>
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
			<input type="text" class="text" placeholder="Username"
				name="username" onfocus="this.value = '';" required="required" />
			<div>
				<input type="password" placeholder="Password"
					onfocus="this.value = '';" name="password" required="required" />
			</div>
			<span id="msg" style="color: white;"></span>
			<div class="signin">
				<input type="submit" name="login" value="Login" />
			</div>
		</form>
	</div>
	<div class="copy-rights">
		<p>
			Copyright &copy; 2017 Code - A - Thon. All Rights Reserved | Design
			by <a target="_blank">Students</a>
		</p>
	</div>

</body>
</html>