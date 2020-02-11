<?
session_start();
?>
 <form method='post' action='registration.php'>
	Enter unic Login:
		<input type='text' name='login'>
		<?
		echo $_SESSION['error2'];
		unset($_SESSION['error2'])
		?>
	 Enter Password:
		<input type='text' name='password'>
			<input type='submit' value='login'>
</form>