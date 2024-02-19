<?php
//include('../seguridad.php');
session_start();

if(!$_SESSION){
  header("Location:https://proydweb.com/proyectos/2023/Isha/ModoUsuario/FormulariodeLogin/Login.php");
exit();
}
?>
<html> <!-- barra.html -->
<head>
<meta charset="UTF-8">
<title>Isha laser</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
     <?php
     include ('barraUsuario.php');
     ?>


    <br>
    <br>
    <br>
    <br>
    <br>



</body>
</html>
