<?php
$host = "mysql";
$db = 'curso'; //getenv('MYSQL_DATABASE');
$user = 'curso';//getenv('MYSQL_USER');
$password = 'curso';//getenv('MYSQL_PASSWORD');

try {
	$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";    
	
	$pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

	if ($pdo) {
		echo "Connected to the $db database successfully!";
	}
} catch (PDOException $e) {
	die($e->getMessage());
} finally {
	if (isset($pdo)) {
		$pdo = null;
	}
}