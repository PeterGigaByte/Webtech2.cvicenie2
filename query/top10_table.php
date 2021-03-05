<?php
include_once '../config/config.php';
$top10_table = $dbh->query("SELECT person.id, person.name,person.surname, COUNT(placing.placing) AS pocet 
                            FROM placing,person where placing.person_id=person.id 
                                                  and placing.placing = 1 
                            group by person.id, person.name, person.surname order by pocet desc limit 10");
$top10_table = $top10_table->fetchAll(PDO::FETCH_ASSOC);