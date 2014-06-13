<?php

	$mySQLServerName = "localhost";

	$databaseName = "myfirstdatabase";

	$databaseUsername = "mysqluser";
	$password = "mysqluserpassword";

	$connection = new mysqli($mySQLServerName, $databaseUsername, $password, $databaseName);

	if ($connection->connect_error)
	{
	    print("PHP unable to connect to MySQL server; error (" . $connection->connect_errno . "): "
		    . $connection->connect_error);

		exit();
	}

	$query = "CREATE TABLE IF NOT EXISTS `people`
		(`id` int NOT NULL auto_increment,
		`name` text NOT NULL,
		`age` int,
		PRIMARY KEY (`id`)
		) ENGINE=MyISAM;";

	$connection->query($query) or die('Query failed: ' . $connection->error);

	print ("PHP successfully connected to mydatabase, and created a table named 'people'!");

	$connection->close();

?>