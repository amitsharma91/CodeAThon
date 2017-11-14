<?php 
	session_start();
	require 'conn.php';
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
<!-- <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'> -->
<!---//webfonts--->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<script type="text/javascript">
function AllowOnlyNumbers(alphanumbericChar)
{
	var txtPin_No = document.getElementById("r2");
	var txtContactNumber = document.getElementById("r3");
	var value1 = txtPin_No.value;
	var value2 = txtContactNumber.value;
	var m_strOut1 = new String(value1);
	var m_strOut2 = new String(value2);

	txtPin_No.value = m_strOut1.replace(/[^0-9]/g,'');
	txtContactNumber.value = m_strOut2.replace(/[^0-9]/g,'');
	return m_strOut;
 
}

function validate_r2()
{
	var mark2 = document.getElementById("r2"); 
	var textLength=mark2.value;
	if(textLength > 20)
	{
		alert("Value cannot be more than 20");
		mark2.value = "";
		mark2.focus();
	}
}

function validate_r3()
{
	var mark3 = document.getElementById("r3"); 
	var textLength=mark3.value;
	if(textLength > 10)
	{
		alert("Value cannot be more than 10");
		mark3.value = "";
		mark3.focus();
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
					<h3>Student Test Details</h3>
					<form method="POST" action="updateMarks_admin.php">

						<div class="bs-example4" data-example-id="contextual-table">
							<h3>Round 1</h3>
							<?php 
								$round1_row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM round1 WHERE uid=".$_GET['uid']));
							?>
							<input type="hidden" name="r1" value="<?php echo $round1_row['total_marks'];?>"/>
							<input type="hidden" name="uid" value="<?php echo $_GET['uid'];?>"/>
							<b style='color: #009688; font-family: arial;'>Marks Scored:</b>  ## / 20	
						</div>
	
	
						<div class="panel-body1">
							<h3>Round 2</h3>
							<?php 
								$round2_row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM round2,question WHERE round2.que_id = question.id AND uid=".$_GET['uid']));
							?>			
							<b style='color: #009688; font-family: arial;'>Question:</b>
							<pre><?php echo $round2_row['question']?></pre>	
							<b style='color: #009688; font-family: arial;'>Program:</b>
							<pre><?php echo $round2_row['ans'];?></pre>		
							<b style='color: #009688; font-family: arial;'>Output:</b>
							<pre><?php echo $round2_row['output']?></pre>
							<br/>
							<b style='color: #009688; font-family: arial;'>Update Marks:</b> <input type="text" name="r2" id="r2" maxlength="2" size="2" required="required" onkeyup="return AllowOnlyNumbers(this);" onBlur="validate_r2();"/> / 20
						</div>
	
						<div class="panel-body1">
							<h3>Round 3</h3>
							<?php 
								$round3_row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM round3,question WHERE round3.que_id = question.id AND uid=".$_GET['uid']));
							?>
							<b style='color: #009688; font-family: arial;'>Question:</b>
							<pre><?php echo $round3_row['question']?></pre>	
							<b style='color: #009688; font-family: arial;'>Answer:</b>
							<pre><?php echo $round3_row['ans']?></pre>
							<br/>
							<b style='color: #009688; font-family: arial;'>Update Marks:</b> <input type="text" name="r3" id="r3" maxlength="2" size="2" required="required" onkeyup="return AllowOnlyNumbers(this);" onBlur="validate_r3();"/> / 10
						</div>
						
						<div>
							<button class="btn-success btn" style="display: block; margin: 0 auto;margin-top: 10px;">Update Marks</button>
						</div>

					</form>


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
	<link href="css/custom.css" rel="stylesheet"/>
	<!-- Metis Menu Plugin JavaScript -->
	<script src="js/metisMenu.min.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>
