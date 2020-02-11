<?
session_start();
include_once('redirect.php');
	$dsn = "mysql:host=localhost;;dbname=users_fs;";
	$options = [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];

$pdo = new PDO($dsn, 'root', '', $options);

		$result=$pdo -> query("SELECT * FROM `users`");
		while($record= $result-> fetch()){
if($_POST['login']==$record[login]){
		$_SESSION['error2']="Такой логин уже используется";
	redirect('registarion_form.php');
}
$count=0;
$r=$_POST['password'];
while($r!=0){
	$r=floor($r/10);
	$count+=1;
}
else if($count<8){
	$_SESSION['error2']="Слишком короткий пароль";
	redirect('registarion_form.php');
}
