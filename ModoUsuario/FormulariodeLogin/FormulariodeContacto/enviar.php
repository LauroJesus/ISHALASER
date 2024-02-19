<?php

header('Content-Type: text/html; charset=UTF-8');

//Campos del formulario
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$mensaje=$_POST['mensaje'];

//Datos de mensaje y cotizacion a correo de la compania
$destinatario = "yarelielizeth.delgado@upaep.edu.mx";
$asunto = "Contacto via web";
$texto="De: $nombre \n ";
$texto.="Correo: $correo \n";
$texto.="Telefono: $telefono \n";
$texto.="Mensaje: $mensaje \n";

//Envio mensaje
//mail($destinatario, $asunto , $texto);


// Mensaje en pantalla 
include ('../../../menu.php'); 
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
echo "<table align='center' cellpadding='10%' width='30%'><tr><td align='center'>";
echo "Los siguientes datos de tu formulario se enviaron correctamente: $nombre <br> $telefono <br> $correo <br> $mensaje <br>"; 
echo "</td></tr><tr><td align='center'>";
echo '<input type = "button" value = "Regresar" onclick="history.go(-1)"></td></tr></table>';


?>
