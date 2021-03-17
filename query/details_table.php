<?php
include_once '../config/config.php';
$details = $dbh->query("
select person.id,person.name,person.surname,person.birth_day,person.birth_place,
person.birth_country,person.death_day, person.death_place,person.death_country, 
oh.year,oh.city,oh.country,oh.type, placing.discipline, placing.placing
from person,oh,placing 
where person.id = placing.person_id
and placing.oh_id = oh.id");
$persons = $dbh->query("
select * from person");
$persons = $persons->fetchAll(PDO::FETCH_ASSOC);
$details = $details->fetchAll(PDO::FETCH_ASSOC);
