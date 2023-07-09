<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Construct the email body
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n\n";
    $body .= "Subject: $subject\n\n";
    $body .= "Message:\n$message";

    // Send the email
    $to = "xavierdias078@gmail.com"; // Replace with your email address
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Error sending email.";
    }
}
?>
