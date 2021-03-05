<?php
include_once 'config/config.php';
include_once "query/default_table.php";
echo '<table class="container" id="table" style="overflow: scroll">
        <tr>
            <th>Meno</th>
            <th>Priezvisko</th>
            <th>Rok</th>
            <th>Krajina</th>
            <th>Mesto</th>
            <th>Typ</th>
            <th>Disciplína</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>';
foreach($default_table as $table_object) {
    echo' <tr>
            <td>'.$table_object['name'].'</td>
            <td>'.$table_object['surname'].'</td>
            <td>'.$table_object['year'].'</td>
            <td>'.$table_object['country'].'</td>
            <td>'.$table_object['city'].'</td>
            <td>'.$table_object['type'].'</td>
            <td>'.$table_object['discipline'].'</td>
            <td class="noHover"> <button type="button"  class="btn btn-info">Detaily</button></td>
            <td class="noHover"> <button type="button"  class="btn btn-warning">Editovať</button></td>
            <td class="noHover"> <button type="button"  class="btn btn-danger">Zmazať</button></td>
        </tr >';
}
echo  '</table>';