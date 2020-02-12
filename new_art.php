<?
session_start();
include_once('pdo.php');
?>
<div>
	<form method='post' action='publication.php'>
		<textarea cols="40" rows="15" name="textin">
			Введите текст
		</textarea>
		<br>
		<input type='submit' value='Опубликовать'>
	</form>
</div>