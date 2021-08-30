        
<?php
$path = $_SERVER['REQUEST_URI'];
?>
<div class="tabSec">
    <ul>
    <li <?php if(strpos($path,'traders_package.php')>0){ ?>  class="active" <?php } ?> href="traders_package.php">
    <a href="traders_package.php"><img src="assets/img/icons/file_tax/traders_package.png"/> Salary/Trading Income</a></li>

       <li <?php if(strpos($path,'business_tax_returns_presumptive.php')>0){ ?>  class="active" <?php } ?> href="business_tax_returns_presumptive.php">
       <a href="business_tax_returns_presumptive.php"><img src="assets/img/icons/file_tax/business_tax_resumptive.png"/> Business Tax Returns - Presumptive</a></li>
       
       <li <?php if(strpos($path,'business_tax_returns.php')>0){ ?>  class="active" <?php } ?> href="business_tax_returns.php">
       <a href="business_tax_returns.php"><img src="assets/img/icons/file_tax/business_tax_return.png"/> Business Tax Returns</a></li>
        <li><a href="advance_tax_calclulation.php"><img src="assets/img/icons/file_tax/advanced_tax.png"/> Advance Tax calculation</a></li>
        
        <li <?php if(strpos($path,'tds_returns.php')>0){ ?>  class="active" <?php } ?> href="tds_returns.php">
        <a href="tds_returns.php"><img src="assets/img/icons/file_tax/tds_return.png"/> TDS Returns</a></li>
    </ul>
</div>