<?php
include_once 'config/config.php';
include_once "query/details_table.php";
$id = $_POST['id'];

foreach ($details as $person) {
    if ($person["id"] == $id) {
echo "
    <div>
        <div class='name-Heading'>".$person["name"]."  ".$person["surname"]."</div>
        <div class='container details-person'>
             <div class='row'>
                 <div class='col'>
                   <img class='profile-picture' src='images/profile.png' alt='profile'>
                 </div>
                 <div class='col details-personally'>
                    Dátum narodenia :   ".$person["birth_day"]."
                    <hr>
                    Mesto narodenia :   ".$person["birth_place"]."
                    <hr>
                    Krajina narodenia :   ".$person["birth_country"];
                    if($person["death_day"]!=""){
                    echo
                    "<hr>
                    Dátum úmrtia :   ".$person["death_day"]."
                    <hr>
                    Miesto úmrtia :   ".$person["death_place"]."
                    <hr>
                    Krajina úmrtia :   ".$person["death_country"]."
                    <hr>";}
                    echo "
                 </div>
            </div>
             </div>
        </div>
         
         <hr>";
                    echo '<table class="container" id="table" style="overflow: scroll">
        <tr>
            <th>Umiestnenie</th>
            <th>Rok</th>
            <th>Krajina</th>
            <th>Mesto</th>
            <th>Disciplína</th>
            <th>Typ</th>
        </tr>';
        foreach($details as $achievement) {
            if ($achievement["id"] == $id) {
            echo' <tr>
            <td>'.$achievement['placing'].'</td>
            <td>'.$achievement['year'].'</td>
            <td>'.$achievement['country'].'</td>
            <td>'.$achievement['city'].'</td>
            <td>'.$achievement['discipline'].'</td>
            <td>'.$achievement['type'].'</td>
        </tr >';
            }
        }
        echo  '</table>              
    </div>';
break;
    }
}