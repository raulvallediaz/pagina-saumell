<?php
   $nombre= $_POST["nombre"];
   $email= $_POST["email"];
   $telefono= $_POST["telefono"];
   $mensaje=$_POST["mensaje"];
   $destinatario= "raulvallediaz@gmail.com";

   $contenido= "Nombre: " .$nombre . "\nEmail: " .$email . "\nTelefono: " .$telefono ."\nMensaje: " . $mensaje;

   mail($destinatario,$asunto,$contenido);
   echo "Su mensaje se ha enviado! Nos pondremos en contacto contigo.".$nombre;
?>
