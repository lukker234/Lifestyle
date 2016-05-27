$( document ).ready(function() {
	console.log("JS Connected");

  $( ".answerPart" ).click(function(){
  	console.log("Clicked");
  	console.log($( ".answerPart p" ).text());

  	$( "#q1" ).delay( 500 ).fadeOut( "slow", function() {});
 });
});