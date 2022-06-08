<?php

$destino = "constructoradalu1@gmail.com";
$name = $_POST['name'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];
$consult = $_POST['consult'];
$message = $_POST['message'];
$contenido = "name: ".$name.
			 "\nPhone: ".$phone.
			 "\nMail: ".$mail.
			 "\nConsulta: ".$consult.
			 "\nMensaje: ".$message;

mail($destino, "Contacto", $contenido);

header("Location:index.html");

?> 