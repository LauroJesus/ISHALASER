<html>
<head>
<title>Eliminar</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
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
	$precio = $_POST['precio'];
	$m_ancho = $_POST['m_ancho'];
    $m_largo = $_POST['m_largo'];
    //$seleccionar_imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

    
    mysqli_query($link, "DELETE FROM cliente WHERE id = '$id'") or die(mysqli_error($link));
    



    
    $result=mysqli_query($link,"select * from cliente");
    //mysqli_close($link);
?>
    <TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1 class="table table-danger"> 
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
        <TR class=" table table-warning">
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
<center><a href='../menuadmi.php'><button class='btn btn-primary'>Volver a paguina inicial</button></a> </center>
</body>
</html>