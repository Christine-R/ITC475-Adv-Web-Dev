<?php
// NOT BEING CALLED FROM ANYWHERE

$dbServerName = "localhost";
$dbUsername = "root";
$dbPassword = "mysql";
$dbName = "publications";

// connection to database
$conn = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName);

$sqlSelect = "select * from race_results";
$result = mysqli_query($conn, $sqlSelect);
$resultCheck = mysqli_num_rows($result);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>The Greatest Race<br>Statistics</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body style="background-color: white;">
        <div>
            <table>
                <tr>
                    <th>Race Date/Time</th>
                    <th>Dog 1</th>
                    <th>Dog 2</th>
                    <th>Winner</th>
                </tr>
                <tr>
                    <?php
                        mysqli_data_seek($result,0);
                        if ($resultCheck > 0){
                            while ($row = mysqli_fetch_assoc($result)){
                                echo "
                                    <tr>
                                        <td>".$row['raceTime']."</td>
                                        <td>".$row['dog1']."</td>
                                        <td>".$row['dog2']."</td>
                                        <td>".$row['raceWinner']."</td>
                                    </tr>";
                            }
                        }
                    ?>
                </tr>
            </table>
        </div>
    </body>
</html>
