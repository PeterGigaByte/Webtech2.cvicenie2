<?php
include_once '../config/config.php';
$allPerson = $dbh->query("select *
from person");
$allPerson = $allPerson->fetchAll(PDO::FETCH_ASSOC);