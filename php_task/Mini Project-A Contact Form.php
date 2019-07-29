<?php
	
	$error = ""; $successMessage = ""; 

	if ($_POST) {

		if (!$_POST["email"]) {
			
			$error .= "An email address is required.<br>";

		}

		if (!$_POST["content"]){
			
			$error .= "The content field is required.<br>";

		}

		if (!$_POST["subject"]){
			
			$error .= "The subject field is required.<br>";

		}

		if ($_POST['email'] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
			
			$error .="This email address is invalid.<br>";
		} 

		if ($error != "") {

    			$error = '<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>' . $error .'</div>';

    		} else {

    			$emailTo = "m.kiyani81@gmail.com";

    			$subject = $_POST['subject'];

    			$content = $_POST['content'];

    			$headers = "Form: ".$_POST['email'];

    			if (mail($emailTo, $subject, $content, $headers)) {
    				
    				$successMessage = '<div class="alert alert-success" role="alert"><p>Your message was sent, we\'ll get back toyou ASAP!</p>' . $error .'</div>'; 
    			} else {

    				$error = '<div class="alert alert-danger" role="alert"><p><strong>Your message couldn\'t be sent - please try again later</strong></p></div>';

    			}

    		}

	}




?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">

    <title></title>
  </head>
  <body>
 
		<div class="container">
			<h1>Get in touch!</h1>

			<div id="error"><?php echo $error.$successMessage; ?></div>

			<form method="post">
				 
				 <fieldset class="form-group">

				 	<label for="email">Email Address</label>
				 	<input type="text" name="email" class="form-control" id="email" placeholder="Enter your email Address ">
				 	<small class="text-muted">We'll never share your email with anyone else</small>
				 	
				 </fieldset>

				 <fieldset class="form-group">

				 	<label for="subject">Subject</label>
				 	<input type="text" name="subject" class="form-control" id="subject">
				 	
				 </fieldset>

				 <fieldset class="form-group">

				 	<label for="subject">What would you like ask us?</label>
				 	<textarea type="text" class="form-control" id="content" rows="3" name="content"></textarea>
				 	
				 </fieldset>

				 <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>

			</form>
		 
		</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="css/bootstrap.min.js" crossorigin="anonymous"></script>

    <script type="text/javascript">
    	
    	$("form").submit(function (e){

    		// e.preventDefault();

    		var error = "";

    		if ($("#subject").val() == "") {

    			error += "The subject field is required.<br>";

    		}         

    		if ($("#content").val() == "") {

    			error += "The content field is required.";

    		}

    		if (error != "") {

    			$("#error").html('<div class="alert alert-danger" role="alert"><p.><strong>There were error(s) inyour form:</strong></p>' + error +'</div>');

    				return false;

    		} else {

    			return true;

    			// $("form").unbind("submit").submit(); // stop form submitting when any field missing

    		}


    	});

    </script>

  </body>
</html>