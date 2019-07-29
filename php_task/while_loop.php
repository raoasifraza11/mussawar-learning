<?php

	$i = 0;

	while ( $i <= 10) {
		
		echo $i."<br>";

		$i++;
	}

	echo "<br>";

	$i = 5;

	while ( $i <= 50) {
		
		echo $i."<br>";

		$i = $i + 5;
	}


	echo "<br>";

	$i = 1;

	while ( $i <= 10) {
		
		$j = $i * 5;

		echo $j."<br>";

		$i++;
	}

	echo "<br>";

	$family = array("Umer", "Sabir", "Arslan", "Zeeshan");

	$i = 0;

	while ($i < sizeof($family)) {
		
		echo $family[$i]."<br>";

		$i++;

	}
?>