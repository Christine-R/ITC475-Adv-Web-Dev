<!DOCTYPE html>
<html lang="en">
    <head>
        <title>The Greatest Race</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta name="description" content="The Greatest Race: Results">
        <meta name="robots" content="nofollow">
        <link rel="stylesheet" href="style.css">
        <style>
            p { margin-left: 20px; }
        </style>
    </head>
    
    <body>

        <nav>
            <ul>
                <li><a href="index.html">Back to the Race Page</a></li>
            </ul>
        </nav>

        <?php
        $dbServerName = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "race_results";
        $conn = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName);

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $raceTime = test_input($_POST["raceTime"]);
        $dog1 = test_input($_POST["dog1"]);
        $dog2 = test_input($_POST["dog2"]);
        $raceWinner = test_input($_POST["raceWinner"]);
        }

        function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }

        /* Show results of last 5 races */
        $sqlSelect = "SELECT * FROM race ORDER BY race_id DESC limit 5;";

        /* Send results to viewport */
        echo <<<_END
            <table>
                <tr><td><b>Results of the last 5 races:</b></td></tr>
                <tr><td>Race Date/Time:</td><td>Dog 1</td><td>Dog 2</td><td>Winner</td></tr>
        _END;


        echo <<<_END
            </table>
        _END;
    </body>
</html>
