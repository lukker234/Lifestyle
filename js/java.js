console.log('js connected!');

$( document ).ready(function() {
  $( "#videobg" ).delay( 6000 ).fadeOut( "slow", function() {});

  $( "#videobg2" ).delay( 7000 ).fadeIn( "slow", function() {});

    /*$("#fingerprint").delay(8000).fadeIn("slow", function(){});*/

});

var valueCheck = "";
var userCompare = "userCompare false";

//Ajax database checkup
function poll(){
   	$.get('scanner/dbCheck.php?fingerCheck=true', function(data){
		console.log(data);
		if (data < 1) { valueCheck = 'false'; console.log("false");}
		else { valueCheck = 'true'; console.log("true");}
   	});
   	if (valueCheck == 'true') {

	    $.get('scanner/dbCheck.php?setValueFalse=false', function(data){
			console.log(data);
	   	});

	   	$.get('scanner/dbCheck.php?userCheck=true', function(data){
			console.log(data);
			if (data == "userCompare true") 
			{ 
				console.log(data + "userCompare True");
			};

			if (data == "userCompare false")
			{ 
				console.log(data + "userCompare False");
				window.location.href = "index.php";
			};
	   	});

	   	$("#fingerprint").delay(100).fadeIn("slow", function(){
	   		if (userCompare = 'userCompare true') {
		   		$( "#videobg2" ).delay( 3000 ).fadeOut( "slow", function() {
		   			$( "#fingerprint" ).fadeOut( "slow", function() {});
		   			userCompare = 'userCompare false';
		   			window.location.href = "inlogsocial/";
		   		});
	   		};
	   	});

	};
};
setInterval(poll, 5000);

