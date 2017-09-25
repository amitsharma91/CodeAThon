<?php
$server_name = "localhost";
$DB_User = "root";
$DB_Pass = "root";
$DB_Name = "codeathon";

$conn = mysqli_connect ( $server_name, $DB_User, $DB_Pass, $DB_Name ) or die ( "problem establishing connection.<br/>ERROR: " . mysqli_errno () );

?>