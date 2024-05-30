<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'edva-rd95@hotmail.com';

$email_subject = 'Testing av formhandler';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $subject.\n".
              "User message: $message .\n";


$to = "Edvard-aasum95@hotmail.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail ($to,$email_subject,$email_body,$headers);

header ("Location: kontakt.html");

?>