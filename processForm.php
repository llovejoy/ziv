<?php

date_default_timezone_set('America/Chicago');

$name = $_POST['name'];
$subject = $_POST['subject'];
$email = $_POST['email'];
$body = $_POST['body'];

$date = date("F j, Y, g:i a");

$to      = 'cara@boxspringdesign.com';
$headers = 'From: ' . $name . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$message = "Sent from: " . $name . "\n\n" . $body . "\n\n" . "Sent: " . $date;

mail($to, $subject, $message, $headers);
echo "Mailed!";

?>