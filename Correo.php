<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Process your form data here (e.g., send email)
    // Example:
    $to = "ventas@eclisse.com.mx";
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        // Success: Redirect to thank you page
        header("Location: index.html"); // Replace with your success page
        exit;
      } else {
        // Error: Redirect to error page
        header("Location: contacto.html"); // Replace with your error page
        exit;
      }
}
?>

