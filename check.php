<?php
session_start();
include_once('redirect.php');
$connection = mysqli_connect('localhost','root','','users_fs');
$result=mysqli_query($connection, "SELECT * FROM `users`");
while( ($record= mysqli_fetch_assoc($result)) ){
if($_POST['login']==$record[login] and $_POST['password']==$record[password]){
	redirect('homepage.php');
}
}
$_SESSION['error']="Неверный логин или пароль";
	redirect('/');
mysqli_close($connection);