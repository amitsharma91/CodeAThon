<?php
	session_start ();
	require 'conn.php';
	
	// For Timer****************************
	$duration2 = "";
	$res = mysqli_query ( $conn, "SELECT * FROM timer WHERE round_type=2" );
	while ( $row = mysqli_fetch_assoc ( $res ) ) {
		$duration2 = $row ['duration'];
	}
	echo "<br/>Query ok";
	$_SESSION ['duration2'] = $duration2;
	echo "<br/>duration set to session: " . $_SESSION ['duration2'];
	$_SESSION ['start_time2'] = date ( "Y-m-d H:i:s" );
	$end_time2 = $end_time2 = date ( 'Y-m-d H:i:s', strtotime ( '+' . $_SESSION ['duration2'] . 'minutes', strtotime ( $_SESSION ['start_time2'] ) ) );
	$_SESSION ['end_time2'] = $end_time2;
	echo "<br/>start time and end time set: " . $_SESSION ['start_time2'] . " == " . $_SESSION ['end_time2'];
	
	$_SESSION ['timer_status2'] = "on";
	echo "<br/>timer status on: " . $_SESSION ['timer_status2'];
	// End of Timer part********************
	echo "<a href='logout.php'>Logout</a>";
	header('Location: round2.php');
?>