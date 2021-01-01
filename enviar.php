 <?php
//Recibimos los campos del formulario
   $nombre= $_POST["nombre"];
   $email= $_POST["email"];
   $telefono= $_POST["telefono"];
   $mensaje=$_POST["mensaje"];
   $destinatario="raulvallediaz@gmail.com";
   $asunto="Desde la web";


//Acomodamos todo para darle orden al cuerpo del mensaje
//$texto_mensaje="El usuario ".$nombre." dijo: \n".$mensaje." \n
//Puedes contactarlo a su correo: ".$correo;

mail($destinatario,$asunto,$texto_mensaje);
echo "Su mensaje se ha enviado! Nos pondremos en contacto contigo.".$nombre;
?>
