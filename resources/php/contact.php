<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "info@thenextexec.org";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You! We will get back to you shortly :)" . " -" . "<a href='../../contact.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
