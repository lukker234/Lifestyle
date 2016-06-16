<?php
	session_start();

  	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "lifestyle";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "SELECT * FROM fingercheck WHERE value = 'true'";

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		echo '1';
	} 
	else 
	{
		echo "0";
	}

	if (isset($_GET['setValue'])) {
		$sql2 = "UPDATE fingercheck SET value='false' WHERE fingerCheckId = 1";

		if ($conn->query($sql2) === TRUE) {
		    //echo "Record updated successfully";
		} else {
		    //echo "Error updating record: " . $conn->error;
		}
	}


	$conn->close();
?>