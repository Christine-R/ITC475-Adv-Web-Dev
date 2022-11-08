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
        /* Connect to the SQL server */
        require_once 'login.php';
        try { $pdo = new PDO($attr, $user, $pass, $opts); }
        catch (PDOException $e) {
            throw new PDOException($e->getMessage(), (int)$e->getCode());
        }

        /* Create the REQUESTS table */
        // $query = "CREATE TABLE requests (
        //     req_id SMALLINT NOT NULL AUTO_INCREMENT,
        //     fname varchar(30) NOT NULL,
        //     lname varchar(30) NOT NULL,
        //     phone varchar(12) NOT NULL,
        //     email varchar(30) NOT NULL,
        //     num_adults TINYINT NOT NULL,
        //     num_children TINYINT NOT NULL,
        //     destin varchar(20) NOT NULL,
        //     travel_date date NOT NULL,
        //     activities varchar(255) NOT NULL,
        //     PRIMARY KEY (req_id)
        // )";
        // $result = $pdo->query($query);

        /* Describe the REQUESTS table */
        // $query = "DESCRIBE requests";
        // $result = $pdo->query($query);
        // echo "<table><tr><th>Column</th><th>Type</th><th>Null</th><th>Key</th>";
        // while ($row = $result->fetch(PDO::FETCH_NUM)) {
        //     echo "<tr>";
        //     for ($k = 0; $k < 4; ++$k)
        //         echo "<td>" . htmlspecialchars($row[$k]) . "</td>";
        //     echo "</tr>";
        // }
        // echo "</table>";

        /* define variables and set to empty values */
        $firstname = $lastname = $phone = $email = $adults = $children = $destination = $depart = $activity = $activityList = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstname = test_input($_POST["firstname"]);
        $lastname = test_input($_POST["lastname"]);
        $phone = test_input($_POST["phone"]);
        $email = test_input($_POST["email"]);
        $adults = test_input($_POST["adults"]);
        $children = test_input($_POST["children"]);
        $destination = test_input($_POST["destination"]);
        $depart = test_input($_POST["depart"]);
        $list = $_POST['activity'];
            foreach ($list as $activity) {
            $activityList .= $activity . ", ";
            }
        $activityList = rtrim($activityList, ", ");
        }

        function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }

        /* Insert the new record */
        $query = "INSERT INTO requests VALUES (NULL, '$firstname', '$lastname', '$phone', '$email', '$adults', '$children', '$destination', '$depart', '$activityList')";
        $result = $pdo->query($query);

        /* Send confirmation to viewport */
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
