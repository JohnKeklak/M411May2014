<?php

	$connection = connectToMyFirstDatabase();

	if ( $connection )
	{
		$query = "INSERT INTO people SET name='Petita', age='8';";

		$connection->query($query) or die("INSERT query failed: ".$mysql->error);

		$query = "SELECT * FROM people WHERE name='Petita';";

		$result = $connection->query ( $query ) or die('SELECT query failed: ' . mysql_error());

		if ( $result )
		{
			$row = $result->fetch_assoc();

			$id = $row["id"];
			$name = $row["name"];
			$age = $row["age"];

			print("<p>Success! Person with id='$id' is named '$name', and is $age years old.</p>");
		}
		else
		{
			print("<p>No info found for Pinkus.</p>");
		}


		$connection->close();
	}
	else
	{
		print("Connection to myfirstdatabase failed.");
	}








	// utility functions

	function connectToMyFirstDatabase()
	{
		$mySQLServerName = "localhost";

		$databaseName = "myfirstdatabase";

		$databaseUsername = "mysqluser";
		$password = "mysqluserpassword";

		$connection = new mysqli($mySQLServerName, $databaseUsername, $password, $databaseName);

		if ($connection->connect_error)
		{
			print("PHP unable to connect to MySQL server; error (" . $connection->connect_errno . "): " . $connection->connect_error);

			$connection = null;
		}

		return $connection;
	}

?>