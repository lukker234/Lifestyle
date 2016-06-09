var answer1;
var answer2;
var answer3;
var answer4;
var answer5;

var question1;
var question2;
var question3;
var question4;
var question5;


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
    answer4 =   $("#answerInner4").val();

    $( "#q4" ).delay( 500 ).fadeOut( "slow", function() {});

    $("#q5 h1").append("Question 5");
    $( "#q5" ).delay( 1500 ).fadeIn(  "slow", function() {});
  });

  $( "#q5 .answerPart" ).click(function(){
    console.log("Clicked");
    console.log($("#q5 h2").text());
    console.log($(this).text());

    question5 = $("#q5 h2").text();
    answer5 =   $("#answerInner5").val();

    $( "#q5" ).delay( 500 ).fadeOut( "slow", function() {});

    $("#q10 h1").append("Klaar");
    $( "#q10" ).delay( 1500 ).fadeIn(  "slow", function() {});

    /*$("#finalRecord1").append(answer1);
    $("#finalRecord2").append(answer2);
    $("#finalRecord3").append(answer3);
    $("#finalRecord4").append(answer4);
    $("#finalRecord5").append(answer5);*/

    $('#form').submit(function(eventObj) {
      $(this).append('<input type="hidden" name="answer1" value="'+ answer1 +'" /> ');
      $(this).append('<input type="hidden" name="answer2" value="'+ answer2 +'" /> ');
      $(this).append('<input type="hidden" name="answer3" value="'+ answer3 +'" /> ');
      $(this).append('<input type="hidden" name="answer4" value="'+ answer4 +'" /> ');
      $(this).append('<input type="hidden" name="answer5" value="'+ answer5 +'" /> ');
      return true;
    });


    /*$.post("index.php" , {question: question1, answer: answer1} ,function(data){
        alert( "Data Loaded: " + data );
    });*/

  });
});