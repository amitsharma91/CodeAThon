<?php
session_start ();
if (isset ( $_SESSION ['id'] )) {
	include 'mylib.php';
	require "conn.php";
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

<script>
	function send() {
		var opt = document.getElementsByName("option");
		if (opt[0].checked == true || opt[1].checked == true || opt[2].checked == true || opt[3].checked == true) {
			
		} else {
			// no checked
			var msg = '<span style="color:red;">You must select some option!</span><br /><br />';
			document.getElementById('msg').innerHTML = msg;
			return false;
		}
		return true;
	}
	function reset_msg() {
		document.getElementById('msg').innerHTML = '';
	}
</script>
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
	<!-- <div id="loading">
		<div id="loading-center">
			<div id="loading-center-absolute">
				<div class="object" id="object_one"></div>
				<div class="object" id="object_two"></div>
				<div class="object" id="object_three"></div>
				<div class="object" id="object_four"></div>
			</div>
		</div>
	</div> -->
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
                                        <li><a href=""><i class="fa fa-phone"></i> Call us: 1234 5678 90</a></li>
                                        <li><a href=""><i class="fa fa-envelope-o"></i> Contact us: your@email.com</a></li>
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
						<li><a style="color: #00BCD4;"><?php echo "[ ".$_SESSION['username']." ]";?></a></li>
						<li><a href="logout.php"
							onclick="return confirm('Are you sure you want to LOGOUT?')">Logout</a></li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>

		</nav>

		<!--Business Section-->
		<section id="business" class="business bg-grey roomy-70">
			<br />
			<div class="container">
				<div class="row">
					<div class="main_business">

						<!-- Start of Timer Code -->
						<div
							style="margin-left: 15px; width: 95px; background-color: #00796B; display: inline;">
							<div id="response"
								style="background-color: #00796B; text-align: center; display: inline; color: #FFFFFF; font-size: 28px; font-family: arial; padding-left: 5px; padding-right: 5px; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);">
							</div>
						</div>
						<script type="text/javascript">
							setInterval(function(){
								var xmlhttp = new XMLHttpRequest();
								xmlhttp.open("POST","response.php",false);
								xmlhttp.send(null);
								document.getElementById("response").innerHTML = xmlhttp.responseText;	
							},1000);
						</script>
						<!-- End of Timer Code -->

						<div class="col-md-6" style="width: 100%">
							<div class="business_item sm-m-top-50">
								<h2 class="text-uppercase" style="margin-top: 14px;">
									<strong style="font-family: arial;">Round-1</strong> Test
								</h2>
								
								<?php
	// initialize User Options in Session
	if (! isset ( $_SESSION ['ans'] )) {
		$_SESSION ['ans'] = array ();
	}
	
	// Fetching New Question
	$row = mysqli_fetch_assoc ( mysqli_query ( $conn, $_SESSION ['query'] ) );
	
	// Storing User Options in Session
	if (isset ( $_POST ['nxt'] ) && $_SESSION ['timer_status'] == "on") {
		// echo " => ".$_POST['option']."<br/>";
		// if($_POST['option'] != null){
		array_push ( $_SESSION ['ans'], $_POST ['option'] );
	}
	// Execute Untill number of questions reaches MAX
	if ($_SESSION ['num'] <= 20) {
		?>
								<!-- Display Random Question with Option -->
								<h3 style="color: #26A69A;">Question no: <?php echo $_SESSION['num']++;?></h3>
								<br />

								<form action="fetchRound1Questions.php" method="post"
									onsubmit="return validateForm()">
									<h5 style="">
										<pre
											style="border: 0px none transparent; font-size: 15px; font-weight: bold; margin-left: -5px;"><?php echo $row['question'];?></pre>
									</h5>
									<br />
									<h5 style="">
										<b style="color: #009688;">Option 1:</b> <input type="radio"
											name="option" value="1" style="margin-right: 8px;" /><?php echo $row['opt1'];?></h5>
									<h5 style="">
										<b style="color: #009688;">Option 2:</b> <input type="radio"
											name="option" value="2" style="margin-right: 8px;" /><?php echo $row['opt2'];?></h5>
									<h5 style="">
										<b style="color: #009688;">Option 3:</b> <input type="radio"
											name="option" value="3" style="margin-right: 8px;" /><?php echo $row['opt3'];?></h5>
									<h5 style="">
										<b style="color: #009688;">Option 4:</b> <input type="radio"
											name="option" value="4" style="margin-right: 8px;" /><?php echo $row['opt4'];?></h5>

									<div id="msg"></div>

									<input class="btn btn-primary m-top-20" type="submit"
										value="NEXT >>" name="nxt" onclick="return send();" />
								</form>	
								
								<?php
		// Post Question Display Part
		if (! isset ( $_SESSION ['que'] )) {
			$_SESSION ['que'] = array ();
		}
		
		$_SESSION ['que'] [] = $row ['id'];
		$que_id = $row ['id'];
		
		$session = implode ( ", ", $_SESSION ['que'] );
		// Updating Query
		$_SESSION ['query'] = "SELECT * FROM question_mcq WHERE id NOT IN (" . $session . ") ORDER BY RAND() LIMIT 1";
		
		// echo "<br/>QUERY IS: ".$_SESSION['query'] ;
		$_SESSION ['que_set'] = $session;
	}  // Endf of if{}
else {
		
		?>
			<script type="text/javascript">
				window.location.href = "end_of_round_1.php";
			</script>
	<?php
	}
	?>
								

							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End off Business section -->


		<!--Test section-->
		<!-- End off test section -->


		<!--Brand Section-->
		<section id="brand" class="brand fix"></section>
		<!-- End off Brand section -->





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
		alert("Please Login as USER");
	</script>
<?php
	header ( "Refresh:0; url=index.php" );
}
?>
</body>
</html>