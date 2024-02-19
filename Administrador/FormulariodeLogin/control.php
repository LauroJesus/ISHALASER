<?php

header('Content-Type: text/html; charset=UTF-8');

//datos formulario
//Campos del formulario
$correo=$_POST['correo'];
$p1=md5($_POST['contrasenia']);

session_start();
if(isset($_SESSION['nombreadmi']))
{
    header('location:pagina.php');
}

include ("/conex.php");
$link=Conectarse();

$result = mysqli_query($link,"SELECT count(*) FROM empleado WHERE correo_electronico = '$correo' AND password = '$p1'");

$row = mysqli_fetch_array($result);



if(!isset($_SESSION['nombreusuario']))
{
if($row[0] > 0){

    $_SESSION["nombreadmi"] = $correo;
    $_SESSION["autentificado"] = "SI";
    header('Location: pagina.php');

}
else{
    header('Location: Login.php');
}
}
?>