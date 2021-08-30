        
<?php
$path = $_SERVER['REQUEST_URI'];
?>
<div class="tabSec">
    <ul>
        <li><a href="provident_fund_registration.php"><img src="assets/img/icons/govt/earn-money.png"/> Provident Fund Registration</a></li>
       
        <li <?php if(strpos($path,'professional_tax_registration.php')>0){ ?>  class="active" <?php } ?> href="professional_tax_registration.php">
        <a href="professional_tax_registration.php"><img src="assets/img/icons/govt/tax.png"/> Professional Tax Registration</a></li>

        <li <?php if(strpos($path,'food_licence.php')>0){ ?>  class="active" <?php } ?> href="food_licence.php">
        <a href="food_licence.php"><img src="assets/img/icons/govt/food_license.png"/> FSSAI / Food License</a></li>
        <li><a href="pan_for_nri.php"><img src="assets/img/icons/govt/pan.png"/> Pan Registration</a></li>
        <li><a href="import_export_code.php"><img src="assets/img/icons/govt/import.png"/> Import Export Code</a></li>
        <li><a href="esi_registration.php"><img src="assets/img/icons/govt/insurance.png"/> Employee State Insurance (ESI)</a></li>
        <li><a href="shop_license.php"><img src="assets/img/icons/govt/law.png"/> Shop and Establishment Act</a></li>
    </ul>
</div>