<?php
$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$telefono = $_POST['telefono'];
$instrumento = $_POST['instrumento'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "telefono : " . $telefono . " \r\n";
$mensaje .= "El instrumento deseado es: " . $_POST['instrumento'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'miguelangeltm@live.com';
$asunto = 'Nuevo correo de academiaviera.co';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.html");
?>