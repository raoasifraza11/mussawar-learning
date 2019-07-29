<?php

	session_start();

	$diaryContent = "";

	if (array_key_exists("id", $_COOKIE)) {
		
		$_SESSION['id'] = $_COOKIE['id'];

	}

	if (array_key_exists("id", $_SESSION)) {
		
		// echo "<p></p>";

		include("inc/connection.php");

		$query = "SELECT `diary` FROM `users` WHERE id = ".mysqli_real_escape_string($link, $_SESSION['id'])." LIMIT 1";

		$row = mysqli_fetch_array(mysqli_query($link, $query));

		$diaryContent = $row['diary'];


	} else {

		header ('Location: Project_SecretDairy.php');

	}

	include("inc/header.php");

?>

<nav class="navbar navbar-light bg-light navbar-fixed-top">
  <a class="navbar-brand" href="#">Secret Diary</a>

    <div class="form-inline my-2 my-lg-0">
      <a href = 'Project_SecretDairy.php?logout=1'><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button></a>
    </div>

</nav>

	<div class="container-fluid" id="containerLoggedInPage">

		<textarea id="diary" class="form-control" style="height: 100vh;"><?php echo $diaryContent; ?></textarea>

	</div>

<?php	

	include("inc/footer.php");

?>