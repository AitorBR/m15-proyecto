<?php
require 'configPDO.php';

$dsn = "mysql:host=$host;port=$port;dbname=$db;charset=UTF8";


try {
	$pdo = new PDO($dsn, $user, $password);
	if ($pdo) {
		//echo "Connect OK";
	}
} catch (PDOException $e) {
	echo $e->getMessage();
}
