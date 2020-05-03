<?php
$servidor = "localhost";
$usuario= "id13256817_user_saumell";
$clave = "ravadi60";
$database ="id13256817_db_saumell";

$conexion = new mysqli($servidor,$usuario,$clave,$database);
if($conexion -> connect_error){
  die("Problemas:");
}
   echo" conexion ok";
?>