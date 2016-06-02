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

    question3 = $("#q3 h2").text();
    answer3 =   $(this).text();

    $( "#q3" ).delay( 500 ).fadeOut( "slow", function() {});

    $("#q4 h1").append("Question 4");
    $( "#q4" ).delay( 1500 ).fadeIn(  "slow", function() {});
  });


  $( "#q4 .answerPart" ).click(function(){
    console.log("Clicked");
    console.log($("#q4 h2").text());
    console.log($(this).text());

    question4 = $("#q4 h2").text();
    answer4 =   $(this).text();

    $( "#q4" ).delay( 500 ).fadeOut( "slow", function() {});

    $("#q5 h1").append("Question 5");
    $( "#q5" ).delay( 1500 ).fadeIn(  "slow", function() {});
  });

  $( "#q5 .answerPart" ).click(function(){
    console.log("Clicked");
    console.log($("#q5 h2").text());
    console.log($(this).text());

    question5 = $("#q5 h2").text();
    answer5 =   $(this).text();

    $( "#q5" ).delay( 500 ).fadeOut( "slow", function() {});

    $("#q6 h1").append("Question 6");
    $( "#q6" ).delay( 1500 ).fadeIn(  "slow", function() {});
  });

  $( "#q6 .answerPart" ).click(function(){
    console.log("Clicked");
    console.log($("#q6 h2").text());
    console.log($(this).text());

    question6 = $("#q6 h2").text();
    answer6 =   $(this).text();

    $( "#q6" ).delay( 500 ).fadeOut( "slow", function() {});

    $("#q7 h1").append("Question 7");
    $( "#q7" ).delay( 1500 ).fadeIn(  "slow", function() {});
  });

  $( "#q7 .answerPart" ).click(function(){
    console.log("Clicked");
    console.log($("#q7 h2").text());
    console.log($(this).text());

    question7 = $("#q7 h2").text();
    answer7 =   $(this).text();

    $( "#q7" ).delay( 500 ).fadeOut( "slow", function() {});

    $("#q8 h1").append("Question 5");
    $( "#q8" ).delay( 1500 ).fadeIn(  "slow", function() {});
  });


});