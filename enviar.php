<?php
// Guardar los datos recibidos en variables:
$name = $_POST['name'];
$email = $_POST['email'];
//$asunto = $_POST['asunto'];
$message = $_POST['message'];
// Definir la dirección de destino:
$dest = "contacto@edgardobarreto.co"; 
 
// Estas son cabeceras que se usan para evitar que el correo llegue a SPAM:
$headers = "From: $name $email\r\n";
$headers .= "X-Mailer: PHP5\n";
$headers .= 'MIME-Version: 1.0' . "\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Aqui definimos el asunto y armamos el cuerpo del mensaje
$cuerpo = "Nombre: ".$name."<br>";
$cuerpo .= "Email: ".$email."<br>";
//$cuerpo .= "Asunto: ".$asunto."<br>";
$cuerpo .= "Mensaje: ".$message;
// Esta es una pequena validación, que solo envie el correo si todas las variables tiene algo de contenido:
if($name != '' && $email != '' &&  $message != ''){
    mail($dest,$cuerpo,$headers); //ENVIAR!
}
?>
