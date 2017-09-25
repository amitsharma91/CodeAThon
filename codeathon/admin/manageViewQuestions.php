<?php
	session_start() or die("FAILED to Start Session");
	
	if (isset ( $_POST ['nextView'] )) {
	$page = $_POST ['round'];
	// echo "round: ".$page;
	if ($page == 1) {
		header ( 'Location: viewQuestionsr1.php' );
	} else if ($page == 2) {
		header ( 'Location: viewQuestionsr2.php' );
	} else if ($page == 3) {
		// echo "round: ".$page;
		header ( 'Location: viewQuestionsr3.php' );
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
<title>Manage Questions</title>
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
						<li><a href="index.html"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
						</li>
						<li><a href="#"><i class="fa fa-laptop nav_icon"></i>Layouts<span
								class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li><a href="grids.html">Grid System</a></li>
							</ul> <!-- /.nav-second-level --></li>
						<li><a href="#"><i class="fa fa-indent nav_icon"></i>Menu Levels<span
								class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li><a href="graphs.html">Graphs</a></li>
								<li><a href="typography.html">Typography</a></li>
							</ul> <!-- /.nav-second-level --></li>
						<li><a href="#"><i class="fa fa-envelope nav_icon"></i>Mailbox<span
								class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li><a href="inbox.html">Inbox</a></li>
								<li><a href="compose.html">Compose email</a></li>
							</ul> <!-- /.nav-second-level --></li>
						<li><a href="widgets.html"><i class="fa fa-flask nav_icon"></i>Widgets</a>
						</li>
						<li><a href="#"><i class="fa fa-check-square-o nav_icon"></i>Questions<span
								class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li><a href="manageQuestions.php">Manage Questions</a></li>
								<li><a href="manageViewQuestions.php">View Questions</a></li>
							</ul> <!-- /.nav-second-level --></li>
						<li><a href="#"><i class="fa fa-table nav_icon"></i>Tables<span
								class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li><a href="basic_tables.html">Basic Tables</a></li>
							</ul> <!-- /.nav-second-level --></li>
						<li><a href="#"><i class="fa fa-sitemap fa-fw nav_icon"></i>Css<span
								class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li><a href="media.html">Media</a></li>
								<li><a href="login.html">Login</a></li>
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
					<h3>Select Round to View Questions</h3>
					<div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" method="POST"
								action="<?php echo $_SERVER['PHP_SELF'];?>">

								<div class="form-group">
									<label for="radio" class="col-sm-2 control-label">Select Round:</label>
									<div class="col-sm-8">
										<div class="radio block">
											<label><input type="radio" name="round" value="1"
												checked="checked"> Round 1</label>
										</div>
										<div class="radio block">
											<label><input type="radio" name="round" value="2"> Round 2</label>
										</div>
										<div class="radio block">
											<label><input type="radio" name="round" value="3"> Round 3</label>
										</div>
										<br />
										<button name="nextView" class="btn-default btn">Proceed</button>
									</div>
								</div>

							</form>
						</div>
					</div>

					<div class="bs-example"
						data-example-id="form-validation-states-with-icons">
						<div class="panel-footer">
							<div class="row">
								<div class="col-sm-8 col-sm-offset-2"></div>
							</div>
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
