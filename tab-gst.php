        
<?php
$path = $_SERVER['REQUEST_URI'];
?>
<div class="tabSec">
<ul>
    <li <?php if(strpos($path,'gst_registration.php')>0){ ?>  class="active" <?php } ?> href="gst_registration.php">
    <a href="gst_registration.php"><img src="assets/img/icons/gst/gst_registration.png"/> GST Registration</a></li>

    <li <?php if(strpos($path,'gst_filing.php')>0){ ?>  class="active" <?php } ?> href="gst_filing.php">
    <a href="gst_filing.php"><img src="assets/img/icons/gst/gst_filling.png"/> GST Filling</a></li>

    <li><a href="ask_an_expert_eway.php"><img src="assets/img/icons/gst/ask_an_expert_bill.png"/> Ask an Expert-E-Way Bill</a></li>
    
    <li <?php if(strpos($path,'gst_e_way_Bill.php')>0){ ?>  class="active" <?php } ?> href="gst_e_way_Bill.php">
    <a href="gst_e_way_Bill.php"><img src="assets/img/icons/gst/e-way_bill.png"/> GST E-way Bill Service</a></li>

    <li><a href="gst_compilance_review.php"><img src="assets/img/icons/gst/gst_review.png"/> GST Compilance Review</a></li>
    <li><a href="ask-an-expert-gst-notice.php"><img src="assets/img/icons/gst/ask_an_expert_bill.png"/> Ask an Expert - GST Notice</a></li>

    <li><a href="gst_cancellation.php"><img src="assets/img/icons/gst/gst_cancellation.png"/> GST Cancellation or Surrender</a></li>
    <li><a href="letter_of_undertaking.php"><img src="assets/img/icons/gst/lut.png"/> Letter of Undertaking(LUT)</a></li>
  
    <li <?php if(strpos($path,'gstr_9_filing.php')>0){ ?>  class="active" <?php } ?> href="gstr_9_filing.php">
     <a href="gstr_9_filing.php"><img src="assets/img/icons/gst/gst9r_filling.png"/> GSTR 9 Filling</a></li>
     
    <li><a href="gst_tax_and_accounting.php"><img src="assets/img/icons/gst/gst_notice.png"/> GST Tax and Accounting</a></li>
</ul>
</div>