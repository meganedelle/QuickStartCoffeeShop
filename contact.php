<?php

// Replace with your email address
$you = "meganedelle@outlook.com";

// Place HTML input fields into variables
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];

// Validate email address
if (filter_var($email, FILTER_VALIDATE_EMAIL)) { 
    die("Invalid email.");
}

// Build the message to send
$content = "
Name: $name
Email: $email
Message:
$message";

// Build mail headers
$headers = "Reply-to: $email";

// Send the message
mail($you, $you, $subject, $headers);
?>
<p>Your message was sent successfully.</p>
