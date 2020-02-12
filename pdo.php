<?
$dsn = "mysql:host=localhost;port=3306;dbname=users_fs;charset=utf8mb4";
	$options = [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];

$pdo = new PDO($dsn,'root','', $options);