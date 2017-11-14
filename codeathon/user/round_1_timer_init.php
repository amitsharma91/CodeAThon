<?php
session_start ();
if (isset ( $_SESSION ['id'] )) {
	require 'conn.php';
	
	$_SESSION ['query'] = "SELECT  * FROM question_mcq ORDER by RAND() LIMIT 1";
	$_SESSION ['num'] = 1;
	
	// For Timer****************************
	$duration = "";
	$res = mysqli_query ( $conn, "SELECT * FROM timer WHERE round_type=1" );
	while ( $row = mysqli_fetch_assoc ( $res ) ) {
		$duration = $row ['duration'];
	}
	echo "<br/>Query ok";
	$_SESSION ['duration'] = $duration;
	echo "<br/>duration set to session: " . $_SESSION ['duration'];
	$_SESSION ['start_time'] = date ( "Y-m-d H:i:s" );
	$end_time = $end_time = date ( 'Y-m-d H:i:s', strtotime ( '+' . $_SESSION ['duration'] . 'minutes', strtotime ( $_SESSION ['start_time'] ) ) );
	$_SESSION ['end_time'] = $end_time;
	echo "<br/>start time and end time set: " . $_SESSION ['start_time'] . " == " . $_SESSION ['end_time'];
	
	$_SESSION ['timer_status'] = "on";
	echo "<br/>timer status on: " . $_SESSION ['timer_status'];
	// End of Timer part********************
	header ( 'Location: fetchRound1Questions.php' );
} else {
	?>
<script>
		alert("Please Login as USER");
	</script>
<?php
	header ( "Refresh:0; url=index.php" );
}
?>