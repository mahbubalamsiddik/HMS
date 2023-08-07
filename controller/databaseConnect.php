<?php

    $servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbName="hms";


	
	$connection = new mysqli($servername, $dbusername, $dbpassword,$dbName);

	
	if ($connection->connect_error) {
		die("Connection failed: " . $connection->connect_error);
	}
	
?>