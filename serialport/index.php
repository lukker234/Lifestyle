<html>
<head>
<script type="text/javascript">
  var port;
  function SetPort() 
  { 
    port = document.getElementById("comport"); //find the serial port ActiveX object

    port.attachEvent('CommEvent', CommEventHandler); //CommEventHandler will handle serial port events

    port.Port=3; //Please check what the port number is correct!!
    port.BaudRate=9600;
    port.DataBits=8;
    port.Parity=0; //NOPARITY
    port.StopBits=0; //one stop bit

    port.Connected=1; //Connects to the serial port

    if(port.error>0) //Display errors if found
       alert(port.ErrorDescription);
  }

//Serial port event listener
  function CommEventHandler(Evt, Data)
  {
    if(Evt==1) //=EVT_DATA
    {
      s = port.Read(1);
      output.value = output.value + s; //Store incoming data in the textarea
    }
   }

//Sends some data through the serial port
  function SendData() 
  { 
    var port = document.getElementById("comport");
    port.Send("ABCD\n");
  }
</script>
</head>

<body onload="SetPort()">  
  <object classid="CLSID:7E42B8C5-73BE-4806-8904-FF4080A696EC" id="comport"></object>

  <button onclick="javascript:SendData()">Send</button>
  <br/>
  <textarea name="output" rows=10 cols=50></textarea>

</body>
</html>