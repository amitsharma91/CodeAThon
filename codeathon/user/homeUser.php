<?php
session_start () or die ( "Failed to init session" );
if (isset ( $_SESSION ['id'] )) {
	require 'conn.php';
	
	$query = "SELECT active FROM user WHERE username='" . $_SESSION ['username'] . "'";
	
	$result = mysqli_fetch_assoc ( mysqli_query ( $conn, $query ) );
	?>

<!doctype html>
<html class="no-js" lang="en">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Code A Thon</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="favicon.ico">

<!--Google Font link-->
<!-- <link
	href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
	rel="stylesheet"> -->


<link rel="stylesheet" href="assets/css/slick/slick.css">
<link rel="stylesheet" href="assets/css/slick/slick-theme.css">
<link rel="stylesheet" href="assets/css/animate.css">
<link rel="stylesheet" href="assets/css/iconfont.css">
<link rel="stylesheet" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/bootstrap.css">
<link rel="stylesheet" href="assets/css/magnific-popup.css">
<link rel="stylesheet" href="assets/css/bootsnav.css">

<!-- xsslider slider css -->


<!--<link rel="stylesheet" href="assets/css/xsslider.css">-->




<!--For Plugins external css-->
<!--<link rel="stylesheet" href="assets/css/plugins.css" />-->

<!--Theme custom css -->
<link rel="stylesheet" href="assets/css/style.css">
<!--<link rel="stylesheet" href="assets/css/colors/maron.css">-->

<!--Theme Responsive css-->
<link rel="stylesheet" href="assets/css/responsive.css" />

<script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

	<script type="text/javascript"> 
		history.pushState(null, null, location.href);
	    window.onpopstate = function () {
	        history.go(1);
	    };
	</script>

</head>

<body data-spy="scroll" data-target=".navbar-collapse">
<script type="text/javascript">
	    window.onload = function () {
	        document.onkeydown = function (e) {
	            return (e.which || e.keyCode) != 116;
	        };
	    }
	</script>

	<!-- Preloader -->
	<div id="loading">
		<div id="loading-center">
			<div id="loading-center-absolute">
				<div class="object" id="object_one"></div>
				<div class="object" id="object_two"></div>
				<div class="object" id="object_three"></div>
				<div class="object" id="object_four"></div>
			</div>
		</div>
	</div>
	<!--End off Preloader -->


	<div class="culmn">
		<!--Home page style-->


		<nav class="navbar navbar-default bootsnav navbar-fixed">
			<!-- <div class="navbar-top bg-grey fix">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="navbar-callus text-left sm-text-center">
								<ul class="list-inline">
									<li><a href=""><i class="fa fa-phone"></i> Call us: 1234 5678
											90</a></li>
									<li><a href=""><i class="fa fa-envelope-o"></i> Contact us:
											your@email.com</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-6">
							<div class="navbar-socail text-right sm-text-center">
								<ul class="list-inline">
									<li><a href=""><i class="fa fa-facebook"></i></a></li>
									<li><a href=""><i class="fa fa-twitter"></i></a></li>
									<li><a href=""><i class="fa fa-linkedin"></i></a></li>
									<li><a href=""><i class="fa fa-google-plus"></i></a></li>
									<li><a href=""><i class="fa fa-behance"></i></a></li>
									<li><a href=""><i class="fa fa-dribbble"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div> -->

			<!-- Start Top Search -->
			<!-- <div class="top-search">
				<div class="container">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-search"></i></span>
						<input type="text" class="form-control" placeholder="Search"> <span
							class="input-group-addon close-search"><i class="fa fa-times"></i></span>
					</div>
				</div>
			</div> -->
			<!-- End Top Search -->


			<div class="container">
				<!-- <div class="attr-nav">
					<ul>
						<li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
					</ul>
				</div> -->

				<!-- Start Header Navigation -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse"
						data-target="#navbar-menu">
						<i class="fa fa-bars"></i>
					</button>
					<a class="navbar-brand" href="#brand"> <img
						src="assets/images/code_logo.png"
						style="width: 132px; height: 35;" class="logo" alt=""> <!--<img src="assets/images/footer-logo.png" class="logo logo-scrolled" alt="">-->
					</a>

				</div>
				<!-- End Header Navigation -->

				<!-- navbar menu -->
				<div class="collapse navbar-collapse" id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#home">Home</a></li>
						<!-- <li><a href="#features">About</a></li>
						<li><a href="#business">Service</a></li>
						<li><a href="#work">Portfolio</a></li> -->
						<li><a style="color: #00BCD4;"><?php echo "[ ".$_SESSION['username']." ]";?></a></li>
						<li><a href="logout.php"
							onclick="return confirm('Are you sure you want to LOGOUT?')">Logout</a></li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>

		</nav>

		<!--Home Sections-->

		<section id="home" class="home bg-black fix">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="main_home text-center">
						<div class="col-md-12">
							<div class="">
								
							<?php
	if ($result ['active'] == 'yes') {
		?>
								<div class="slid_item">
									<div class="home_text ">
										<h2 class="text-white">
											Welcome to <strong>Code-A-Thon</strong>
										</h2>
										<h1 class="text-white">Your Account is Activated</h1>
								<?php
		$status = mysqli_fetch_assoc ( mysqli_query ( $conn, "SELECT status FROM exam_result WHERE uid=" . $_SESSION ['user_id'] ) );
		if ($status ['status'] == "not done") {
			?>
							<h3 class="text-white">
										- Already given exam, wait until <strong>RESULT</strong> is Announced -
									</h3>
										</div>
								<?php
		} else {
			?>												
										<h3 class="text-white">
										- Click below to <strong>START</strong> Exam -
									</h3>
								</div>

								<div class="home_btns m-top-40">
									<a href="examNote.php"
										class="btn btn-primary m-top-20">Start Exam</a>
								</div>
								<?php }?>	
								
								</div>
							<?php
	} else if ($result ['active'] == 'no') {
		?>
								<div class="slid_item">
								<div class="home_text ">
									<h2 class="text-white">
										Welcome to <strong>Code-A-Thon</strong>
									</h2>
									<h1 class="text-white">Your Account is NOT Activated</h1>
									<h3 class="text-white">
										- activation <strong>PENDING</strong> from Admin-
									</h3>
								</div>
							</div>
							<?php
	}
	?>
								<!-- End off slid item -->
						</div>
					</div>

				</div>


			</div>
			<!--End off row-->
	
	</div>
	<!--End off container -->
	</section>
	<!--End off Home Sections-->



	<!--Featured Section-->
	<section id="features" class="features">
		<div class="container">
			<div class="row">
				<div class="main_features fix roomy-70">
					<div class="col-md-4">
						<div class="features_item sm-m-top-30">
							<div class="f_item_icon">
								<i class="fa fa-sliders"></i>
							</div>
							<div class="f_item_text">
								<h3>Round 1 Test</h3>
								<p style="text-align: justify;">
									This round will contain Multiple Choice Questions. There will
									be 20 Questions in allfor this Round. <b
										style='color: #009688; font-family: arial;'>Time Limit: 30
										mins</b>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="features_item sm-m-top-30">
							<div class="f_item_icon">
								<i class="fa fa-tablet"></i>
							</div>
							<div class="f_item_text">
								<h3>Round 2 Test</h3>
								<p style="text-align: justify;">
									This round will be a program round. Need to write program for
									certain question, in the given compiler. <b
										style='color: #009688; font-family: arial;'>Time Limit: 45
										mins</b>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="features_item sm-m-top-30">
							<div class="f_item_icon">
								<i class="fa fa-thumbs-o-up"></i>
							</div>
							<div class="f_item_text">
								<h3>Round 3 Test</h3>
								<p style="text-align: justify;">
									In this round we will show a program. you need to simply
									identify the possible output of it.<b
										style='color: #009688; font-family: arial;'>Time Limit: 15
										mins</b>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End off row -->
		</div>
		<!-- End off container -->
	</section>
	<!-- End off Featured Section-->






	<footer id="contact" class="footer action-lage bg-black p-top-80">
		<div class="main_footer   text-center">
			<p>
				Copyright &copy; 2017 Code - A - Thon. All Rights Reserved | Design
				by <a target="_blank">Students</a>
			</p>
		</div>
	</footer>

	</div>

	<!-- JS includes -->

	<script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
	<script src="assets/js/vendor/bootstrap.min.js"></script>

	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/jquery.magnific-popup.js"></script>
	<script src="assets/js/jquery.easing.1.3.js"></script>
	<script src="assets/css/slick/slick.js"></script>
	<script src="assets/css/slick/slick.min.js"></script>
	<script src="assets/js/jquery.collapse.js"></script>
	<script src="assets/js/bootsnav.js"></script>



	<script src="assets/js/plugins.js"></script>
	<script src="assets/js/main.js"></script>
<?php
} else {
	?>
	<script>
		alert("Please Login as User");
	</script>
<?php
	header("Refresh:0; url=index.php");
	}
?>
</body>
</html>