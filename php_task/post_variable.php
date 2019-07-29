<?php
	
	if ($_POST) {
		
		$family =array ("Ali","Umer","Arslan","Sabir");
		$isKnow = false;

		foreach ($family as $value) {
			
			if ($value == $_POST['name']) {
				
				$isKnow = true;
			}
		}

		if ($isKnow) {
			
			echo "Hi there ".$_POST['name']."!";
		} else {

			echo "I don't know you.";

		}
	}

?>

<form method="POST">
	
	<p>What is your name?</p>

	<p><input type="text" name="name"></p>

	<p><input type="submit" name="submit" value="Submit"></p>


</form>