<?php
//include('../seguridad.php');
session_start();

if(!$_SESSION){
  header("Location:https://proydweb.com/proyectos/2023/Isha/ModoUsuario/FormulariodeLogin/Login.php");
exit();
}


?>
<html>
<head>
<title>Ejemplo PHP y MySQL inserta en la Base de Datos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
<?php
    // Vaciar información
    include '../FormulariodeLogin/Pantallasdeadmi/barraadmi.php';
    
    include ("../../conex.php");
    $link=Conectarse(); 
   
    $n=$_POST['nombre'];
    $ape=$_POST['apellido'];
    $correo=$_POST['correo'];
    $celular=$_POST['celular'];
    $contra=md5($_POST['contra']);

    mysqli_query($link,"insert into 
                        empleado (nombre, apellido, correo_electronico, celular, password)
                        values('$n','$ape','$correo','$celular','$contra')") or die(mysqli_error($link));

    $result=mysqli_query($link,"select * from empleado where celular ='$celular'");

?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <H2>Registro exitoso</H2>
    <TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1 class="table table-primary"> 
    <TR>
    <TD><B>id</B></TD>
    <TD><B>Nombre</B></TD>
    <TD><B>Apellido</B></TD>
    <TD><B>Correo</B></TD>
    <TD><B>Numero de celular</B></TD>

    </TR> 
<?php
    while($row = mysqli_fetch_array($result)) {
?>
        <TR>
            <TD><?php echo $row["id"]; ?></TD>
            <TD><?php echo $row["nombre"];?></TD>
            <TD><?php echo $row["apellido"];?></TD>
            <TD><?php echo $row["correo_electronico"];?></TD>
            <TD><?php echo $row["celular"];?></TD>
    
        </TR>
<?php
    }
    mysqli_free_result($result);
    mysqli_close($link);
?>
    </TABLE>
    <button class="btn btn-success"><a class="navbar-brand" href="https://proydweb.com/proyectos/2023/Isha/Administrador/FormulariodeLogin/Pantallasdeadmi/menuadmi.php"> Regresar al Menu Principal
              </a></button>
</body>
</html>