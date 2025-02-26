<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];

    $to = "dariusstroman@gmail.com"; // Your email address
    $subject = "New Contact Form Submission";
    $body = "Name: $firstName $lastName\nEmail: $email\nNumber: $number\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?> 