<?php
if(isset($_POST['enviar'])) {
  $para = 'cavannaprogramacion@gmail.com';
  $nombre= $_POST['nombre'];
  $telefono= $_POST['telefono'];
  $correo= $_POST['correo'] .
  $asunto = $_POST['asunto'];
  $mensaje = $_POST['mensaje'];
  mail($para, $asunto, $mensaje, $correo);
}
?>

