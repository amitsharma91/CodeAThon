<?php
session_start ();
require 'conn.php';
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Code A Thon</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords"
	content="code a thon,Code-A-Thon,Code Marathon,Code,Thon,Coding Competition," />
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
								<li><a href="changePassword.php">Change Password</a></li>
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
			<div class="col-md-12 graphs">
				<div class="xs">
					<h3>Exam Result</h3>
					
					<?php
					$query_count = mysqli_query ( $conn, "SELECT * FROM exam_result WHERE status='not done'" );
					$count_row_isnull = mysqli_fetch_assoc ( mysqli_query ( $conn, "SELECT count(*) FROM exam_result" ) );
					$count_row = mysqli_num_rows ( $query_count );
					// echo "count: ".$count_row;
					// if(!$count_row_isnull){echo 'empty';}else{echo 'not empty';}
					if (! $count_row_isnull) {
						echo "There are no records to display";
					} else {
						if ($count_row == 0) {
							?>
					<div class="panel panel-warning"
						data-widget="{&quot;draggable&quot;: &quot;false&quot;}"
						data-widget-static="">
						<div style="">
							<h4 style="color: red; text-align: center; margin-top: 10px;">Result is as Follows:</h4>
						</div>
						<div class="panel-body no-padding">
							<table class="table table-striped">
								<thead>
									<tr class="warning">
										<th>#</th>
										<th>Username</th>
										<th>Total Marks</th>
									</tr>
								</thead>
								<tbody>
								<?php 
									$x=1;
									$result_final = mysqli_query($conn , "select * from exam_result,user where exam_result.uid = user.uid AND status='done' order by result desc");
									while($row = mysqli_fetch_assoc($result_final)){
								?>
									<tr style="<?php if($x <= 3){?>background-color: #81c784;<?php }?>">
										<td style="<?php if($x <= 3){?>color: #ffffff;<?php }?>"><?php echo $x;?></td>
										<td style="<?php if($x <= 3){?>color: #ffffff;<?php }?>"><?php echo $row['username']?></td>
										<td style="<?php if($x <= 3){?>color: #ffffff;<?php }?>"><?php echo $row['result']?></td>
									</tr>
								<?php
									$x++;
									}
								?>
									
								</tbody>
							</table>
						</div>
					</div>
													<?php
						} else if ($count_row > 0) {
							?>
						<div class="panel panel-warning"
						data-widget="{&quot;draggable&quot;: &quot;false&quot;}"
						data-widget-static="">
						<div style="">
							<h4 style="color: red; text-align: center; margin-top: 10px;">Result
								won't be displayed until, all marks are updated.</h4>
						</div>
						<div class="panel-body no-padding">
							<table class="table table-striped">
								<thead>
									<tr class="warning">
										<th>#</th>
										<th>Username</th>
										<th>Update Marks</th>
									</tr>
								</thead>
								<tbody>
									<?php
							$result = mysqli_query ( $conn, "SELECT * FROM user,exam_result WHERE exam_result.uid = user.uid AND status = 'not done'" );
							$n = 1;
							while ( $row = mysqli_fetch_assoc ( $result ) ) {
								?>
										<tr>
										<td><?php echo $n++;?></td>
										<td><?php echo $row['username'];?></td>
										<td><a
											href="viewExamDetails_admin.php?uid=<?php echo $row['uid'];?>"><img
												src="images/update.png" alt="" width="18px" height="18px" /></a></td>
									</tr>
									<?php
							}
							?>
									</tbody>
							</table>
						</div>
					</div>
					<?php
						}
					}
					?>
					
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
