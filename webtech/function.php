<?php
	
    $name = $_POST["name"];
	$idnum = $_POST["idnum"];
	$prelim = $_POST["prelim"];
	$midterm = $_POST["midterm"];
    $pre_final = $_POST["pre_final"];

	


	function final_calc($prelim, $midterm, $pre_final) {

	$grade = (($prelim * .30) + ($midterm * .30) + ($pre_final * .50));

	return $grade;
	}	
       $fgrade = final_calc($prelim, $midterm, $pre_final);


	function final_grade($fgrade) {

		if ($fgrade < 60) {
			$grade_val ="Failed";
		}
		else if ($fgrade >= 60 && $fgrade <=79) {
			$grade_val ="Passed";
		}
		else if ($fgrade >= 80 && $fgrade <= 89) {
			$grade_val ="Average";
		} 
		else if ($fgrade >= 90 ) {
			$grade_val = "High Grade";
		} 
		

	echo "<table border='1' width ='50%'>";
	echo"<tr>
		<td>Final Grade </td>
		<td>Status </td>
		</tr>";

	echo"<tr>
		<td>$fgrade</td>
		<td>$grade_val</td>
	</tr>";

	}
	echo "Name: $name" . "<br>";
	echo "Student Number: $idnum". "<br>". "<br>";
	$value = final_grade($fgrade);
	echo $value;
	

		

?>
