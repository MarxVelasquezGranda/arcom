<?php
 $destino="lompixz@hotmail.com";
 $nombre=$_POST["name"];
 $correo=$_POST["email"];;
 $mensaje=$_POST["message"];
 $contenido="Nombre: ".$nombre."\nCorreo: ".$correo."\nMensaje: ".$mensaje;
 mail($destino,"Contacto", $contenido);
 header("Location: index.html");

?>