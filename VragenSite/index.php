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
      <h1>Question 1</h1>
      <h2>What kind of question would you like to answer?</h2>
    </div>

    <div id="leftPart">
      <div id="profilePic" class="img-rounded"></div>

      <div id="fingerPic" class="img-rounded"></div>
    </div>


    <div id="rightPart">
      <div id="answerBlock">
          <div class="answerPart">
            <p class="answerText" id="answerInner1">A simple one</p>
          </div>

          <div class="answerPart">
            <p class="answerText" id="answerInner2">None</p>
          </div>

          <div class="answerPart">
            <p class="answerText" id="answerInner3">No idea</p>
          </div>

      </div>
    </div>
  </div>

  <div hidden id="q2">
    <div id="questionBlock">
      <h1><span id='answer1'></span></h1>
      <h2>What was your answer the last question?</h2>
    </div>

    <div id="leftPart">
      <div id="profilePic" class="img-rounded"></div>

      <div id="fingerPic" class="img-rounded"></div>
    </div>


    <div id="rightPart">
      <div id="answerBlock">
          <div class="answerPart">
            <p class="answerText" id="answerInner1">I dont know</p>
          </div>

          <div class="answerPart">
            <p class="answerText" id="answerInner2"></p>
          </div>

          <div class="answerPart">
            <p class="answerText" id="answerInner3">9</p>
          </div>

      </div>
    </div>
  </div>

  <div hidden id="q3">
    <div id="questionBlock">
      <h1> </h1>
      <h2>What is our groups leader?</h2>
    </div>

    <div id="leftPart">
      <div id="profilePic" class="img-rounded"></div>

      <div id="fingerPic" class="img-rounded"></div>
    </div>


    <div id="rightPart">
      <div id="answerBlock">
          <div class="answerPart">
            <p class="answerText" id="answerInner1">Hodor</p>
          </div>

          <div class="answerPart">
            <p class="answerText" id="answerInner2">Sjoerd</p>
          </div>

          <div class="answerPart">
            <p class="answerText" id="answerInner3">Nobody!</p>
          </div>

      </div>
    </div>
  </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/script.js"></script>
</body>
</html>