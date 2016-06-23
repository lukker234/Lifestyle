<?php
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

$lastUser = "";
$matches1;
$matches2;
$matches3;
$matches4;
$matches5;
$matches6;
$matches7;
$matches15;

?>

<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
		<script type="text/javascript" src="js/java.js"></script>
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	</head>
	<body>
 		<img style="width: 100%; position: absolute;" src="img/scanveld.png">

		<div class="imagespersonal">
			<img class="img-circle" src="img/profilePlaceholder.png">
			<img src="img/fingerPlaceholder.png">
		</div>
		<?php
$bestand = "userdata.txt";
$myfile = fopen($bestand, "r") or die("Unable to open file!");
$data =  fread($myfile,filesize($bestand));
fclose($myfile);



if (preg_match('/first_name":"(.*)","last_name/', $data, $matches1)) {
    // echo $matches1[1]."<br />"; 
	if (preg_match('/last_name":"(.*)","gender/', $data, $matches15)) {
		echo '<p class="Textpersonal">Name  :  '.$matches1[1]." ".$matches15[1].'</p>';
	}
}

if (preg_match('/gender":"(.*)","link/', $data, $matches2)) {
    // echo $matches1[1]."<br />"; 
    
    echo '<p class="genderpersonal">Gender  :  '.$matches2[1].'</p>';
}

if (preg_match('/"name":"(.*)"},/', $data, $matches3)) {
    // echo $matches1[1]."<br />"; 
    
    echo '<p class="woonpersonal"><br>City  :  '.$matches3[1].'</p>';
}

if (preg_match('/"birthday":"(.*)","hometown"/', $data, $matches4)) {
    // echo $matches1[1]."<br />"; 
    
    echo '<p class="agepersonal"><br>Birthday  :  '.$matches4[1].'</p>';
}

if (preg_match('/political":(.*)}/', $data, $matches4)) {
    // echo $matches1[1]."<br />"; 
    if($matches4[1] == "null"){
    	echo '<p class="ideopersonal" style="color:red;">Ideology  : No data</p>';
    }else{
    	 echo '<p class="ideopersonal">Ideology  :  '.$matches5[1].'</p>';
    }
}

$databasevalue1 = $matches1[1];
$databasevalue2 = $matches15[1];
$databasevalue3 = $matches2[1];
$databasevalue4 = $matches3[1];
$databasevalue5 = $matches4[1];


$sqlCheck = "SELECT * FROM user ORDER BY userId DESC LIMIT 1";
$result = $conn->query($sqlCheck);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $lastUser = $row["firstname"];
        //echo $lastUser;
    }
}

if ($databasevalue1 != $lastUser) {

	$sqlUser = "INSERT INTO `user` (firstname, lastname, gender, city, political)
	VALUES ('$databasevalue1', '$databasevalue15' ,'$databasevalue2', '$databasevalue3', '$databasevalue5')";

	if ($conn->query($sqlUser) === TRUE) {
	    //echo "New record created successfully";
	} else {
	    echo "Error: " . $sqlUser . "<br>" . $conn->error;
	}
}

$conn->close();
?>

<!-- 		<p class="Textpersonal">Name  :  Lorenzo Gerbi</p>
		<p class="Textpersonal" style="margin-left: 1000px; margin-top: 300px; font-size: 40px;">85 KG</p>

		<p class="agepersonal">Age  :  28</p>
		<p class="relpersonal">Relationship  :  Unknown</p>
		<p class="woonpersonal"><br>City  :  Rome</p>
		<p class="edupersonal">Education  :  IT Development</p>
		<p class="friendpersonal">Friends  :  404</p>
		<p class="ideopersonal">Ideology  :  D66</p>  -->



		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	</body>
</html>