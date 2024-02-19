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
  $id_pedido = $_GET["id_pedido"];
$costo = $_GET["costo"];

// Eliminar el registro de la base de datos
$sql = "DELETE FROM pedido WHERE id = $id_pedido ";
if(mysqli_query($link, $sql)){
  echo "ok";
} else{
  echo "error";
}

// Cerrar la conexión a la base de datos
mysqli_close($link);
?>
  ?>
</body>
</html>