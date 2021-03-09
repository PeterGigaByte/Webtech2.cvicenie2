<?php
include_once '../config/config.php';
$id = $_POST['id'];
$delete = '
DELETE FROM person
WHERE id='.$id;
try{
$dbh->exec($delete);
} catch(PDOException $e) {
    echo $delete . "<br>" . $e->getMessage();
}
$dbh = null;
