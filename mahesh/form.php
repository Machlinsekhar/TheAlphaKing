<?php
$name = $_POST['fname']
$email = $_POST['email']
$phone = $_POST['phone']
$venue = $_POST['venue']
$message = $_POST['message']

$email_from = 'info@TheAlphaKing.org'
$email_subject = 'New Customer'
$email_body = "User Name: $name.\n".
              "User Email: $email.\n".
              "User Phone: $phone.\n".
              "Venue: $venue.\n".
              "User Message: $message.\n".;
    $to = 'machlinjeyasekhar@gmail.com';
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $email\r\n";

    mail($to,$email_subject,$email_body,$headers);
    header("Location: contact.html");
?>