<?php
include_once '../config/config.php';
include_once '../query/allPerson.php';
$id = $_POST['id'];
$name = $_POST['name'];
$value = "false";
foreach ($allPerson as $person){
    if($name===$person['name'].$person['surname'] and $person['id'] != $id){
        $value = "false";
        break;
    }
    $value = "true";
}
if($value=="true"){
    echo "true";
}else{
    echo "false";
}