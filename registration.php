<?
session_start();
include_once('redirect.php');
include_once('pdo.php');
$result = $pdo -> query("SELECT * FROM `users`");
$count = 0;
		$k = $_POST['password1'];
		$j=mb_strlen($k);
		$k = $_POST['login1'];
		$p=mb_strlen($k);
	while($record = $result-> fetch()){
		if($_POST['login1'] == $record[login]){
			$_SESSION['error2'] = "Такой логин уже используется";
			redirect('registration_form.php');
		}
		else if($j < 8){
			$_SESSION['error3'] = "Слишком короткий пароль";
			redirect('registration_form.php');
		}
		else if($p<2){
			$_SESSION['error4'] = "Слишком короткий логин";
			redirect('registration_form.php');
		}
	}
$login1=$_POST['login1'];
$password1=$_POST['password1'];
$result = $pdo -> exec("INSERT INTO `users` (`login`,`password`) VALUES ('$login1','$password1')");
redirect('/');