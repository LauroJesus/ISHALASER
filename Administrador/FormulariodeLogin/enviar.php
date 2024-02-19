<?php

header('Content-Type: text/html; charset=UTF-8');

//datos formulario
//Campos del formulario

$usuario=$_POST['usuario'];
$correo=$_POST['correo'];

// Mensaje en pantalla 
echo "<table align='center' cellpadding='10%' width='30%'><tr><td align='center'>";
echo "Inicio de sesion exitoso <br> Bienvenido: $usuario<br> $correo <br>"; 
echo "</td></tr><tr><td align='center'>";
echo '<input type = "button" value = "Regresar" onclick="history.go(-1)"></td></tr></table>';
echo "<a align='center' href='../../Modo administrador/paaginaprincipalAd.html'>Ingresar a modo administrador</a>";
 
?>
