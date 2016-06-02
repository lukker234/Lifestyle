console.log("hallo");
var timer = 0,
    timerInterval,
    button = document.getElementById("button");

var afdruk = document.getElementById("fingerprint");

button.addEventListener("mousedown", function() {
  timerInterval = setInterval(function(){
    timer += 1;
    console.log(timer);
    if(timer == "2"){
      
    }
  }, 1000);
});

button.addEventListener("mouseup", function() {
  clearInterval(timerInterval);
  timer = 0;
});



