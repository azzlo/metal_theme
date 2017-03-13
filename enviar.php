<?php
$destino= "cruzrodriguezpedroj@gmial.com";
$nombre= $_Post["Nombre"];
$correo= $_Post["Correo"];
$telefono= $_Post["Telefono"];
$mensaje= $_Post["Mensaje"];
$contenido= "Nombre:" . $nombre . "\nCorreo:" . $correo . "\nTelefono:" . $telefono . "\nMensaje:" . $mensaje;
mail($destino,"Contacto", $contenido);
header("Location:http://localhost/wordpress/?page_id=63")

 ?>
