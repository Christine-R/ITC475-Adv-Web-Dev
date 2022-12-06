<?php

$raceTime = $_POST['raceTime'];
$dog1 = $_POST['dog1'];
$dog2 = $_POST['dog2'];
$raceWinner = $_POST['raceWinner'];

echo "Time of Race: ".$raceTime."\n";
echo "Dog 1: ".$dog1."\n";
echo "Dog 2: ".$dog2."\n";
echo "Winner: ".$winner."\n";

$dbServerName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "race_results";

// connection to database
$conn = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName);

// see if database connection is successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sqlInsert = "INSERT INTO race_results (race_id, raceTime, dog1, dog2, raceWinner) VALUES (NULL, '$raceTime', '$dog1', '$dog2', '$raceWinner')";

mysqli_query($conn, $sqlInsert);
mysqli_close($conn);
