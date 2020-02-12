<?
include_once('pdo.php');
session_start();
?>
<html>
	<head>
		<title>
			Blog
		</title>
	</head>
	<body>
		<div>
			Залогинен как:
			<?
			$author=$_SESSION['login'];
			echo "$author";
			?>
		<div>
			 <a href='new_art.php'>Написать новую запись</a>
			 <br>
			 <a href='quit.php'>Выйти</a>
			 <hr>
		</div>
		<div>
			<?
			$result = $pdo -> query("SELECT `author`,`text`,`date_time` FROM `articles`");
			$idres = $pdo -> query("SELECT `id` FROM `articles`");
			while($record = $result-> fetch()){
				foreach($record as $part){
					echo $part;
					echo "<br><br>";
				}
				$key=$idres-> fetch();
				foreach($key as $keyd){
					echo "<a href='remove_art.php?id=$keyd'>Удалить</a>     <a href='edit_art.php?id=$keyd'>Изменить</a>";
					echo "<hr>";
				}
			}
				?>
		</div>		
			
	</body>

</html>