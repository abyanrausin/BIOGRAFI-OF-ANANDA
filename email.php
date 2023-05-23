<?php
if(isset($_POST['submit'])) {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Set the recipient email address
    $to = "anandabyan1703@gmail.com";

    // Set the email subject
    $subject = "New Contact Form Submission";

    // Build the email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message";

    // Set the email headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if(mail($to, $subject, $email_content, $headers)) {
        echo "Thank you for contacting us. We will get back to you shortly.";
    } else {
        echo "An error occurred while sending your message. Please try again later.";
    }
}
?><?php
if(isset($_POST['submit'])) {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Set the recipient email address
    $to = "khidrghazally1110@gmail.com";

    // Set the email subject
    $subject = "New Contact Form Submission";

    // Build the email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message";

    // Set the email headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if(mail($to, $subject, $email_content, $headers)) {
        echo "Thank you for contacting us. We will get back to you shortly.";
    } else {
        echo "An error occurred while sending your message. Please try again later.";
    }
}
?>