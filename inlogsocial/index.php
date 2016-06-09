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
			<img class="img-circle" src="img/lorenzo.jpg">
			<img src="img/fingerPlaceholder.png">
		</div>
		<?php

$myfile = fopen("userdata.txt", "r") or die("Unable to open file!");
$data =  fread($myfile,filesize("userdata.txt"));
fclose($myfile);

if (preg_match('/first_name":"(.*)","last_name/', $data, $matches1)) {
    // echo $matches1[1]."<br />"; 
	if (preg_match('/last_name":"(.*)","link/', $data, $matches15)) {
		echo '<p class="Textpersonal">Name  :  '.$matches1[1]." ".$matches15[1].'</p>';
	}
}

if (preg_match('/gender":"(.*)","locale/', $data, $matches2)) {
    // echo $matches1[1]."<br />"; 
    
    echo '<p class="friendpersonal">Gender  :  '.$matches2[1].'</p>';
}

if (preg_match('/locale":"(.*)","religion/', $data, $matches3)) {
    // echo $matches1[1]."<br />"; 
    
    echo '<p class="woonpersonal"><br>City  :  '.$matches3[1].'</p>';
}

if (preg_match('/locale":"(.*)","religion/', $data, $matches3)) {
    // echo $matches1[1]."<br />"; 
    
    echo '<p class="woonpersonal"><br>City  :  '.$matches3[1].'</p>';
}

if (preg_match('/political":"(.*)}/', $data, $matches4)) {
    // echo $matches1[1]."<br />"; 
    echo '<p class="woonpersonal"><br>City  :  '.$matches4[1].'</p>';
}

if (preg_match('/political":(.*)}/', $data, $matches4)) {
    // echo $matches1[1]."<br />"; 
    if($matches4[1] == "null"){
    	echo '<p class="ideopersonal" style="color:red;">Ideology  : No data</p>';
    }else{
    	 echo '<p class="ideopersonal">Ideology  :  '.$matches4[1].'</p>';
    }
}

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