<?php

$nombre = $_POST["name"];
$email = $_POST["email"];
$mensaje = $_POST["textarea"];

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje = "Su e-mail es: " . $email . " \r\n";
$mensaje = "El mensaje es: " . $_POST["mensaje"] . " \r\n";
$mensaje = "Enviado el " . date('d/m/y', time());

$para = "lihueel.m@hotmail.com";
$asunto = "Este mail fue enviado desde Portfolio ";

mail($para, $asunto, utf_decode($mensaje),$header);
header("Location:index.html");

?>