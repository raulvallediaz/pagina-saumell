 <?php
$nombre=$POST['nombre'];
$mensaje=$POST['mensaje'];

$destinatario="raulvallediaz@gmail.com";
$asunto="Contacto desde nuestra web";

mail($destinatario, $asunto, utf8_decode($mensaje), $nombre);


?>
