        
<?php
$path = $_SERVER['REQUEST_URI'];
?>
<div class="onlineTop">
    <h1>Incorporate your business</h1>
    <p class="subTxt">Registering a business can be a quite stressfull. Worry not! Get expert assistance on how and which business structure to select and start your entreprenuerial journey with a bang!</p>
    <div class="tabSec">
    <ul>
        <li <?php if(strpos($path,'incorporate-your-business.php')>0){ ?>  class="active" <?php } ?> href="incorporate-your-business.php">
        <a href="incorporate-your-business.php"><img src="assets/img/icons/incorporate/building.png"/> Private Limited Company</a></li>
        <li><a href="one_person_company.php"><img src="assets/img/icons/incorporate/oneperson-company.png"/> One Person Company</a></li>
        <li><a href="limited_liability_partnership.php"><img src="assets/img/icons/incorporate/limited-partnership.png"/> Limited Liability Partnership</a></li>
        <li><a href="gst_compliant.php"><img src="assets/img/icons/incorporate/gst.png"/> GST Compliant Private Limited</a></li>
        <li><a href="ngo_company_registration.php"><img src="assets/img/icons/incorporate/ngo.png"/> NGO Registration</a></li>
        <li><a href="partnership_firm_registration.php"><img src="assets/img/icons/incorporate/partner-firm.png"/> Partnership Firm Registration</a></li>
        <li><a href="sole_proprietorship.php"><img src="assets/img/icons/incorporate/single-firm.png"/> Sole Proprietorship</a></li>
    </ul>
    </div>
</div>
