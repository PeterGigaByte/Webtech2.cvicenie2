<?php
include_once 'config/config.php';
include_once "query/details_table.php";
$id = $_POST['id'];
foreach ($persons as $person) {
    if ($person["id"] == $id) {
echo "
    <div>
        <div class='name-Heading'>".$person["name"]."  ".$person["surname"]."</div>
        <button type='button' onclick='editPerson(".$person['id'].")' class='btn btn-warning float-right'>Editovať</button>
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
                    echo '
        <div class="medals-Heading">Medailové umiestnenia : </div>
        <div class="tooltip2">Pre editáciu medailových umiestnení, musíte byť v móde editácia.</div>
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
        <tbody>';
        foreach($details as $achievement) {
            if ($achievement["id"] == $id) {
            echo' <tr>
            <td>'.$achievement['placing'].'</td>
            <td>'.$achievement['year'].'</td>
            <td>'.$achievement['country'].'</td>
            <td>'.$achievement['city'].'</td>
            <td>'.$achievement['discipline'].'</td>
            <td>'.$achievement['type'].'</td>
        </tr>';
            }
        }
        echo  '</tbody></table>              
    </div>
    <script src="js/sortable_personal_results_page.js"></script>';
break;
    }
}