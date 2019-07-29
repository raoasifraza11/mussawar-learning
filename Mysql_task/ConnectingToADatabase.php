<?php

	mysqli_connect("localhost", "root", "", "task1");

	// echo "Haye woy connected.....!";

	if (mysqli_connect_error()) {
		
		echo "There wasan error connecting to the database";
	} else {

		echo "Database connection successful!";

	}

?>