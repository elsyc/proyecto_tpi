<?php 
//llamando a los campos
$nombre = $_POST['nombre']; //llama input nombre
$direccion = $_POST['direccion'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];
//datos para el correo
$destinatario = "cya.cojinesyaccesorios@gmail.com";
$asunto = "Contacto de nuestra web";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Direccion: $direccion \n";
$carta .= "Mensaje: $mensaje";

//enviando mensaje
mail($destinatario, $asunto, $carta);
header('location:mensaje-de-envio.html')
?>
