<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$subject =$_POST['subject'];
$formcontent=" From: $name \n $email \n Phone: $phone \n $message";
$recipient = "boonhouseschool@gmail.com";
$mailheader = "From: $email \r\n";

mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You For Contacting Us. We'll get back to you shortly!" . " -" . "<a href='index.html' style='text-decoration:none;color:#ff0099;'> Home</a>";
?>
