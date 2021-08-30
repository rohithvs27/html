        
<?php
$path = $_SERVER['REQUEST_URI'];
?>
<div class="tabSec">
<ul>
    <li <?php if(strpos($path,'winding_up_of_company.php')>0){ ?>  class="active" <?php } ?> href="winding_up_of_company.php">
    <a href="winding_up_of_company.php"><img src="assets/img/icons/startup/earn-money.png"/> Winding Up of Company</a></li>

    <li><a href="advisory_on_startup_india_registration.php"><img src="assets/img/icons/startup/startup.png"/> Advisory on Startup India Registration</a></li>
     <li><a href="company_and_llp_income.php"><img src="assets/img/icons/startup/return.png"/> Company & LLP Returns</a></li>
     
     <li <?php if(strpos($path,'roc_filing.php')>0){ ?>  class="active" <?php } ?> href="roc_filing.php">
     <a href="roc_filing.php"><img src="assets/img/icons/startup/run_filling.png"/> ROC Filling</a></li>
    
     <li <?php if(strpos($path,'bookkeeping_services.php')>0){ ?>  class="active" <?php } ?> href="bookkeeping_services.php">
     <a href="bookkeeping_services.php"><img src="assets/img/icons/startup/bookkeeping.png"/> Bookkeeping Services</a></li>
</ul>
</div>