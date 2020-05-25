<?php
$dsn = 'mysql:host=localhost;dbname=admin;charset=utf8';
$user = 'root';
$pass = '';
try {
	$cnx = new PDO($dsn,$user,$pass);
} catch(PDOException $e) {
	echo 'erreur de connexion à la base de données.';
}