<?php
	session_start ();
	require 'conn.php';
	
	// For Timer****************************
	$duration3 = "";
	$res = mysqli_query ( $conn, "SELECT * FROM timer WHERE round_type=3" );
	while ( $row = mysqli_fetch_assoc ( $res ) ) {
		$duration3 = $row ['duration'];
	}
	echo "<br/>Query ok";
	$_SESSION ['duration3'] = $duration3;
	echo "<br/>duration set to session: " . $_SESSION ['duration3'];
	$_SESSION ['start_time3'] = date ( "Y-m-d H:i:s" );
	$end_time3 = $end_time3 = date ( 'Y-m-d H:i:s', strtotime ( '+' . $_SESSION ['duration3'] . 'minutes', strtotime ( $_SESSION ['start_time3'] ) ) );
	$_SESSION ['end_time3'] = $end_time3;
	echo "<br/>start time and end time set: " . $_SESSION ['start_time3'] . " == " . $_SESSION ['end_time3'];
	
	$_SESSION ['timer_status3'] = "on";
	echo "<br/>timer status on: " . $_SESSION ['timer_status3'];
	// End of Timer part********************
	echo "<a href='logout.php'>Logout</a>";
	header('Location: round3.php');
?>