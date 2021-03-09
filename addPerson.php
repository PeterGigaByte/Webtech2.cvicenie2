<?php

include_once 'config/config.php';
include_once "query/details_table.php";
        echo "
    <div>
        <div class='name-Heading'>Pridať olympionika</div>
        <div class='container details-person'>
             <div class='row'>
                 <div class='col'>
                   <img class='profile-picture' src='images/profile.png' alt='profile'>";
include 'death/notDead.php';
   echo "
                 </div>
                 <div class='col details-personally'>
                     Meno :   <input id='firstNameInput' name='firstNameInput' type='text' class='form-control'  placeholder='Krstné meno' value='' required>
                    <hr>
                    Priezvisko :   <input id='surNameInput' name='surNameInput' type='text' class='form-control'  placeholder='Priezvisko' value='' required>
                    <hr>
                    Dátum narodenia :   <input  id='birthDayInput' name='birthDayInput' type='text' class='form-control'  placeholder='Dátum narodenia' value='' required>
                    <hr>
                    Mesto narodenia :   <input  id='birthPlaceInput' name='birthPlaceInput' type='text' class='form-control'  placeholder='Mesto narodenia' value='' required>
                    <hr>
                    Krajina narodenia :   <input id='birthCountryInput' name='birthCountryInput' type='text' class='form-control'  placeholder='Krajina narodenia' value='' required>";

        echo "
                 </div>
                 <button type='button' onclick='addPersonPost()' class='btn btn-success edit-button'>Uložiť olympionika</button>
            </div>
             </div>
        </div>
         
         <hr>";


