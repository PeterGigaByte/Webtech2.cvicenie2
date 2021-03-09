<?php
include_once '../config/config.php';
$default_table = $dbh->query("
select person.id,person.name,person.surname,oh.year,oh.country,oh.city,oh.type,placing.discipline
from person,oh,placing 
where person.id = placing.person_id and placing.oh_id = oh.id and placing.placing = 1");
$default_table = $default_table->fetchAll(PDO::FETCH_ASSOC);
