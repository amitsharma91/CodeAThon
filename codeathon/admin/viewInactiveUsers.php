<?php 
	session_start();
	if(isset($_SESSION['id'])){
	
	require "conn.php";
	
	$query = "SELECT * FROM user WHERE active='NO'";
	$result = mysqli_query($conn,$query);
	$n = 1;
	
	if(isset($_GET['id'])){
		if(mysqli_query($conn, "UPDATE user SET active='yes' WHERE uid=".$_GET['id'])){
		?>
				   			<script>
				   				alert("User Sucessfully Activated...");
				   			</script>
				<?php  
				   			header("Refresh:0; url=viewInactiveUsers.php");			
		}
	}
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
<title>Code A Thon</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
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
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
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
						<li><a href="index.php"><i
								class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a></li>
						
						<li><a href="#"><i class="fa fa-indent nav_icon"></i>Users<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li><a href="viewInactiveUsers.php">Inactive User</a></li>
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
								<li><a href="logout.php" onclick="return confirm('Are you sure you want to LOGOUT?')">Logout</a></li>
							</ul> <!-- /.nav-second-level --></li>
					</ul>
				</div>
				<!-- /.sidebar-collapse -->
			</div>
			<!-- /.navbar-static-side -->
		</nav>
        <div id="page-wrapper">
        <div class="col-md-12 graphs">
	   <div class="xs">
  	 <h3>Inactive Users</h3>
  	   
    <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
				<div class="panel-body no-padding">
					<table class="table table-striped">
						<thead>
							<tr class="warning">
								<th>#</th>
								<th>Username</th>
								<th>View</th>
								<th>Activate</th>
							</tr>
						</thead>
						<tbody>
						<?php 
									while($row = mysqli_fetch_assoc($result)){
						?>
									<tr>
										<td><?php echo $n++;?></td>
										<td style="color: #FBC02D"><?php echo $row['username']?></td>
										<td><a href="viewUserDetails.php?id=<?php echo $row['uid']?>"><img src="images/View.png" alt="" width="18px" height="18px"/></a></td>
										<td><a href="viewInactiveUsers.php?id=<?php echo $row['uid']?>" onclick="return confirm('Are you sure you want to ACTIVATE without Reviewing?')"><img src="images/activate.png" alt="" width="18px" height="18px"/></a></td>
									</tr>	
						<?php 			
									}
						?>						
						</tbody>
					</table>
				</div>
	</div>
	
  </div>
  <br/><br/><br/><br/><br/>
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