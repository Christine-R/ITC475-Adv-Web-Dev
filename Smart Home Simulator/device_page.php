<?php // device_page.php
error_reporting (E_ALL ^ E_NOTICE);

// define variables and set to empty values
$lrLamp = $br1Desk = $br2Floor = $bathFan = $washer = $dryer = 
$frontDoor = $backDoor = $garDoor = $kitFan = $drLight = 
$lrLampStart = $br1DeskStart = $br2FloorStart = $bathFanStart = 
$washerStart = $dryerStart = $frontDoorStart = $backDoorStart = 
$garDoorStart = $kitFanStart = $drLightStart = $lrLampEnd = 
$br1DeskEnd = $br2FloorEnd = $bathFanEnd = $washerEnd = $dryerEnd = 
$frontDoorEnd = $backDoorEnd = $garDoorEnd = $kitFanEnd = $drLightEnd = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $lrLamp = test_input($_POST["lrLamp"]);
  $br1Desk = test_input($_POST["br1Desk"]);
  $br2Floor = test_input($_POST["br2Floor"]);
  $bathFan = test_input($_POST["bathFan"]);
  $washer = test_input($_POST["washer"]);
  $dryer = test_input($_POST["dryer"]);
  $frontDoor = test_input($_POST["frontDoor"]);
  $backDoor = test_input($_POST["backDoor"]);
  $garDoor = test_input($_POST["garDoor"]);
  $kitFan = test_input($_POST["kitFan"]);
  $drLight = test_input($_POST["drLight"]);

  $lrLampStart = test_input($_POST["lrLampStart"]);
  $br1DeskStart = test_input($_POST["br1DeskStart"]);
  $br2FloorStart = test_input($_POST["br2FloorStart"]);
  $bathFanStart = test_input($_POST["bathFanStart"]);
  $washerStart = test_input($_POST["washerStart"]);
  $dryerStart = test_input($_POST["dryerStart"]);
  $frontDoorStart = test_input($_POST["frontDoorStart"]);
  $backDoorStart = test_input($_POST["backDoorStart"]);
  $garDoorStart = test_input($_POST["garDoorStart"]);
  $kitFanStart = test_input($_POST["kitFanStart"]);
  $drLightStart = test_input($_POST["drLightStart"]);

  $lrLampEnd = test_input($_POST["lrLampEnd"]);
  $br1DeskEnd = test_input($_POST["br1DeskEnd"]);
  $br2FloorEnd = test_input($_POST["br2FloorEnd"]);
  $bathFanEnd = test_input($_POST["bathFanEnd"]);
  $washerEnd = test_input($_POST["washerEnd"]);
  $dryerEnd = test_input($_POST["dryerEnd"]);
  $frontDoorEnd = test_input($_POST["frontDoorEnd"]);
  $backDoorEnd = test_input($_POST["backDoorEnd"]);
  $garDoorEnd = test_input($_POST["garDoorEnd"]);
  $kitFanEnd = test_input($_POST["kitFanEnd"]);
  $drLightEnd = test_input($_POST["drLightEnd"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if (!empty(($_POST['lrLamp']))) $lrLamp=$_POST['lrLamp'];
if (!empty(($_POST['br1Desk']))) $br1Desk=$_POST['br1Desk'];
if (!empty(($_POST['br2Floor']))) $br2Floor=$_POST['br2Floor'];
if (!empty(($_POST['bathFan']))) $bathFan=$_POST['bathFan'];
if (!empty(($_POST['washer']))) $washer=$_POST['washer'];
if (!empty(($_POST['dryer']))) $dryer=$_POST['dryer'];
if (!empty(($_POST['frontDoor']))) $frontDoor=$_POST['frontDoor'];
if (!empty(($_POST['backDoor']))) $backDoor=$_POST['backDoor'];
if (!empty(($_POST['garDoor']))) $garDoor=$_POST['garDoor'];
if (!empty(($_POST['kitFan']))) $kitFan=$_POST['kitFan'];
if (!empty(($_POST['drLight']))) $drLight=$_POST['drLight'];

if (!empty(($_POST['lrLampStart']))) $lrLampStart=$_POST['lrLampStart'];
if (!empty(($_POST['br1DeskStart']))) $br1DeskStart=$_POST['br1DeskStart'];
if (!empty(($_POST['br2FloorStart']))) $br2FloorStart=$_POST['br2FloorStart'];
if (!empty(($_POST['bathFanStart']))) $bathFanStart=$_POST['bathFanStart'];
if (!empty(($_POST['washerStart']))) $washerStart=$_POST['washerStart'];
if (!empty(($_POST['dryerStart']))) $dryerStart=$_POST['dryerStart'];
if (!empty(($_POST['frontDoorStart']))) $frontDoorStart=$_POST['frontDoorStart'];
if (!empty(($_POST['backDoorStart']))) $backDoorStart=$_POST['backDoorStart'];
if (!empty(($_POST['garDoorStart']))) $garDoorStart=$_POST['garDoorStart'];
if (!empty(($_POST['kitFanStart']))) $kitFanStart=$_POST['kitFanStart'];
if (!empty(($_POST['drLightStart']))) $drLightStart=$_POST['drLightStart'];

if (!empty(($_POST['lrLampEnd']))) $lrLampEnd=$_POST['lrLampEnd'];
if (!empty(($_POST['br1DeskEnd']))) $br1DeskEnd=$_POST['br1DeskEnd'];
if (!empty(($_POST['br2FloorEnd']))) $br2FloorEnd=$_POST['br2FloorEnd'];
if (!empty(($_POST['bathFanEnd']))) $bathFanEnd=$_POST['bathFanEnd'];
if (!empty(($_POST['washerEnd']))) $washerEnd=$_POST['washerEnd'];
if (!empty(($_POST['dryerEnd']))) $dryerEnd=$_POST['dryerEnd'];
if (!empty(($_POST['frontDoorEnd']))) $frontDoorEnd=$_POST['frontDoorEnd'];
if (!empty(($_POST['backDoorEnd']))) $backDoorEnd=$_POST['backDoorEnd'];
if (!empty(($_POST['garDoorEnd']))) $garDoorEnd=$_POST['garDoorEnd'];
if (!empty(($_POST['kitFanEnd']))) $kitFanEnd=$_POST['kitFanEnd'];
if (!empty(($_POST['drLightEnd']))) $drLightEnd=$_POST['drLightEnd'];

echo <<<_END
<html>
    <head>
        <title>Smart Home Devices</title>
    </head>
    <body>
        <h1>Smart Home Devices</h1>
        $lrLamp <br>Start: $lrLampStart <br>End: $lrLampEnd<br><br>
        $br1Desk <br>Start: $br1DeskStart <br>End: $br1DeskEnd<br><br>
        $br2Floor <br>Start: $br2FloorStart <br>End: $br2FloorEnd<br><br>
        $bathFan <br>Start: $bathFanStart <br>End: $bathFanEnd<br><br>
        $washer <br>Start: $washerStart <br>End: $washerEnd<br><br>
        $dryer <br>Start: $dryerStart <br>End: $dryerEnd<br><br>
        $frontDoor <br>Start: $frontDoorStart <br>End: $frontDoorEnd<br><br>
        $backDoor <br>Start: $backDoorStart <br>End: $backDoorEnd<br><br>
        $garDoor <br>Start: $garDoorStart <br>End: $garDoorEnd<br><br>
        $kitFan <br>Start: $kitFanStart <br>End: $kitFanEnd<br><br>
        $drLight <br>Start: $drLightStart <br>End: $drLightEnd<br><br>

        <a href='simulator.html'><button class="buttonSim">Start the Simulator</button></a>

    </body>
</html>
_END;

?>