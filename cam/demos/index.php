<!doctype html>

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<script type="text/javascript" src="../file/FileSaver.js"></script>
	<script   src="https://code.jquery.com/jquery-3.0.0.js"   integrity="sha256-jrPLZ+8vDxt2FnE1zvZXCkCcebI/C8Dt5xyaQBjxQIo="   crossorigin="anonymous"></script>
	<title>WebcamJS Test Page</title>
	<style type="text/css">
		body { font-family: Helvetica, sans-serif; }
		h1, h2, h3 { margin-top:0; margin-bottom:0; }
		form { margin-top: 15px; }
		form input { margin-right: 15px; }
		#results { display:inline-block; margin:20px; padding:20px; border:1px solid; background:#ccc; }
	</style>
</head>
<body>
	
	<div id="my_photo_booth">
		<div id="my_camera"></div>
		
		<!-- First, include the Webcam.js JavaScript Library -->
		<script type="text/javascript" src="../webcam.js"></script>
		
		<!-- Configure a few settings and attach camera -->
		<script language="JavaScript">
			Webcam.set({
				// live preview size
				width: 320,
				height: 240,
				
				// device capture size
				dest_width: 640,
				dest_height: 480,
				
				// final cropped size
				crop_width: 480,
				crop_height: 480,
				
				// format and quality
				image_format: 'jpeg',
				jpeg_quality: 90,
				
				// flip horizontal (mirror mode)
				flip_horiz: true
			});
			Webcam.attach( '#my_camera' );
		</script>
		
		<!-- A button for taking snaps -->
		<form>
			<div id="pre_take_buttons">
				<!-- This button is shown before the user takes a snapshot -->
				<input type=button value="Take Snapshot" onClick="preview_snapshot()">
			</div>
			<div id="post_take_buttons" style="display:none">
				<!-- These buttons are shown after a snapshot is taken -->
				<input type=button value="&lt; Take Another" onClick="cancel_preview()">
				<input type=button value="Save Photo &gt;" onClick="save_photo()" style="font-weight:bold;">
			</div>
		</form>
	</div>
	
	<div id="results" style="display:none">
		<!-- Your captured image will appear here... -->
	</div>
	
	<!-- Code to handle taking the snapshot and displaying it locally -->
	<script language="JavaScript">
		// preload shutter audio clip
		var shutter = new Audio();
		shutter.autoplay = false;
		shutter.src = navigator.userAgent.match(/Firefox/) ? 'shutter.ogg' : 'shutter.mp3';

		setTimeout(
		    function() {
		    	preview_snapshot();
		    }, 5000);
		
		function preview_snapshot() {
			// play sound effect
			try { shutter.currentTime = 0; } catch(e) {;} // fails in IE
			shutter.play();
			
			// freeze camera so user can preview current frame
			Webcam.freeze();
			
			// swap button sets
			document.getElementById('pre_take_buttons').style.display = 'none';
			document.getElementById('post_take_buttons').style.display = '';
			save_photo();
		}
		
		function cancel_preview() {
			// cancel preview freeze and return to live camera view
			Webcam.unfreeze();
			
			// swap buttons back to first set
			document.getElementById('pre_take_buttons').style.display = '';
			document.getElementById('post_take_buttons').style.display = 'none';
		}
		
		function save_photo() {

			// actually snap photo (from preview freeze) and display it
			Webcam.snap( function(data_uri) {
				// display results in page
				document.getElementById('results').innerHTML = 
					'<h2>Here is your large, cropped image:</h2>' + 
					'<img src="'+data_uri+'"/><br/></br>' + 
					'<a href="'+data_uri+'" target="_blank">Open image in new window...</a>';
					console.log(results);
					// myJavascriptFunction();
					// function myJavascriptFunction() { 
					//   window.location.href = "sendtodatabase.php?link=" + data_uri; 
					// }


var canvas = document.getElementById("foto"), ctx = canvas.getContext("2d");
console.log(canvas);
// draw to canvas...
canvas.toBlob(function(blob) {
    saveAs(blob, "Paspoort.png");
});

				Webcam.reset();
				
				// show results, hide photo booth
				document.getElementById('results').style.display = '';
				document.getElementById('my_photo_booth').style.display = 'none';
			} );
		}

	</script>
	
</body>
</html>
