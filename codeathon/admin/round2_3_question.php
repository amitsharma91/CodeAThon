<?php 
	session_start();
	if(isset($_SESSION['id'])){
	
	$type = $_SESSION['type'];
// 	echo "type: ".$type;
	$round = "round".$type;
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
 <script>
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

<script type="text/javascript">
	$(document).ready(function() {

		$("textarea").keydown(function(e) {
		    if(e.keyCode === 9) { // tab was pressed
		        // get caret position/selection
		        var start = this.selectionStart;
		            end = this.selectionEnd;

		        var $this = $(this);

		        // set textarea value to: text before caret + tab + text after caret
		        $this.val($this.val().substring(0, start)
		                    + "\t"
		                    + $this.val().substring(end));

		        // put caret at right position again
		        this.selectionStart = this.selectionEnd = start + 1;

		        // prevent the focus lose
		        return false;
		    }
		});

	});
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
					<h3>Round <?php echo $type;?> Question</h3>
					<div class="tab-content">
						<div class="tab-pane active" id="horizontal-form" style="heigth: 100%">
							<form class="form-horizontal" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
								<div class="form-group">
									<label for="txtarea1" class="col-sm-2 control-label">Question</label>
									<div class="col-sm-8">
										<textarea name="question" style="width: 100%;height: 350px" required="required" maxlength="600"
											placeholder="Enter Question here..." class="form-control1" onkeyup="textCounter(this,'counter',600);" id="message"></textarea>
									</div>
									<div class="col-sm-2">
										<p class="help-block">Maximum 600 Characters are Allowed</p>
										<p class="help-block">Characters Remaining: <input disabled  maxlength="3" size="3" value="600" id="counter" style="border:0;background: transparent;"></p>
									</div>
								</div>
							
								<div class="col-sm-8 col-sm-offset-2">
									<button name="<?php echo $round;?>" class="btn-default btn">Add Question</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				
				<?php
				if(isset($_POST['round2'])){
					require "conn.php";
					
					$question = mysqli_real_escape_string($conn, $_POST ['question']);
					
					$query = "INSERT INTO question(question,round_type) VALUES('$question',2)";
					
					if (mysqli_query($conn,$query)) {
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
				else if(isset($_POST['round3'])){
					require "conn.php";
						
					$question = mysqli_real_escape_string($conn, $_POST ['question']);
						
					$query = "INSERT INTO question(question,round_type) VALUES('$question',3)";
						
					if (mysqli_query($conn,$query)) {
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
				
				<br/><br/><br/><br/>
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