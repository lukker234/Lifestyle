console.log('js connected!');

$( document ).ready(function() {
  $( "#videobg" ).delay( 6000 ).fadeOut( "slow", function() {});

  $( "#videobg2" ).delay( 7000 ).fadeIn( "slow", function() {});

    /*$("#fingerprint").delay(8000).fadeIn("slow", function(){});*/

});

var valueCheck;

//Ajax database checkup
function poll(){
   	$.get('scanner/dbCheck.php', function(data){
		console.log(data);
		if (data < 1) { valueCheck = 'false'; console.log("false");}
		else { valueCheck = 'true'; console.log("true");}
   	});
   	if (valueCheck == 'true') {

	    $.get('scanner/dbCheck.php?setValueFalse=false', function(data){
			console.log(data);
	   	});

	   	$("#fingerprint").delay(3000).fadeIn("slow", function(){
	   		$( "#videobg2" ).delay( 3000 ).fadeOut( "slow", function() {
	   			$( "#fingerprint" ).fadeOut( "slow", function() {});
	   			window.location.href = "inlogsocial/";
	   		});
	   	});

	};
};
setInterval(poll, 5000);

