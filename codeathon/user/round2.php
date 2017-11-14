<?php
session_start ();
if (isset ( $_SESSION ['id'] )) {
	require "conn.php";
	
	$current = "";
	$answer = "";
	$username = $_SESSION ['username']; // from session
	$filename = $username . "_code";
	
	if (isset ( $_POST ['execute'] )) {
		$current = $_POST ['cppcode'];
		$extention = $_POST ['lang'];
		$file = "./programs/" . $filename . "" . $extention;
		file_put_contents ( $file, $current );
		
		putenv ( "PATH=C:\Program Files (x86)\Dev-Cpp\MinGW64\bin" ); // setting dev C / C++ path
		
		shell_exec ( "g++ " . $file . " -o " . $filename . ".exe" ); // compilation
		
		if (isset ( $_POST ['needip'] )) {
			// echo "Input is: ".$_POST['cmd_inp'];
			$answer = shell_exec ( $filename . ".exe " . $_POST ['cmd_inp'] ); // executing
		} else {
			$answer = shell_exec ( $filename . ".exe" ); // executing
		}
		$_SESSION ['round2_code'] = $current;
		$_SESSION ['code_output'] = $answer;
	}
	
	if (isset ( $_POST ['submit_code'] )) {
		// echo "output: ".$_POST['cppcode2'];
		if ($_POST ['cppcode2'] == "") {
			echo "<script>alert('output is empty')</script>";
		} else {
			$query_insert_r2 = "INSERT INTO round2(que_id,uid,ans,output,marks,ts) VALUES(" . $_SESSION ['current_qid'] . "," . $_SESSION ['user_id'] . ",'" . $_SESSION ['round2_code'] . "','" . $_SESSION ['code_output'] . "',0,now())";
			echo "<br/>" . $query_insert_r2 . "<br/>";
			if (mysqli_query ( $conn, $query_insert_r2 )) {
				header ( 'Location: end_of_round_2.php' );
			}
		}
	}
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
<script src="assets/js/jquery-3.1.1.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		document.getElementById('needip').onchange = function() {
			document.getElementById('inp').disabled = !this.checked;
		};



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

<script type="text/javascript">
		//for
	    function validate() {
	        var ans = document.getElementById("language");
	        if (ans.value == "0") {
	            //If the "Please Select" option is selected display error.
	            alert("Please Select Some Language!");
	            return false;
	        }
	        return true;
	    }

	    //for button submit_code
	    function validateSubmit(){
// 		    alert("working");
		    var c = document.getElementById('submit_code').value;
		    alert("working..."+c);
		}
</script>


<style type="text/css">
.textarea_code {
	width: 100%;
	height: 400px;
	resize: none;
	outline: none;
	padding: 5px;
	font-family: Tahoma, sans-serif;
	font-size: 18px;
	text-align: justify;
	background-color: #006064;
	color: #FFFFFF;
}
</style>


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

			<!-- Start Top Search -->
			<div class="top-search">
				<div class="container">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-search"></i></span>
						<input type="text" class="form-control" placeholder="Search"> <span
							class="input-group-addon close-search"><i class="fa fa-times"></i></span>
					</div>
				</div>
			</div>
			<!-- End Top Search -->

			<div class="container">

				<!-- Start Header Navigation -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse"
						data-target="#navbar-menu">
						<i class="fa fa-bars"></i>
					</button>
					<a class="navbar-brand" href="#brand"> <img
						src="assets/images/code_logo.png"
						style="width: 132px; height: 35;" class="logo" alt="">
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



		<!--Featured Section-->
		<br />
		<section id="features" class="features">
			<div class="container">
				<div class="row">
					<div class="main_features fix roomy-70">
						<h2>Round 2</h2>
						<div class="col-md-4" style="width: 100%;">
							<div class="features_item sm-m-top-30" style="">
								<div class="">
									<h3>Question:</h3>
									<p>
									
									
									<pre><?php
	if (isset ( $_POST ['execute'] )) {
		$row = mysqli_fetch_assoc ( mysqli_query ( $conn, "SELECT * FROM question WHERE id=" . $_SESSION ['current_qid'] ) );
		echo $row ['question'];
	} else {
		$row = mysqli_fetch_assoc ( mysqli_query ( $conn, "SELECT * FROM question WHERE round_type=2 ORDER BY rand() LIMIT 1" ) );
		echo $row ['question'];
		$_SESSION ['current_qid'] = $row ['id'];
	}
	?></pre>
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


		<!--Business Section-->
		<section id="business" class="business bg-grey roomy-70">

			<!-- Start of Timer Code -->
			<div class="container" style="">
				<div
					style="margin-left: 0px; width: 95px; background-color: #00796B; display: inline;">
					<div id="response2"
						style="background-color: #00796B; text-align: center; display: inline; color: #FFFFFF; font-size: 28px; font-family: arial; padding-left: 5px; padding-right: 5px; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);">
					</div>
				</div>
				<script type="text/javascript">
					setInterval(function(){
						var xmlhttp = new XMLHttpRequest();
						xmlhttp.open("POST","response2.php",false);
						xmlhttp.send(null);
						document.getElementById("response2").innerHTML = xmlhttp.responseText;	
					},1000);
				</script>
			</div>
			<!-- End of Timer Code -->

			<div class="container" style="background-color: #B2DFDB;">
				<b>NOTE:</b><br /> 1) Select Language to write code. Only
				Command-Line Input is allowed.<br /> 2) Please select 'Provide
				Input' before giving <i>[Command-Line Input]</i>.<br />
			</div>
			<div class="container">
				<div class="row">
					<div class="main_business">
						<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
							<div class="col-md-6">
								<div class="">
									<div class="slid_shap bg-grey"></div>
									<div class=" text-center" style="color: #004D40;">
										Select Language: <select name="lang" id="language">
											<option value="0">Select Right Answer</option>
											<option value=".c">C</option>
											<option value=".cpp">C++</option>
										</select>
										<textarea class="textarea_code" name="cppcode"
											required="required" placeholder="Type program here...."><?php echo $current; ?></textarea>
									</div>
									<div class="business_btn" style="">
										<input class="btn btn-primary m-top-20" type="submit"
											value="Execute" name="execute"
											style="display: block; margin: 0 auto;"
											onclick="return validate();" />
									</div>
								</div>
							</div>

							<div class="col-md-6">
								<div class="business_item sm-m-top-50">
									<h2 class="text-uppercase">
										<strong>Output</strong>
									</h2>

									<input type="checkbox" id="needip" name="needip" /> Provide
									Input <input type="text"
										style="margin-top: 9px; background-color: #00838F; height: 44px;"
										id="inp" name="cmd_inp" class="textarea_code"
										disabled="disabled" placeholder="Command-Line input here...." />

									<textarea
										style="margin-top: 9px; background-color: #00838F; height: 324px;"
										name="cppcode2" class="textarea_code" readonly="readonly"
										placeholder="Output displayed here...."><?php echo $answer; ?></textarea>
									<div class="business_btn" style="padding-left: 10px;"></div>

									<div class="business_btn" style="">
										<input class="btn btn-primary m-top-20" type="submit"
											value="Submit Code" name="submit_code" id="submit_code"
											style="display: block; margin: 0 auto;"
											onclick="return confirm('This will SUBMIT your code?')" />
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<!-- End off Business section -->

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
