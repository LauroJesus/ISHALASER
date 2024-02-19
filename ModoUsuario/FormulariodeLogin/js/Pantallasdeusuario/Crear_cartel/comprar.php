<html>
<head>
<title>Procesar Datos</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<H2>Modificar</H2>
<body>
<?php 
  include ('../barraUsuario.php');
  include ("conexx.php");
  $link=Conectarse(); 
     ?>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>

<?php 	
		// Vaciar información

        $costo = $_GET["costo"];
        $id_cotizar = $_GET["id_pedido"];
        $fecha_p = date("Y-m-d");

        $_SESSION["carrito_pedido"][$id] = $costo;
    //$seleccionar_imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    //$delete = mysqli_query($link, "delete from cotizar where id = '$id'") or die(mysqli_error($link));
    //echo $delete;
    $result2 = mysqli_query($link,"DELETE FROM cotizar WHERE id = $id_cotizar ");
  mysqli_query($link, "insert into pedido  ( costo_total,fecha_pedido)values('$costo','$fecha_p')") or die(mysqli_error($link));
    

$result = mysqli_query($link, "SELECT * FROM pedido");
    //mysqli_close($link);
?>
    <TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1 class="table table-striped table-info"> 
    <TR>
    <TD><B>id-Pedido</B></TD>
    <TD><B>Costo</B></TD>
    <TD><B>Fecha de pedido</B></TD>
   
    </TR> 
        <?php
        while($row = mysqli_fetch_array($result)) {
        ?>
        <TR class="table table-info">
        <TD><?php echo $row["id"]; ?></TD>
				<TD><?php echo $row["costo_total"];?></TD>
				<TD><?php echo $row["fecha_pedido"];?></TD>


        </TR>
 
        <?php
        }
        mysqli_free_result($result);
        mysqli_close($link);
        ?>
       
    

</table> 
<center><a href='https://proydweb.com/proyectos/2023/Isha/ModoUsuario/FormulariodeLogin/Pantallasdeusuario/Crear_cartel/formulario_isha_laser.php'><button class="btn btn-success" align="center">Hacer mas compras sobre tus cotizaciones</button></a></center>
</body>
</html>