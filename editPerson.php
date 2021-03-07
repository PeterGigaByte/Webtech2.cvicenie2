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
                   <img class='profile-picture' src='images/profile.png' alt='profile'>";
                    if($person["death_day"]!=""){
                        include 'death/dead.php';
                    }else{
                        include 'death/notDead.php';
                    }

                   echo"
                 </div>
                 <div class='col details-personally'>
                     Meno :   <input type='text' class='form-control'  placeholder='Krstné meno' value='".$person["name"]."' required>
                    <hr>
                    Priezvisko :   <input type='text' class='form-control'  placeholder='Priezvisko' value='".$person["surname"]."' required>
                    <hr>
                    Dátum narodenia :   <input type='text' class='form-control'  placeholder='Dátum narodenia' value='".$person["birth_day"]."' required>
                    <hr>
                    Mesto narodenia :   <input type='text' class='form-control'  placeholder='Mesto narodenia' value='".$person["birth_place"]."' required>
                    <hr>
                    Krajina narodenia :   <input type='text' class='form-control'  placeholder='Krajina narodenia' value='".$person["birth_country"]."' required>";

        echo "
                 </div>
                 <button type='button' class='btn btn-success edit-button'>Uložiť</button>
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