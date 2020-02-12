<?
session_start();
include_once('pdo.php');
include_once('redirect.php');
 $author=$_SESSION['login'];
 $text=$_POST['textin'];
 $result = $pdo -> exec("INSERT INTO `articles` (`author`,`text`) VALUES ('$author','$text')");
 redirect('homepage.php');