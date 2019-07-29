<?php

	$_COOKIE["customerId"] = "Test";

	//setcookie("customerId", "1234", time() + 60 * 60 * 24); // This set a time limits 

	setcookie("customerId", "", time() - 60 * 60); // its remove or expire the cookie 

	echo $_COOKIE["customerId"];


?>