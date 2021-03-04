<?php
include '../config/config.php';

foreach ($dbh->query("SELECT * FROM person") as $row){
    echo $row['id'] . ' ' . $row['name'] . ' ' . $row['surname'] . ' ' . $row['birth_day'] . ' ' .
        $row['birth_place'] . ' ' . $row['birth_country'] . ' ' . $row['death_day']. ' ' .
        $row['death_place'] . $row['death_country'] . "<br>";
}
