<?php 

if(!isset($_SESSION)) {
    session_start();
}
if(!isset($_SESSION['cc'])) {
    session_unset();
    session_destroy();
    header("location: index.php");
    die;
}
?>

<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Cell Central - Top Cellphone and SIM rental in Los Angeles</title>
        <meta name="description" content="The #1 cellphone and SIM rental in Los Angeles, California">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Hind|Dosis" rel="stylesheet">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <script src="https://www.paypalobjects.com/api/checkout.js"></script>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/materialize.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>  
    </head>
    <body>
    	<div class="container"> 
<?php

    require_once("functions.php");

    db_connect();

    $bookingNumber = uniqId('', true);
    $bookingDate = date("Y-m-d H:i:s");
    $city = db_quote($_POST['city']);
    $simCount = db_escape_string($_POST['simCount']);
    $simPlan = 29.99; ///-- static for now 
    $phone1Box = db_quote($_POST['phone1Box']);
    $phone2Box = db_quote($_POST['phone2Box']);
    $phone3Box = db_quote($_POST['phone3Box']);
    $phone4Box = db_quote($_POST['phone4Box']);
    $phone5Box = db_quote($_POST['phone5Box']);
    $phone1Group = db_quote($_POST['phone1Group']);
    $phone2Group = db_quote($_POST['phone2Group']);
    $phone3Group = db_quote($_POST['phone3Group']);
    $phone4Group = db_quote($_POST['phone4Group']);
    $phone5Group = db_quote($_POST['phone5Group']);
    $rentDate = db_quote($_POST['rentDate']);
    $returnDate = db_quote($_POST['returnDate']);
    $email = db_quote($_POST['email']); 
    $firstName = db_quote($_POST['firstName']);
    $lastName = db_quote($_POST['lastName']);
    $nationality = db_quote($_POST['nationality']);
    $address1 = db_quote($_POST['address1']);
    $address2 = db_quote($_POST['address2']);
    $cityMail = db_quote($_POST['cityMail']);
    $stateMail = db_quote($_POST['stateMail']);
    $zipcodeMail = db_quote($_POST['zipcodeMail']);
    $countryMail = db_quote($_POST['countryMail']);
    $iosCount = 0;
    $androidCount = 0;
    $subTotal = 0;
    $rentDays = 0;
    $cCount = 0;

    if($phone1Box === "'on'") { 
        if($phone1Group === "'iphoneSelect'") { $iosCount++; }
        else { $androidCount++; }
    }
    $cCount++;
    if($cCount < $simCount && $phone2Box === "'on'") { 
        if($phone2Group === "'iphoneSelect'") { $iosCount++; }
        else { $androidCount++; }
    }
    $cCount++;
    if($cCount < $simCount && $phone3Box === "'on'") { 
        if($phone3Group === "'iphoneSelect'") { $iosCount++; }
        else { $androidCount++; }
    }
    $cCount++;
    if($cCount < $simCount && $phone4Box === "'on'") { 
        if($phone4Group === "'iphoneSelect'") { $iosCount++; }
        else { $androidCount++; }
    }
    $cCount++;
    if($cCount < $simCount && $phone5Box === "'on'") { 
        if($phone5Group === "'iphoneSelect'") { $iosCount++; }
        else { $androidCount++; }
    }

    $rentDate = $_POST['rentDate'];
    $returnDate = $_POST['returnDate'];

    $rentDateTime = DateTime::createFromFormat('Y-m-d', $rentDate);
    $returnDateTime = DateTime::createFromFormat('Y-m-d', $returnDate);

    $rentDays = $rentDateTime->diff($returnDateTime)->format("%a") + 1; // +1 inclusive of 1st rent day

    $subTotal = calculateEstimate($simCount, $iosCount, $androidCount, $rentDays);

    ///-- LAST HERE
    // Insert the values into the database
    $query = "INSERT INTO client (booking_number,booking_date,city,sim_count,sim_plan,ios_count,android_count,rent_date,return_date,email,first_name,last_name,nationality,address1,address2,city_mail,state_mail,zipcode_mail,country_mail,sub_total,rent_days) VALUES ('" . $bookingNumber . "','" . $bookingDate . "'," . $city . "," . $simCount . "," . $simPlan . "," . $iosCount . "," . $androidCount . "," . $rentDate . "," . $returnDate . "," . $email . "," . $firstName . "," . $lastName . "," . $nationality . "," . $address1 . "," . $address2 . "," . $cityMail . "," . $stateMail . "," . $zipcodeMail . "," . $countryMail . "," . $subTotal . "," . $rentDays . ")";
    
    $result = db_query($query);
    if($result === false) {
        // Handle failure - log the error, notify administrator, etc.
        $error = db_error();
    }

    //-- temp or perm?
    sleep(2);

    session_unset();
    session_destroy();

    if(!isset($error)) {
    	$textBuyButton = makeBuyButton($subTotal, "GET IT!");
    	echo $textBuyButton;
    }
    else {
        echo "<script> alert('We apologize but there seems to be an issue. Please try to book again. If the issue presists please call or email us at support@cellcentral.com'); </script>"; ///-- finalize email
        header("location: index.php");
        die;
    }
?>
</div>
<!-- footer -->
        <div class="footer z-depth-1">
            <div class="footer-icons">
                <!-- <i class="ion-social-facebook"></i>
                <i class="ion-social-pinterest"></i>
                <i class="ion-social-instagram"></i>
                <i class="ion-social-linkedin"></i>
                <i class="ion-social-googleplus"></i>
                <i class="ion-social-twitter"></i>
                <i class="ion-social-github"></i> -->
            </div>
            <div class="copyrights">
            <p>Copyrights &copy 2017. All rights reserved.</p>
            </div>
        </div>
        <!-- end of footer -->

        <!--script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script-->
        <script src="js/plugins.js"></script>
        <script src="js/vendor/materialize.min.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>