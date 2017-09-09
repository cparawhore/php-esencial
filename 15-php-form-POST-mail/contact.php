<?php

//var_dump($_POST);

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

$to = "marco.milon@gmail.com";
$subject = "Solicitud de información";

$body = "Solicitud de información\n";
$body .= "Nombre: $name\n";
$body .= "Email: $email\n";
$body .= "Teléfono: $phone\n";
$body .= "Mensaje: $message";

mail($to, $subject, $body);

header("Location: gracias.php");

?>
