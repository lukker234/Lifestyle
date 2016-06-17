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

	if (isset($_GET['userCheck'])) {

		$setUsername;
		$fileUserName;

		$sql = "SELECT * FROM lifestyle";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		       	$setUsername= $row["value"];
		    }
		}
	
		$myfile = fopen("../inlogsocial/userdata.txt", "r") or die("Unable to open file!");
		$data =  fread($myfile,filesize("../inlogsocial/userdata.txt"));
		fclose($myfile);

		if (preg_match('/first_name":"(.*)","last_name/', $data, $matches1)) {
		    // echo $matches1[1]."<br />"; 
			if (preg_match('/last_name":"(.*)","link/', $data, $matches15)) {
				$fileUserName = $matches1[1]." ".$matches15[1];
			}
		}

		if ($fileUserName !=== $setUsername) {
			echo "true";

			$sql3 = "UPDATE fingercheck SET value=$fileUserName WHERE fingerCheckId = 2";

			if ($conn->query($sql3) === TRUE) {
			    //echo "Record updated successfully";
			} else {
			    //echo "Error updating record: " . $conn->error;
			}
		}
	}

	if (isset($_GET['setValue'])) {

		$sql2 = "UPDATE fingercheck SET value='true' WHERE fingerCheckId = 1";

		if ($conn->query($sql2) === TRUE) {
		    //echo "Record updated successfully";
		} else {
		    //echo "Error updating record: " . $conn->error;
		}
	}

	if (isset($_GET['setValueFalse'])) {
		
		$sql2 = "UPDATE fingercheck SET value='false' WHERE fingerCheckId = 1";

		if ($conn->query($sql2) === TRUE) {
		    //echo "Record updated successfully";
		} else {
		    //echo "Error updating record: " . $conn->error;
		}
	}


	$conn->close();
?>