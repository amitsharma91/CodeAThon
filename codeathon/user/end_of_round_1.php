<?php
session_start ();
if(isset($_SESSION['id'])){
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

		<!--Business Section-->
		<section id="business" class="business bg-grey roomy-70">
			<br />
			<div class="container">
				<div class="row">
					<div class="main_business">



						<div class="col-md-6">
							<div class="business_item sm-m-top-50">
								<h2 class="text-uppercase">
									<strong style="font-family: arial;">End Round-1</strong> Test
								</h2>
								
								<?php
								// This part displayed when All Questions are done
								// echo "Test Over...<br/>End Test<br/>";
								// echo "<br/>Question Set: ".$_SESSION['que_set']."<br/>Ans Set: ".print_r($_SESSION['ans'])."<br/>";
								$queset = explode ( ', ', $_SESSION ['que_set'] );
								// echo print_r($queset)."<br/>";
								
								$_SESSION ['result'] = convert_to_assoc ( $queset, $_SESSION ['ans'] );
								
								foreach ( $_SESSION ['result'] as $key => $value ) {
									if (is_null ( $value ) || $value == '')
										unset ( $_SESSION ['result'] [$key] );
								}
								
// 								echo var_dump($_SESSION['result'])."<br/>";
								
								echo "<h5>Number of questions attempted: <b style='color: #009688;font-family: arial;'>" . count ( $_SESSION ['result'] ) . "</b></h5>";
								
								// imploding result assoc array
								
								$result_str = implode ( ', ', array_map_assoc ( $_SESSION ['result'] ) );
								
// 								echo "<br/>Final Result: ".$result_str."</br>";
								
								$_SESSION ['total_marks'] = 0;
								
								$_SESSION ['total_marks'] = count_total_marks ( $_SESSION ['result'], $conn );
								
								// Enter Marks into database
								$round_1_query = "INSERT INTO round1(answers,total_marks,uid,ts) VALUES('" . $result_str . "'," . $_SESSION ['total_marks'] . "," . $_SESSION ['user_id'] . ",now())";
// 								echo "<br/>" . $round_1_query . "<br/>" . strlen ( $result_str ) . "<br/>";
								
								if (mysqli_query ( $conn, $round_1_query )) {
									//echo "<h5>Total Marks in Round-1: " . $_SESSION ['total_marks'] . "</h5>";
// 									echo "<h5>click <a href='round2.php' style='text-decoration: underline;'>here</a> to proceed to <b style='color: #009688;font-family: arial;'>Round-2</b>" . "</h5>";
									echo "<h5>click <a href='round_2_timer_init.php' style='text-decoration: underline;'>here</a> to proceed to <b style='color: #009688;font-family: arial;'>Round-2</b>" . "</h5>";
								}								
								// END of Enter Marks into database
								
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

		<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
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
	}else{
?>
	<script>
		alert("Please Login as USER");
	</script>
<?php
	header("Refresh:0; url=index.php");
	}
?>
</body>
</html>