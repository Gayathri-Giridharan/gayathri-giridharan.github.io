<?php
$to = "recipient@example.com";
$subject = "Test email";
$message = "This is a test email sent using PHP mail() function.";
$headers = "From: your-email@gmail.com";

if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully";
} else {
    echo "Failed to send email";
}
?>
