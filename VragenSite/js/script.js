$( document ).ready(function() {
	console.log("JS Connected");

	var arr1 = new Array();
	var arr2 = new Array();

  $( ".answerPart" ).click(function(){
  	console.log("Clicked");
  	console.log($("h2").text());
  	console.log($(this).text());

  	arr1.push($("h2").text());
  	arr2.push($(this).text());

  	$( "#q1" ).delay( 500 ).fadeOut( "slow", function() {});
  	$( "#q2" ).delay( 500 ).fadeIn(  "slow", function() {});
 });
});