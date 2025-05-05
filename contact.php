<?php

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $name = htmlspecialchars($_POST['name']);
//     $email = htmlspecialchars($_POST['email']);
//     $message = "You have received a new message from your portfolio contact form.\n\n";
//     $message .= "Name: $name\n";
//     $message .= "Email: $email\n";

//     $to = "paige@paigeworksintech.com"; 
//     $subject = "New Contact Form Submission";
//     $headers = "From: $email";

//     if (mail($to, $subject, $message, $headers)) {
//         echo json_encode(["status" => "success", "message" => "Message sent successfully!"]);
//     } else {
//         echo json_encode(["status" => "error", "message" => "Failed to send the message. Please try again later."]);
//     }
//     exit();
// }
?>