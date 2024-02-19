<html>
<head>
<title>Ejemplo PHP y MySQL inserta en la Base de Datos</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<H2>Registros Actuales de Letreros</H2>
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
   
	$nombre = $_POST['nombre'];
	$precio = $_POST['precio'];
	$m_ancho = $_POST['m_ancho'];
    $m_largo = $_POST['m_largo'];
    //$seleccionar_imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    $target_path = '../../../../Imagenesishalaser/img-menu/';
    $archivo =  $_FILES['imagen']['name'];
    $target_path = $target_path.basename($_FILES['imagen']['name']);

    if(!move_uploaded_file($_FILES['imagen']['tmp_name'],$target_path))
    {
       
        print("no se pudo subir el articulo");
        header('location:formularioagregar_cartel.php');
    }

    mysqli_query($link,"insert into 
                        letrero (nombre, precio, medida_ancho, medida_largo, imagen)
                        values('$nombre','$precio','$m_ancho','$m_largo','$archivo')") or die(mysqli_error($link));
    


        //echo "El nombre del cartel es:  $nombre \n";
        //echo "<br><br>";
        //echo "El precio del cartel es$: $precio\n";
        //echo "<br><br>";
        //echo "La medida en ancho(cm)es : $m_ancho\n";
        //echo "<br><br>";
        //echo "La medida en largo (cm) es: $m_largo\n";
        //echo "<br><br>";
        //echo "La imagen seleccionda es: $seleccionar_imagen\n";
        //echo "<br><br>";
        //echo "Se agrego exitosamente a la pagina web\n";
        //echo "<br><br>";
        //echo "<a href='formularioagregar_cartel.php'>Regresar</a>";
    
    $result=mysqli_query($link,"select * from letrero");
    //mysqli_close($link);
?>
    <TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1 class="table table-primary"> 
    <TR>
    <TD><B>id</B></TD>
    <TD><B>Nombre</B></TD>
    <TD><B>Precio</B></TD>
    <TD><B>M_ancho</B></TD>
    <TD><B>M_largo</B></TD>
    <TD><B>Imagen</B></TD>
    </TR> 
        <?php
        while($row = mysqli_fetch_array($result)) {
        //$var = "<img src=../../../../Imagenes isha laser/img-menu/".$row['imagen'].">";    
        ?>
        
        <TR>
                <TD><?php echo $row["id"]; ?></TD>
                <TD><?php echo $row["nombre"];?></TD>
                <TD><?php echo $row["precio"];?></TD>
                <TD><?php echo $row["medida_ancho"];?></TD>
                <TD><?php echo $row["medida_largo"];?></TD>
                <TD><img src='https://proydweb.com/proyectos/2023/Isha/Imagenesishalaser/img-menu/<?php echo $row['imagen']?>'  width="200"></TD>
        </TR>
 
        <?php
        }
        mysqli_free_result($result);
        mysqli_close($link);
        ?>
       <script>
        location("menu_principal.php");
       </script>
       <center><a href='../menuadmi.php'><button class="btn btn-success" align="center">Ver cartel añadido en Menu Principal</button></a></center>


</table> 
</body>
</html>