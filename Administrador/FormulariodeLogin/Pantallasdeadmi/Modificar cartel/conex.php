<html> <!-- conex.php -->
<head> <title>Ejemplo PHP función conectarse </title> </head>
<body> 
<?php // Conex.php
function Conectarse()
{
if(!$link=mysqli_connect("localhost", "proydweb_p2023", "Dweb_2@23", "proydweb_p2023"))
{
die('Error Conectando: ' . mysqli_connect_error());
exit();
}
return $link;
}
?>
</body>
</html>