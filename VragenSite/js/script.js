var answer1;
var answer2;
var answer3;
var answer4;
var answer5;
var answer6;
var answer7;

var quetion1;
var quetion2;
var quetion3;
var quetion4;
var quetion5;
var quetion6;
var quetion7;

$( document ).ready(function() {
	console.log("JS Connected");

  $( "#q1 .answerPart" ).click(function(){
  	console.log("Clicked");
  	console.log($("#q1  h2").text());
  	console.log($(this).text());

  	/*arr1.push($("h2").text());
  	arr2.push($(this).text());*/

    question1 = $("#q1  h2").text();
    answer1 =   $(this).text();


  	$( "#q1" ).delay( 500 ).fadeOut( "slow", function() {});

    $("#q2 h1").append("Question 2");
    $("#q2 #answerInner2").append(answer1);
  	$( "#q2" ).delay( 1500 ).fadeIn(  "slow", function() {});
    /*$("#answer1").append(answer1);*/
  });


  $( "#q2 .answerPart" ).click(function(){
    console.log("Clicked");
    console.log($("#q2 h2").text());
    console.log($(this).text());

    question2 = $("#q2 h2").text();
    answer2 =   $(this).text();



    $( "#q2" ).delay( 500 ).fadeOut( "slow", function() {});

    $("#q3 h1").append("Question 3");
    $( "#q3" ).delay( 1500 ).fadeIn(  "slow", function() {});
  });


  $( "#q3 .answerPart" ).click(function(){
    console.log("Clicked");
    console.log($("#q3 h2").text());
    console.log($(this).text());

    question2 = $("#q3 h2").text();
    answer2 =   $(this).text();

    $( "#q3" ).delay( 500 ).fadeOut( "slow", function() {});

    $("#q4 h1").append("Question 4");
    $( "#q4" ).delay( 1500 ).fadeIn(  "slow", function() {});
  });


});