<html> <! llama.php>
<head> <title>Ejemplo PHP llamado a función Conectarse</title> 
</head>
<body> 
<?php // llama.php
include "conex.php";
$link=Conectarse(); 
if($link)
{ echo "Conexión con la Base de Datos Conseguida.<br>";
 mysqli_close($link); //Cierra la conexión
}
?>
</body>
</html>