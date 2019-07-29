<?php

	// Display 0 to 10 numbers horizential 
	// for ($i=0; $i <= 10 ; $i++) { 
		
	// 	echo $i."<br>";
	// }

	
	// Display 2 to 30 even numbers horizential 
	// for ($i=2; $i <= 30 ; $i = $i + 2) { 
	// 	echo $i."<br>";
	// }
 
 	$family = array("Ali","Umer","Sabir","Ahmad");
 	
 		//$key use to find index no.
 		//$value use to find array name  

 	foreach ($family as $key => $value) {
 			
 		$family[$key] = $value." Hassan"; // 	This funcation can use to add sir name any u can add	

 		echo "Array item ".$key." is ".$value."<br>";

 	}
 	
 	echo "<br>";

 	for ($i=0; $i < sizeof($family) ; $i++) { 
 		
 		echo $family[$i]."<br>";
 	}
 	
 	echo "<br>";
	
	//Display  starting 10 to 0 numbers 
	for ($i=10; $i >= 0 ; $i--) { 
		echo $i."<br>";
	}

?>