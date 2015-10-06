Aquí el código PHP:
<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$para = 'cafi_jb@hotmail.com';
$titulo = 'DATOS DEL FORMULARIO DE CONTACTO';
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";
if ($_POST['submit']) {
if (mail($para, $titulo, $msjCorreo, $header)) {
echo "<script language='javascript'>
alert('Mensaje enviado, muchas gracias.');
window.location.href = 'http://www.publicity.pe/nuevoformulario/gracias.html';
</script>";
} 
else {
echo 'Falló el envio';
}
}
?>