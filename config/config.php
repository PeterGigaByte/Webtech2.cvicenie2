<?php
include("DbsLogin.php");

try {
    $dbh = new PDO($dsn, $user, $password);

} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
