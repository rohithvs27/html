<?php
    $isContact = 1;
    require('phpmail/class.phpmailer.php');
    require('phpmail/class.smtp.php');
    $flag = 0;
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['content']) && $_POST['name'] != '' && $_POST['email'] != '' && $_POST['phone'] != '' && $_POST['content'] != '')
    {
//        echo '<pre>';
//        print_r($_POST);
//        exit();
        $name    = isset($_POST['name'])    && trim($_POST['name'])!=''    ? trim($_POST['name'])    : null;
        $email   = isset($_POST['email'])   && trim($_POST['email'])!=''   ? trim($_POST['email'])   : null;
        $phone   = isset($_POST['phone'])   && trim($_POST['phone'])!=''   ? trim($_POST['phone'])   : null;
        $message = isset($_POST['content']) && trim($_POST['content'])!='' ? trim($_POST['content']) : null;

        $msg = '<html><body>';
        $msg .= '<table style="border-collapse: collapse;" cellpadding="10">';
        $msg .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . $name . "</td></tr>";
        $msg .= "<tr style='background: #eee;'><td><strong>Email:</strong> </td><td>" . $email . "</td></tr>";
        $msg .= "<tr style='background: #eee;'><td><strong>Phone:</strong> </td><td>" . $phone . "</td></tr>";
        $msg .= "<tr style='background: #eee; width: 15%;'><td><strong>Message:</strong> </td><td>" . $message . "</td></tr>";
        $msg .= "</table>";
        $msg .= "</body></html>";

        $subject = "Web Enquiry - Taxbee";
        // $to = "helpdesk@taxbee.in";
        $to = "elakkiya@themaestro.in";

        $mail_obj = new PHPMailer();
        $mail_obj->IsSMTP();
        $mail_obj->CharSet = 'UTF-8';
        $mail_obj->Host = "ssl://smtp.gmail.com";
        $mail_obj->SMTPAuth= true;
        $mail_obj->Port = 465; // 587 or 465
        $mail_obj->Username= 'donotreply@taxbee.in';
        $mail_obj->Password= 'ebifivsfaiteomca';
        $mail_obj->SMTPSecure = 'ssl';
        $mail_obj->isHTML(true);
        $mail_obj->FromName = 'Web Enquiry - Taxbee';
        $mail_obj->Subject = $subject;
        $mail_obj->Body = $msg;


        $mail_obj->addAddress($to);
        if($mail_obj->send())
        {
            $flag = 1;
            echo '<script>swal("","Thank you for your mail. We will respond to you shortly.", "success");</script>';
        }
        else
        {
            $flag = 2;
            $res = "Mailer Error: " . $mail_obj->ErrorInfo;
            echo '<script>swal("Oops","Something went wrong.", "error");</script>';
            return $res;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Taxbee</title>
    <meta name="keywords"
        content="Incorporate your business, Legal Compliances, Trademark Regsitration, Run a Startup, File Income Tax Returns, Digital Signature, GST Services, Miscellaneous Services, Government Registrations">
    <meta name="description"
        content="We work in an exclusively concerted model across the firm and throughout all levels of the client organization, fuelled by the goal of serving our clients flourish and enabling them to make better business decisions." />
    <link rel="canonical" href="https://taxbee.in/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title"
        content="Taxbee | Consulting Business, Risk and Goverance, IT Counsulting, Due Diligence & Valuation, Audit and Tax" />
    <meta property="og:description"
        content="We are India’s innovative Tax and Financial Services Software Platform for Individuals, Tax Experts, SMEs and Enterprises with Income Tax Returns, GST, Billing Solutions and more" />
    <meta property="og:url" content="https://taxbee.in/" />
    <meta property="og:site_name"
        content="Taxbee is an innovative platform in Business Consulting to provide end to end support to client" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description"
        content="We are India’s innovative Tax and Financial Services Software Platform for Individuals, Tax Experts, SMEs and Enterprises with Income Tax Returns, GST, Billing Solutions and more" />
    <meta name="twitter:title"
        content="Taxbee | Consulting Business, Risk and Goverance, IT Counsulting, Due Diligence & Valuation, Audit and Tax" />
    <meta name="twitter:image" content="https://taxbee.in/assets/img/favicon.png" />
    
    <link rel="stylesheet" href="assets/css/custom.css" />
    <link rel="shortcut icon" href="assets/img/favicon.png" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://www.google.com/recaptcha/api.js?render=6Ldbt_UbAAAAAAqfebZ_rr7GT066LZRWD0da2_ir"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>

    <?php include 'header.php' ?>

    <div class="homebanner">
        <div class="container">

            <div class="onlineTop">
                <h1>Get In Touch</h1>
                <p class="subTxt">Easiest way to manage your Tax & Compliances</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    
                    <div class="address-line">
                        <h4>Registered Office</h4>
                        <img src="assets/img/location.svg" alt="">
                        <p> 38/1, K.O.N Theatre Road, B. Komarapalayam Namakkal (Dist) - 638 183</p>
                    </div>

                    <div class="address-line smalltxt">
                        <h4>Coimbatore Branch</h4>
                        <img src="assets/img/location.svg" alt="">
                        <p>1G, Saisruthi Complex, No.3, Ramarkoil Street, Ramnagar, Coimbatore - 641 009</p>
                    </div>
                    <div class="address-line smalltxt">
                        <h4>Tirupur Branch</h4>
                        <img src="assets/img/location.svg" alt="">
                        <p>Room No.12, First Floor, 27, Subbu Complex, Ramnagar 1st St, Tirupur - 641 602</p>
                    </div>

                    <div class="address-line smalltxt">
                        <h4>Salem Branch</h4>
                        <img src="assets/img/location.svg" alt="">
                        <p>153, Dhayanandan street, Alagapuram, Salem - 636 004</p>
                    </div>

                    <div class="address-line smalltxt">
                        <h4>Erode Branch</h4>
                        <img src="assets/img/location.svg" alt="">
                        <p>No. 3/4, Buddhar Street, Near Karnataka bank, Teachers Colony, Erode - 638 011</p>
                    </div>

                    <div class="address-line">
                        <h4>Need Support</h4>
                        <img src="assets/img/mail.png" alt="">
                        <p><a href="mailto:coimbatore@taxbee.in">helpdesk@taxbee.in</a></p>
                        <div>
                            <img src="assets/img/phone.png" alt="">
                            <p>+91 86 86 09 09 63</p>
                        </div>
                    </div>

                </div>

            <div class="col-md-6">
                <div class="form-container">
                    <form action="contact.php" class="contactForm" method="POST">
                        <label for="name">Name</label>
                        <input type="text" placeholder="Enter your name" name="name" required>
                        <label for="mail">Email</label>
                        <input type="mail" placeholder="Enter your email" name="email" required>
                        <label for="phone">Phone Number</label>
                        <input type="text" placeholder="Enter your phone number" name="phone" required>
                        <label for="message">Message</label>
                        <textarea name="content" id="" cols="30" rows="6" placeholder="Enter your message here"
                            required></textarea>
                        <div>
                            <input type="submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
    </div>

    <?php include 'footer.php' ?>

</body>
</html>

<?php if($flag == 1) { ?>
    <script>swal("Success","Thank you for your mail. We will respond to you shortly.", "success");</script>
<?php } else if($flag == 2) { ?>
    <script>swal("Oops","Something went wrong.", "error");</script>
<?php } ?>
