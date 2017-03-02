<?php
	$destino = "contacto@edgardobarreto.co";
	$name = $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];
	$contenido = "Nombre: ". $name . "\nCorreo: " . $email . "\nMensaje " . $message; mail($destino,"Contacto", $contenido);
	header("Location:index.html");

?>
