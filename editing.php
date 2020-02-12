<?
session_start();
include_once('pdo.php');
include_once('redirect.php');
 $text=$_POST['texted'];
 $id=$_SESSION['art_id'];
 $result = $pdo -> exec("UPDATE `articles` SET `text` = '$text' WHERE `id` = '$id'");
 redirect('homepage.php');