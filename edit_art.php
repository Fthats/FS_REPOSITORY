<?
session_start();
include_once('pdo.php');
$id=$_GET['id'];
$textres = $pdo -> query("SELECT `text` FROM `articles` WHERE `id` = '$id'");
$texting=$textres-> fetch();
$_SESSION['art_id']=$_GET['id']
?>
<div>
	<form method='post' action='editing.php'>
		<textarea cols="40" rows="15" name="texted">
			<?
			foreach($texting as $textt){
				echo  $textt;
			}
			?>
		</textarea>
		<br>
		<input type='submit' value='Изменить'>
	</form>
</div>