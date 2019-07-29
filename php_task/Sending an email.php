<?php
	 
	 $emailTo = "m.kiyani81@outlook.com";

	 $subject = "I hope this works!";

	 $body = "I think you're great!";

	 $headers = "From: m.kiyani81@gmail.com";

	 if (mail($emailTo, $subject, $body, $headers)) {

	 	echo "The email wast sent successfully";

	 } else {

	 	echo "The email could not be sent.";

	 }

?>