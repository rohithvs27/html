<?php $isContact = 1; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GST Registration</title>
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
    <h1>GST Registration</h1>
    <p class="subTxt">Priced at Only Rs 1499, this plan will help your business adapt to GST implementation and cater to all compliance and registration requirements along with expert advisory. </p>
   
    <?php include 'tab-gst.php' ?>

    </div>
      

      <div class="row">
        <div class="col-md-12">

        <div class="boxSec">
            <h3>Goods And Services Tax (GST) Registration Pro</h3>
            <p class="price">₹ 1499/- Original <span>₹ 1,999</span> (25% OFF)</p>

            <ul>
              <li>Filing of applicable Amendment form</li>
              <li>Receipt of GST Identification Number (GSTIN)</li>
            </ul>
            <a href="goods_and_service_pro.php" class="readmore">Read More</a>
            <button class="signBtn">
              <a href="contact.php"><span class="material-icons">shopping_cart</span>Enquire Now </a>
            </button>
          </div>
          <!-- <div class="boxSec">
            <h3>Goods And Services Tax (GST) Registration</h3>
            <p class="price">₹ 1499/- Original <span>₹ 1,999</span> (25.01% OFF)</p>
            <ul>
              <li>Filing of Registration Application</li>
              <li>Receipt of GST Identification Number (GSTIN)</li>
            </ul>
            <a href="goods_and_service.php" class="readmore">Read More</a>
            <button class="signBtn">
              <a href="contact.php"><span class="material-icons">shopping_cart</span>Enquire Now </a>
            </button>
          </div> -->

          <div class="boxSec">
            <h3>Amendment of Goods And Services Tax (GST) Registration</h3>
            <p class="price">₹ 999/-</p>

            <ul>
              <li>Filing of applicable Amendment form</li>
              <li>Modify details in the GST Portal</li>
            </ul>
            <a href="goods_and_service_amendment.php" class="readmore">Read More</a>
            <button class="signBtn">
              <a href="contact.php"><span class="material-icons">shopping_cart</span>Enquire Now </a>
            </button>
           </div>
        </div>

     


      </div>
    </div>
  </div>

  </div>

<?php include 'footer.php' ?>

</body>
</html>