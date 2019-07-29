<?php

	$link = mysqli_connect("localhost", "root", "", "task1");

	if (mysqli_connect_error()) {
		
		echo "There wasan error connecting to the database";
	} 

	// $query = "INSERT INTO `users` (`email`, `password`) VALUES('khan@gmail.com', '1234')";

	// update thi email 
	
	// $query = "UPDATE `users` SET email = 'johnjani@gmail.com' WHERE id = 1 LIMIT 1 ";

	// update the password

	$query = "UPDATE `users` SET password = 'mypasscode' WHERE email = 'johnjani@gmail.com' LIMIT 1 ";

	mysqli_query($link, $query);

	$query = "SELECT * FROM users";

	if ($result = mysqli_query($link, $query)) {
		
		$row = mysqli_fetch_array($result);

		// echo "Your email is ". $row['email'] ." and your password is ". $row['password']; // this method for display data from the database 

		echo "Your email is ". $row[1] ." and your password is ". $row[2]; // also use this method use to display data from the database

	}

?>