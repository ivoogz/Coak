<?php


$destinatario = 'ivan.gomez01@davinci.edu.ar'; 



$nombre = $_POST['Nombre'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
$email = $_POST['email'];



$header = "enviado desde la pagina web";
$mensajeCompleto = $mensaje . " atentamente " . $nombre;

mail($destinatario, $asunto, $mensajeCompleto, $header);
echo "<script>alert('correo enviado exitosamente')</script>";
echo "<script>setTimeout(\"location.href='index.html'\",1000)</script>";


?>