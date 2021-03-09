<?php
include_once '../config/config.php';

$editPerson = "UPDATE person SET name = ?, surname = ?, birth_day = ?,birth_place = ?,
 birth_country=  ?,death_day = ?,death_place = ?,death_country = ? WHERE id = ?";

$stmt= $dbh->prepare($editPerson);

$stmt->execute([$_POST['firstNameInput'],$_POST['surNameInput'],$_POST['birthDayInput'],$_POST['birthPlaceInput'],$_POST['birthCountryInput'],$_POST['deathDayInput'],$_POST['deathPlaceInput'],$_POST['deathCountryInput'],$_POST['idInput']]);

