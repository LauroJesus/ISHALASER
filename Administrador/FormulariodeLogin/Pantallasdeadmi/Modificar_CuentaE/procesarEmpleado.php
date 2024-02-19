<html>
<head>
<title>Procesar Datos</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<H2>Modificar</H2>
<body>
<?php 
     include ('../barraadmi.php'); 
     ?>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>

<?php 	
		// Vaciar información
    include ("../Modificar cartel/conex.php");
    $link=Conectarse(); 
    $id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$correo = $_POST['correo'];
    $celular = $_POST['celular'];
    //$seleccionar_imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

    
    mysqli_query($link, "UPDATE empleado SET nombre = '$nombre', apellido = '$apellido', correo_electronico ='$correo' , celular = '$celular' WHERE id = '$id' ") or die(mysqli_error($link));
    



    
    $result=mysqli_query($link,"select * from empleado where id = $id");
    //mysqli_close($link);
?>
    <TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1 class="table table-warning"> 
    <TR>
    <TD><B>id</B></TD>
    <TD><B>Nombre</B></TD>
    <TD><B>Apellido</B></TD>
    <TD><B>Correo Electronico</B></TD>
    <TD><B>Celular</B></TD>
   
    </TR> 
        <?php
        while($row = mysqli_fetch_array($result)) {
        ?>
        <TR class="table table-info">
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
       
    

</table> 
<center><a href='https://proydweb.com/proyectos/2023/Isha/Administrador/FormulariodeLogin/Pantallasdeadmi/ver_cuentas_E.php'><button class="btn btn-success" align="center">Regresar al menu principal</button></a></center>
</body>
</html>