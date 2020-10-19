<?php
$contactname = $_POST['contact-name'];
$contactemail = $_POST['contact-email'];
$contactmessage = $_POST['contact-message'];

$contactcontent="From: $contactname \n Email: $contactemail \n Message: $contactmessage";

$to = "info@thenextexec.org";
$contactfrom = "info@thenextexec.org"

$contactsubject = "Contact Form";
$mailheader = "From: $email \r\n";
$headers = "From: $contactfrom \r\n";

mail($to, $subject, $formcontent, $mailheader) or die("Something went wrong :(");
header("Location: ../../index.html")
echo "Thank You! We will get back to you shortly :)" . " -" . "<a href='../../contact.html' style='text-decoration:none;'> Return to TNE</a>";
?>
