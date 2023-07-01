<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtener los valores del formulario
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Configurar el destinatario y el asunto del correo electrónico
  $to = 'voxtocontact@gmail.com';
  $subject = 'Mensaje de formulario de contacto';

  // Construir el cuerpo del correo electrónico
  $body = "Correo electrónico: $email\n\n";
  $body .= "Mensaje:\n$message";

  // Configurar los encabezados del correo electrónico
  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";

  // Enviar el correo electrónico
  $mailSent = mail($to, $subject, $body, $headers);

  // Verificar si el correo electrónico se envió exitosamente
  if ($mailSent) {
    echo "El correo electrónico se envió correctamente.";
  } else {
    echo "Hubo un error al enviar el correo electrónico. Verifica la configuración del servidor.";
  }
}
?>
