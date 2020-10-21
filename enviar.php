<?php
    $destinatarios = 'lineaunityge@gmail.com';
    // esto es correo destinatario
    $consulta = $_POST['consulta'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $contenido ="Nombre: " . $nombre . "\nCorreo: " . $email . "\nConsulta: " . $consulta;
    mail($destino,"Contacto", $contenido);
    header("Location:index2.html");
?>