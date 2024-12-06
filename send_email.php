<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "adnan.farook.shaikh@georgebrown.ca"; // Recipient's email address
    $subject = "New message from: " . $name;
    $body = "You have received a new message from your website contact form.\n\n".
            "Name: " . $name . "\n".
            "Email: " . $email . "\n\n".
            "Message:\n" . $message;
    
    // Additional headers
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "There was a problem sending your message. Please try again later.";
    }
}
?>
