<?php
include_once 'config/config.php';
include_once "query/top10_table.php";
echo '<table class="container" id="table" style="overflow: scroll">
        <tr>
            <th>Meno</th>
            <th>Priezvisko</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>';
foreach($top10_table as $table_object) {
    echo' <tr>
            <td>'.$table_object['name'].'</td>
            <td>'.$table_object['surname'].'</td>
            <td class="noHover short"> <button type="button" id="top10" class="btn btn-info">Detaily</button></td>
            <td class="noHover short"> <button type="button" id="top10" class="btn btn-warning">Editovať</button></td>
            <td class="noHover short"> <button type="button" id="top10" class="btn btn-danger">Zmazať</button></td>
        </tr >';
}
echo  '</table>';