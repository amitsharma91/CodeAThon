<?php
session_start();

$from_time1 = date('Y-m-d H:i:s');
$to_time1 = $_SESSION['end_time'];

$timefirst = strtotime($from_time1);
$timesecond = strtotime($to_time1);

$differenceinseconds = $timesecond - $timefirst;
$_SESSION['seconds'] = $differenceinseconds;

echo gmdate("H:i:s",$_SESSION['seconds'])."<br/>";
if($_SESSION['seconds'] <= 0){
	$_SESSION['num'] = 21;
	$_SESSION['timer_status'] = "off";
	header('Refresh:0');
	header('Location: round1End.php');
}
?>