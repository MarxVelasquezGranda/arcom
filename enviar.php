<?php
 $destino="lompixz@hotmail.com";
 $nombre=$_POST["nombre"];
 $correo=$_POST["correo"];;
 $mensaje=$_POST["mensaje"];
 $contenido="Nombre: ".$nombre."\nCorreo: ".$correo."\nMensaje: ".$mensaje;
 mail($destino,"Contacto", $contenido);
 echo"<script> alert('Correo enviado exitosamente' )</script>";
echo"<script> setTimeout (\"Location.href='index.html'\",1000)</script>";
?>