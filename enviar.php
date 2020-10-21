<?php
    $destinatarios = 'lineaunityge@gmail.com';
    // esto es correo destinatario
    $consulta = $_POST['consulta'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $contenido ="Nombre: " . $nombre . "\nCorreo: " . $email . "\nConsulta: " . $consulta;

    $header = "Enviado desde Unity web";
    $mensajeCompleto = $mensaje . "/nAtentamente: " . $nombre;

    mail($destinatario, $asunto, $mensajeCompleto, $header);
    echo "<scrip>alert('correo enviado exitosamente')</script>";
    echo "<scrip> setTimeout(\"location.href='index.html'\",1000)</script>";
?>
