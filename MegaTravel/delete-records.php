<?php

/* Connect to the SQL server */
require_once 'db-login.php';
try { $pdo = new PDO($attr, $user, $pass, $opts); }
catch (PDOException $e) {
    throw new PDOException($e->getMessage(), (int)$e->getCode());
}

/* Delete a specific record from REQUESTS table */
$query = "DELETE FROM requests WHERE lname='Jones'";
$result = $pdo->query($query);

?>