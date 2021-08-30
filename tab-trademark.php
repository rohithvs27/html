        
<?php
$path = $_SERVER['REQUEST_URI'];
?>
<div class="tabSec">
<ul>
<li <?php if(strpos($path,'trademark_registration.php')>0){ ?>  class="active" <?php } ?> href="trademark_registration.php">
<a href="trademark_registration.php"><img src="assets/img/icons/trademark/trademark.png"/> Trademark Registration</a></li>
    <li><a href="msme_registration.php"><img src="assets/img/icons/trademark/planning.png"/> MSME Compliance Trademark</a></li>
    
    <li <?php if(strpos($path,'trademark_renewal.php')>0){ ?>  class="active" <?php } ?> href="trademark_renewal.php">
    <a href="trademark_renewal.php"><img src="assets/img/icons/trademark/renewable.png"/> Trademark Renewal</a></li>
    <li><a href="trademark_objection.php"><img src="assets/img/icons/trademark/management.png"/> Trademark Objection Management</a></li>

</ul>
</div>