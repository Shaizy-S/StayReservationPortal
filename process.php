<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $userName = $_POST["username"];
    $userEmail = $_POST["email"];

    // Email configuration
    $to = $userEmail;
    $subject = 'Email Verification';
    $message = 'Verification email content goes here. Welcome, ' . $userName . '!';
    $headers = 'From: shasars9@gmail.com';  // Replace with your email address

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo 'Verification email sent! Please check your email.';
    } else {
        echo 'Error sending verification email. Please try again later.';
    }
} else {
    // Redirect or handle other cases as needed
    header("Location: index.html");
    exit();
}

?>
