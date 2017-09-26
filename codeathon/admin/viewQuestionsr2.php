<?php 
	session_start();
	if(isset($_SESSION['id'])){	
	
	require "conn.php";
	
	$query = "SELECT * FROM question WHERE round_type=2";
	
	$result = mysqli_query($conn, $query);
	$n = 1;
		
	if(isset($_GET['delete'])){
		if(mysqli_query($conn, "DELETE FROM question WHERE id=".$_GET['delete'])){
			?>
			   			<script>
			   				alert("Record Sucessfully Deleted...");
			   			</script>
			<?php  			
			header("Refresh:0; url=viewQuestionsr2.php");
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

<style>
.dropbtn {
    background-color: #06D995;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #3e8e41;
}

.dropdown {}

.dropdown-content {
    display: none;
    background-color: #f9f9f9;
    min-width: 160px;
    max-width: 120px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    right: 0;
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #f1f1f1}

.show {display:block;}
</style>


<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Code-A-Thon</a>
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
  	 <h3>Questions for Round-2</h3>
  	<div class="dropdown">
		<button onclick="myFunction()" class="dropbtn">Change Round &#9661;</button>
		  <div id="myDropdown" class="dropdown-content">
		    <a href="viewQuestionsr1.php">Round-1</a>
		    <a href="viewQuestionsr2.php">Round-2</a>
		    <a href="viewQuestionsr3.php">Round-3</a>
		  </div>
		</div>
	
	<div class="bs-example4" data-example-id="simple-responsive-table">
    
    <div class="table-responsive">
      <table class="table table-bordered">
        <thead style="background-color: #004d40;">
          <tr>
            <th style="color: #ffffff">#</th>
            <th style="color: #ffffff">Question</th>
            <th style="color: #ffffff">Delete</th>
          </tr>
        </thead>
        <tbody>
        
        <?php 
        	while($row = mysqli_fetch_assoc($result)){
        		$question = $row['question'];
        ?>		
        		<tr>
		            <th scope="row"><?php echo $n++;?></th>
		            <td><?php echo $question;?></td>
		            <td><a href="viewQuestionsr2.php?delete=<?php echo $row['id']?>" onclick="return confirm('Are you sure you want to delete?')"><img src="images/delete.png" alt="" width="18px" height="18px"/></a></td>
	          	</tr>
        <?php 		
        	}
        ?>
        </tbody>
      </table>
    </div><!-- /.table-responsive -->
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