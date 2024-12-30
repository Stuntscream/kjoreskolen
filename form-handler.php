<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];

$phone_number = $_POST['phone_number'];
$message = $_POST['message'];
$birth_number = $_POST['birth_number'];

// Valider fødselsnummer (f.eks. at det har 11 siffer)
if (!preg_match("/^[0-9]{11}$/", $birth_number)) {
    die("Ugyldig fødselsnummer. Fødselsnummer må inneholde 11 siffer.");
}

// Valider e-postadresse
if (!filter_var($visitor_email, FILTER_VALIDATE_EMAIL)) {
    die("Ugyldig e-postadresse.");
}

$email_from = $visitor_email;

$email_subject = 'Henvendelse - Form handler';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Fødselsnummer: $birth_number.\n".
              "Telefonnummer: $phone_number.\n".
              "User message: $message .\n";

$to = "kontakt@ower.no";

$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail ($to, $email_subject, $email_body, $headers);

header ("Location: kontakt.html");

?> 
