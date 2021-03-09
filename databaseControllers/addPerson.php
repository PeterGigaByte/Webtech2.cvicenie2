<?php
include_once '../config/config.php';
$name = $_POST['firstNameInput'];
$surname = $_POST['surNameInput'];
$birth_day = $_POST['birthDayInput'];
$birth_place = $_POST['birthPlaceInput'];
$birth_country = $_POST['birthCountryInput'];
$death_day = $_POST['deathDayInput'];
$death_place = $_POST['deathPlaceInput'];
$death_country = $_POST['deathCountryInput'];

$addPerson = "INSERT INTO person (name,surname,birth_day,birth_place,birth_country,death_day,death_place,death_country) VALUES (?,?,?,?,?,?,?,?) ";

$stmt= $dbh->prepare($addPerson);

$stmt->execute([$name,$surname,$birth_day,$birth_place,$birth_country,$death_day,$death_place,$death_country]);