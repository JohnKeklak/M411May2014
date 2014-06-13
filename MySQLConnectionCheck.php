<?php

	$mySQLServerName = "localhost"; // MySQL server name

	$databaseName = "myfirstdatabase"; // database name

	$databaseUsername = "mysqluser"; // credentials with authority to view and edit myfirstdatabase; created in MySQL console
	$password = "mysqluserpassword";

	$connection = new mysqli($mySQLServerName, $databaseUsername, $password, $databaseName);

	if ($connection->connect_error)
	{
	    print("PHP unable to connect to MySQL server; error (" . $connection->connect_errno . "): "
		    . $connection->connect_error);

		exit();
	}

	print("PHP successfully connected to database [$databaseName]! Method: " . $connection->host_info . "\n");

	$connection->close();
?>