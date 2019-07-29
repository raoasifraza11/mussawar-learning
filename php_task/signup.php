<?php

   if (isset($_POST['submit'])) {
       
       $fname = $_POST['fname'];
       $lname = $_POST['lname'];
       $email = $_POST['email'];
       $pass1 = $_POST['pwd1'];
       $pass2 = $_POST['pwd2'];

       var_dump($fname,$lname,$email,$pass1,$pass2);
       
   }



?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Sign Up</title>
  </head>
  <body>
    <br>
    <br>
    <center>
        <div class="col-lg-6">
            <form method="Post">
                <div class="form-group">
                    <input type="text" class="form-control col-md-6" name="fname" placeholder="First Name">
                </div>
                <div class="form-group">
                   <input type="text" class="form-control col-md-6" name="lname" placeholder="Last Name">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control col-md-6" name="email" placeholder="Email Address">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control col-md-6" name="pwd1" placeholder="Password">
                </div>
                <div class="form-group">
                     <input type="password" class="form-control col-md-6" name="pwd2" placeholder="Confirm Password">
                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-success col-md-6">Sign Up</button>
                </div>
            </form>
         </div>
    </center>     




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
