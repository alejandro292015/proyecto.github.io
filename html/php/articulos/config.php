<?php

$databaseHost = 'bvlbshtoo2ok6kdpr5mi-mysql.services.clever-cloud.com';
$databaseName = 'bvlbshtoo2ok6kdpr5mi';
$databaseUsername = 'ugcxmrhjtyaikhwo';
$databasePassword = 'vfhSTI3zeP4EgBmKqHWD';

try {
	// http://php.net/manual/en/pdo.connections.php
	$soexbd = new PDO("mysql:host={$databaseHost};dbname={$databaseName}", $databaseUsername, $databasePassword);
	
	$soexbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Setting Error Mode as Exception
	// More on setAttribute: http://php.net/manual/en/pdo.setattribute.php
} catch(PDOException $e) {
	echo $e->getMessage();
}
 
?>