<?php
$to = "rmg.tour.transport@gmail.com";
$subject =  "[CELLCOMCENTRAL] " . $_REQUEST['subject'] . "[" . $_REQUEST['bookingNumber'] . "]";

$message = $_REQUEST['ccname'] . "[" . $_REQUEST['email'] . "/" . $_REQUEST['telephone'] . "] - " . $_REQUEST['ccmessage']; ///-- make HTML format

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <contact.us@cellcomcentral.com>' . "\r\n";

mail($to,$subject,$message,$headers);

echo "Your concern has been sent. Thank you for choosing Cellcom Central!";
?>

