<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Dirección de correo a la que se enviará el mensaje
    $to = "samueluqueastorga@gmail.com";
    $subject = "New Contact Form Submission";

    // Cuerpo del mensaje
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message: \n$message\n";

    // Cabeceras del correo
    $headers = "From: $email";

    // Enviar el correo
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully.";
    } else {
        echo "Message sending failed.";
    }
}
?>
