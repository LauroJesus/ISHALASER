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
<H2>Registros Actuales de Letreros</H2>
<body>
<?php 
      include ('../barraUsuario.php');
     ?>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>

<?php 	
		// Vaciar información
    include ("conexx.php");
    $link=Conectarse(); 
   
	$id = $_GET["id"];    
	$texto = $_GET["texto"];
	$letra = $_GET["letra"];
	$m_ancho = $_GET["m_ancho"];
    $m_largo = $_GET["m_largo"];
	$color = $_GET["color"];
    //$seleccionar_imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));


    mysqli_query($link,"insert into 
                        cotizar (id,texto, tipo_letra, medida_largo, medida_ancho, color)
                        values('$id','$texto','$letra','$m_largo','$m_ancho','$color')") or die(mysqli_error($link));
    


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
    
    $result=mysqli_query($link,"select * from cotizar");
    //mysqli_close($link);
?>
    <TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1 class="table table-primary"> 
    <TR>
    <TD><B>id</B></TD>
    <TD><B>Texto</B></TD>
    <TD><B>Tipo-Letra</B></TD>
    <TD><B>Medida-Largo</B></TD>
    <TD><B>Medida-Ancho</B></TD>
    <TD><B>Color</B></TD>
    </TR> 
        <?php
        while($row = mysqli_fetch_array($result)) {
        //$var = "<img src=../../../../Imagenes isha laser/img-menu/".$row['imagen'].">";    
        ?>
        
        <TR>
                <TD><?php echo $row["id"]; ?></TD>
                <TD><?php echo $row["texto"];?></TD>
                <TD><?php echo $row["tipo_letra"];?></TD>
                <TD><?php echo $row["medida_largo"];?></TD>
                <TD><?php echo $row["medida_ancho"];?></TD>
				<TD><?php echo $row["color"];?></TD>
        </TR>
 
        <?php
        }
        mysqli_free_result($result);
        mysqli_close($link);
        ?>
       <script>
        location("menu_principal.php");
       </script>
       <center><a href='https://proydweb.com/proyectos/2023/Isha/ModoUsuario/FormulariodeLogin/Pantallasdeusuario/Crear_cartel/formulario_isha_laser.php'><button class="btn btn-success" align="center">Hacer otra cotizaciones</button></a></center>

</table> 
</body>
</html>




