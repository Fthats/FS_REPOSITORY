<?
include_once('pdo.php');
include_once('redirect.php');
$id=$_GET['id'];
$result = $pdo -> exec("DELETE FROM `articles` WHERE `id`= '$id'");
redirect('homepage.php');