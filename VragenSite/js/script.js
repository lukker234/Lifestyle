$( document ).ready(function() {
	console.log("JS Connected");

  $( ".answerPart" ).click(function(){
  	console.log("Clicked");
  	console.log($(this).text());

  	$( "#q1" ).delay( 500 ).fadeOut( "slow", function() {});
 });
});