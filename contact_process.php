<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "josephkevin04@gmail.com"; // Replace with your email address
    $subject = "New Contact Form Submission from Car Rentals";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for your message. We'll get back to you soon!";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    // If the form was not submitted properly
    echo "Oops! An error occurred. Please try again.";
}
