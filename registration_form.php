<?
session_start();
?>
 <form method='post' action='registration.php'>
 	<p>
	Enter unic Login:
		<input type='text' name='login1'>
		<?
		echo $_SESSION['error2'];
		unset($_SESSION['error2']);
		echo $_SESSION['error4'];
		unset($_SESSION['error4']);
		?>
	</p>
	<p>
	 Enter Password:
		<input type='text' name='password1'>
			<input type='submit' value='register'>
			<?
		echo $_SESSION['error3'];
		unset($_SESSION['error3']);
		?>
	</p>
</form>