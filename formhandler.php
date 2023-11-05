<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message =$_POST['message'];

$email_from = 'http://127.0.0.1:5500/contact.html';

$email_subject = 'New From Submission';

$email_body = "User Name: $name.\n".
               "User email: $visitor_email.\n".
               "User subject: $subject.\n".
               "User Message: $message.\n";

$to = 'victorharcourt8@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-TO: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>