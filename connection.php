<?php

	define('HOST','127.0.0.1');
	define('USER','root');
	define('PASS','');
	define('DB','task1');
	
	// Create connection
	$con = new mysqli(HOST, USER,PASS,DB);
	
	// Check connection
	if ($con->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
?>
