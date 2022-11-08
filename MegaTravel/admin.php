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

        <div style="margin-left: 20px;">
        <?php
        /* Fetch all client-submitted requests one row at a time */
        require_once 'login.php';

        try {
            $pdo = new PDO($attr, $user, $pass, $opts);
        }
        catch (PDOException $e) {
            throw new PDOException($e->getMessage(), (int)$e->getCode());
        }

        $query  = "SELECT * FROM requests";
        $result = $pdo->query($query);

        while ($row = $result->fetch()) {
            echo 'Client Name: ' . htmlspecialchars($row['fname']) . ' ' . htmlspecialchars($row['lname']) . "<br>";
            echo 'Client Phone Number: ' . htmlspecialchars($row['phone']) . "<br>";
            echo 'Client Email: ' . htmlspecialchars($row['email']) . "<br>";
            echo 'Number of Adults: ' . htmlspecialchars($row['num_adults']) . "<br>";
            echo 'Number of Children: ' . htmlspecialchars($row['num_children']) . "<br>";
            echo 'Destination: ' . htmlspecialchars($row['destin']) . "<br>";
            echo 'Travel Date: ' . htmlspecialchars($row['travel_date']) . "<br>";
            echo 'Interested Activities: ' . htmlspecialchars($row['activities']) . "<br><br>";
        }
        ?>
        </div>

        <footer>
            Copyright Protected. All rights reserved.<br><br>
            MEGA TRAVELS<br>
            mega@travels.com
        </footer>
    </body>
</html>