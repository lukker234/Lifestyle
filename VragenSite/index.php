<?php 

if (isset($_POST['answer1']) && isset($_POST['answer2']) && isset($_POST['answer3']) && isset($_POST['answer4']) && isset($_POST['answer5'])){
  echo $shizzle = "yay het werkt!";
  /*$value1 = $_POST['answer1']; 
  $value2 = $_POST['answer2'];
  $value3 = $_POST['answer3'];
  $value4 = $_POST['answer4'];
  $value5 = $_POST['answer5'];

  $servername = "localhost";
  $username = "username";
  $password = "password";
  $dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO table_name VALUES (UserId, $value1, $value2, $value3, $value4, $value5)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();*/

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
          <div class="">
            <textarea class="answerInner4 " id="answerInner4"></textarea>
          </div>
          <div class="answerPart">
            <p class="answerText" id="answerInner1">Volgende</p>
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
          <div class="">
            <textarea class="answerInner4 " id="answerInner5"></textarea>
          </div>
          <div class="answerPart">
            <p class="answerText" id="answerInner1">Volgende</p>
          </div>

      </div>
    </div>
  </div>

  <div hidden id="q10">
    <div id="questionBlock">
      <h1> </h1>
      <h2>Dank u voor uw participatie</h2>
    </div>

    <div id="leftPart">
      <div id="profilePic" class="img-rounded"></div>

      <div id="fingerPic" class="img-rounded"></div>
    </div>


    <div id="rightPart">
      <div id="answerBlock">
        <form id="form" action="index.php" method="POST">
          <!--<input type="hidden" value="" name="answer1">
          <input type="hidden" value="" name="answer2">
          <input type="hidden" value="" name="answer3">
          <input type="hidden" value="" name="answer4">
          <input type="hidden" value="" name="answer5">-->

          <div class="answerPart">
          <p  class="answerText" >
            <input type="submit" class="answerText" id="answerInner2" value="Verstuur">
          </p>
        </div>

        </form>

        <!--<div id="finalRecord1">Antwoord: </div>
        <div id="finalRecord2">Antwoord: </div>
        <div id="finalRecord3">Antwoord: </div>
        <div id="finalRecord4">Antwoord: </div>
        <div id="finalRecord5">Antwoord: </div>-->

        

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