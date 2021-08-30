<?php $isContact = 1; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GSTR 9 Filing</title>
  <link rel="stylesheet" href="assets/css/custom.css" />
  <link rel="shortcut icon" href="assets/img/favicon.png" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

  <?php include 'header.php' ?>

  <div class="homebanner">
    <div class="container">

    <div class="onlineTop">
    <h1>GSTR 9 Filing</h1>
    <p class="subTxt">GSTR 9 filing is compulsory for all regular taxpayers under GST. GSTR 9 is consolidated return for the information furnished in monthly/quarterly GST returns during Financial year for every GSTIN
</p>
   
    <?php include 'tab-gst.php' ?>

    </div>
      

      <div class="row">
        <div class="col-md-12">
          
        <div class="boxSec">
            <h3>GSTR 9 Filing - Basic</h3>
            <p class="price">₹ 10,000/-</p>
            <ul>
              <li>GSTR 9 Filing for one GSTIN upto 1000 invoices</li>
              <li>GST 1 and 3B filing is not included in this plan</li>
            </ul>
            <a href="gstr9-basic.php" class="readmore">Read More</a>
            <button class="signBtn">
              <a href="contact.php"><span class="material-icons">shopping_cart</span>Enquire Now </a>
            </button>
        </div>
        
        <div class="boxSec">
            <h3>GSTR 9 Filing - Premium</h3>
            <p class="price">₹ 20,000/-</p>
            <ul>
              <li>GSTR 9 Filing for one GSTIN upto 5000 invoices</li>
              <li>GST 1 and 3B filing is not included in this plan</li>
            </ul>
            <a href="gstr9-premium.php" class="readmore">Read More</a>
            <button class="signBtn">
              <a href="contact.php"><span class="material-icons">shopping_cart</span>Enquire Now </a>
            </button>
        </div>

        <div class="boxSec">
            <h3>GSTR 9 Filing - Topup</h3>
            <p class="price">₹ 5,000/-</p>
            <ul>
              <li>GSTR 9 Filing for one GSTIN upto 3000 invoices (only if a basic or premium plan for GSTR 9 is already purchased from Taxbee)
              </li>
              <li>GST 1 and 3B filing is not included in this plan</li>
            </ul>
            <a href="gstr9-topup.php" class="readmore">Read More</a>
            <button class="signBtn">
              <a href="contact.php"><span class="material-icons">shopping_cart</span>Enquire Now </a>
            </button>
        </div>

      </div>
    </div>

  </div>
  </div>

<?php include 'footer.php' ?>

</body>
</html>