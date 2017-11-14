<html>
	<head>
	
	</head>
	<body>
	<?php
	require 'conn.php';
	
	$r1_marks = $_POST ['r1'];
	$r2_marks = $_POST ['r2'];
	$r3_marks = $_POST ['r3'];
	$uid = $_POST ['uid'];
	
	$total_marks_result = $r1_marks + $r2_marks + $r3_marks;
	
	$query_update_r2 = "UPDATE round2 SET marks=" . $r2_marks . ",ts=ts WHERE uid=" . $uid;
	
	$query_update_r3 = "UPDATE round3 SET marks=" . $r3_marks . ",ts=ts WHERE uid=" . $uid;
	
	$query_update_result = "UPDATE exam_result SET result=" . $total_marks_result . ",status='done',ts=ts WHERE uid=" . $uid;

	$query = $query_update_r2.";".$query_update_r3.";".$query_update_result;
	
	if(mysqli_multi_query($conn, $query)){
// 		echo "All Updated";
	?>
   			<script>
							if (confirm('Sucessfully updated')) {
								window.location = "exam_result.php"
							} else {
							    window.location = "exam_result.php"
							}
						</script>
	<?php 
// 	header('Location: exam_result.php');
	}
	?>
	
</body>
</html>