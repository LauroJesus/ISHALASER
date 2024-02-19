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
    $precio = '0';
    $id_usuario = $_SESSION['id_usuario'];
    $fecha_cotizacion = date("Y-m-d H:i:s");;
    //$seleccionar_imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

    $consulta = "SELECT * FROM empleado WHERE id = '36'";
    $resultado = mysqli_query($link, $consulta);
    $datos_empleado = mysqli_fetch_assoc($resultado);
    $_SESSION['id_empleado'] = $datos_empleado['id'];
    $id_empleado = $_SESSION['id_empleado'];


    mysqli_query($link,"insert into 
                        cotizar (texto, tipo_letra, medida_Largo,medida_Ancho,color,costo,fecha_cotizacion,cliente_id,empleado_id)
                        values('$texto','$letra','$m_largo','$m_ancho','$color','$precio','$fecha_cotizacion','$id_usuario','$id_empleado')") or die(mysqli_error($link));
    


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
    
    $result=mysqli_query($link,"select * from cotizar where cliente_id = '$id_usuario'");
    //mysqli_close($link);
?>
    <TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1 class="table table-primary"> 
    <TR>
    <TD><B>id</B></TD>
    <TD><B>Texto</B></TD>
    <TD><B>Tipo-Letra</B></TD>
    <TD><B>Medida-Largo (CM)</B></TD>
    <TD><B>Medida-Ancho(CM)</B></TD>
    <TD><B>Color</B></TD>
    <TD><B>Fecha</B></TD>
    <TD><B>Estado de cotizacion</B></TD>
    </TR> 
        <?php
        while($row = mysqli_fetch_array($result)) {
        //$var = "<img src=../../../../Imagenes isha laser/img-menu/".$row['imagen'].">";    
        ?>
        
        <TR>
                <TD><?php echo $row["id"]; ?></TD>
                <TD><?php echo $row["texto"];?></TD>
                <TD><?php echo $row["tipo_letra"];?></TD>
                <TD><?php echo $row["medida_Largo"];?></TD>
                <TD><?php echo $row["medida_Ancho"];?></TD>
				<TD><?php echo $row["color"];?></TD>
                <TD><?php echo $row["fecha_cotizacion"];?></TD>
                <TD><?php if($row["costo"] > 0 ){

                                          echo $row["costo"];
                                          echo "<button class='btn btn-warning'>Comprar</button>";
                                          echo "<button class='btn btn-warning'>No me interesa</button>";
                            }else{
                                       echo "pendiente";
                                 }
                                        ?></TD>
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




