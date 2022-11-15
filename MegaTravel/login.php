<!-- redirect to login -->
<script>window.location.href="admin.php";</script>

<?php
require_once 'db-login.php';
try {
    $conn = new PDO("mysql:host=$host;dbname=publications", $user, $pass); // try dbname results if error
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
?>

<!DOCTYPE html>
<html lang="en">
  <body>
    <form action="admin.php" method="POST">
        <div class="container" style="margin: 100px;">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit">Login</button>
        </div>
    </form>
  </body>
</html>
