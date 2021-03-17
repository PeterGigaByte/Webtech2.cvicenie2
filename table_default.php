<?php
include_once 'config/config.php';
include_once "query/default_table.php";

echo '
<div class="legend-line-green"></div>
<table class="container display" id="table" style="overflow: scroll">
<thead>
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
        </tr>
        </thead>
        <tbody>';
foreach($default_table as $table_object) {
    echo'
             <tr class="rows">
            <td class="pointer" onclick="details('.$table_object['id'].')">'.$table_object['name'].'</td>
            <td class="pointer" onclick="details('.$table_object['id'].')">'.$table_object['surname'].'</td>
            <td>'.$table_object['year'].'</td>
            <td>'.$table_object['country'].'</td>
            <td>'.$table_object['city'].'</td>
            <td>'.$table_object['type'].'</td>
            <td>'.$table_object['discipline'].'</td>
            <td class="noHover"> <button type="button" onclick="details('.$table_object['id'].')"  class="btn btn-info">Detaily</button></td>
            <td class="noHover"> <button type="button" onclick="editPerson('.$table_object['id'].')" class="btn btn-warning">Editovať</button></td>
            <td class="noHover"> <button type="button" onclick="deletePerson_default('.$table_object['id'].')"  class="btn btn-danger">Zmazať</button></td>
        </tr >
       ';

}
echo  '</tbody></table>
<script src="js/sortable_default_page.js"></script>';

