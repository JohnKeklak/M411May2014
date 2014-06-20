<?php

// print_r($_POST);

if ( isset($_POST["firstname"]) && isset($_POST["lastname"]) && isset($_POST["email"]) )
{
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$email = $_POST["email"];

	$firstnameWasEntered = false;
	$lastnameWasEntered = false;
	$emailWasEntered = false;
	$emailIsValid = false;

	if ( strlen($firstname) > 0 )
	{
		$firstnameWasEntered = true;
	}

	if ( strlen($lastname) > 0 )
	{
		$lastnameWasEntered = true;
	}

	if ( strlen($email) > 0 )
	{
		$emailWasEntered = true;

		if ( strstr($email, "@") )
		{
			$emailIsValid = true;
		}
	}


//==================



	if ( $firstnameWasEntered == false || $lastnameWasEntered == false || $emailWasEntered == false || $emailIsValid == false)
	{
		header("Location: http://localhost:81/myform.html");
	}
	else
	{
		print("All required data was entered and is valid.<br>");
	}

}




?>



















<?php

/*

(1)

$firstname = $_POST["firstname"];

print($firstname);









(2)

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];

print("The value in the firstname field is: ".$firstname."<br>");
print("The value in the lastname field is: ".$lastname."<br>");
print("The value in the email field is: ".$email."<br>");











(3)

$firstname = $_POST["firstname"];

$message = "The value in the firstname field is: ".$firstname;

print($message);











(4)

$firstname = $_POST["firstname"];

$query = "INSERT INTO people SET name='".$firstname."', age='21';";

print($query);












(5)


$firstname = $_POST["firstname"];

$query = "INSERT INTO people SET name='".$firstname."', age='21';";

// send query to MySQL














(6)

	$connection = connectToMyFirstDatabase();

	if ( $connection == true )
	{
		// add some code to get the first and last name from the form

		$firstname = $_POST["firstname"];
		$lastname = $_POST["lastname"];

		// combine the first and last names to make a single name that will be stored in the 'people' table

		$name = $firstname." ".$lastname;

		print("About to store name ".$name."<br>");

		// embed the name in the INSERT query

		$query = "INSERT INTO people SET name='".$name."', age='21';";

		print("About to run INSERT query: ".$query."<br>");

		$connection->query($query)
			or die("INSERT query failed: ".$mysql->error);

		$query = "SELECT * FROM people WHERE name='".$name."';";

		print("About to run SELECT query: ".$query."<br>");

		$data = $connection->query ( $query )
			or die('SELECT query failed: ' . mysql_error());

		if ( $data == true )
		{
			print("Printing out the data found by the SELECT query<br>");

			$row = $data->fetch_assoc();

			$id = $row["id"];
			$name = $row["name"];
			$age = $row["age"];

			print("<p>Success! Person with id='$id' is named '$name', and is $age years old.</p>");
		}
		else
		{
			print("<p>No info found for ".$name.".</p>");
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










(7) Acknowledge successful registration

if ( isset($_POST["firstname"]) && isset($_POST["lastname"]) && isset($_POST["email"]) )
{
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$email = $_POST["email"];

	if ( strlen($firstname) > 0 && strlen($lastname) > 0 && strlen($email) > 0 )
	{
		print("All required data was entered into the form" );

		$email = $_POST["email"];

		if ( strstr($email, "@") )
		{
			print(" and the email is valid.  Success!<br>");
		}
		else
		{
			print(" but the email is invalid.<br>");
		}
	}
	else
	{
		print("Not all required data was provided<br>");
	}
}
else
{
	print("Not all required data was provided<br>");
}



(8)

if ( isset($_POST["firstname"]) && isset($_POST["lastname"]) && isset($_POST["email"]) )
{
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$email = $_POST["email"];

	$firstnameWasEntered = false;
	$lastnameWasEntered = false;
	$emailWasEntered = false;
	$emailIsValid = false;

	if ( strlen($firstname) > 0 )
	{
		$firstnameWasEntered = true;
	}

	if ( strlen($lastname) > 0 )
	{
		$lastnameWasEntered = true;
	}

	if ( strlen($email) > 0 )
	{
		$emailWasEntered = true;

		if ( strstr($email, "@") )
		{
			$emailIsValid = true;
		}
	}


//==================



	if ( $firstnameWasEntered == false || $lastnameWasEntered == false || $emailWasEntered == false || $emailIsValid == false)
	{
		print("Not all required data was entered.<br>");

		if ( $firstnameWasEntered == false )
		{
			print("First name was not provided.<br>");
		}

		if ( $lastnameWasEntered == false )
		{
			print("Last name was not provided.<br>");
		}

		if ( $emailWasEntered == false )
		{
			print("Email was not provided.<br>");
		}

		if ( $emailIsValid == false )
		{
			print("Email is not valid.");
		}
	}
	else
	{
		print("All required data was entered and is valid.<br>");
	}
}
else
{
	print("Not all required data fields exist.<br>");
}




*/
?>