<?
session_start();
include('redirect.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>
		blog
		</title>
	</head>
	<body>
		<div>
			<form method='post' action='registration_form.php'>
				<input type='submit' value='register'>
			</form>
			<form method='post' action='check.php'>
				Login:
				<input type='text' name='login'>
				Password:
				<input type='text' name='password'>
				<input type='submit' value='login'>
			</form>
					<?php
						if(isset($_SESSION['login'])){
							redirect("homepage.php");
						}
						echo $_SESSION['error'];
						unset($_SESSION['error']);
					?>
			<hr>
		</div>
		<div>
		</div>
	</body>
</html>