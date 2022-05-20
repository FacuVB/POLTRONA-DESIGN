<?php
    $nombre = $_POST['name'];
    $email = $_POST['email'];
    $mensaje = $_POST['message'];
    
    $destinatario = "testphpmail04@gmail.com";
    $asunto = "Contacto desde Poltrona";
    
    $carta = "De: $nombre \n";
    $carta .= "Correo: $email \n";
    $carta .= "Mensaje: $mensaje";
    
    mail($destinatario, $asunto, $carta);
    
?>
