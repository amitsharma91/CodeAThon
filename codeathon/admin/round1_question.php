<?php 
	session_start();
	if(isset($_SESSION['id'])){
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

 <script type="text/javascript">
    function validate() {
        var ans = document.getElementById("selector1");
        if (ans.value == "0") {
            //If the "Please Select" option is selected display error.
            alert("Please Select Right Answer!");
            return false;
        }
        return true;
    }


    ///////////////
    
    
	function textCounter(field,field2,maxlimit)
	{
	 var countfield = document.getElementById(field2);
	 if ( field.value.length > maxlimit ) {
	  field.value = field.value.substring( 0, maxlimit );
	  return false;
	 } else {
	  countfield.value = maxlimit - field.value.length;
	 }
	}
</script>


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
			<div class="graphs">
				<div class="xs">
					<h3>Round 1 Question</h3>
					<div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
								<div class="form-group">
									<label for="txtarea1" class="col-sm-2 control-label">Question</label>
									<div class="col-sm-8">
										<textarea name="question" id="txtarea1" style="width: 100%;height: 150%" required="required" maxlength="60"
											placeholder="Enter Question here..." class="form-control1" onkeyup="textCounter(this,'counter',60);" id="message"></textarea>
									</div>
									<div class="col-sm-2">
										<p class="help-block">Maximum 60 Characters are Allowed</p>
										<p class="help-block">Characters Remaining: <input disabled  maxlength="3" size="3" value="60" id="counter" style="border:0;background: transparent;"></p>
									</div>
								</div>

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Option
										1</label>
									<div class="col-sm-8">
										<input type="text" name="opt1" class="form-control1" required="required" maxlength="40"
											id="focusedinput" placeholder="Enter Option 1">
									</div>
								</div>

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Option
										2</label>
									<div class="col-sm-8">
										<input type="text" name="opt2" class="form-control1" required="required" maxlength="40"
											id="focusedinput" placeholder="Enter Option 2">
									</div>
								</div>

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Option
										3</label>
									<div class="col-sm-8">
										<input type="text" name="opt3" class="form-control1" required="required" maxlength="40"
											id="focusedinput" placeholder="Enter Option 3">
									</div>
								</div>

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Option
										4</label>
									<div class="col-sm-8">
										<input type="text" name="opt4" class="form-control1" required="required" maxlength="40"
											id="focusedinput" placeholder="Enter Option 4">
									</div>
								</div>

								<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Answer</label>
									<div class="col-sm-8">
										<select name="answer" id="selector1" class="form-control1">
											<option value="0">Select Right Answer</option>
											<option value="1">Option 1</option>
											<option value="2">Option 2</option>
											<option value="3">Option 3</option>
											<option value="4">Option 4</option>
										</select>
									</div>
									<div class="col-sm-2">
										<p class="help-block">Select Right Answer !</p>
									</div>
								</div>
								<div class="col-sm-8 col-sm-offset-2">
									<button name="submit" class="btn-default btn" onclick="return validate()">Add Question</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				
				<?php
				if(isset($_POST['submit'])){
					
					require "conn.php";
					
					$question = $_POST ['question'];
					$option1 = $_POST ['opt1'];
					$option2 = $_POST ['opt2'];
					$option3 = $_POST ['opt3'];
					$option4 = $_POST ['opt4'];
					$answer = $_POST ['answer'];
					
					$query = "INSERT INTO question_mcq(question,opt1,opt2,opt3,opt4,answer) VALUES('$question','$option1','$option2','$option3','$option4','$answer')";
					
					if (mysqli_query($conn,$query)) {
// 						echo "Question Added Sucessfully....For ROUND 1";
						?>
						<script>
							if (confirm('Question Added Sucessfully....Do you want to add more?')) {
// 							    alert("YES SELECTED...");
							} else {
// 							    alert("NO Selected...");
							    window.location = "manageQuestions.php"
							}
						</script>
				<?php
					} else {
						echo "Some ERROR: " . $conn->error;
					}
				}
				?>
				
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