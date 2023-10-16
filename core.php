<?php

$miamail = "info@brabeton.site";

$successo = $_POST['successo'];

$nome = $_POST['nome'];

$email = $_POST['email'];

$telefono = $_POST['telefono'];

$oggetto = $_POST['oggetto'];

$msg = $_POST['messaggio'];

$messaggio = "Nombre: " . $nome . "\nEmail: " . $email . "\nAsunto del email: " . $telefono . "\nTeléfono: " . $oggetto . "\nMensaje: " . $msg;

$headers = "From: " . $miamail . "\r\n" . "Reply-To: " . $miamail;

mail($miamail,"Mensaje del sitio",$messaggio,$headers);

header("location: " . $successo);

?>
