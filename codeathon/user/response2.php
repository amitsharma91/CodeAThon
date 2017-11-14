<?php
session_start();

$from_time2 = date('Y-m-d H:i:s');
$to_time2 = $_SESSION['end_time2'];

$timefirst2 = strtotime($from_time2);
$timesecond2 = strtotime($to_time2);

$differenceinseconds2 = $timesecond2 - $timefirst2;
$_SESSION['seconds2'] = $differenceinseconds2;

echo gmdate("H:i:s",$_SESSION['seconds2'])."<br/>";
if($_SESSION['seconds2'] <= 0){
	$_SESSION['timer_status2'] = "off";
	header('Refresh:0');
	header('Location: round2End.php');
}
?>