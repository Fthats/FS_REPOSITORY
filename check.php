<?php
	session_start();
	include_once('pdo.php');
	include_once('redirect.php');
		$result = $pdo -> query("SELECT * FROM `users`");
		while( ($record= $result-> fetch()) ){
			if($_POST['login']==$record['login'] and $_POST['password']==$record['password']){
				$_SESSION['login'] = $_POST['login'];
				redirect('homepage.php');
			}
		}
	$_SESSION['error']="Неверный логин или пароль";
	redirect('/');