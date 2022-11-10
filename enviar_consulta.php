<?php  
$nombre_form = $_POST['nombre'];
$apellido_form = $_POST['apellido'];
$correo_form = $_POST['email'];
$mensaje_form = $_POST['mensaje'];

$cuerpo_mail = "nombre: " .$nombre_form."/r/n"."apellido:" . $apellido_form."/r/n.". "correo electronico:".$correo_form . "/r/n". "mensaje:" . $mensaje_form;

mail("naranjaspintadas@gmail.com", "mensaje enviado desde nuestro sitio web" , $cuerpo_mail);

$conexion = mysql_connect("localhost", "id19706749_cosme","T}!K]NM*[75ij8","id19706749_consultas") or exit("error en la conexion en la base de datos");

mysql_query($conexion,"INSER INTO consultas VALUES (DEFAULT,'$nombre_form' , '$apellido_form','$correo_form','$mensaje_form')");

header("location: contacto.php?e");