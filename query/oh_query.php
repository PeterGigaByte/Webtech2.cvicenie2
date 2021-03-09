<?php
$oh = $dbh->query("
select *
from oh ORDER BY year DESC");
$oh = $oh->fetchAll(PDO::FETCH_ASSOC);