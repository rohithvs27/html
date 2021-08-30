        
<?php
$path = $_SERVER['REQUEST_URI'];
?>
<div class="tabSec">
    <ul>
        <li><a href="list_your_business.php"><img src="assets/img/icons/services/govt_website.png"/> Government Websites</a></li>
        
        <li <?php if(strpos($path,'form_15ca.php')>0){ ?>  class="active" <?php } ?> href="form_15ca.php">
        <a href="form_15ca.php"><img src="assets/img/icons/services/form_fill.png"/> Filling of FORM 15CA</a></li>
        <li><a href="virtual_place_of_gst.php"><img src="assets/img/icons/services/gst.png"/> Virtual Place of Business for GST</a></li>
        <li><a href="fdi_in_india.php"><img src="assets/img/icons/services/fdi.png"/> Getting FDI in India</a></li>
        <li><a href="lei_code.php"><img src="assets/img/icons/services/draft.png"/> Legal Entity Identifier (LEI) Code</a></li>
    </ul>
</div>