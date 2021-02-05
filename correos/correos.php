<?php
$destinatario = 'magdielitamar2@gmail.com';

$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];
$email=$_POST['email'];
$Telefono=$_POST['Telefono'];
$Mensaje=$_POST['Mensaje'];

$header = "Enviado desde la pagina ManStyle";
$mensajeCompleto = $mensaje."\nAtentamente: ". $Nombre;

$Enviar=mail($destinatario, $mensajeCompleto,$header);
if ($Enviar)
echo 'Email enviado correctamente';
else
echo 'Error en el envío del email';
?>

