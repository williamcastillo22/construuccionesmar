<?php
// Verificar que la petición sea POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitizar los datos recibidos del formulario
    $nombre = htmlspecialchars(trim($_POST['nombre']));
    $email = htmlspecialchars(trim($_POST['email']));
    $mensaje = htmlspecialchars(trim($_POST['mensaje']));

    // Correo al que se enviará la información
    $destinatario = "mariofhb04@gmail.com"; // ← CAMBIA ESTO por tu correo real
    $asunto = "Nuevo mensaje de contacto desde el sitio web";

    // Crear el contenido del correo
    $contenido = "Has recibido un nuevo mensaje desde el formulario de contacto:\n\n";
    $contenido .= "Nombre: $nombre\n";
    $contenido .= "Correo: $email\n\n";
    $contenido .= "Mensaje:\n$mensaje\n";

    // Cabeceras del correo
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Enviar el correo
    if (mail($destinatario, $asunto, $contenido, $headers)) {
        echo "<script>
                alert('Mensaje enviado correctamente.');
                window.location.href='../html/contacto.html';
              </script>";
    } else {
        echo "<script>
                alert('Error al enviar el mensaje. Intenta nuevamente más tarde.');
                window.location.href='../html/contacto.html';
              </script>";
    }
} else {
    // Redirigir si se intenta acceder sin enviar el formulario
    header("Location: ../html/contacto.html");
    exit;
}
?>
