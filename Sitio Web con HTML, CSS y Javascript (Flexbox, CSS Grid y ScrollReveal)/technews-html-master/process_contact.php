<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Recibir los datos del formulario
  $name = htmlspecialchars($_POST['name']);
  $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
  $message = htmlspecialchars($_POST['message']);

  // Validar los datos (opcional)
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Correo electrónico inválido.";
    exit;
  }

  // Enviar correo electrónico
  $to = "break7801@gmail.com"; // Reemplaza con tu correo
  $subject = "Nuevo mensaje de contacto";
  $body = "Nombre: $name\nCorreo: $email\nMensaje:\n$message";
  $headers = "From: $email";

  if (mail($to, $subject, $body, $headers)) {
    echo "Mensaje enviado correctamente.";
  } else {
    echo "Hubo un error al enviar el mensaje.";
  }
}
?>