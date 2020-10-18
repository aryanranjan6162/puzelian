<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message \n Email: $email";
$mailTo = "techtip6162@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($mailTo, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>