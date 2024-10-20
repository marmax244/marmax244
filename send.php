<?php
// Recipient
$to = marmax247@gmail.com

// Sender
$senderEmail = marydean247@gmail.com
$senderName = Mar max

// Subject
$subject = Changing of payroll account

// Message
$message = i want to change my payroll account

// Headers
$headers = 'From: ' . $senderName . ' <' . $senderEmail . '>' . "\r\n" .
           'Reply-To: ' . $senderEmail . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

// Send email
if (mail($to, $subject, $message, $headers)) {
    echo 'Email sent successfully!';
} else {
    echo 'Email sending failed.';
}
?>
