<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form se data fetch karna
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $city = htmlspecialchars($_POST['city']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Jisme email bhejni hai
    $to = "sjeet7252@gmail.com"; // Yahan apna email daalain (Apna email replace karein)
    
    // Email ka subject
    $email_subject = "New Contact Form Message: $subject";

    // Email ka content
    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Phone: $phone\n";
    $email_body .= "City: $city\n\n";
    $email_body .= "Message:\n$message\n";

    // Headers (sender details)
    $headers = "From: dmbatchone@gmail.com\r\n"; // Apne domain ka email use karein
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Debugging ke liye error display
    ini_set("display_errors", 1);
    error_reporting(E_ALL);

    // Email bhejne ka function
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "<script>alert('Your message has been sent successfully!'); window.location.href='thank-you.html';</script>";
    } else {
        echo "<script>alert('Message sending failed! Please check your server mail configuration.'); window.history.back();</script>";
    }
}
?>
