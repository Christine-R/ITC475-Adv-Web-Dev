<!--
CHRISTINE ROEDER
ITC 475 FA22
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Mega Travel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta name="description" content="Mega Travel | Contact Request Information Submitted">
        <meta name="robots" content="nofollow">
        <link rel="stylesheet" href="style.css">
        <style>
            p { margin-left: 20px; }
        </style>
        <script src="welcome.js"></script>
    </head>
    
    <body onload="currentTime()">

        <header>
            <img src="images/mega-travel-logo.png" alt="Mega Travel logo" width="300" height="200">
            <div id="timeOfDay"></div><br>
            <img id="sunMoon" src="images/sun.png" alt="Sun or moon icon">
        </header>

        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="contact-agent.html">Contact Agent</a></li>
                <li><a href="about-us.html">About Us</a></li>
            </ul>
        </nav>

<?php
// define variables and set to empty values
$destination = $firstname = $lastname = $email = 
$phone = $adults = $children = $depart = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = test_input($_POST["firstname"]);
  $lastname = test_input($_POST["lastname"]);
  $email = test_input($_POST["email"]);
  $phone = test_input($_POST["phone"]);
  $adults = test_input($_POST["adults"]);
  $children = test_input($_POST["children"]);
  $depart = test_input($_POST["depart"]);
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if (!empty(($_POST['destination']))) $destination=$_POST['destination'];
if (!empty(($_POST['activityList']))) $activityList=$_POST['activityList'];
if (!empty(($_POST['firstname']))) $firstname=$_POST['firstname'];
if (!empty(($_POST['lastname']))) $lastname=$_POST['lastname'];
if (!empty(($_POST['email']))) $email=$_POST['email'];
if (!empty(($_POST['phone']))) $phone=$_POST['phone'];
if (!empty(($_POST['adults']))) $adults=$_POST['adults'];
if (!empty(($_POST['children']))) $children=$_POST['children'];
if (!empty(($_POST['depart']))) $depart=$_POST['depart'];

echo <<<_END
    <p><b>Thank you for submitting your travel agent contact request! Here is the information you submitted:</b><br><br></p>
    <p>Client Name: $firstname $lastname<br>
    Client Phone Number: $phone<br>
    Client Email: $email<br>
    Number of Adults: $adults<br>
    Number of Children: $children<br><br>
    Destination: $destination<br><br>
    Travel Date: $depart<br><br>
    Interested Activities:<br> 
_END;
    $activity = $_POST['activity'];
    foreach($activity as $activityList) echo "&#9679; $activityList<br>";
echo <<<_END
    </p>
    <p><br><b>An agent will be in touch with you soon!</b></p>
_END;

function sanitizeString($var) {
    if (get_magic_quotes_gpc())
        $var = stripslashes($var);
    $var = strip_tags($var);
    $var = htmlentities($var);
    return $var;
}
?>

        <footer>
            Copyright Protected. All rights reserved.<br><br>
            MEGA TRAVELS<br>
            mega@travels.com
        </footer>
    </body>
</html>