<?php
include_once '../config/config.php';
$id_person = $_POST['id_person'];
$id_oh = $_POST['id_oh'];
$placing = $_POST['placing'];
$discipline = $_POST['discipline'];

$addPlacing = "INSERT INTO placing (person_id,oh_id,placing,discipline) VALUES (?,?,?,?) ";

$stmt= $dbh->prepare($addPlacing);

$stmt->execute([$id_person,$id_oh,$placing,$discipline]);
