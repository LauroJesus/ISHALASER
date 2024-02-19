<?php
//include('../seguridad.php');
session_start();

if(!$_SESSION){
  header("Location:https://proydweb.com/proyectos/2023/Isha/ModoUsuario/FormulariodeLogin/Login.php");
exit();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Carrito</title>
    </head>
    <body>
        <?php include ('barraUsuario.php'); ?>

        <br><br><br><br><br>

        <?php
        function Conectarse()
        {
          if(!$link=mysqli_connect("localhost", "proydweb_p2023", "Dweb_2@23", "proydweb_p2023"))
          {
          die('Error Conectando: ' . mysqli_connect_error());
          exit();
          }
          return $link;
        }

        print_r($_SESSION["carrito_pedido"]);
          if (!isset($_SESSION["autentificacion"])) {
              echo '
                  <div>
                      <p style="display: inline-block;">Favor de Iniciar Sesion</p>
                  </div>
              ';
              return;
          }

          if (!isset($_SESSION["carrito"])) {
            echo '
                <div align="center">
                <a class="img-inf">
                    <img src="https://proydweb.com/proyectos/2023/Isha/ModoUsuario/FormulariodeLogin/Imagenesishalaser1/carritovacio.png" alt="Bootstrap" width="80%" height="80%">
                 </a>
                </div>
            ';
            return;
        }
            
          foreach ($_SESSION["carrito"] as $clave => $valor) {
            
            if(!empty($clave))
            {
              $link = Conectarse();
              $result = mysqli_query($link, "SELECT * FROM letrero where id =" . $clave);
              $row = mysqli_fetch_array($result);
              
          ?>
              <div>
                  <img src='https://proydweb.com/proyectos/2023/Isha/Imagenesishalaser/img-menu/<?php echo $row["imagen"] ?> ' width="250">
                  <?php
                  echo '
                      <p style="display: inline-block;"> Nombre: ' . $row["nombre"] . '</p>
                      <p style="display: inline-block;"> Cantidad: ' . $valor . '</p>
                  </div>';
            }
        }
        
        $result=mysqli_query($link,"select * from pedido");

        while($row = mysqli_fetch_array($result)) {
            
            if(!empty($clave))
            {
              
          ?>
              <!--<div>
                  <?php
                 // echo '
                   //   <p style="display: inline-block;"> Id: ' . $row["id"] . '</p>
                     // <p style="display: inline-block;"> Costo: ' . $row["costo_total"] . '</p>
                  //</div>';
            }
        }

          ?>

    </body>
</html>