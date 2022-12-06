<!DOCTYPE html>
<html lang="en">
<!-- Called from race-scripts.js -->
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
                <li><a href="#">Blank</a></li>
                <li><a href="#">Blank</a></li>
            </ul>
        </nav>

        <?php
        header("Access-Control-Allow-Origin: *");
        header("Content-Type: application/json; charset=UTF-8");
        /* Connect to the SQL server */
        require_once 'db-login.php';
        try { $pdo = new PDO($attr, $user, $pass, $opts); }
        catch (PDOException $e) {
            throw new PDOException($e->getMessage(), (int)$e->getCode());
        }

        /* DO NOT DELETE THIS CODE */
        /* CREATE the RACE_RESULTS table */
        $query = "CREATE TABLE race_results (
            race_id SMALLINT NOT NULL AUTO_INCREMENT,
            raceTime,
            dog1 varchar(8),
            dog2 varchar(8),
            raceWinner varchar(8),
            PRIMARY KEY (race_id)
        )";
        $result = $pdo->query($query);

        /* DO NOT DELETE THIS CODE */
        /* Describe the RACE_RESULTS table */
        $query = "DESCRIBE race_results";
        $result = $pdo->query($query);
        echo "<table><tr><th>Race Date/Time</th><th>Dog 1</th><th>Dog 2</th><th>Winner</th>";
        while ($row = $result->fetch(PDO::FETCH_NUM)) {
            echo "<tr>";
            for ($k = 0; $k < 4; ++$k)
                echo "<td>" . htmlspecialchars($row[$k]) . "</td>";
            echo "</tr>";
        }
        echo "</table>";

        /* define variables and set to empty values */
        $raceTime = $dog1 = $dog2 = $raceWinner = "";

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

        /* Insert the new record */
        $query = "INSERT INTO race_results 
        VALUES(NULL, '$raceTime', '$dog1', '$dog2', '$raceWinner')";
        $result = $pdo->query($query);

        /* Send confirmation to viewport */
        echo <<<_END
            <p><b>Here are the race results:</b><br><br></p>
            <p>Race Date/Time: $raceTime<br>
            Dog #1: $dog1<br>
            Dog #2: $dog2<br>
            Winner: $raceWinner<br>
        _END;

        function sanitizeString($var) {
            if (get_magic_quotes_gpc())
                $var = stripslashes($var);
            $var = strip_tags($var);
            $var = htmlentities($var);
            return $var;
        }
        ?>
    </body>
</html>
