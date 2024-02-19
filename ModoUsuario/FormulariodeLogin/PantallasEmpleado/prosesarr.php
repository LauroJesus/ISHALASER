<html>
<head>
<title>Procesar Datos</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<H2>Modificar</H2>
<body>
<?php 
     include ('barraempleado.php'); 
     ?>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>

<?php 	
		// Vaciar información
    include ("coneex.php");
    $link=Conectarse(); 
    $id = $_POST['id'];
	$nombre = $_POST['texto'];
	$p = $_POST['tipo_letra'];
    $costo = $_POST['costo'];
	$a = $_POST['medida_Largo'];
    $l = $_POST['medida_Ancho'];
    //$seleccionar_imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

    
    mysqli_query($link, "UPDATE cotizar SET costo = '$costo'  WHERE id = '$id' ") or die(mysqli_error($link));
    



    
    $result=mysqli_query($link,"select * from cotizar where id = $id");
    //mysqli_close($link);
?>
    <TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1 class="table table-warning"> 
    <TR>
    <TD><B>id</B></TD>
    <TD><B>Texto</B></TD>
    <TD><B>Tipo de letra</B></TD>
    <TD><B>Medida Largo (cm)</B></TD>
    <TD><B>Medida Ancho (cm)</B></TD>
    <TD><B>Color</B></TD>
    <TD><B>Costo</B></TD>
    <TD><B>Fecha de cotizacion</B></TD>
   
    </TR> 
        <?php
        while($row = mysqli_fetch_array($result)) {
        ?>
        <TR class="table table-info">
                <TD><?php echo $row["id"]; ?></TD>
                <TD><?php echo $row["texto"];?></TD>
                <TD><?php echo $row["tipo_letra"];?></TD>
                <TD><?php echo $row["medida_Largo"];?></TD>
                <TD><?php echo $row["medida_Ancho"];?></TD>
                <TD><?php echo $row["color"];?></TD>
                <TD><?php echo $row["costo"];?></TD>
                <TD><?php echo $row["fecha_cotizacion"];?></TD>

        </TR>
 
        <?php
        }
        mysqli_free_result($result);
        mysqli_close($link);
        ?>
       
    

</table> 
<center><a href='menuempleado.php'><button class="btn btn-success" align="center">Regresar al menu principal</button></a></center>
</body>
</html>