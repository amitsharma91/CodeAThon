<?php
	session_start ();
	if(isset($_SESSION['id'])){
	require "conn.php";
	
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Code A Thon</title>
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
<!-- <link
	href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'
	rel='stylesheet' type='text/css'> -->
<!---//webfonts--->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<div id="wrapper">
		<!-- Navigation -->
		<nav class="top1 navbar navbar-default navbar-static-top"
			role="navigation" style="margin-bottom: 0">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand">Code-A-Thon</a>
			</div>

			<div class="navbar-default sidebar" role="navigation">
				<div class="sidebar-nav navbar-collapse">
					<ul class="nav" id="side-menu">
						<li><a href="index.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a></li>

						<li><a href="#"><i class="fa fa-indent nav_icon"></i>Users<span
								class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li><a href="viewInactiveUsers.php">Inactive User</a></li>
								<li><a href="exam_result.php">Exam Result</a></li>
							</ul> <!-- /.nav-second-level --></li>

						<li><a href="#"><i class="fa fa-check-square-o nav_icon"></i>Questions<span
								class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li><a href="manageQuestions.php">Manage Questions</a></li>
								<li><a href="manageViewQuestions.php">View Questions</a></li>
							</ul> <!-- /.nav-second-level --></li>

						<li><a href="#"><i class="fa fa-sitemap fa-fw nav_icon"></i>Account<span
								class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li><a href="#">Change Password</a></li>
								<li><a href="logout.php"
									onclick="return confirm('Are you sure you want to LOGOUT?')">Logout</a></li>
							</ul> <!-- /.nav-second-level --></li>
					</ul>
				</div>
				<!-- /.sidebar-collapse -->
			</div>
			<!-- /.navbar-static-side -->
		</nav>
		<div id="page-wrapper">
			<div class="graphs">
				<div class="xs">
					<h3>Change Password</h3>
					<div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" method="POST"
								action="<?php echo $_SERVER['PHP_SELF'];?>">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Old
										Password</label>
									<div class="col-sm-8">
										<input type="password" name="old_pswd" class="form-control1"
											id="focusedinput" placeholder="old password"
											required="required" />
									</div>
								</div>
								<div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">New
										Password</label>
									<div class="col-sm-8">
										<input type="password" name="new_pswd" class="form-control1"
											id="disabledinput" placeholder="new password"
											required="required" />
									</div>
								</div>
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">Confirm
										Password</label>
									<div class="col-sm-8">
										<input type="password" name="confir_pswd"
											class="form-control1" id="inputPassword"
											placeholder="confirm password" required="required" />
									</div>
								</div>
								<div class="row">
									<div class="col-sm-8 col-sm-offset-2">
										<button name="change" class="btn-default btn">Change</button>
									</div>
								</div>
								
								<?php 
									if (isset ( $_POST ['change'] )) {
										echo '<div class="form-group" style="text-align: center;color: red;">';
										$get_password = "SELECT password FROM admin";
										$row_get = mysqli_fetch_assoc ( mysqli_query ( $conn, $get_password ) );
									
										$old_pswd = $row_get ['password'];
									
										if(strcmp($old_pswd, $_POST['old_pswd']) !== 0){
											echo "Incorrect Old Password!<br/>";
										}else if(strcmp($_POST['new_pswd'], $_POST['confir_pswd']) !== 0){
											echo "<b style='color: #009688;'>New Password</b> and <b style='color: #009688;'>Confirm Password</b> does not match";
										}
										else{											
											if(mysqli_query($conn, "UPDATE admin SET password='".$_POST['new_pswd']."'")){
								?>
										<script type="text/javascript">
											alert("Password changed sucessfully. Re-Login");			
										</script>								
								<?php 					
											session_destroy();
											$_SESSION[] = array();
								?>
											<script type="text/javascript">
												window.location.href = "logout.php";
											</script>
								<?php 			
											}											
										}
										
										echo '</div>';
									}									
								?>
							</form>
						</div>
					</div>
				</div>
				<div class="copy_layout">
					<p>
						Copyright &copy; 2017 Code - A - Thon. All Rights Reserved |
						Design by <a target="_blank">Students</a>
					</p>
				</div>
			</div>
		</div>
		<!-- /#page-wrapper -->
	</div>
	<!-- /#wrapper -->
	<!-- Nav CSS -->
	<link href="css/custom.css" rel="stylesheet">
	<!-- Metis Menu Plugin JavaScript -->
	<script src="js/metisMenu.min.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>
<?php 
	}else{
?>
	<script>
		alert("Please Login as ADMIN");
	</script>
<?php
	header("Refresh:0; url=login.php");
	}
?>