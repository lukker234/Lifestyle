<?php 
$answer1 = "";
$answer2 = "";
$answer3 = "";
$answer4 = "";
$answer5 = "";

if (isset($_POST['answer1']) && isset($_POST['answer2']) && isset($_POST['answer3']) && isset($_POST['answer4'])) && isset($_POST['answer5']){
  $value1 = $_POST['answer1'];
  $value2 = $_POST['answer2'];
  $value3 = $_POST['answer3'];
  $value4 = $_POST['answer4'];
  $value5 = $_POST['answer5'];

  $sql = "INSERT INTO table_name VALUES ($value1,$value2,$value3,$value4,$value5)"
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Question List</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!--Custom Styling -->
  <link href="css/styling.css" rel="stylesheet">

</head>
<body>  
  <div id="q1">
    <div id="questionBlock">
      <h1>Question 1 </h1>
      <h2>Wat vind u van het proces voor het aanvragen van een paspoort?</h2>
    </div>

    <div id="leftPart">
      <div id="profilePic" class="img-rounded"></div>

      <div id="fingerPic" class="img-rounded"></div>
    </div>


    <div id="rightPart">
      <div id="answerBlock">
          <div class="answerPart">
            <p class="answerText" id="answerInner1">Goed</p>
          </div>

          <div class="answerPart">
            <p class="answerText" id="answerInner2">Slecht</p>
          </div>

          <div class="answerPart">
            <p class="answerText" id="answerInner3">Neutraal</p>
          </div>

          

      </div>
    </div>
  </div>

  <div hidden id="q2">
    <div id="questionBlock">
      <h1><span id='answer1'></span></h1>
      <h2>Wat vind u van de consequenties van het verkregen paspoort?</h2>
    </div>

    <div id="leftPart">
      <div id="profilePic" class="img-rounded"></div>

      <div id="fingerPic" class="img-rounded"></div>
    </div>


    <div id="rightPart">
      <div id="answerBlock">
          <div class="answerPart">
            <p class="answerText" id="answerInner1">Te streng</p>
          </div>

          <div class="answerPart">
            <p class="answerText" id="answerInner2">Precies goed</p>
          </div>

          <div class="answerPart">
            <p class="answerText" id="answerInner3">Niet streng</p>
          </div>

      </div>
    </div>
  </div>

  <div hidden id="q3">
    <div id="questionBlock">
      <h1> </h1>
      <h2>Wat vind u ervan dat de overheid uw data zo kan gebruiken?</h2>
    </div>

    <div id="leftPart">
      <div id="profilePic" class="img-rounded"></div>

      <div id="fingerPic" class="img-rounded"></div>
    </div>


    <div id="rightPart">
      <div id="answerBlock">
          <div class="answerPart">
            <p class="answerText" id="answerInner1">Eerlijk</p>
          </div>

          <div class="answerPart">
            <p class="answerText" id="answerInner2">Oneerlijk</p>
          </div>

          <div class="answerPart">
            <p class="answerText" id="answerInner3">Neutraal</p>
          </div>

      </div>
    </div>
  </div>

  <div hidden id="q4">
    <div id="questionBlock">
      <h1> </h1>
      <h2>Wat is uw standpunt omtrent dit proces van paspoort aanvragen?</h2>
    </div>

    <div id="leftPart">
      <div id="profilePic" class="img-rounded"></div>

      <div id="fingerPic" class="img-rounded"></div>
    </div>


    <div id="rightPart">
      <div id="answerBlock">
          <div class="answerPart">
            <textarea class="answerText answerInner4 " id="answerInner4"></textarea>
          </div>

      </div>
    </div>
  </div>

  <div hidden id="q5">
    <div id="questionBlock">
      <h1> </h1>
      <h2>Zijn er dingen opgevallen, zo ja? Welke ?</h2>
    </div>

    <div id="leftPart">
      <div id="profilePic" class="img-rounded"></div>

      <div id="fingerPic" class="img-rounded"></div>
    </div>


    <div id="rightPart">
      <div id="answerBlock">
          <div class="answerPart">
            <p class="answerText" id="answerInner1">Ja</p>
          </div>

          <div class="answerPart">
            <p class="answerText" id="answerInner2">Nee</p>
          </div>

          <!--<div class="answerPart">
            <p class="answerText" id="answerInner3"></p>
          </div>-->

      </div>
    </div>
  </div>

  <div hidden id="q10">
    <div id="questionBlock">
      <h1> </h1>
    </div>

    <div id="leftPart">
      <div id="profilePic" class="img-rounded"></div>

      <div id="fingerPic" class="img-rounded"></div>
    </div>


    <div id="rightPart">
      <div id="answerBlock">
          <div id="finalRecord1"></div>
          <div id="finalRecord2"></div>
          <div id="finalRecord3"></div>
          <div id="finalRecord4"></div>
          <div id="finalRecord5"></div>
          <div id="finalRecord6"></div>
          <div id="finalRecord7"></div>
          <div id="finalRecord8"></div>
          <div id="finalRecord9"></div>

          <div class="answerPart">
            <a href='index.php' class="answerText" id="answerInner2">Continue</a>
          </div>

          <!--<div class="answerPart">
            <p class="answerText" id="answerInner3"></p>
          </div>-->

      </div>
    </div>
  </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/script.js"></script>
</body>
</html>