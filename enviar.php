<?php
	$destino="ALAsociadosDesign@gmail.com";
	$nombre=$_POST["nombre"];
	$correo=$_POST["email"];
	$telefono=$_POST["celular"];
	$mensaje=$_POST["mensage"];
	$contenido="Nombre: ". $nombre . "\nCorreo: " .$correo . "\nTel�fono: " .$telefono . "\nMensaje: " .$mensaje;
	mail($destino,"Contacto",$contenido);
	header("Location:index.php");

?>