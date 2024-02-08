<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["cname"];
    $email = $_POST["cemail"];
    $message = $_POST["cmessage"];

    $to = "your_email@example.com"; // Replace with your email address
    $subject = "New Contact Form Submission";
    $headers = "From: $name <$email>";

    // Construct the email body
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message";

    // Send the email
    mail($to, $subject, $body, $headers);
}
?>

