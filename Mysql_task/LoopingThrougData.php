<?php

	session_start();
	
	if (array_key_exists('email', $_POST) OR array_key_exists('password', $_POST)) {

		$link = mysqli_connect("localhost", "root", "", "task1");

	if (mysqli_connect_error()) {
		
		die ("There wasan error connecting to the database");
	} 

		if ($_POST['email'] == '') {
			
			echo "<p>Email Address is required.</p>";

		} else if ($_POST['password'] == '') {
			
			echo "<p>Password is required.</p>";
			
		} else {

			$query = "SELECT `id` FROM users WHERE email ='".mysqli_real_escape_string($link, $_POST['email'])."'";

			$result = mysqli_query($link, $query); 

			if (mysqli_num_rows($result) > 0) {
				
				echo "<p>That email address has already been taken.</p>";
				// var_dump("i am  in if");

			} else {


// var_dump("i am  in else");
// die();
				$query = "INSERT INTO `users` (`email`, `password`) VALUES ('".mysqli_real_escape_string($link, $_POST['email'])."', '".mysqli_real_escape_string($link, $_POST['password'])."')";

				if (mysqli_query($link, $query)) {
					
					$_SESSION['email'] = $_POST['email'];

					header("Location: SessionVariable.php");

				} else {

					echo "<p>There was a problem signing you up - please try again later!</p>";

				}

			}

		}

	}

	

	// $name = "Mussawar Ahmad";

	// $query = "SELECT `email` FROM users WHERE name ='".mysqli_real_escape_string($link, $name)."'"; 

	// // $query = "SELECT `email` FROM users WHERE email LIKE '%gmail.com'"; // it used to select something in the row or table

	// if ($result = mysqli_query($link, $query)) {
		
	// 	while ($row = mysqli_fetch_array($result)) {
			
	// 		print_r($row);

	// 	}

	// }

?>

	<form method= "post">

		<input type="text" name="email" id="email" placeholder="Email Address">
	
		<input type="password" name="password" id="password" placeholder="Password">

		<input type="submit" value = "Sign Up">
		
		

	</form>