<?php  
$nombre_form = $_POST['nombre']
$apellido_form = $_POST['apellido']
$correo_form = $_POST['email']
$mensaje_form = $_POST['mensaje']

$cuerpo_mail = "nombre: " .$nombre_form."/r/n"."apellido:" . $apellido_form."/r/n.". "correo electronico:" . "/r/n". "mensaje:" . $mensaje_form:

mail("naranjaspintadas@gmail.com", "mensaje enviado desde nuestro sitio web" , $cuerpo_mail);