<?php
echo"
<div class='death-blank'>    
     Úmrtie :       <input class='form-check-input' onchange='showDeadForm()' type='checkbox' value='' id='invalidCheck' required>
     <hr>
     <div id='deathForm' class='form-control hidden'>
         Dátum úmrtia :   <input type='text' class='form-control deadIn'  placeholder='Dátum úmrtia' value='".$person["death_day"]."' required>
         <hr>
         Miesto úmrtia :   <input type='text' class='form-control deadIn'  placeholder='Miesto úmrtia' value='".$person["death_place"]."' required>
         <hr>
         Krajina úmrtia :   <input type='text' class='form-control deadIn'  placeholder='Krajina úmrtia' value='".$person["death_country"]."' required>
         <hr>
     </div>
</div>";