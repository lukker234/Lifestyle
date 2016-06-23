<?php 
session_start(); 
?>
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="js/jquery-1.10.2.js"></script>
		<script type="text/javascript" src="js/java.js"></script>
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	</head>
	<body oncontextmenu="return false;">

		<div align="center" id="scanfinger" class=" finger-scan embed-responsive embed-responsive-16by9 center-vid">
		    <video autoplay loop class="embed-responsive-item" style="width:100%;">
		        <source src="video/finger-scan-loading.webm" type="video/webm">
		    </video>
		</div>
		<h4 style="margin-top: 20%; width: 80%; margin-left: 10%;">Place finger below</h4>
		<button id="button_click"></button>

		<img src="img/fingerprint.png" id="finger">

		<!-- Bootstrap JavaScript -->
		<script type="text/javascript" src="timer.js"></script>

		<script src="js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	</body>
</html>