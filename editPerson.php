<?php
include_once 'config/config.php';
include_once "query/details_table.php";
$id = $_POST['id'];

foreach ($persons as $person) {
    if ($person["id"] == $id) {
        echo "
    <div>
        <div class='name-Heading'>".$person["name"]."  ".$person["surname"]." </div>
        <div id='response' class='float-right response hidden red'></div>
        <button type='button' onclick='details(".$person['id'].")' class='btn btn-warning float-right'>Detaily</button>
        <div class='container details-person'>
             <div class='row'>
                 <div class='col'>
                   <img class='profile-picture' src='images/profile.png' alt='profile'>";
                    if($person["death_day"]!=""){
                        include_once 'death/dead.php';
                    }else{
                        include_once 'death/notDead.php';
                    }

                   echo"
                 </div>
                 <div class='col details-personally'>
                        <input id='idInput' name='idInput' type='text' class='form-control hidden'  placeholder='Id' value='".$person["id"]."' required>
                     Meno :   <input id='firstNameInput' name='firstNameInput' type='text' class='form-control'  placeholder='Krstné meno' value='".$person["name"]."' required>
                    <hr>
                    Priezvisko :   <input id='surNameInput' name='surNameInput' type='text' class='form-control'  placeholder='Priezvisko' value='".$person["surname"]."' required>
                    <hr>
                    Dátum narodenia :   <input id='birthDayInput' name='birthDayInput' type='text' class='form-control'  placeholder='Dátum narodenia' value='".$person["birth_day"]."' required>
                    <hr>
                    Mesto narodenia :   <input id='birthPlaceInput' name='birthPlaceInput' type='text' class='form-control'  placeholder='Mesto narodenia' value='".$person["birth_place"]."' required>
                    <hr>
                    Krajina narodenia :   <input id='birthCountryInput' name='birthCountryInput' type='text' class='form-control'  placeholder='Krajina narodenia' value='".$person["birth_country"]."' required>";

        echo "
                 </div>
                 <div id='response2' class='float-right response hidden red'></div>
                 <button type='button' onclick='editPersonPost(".$person["id"].")' class='btn btn-success edit-button'>Uložiť olympionika</button>
            </div>
             </div>
        </div>
         
         <hr>";
        echo '
        <div class="medals-Heading">Medailové umiestnenia : </div>
        <table class="container sortable" id="table" style="overflow: scroll">
        <thead>
        <tr>
            <th>Umiestnenie</th>
            <th>Rok</th>
            <th>Krajina</th>
            <th>Mesto</th>
            <th>Disciplína</th>
            <th>Typ</th>
        </tr>
        </thead>
        <tbody';
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
        echo  '</tbody></table>      
    </div>';
        echo '<div class="input-button bottom">';

             echo '</div>
<script src="js/sortable_personal_results_page.js"></script>';
        include_once 'addPlacing/placing.php';


        break;
    }
}