<html> 
<head>
</head> 
<body>   
<?php
session_start();

if(isset($_SESSION['nombreadmi']))
{
$usuarioingresado = $_SESSION['nombreadmi'];
echo"<h1>Bienvenidooooo:$usuarioingresado</h1>";
header('location:Pantallasdeadmi/menuadmi.php');
}
else{
    
    header('location: Login.php');
}


if(isset($_POST['btncerrar']))
{
    session_destroy();
    header('location: Login.php');
}

function nombreusuario()
{
    $usuario = $_SESSION['nombreusuario'];
    return $usuario;
}

?>
<form method="post">
    <input type="submit" value="cerrar sesion" name="btncerrar"/>
</form>
</body>
</html>