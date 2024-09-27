<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'ower@ower.no';

$email_subject = 'Testing av formhandler';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $subject.\n".
              "User message: $message .\n";


$to = "kontakt@ower.no";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail ($to,$email_subject,$email_body,$headers);

header ("Location: kontakt.html");

?>