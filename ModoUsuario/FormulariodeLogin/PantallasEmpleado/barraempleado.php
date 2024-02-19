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
session_start();
$_SESSION['nombreusuario'];
$usuarioingresado = $_SESSION['nombreusuario'];
echo "hola:$usuarioingresado"
?>
    <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-light bg-light fixed-top">
        <nav class="navbar bg-body-tertiary">
            <div class="container">
              <a class="navbar-brand" href="#">
                <img src="https://proydweb.com/proyectos/2023/Isha/Imagenesishalaser/isha.png" alt="Bootstrap" width="40" height="34">&nbspISHA LASER
              </a>
            </div>
          </nav>
        <div class="container-fluid" style="background-color: #B533FF;">
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="https://proydweb.com/proyectos/2023/Isha/ModoUsuario/FormulariodeLogin/PantallasEmpleado/menuEMPLEADO.php"><b>&nbsp&nbsp&nbsp&nbsp Menu Principal</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://proydweb.com/proyectos/2023/Isha/ModoUsuario/FormulariodeLogin/PantallasEmpleado/vercotizaciones.php"><b>&nbsp&nbsp&nbsp&nbsp Ver cotizaciones</b></a>
              </li>
          
              <!--<li class="nav-item">
                <a class="nav-link" href="https://proydweb.com/proyectos/2023/Isha/ModoUsuario/FormulariodeLogin/Pantallasdeusuario/FormulariodeContacto/index.php"><b>&nbsp&nbsp&nbsp&nbspContacto</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><b>&nbsp&nbsp&nbsp&nbspOfertas</b></a>
              </li>-->
            
              <li class="nav-item">
                <a class="nav-link" ><form method="POST">
                <input type="submit" value="cerrar sesion" name="btncerrar"/>
                </form>
                <?php
                if(isset($_POST['btncerrar']))
                {
                    session_destroy();
                    header('location: https://proydweb.com/proyectos/2023/Isha/index.php');
                }
                ?>
                </a>
              </li>
            </ul>
          </div>
        </div>
        
       
         
      
      </nav>
</body> 
</html>
