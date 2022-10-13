<?php // contact.php

// define variables and set to empty values
$destination = $firstname = $lastname = $email = 
$phone = $adults = $children = $depart = "";

$activity = $_POST['activity'];
foreach($activity as $activityList) echo "$activityList<br>";


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
/* if (!empty(($_POST['activityList']))) $activityList=$_POST['activityList']; */
if (!empty(($_POST['firstname']))) $firstname=$_POST['firstname'];
if (!empty(($_POST['lastname']))) $lastname=$_POST['lastname'];
if (!empty(($_POST['email']))) $email=$_POST['email'];
if (!empty(($_POST['phone']))) $phone=$_POST['phone'];
if (!empty(($_POST['adults']))) $adults=$_POST['adults'];
if (!empty(($_POST['children']))) $children=$_POST['children'];
if (!empty(($_POST['depart']))) $depart=$_POST['depart'];

echo <<<_END
<html>
    <head>
        <title>Customer Inquiry</title>
    </head>
    <body>
        <h1>Customer Inquiry</h1>
        Destination: $destination<br>
        Activities: $activityList<br>
        Name: $firstname $lastname<br>
        Email: $email<br>
        Phone: $phone<br>
        # Adults: $adults<br>
        # Children: $children<br>
        Departing: $depart<br>
    </body>
</html>
_END;

function sanitizeString($var) {
    if (get_magic_quotes_gpc())
        $var = stripslashes($var);
    $var = strip_tags($var);
    $var = htmlentities($var);
    return $var;
}

?>
