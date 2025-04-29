<?php
// filepath: /Users/paigeballard/Desktop/Traversy/portfolios/mainPortfolio/contact.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = "You have received a new message from your portfolio contact form.\n\n";
    $message .= "Name: $name\n";
    $message .= "Email: $email\n";

    $to = "paige@paigeworksintech.com"; // Replace with your email address
    $subject = "New Contact Form Submission";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send the message. Please try again later.";
    }
}
?>