<?
session_start();
include_once('redirect.php');
unset($_SESSION['login']);
redirect('/');
?>