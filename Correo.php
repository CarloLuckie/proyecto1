<?php
// Enable error reporting (remove for live website)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data (assuming you have fields named name, email, message)
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Define email variables
  $to = "ventas@eclisse.com.mx"; // Replace with your recipient email
  $subject = "New Contact Form Submission";
  $body = "Name: $name\nEmail: $email\nMessage: $message";
  $headers = "From: $email";

  // Send email
  if (mail($to, $subject, $body, $headers)) {
    $message = "Su mensaje ha sido enviado exitosamente. ¡Gracias por contactarnos!";
  } else {
    $message = "Error al enviar el mensaje. Intente nuevamente más tarde.";
  }

  // Set Location header (after processing)
  header("Location: contacto.html?message=" . urlencode($message));
  exit;
}
?>
