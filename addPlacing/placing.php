<?php
include 'config/config.php';
include "query/oh_query.php";
echo "
<div class='add-placing'>
Pridať umiestnie :       <input class='form-check-input' onchange='showAddPlacing()' type='checkbox' value='' id='placing-checkbox' required>
     <hr>
     <div id='placing-form' class='form-control hidden'>
         Umiestnenie :   <input id='placingInput' name='placingInput' type='number' class='form-control '  placeholder='Umiestnenie' value='' required>   
         
         Olympiáda :   <select id='ohInput' name='ohInput' class='form-select' size='3' aria-label='size 3 select example'>  
                      <option value='-1' selected>Vyber Olympiádu</option>";
foreach ($oh as $table_object){
    echo'
    <option value='.$table_object['id'].'>'.$table_object['type'].' '.$table_object['year'].' '.$table_object['city'].'</option>';
}
    echo"                 </select>
         Disciplína :   <input id='disciplineInput' name='disciplineInput' type='text' class='form-control '  placeholder='Disciplína' value='' required>
     </div>
     <button id='save-placing' onclick='addPlacing(".$person['id'].")' type='button' class='btn btn-success placing-button hidden'>Uložiť umiestnenie</button>
</div>";