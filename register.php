<?php

$email = $_POST['email'];
$password = $_POST['password'];

// Create a mail object.
$mail = new PHPMailer();

// Set the sender and recipient addresses.
$mail->setFrom('shaikhiqra2020@gmail.com');
$mail->addAddress($email);

// Set the subject and body of the email.
$mail->Subject = 'Welcome to [Your Website Name]';
$mail->Body = "
Hi [User Name],

Thank you for registering for an account on [Your Website Name]. Your account has been created successfully.

To log in to your account, please click on the following link:

[Login Link]

Please keep your password safe and do not share it with anyone.

We hope you enjoy using [Your Website Name]!

Sincerely,
[Your Website Name] Team
";

// Send the email.
$mail->send();

?>
