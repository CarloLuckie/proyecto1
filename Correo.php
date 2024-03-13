<?php
$response = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "ventas@eclisse.com.mx";
    $subject = "New Contact Form Submission from $name";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        $response = "¡Gracias! Su mensaje ha sido enviado exitosamente.";
    } else {
        $response = "¡Ops! Hubo un problema al enviar su mensaje. Inténtelo de nuevo más tarde.";
    }
}
?>
