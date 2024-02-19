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
    include ("conex.php");
    $link=Conectarse(); 
    $id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$p = $_POST['precio'];
	$a = $_POST['m_ancho'];
    $l = $_POST['m_largo'];
    //$seleccionar_imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

    
    mysqli_query($link, "UPDATE letrero SET nombre = '$nombre', precio = '$p', medida_ancho = '$a', medida_largo ='$l'  WHERE id = '$id' ") or die(mysqli_error($link));
    



    
    $result=mysqli_query($link,"select * from letrero where id = $id");
    //mysqli_close($link);
?>
    <TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1 class="table table-warning"> 
    <TR>
    <TD><B>id</B></TD>
    <TD><B>Nombre</B></TD>
    <TD><B>Precio</B></TD>
    <TD><B>Medida Ancho (cm)</B></TD>
    <TD><B>Medida Largo (cm)</B></TD>
   
    </TR> 
        <?php
        while($row = mysqli_fetch_array($result)) {
        ?>
        <TR class="table table-info">
                <TD><?php echo $row["id"]; ?></TD>
                <TD><?php echo $row["nombre"];?></TD>
                <TD><?php echo $row["precio"];?></TD>
                <TD><?php echo $row["medida_ancho"];?></TD>
                <TD><?php echo $row["medida_largo"];?></TD>

        </TR>
 
        <?php
        }
        mysqli_free_result($result);
        mysqli_close($link);
        ?>
       
    

</table> 
<center><a href='../menuadmi.php'><button class="btn btn-success" align="center">Regresar al menu principal</button></a></center>
</body>
</html>