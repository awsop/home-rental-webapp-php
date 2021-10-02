<?php
	session_start();

	// Define database
	define('dbhost', 'wordpress.cs6royptlt8t.us-west-2.rds.amazonaws.com');
	define('dbuser', 'wordpress');
	define('dbpass', 'wordpress123');
	define('dbname', 'rent');

	// Connecting database
	try {
		$connect = new PDO("mysql:host=".dbhost."; dbname=".dbname, dbuser, dbpass);
		$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e) {
		echo $e->getMessage();
	}

?>
