<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $receiving_email = 'your_email@example.com'; // Replace with your email address
    $subject = $_POST['subject'];
    $message = "Name: {$_POST['name']}\n";
    $message .= "Email: {$_POST['email']}\n";
    $message .= "Message:\n{$_POST['message']}\n";

    $headers = "From: {$_POST['email']}";

    if (mail($receiving_email, $subject, $message, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Message sending failed.";
    }
}
?>
