<?php
	session_start();
	
	$from_time3 = date('Y-m-d H:i:s');
	$to_time3 = $_SESSION['end_time3'];
	
	$timefirst3 = strtotime($from_time3);
	$timesecond3 = strtotime($to_time3);
	
	$differenceinseconds3 = $timesecond3 - $timefirst3;
	$_SESSION['seconds3'] = $differenceinseconds3;
	
	echo gmdate("H:i:s",$_SESSION['seconds3'])."<br/>";
	if($_SESSION['seconds3'] <= 0){
		$_SESSION['timer_status3'] = "off";
		header('Refresh:0');
		header('Location: round3End.php');
	}
?>