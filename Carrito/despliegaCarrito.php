<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Carrito</title>
    </head>
    <body>
        <?php include ('../menu.php'); ?>

        <br><br><br><br><br>

        <?php
        
          if(!isset($_SESSION["carrito"]))
            {
                echo '
                <div align="center">
                <a class="img-inf">
                    <img src="https://proydweb.com/proyectos/2023/Isha/Imagenesishalaser/carritosesion.png" alt="Bootstrap" width="80%" height="80%">
                </a>
                </div>
                ';
                return;
            }
            
           /* foreach ($_SESSION["carrito"] as $value)
            {
                echo '
                <div>
                    <img src = "https://proydweb.com/proyectos/2023/Isha/Imagenesishalaser/images.png" alt="Bootstrap" width="40" height="34">
                    <p style = "display: inline-block;" >Esto es un ejemplo XD</p>
                </div>';
            }*/
            echo $_SESSION["carrito"];
        ?>

        



        




    </body>
</html>