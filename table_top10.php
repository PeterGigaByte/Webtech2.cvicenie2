<?php
include_once 'config/config.php';
include_once "query/top10_table.php";
echo '<div class="legend-line-blue"></div>
<table class="container" id="table" style="overflow: scroll">
        <tr>
            <th>Prvé miesta</th>
            <th>Meno</th>
            <th>Priezvisko</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>';
foreach($top10_table as $table_object) {
    echo' <tr>
            <td>'.$table_object['pocet'].'</td>
            <td class="pointer" onclick="details('.$table_object['id'].')">'.$table_object['name'].'</td>
            <td class="pointer" onclick="details('.$table_object['id'].')">'.$table_object['surname'].'</td>
            <td class="noHover short"> <button type="button" onclick="details('.$table_object['id'].')"  class="btn btn-info">Detaily</button></td>
            <td class="noHover short"> <button type="button" onclick="editPerson('.$table_object['id'].')"  class="btn btn-warning">Editovať</button></td>
            <td class="noHover short"> <button type="button"  class="btn btn-danger">Zmazať</button></td>
        </tr >';
}
echo  '</table>';