<?php
	error_reporting ( E_ALL ^ E_WARNING );
	
	// for converting two indexed array to one assoc array
	function convert_to_assoc($array1, $array2) {
		$arrayCombine = array ();
		for($i = 0; $i < count ( $array1 ); $i ++) {
			$arrayCombine [$array1 [$i]] = $array2 [$i];
		}
		return $arrayCombine;
	}
	
	// for converting associative array to string
	function array_map_assoc($array) {
		$r = array ();
		foreach ( $array as $key => $value ) {
			$r [$key] = "$key ($value)";
		}
		return $r;
	}
	
	// for calculating total marks of round 1
	function count_total_marks($array, $conn) {
		$total_marks_round_1 = 0;
		foreach ( $array as $key => $value ) {
			$row = mysqli_fetch_assoc ( mysqli_query ( $conn, "SELECT * FROM question_mcq WHERE id=" . $key ) );
			$answer_from_db = $row ['answer'];
			
			if ($answer_from_db == $value)
				$total_marks_round_1 ++;
			//echo $key . " ~ " . $answer_from_db . " ~ " . $value . "<br/>";
		}
		return $total_marks_round_1;
	}

?>