<?php
session_start();

// Define database
define('dbhost', 'bvlbshtoo2ok6kdpr5mi-mysql.services.clever-cloud.com');
define('dbuser', 'ugcxmrhjtyaikhwo');
define('dbpass', 'vfhSTI3zeP4EgBmKqHWD');
define('dbname', 'bvlbshtoo2ok6kdpr5mi');

// Connecting database
try {
	$connect = new PDO("mysql:host=".dbhost."; dbname=".dbname, dbuser, dbpass);
	$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo $e->getMessage();
}

?>
