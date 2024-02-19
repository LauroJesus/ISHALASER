<?php

header('Content-Type: text/html; charset=UTF-8');

//datos formulario
//Campos del formulario
$correo=$_POST['correo'];
$p1=md5($_POST['contrasenia']);

include ("conex.php");
$link=Conectarse();



if($correo =='administrador@gmail.com')
{
    $result1 = mysqli_query($link,"SELECT count(*) FROM empleado WHERE correo_electronico = '$correo' AND password = '$p1'");

    $row1 = mysqli_fetch_array($result1);

    if($row1[0] > 0){
        session_start();
        $_SESSION["autentificacion"] = "SI";
        header('Location: ./../../Administrador/FormulariodeLogin/Pantallasdeadmi/menuadmi.php');

    }
    else{
        header('Location: https://proydweb.com/proyectos/2023/Isha/ModoUsuario/FormulariodeLogin/Login.php');
    }
}
else
{
    $result = mysqli_query($link,"SELECT count(*) FROM cliente WHERE correo_electronico = '$correo' AND password = '$p1'");
    $row = mysqli_fetch_array($result);
    //consulta para verificar que haya mas de un empleado
    $result2 = mysqli_query($link,"SELECT count(*) FROM empleado WHERE correo_electronico = '$correo' AND password = '$p1'");

    $row2 = mysqli_fetch_array($result2);

    if($row[0] > 0){
        session_start();
        $consulta = "SELECT * FROM cliente WHERE correo_electronico = '$correo'";
        $resultado = mysqli_query($link, $consulta);
        $datos_cliente = mysqli_fetch_assoc($resultado);
        $_SESSION['id_usuario'] = $datos_cliente['id'];
        $_SESSION['nombre_usuario'] = $datos_cliente['nombre'];
        $_SESSION["autentificacion"] = "SI";
        header('Location: Pantallasdeusuario/menuusuario.php');

    }else{
    if($row2[0] > 0){
        session_start();
        $_SESSION["autentificacion"] = "SI";
        header('Location: PantallasEmpleado/menuempleado.php');

    }else{
        header('Location: https://proydweb.com/proyectos/2023/Isha/ModoUsuario/FormulariodeLogin/Login.php');
    }
    }
}
?>
