<html>
<head>
<title>Ejemplo PHP y MySQL inserta en la Base de Datos</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<H2>Registros Actuales de Letreros</H2>
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
    include ('coneex.php');
	 $link = Conectarse();

	//$id = $_GET["id"];    
	//$texto = $_GET["texto"];
	//$letra = $_GET["letra"];
	//$m_ancho = $_GET["m_ancho"];
    //$m_largo = $_GET["m_largo"];
	//$color = $_GET["color"];
    //$seleccionar_imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name'])); 
    

    // Realizar la consulta
    $consulta = "SELECT c.id, c.texto, c.tipo_letra, c.medida_Largo, c.medida_Ancho, c.color, c.costo, cl.nombre as cliente, e.nombre as empleado 
                 FROM cotizar c 
                 JOIN cliente cl ON c.cliente_id = cl.id 
                 JOIN empleado e ON c.empleado_id = e.id ORDER BY cl.id";
    
    $resultado = mysqli_query($link, $consulta);
    
    // Crear la tabla HTML e imprimir los resultados
    echo "<table BORDER=1 CELLSPACING=1 CELLPADDING=1 class='table table-primary'>";
    echo "<tr><th>ID</th><th>Texto</th><th>Tipo de letra</th><th>Medida largo</th><th>Medida ancho</th><th>Color</th><th>Precio</th><th>Cliente</th><th>Empleado</th></tr>";
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";
        echo "<td>" . $fila['id'] . "</td>";
        echo "<td>" . $fila['texto'] . "</td>";
        echo "<td>" . $fila['tipo_letra'] . "</td>";
        echo "<td>" . $fila['medida_Largo'] . "</td>";
        echo "<td>" . $fila['medida_Ancho'] . "</td>";
        echo "<td>" . $fila['color'] . "</td>";
        echo "<td>" . $fila['precio'] . "</td>";
        echo "<td>" . $fila['cliente'] . "</td>";
        echo "<td>" . $fila['empleado'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    
    


mysqli_free_result($result);
mysqli_close($link);

?>

</body>
</html>















