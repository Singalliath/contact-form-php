<?php
$to_email = "receipient@gmail.com";
$subject = "Simple Email Test via PHP";
$body = "Hi,Clayton Harris This is test email sent by PHP Script";
$headers = "From: sender\'s email";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}