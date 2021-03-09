<?php
echo"
<div class='death-blank'>    
     Úmrtie :       <input class='form-check-input' onchange='showDeadForm()' type='checkbox' value='' id='invalidCheck' checked required>
     <hr>
     <div id='deathForm' class='form-control'>
         Dátum úmrtia :   <input id='deathDayInput' name='deathDayInput' type='text' class='form-control deadIn'  placeholder='Dátum úmrtia' value='".$person["death_day"]."' required>
         <hr>
         Miesto úmrtia :   <input id='deathPlaceInput' name='deathPlaceInput' type='text' class='form-control deadIn'  placeholder='Miesto úmrtia' value='".$person["death_place"]."' required>
         <hr>
         Krajina úmrtia :   <input id='deathCountryInput' name='deathCountryInput' type='text' class='form-control deadIn'  placeholder='Krajina úmrtia' value='".$person["death_country"]."' required>
         <hr>
     </div>
</div>";