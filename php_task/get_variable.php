<?php

	// print_r($_GET);
	
	// echo "Hi there ".$_GET["name"]." !";
	
	// if ($_GET) {
	
	if (is_numeric($_GET['number']) && $_GET['number'] > 0 && $_GET['number'] == round($_GET['number'], 0)) {	
		$i = 2;

		$isPrime = true;

		while ($i < $_GET['number']) {

			if ($_GET['number'] % $i == 0) {
				
				// Number is not prime

				$isPrime = false;
				
			}

			$i++;
		}

		if ($isPrime) {
			
			echo "<p>".$i." is a prime number.</p>";
		
		}else {

			echo "<p>".$i." is not prime.</p>";

		} 

	} else if ($_GET) {
			
			//User has submitted someting which isnot a poitive whole number

			echo "<p>Please enter a positive whole number.</p>";

		}

?>
	
	<p>Enter a whole numer</p>

	<form>
		
		<input type="text" name="number">

		<input type="submit" value="Go!">

	</form>

<!-- <p>What's you name?</p>

<form>
	
	<input type="text" name="name">

	<input type="submit" value="Go!">

</form> -->